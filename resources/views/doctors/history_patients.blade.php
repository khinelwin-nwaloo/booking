@extends('layouts.admin')
@section('content')

<div class="page-content">
  <div class="row">
    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th class="th-sm">No</th>
          <th class="th-sm">Name</th>
          <th class="th-sm">Gender </th>
          <th class="th-sm">Age</th>
          <th class="th-sm">Phone</th>
          <th class="th-sm">Email </th>
          <th class="th-sm">Address</th>
          <th class="th-sm">Dr.' remark</th>
          <th></th>
          
        </tr>
      </thead>
      <tbody> 
        <?php $count = 0; ?>
        @foreach($his_patient as $history)
        <tr>
          <td>{{ ++$count}}</td>
          <td>{{ $history->patient->name}}</td>
          <td>{{ $history->patient->gender}}</td>
          <td>{{ $history->patient->age}}</td>
          <td>{{ $history->patient->phone}}</td>
          <td>{{ $history->patient->email}}</td>
          <td>{{ $history->patient->address}}</td>
          <td>{{ $history->doctor_remark}}</td>
          <td> <a href="{{ url('/appointment/doctor_remark/'.$history->id)}}">Edit</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

</div>

@endsection

@section('js')
<script type="text/javascript">
  $(document).ready(function () {
    $('#dtBasicExample').DataTable({
      "paging": "simple" 
      // false to disable pagination (or any other option)
    });
    $('.dataTables_length').addClass('bs-select');
  });
</script>
@endsection