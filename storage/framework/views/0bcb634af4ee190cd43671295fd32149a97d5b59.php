<?php $__env->startSection('content'); ?>
<section class="banner-area relative about-banner" id="home">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="about-content col-lg-12">
        <h1 class="text-white">
          Your Personal Infromation
        </h1>
      </div>
    </div>
  </div>
</section>
<br>
<section class="team-area">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="menu-content pb-70 col-lg-8">
       <form class="form-horizontal" method="post" action="<?php echo e(url('patient/create')); ?>" enctype="multipart/form-data">
         <?php echo e(csrf_field()); ?>

         <div class="form-group <?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
          <label for="name" ><?php echo e(__('Name')); ?></label>
          <input id="name" type="name" class="form-control " name="name" value="<?php echo e(old('name')); ?>" autocomplete="name" placeholder="Name">

          <?php if($errors->has('name')): ?>            
          <span class="help-block">
            <strong><?php echo e($errors->first('name')); ?></strong>
          </span>
          <?php endif; ?>    
        </div>

        <div class="form-group">
         <label class="radio-inline">
          <input type="radio" value="Male" name="gender" checked>Male
        </label>
        <label class="radio-inline">
          <input type="radio" value="Female" name="gender">Female
        </label>
      </div>
      <div class="form-group  <?php echo e($errors->has('age') ? ' has-error' : ''); ?>">
        <label for="age" ><?php echo e(__('Age')); ?></label>
        <input id="age" type="number" class="form-control <?php if ($errors->has('age')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('age'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="age" value="<?php echo e(old('age')); ?>" placeholder="Age" nu autocomplete="age">

        <?php if($errors->has('age')): ?>            
        <span class="help-block">
          <strong><?php echo e($errors->first('age')); ?></strong>
        </span>
        <?php endif; ?>  
      </div>
      <div class="form-group  <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
        <label for="email" ><?php echo e(__('Email')); ?></label>
        <input id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>" placeholder="Email" autocomplete="email">

        <?php if($errors->has('email')): ?>            
        <span class="help-block">
          <strong><?php echo e($errors->first('email')); ?></strong>
        </span>
        <?php endif; ?>  
      </div>

      <div class="form-group  <?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
        <label for="password" ><?php echo e(__('Password')); ?></label>
        <input id="password" type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" value="<?php echo e(old('password')); ?>" placeholder="Password" autocomplete="password">

        <?php if($errors->has('password')): ?>            
        <span class="help-block">
          <strong><?php echo e($errors->first('password')); ?></strong>
        </span>
        <?php endif; ?>  
      </div>
      <div class="form-group">

       <label for="password-confirm" ><?php echo e(__('Confrim Password')); ?></label>

       <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
       
     </div>

     <div class="form-group  <?php echo e($errors->has('phone_number') ? ' has-error' : ''); ?>">
      <label for="phone_number" ><?php echo e(__('Phone Number')); ?></label>
      <input id="phone_number" type="number" class="form-control <?php if ($errors->has('phone_number')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('phone_number'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="phone_number" value="<?php echo e(old('phone_number')); ?>" placeholder="Phone Number" nu autocomplete="phone_number">

      <?php if($errors->has('phone_number')): ?>            
      <span class="help-block">
        <strong><?php echo e($errors->first('phone_number')); ?></strong>
      </span>
      <?php endif; ?>  
    </div>

    <div class="form-group  <?php echo e($errors->has('address') ? ' has-error' : ''); ?>">
      <label for="address" ><?php echo e(__('Address')); ?></label>
      <textarea id="address"  class="form-control <?php if ($errors->has('address')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('address'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="address" value="<?php echo e(old('address')); ?>" placeholder="Address" autocomplete="address">
      </textarea>

      <?php if($errors->has('address')): ?>            
      <span class="help-block">
        <strong><?php echo e($errors->first('address')); ?></strong>
      </span>
      <?php endif; ?>  
    </div>

    

    <button type="submit" align ="center" class="btn btn-primary">Register</button>
    <a href="<?php echo e(url('/home')); ?>" align ="center" class="btn btn-primary">Cancel</a>
  </form>
  
</div>
</div>
</div>
</div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\booking\resources\views/patient/register.blade.php ENDPATH**/ ?>