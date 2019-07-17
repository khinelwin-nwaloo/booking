@extends('layouts.admin')
@section('content')
<div class="page-content">
 <div class="pro-container">
  <div class="rela-block profile-card">
    <img src="{{ url('/assets/img/doctors/t3.jpg')}}" class="profile-pic user_profile" alt="userphoto" />
    <div class="rela-block profile-name-container">
      <div class="rela-block profile">{{ $doctor['name'] }}</div>
      <div class="rela-block degree">{{ $doctor['degree'] }}</div>
      <div class="rela-block user-desc"><b><i> ( {{ $doctor->department->name }} )</i></b></div><br/>
      <div class="rela-block user-desc" id="user_description">PHONE : 0{{ $doctor['phone'] }}</div>
      <br/>
      <div class="rela-block user-desc" id="user_description">DATE OF BIRTH : {{ $doctor['dob'] }}</div>
      <br/>

      <?php
      $gender = $doctor['gender'];
      if($gender == 'Male'){
        $checked_male="checked";
        $checked_female = '';
      }else if($gender=='Female'){
        $checked_male="";
        $checked_female = "checked";
      }else{
        $checked_male="";
        $checked_female = "";
      }
      ?>
      <div class="rela-block user-desc" id="user_description">Gender : {{ $gender }}
      </div>
    </div>
    <button class="btn btn-default edit rounded" data-toggle="modal" style="float:right">

      <a href="{{ url('/doctors/'.$doctor['id'].'/edit') }}">Change Password</a></button>
    </div>


  </div>


</div>

@endsection
