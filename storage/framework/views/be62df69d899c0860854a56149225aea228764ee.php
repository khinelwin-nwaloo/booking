<?php $__env->startSection('content'); ?>
<!-- Page Breadcrumb -->
<!-- /Page Breadcrumb -->
<div class="row">
  <?php if(session ('success')): ?>
  <div id="successMessage" class="alert alert-success col-md-5">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <?php echo e(session('success')); ?>

  </div>
  <?php endif; ?>
  <?php if(session ('fail')): ?>
  <span class="message">
    <strong><?php echo e(session('fail')); ?> <br> </strong><br>
  </span>
  <?php endif; ?>
</div>
<div class="page-content" >
  <div class="row" >
    <div class="col-md-2"></div>
    <div class="col-md-8"> 
      <h2>Appointment</h2>
      <form class="form-horizontal" method="post" 
      action="<?php echo e(route('appointments.store')); ?>" enctype="multipart/form-data">
       <?php echo e(csrf_field()); ?>


      <div class="form-group  <?php echo e($errors->has('department_id') ? ' has-error' : ''); ?>">
        <label for="department_id" ><?php echo e(__('Departmemnt')); ?></label>
        <select name="department_id" id="category" class="form-control selectpicker"> 
          <option value="" selected>Select Department</option >
          <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($department->id); ?>"><?php echo e($department->name); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <?php if($errors->has('department_id')): ?>            
        <span class="help-block">
          <strong><?php echo e($errors->first('department_id')); ?></strong>
        </span>
        <?php endif; ?>   
      </div>
      
      <div class="form-group  <?php echo e($errors->has('doctor_id') ? ' has-error' : ''); ?>">
        <label for="doctor_id" ><?php echo e(__('Doctor')); ?></label>
        <select name="doctor_id" id="category" class="form-control selectpicker"> 
          <option value="" selected>Select Doctor</option >
          <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($doctor->id); ?>"><?php echo e($doctor->name); ?> (<?php echo e($doctor->degree); ?>)</option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <?php if($errors->has('doctor_id')): ?>            
        <span class="help-block">
          <strong><?php echo e($errors->first('doctor_id')); ?></strong>
        </span>
        <?php endif; ?>   
      </div>

      <div class="form-group  <?php echo e($errors->has('doctor_id') ? ' has-error' : ''); ?>">
        <div class="input-group">
        <input id="appointment_datetime" type="text" class="form-control" name="appointment_datetime" 
        autocomplete="off" placeholder="appointment_datetime"  value="" >
        <span class="input-group-addon">
          <i class="fa fa-calendar bigger-110"></i>
        </span>
      </div>  
      </div>
  
  <button type="submit" align ="center" class="btn btn-primary">Submit</button>
  <a href="<?php echo e(url('/doctors')); ?>" align ="center" class="btn btn-primary">Cancel</a>
</form>
</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script type="text/javascript">
   $('#appointment_datetime').datetimepicker({
      //mask:'9999/19/39 29:59'
    });
 </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hospital_booking\resources\views/patient/patient_dashboard.blade.php ENDPATH**/ ?>