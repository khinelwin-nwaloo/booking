@extends('layouts.master')
@section('content')
<?php 
function create_time_range($start, $end, $interval = '30 mins', $format = '12') {
  $startTime = strtotime($start); 
  $endTime   = strtotime($end);
  $returnTimeFormat = ($format == '12')?'g:i A':'G:i';

  $current   = time(); 
  $addTime   = strtotime('+'.$interval, $current); 
  $diff      = $addTime - $current;

  $times = array(); 
  while ($startTime < $endTime) { 
    $times[] = date($returnTimeFormat, $startTime); 
    $startTime += $diff; 
  } 
  $times[] = date($returnTimeFormat, $startTime); 
  return $times; 
}


?>
<!-- start banner Area -->
<section class="banner-area relative about-banner" id="home">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center">
      
     <div class="about-content col-lg-12">
      <h1 class="text-white">
        Book An Appointment
      </h1>
    </div>
  </div>
</div>
</section>
<!-- End banner Area -->
<!-- Start team Area -->
<section class="team-area section-gap">

  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="menu-content pb-70 col-lg-7">
        <div class="card uper">
          <div class="card-header">

           <center>
            <div>
              @if(session ('success'))
              <div id="successMessage" class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">×</button>
                {{ session('success') }}
              </div>
              @endif
              @if(session ('fail'))
              <div id="successMessage" class="alert alert-danger">
               <button type="button" class="btm btn-primary" data-dismiss="alert">×</button>
               {{ session('fail') }}
             </div>
             @endif
           </div>
           <p class="text-warning" style="font-size:20px"> 
            <!-- Appoinment is already Full. -->
          </p>
          <h1 class="form-group" style="border-radius: 5px;">
            Appointment Doctor
          </h1>
        </center>
        <form class="form-horizontal" method="post" 
        action="{{ route('appointments.store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}

        <input type="hidden" name="patient_id" value="{{$user->id}}"> 

        <div class="form-group  {{ $errors->has('department_id') ? ' has-error' : '' }}">
          <label for="department_id" >{{ __('Departmemnt') }}</label>
          <select name="department_id" id="category" class="form-control selectpicker"> 
            <option value="" selected>Select Department</option >
            @foreach($departments as $department)
            <option value="{{$department->id}}">{{$department->name}}</option>
            @endforeach
          </select>
          @if ($errors->has('department_id'))            
          <span class="help-block">
            <strong style="color: red;">{{ $errors->first('department_id') }}</strong>
          </span>
          @endif   
        </div>

        <div class="form-group  {{ $errors->has('doctor_id') ? ' has-error' : '' }}">
          <label for="doctor_id" >{{ __('Doctor') }}</label>
          <select name="doctor_id" id="category_doctor" class="form-control selectpicker"> 
            <option value="" selected>Select Doctor</option >

          </select>
          @if ($errors->has('doctor_id'))            
          <span class="help-block">
            <strong style="color: red;">{{ $errors->first('doctor_id') }}</strong>
          </span>
          @endif   
        </div>

        <div class="form-group  {{ $errors->has('duties') ? ' has-error' : '' }}">
          <label for="duties" >{{ __('Duties Time') }}</label>
          <select name="duties" id="duties" class="form-control selectpicker"> 
            <option value="" selected>Select Time</option >

          </select>
          @if ($errors->has('duties'))            
          <span class="help-block">
            <strong style="color: red;">{{ $errors->first('duties') }}</strong>
          </span>
          @endif   
        </div>

        <div class="form-group  {{ $errors->has('appointment_date') ? ' has-error' : '' }}">
          <label for="duties" >{{ __('Appointment Date') }}</label>
          <div class="input-group">
            <input id="appointment_date" type="text" class="form-control" name="appointment_date" value="{{ old('appointment_date') }}" placeholder="Appointment date" autocomplete="off">
            <span class="input-group-addon">
              <i class="fa fa-calendar bigger-110"></i>
            </span>
          </div> 
          @if ($errors->has('appointment_date'))            
          <span class="help-block">
            <strong style="color: red;">{{ $errors->first('appointment_date') }}</strong>
          </span>
          @endif 
        </div>
        <div class="form-group  {{ $errors->has('reason') ? ' has-error' : '' }}">
          <label for="reason" >{{ __('Reason') }}</label>
          <select name="reason" id="reason" name="reason" class="form-control selectpicker"> 
            <option value="" selected>Select Reason</option >
            <option value="New Appoinment" >New Appoinment</option >
            <option value="Old Appoinment" >Old Appoinment</option >
            <option value="Consulting" >Consulting</option >

          </select>
          @if ($errors->has('reason'))            
          <span class="help-block">
            <strong style="color: red;">{{ $errors->first('reason') }}</strong>
          </span>
          @endif   
        </div>

        <div class="form-group  {{ $errors->has('remark') ? ' has-error' : '' }}">
          <label for="remark" >{{ __('Remark') }}</label>
          <textarea name="remark" id="remark" style="width:100%;border-radius:3px;"></textarea>
          @if ($errors->has('remark'))            
          <span class="help-block">
            <strong style="color: red;">{{ $errors->first('remark') }}</strong>
          </span>
          @endif   
        </div>


        <div class="form-group">

          <button type="submit" align ="center" class="btn btn-primary">Appointment</button>
          <a href="{{url('/doctors')}}" align ="center" class="btn btn-primary">Cancel</a>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</section>

@endsection
@section('js')

<script type="text/javascript">

  $("#appointment_date").datepicker({ 
    format: 'yyyy-mm-dd',
    minDate: -0, 
    maxDate: '+7d' });

  $("#category").on('change',function(e) {
    var department_id = $(this).val();
    var pj_name = "/hospital_booking";
    $.ajax({
      url: pj_name+'/department/get_doctor',
        type: "get", //send it through get method
        data: { 
          id: department_id
        },
        success: function(result) {
         var doctors = result;
         var count = doctors.length;
         var mySelect = $('#category_doctor');
         
         if(count == '0'){
          $(mySelect).empty();
          mySelect.append(
            $('<option></option>').html('Select Doctor')
            );
        }
        for(var i=0 ; i < count ; i++){

          if(i == '0'){
           $(mySelect).empty();
           mySelect.append(
            $('<option></option>').html('Select Doctor')
            );

         }
         mySelect.append(
          $('<option></option>').val(doctors[i]['id']).html(doctors[i]['name']+'('+doctors[i]['degree']+')')
          );
       }
     },
     error: function(xhr) {
     }
   });
  });


  $("#category_doctor").on('change',function(e) {
    var doctor_id = $(this).val();
    var pj_name = "/hospital_booking";
    $.ajax({
      url: pj_name+'/department/get_duties',
        type: "get", //send it through get method
        data: { 
          id: doctor_id
        },
        success: function(result) {
         var duties = result;
         var count = duties.length;
         var duty_select = $('#duties');
         if(count == '0'){
          $(duty_select).empty();
          duty_select.append(
            $('<option></option>').html('Select Time')
            );
        }
        var duty_time = [];

        if(duties[0]['mon_s']){
          duty_time[0] = 'Monday:' +duties[0]['mon_s'] +' - '+duties[0]['mon_e'] ;
        }else{
          duty_time[0] = '';
        }
        if(duties[0]['tue_s']){
          duty_time[1] = 'Tueday:'+duties[0]['tue_s'] +' - '+duties[0]['tue_e'] ;
        }else{
          duty_time[1] = '';
        }
        if(duties[0]['wed_s']){
          duty_time[2] = 'Wednesday:'+duties[0]['wed_s'] +' - '+duties[0]['wed_e'] ;
        }else{
          duty_time[2] = '';
        }
        if(duties[0]['thu_s']){
          duty_time[3] = 'Thursday:'+duties[0]['thu_s'] +' - '+duties[0]['thu_e'] ;
        }else{
          duty_time[3] = '';
        }
        if(duties[0]['fri_s']){
          duty_time[4] = 'Friday:'+duties[0]['fri_s'] +' - '+duties[0]['fri_e'] ;
        }else{
          duty_time[4] = '';
        }
        if(duties[0]['sat_s']){
         duty_time[5] = 'Saturday:'+duties[0]['sat_s'] +' - '+duties[0]['sat_e'] ;
       }else{
        duty_time[5] = '';
      }
      if(duties[0]['sun_s']){
        duty_time[6] = 'Sun:'+duties[0]['sun_s'] +' - '+duties[0]['sun_e'] ;
      }else{
        duty_time[6] = '';
      }


      for(var i=0 ; i < 7 ; i++){

        if(duty_time[i]){
          duty_select.append(
            $('<option></option>').val(duty_time[i]).html(duty_time[i])
            );
        }
      }

    },
    error: function(xhr) {
    }
  });
  });
</script>
</script>
@endsection