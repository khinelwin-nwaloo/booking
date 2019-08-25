<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Role;
use App\Admin;
use App\Doctor;
use Session;
use Auth;
class AdminLoginController extends Controller
{   
    use AuthenticatesUsers;

    public  function adminlogin(){

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
                    return redirect('/Admin_Login')->with('fail', 'Invalid Email and Password!');
                }
            }
            return redirect('/Admin_Login')->with('fail', 'Invalid Email and Password!');
        }else{

            $doctor= Doctor::where('email','=',$email)->where('role_id',$role)->first();
            if($doctor){
                $old_password = Crypt::decrypt($doctor->password);
                if($old_password == $password ){
                    Session::put('user', $doctor);
                    return redirect('/doctors/'.$doctor->id)->with('success', 'You are successfully logged in!');
                }else{
                    return redirect('/Admin_Login')->with('fail', 'Invalid Email and Password!');
                }
            }
            return redirect('/Admin_Login')->with('fail', 'Invalid Email and Password!');
        }
    }
    protected function guard()
    {
        return \Auth::guard('admin');
    }

    public function Logout(Request $request)
    {
      $request->session()->flush();
      $request->session()->regenerate();
      return redirect('/Admin_Login');
  }
}