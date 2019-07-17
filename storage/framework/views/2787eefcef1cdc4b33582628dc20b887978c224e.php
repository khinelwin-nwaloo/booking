<?php $__env->startSection('content'); ?>
<div class="row">
  <?php if(session ('success')): ?>
  <div id="successMessage" class="alert alert-success">
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

<div class="signupContainer" >
  <h1 align="center">Ziiwaka Clinic</h1>
  <form class="form-horizontal" method="POST" action="<?php echo e(url('loginpatient')); ?>">
    <?php echo e(csrf_field()); ?>


    <div class="<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
      <input id="email" type="email" name="email" value="<?php echo e(old('email')); ?>" placeholder="Email">
      <?php if($errors->has('email')): ?>
      <span class="help-block">
        <strong><?php echo e($errors->first('email')); ?></strong>
      </span>
      <?php endif; ?>
    </div>
    <div class="<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
      <input id="password" type="password"  name="password" placeholder="Password">
      <?php if($errors->has('password')): ?>
      <span class="help-block">
        <strong><?php echo e($errors->first('password')); ?></strong>
      </span>
      <?php endif; ?>
    </div>
    <br>

    <label align="center"> 
      Don't have an account yet? <a href="<?php echo e(url('register')); ?>">Create an account</a>
    </label>


    <button type="submit" class="register2">
      Log in
    </button>  <br><br>

  </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hospital_booking\resources\views/patient/patient_login.blade.php ENDPATH**/ ?>