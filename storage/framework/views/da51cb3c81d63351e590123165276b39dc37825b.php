<?php $__env->startSection('content'); ?>


<section class="banner-area relative about-banner " id="home">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="about-content col-lg-12">
        <h1 class="text-white">
         Appointment Details
        </h1>
      </div>
    </div>
  </div>
</section>
<br>
<div class="table-info">
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
<!-- <section class="team-area section-gap"> -->
  <div class="container">
    <div class="page-content">
      <div class="row col-md-8 offset-2">
        <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
          <thead>
            <tr class="table-info" >
              <th class="th-sm" width="30%">Patient Name</th>
              <td><?php echo e($appointment->patient->name); ?></td>
            </tr>
            <tr class="table-info" >
              <th class="th-sm" width="30%">Date</th>
              <td><?php echo e(date_format($appointment->created_at,"Y-m-d")); ?></td>
            </tr>
            <tr class="table-info" >
              <th class="th-sm" width="30%">Patient's Remark</th>
              <td><?php echo e($appointment->remarks); ?></td>
            </tr>
            <tr class="table-info" >
              <th class="th-sm" width="30%">Reason</th>
              <td><?php echo e($appointment->reason); ?></td>
            </tr>

            <tr class="table-info" >
              <th class="th-sm" width="30%">Doctor Name</th>
              <td><?php echo e($appointment->doctor->name); ?></td>
            </tr>
            <tr class="table-info" >
              <th class="th-sm" width="30%">Department</th>
              <td><?php echo e($appointment->department->name); ?></td>
            </tr>
            <tr class="table-info" >
              <th class="th-sm" width="30%">Retake Date </th>
              <td><?php echo e($appointment->retake_date); ?></td>
            </tr>
            <tr class="table-info" >
              <th class="th-sm" width="30%">Dr's Comment</th>
              <td><?php echo e($appointment->doctor_remarks); ?></td>
            </tr>
          </thead>

          
        </table>

      </div>

    </div>
  </div>
<!-- </section> -->


<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hospital_booking\resources\views/patient/details.blade.php ENDPATH**/ ?>