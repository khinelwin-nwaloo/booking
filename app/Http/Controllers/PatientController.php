<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Patient;
use App\Department;
use App\Doctor;
use App\Appointment;
use Session;
    class PatientController extends Controller
    {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function show_login(){

        return view('patient.patient_login');
    }
    public function login(Request $request){

        $email = $request->get('email');

        $password = $request->get('password');

        $patient= Patient::where('email','=',$email)->where('role_id',3)->first();

        if($patient){
            $old_password =Crypt::Decrypt($patient->password);
            if($password == $old_password){
                Session::put('user', $patient);
                return redirect('/patient/history')->with('success', 'You are successfully logged in!');
            }else{
                return redirect('/login')->with('fail', 'Invalid Email and Password!');
            }

        }else{
            return redirect('/login')->with('fail', 'Invalid Email and Password!');
        }

    }

    public function History(){

        $user = Session::get('user');

        $appointments = Appointment::where('patient_id',$user->id)->whereIn('status',[0,2,3])
        ->orderBy('updated_at','desc')->get();

        return view('patient.history',compact('appointments','user'));

    }
    public function register()
    {
        $departments = Department::get();
        $doctors = Doctor::get();
        return view('patient.register',compact('departments','doctors'));
    }
    public function index()
    {
        $now = Carbon::now()->toDateTimeString();
        $patients_id = Appointment::groupBy('patient_id')->select('patient_id')->get();
       
        $patients = Patient::whereIn('id',$patients_id)->get();

        return view('patient.index',compact('patients'));
    }

    public function appointments(){

        $session = Session::get('login');
        $patient_id = $session->id;
        $appointments = Appointment::where('patient_id',$patient_id)->get();
        return $appointments;
    }
    public function getDoctor()
    {
        $doctors = Doctor::get();
        return view('patient.all_doctor',compact('doctors'));
    }   

    public function store(Request $request){

        $request->validate([
            'name'=>'required',
            'gender' => 'required',
            'age' => 'required',
            'email' =>'required|email|unique:patients',
            'address' => 'required',
            'phone_number' => 'required',
            'password' => 'required|string|min:8|confirmed|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/',
        ]);

        $patient = new Patient();
        $patient->name = $request->get('name');
        $patient->gender=$request->get('gender');
        $patient->age=$request->get('age');
        $patient->phone= $request->get('phone_number');
        $patient->email=$request->get('email');
        $patient->password= Crypt::encrypt($request->password);
        $patient->member= 'new';
        $patient->address= $request->get('address');
        $patient->role_id= 3;
        $patient->save();

        return redirect("/login")->with('success', 'Patient has been registered Successfully');
    }

    public function Logout(Request $request)
    {
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect('/home');
    }
}
