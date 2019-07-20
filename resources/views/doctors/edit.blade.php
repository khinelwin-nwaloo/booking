@extends('layouts.admin')
@section('content')
<div class="page-content" id="video_page">
  <div class="row">
    
   <div class="col-md-3"> </div>
   <div class="col-md-6"> 

     <?php $user = session()->get('user');?>
     @if($user->role_id == 2)

     <h2>Change Doctor' Password</h2>
     <br>
     <form class="form-horizontal" method="post" action="{{url('/doctors/'.$doctor_info['id'])}}" enctype="multipart/form-data">
      {{ csrf_field() }}
      {{ method_field('PUT') }}
      @if(session ('success'))
      <div id="successMessage" class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ session('success') }}
      </div>
      @endif
      @if(session ('fail'))
      <div id="successMessage" class="alert alert-danger">
       <button type="button" class="close" data-dismiss="alert">×</button>
       {{ session('fail') }}
     </div>
     @endif
     <div class="form-group  {{ $errors->has('old_password') ? ' has-error' : '' }}">
      <label for="old_password" >{{ __('Old Password') }}</label>
      <input id="old_password" type="password" class="form-control" name="old_password" placeholder="Password" autocomplete="password">

      @if ($errors->has('old_password'))            
      <span class="help-block">
        <strong>{{ $errors->first('old_password') }}</strong>
      </span>
      @endif  
    </div>

    <div class="form-group  {{ $errors->has('password') ? ' has-error' : '' }}">
      <label for="password" >{{ __('Password') }}</label>
      <input id="password" type="password" class="form-control" name="password" placeholder="Password" autocomplete="password">

      @if ($errors->has('password'))            
      <span class="help-block">
        <strong>{{ $errors->first('password') }}</strong>
      </span>
      @endif  
    </div>
    <div class="form-group">
      <label for="password-confirm" >{{ __('Confrim Password') }}</label>

      <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

    </div>

    @else
    <form class="form-horizontal" method="post" action="{{url('/doctors/'.$doctor_info['id'])}}" enctype="multipart/form-data">
      {{ csrf_field() }}
      {{ method_field('PUT') }}
      <h2>Edit Doctor' Information</h2>
      <input type="hidden" name="admin_id" value="{{$doctor_info->admin_id}}">    
      <input type="hidden" name="role_id" value="{{$doctor_info->role_id}}">   

      <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="name" >{{ __('Name') }}</label>
        <input id="name" type="text" class="form-control " name="name" 
        value="{{ $doctor_info->name }}" autocomplete="name" placeholder="Name">

        @if ($errors->has('name'))            
        <span class="help-block">
          <strong>{{ $errors->first('name') }}</strong>
        </span>
        @endif    
      </div>

      <div class="form-group  {{ $errors->has('department_id') ? ' has-error' : '' }}">
        <label for="department_id" >{{ __('Departmemnt') }}</label>
        <select name="department_id" id="category" class="form-control selectpicker"> 
          <option value="">Select Department</option >
          @foreach($departments as $department)
          <option value="{{$department->id}}" 
            {{ $doctor_info->department_id == $department->id ? 'selected' : '' }} >{{$department->name}}</option>
            @endforeach
          </select>
          @if ($errors->has('department_id'))            
          <span class="help-block">
            <strong>{{ $errors->first('department_id') }}</strong>
          </span>
          @endif   
        </div>

        <div class="form-group  {{ $errors->has('degree') ? ' has-error' : '' }}">
          <label for="degree" >{{ __('Degree') }}</label>
          <input id="degree" type="text" class="form-control" name="degree" value="{{ $doctor_info->degree }}" placeholder="Degree" autocomplete="degree">
          @if ($errors->has('department_id'))            
          <span class="help-block">
            <strong>{{ $errors->first('department_id') }}</strong>
          </span>
          @endif  
        </div>

        <div class="form-group">
          <?php 
          $female = "";$male="";
          if($doctor_info->gender =='Male'){
            $male = "checked";
          }else if($doctor_info->gender =='Female'){
            $female = "checked";
          }

          ?>
          <label class="radio-inline">
            <input type="radio" value="Male" name="gender" {{ $male }}>Male
          </label>
          <label class="radio-inline">
            <input type="radio" value="Female" name="gender" {{ $female }}>Female
          </label>
        </div>
        <div class="form-group  {{ $errors->has('dob') ? ' has-error' : '' }}">
          <label for="dob" >{{ __('DOB') }}</label>
          <div class="input-group">
            <input id="dob" type="text" class="form-control" name="dob" value="{{ $doctor_info->dob }}" placeholder="date of birth" autocomplete="dob">
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

        <div class="form-group  {{ $errors->has('email') ? ' has-error' : '' }}">
          <label for="email" >{{ __('Email') }}</label>
          <input id="email" type="text" class="form-control" name="email" value="{{ $doctor_info->email }}" placeholder="Email" autocomplete="email">
          @if ($errors->has('email'))            
          <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
          </span>
          @endif  
        </div>

        <div class="form-group  {{ $errors->has('phone_number') ? ' has-error' : '' }}">
          <label for="phone_number" >{{ __('Phone Number') }}</label>
          <input id="phone_number" type="number" class="form-control" name="phone_number" value="{{ $doctor_info->phone }}" placeholder="Phone Number" autocomplete="phone_number">

          @if ($errors->has('phone_number'))            
          <span class="help-block">
            <strong>{{ $errors->first('phone_number') }}</strong>
          </span>
          @endif  
        </div>

        <div class="form-group  {{ $errors->has('address') ? ' has-error' : '' }}">
          <label for="address" >{{ __('Address') }}</label>
          <textarea id="address" class="form-control" name="address">{{ $doctor_info->address }}</textarea>

          @if ($errors->has('address'))            
          <span class="help-block">
            <strong>{{ $errors->first('address') }}</strong>
          </span>
          @endif  
        </div>
        @endif
        <button type="submit" align ="center" class="btn btn-primary">Update</button>
        <a href="{{url('/doctors')}}" align ="center" class="btn btn-primary">Cancel</a>
      </form>
    </div>


  </div>

</div>
@endsection

@section('js')

@endsection