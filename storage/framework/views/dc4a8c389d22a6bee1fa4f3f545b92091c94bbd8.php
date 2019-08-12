<?php $__env->startSection('content'); ?>

<div class="page-content">
  <div class="row">
    <div class="col-md-2">
      
    </div>
   <form class="form-horizontal" method="post" 
        action="<?php echo e(url('appointment/dr_remark')); ?>" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

    <div class="col-md-8">
      <div>
        <label>Remark</label>
      </div>
      <div>
         <input type="text" name="app_id" id="app_id" value="<?php echo e($appointment->id); ?>">
        <textarea id="doc_remark" name="doc_remark"><?php echo e($appointment->doctor_remarks); ?></textarea>
      </div>

      <button type="submit" align ="center" class="btn btn-primary">Save</button>
    </div>
     </form>
    <div class="col-md-2">
      
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
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hospital_booking\resources\views/doctors/doctor_remark.blade.php ENDPATH**/ ?>