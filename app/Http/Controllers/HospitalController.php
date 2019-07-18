<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\Patient;
use App\Appointment;
use App\Department;
class HospitalController extends Controller
{

    public function home()
    {   
        $departments = Department::limit(5)->get();
        return view('home',compact('departments'));
    }
    public function about()
    {
        return view('about');
    }
    public function service()
    {
        return view('service');
    }
    public function doctor()
    {   
        $doctors = Doctor::get();
        $departments = Department::get();
        return view('doctor',compact('doctors','departments'));
    }
    public function department()
    {   
        $departments = Department::get();
        return view('department',compact('departments'));
    }
        public function contact()
    {
        return view('contact');
    }

    public function dashboard()
    {

        $patient_count = Patient::count();
        $doctor_count = Doctor::count();
        $appointment_total = Appointment::count();


        $now = date('Y-m-d', strtotime(\Carbon\Carbon::now()->toDateString()));
        $today_appontent = Appointment::whereDate('created_at','=',$now)->count();

        return view('dashboard',compact('patient_count','doctor_count',
            'appointment_total','today_appontent'));
    }
}
