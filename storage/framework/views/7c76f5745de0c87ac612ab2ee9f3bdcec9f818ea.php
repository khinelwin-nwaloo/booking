<?php $__env->startSection('content'); ?>
<div class="page-content">
 <div class="pro-container">
  <div class="rela-block profile-card">
    <img src="<?php echo e(url('/assets/img/doctors/t3.jpg')); ?>" class="profile-pic user_profile" alt="userphoto" />
    <div class="rela-block profile-name-container">
      <div class="rela-block profile"><?php echo e($doctor['name']); ?></div>
      <div class="rela-block degree"><?php echo e($doctor['degree']); ?></div>
      <div class="rela-block user-desc"><b><i> ( <?php echo e($doctor->department->name); ?> )</i></b></div><br/>
      <div class="rela-block user-desc" id="user_description">PHONE : 0<?php echo e($doctor['phone']); ?></div>
      <br/>
      <div class="rela-block user-desc" id="user_description">DATE OF BIRTH : <?php echo e($doctor['dob']); ?></div>
      <br/>

      <?php
      $gender = $doctor['gender'];
      if($gender == 'Male'){
        $checked_male="checked";
        $checked_female = '';
      }else if($gender=='Female'){
        $checked_male="";
        $checked_female = "checked";
      }else{
        $checked_male="";
        $checked_female = "";
      }
      ?>
      <div class="rela-block user-desc" id="user_description">Gender : <?php echo e($gender); ?>

      </div>
    </div>
    <button class="btn btn-default edit rounded" data-toggle="modal" style="float:right">

      <a href="<?php echo e(url('/doctors/'.$doctor['id'].'/edit')); ?>">Change Password</a></button>
    </div>


  </div>


</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\booking\resources\views/doctors/show.blade.php ENDPATH**/ ?>