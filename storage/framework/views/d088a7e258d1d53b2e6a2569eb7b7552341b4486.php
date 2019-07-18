 
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
}


?>
<div class="page-content" id="video_page">
  <div class="row">
    <div class="col-md-12">
      <center> 
        <div class ="header_doctor" >Create Doctor Information </div>
        <br>
      </center>
      <form class="form-horizontal" method="post" action="<?php echo e(route('doctors.store')); ?>" enctype="multipart/form-data">
       <?php echo e(csrf_field()); ?>

       <input type="hidden" name="admin_id" value="<?php echo e($login->id); ?>">    
       <input type="hidden" name="role_id" value="2">

       <div class="form-group">
        <div class="col-md-4  <?php echo e($errors->has('name') ? ' has-error' : ''); ?>"> 
          <label for="name" ><?php echo e(__('Name')); ?></label>
          <input id="name" type="text" class="form-control " name="name" value="<?php echo e(old('name')); ?>" autocomplete="name" placeholder="Name">

          <?php if($errors->has('name')): ?>            
          <span class="help-block">
            <strong><?php echo e($errors->first('name')); ?></strong>
          </span>
          <?php endif; ?>   
        </div> 
        <div class="col-md-4  <?php echo e($errors->has('department_id') ? ' has-error' : ''); ?>">
          <label for="department_id" ><?php echo e(__('Departmemnt')); ?></label>
          <select name="department_id" id="category" class="form-control selectpicker"> 
            <option value="" selected>Select Department</option >
            <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($department->id); ?>"><?php echo e($department->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
          <?php if($errors->has('department_id')): ?>            
          <span class="help-block">
            <strong><?php echo e($errors->first('department_id')); ?></strong>
          </span>
          <?php endif; ?>   
        </div>

        <div class="col-md-4  <?php echo e($errors->has('degree') ? ' has-error' : ''); ?>">
          <label for="degree" ><?php echo e(__('Qualifications')); ?></label>
          <input id="degree" type="text" class="form-control" name="degree" value="<?php echo e(old('degree')); ?>" placeholder="Degree" autocomplete="degree">
          <?php if($errors->has('degree')): ?>            
          <span class="help-block">
            <strong><?php echo e($errors->first('degree')); ?></strong>
          </span>
          <?php endif; ?>  
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-4  <?php echo e($errors->has('phone_number') ? ' has-error' : ''); ?>">
          <label for="phone_number" ><?php echo e(__('Phone Number')); ?></label>
          <input id="phone_number" type="number" class="form-control" name="phone_number" value="<?php echo e(old('phone_number')); ?>" placeholder="Phone Number" autocomplete="phone_number">

          <?php if($errors->has('phone_number')): ?>            
          <span class="help-block">
            <strong><?php echo e($errors->first('phone_number')); ?></strong>
          </span>
          <?php endif; ?>  
        </div>
        <div class="col-md-4" style="margin-top:20px;">
          <center>
           <label class="radio-inline">
            <input type="radio" value="Male" name="gender" checked>Male
          </label>
          <label class="radio-inline">
            <input type="radio" value="Female" name="gender">Female
          </label>
        </center>
      </div>

      <div class="col-md-4  <?php echo e($errors->has('dob') ? ' has-error' : ''); ?>">
        <label for="dob" ><?php echo e(__('DOB')); ?></label>
        <div class="input-group">
          <input id="dob" type="text" class="form-control" name="dob" value="<?php echo e(old('dob')); ?>" placeholder="date of birth" autocomplete="dob">
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
    </div>
    <hr style="border-color: lightblue;">
    <div class="form-group">
      <div class="col-md-4  <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
        <label for="email" ><?php echo e(__('Email')); ?></label>
        <input id="email" type="text" class="form-control" name="email" value="<?php echo e(old('email')); ?>" placeholder="Email" autocomplete="email">

        <?php if($errors->has('email')): ?>            
        <span class="help-block">
          <strong><?php echo e($errors->first('email')); ?></strong>
        </span>
        <?php endif; ?>  
      </div>
      <div class="col-md-4  <?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
        <label for="password" ><?php echo e(__('Password')); ?></label>
        <input id="password" type="password" class="form-control" name="password" value="<?php echo e(old('password')); ?>" placeholder="Password" autocomplete="password">

        <?php if($errors->has('password')): ?>            
        <span class="help-block">
          <strong><?php echo e($errors->first('password')); ?></strong>
        </span>
        <?php endif; ?>  
      </div>

      <div class="col-md-4">

       <label for="password-confirm" ><?php echo e(__('Confrim Password')); ?></label>

       <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

     </div>
   </div>
   <div class="form-group">

    <div class="col-md-12  <?php echo e($errors->has('address') ? ' has-error' : ''); ?>">
      <label for="address" ><?php echo e(__('Address')); ?></label>
      <textarea id="address" class="form-control" name="address"><?php echo e(old('address')); ?></textarea>

      <?php if($errors->has('address')): ?>            
      <span class="help-block">
        <strong><?php echo e($errors->first('address')); ?></strong>
      </span>
      <?php endif; ?>  
    </div>
  </div>
  <hr style="border-color: lightblue;">

  <div class="form-group">
     <div class="col-md-1"> 
      <label for="monday" ><?php echo e(__('Monday')); ?></label>
    </div>
    <div class="col-md-3">
      <?php $times = create_time_range('6:00', '21:00', '30 mins'); ?>
      <select name="monday_start" id="monday_start">

        <option value="">From</option>
        <?php foreach($times as $key=>$val){ ?>
          <option value="<?php echo $val; ?>"><?php echo $val; ?></option>
        <?php } ?>
      </select>
      
      <select name="monday_end" id="monday_end">

        <option value="">To</option>
        <?php foreach($times as $key=>$val){ ?>
          <option value="<?php echo $val; ?>"><?php echo $val; ?></option>
        <?php } ?>
      </select>
    </div>
     <div class="col-md-1"> 
      <label for="tueday" ><?php echo e(__('Tueday')); ?></label>
    </div>
    <div class="col-md-3">
      <?php $times = create_time_range('6:00', '21:00', '30 mins'); ?>
      <select name="tueday_start" id="tueday_start">

        <option value="">From</option>
        <?php foreach($times as $key=>$val){ ?>
          <option value="<?php echo $val; ?>"><?php echo $val; ?></option>
        <?php } ?>
      </select>
    
      <select name="tueday_end" id="tueday_end">

        <option value="">To</option>
        <?php foreach($times as $key=>$val){ ?>
          <option value="<?php echo $val; ?>"><?php echo $val; ?></option>
        <?php } ?>
      </select>

    </div>
    <div class="col-md-1"> 
      <label for="wednesday" ><?php echo e(__('Wednesday')); ?></label>
    </div>
    <div class="col-md-3">
      <?php $times = create_time_range('6:00', '21:00', '30 mins'); ?>
      <select name="wednesday_start" id="wednesday_start">

        <option value="">From</option>
        <?php foreach($times as $key=>$val){ ?>
          <option value="<?php echo $val; ?>"><?php echo $val; ?></option>
        <?php } ?>
      </select>
      
      <select name="wednesday_end" id="wednesday_end">

        <option value="">To</option>
        <?php foreach($times as $key=>$val){ ?>
          <option value="<?php echo $val; ?>"><?php echo $val; ?></option>
        <?php } ?>
      </select>
    </div>
   
  </div>
  <br>
  <div class="form-group">
     <div class="col-md-1"> 
      <label for="thursday" ><?php echo e(__('Thursday')); ?></label>
    </div>
     <div class="col-md-3">
      <?php $times = create_time_range('6:00', '21:00', '30 mins'); ?>
      <select name="thursday_start" id="thursday_start">

        <option value="">From</option>
        <?php foreach($times as $key=>$val){ ?>
          <option value="<?php echo $val; ?>"><?php echo $val; ?></option>
        <?php } ?>
      </select>
      
      <select name="thursday_end" id="thursday_end">

        <option value="">To</option>
        <?php foreach($times as $key=>$val){ ?>
          <option value="<?php echo $val; ?>"><?php echo $val; ?></option>
        <?php } ?>
      </select>
    </div>
     <div class="col-md-1"> 
      <label for="friday" ><?php echo e(__('Friday')); ?></label>
    </div>
    <div class="col-md-3">
      <?php $times = create_time_range('6:00', '21:00', '30 mins'); ?>
      <select name="friday_start" id="friday_start">

        <option value="">From</option>
        <?php foreach($times as $key=>$val){ ?>
          <option value="<?php echo $val; ?>"><?php echo $val; ?></option>
        <?php } ?>
      </select>
      
      <select name="friday_end" id="friday_end">

        <option value="">To</option>
        <?php foreach($times as $key=>$val){ ?>
          <option value="<?php echo $val; ?>"><?php echo $val; ?></option>
        <?php } ?>
      </select>
    </div>
    
    <div class="col-md-1"> 
      <label for="saturday" ><?php echo e(__('Saturday')); ?></label>
    </div>
    <div class="col-md-3">
      <?php $times = create_time_range('6:00', '21:00', '30 mins'); ?>
      <select name="saturday_start" id="saturday_start">

        <option value="">From</option>
        <?php foreach($times as $key=>$val){ ?>
          <option value="<?php echo $val; ?>"><?php echo $val; ?></option>
        <?php } ?>
      </select>
    
      <select name="saturday_end" id="saturday_end">

        <option value="">To</option>
        <?php foreach($times as $key=>$val){ ?>
          <option value="<?php echo $val; ?>"><?php echo $val; ?></option>
        <?php } ?>
      </select>

    </div>
   
  </div>
  <br>  
  <div class="form-group">
    <div class="col-md-1"> 
      <label for="sunday" ><?php echo e(__('Sunday')); ?></label>
    </div>
     <div class="col-md-3">
      
      <?php $times = create_time_range('6:00', '21:00', '30 mins'); ?>
      <select name="sunday_start" id="sunday_start">

        <option value="">From</option>
        <?php foreach($times as $key=>$val){ ?>
          <option value="<?php echo $val; ?>"><?php echo $val; ?></option>
        <?php } ?>
      </select>
      
      <select name="sunday_end" id="sunday_end">

        <option value="">To</option>
        <?php foreach($times as $key=>$val){ ?>
          <option value="<?php echo $val; ?>"><?php echo $val; ?></option>
        <?php } ?>
      </select>
    </div>
  </div>
  <br><br>
  <center> <button type="submit" align ="center" class="btn btn-primary">Save</button>
    <a href="<?php echo e(url('/doctors')); ?>" align ="center" class="btn btn-primary">Cancel</a>
  </center>
</form>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\booking\resources\views/doctors/create.blade.php ENDPATH**/ ?>