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
        
        $duty_time = array();
        $doctor_dutytime = array();
        for($i = 0 ; $i <count($doctors); $i++) {
            $duty = Duty::where('doctor_id',$doctors[$i]['id'])->first();
                
                if($duty->mon_s){
                     $duty_time[0]['duty_time'] =   'Monday:&nbsp&nbsp'.$duty->mon_s .' - '.$duty->mon_e ;
                }
                if($duty->tue_s){
                     $duty_time[1]['duty_time'] =   'Tueday:&nbsp&nbsp'.$duty->tue_s .' - '.$duty->tue_e ;
                }
                if($duty->wed_s){
                     $duty_time[2]['duty_time'] =   'Wednesday:&nbsp&nbsp'.$duty->wed_s .' - '.$duty->wed_e ;
                }
                if($duty->thu_s){
                     $duty_time[3]['duty_time'] =   'Thursday:&nbsp&nbsp'.$duty->thu_s .' - '.$duty->thu_e ;
                }
                if($duty->fri_s){
                     $duty_time[4]['duty_time'] =   'Friday:&nbsp&nbsp'.$duty->fri_s .' - '.$duty->fri_e ;
                }
                if($duty->sat_s){
                     $duty_time[5]['duty_time'] =   'Saturday:&nbsp&nbsp'.$duty->sat_s .' - '.$duty->sat_e ;
                }
                if($duty->sun_s){
                     $duty_time[6]['duty_time'] =   'Sunday:&nbsp&nbsp'.$duty->sun_s .' - '.$duty->sun_e ;
                }
                $doctor_dutytime['id'] = $doctors[$i]['id'];
                $doctor_dutytime[''] = $duty_time;
                
        }
       
//return $doctor_dutytime;
        

        return view('departments.doctors',compact('doctors','department','doctor_dutytime'));
    }

    
}
