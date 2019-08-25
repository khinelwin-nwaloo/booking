<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Role;
use App\Admin;
use App\Doctor;
use Session;
use Auth;
class Admin_LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'admin/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin,admin/home')->except('logout');
    }

    public function redirectTo()
    {
        return 'admin/home';
    }

    protected function guard()
    {
        return \Auth::guard('admin');
    }

    public function showLoginForm()
    {
        $roles = Role::where('id','!=','3')->get();
        return view('auth.adminlogin',compact('roles'));
    }
    public  function Login(Request $request ){

        $role       = $request->get('role');
        $email      = $request->get('email');
        $password   =$request->get('password');

        if($role == '1'){
            $admin= Admin::where('email','=',$email)->where('role_id',$role)->first();
            if($admin){
                $old_password = Crypt::decrypt($admin->password);
                if($old_password == $password ){
                    Session::put('user', $admin);
                    return redirect('/dashboard')->with('success', 'You are successfully logged in!');
                }else{
                    return redirect('/admin/login')->with('fail', 'Invalid Email and Password!');
                }
            }
            return redirect('/admin/login')->with('fail', 'Invalid Email and Password!');
        }else{

            $doctor= Doctor::where('email','=',$email)->where('role_id',$role)->first();
            if($doctor){
                $old_password = Crypt::decrypt($doctor->password);
                if($old_password == $password ){
                    Session::put('user', $doctor);
                    return redirect('/doctors/'.$doctor->id)->with('success', 'You are successfully logged in!');
                }else{
                    return redirect('/admin/login')->with('fail', 'Invalid Email and Password!');
                }
            }
            return redirect('/admin/login')->with('fail', 'Invalid Email and Password!');
        }
    }

}
