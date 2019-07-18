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
          <th class="th-sm"> Address</th>
          
        </tr>
      </thead>
      <tbody> 
        <?php $count = 0; ?>
        @foreach($patients as $patient)
        <tr>
          <td>{{ ++$count}}</td>
          <td>{{ $patient->name}}</td>
          <td>{{ $patient->gender}}</td>
          <td>{{ $patient->age}}</td>
          <td>{{ $patient->phone}}</td>
          <td>{{ $patient->email}}</td>
          <td>{{ $patient->address}}</td>
          
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