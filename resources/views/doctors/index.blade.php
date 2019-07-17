@extends('layouts.admin')
@section('content')
<div class="page-header page-content">
  <a class="btn btn-primary" href="{{url('/doctors/create')}}">
    <i class="fa fa-fw fa-plus"></i>  
    Add New Doctor
  </a>
</div>
<div class="page-content">
  <div class="row">
    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th class="th-sm">No</th>
          <th class="th-sm">Name</th>
          <th class="th-sm">Specilization</th>
          <th class="th-sm">Gender </th>
          <th class="th-sm">D.O.B</th>
          <th class="th-sm">Phone</th>
          <th class="th-sm">Email </th>
          <th class="th-sm"> Address</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody> 
        <?php $count = 0; ?>
        @foreach($doctors as $doctor)
        <tr>
          <td>{{ ++$count}}</td>
          <td>{{ $doctor->name}}</td>
          <td>{{ $doctor->department->name}}</td>
          <td>{{ $doctor->gender}}</td>
          <td>{{ $doctor->dob}}</td>
          <td>{{ $doctor->phone}}</td>
          <td>{{ $doctor->email}}</td>
          <td>{{ $doctor->address}}</td>
          <td>
            <a href="{{url('doctors/'.$doctor['id'].'/edit')}}" class="btn btn-primary">Edit</a>
            <form action="{{url('/doctors/'.$doctor->id)}}" method="post" class="inline">

              {{method_field('DELETE')}}
              {{ csrf_field() }}
              <a data-id="{{$doctor->id}}" class="red btn btn-danger" data-toggle="modal" data-target="#confirmDelete">
              Delete
              </a>

            </form>

            @include('partials.confirmdelete')
          </td>
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