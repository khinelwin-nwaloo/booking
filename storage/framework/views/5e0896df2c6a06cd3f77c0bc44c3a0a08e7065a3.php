<?php $__env->startSection('content'); ?>
<?php 
 function create_time_range($start, $end, $interval = '30 mins', $format = '12') {
  $startTime = strtotime($start); 
  $endTime   = strtotime($end);
  $returnTimeFormat = ($format == '12')?'g:i A':'G:i';

  $current   = time(); 
  $addTime   = strtotime('+'.$interval, $current); 
  $diff      = $addTime - $current;

  $times = array(); 
  while ($startTime < $endTime) { 
    $times[] = date($returnTimeFormat, $startTime); 
    $startTime += $diff; 
  } 
  $times[] = date($returnTimeFormat, $startTime); 
  return $times; 
}?>
<div class="page-content" id="video_page">
  <div class="row">
    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th class="th-sm">No </th>
          <th class="th-sm">Name </th>
          <th class="th-sm">Doctor's Name </th>
          <th class="th-sm">Department </th>
          <th class="th-sm">Date </th>
          <th class="th-sm">Status </th>
          <th> </th>
        </tr>
      </thead>
      <tbody> 
        <?php $count = 0; ?>

        <?php $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appoint): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e(++$count); ?></td>
          <td><?php echo e($appoint->patient->name); ?></td>
          <td><?php echo e($appoint->doctor->name); ?></td>
          <td><?php echo e($appoint->department->name); ?></td>
          <td><?php echo e($appoint->appointment_date); ?></td>
          <td><?php echo e($appoint->status); ?></td>
          <td align="center">
            <?php if($user->role_id == 2 ): ?> <!-- doctor -->
            <?php if($appoint->status == 1 ): ?>

            <form action="<?php echo e(url('/appointments/'.$appoint->id)); ?>" method="post" class="inline" enctype="multipart/form-data">
              <?php echo e(csrf_field()); ?>

              <?php echo e(method_field('PUT')); ?>

              <input type="hidden" name="role_id" value="<?php echo e($user->role_id); ?>">    
              <button type="submit" align ="center" class="btn btn-primary">Accept</button>
            </button>

          </form>
          
          <?php elseif($appoint->status == 2): ?>
          Doctor Approved
          <?php elseif($appoint->status == 3): ?>
          Completed
          <?php endif; ?>

          <?php elseif($user->role_id == 1 ): ?> <!-- Admin -->
          <?php if($appoint->status == 0 ): ?>

          <form action="<?php echo e(url('/appointments/'.$appoint->id)); ?>" method="post" class="inline" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <?php echo e(method_field('PUT')); ?>

            <input type="hidden" name="role_id" value="<?php echo e($user->role_id); ?>">    
            <button type="submit" align ="center" class="btn btn-primary">Inform</button>
          </button>
        </form>
        <?php elseif($appoint->status == 1): ?>
        Send to Doctor
        <?php elseif($appoint->status == 2): ?>
        <form action="<?php echo e(url('/appointments/'.$appoint->id)); ?>" method="post" class="inline" enctype="multipart/form-data">
          <?php echo e(csrf_field()); ?>

          <?php echo e(method_field('PUT')); ?>


          <button type="submit" align ="center" class="btn btn-primary">Finish</button>
        </button>

        </form>
      <?php elseif($appoint->status == 3): ?>
      Completed
      <?php endif; ?>
      <?php endif; ?>
    </td>
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
</div>
</div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hospital_booking\resources\views/appointments/index.blade.php ENDPATH**/ ?>