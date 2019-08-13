<?php $__env->startSection('content'); ?>

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
        <?php $__currentLoopData = $his_patient; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $history): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e(++$count); ?></td>
          <td><?php echo e($history->patient->name); ?></td>
          <td><?php echo e($history->patient->gender); ?></td>
          <td><?php echo e($history->patient->age); ?></td>
          <td><?php echo e($history->patient->phone); ?></td>
          <td><?php echo e($history->patient->email); ?></td>
          <td><?php echo e($history->patient->address); ?></td>
          <td><?php echo e($history->doctor_remarks); ?></td>
          <td> <a href="<?php echo e(url('/appointment/doctor_remark/'.$history->id)); ?>">Edit</a></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hospital_booking\resources\views/doctors/history_patients.blade.php ENDPATH**/ ?>