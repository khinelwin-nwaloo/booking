<?php $__env->startSection('content'); ?>


<section class="banner-area relative about-banner" id="home">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="about-content col-lg-12">
        <h1 class="text-white">
          <?php if(!$appointments->isEmpty()): ?>
          Appointment History
          <?php else: ?>
          No History Appointment
          <?php endif; ?>
        </h1>
      </div>
    </div>
  </div>
</section>
<br>
<div>
  <?php if(session ('success')): ?>
  <div id="successMessage" class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <?php echo e(session('success')); ?>

  </div>
  <?php endif; ?>
  <?php if(session ('fail')): ?>
  <div id="successMessage" class="alert alert-danger">
   <button type="button" class="btm btn-primary" data-dismiss="alert">×</button>
   <?php echo e(session('fail')); ?>

 </div>
 <?php endif; ?>
</div>
<section class="team-area section-gap">
  <div class="container">
    <div class="page-content">
      <div class="row">

        <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th class="th-sm">No</th>
              <th class="th-sm">Doctor's Name</th>
              <th class="th-sm">Date </th>
              <th class="th-sm">Department</th>
              <th class="th-sm">Reason</th>
              <th class="th-sm">Remark</th>
              <th></th>
            </tr>
          </thead>

          <tbody> 
            <?php if(!$appointments->isEmpty()): ?>
            <?php $count = 0; ?>
            <?php $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e(++$count); ?></td>
              <td><?php echo e($appointment->doctor->name); ?></td>
              <td><?php echo e($appointment->appointment_date); ?></td>
              <td><?php echo e($appointment->department->name); ?></td>
              <td><?php echo e($appointment->reason); ?></td>
              <td><?php echo e($appointment->remarks); ?></td>
              <td align="center">
                <?php if($appointment->status == 2): ?>
                Finish
                <?php elseif($appointment->status == 0): ?>
                Waiting
                <?php elseif($appointment->status == 3): ?>
                Completed
                <?php endif; ?>
              </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
          </tbody>
        </table>

      </div>

    </div>
  </div>
</section>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\booking\resources\views/patient/history.blade.php ENDPATH**/ ?>