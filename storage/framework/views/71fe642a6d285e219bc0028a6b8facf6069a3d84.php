<?php $__env->startSection('content'); ?>
<!-- /Page Breadcrumb -->
<div class="row">
  <?php if(session ('success')): ?>
  <div id="successMessage" class="alert alert-success col-md-5">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <?php echo e(session('success')); ?>

  </div>
  <?php endif; ?>
  <?php if(session ('fail')): ?>
  <div id="successMessage" class="alert alert-danger">
   <button type="button" class="close" data-dismiss="alert">×</button>
    <?php echo e(session('fail')); ?>

  </div>
  <?php endif; ?>
</div>
<!-- Page Breadcrumb -->
<br>
<div id="">
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-aqua"><i class="menu-icon fa fa-user"></i></span>

      <div class="info-box-content">
        <?php if($patient_count != 0 ): ?>
        <span class="info-box-text">
          <b>Register Patient</b>
        </span>
        <span class="info-box-number">
          <?php echo e($patient_count); ?> 
        </span>
        
      
        <?php else: ?>
        <span class="info-box-text">
          <b>Registerd Patient</b>
        </span>
        <span class="info-box-number">
          0
        </span>
        <?php endif; ?>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-red"><i class="menu-icon fa fa-user"></i></span>
      <div class="info-box-content">      
        <?php if($doctor_count != 0 ): ?>
        <span class="info-box-text">
          <b>Total Doctor</b>
        </span>
        <span class="info-box-number">
          <?php echo e($doctor_count); ?>

        </span>
        <?php else: ?>
        <span class="info-box-text">
          <b>Total Doctor</b>
        </span>
        <span class="info-box-number">
          0
        </span>
        <?php endif; ?>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  	<div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-aqua"><i class="menu-icon fa fa-desktop"></i></span>

      <div class="info-box-content">
        <?php if($appointment_total != 0 ): ?>
        <span class="info-box-text">
          <b>Total Appointment</b>
        </span>
        <span class="info-box-number">
          <?php echo e($appointment_total); ?> 
        </span>
        
      
        <?php else: ?>
        <span class="info-box-text">
          <b>Total Appointment</b>
        </span>
        <span class="info-box-number">
          0
        </span>
        <?php endif; ?>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>

  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-aqua"><i class="menu-icon fa fa-user"></i></span>

      <div class="info-box-content">
        <?php if($today_appontent != 0 ): ?>
        <span class="info-box-text">
          <b>Today Appointment</b>
        </span>
        <span class="info-box-number">
          <?php echo e($today_appontent); ?> 
        </span>
        
      
        <?php else: ?>
        <span class="info-box-text">
          <b>Today Appointment</b>
        </span>
        <span class="info-box-number">
          0
        </span>
        <?php endif; ?>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- fix for small devices only -->
  <div class="clearfix visible-sm-block"></div>

  
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
</div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\booking\resources\views/dashboard.blade.php ENDPATH**/ ?>