<?php $__env->startSection('content'); ?>
<div class="page-content" id="video_page">
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
    <div class="col-md-3"> </div>
    <div class="col-md-6"> 

       <?php $user = session()->get('user');?>
        <?php if($user->role_id == 2): ?>

      <h2>Change Doctor' Password</h2>
      <br>
      <form class="form-horizontal" method="post" action="<?php echo e(url('/doctors/'.$doctor_info['id'])); ?>" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

        <?php echo e(method_field('PUT')); ?>

       
        <div class="form-group  <?php echo e($errors->has('old_password') ? ' has-error' : ''); ?>">
          <label for="old_password" ><?php echo e(__('Old Password')); ?></label>
          <input id="old_password" type="password" class="form-control" name="old_password" placeholder="Password" autocomplete="password">

          <?php if($errors->has('old_password')): ?>            
          <span class="help-block">
            <strong><?php echo e($errors->first('old_password')); ?></strong>
          </span>
          <?php endif; ?>  
        </div>

        <div class="form-group  <?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
          <label for="password" ><?php echo e(__('Password')); ?></label>
          <input id="password" type="password" class="form-control" name="password" placeholder="Password" autocomplete="password">

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

        <?php else: ?>

        <h2>Edit Doctor' Information</h2>
        <input type="hidden" name="admin_id" value="<?php echo e($doctor_info->admin_id); ?>">    
        <input type="hidden" name="role_id" value="<?php echo e($doctor_info->role_id); ?>">   

        <div class="form-group <?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
          <label for="name" ><?php echo e(__('Name')); ?></label>
          <input id="name" type="text" class="form-control " name="name" 
          value="<?php echo e($doctor_info->name); ?>" autocomplete="name" placeholder="Name">

          <?php if($errors->has('name')): ?>            
          <span class="help-block">
            <strong><?php echo e($errors->first('name')); ?></strong>
          </span>
          <?php endif; ?>    
        </div>

        <div class="form-group  <?php echo e($errors->has('department_id') ? ' has-error' : ''); ?>">
          <label for="department_id" ><?php echo e(__('Departmemnt')); ?></label>
          <select name="department_id" id="category" class="form-control selectpicker"> 
            <option value="">Select Department</option >
            <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($department->id); ?>" 
              <?php echo e($doctor_info->department_id == $department->id ? 'selected' : ''); ?> ><?php echo e($department->name); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <?php if($errors->has('department_id')): ?>            
            <span class="help-block">
              <strong><?php echo e($errors->first('department_id')); ?></strong>
            </span>
            <?php endif; ?>   
          </div>

          <div class="form-group  <?php echo e($errors->has('degree') ? ' has-error' : ''); ?>">
            <label for="degree" ><?php echo e(__('Degree')); ?></label>
            <input id="degree" type="text" class="form-control" name="degree" value="<?php echo e($doctor_info->degree); ?>" placeholder="Degree" autocomplete="degree">
            <?php if($errors->has('department_id')): ?>            
            <span class="help-block">
              <strong><?php echo e($errors->first('department_id')); ?></strong>
            </span>
            <?php endif; ?>  
          </div>

          <div class="form-group">
            <?php 
            $female = "";$male="";
            if($doctor_info->gender =='Male'){
              $male = "checked";
            }else if($doctor_info->gender =='Female'){
              $female = "checked";
            }

            ?>
            <label class="radio-inline">
              <input type="radio" value="Male" name="gender" <?php echo e($male); ?>>Male
            </label>
            <label class="radio-inline">
              <input type="radio" value="Female" name="gender" <?php echo e($female); ?>>Female
            </label>
          </div>
          <div class="form-group  <?php echo e($errors->has('dob') ? ' has-error' : ''); ?>">
            <label for="dob" ><?php echo e(__('DOB')); ?></label>
            <div class="input-group">
              <input id="dob" type="text" class="form-control" name="dob" value="<?php echo e($doctor_info->dob); ?>" placeholder="date of birth" autocomplete="dob">
              <span class="input-group-addon">
                <i class="fa fa-calendar bigger-110"></i>
              </span>
            </div>
            <?php if($errors->has('dob')): ?>            
            <span class="help-block">
              <strong><?php echo e($errors->first('dob')); ?></strong>
            </span>
            <?php endif; ?>  
          </div>

          <div class="form-group  <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
            <label for="email" ><?php echo e(__('Email')); ?></label>
            <input id="email" type="text" class="form-control" name="email" value="<?php echo e($doctor_info->email); ?>" placeholder="Email" autocomplete="email">
            <?php if($errors->has('email')): ?>            
            <span class="help-block">
              <strong><?php echo e($errors->first('email')); ?></strong>
            </span>
            <?php endif; ?>  
          </div>

          <div class="form-group  <?php echo e($errors->has('phone_number') ? ' has-error' : ''); ?>">
            <label for="phone_number" ><?php echo e(__('Phone Number')); ?></label>
            <input id="phone_number" type="number" class="form-control" name="phone_number" value="<?php echo e($doctor_info->phone); ?>" placeholder="Phone Number" autocomplete="phone_number">

            <?php if($errors->has('phone_number')): ?>            
            <span class="help-block">
              <strong><?php echo e($errors->first('phone_number')); ?></strong>
            </span>
            <?php endif; ?>  
          </div>

          <div class="form-group  <?php echo e($errors->has('address') ? ' has-error' : ''); ?>">
            <label for="address" ><?php echo e(__('Address')); ?></label>
            <textarea id="address" class="form-control" name="address"><?php echo e($doctor_info->address); ?></textarea>

            <?php if($errors->has('address')): ?>            
            <span class="help-block">
              <strong><?php echo e($errors->first('address')); ?></strong>
            </span>
            <?php endif; ?>  
          </div>
          <?php endif; ?>
          <button type="submit" align ="center" class="btn btn-primary">Save</button>
          <a href="<?php echo e(url('/doctors')); ?>" align ="center" class="btn btn-primary">Cancel</a>
        </form>
      </div>


    </div>

  </div>
  <?php $__env->stopSection(); ?>

  <?php $__env->startSection('js'); ?>

  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\booking\resources\views/doctors/edit.blade.php ENDPATH**/ ?>