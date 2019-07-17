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
                  <th class="th-sm">Gender

                  </th>
                  <th class="th-sm">Phone

                  </th>
                  <th class="th-sm">DOB

                  </th>
                  <th class="th-sm">Email

                  </th>
              </tr>
          </thead>
          <tbody> 
            @foreach($patients as $patient)
            <tr>
              <td>{{ $patient->fullName}}</td>
              <td>{{ $patient->gender}}</td>
              <td>{{ $patient->city}}</td>
              <td>{{ $patient->address}}</td>
              <td>{{ $patient->email}}</td>
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