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
        
        
        $doctor_dutytime = array();
        for($i = 0 ; $i <count($doctors); $i++) {
            $duty_time = array();
            $duty = Duty::where('doctor_id',$doctors[$i]['id'])->first();
                if($duty->sun_s){
                      $duty_time[0]['time'] =   'Sunday:'.$duty->sun_s .' - '.$duty->sun_e ;
                }else{
                    $duty_time[0]['time'] = '';
                }
                if($duty->mon_s){

                     $duty_time[1]['time'] =   'Monday:'.$duty->mon_s .' - '.$duty->mon_e ;
                }else{
                    $duty_time[1]['time'] = '';
                }

                if($duty->tue_s){
                     $duty_time[2]['time'] =   'Tueday:'.$duty->tue_s .' - '.$duty->tue_e ;
                }else{
                    $duty_time[2]['time'] = '';
                }

                if($duty->wed_s){
                     $duty_time[3]['time'] =   'Wednesday:'.$duty->wed_s .' - '.$duty->wed_e ;
                }else{
                    $duty_time[3]['time'] = '';
                }
                if($duty->thu_s){
                     $duty_time[4]['time'] =   'Thursday:'.$duty->thu_s .' - '.$duty->thu_e ;
                }else{
                    $duty_time[4]['time'] = '';
                }
                if($duty->fri_s){
                     $duty_time[5]['time'] =   'Friday:'.$duty->fri_s .' - '.$duty->fri_e ;
                }else{
                    $duty_time[5]['time'] = '';
                }

                if($duty->sat_s){
                     $duty_time[6]['time'] =   'Saturday:'.$duty->sat_s .' - '.$duty->sat_e ;
                }else{
                    $duty_time[6]['time'] = '';
                }
                // if($doctors[$i]['id'] == 2){
                //     return $duty_time;
                // }
                
                
                $doctor_dutytime[] = [
                        'id' => $doctors[$i]['id'],
                        'duty_time' => $duty_time
                ];
                
        }
       
//return $doctor_dutytime;
        

        return view('departments.doctors',compact('doctors','department','doctor_dutytime'));
    }

    
}
