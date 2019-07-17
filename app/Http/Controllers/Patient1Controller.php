<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Doctor;
class PatientController extends Controller
{
    public function register()
    {
    	
        return view('patient.register',compact('patient'));
    }
     public function index()
    {

    	$patients = User::get();
    	
        return view('patient.index',compact('patients'));
    }

    public function getDoctor()
    {
    	$doctors = Doctor::get();
    	return view('patient.all_doctor',compact('doctors'));
    }	

    public function create(Request $request){

    	$this->validate($request, [
        'name' => 'required',
        'email' => 'required',
        'gender' => 'required',
        'phone' => 'required',
        'age' => 'required',
        'address' => 'required',
        'password' => 'required|min:6|confirmed',
    ]);
    		return "ok";
    }
}
