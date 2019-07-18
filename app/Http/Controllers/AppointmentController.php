<?php

namespace App\Http\Controllers;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Appointment;
use App\Department;
use App\Doctor;
use App\Duty;
use Session;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $now = Carbon::now()->toDateString();
        $finish_appoint = array();
        $user = Session::get('user');  //For Admin
        if($user->role_id == 1){
            $appointments = Appointment::whereIn('status',[0,1])
            ->whereDate('appointment_date','>',$now)
            ->orderBy('created_at','asc')->paginate(15);

           // return $appointments;
            $finish_appoint = Appointment::where('status',2)
            ->orderBy('created_at','desc')->paginate(15);

        }
        if($user->role_id == 2){  //For Doctor
            $appointments = Appointment::whereIn('status',[1,2,3])
            ->where('doctor_id',$user->id)
            ->where('appointment_date','>',$now)
            ->orderBy('updated_at','desc')->paginate(15);
        }
        return view('appointments.index',compact('appointments','user','finish_appoint'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $user = Session::get('user');
      $departments = Department::get();
      return view('appointments.create',compact('departments','user'));
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
            'department_id'=>'required',
            'doctor_id'=> 'required',
            'duties'=> 'required',
            'appointment_date' => 'required'
        ]);


        $doctor_id = $request->get('doctor_id');
        $date = date_create($request->get('appointment_date'));
        $appointment_date = date_format($date,"Y-m-d");
        $appoint_count = Appointment::where('doctor_id',$doctor_id)
        ->where('appointment_date',$appointment_date)->count();

        if($appoint_count < 1){
            $department_id = $request->get('department_id');
            $patient_id = $request->get('patient_id');
            $appointment_time = $request->get('duties');
            $reason = $request->get('reason');
            $remark = $request->get('remark');

            $appointment = new Appointment();
            $appointment->department_id = $department_id;
            $appointment->doctor_id = $doctor_id;
            $appointment->appointment_date = $appointment_date;
            $appointment->appointment_time = $appointment_time;
            $appointment->reason = $reason;
            $appointment->remarks = $remark;
            $appointment->patient_id = $patient_id;
            //$appointment->deleted_at = 0000-00-00 00:00:00;

            $appointment->save();
            return redirect('/patient/history')->with('success', 'Appointment has been added');
        }else{
            return redirect('/appointments/create')->with('fail', 'Appointment is already full');
            
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {

        if($request->role_id == 1) //Admin
        {

            if($appointment->status == 2){
                $appointment->status = 3;
                $appointment->save();
            }else{
                $appointment->status = 1;
                $appointment->save();
            }

            return redirect('/appointments')->with('success','Admin has been approved');
        }
        else if($request->role_id == 2)  //doctor
        {
          $appointment->status = 2;
          $appointment->save();
          return redirect('/appointments')->with('success','Dotor has been approved');
      }
      

  }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $appoint = Appointment::find($id);

      $appoint->delete();
      return redirect('/appointments')->with('success','Appointment has been canceled');
  }

  public  function get_department(Request $request){

    $department_id = $request->id;
    $doctor = Doctor::where('department_id',$department_id)->get();
    return response()->json($doctor);

}

public  function get_duties(Request $request){

    $doctor_id = $request->id;
    $duties = Duty::where('doctor_id',$doctor_id)->get();
    return response()->json($duties);

}
}
