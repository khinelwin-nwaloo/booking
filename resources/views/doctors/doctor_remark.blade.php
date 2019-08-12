@extends('layouts.admin')
@section('content')

<div class="page-content">
  <div class="row">
    <div class="col-md-2">
      
    </div>
   <form class="form-horizontal" method="post" 
        action="{{ url('appointment/dr_remark') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
    <div class="col-md-8">
      <div>
        <label>Remark</label>
      </div>
      <div>
         <input type="text" name="app_id" id="app_id" value="{{ $appointment->id }}">
        <textarea id="doc_remark" name="doc_remark">{{ $appointment->doctor_remarks }}</textarea>
      </div>

      <button type="submit" align ="center" class="btn btn-primary">Save</button>
    </div>
     </form>
    <div class="col-md-2">
      
    </div>
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