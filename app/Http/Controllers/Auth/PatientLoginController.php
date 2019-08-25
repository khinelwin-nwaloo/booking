<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Patient;
use App\Department;
use App\Doctor;
use App\Appointment;
use Session;
use Auth;
class PatientLoginController extends Controller
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
    protected $redirectTo = 'patient/history';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:patient,patient/history')->except('logout');
    }

    public function redirectTo()
    {
        return 'patient/history';
    }

    protected function guard()
    {
        return \Auth::guard('patient');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function login(Request $request){

        $email = $request->get('email');

        $password = $request->get('password');

        $patient= Patient::where('email','=',$email)->where('role_id',3)->first();

        if($patient){
            $old_password =Crypt::Decrypt($patient->password);
            if($password == $old_password){
                Session::put('user', $patient);
                return redirect('/home')->with('success', 'You are successfully logged in!');
            }else{
                return redirect('/patient_login')->with('fail', 'Invalid Email and Password!');
            }

        }else{
            return redirect('/patient_login')->with('fail', 'Invalid Email and Password!');
        }

    }

}
