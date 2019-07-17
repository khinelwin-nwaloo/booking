@extends('layouts.admin')
@section('content')
<div class="main">
    <div class="container">
        <div class="signup-content">
           <div style="width:20%;"> </div>
           <div style="width:75%"> 
            <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th class="th-sm">Name

                  </th>
                  <th class="th-sm">Specilization

                  </th>
                  <th class="th-sm">Phone

                  </th>
                  <th class="th-sm">DOB

                  </th>
                  <th class="th-sm">Email

                  </th>
                  <th class="th-sm">

                  </th>
              </tr>
          </thead>
          <tbody> 
            @foreach($doctors as $doctor)
            <tr>
              <td>{{ $doctor->doctorName}}</td>
              <td>{{ $doctor->specilization}}</td>
              <td>{{ $doctor->contactno}}</td>
              <td>{{ $doctor->docEmail}}</td>
              <td>{{ $doctor->address}}</td>
              <td> 
                <button type="button" class="btn btn-primary">Edit</button>

                <button type="button" class="btn btn-danger">Delete</button>
              </td>
          </tr>
          @endforeach
      </tbody>
  </table>
</div>

</div>

</div>
@endsection

@section('js')
<script type="text/javascript">
    $(document).ready(function () {
      $('#dtBasicExample').DataTable({
    "paging": "simple" // false to disable pagination (or any other option)
});
      $('.dataTables_length').addClass('bs-select');
  });
</script>
@endsection