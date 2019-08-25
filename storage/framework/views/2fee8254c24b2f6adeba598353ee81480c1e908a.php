<?php $__env->startSection('content'); ?>
<div class="row">
    <br><br>
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="panel panel-default">
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
       <div class="panel-heading" style="text-align: center;background-color:lightblue;height:50px;font-size:20px;">Ziiwaka Medical Center</div>
       <div class="panel-body">
        <img style="width:100px; height:100px;display: block;
        margin-left: auto;
        margin-right: auto;vertical-align: middle;" class="center" src="<?php echo e(url('/assets/img/osclogo.png')); ?>">
        <br>
        <form class="form-horizontal" method="POST" 
        action="<?php echo e(url('admin/login')); ?>" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

        <div class="form-group<?php echo e($errors->has('role') ? ' has-error' : ''); ?>">
            <label for="role" class="col-md-4 control-label">Login As</label>

            <div class="col-md-6">
                <select name="role" class="form-control selectpicker">
                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($role->id); ?> "><?php echo e($role->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select> 

            </div>
        </div>

        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control" autocomplete="off" name="email" value="<?php echo e(old('email')); ?>" required autofocus>

                <?php if($errors->has('email')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('email')); ?></strong>
                </span>
                <?php endif; ?>
            </div>
        </div>

        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
            <label for="password" class="col-md-4 control-label">Password</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password" required>

                <?php if($errors->has('password')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('password')); ?></strong>
                </span>
                <?php endif; ?>
            </div>
        </div>

                        <!-- <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div> -->

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hospital_booking\resources\views/auth/adminlogin.blade.php ENDPATH**/ ?>