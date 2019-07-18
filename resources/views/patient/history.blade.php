@extends('layouts.master')
@section('content')


<section class="banner-area relative about-banner" id="home">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="about-content col-lg-12">
        <h1 class="text-white">
          @if(!$appointments->isEmpty())
          Appointment History
          @else
          No History Appointment
          @endif
        </h1>
      </div>
    </div>
  </div>
</section>
<br>
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
<section class="team-area section-gap">
  <div class="container">
    <div class="page-content">
      <div class="row">

        <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th class="th-sm">No</th>
              <th class="th-sm">Doctor's Name</th>
              <th class="th-sm">Date </th>
              <th class="th-sm">Department</th>
              <th class="th-sm">Reason</th>
              <th class="th-sm">Remark</th>
              <th></th>
            </tr>
          </thead>

          <tbody> 
            @if(!$appointments->isEmpty())
            <?php $count = 0; ?>
            @foreach($appointments as $appointment)
            <tr>
              <td>{{ ++$count}}</td>
              <td>{{ $appointment->doctor->name}}</td>
              <td>{{ $appointment->appointment_date}}</td>
              <td>{{ $appointment->department->name}}</td>
              <td>{{ $appointment->reason }}</td>
              <td>{{ $appointment->remarks }}</td>
              <td align="center">
                @if($appointment->status == 2)
                Finish
                @elseif($appointment->status == 0)
                Waiting
                @elseif($appointment->status == 3)
                Completed
                @endif
              </td>
            </tr>
            @endforeach
            @endif
          </tbody>
        </table>

      </div>

    </div>
  </div>
</section>


@endsection

@section('js')

@endsection