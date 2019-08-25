@extends('layouts.master')
@section('content')


<section class="banner-area relative about-banner " id="home">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="about-content col-lg-12">
        <h1 class="text-white">
         Appointment Details
        </h1>
      </div>
    </div>
  </div>
</section>
<br>
<div class="table-info">
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
<!-- <section class="team-area section-gap"> -->
  <div class="container">
    <div class="page-content">
      <div class="row col-md-8 offset-2">
        <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
          <thead>
            <tr class="table-info" >
              <th class="th-sm" width="30%">Patient Name</th>
              <td>{{ $appointment->patient->name }}</td>
            </tr>
            <tr class="table-info" >
              <th class="th-sm" width="30%">Date</th>
              <td>{{ date_format($appointment->created_at,"Y-m-d") }}</td>
            </tr>
            <tr class="table-info" >
              <th class="th-sm" width="30%">Patient's Remark</th>
              <td>{{ $appointment->remarks }}</td>
            </tr>
            <tr class="table-info" >
              <th class="th-sm" width="30%">Reason</th>
              <td>{{ $appointment->reason }}</td>
            </tr>

            <tr class="table-info" >
              <th class="th-sm" width="30%">Doctor Name</th>
              <td>{{ $appointment->doctor->name }}</td>
            </tr>
            <tr class="table-info" >
              <th class="th-sm" width="30%">Department</th>
              <td>{{ $appointment->department->name }}</td>
            </tr>
            <tr class="table-info" >
              <th class="th-sm" width="30%">Retake Date </th>
              <td>{{ $appointment->retake_date }}</td>
            </tr>
            <tr class="table-info" >
              <th class="th-sm" width="30%">Dr's Comment</th>
              <td>{{ $appointment->doctor_remarks }}</td>
            </tr>
          </thead>

          
        </table>

      </div>

    </div>
  </div>
<!-- </section> -->


@endsection

@section('js')

@endsection