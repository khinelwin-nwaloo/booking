@extends('layouts.admin')
@section('content')
<!-- /Page Breadcrumb -->
<div class="row">
  @if(session ('success'))
  <div id="successMessage" class="alert alert-success col-md-5">
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
</div>
<!-- Page Breadcrumb -->
<br>
<div id="">
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-aqua"><i class="menu-icon fa fa-user"></i></span>

      <div class="info-box-content">
        @if($patient_count != 0 )
        <span class="info-box-text">
          <b>Register Patient</b>
        </span>
        <span class="info-box-number">
          {{ $patient_count }} 
        </span>
        
      
        @else
        <span class="info-box-text">
          <b>Registerd Patient</b>
        </span>
        <span class="info-box-number">
          0
        </span>
        @endif
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-red"><i class="menu-icon fa fa-user"></i></span>
      <div class="info-box-content">      
        @if($doctor_count != 0 )
        <span class="info-box-text">
          <b>Total Doctor</b>
        </span>
        <span class="info-box-number">
          {{ $doctor_count }}
        </span>
        @else
        <span class="info-box-text">
          <b>Total Doctor</b>
        </span>
        <span class="info-box-number">
          0
        </span>
        @endif
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  	<div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-aqua"><i class="menu-icon fa fa-desktop"></i></span>

      <div class="info-box-content">
        @if($appointment_total != 0 )
        <span class="info-box-text">
          <b>Total Appointment</b>
        </span>
        <span class="info-box-number">
          {{ $appointment_total }} 
        </span>
        
      
        @else
        <span class="info-box-text">
          <b>Total Appointment</b>
        </span>
        <span class="info-box-number">
          0
        </span>
        @endif
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>

  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-aqua"><i class="menu-icon fa fa-user"></i></span>

      <div class="info-box-content">
        @if($today_appontent != 0 )
        <span class="info-box-text">
          <b>Today Appointment</b>
        </span>
        <span class="info-box-number">
          {{ $today_appontent }} 
        </span>
        
      
        @else
        <span class="info-box-text">
          <b>Today Appointment</b>
        </span>
        <span class="info-box-number">
          0
        </span>
        @endif
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- fix for small devices only -->
  <div class="clearfix visible-sm-block"></div>

  
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
</div>

</div>
@endsection