@extends('layouts.admin')
@section('content')

<div class="page-content">
  <div class="row">
    <div class="col-md-3">
      
    </div>
   <form class="form-horizontal" method="post" 
        action="{{ url('appointment/dr_remark') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
    <div class="col-md-6">
        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="name" >{{ __('Patient Name') }}</label>
        <input type="text" class="form-control"  name="name" value="{{ $appointment->patient->name }}" disabled>
        

        @if ($errors->has('name'))            
        <span class="help-block">
          <strong>{{ $errors->first('name') }}</strong>
        </span>
        @endif    
      </div>

      <div class="form-group {{ $errors->has('remark') ? ' has-error' : '' }}">
        <label for="remark" >{{ __('Patient Remark') }}</label>
        <input type="text" class="form-control"  name="remark" value="{{ $appointment->remarks }}" disabled>
        

        @if ($errors->has('remark'))            
        <span class="help-block">
          <strong>{{ $errors->first('remark') }}</strong>
        </span>
        @endif    
      </div>

      <div class="form-group {{ $errors->has('doc_remark') ? ' has-error' : '' }}">
        <label for="name" >{{ __('Remark For Patient') }}</label>
        <input type="hidden" name="app_id" id="app_id" value="{{ $appointment->id }}">
        <textarea id="doc_remark" name="doc_remark" class="form-control ">{{ $appointment->doctor_remarks }}</textarea>
        

        @if ($errors->has('doc_remark'))            
        <span class="help-block">
          <strong>{{ $errors->first('doc_remark') }}</strong>
        </span>
        @endif    
      </div>
      <div class="form-group {{ $errors->has('duty_day') ? ' has-error' : '' }}">
        <label for="name" >{{ __('Duty Day') }}</label>
        <select name="reason" id="reason" name="reason" class="form-control selectpicker"> 
          <option value="" selected>Duty Day</option >
          <?php for($i = 0 ; $i < count($duty_day); $i++){ ?>
             <option value="{{ $duty_day[$i] }}" >{{ $duty_day[$i] }} </option >
          <?php } ?>
          
        </select>

        


        @if ($errors->has('duty_day'))            
        <span class="help-block">
          <strong>{{ $errors->first('duty_day') }}</strong>
        </span>
        @endif    
      </div>
      <div class="form-group  {{ $errors->has('appointment_date') ? ' has-error' : '' }}">
          <label for="duties" >{{ __('Appointment Date') }}</label>
          <div class="input-group">
            @if($appointment->retake_date)
            <input id="appointment_date" type="text" class="form-control" name="appointment_date" value="{{ $appointment->retake_date }}" placeholder="Appointment date" autocomplete="off">
            @else
            <input id="appointment_date" type="text" class="form-control" name="appointment_date" value="{{ old('appointment_date') }}" placeholder="Appointment date" autocomplete="off">
            @endif
            <span class="input-group-addon">
              <i class="fa fa-calendar bigger-110"></i>
            </span>
          </div> 
          @if ($errors->has('appointment_date'))            
          <span class="help-block">
            <strong style="color: red;">{{ $errors->first('appointment_date') }}</strong>
          </span>
          @endif 
        </div>

  
      <button type="submit" align ="center" class="btn btn-primary">Save</button>
    </div>
     </form>
    <div class="col-md-3">
      
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

  $("#appointment_date").datepicker({ 
    format: 'yyyy-mm-dd',
    setDate: new Date(),
   });
</script>
@endsection