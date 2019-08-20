<?php $__env->startSection('content'); ?>

<div class="page-content">
  <div class="row">
    <div class="col-md-3">
      
    </div>
   <form class="form-horizontal" method="post" 
        action="<?php echo e(url('appointment/dr_remark')); ?>" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

    <div class="col-md-6">
        <div class="form-group <?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
        <label for="name" ><?php echo e(__('Patient Name')); ?></label>
        <input type="text" class="form-control"  name="name" value="<?php echo e($appointment->patient->name); ?>" disabled>
        

        <?php if($errors->has('name')): ?>            
        <span class="help-block">
          <strong><?php echo e($errors->first('name')); ?></strong>
        </span>
        <?php endif; ?>    
      </div>

      <div class="form-group <?php echo e($errors->has('remark') ? ' has-error' : ''); ?>">
        <label for="remark" ><?php echo e(__('Patient Remark')); ?></label>
        <input type="text" class="form-control"  name="remark" value="<?php echo e($appointment->remarks); ?>" disabled>
        

        <?php if($errors->has('remark')): ?>            
        <span class="help-block">
          <strong><?php echo e($errors->first('remark')); ?></strong>
        </span>
        <?php endif; ?>    
      </div>

      <div class="form-group <?php echo e($errors->has('doc_remark') ? ' has-error' : ''); ?>">
        <label for="name" ><?php echo e(__('Remark For Patient')); ?></label>
        <input type="hidden" name="app_id" id="app_id" value="<?php echo e($appointment->id); ?>">
        <textarea id="doc_remark" name="doc_remark" class="form-control "><?php echo e($appointment->doctor_remarks); ?></textarea>
        

        <?php if($errors->has('doc_remark')): ?>            
        <span class="help-block">
          <strong><?php echo e($errors->first('doc_remark')); ?></strong>
        </span>
        <?php endif; ?>    
      </div>
      <!-- <div class="form-group <?php echo e($errors->has('retake') ? ' has-error' : ''); ?>">
        <label for="name" ><?php echo e(__('Retake')); ?></label>
        <?php if($appointment->retake == 1 ): ?> 
            <input type="checkbox" name="retake" checked>
        <?php else: ?>
             <input type="checkbox" name="retake" >
        <?php endif; ?>

        


        <?php if($errors->has('retake')): ?>            
        <span class="help-block">
          <strong><?php echo e($errors->first('retake')); ?></strong>
        </span>
        <?php endif; ?>    
      </div> -->
      <div class="form-group  <?php echo e($errors->has('appointment_date') ? ' has-error' : ''); ?>">
          <label for="duties" ><?php echo e(__('Appointment Date')); ?></label>
          <div class="input-group">
            <input id="appointment_date" type="text" class="form-control" name="appointment_date" value="<?php echo e(old('appointment_date')); ?>" placeholder="Appointment date" autocomplete="off">
            <span class="input-group-addon">
              <i class="fa fa-calendar bigger-110"></i>
            </span>
          </div> 
          <?php if($errors->has('appointment_date')): ?>            
          <span class="help-block">
            <strong style="color: red;"><?php echo e($errors->first('appointment_date')); ?></strong>
          </span>
          <?php endif; ?> 
        </div>

  
      <button type="submit" align ="center" class="btn btn-primary">Save</button>
    </div>
     </form>
    <div class="col-md-3">
      
    </div>
  </div>

</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script type="text/javascript">
  $(document).ready(function () {
    $('#dtBasicExample').DataTable({
      "paging": "simple" 
      // false to disable pagination (or any other option)
    });
    $('.dataTables_length').addClass('bs-select');
  });

  $("#appointment_date").datepicker({ 
    format: 'yyyy-mm-dd'
   });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hospital_booking\resources\views/doctors/doctor_remark.blade.php ENDPATH**/ ?>