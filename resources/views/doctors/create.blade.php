 @extends('layouts.admin')
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
<div class="page-content" id="video_page">
  <div class="row">
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
   <div class="col-md-12">
    <center> 
      <div class ="header_doctor" >Create Doctor Information </div>
      <br>
    </center>
    <form class="form-horizontal" method="post" action="{{ route('doctors.store') }}" enctype="multipart/form-data">
     {{ csrf_field() }}
     <input type="hidden" name="admin_id" value="{{$login->id}}">    
     <input type="hidden" name="role_id" value="2">

     <div class="form-group">
      <div class="col-md-4  {{ $errors->has('name') ? ' has-error' : '' }}"> 
        <label for="name" >{{ __('Name') }}</label>
        <input id="name" type="text" class="form-control " name="name" value="{{ old('name') }}" autocomplete="name" placeholder="Name">

        @if ($errors->has('name'))            
        <span class="help-block">
          <strong>{{ $errors->first('name') }}</strong>
        </span>
        @endif   
      </div> 
      <div class="col-md-4  {{ $errors->has('department_id') ? ' has-error' : '' }}">
        <label for="department_id" >{{ __('Departmemnt') }}</label>
        <select name="department_id" id="category" class="form-control selectpicker"> 
          <option value="" selected>Select Department</option >
          @foreach($departments as $department)
          <option value="{{$department->id}}">{{$department->name}}</option>
          @endforeach
        </select>
        @if ($errors->has('department_id'))            
        <span class="help-block">
          <strong>{{ $errors->first('department_id') }}</strong>
        </span>
        @endif   
      </div>

      <div class="col-md-4  {{ $errors->has('degree') ? ' has-error' : '' }}">
        <label for="degree" >{{ __('Qualifications') }}</label>
        <input id="degree" type="text" class="form-control" name="degree" value="{{ old('degree') }}" placeholder="Degree" autocomplete="degree">
        @if ($errors->has('degree'))            
        <span class="help-block">
          <strong>{{ $errors->first('degree') }}</strong>
        </span>
        @endif  
      </div>
    </div>

    <div class="form-group">
      <div class="col-md-4  {{ $errors->has('phone_number') ? ' has-error' : '' }}">
        <label for="phone_number" >{{ __('Phone Number') }}</label>
        <input id="phone_number" type="number" class="form-control" name="phone_number" value="{{ old('phone_number') }}" placeholder="Phone Number" autocomplete="phone_number">

        @if ($errors->has('phone_number'))            
        <span class="help-block">
          <strong>{{ $errors->first('phone_number') }}</strong>
        </span>
        @endif  
      </div>
      <div class="col-md-4" style="margin-top:20px;">
        <center>
         <label class="radio-inline">
          <input type="radio" value="Male" name="gender" checked>Male
        </label>
        <label class="radio-inline">
          <input type="radio" value="Female" name="gender">Female
        </label>
      </center>
    </div>

    <div class="col-md-4  {{ $errors->has('dob') ? ' has-error' : '' }}">
      <label for="dob" >{{ __('DOB') }}</label>
      <div class="input-group">
        <input id="dob" type="text" class="form-control" name="dob" value="{{ old('dob') }}" placeholder="date of birth" autocomplete="dob">
        <span class="input-group-addon">
          <i class="fa fa-calendar bigger-110"></i>
        </span>
      </div>
      @if ($errors->has('dob'))            
      <span class="help-block">
        <strong>{{ $errors->first('dob') }}</strong>
      </span>
      @endif  
    </div>
  </div>
  <hr style="border-color: lightblue;">
  <div class="form-group">
    <div class="col-md-4  {{ $errors->has('email') ? ' has-error' : '' }}">
      <label for="email" >{{ __('Email') }}</label>
      <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" autocomplete="email">

      @if ($errors->has('email'))            
      <span class="help-block">
        <strong>{{ $errors->first('email') }}</strong>
      </span>
      @endif  
    </div>
    <div class="col-md-4  {{ $errors->has('password') ? ' has-error' : '' }}">
      <label for="password" >{{ __('Password') }}</label>
      <input id="password" type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" autocomplete="password">

      @if ($errors->has('password'))            
      <span class="help-block">
        <strong>{{ $errors->first('password') }}</strong>
      </span>
      @endif  
    </div>

    <div class="col-md-4">

     <label for="password-confirm" >{{ __('Confrim Password') }}</label>

     <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

   </div>
 </div>
 <div class="form-group">

  <div class="col-md-12  {{ $errors->has('address') ? ' has-error' : '' }}">
    <label for="address" >{{ __('Address') }}</label>
    <textarea id="address" class="form-control" name="address">{{ old('address') }}</textarea>

    @if ($errors->has('address'))            
    <span class="help-block">
      <strong>{{ $errors->first('address') }}</strong>
    </span>
    @endif  
  </div>
</div>
<hr style="border-color: lightblue;">

<div class="form-group">
 <div class="col-md-1"> 
  <label for="monday" >{{ __('Monday') }}</label>
</div>
<div class="col-md-3">
  <?php $times = create_time_range('6:00', '21:00', '30 mins'); ?>
  <select name="monday_start" id="monday_start">

    <option value="">From</option>
    <?php foreach($times as $key=>$val){ ?>
      <option value="<?php echo $val; ?>"><?php echo $val; ?></option>
    <?php } ?>
  </select>
  
  <select name="monday_end" id="monday_end">

    <option value="">To</option>
    <?php foreach($times as $key=>$val){ ?>
      <option value="<?php echo $val; ?>"><?php echo $val; ?></option>
    <?php } ?>
  </select>
</div>
<div class="col-md-1"> 
  <label for="tueday" >{{ __('Tueday') }}</label>
</div>
<div class="col-md-3">
  <?php $times = create_time_range('6:00', '21:00', '30 mins'); ?>
  <select name="tueday_start" id="tueday_start">

    <option value="">From</option>
    <?php foreach($times as $key=>$val){ ?>
      <option value="<?php echo $val; ?>"><?php echo $val; ?></option>
    <?php } ?>
  </select>
  
  <select name="tueday_end" id="tueday_end">

    <option value="">To</option>
    <?php foreach($times as $key=>$val){ ?>
      <option value="<?php echo $val; ?>"><?php echo $val; ?></option>
    <?php } ?>
  </select>

</div>
<div class="col-md-1"> 
  <label for="wednesday" >{{ __('Wednesday') }}</label>
</div>
<div class="col-md-3">
  <?php $times = create_time_range('6:00', '21:00', '30 mins'); ?>
  <select name="wednesday_start" id="wednesday_start">

    <option value="">From</option>
    <?php foreach($times as $key=>$val){ ?>
      <option value="<?php echo $val; ?>"><?php echo $val; ?></option>
    <?php } ?>
  </select>
  
  <select name="wednesday_end" id="wednesday_end">

    <option value="">To</option>
    <?php foreach($times as $key=>$val){ ?>
      <option value="<?php echo $val; ?>"><?php echo $val; ?></option>
    <?php } ?>
  </select>
</div>

</div>
<br>
<div class="form-group">
 <div class="col-md-1"> 
  <label for="thursday" >{{ __('Thursday') }}</label>
</div>
<div class="col-md-3">
  <?php $times = create_time_range('6:00', '21:00', '30 mins'); ?>
  <select name="thursday_start" id="thursday_start">

    <option value="">From</option>
    <?php foreach($times as $key=>$val){ ?>
      <option value="<?php echo $val; ?>"><?php echo $val; ?></option>
    <?php } ?>
  </select>
  
  <select name="thursday_end" id="thursday_end">

    <option value="">To</option>
    <?php foreach($times as $key=>$val){ ?>
      <option value="<?php echo $val; ?>"><?php echo $val; ?></option>
    <?php } ?>
  </select>
</div>
<div class="col-md-1"> 
  <label for="friday" >{{ __('Friday') }}</label>
</div>
<div class="col-md-3">
  <?php $times = create_time_range('6:00', '21:00', '30 mins'); ?>
  <select name="friday_start" id="friday_start">

    <option value="">From</option>
    <?php foreach($times as $key=>$val){ ?>
      <option value="<?php echo $val; ?>"><?php echo $val; ?></option>
    <?php } ?>
  </select>
  
  <select name="friday_end" id="friday_end">

    <option value="">To</option>
    <?php foreach($times as $key=>$val){ ?>
      <option value="<?php echo $val; ?>"><?php echo $val; ?></option>
    <?php } ?>
  </select>
</div>

<div class="col-md-1"> 
  <label for="saturday" >{{ __('Saturday') }}</label>
</div>
<div class="col-md-3">
  <?php $times = create_time_range('6:00', '21:00', '30 mins'); ?>
  <select name="saturday_start" id="saturday_start">

    <option value="">From</option>
    <?php foreach($times as $key=>$val){ ?>
      <option value="<?php echo $val; ?>"><?php echo $val; ?></option>
    <?php } ?>
  </select>
  
  <select name="saturday_end" id="saturday_end">

    <option value="">To</option>
    <?php foreach($times as $key=>$val){ ?>
      <option value="<?php echo $val; ?>"><?php echo $val; ?></option>
    <?php } ?>
  </select>

</div>

</div>
<br>  
<div class="form-group">
  <div class="col-md-1"> 
    <label for="sunday" >{{ __('Sunday') }}</label>
  </div>
  <div class="col-md-3">
    
    <?php $times = create_time_range('6:00', '21:00', '30 mins'); ?>
    <select name="sunday_start" id="sunday_start">

      <option value="">From</option>
      <?php foreach($times as $key=>$val){ ?>
        <option value="<?php echo $val; ?>"><?php echo $val; ?></option>
      <?php } ?>
    </select>
    
    <select name="sunday_end" id="sunday_end">

      <option value="">To</option>
      <?php foreach($times as $key=>$val){ ?>
        <option value="<?php echo $val; ?>"><?php echo $val; ?></option>
      <?php } ?>
    </select>
  </div>
</div>
<br><br>
<center> <button type="submit" align ="center" class="btn btn-primary">Save</button>
  <a href="{{url('/doctors')}}" align ="center" class="btn btn-primary">Cancel</a>
</center>
</form>
</div>
</div>
@endsection
