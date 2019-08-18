<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;
use App\Doctor;
use App\Department;
use App\Duty;
use App\Appointment;
use Session;
class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::get();
        return view('doctors.index',compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::get();
        $login = Session::get('user');
        return view('doctors.create',compact('departments','login'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name'=>'required',
            'degree'=> 'required',
            'gender' => 'required',
            'dob' => 'required',
            'email' =>'required|email|unique:doctors',
            'address' => 'required',
            'phone_number' => 'required',
            'password' => 'required|min:6|confirmed',
            'department_id' => 'required'
        ]);

        $doctor = new Doctor();
        $doctor->name = $request->get('name');
        $doctor->degree= $request->get('degree');
        $doctor->admin_id = $request->get('admin_id');
        $doctor->role_id= $request->get('role_id');
        $doctor->gender=$request->get('gender');
        $doctor->dob=$request->get('dob');
        $doctor->phone= $request->get('phone_number');
        $doctor->email=$request->get('email');
        $doctor->password= Crypt::encrypt($request->input('password'));
        $doctor->address= $request->get('address');
        $doctor->department_id= $request->get('department_id');
        $doctor->save();

        $name = $request->get('name');
        $email = $request->get('email');
        $doctor = Doctor::where('name',$name)
                ->where('email',$email)->first();

        $doctor_iD = $doctor->id;

        $duty = new Duty();
        $duty->doctor_id = $doctor_iD;
        $duty->mon_s = $request->get('monday_start');
        $duty->mon_e = $request->get('monday_end');
        $duty->tue_s = $request->get('tueday_start');
        $duty->tue_e = $request->get('tueday_end');
        $duty->wed_s = $request->get('wednesday_start');
        $duty->wed_e = $request->get('wednesda_end');
        $duty->thu_s = $request->get('thursday_start');
        $duty->thu_e = $request->get('thursday_end');
        $duty->fri_s = $request->get('friday_start');
        $duty->fri_e = $request->get('friday_end');
        $duty->sat_s = $request->get('saturday_start');
        $duty->sat_e = $request->get('saturday_end');
        $duty->sun_s = $request->get('sunday_start');
        $duty->sun_e = $request->get('sunday_end');

        $duty->save();
        return redirect('/doctors')->with('success', 'Doctor has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $doctor = Doctor::find($id);
        return view('doctors.show',compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor_info = Doctor::find($id);
        $departments = Department::get();
        return view('doctors.edit',compact('doctor_info','departments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Doctor $doctor)
    {

    if ($request->has('password')) {
        $this->validate($request, [
         'password' => 'required|min:6|confirmed',
        ]);

        $doc = Doctor::find($doctor->id);

        if($doc){
            $pw = Crypt::decrypt($doc->password);
            $old_pw = $request->old_password;
            if($old_pw == $pw){
                $doctor->password = Crypt::encrypt($request->password);
            $doctor->save();
            return redirect('/Admin_Login')->with('success', 'Password has been changed successfully, Please Login again!');
            }else{
                return redirect('/doctors/'.$doc['id'].'/edit')->with('fail', 'Old Password is wrong, Please try again!');
            }
        }else{

        }
        return $old_pw;

    }else {

        $this->validate($request, [
            'name'=>'required',
            'degree'=> 'required',
            'gender' => 'required',
            /* 'email' =>'required|email',*/
            'email' => 'required|email|unique:doctors,email,' . $doctor->id,
            'address' => 'required',
            'phone_number' => 'required',
            'department_id' => 'required',
        ]);
    }            
    if ($request->has('password')) {
        $doctor->password = Crypt::encrypt($request->password);
        $doctor->save();
        return redirect('/Admin_Login')->with('success', 'Password has been changed successfully, Please Login again!');
    }
    else{
        $doctor->name = $request->get('name');
        $doctor->admin_id = $request->get('admin_id');
        $doctor->role_id= $request->get('role_id');
        $doctor->degree= $request->get('degree');
        $doctor->gender=$request->get('gender');
        $doctor->dob=$request->get('dob');
        $doctor->phone= $request->get('phone_number');
        $doctor->email=$request->get('email');
        $doctor->address= $request->get('address');
        $doctor->department_id= $request->get('department_id');
        $doctor->save();
        return redirect('/doctors')->with('success', 'Doctor has been updated');
    }

}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {

        $doctor->delete();
        return redirect('/doctors')->with('success','Doctor has been deleted successfully');
    }

    public function history_patient()
    {
        $user = Session::get('user');
        $doctor_id = $user->id;
        $his_patient = Appointment::where('doctor_id',$doctor_id)
        ->whereIn('status',[2,3])
        ->orderBy('created_at')->get();
        return view('doctors.history_patients',compact('his_patient'));
    }

    public function remark(Request $request,$id){
        $patient_id = $id;
        $appointment = Appointment::find($patient_id);

        return view('doctors.doctor_remark',compact('appointment'));
    }
    public function save_remark(Request $request){
        
        $app_id = $request->get('app_id');
        $doc_remark = $request->get('doc_remark');
        $retake = $request->get('retake');
        
        if($retake){
            $retake= 1;
        }else{
            $retake= 0; 
        }
        $appointment = Appointment::find($app_id);
        $appointment->doctor_remarks = $doc_remark;
        $appointment->retake = $retake;
        $appointment->save();

        $user = Session::get('user');
        $doctor_id = $user->id;
        $his_patient = Appointment::where('doctor_id',$doctor_id)
        ->whereIn('status',[2,3])
        ->orderBy('created_at')->get();
        return view('doctors.history_patients',compact('his_patient'));

    }
    

}
