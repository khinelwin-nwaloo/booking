<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\Department;
use App\Duty;
use App\Appointment;
use Session;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_doctor(Request $request,$id)
    {   
        $department = Department::find($id);
        $doctors = Doctor::where('department_id',$id)->get();
        return view('departments.doctors',compact('doctors','department'));
    }

    
}
