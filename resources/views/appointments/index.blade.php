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
}?>
<div class="page-content" id="video_page">
  <div class="row">
    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th class="th-sm">No </th>
          <th class="th-sm">Name </th>
          <th class="th-sm">Doctor's Name </th>
          <th class="th-sm">Department </th>
          <th class="th-sm">Appointment Date </th>
          <th class="th-sm">Appointment Time</th>
          <th class="th-sm">Reason</th>
          <th class="th-sm">Remark</th>
          <th> </th>
        </tr>
      </thead>
      <tbody> 
        <?php $count = 0; ?>

        @foreach($appointments as $appoint)
        <tr>
          <td>{{ ++$count}}</td>
          <td>{{ $appoint->patient->name}}</td>
          <td>{{ $appoint->doctor->name}}</td>
          <td>{{ $appoint->department->name}}</td>
          <td>{{ $appoint->appointment_date}}</td>
          <td>{{ $appoint->appointment_time}}</td>
          <td>{{ $appoint->reason}}</td>
          <td>{{ $appoint->remarks}}</td>
          <td align="center">
            @if($user->role_id == 2 ) <!-- doctor -->
            @if($appoint->status == 1 )

            <form action="{{url('/appointments/'.$appoint->id)}}" method="post" class="inline" enctype="multipart/form-data">
              {{ csrf_field() }}
              {{ method_field('PUT') }}
              <input type="hidden" name="role_id" value="{{$user->role_id}}">    
              <button type="submit" align ="center" class="btn btn-primary">Accept</button>
            </button>

          </form>
          
          @elseif($appoint->status == 2)
          Doctor Approved
          @elseif($appoint->status == 3)
          Completed
          @endif

          @elseif($user->role_id == 1 ) <!-- Admin -->
          @if($appoint->status == 0 )

          <form action="{{url('/appointments/'.$appoint->id)}}" method="post" class="inline" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <input type="hidden" name="role_id" value="{{$user->role_id}}">    
            <button type="submit" align ="center" class="btn btn-primary">Inform</button>
          </button>
        </form>
        @elseif($appoint->status == 1)
        Send to Doctor
        @elseif($appoint->status == 2)
        <form action="{{url('/appointments/'.$appoint->id)}}" method="post" class="inline" enctype="multipart/form-data">
          {{ csrf_field() }}
          {{ method_field('PUT') }}

          <button type="submit" align ="center" class="btn btn-primary">Finish</button>
        </button>

      </form>
      @elseif($appoint->status == 3)
      Completed
      @endif
      @endif
    </td>
  </tr>
  @endforeach
</tbody>
</table>
</div>
</div>


@endsection

@section('js')

@endsection