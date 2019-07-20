<?php $__env->startSection('content'); ?>

<!-- start banner Area -->
<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Doctors
                </h1>
                <p class="text-white link-nav"><a href="<?php echo e(url('/home')); ?>">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="<?php echo e(url('/doctor')); ?>"> Doctors</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->
<!-- Start team Area -->
<section class="team-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-7">
                <div class="title text-center">
                    <h1 class="mb-10">Our Doctors</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center d-flex align-items-center">
            <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 col-md-6 single-team" >
                <a href="<?php echo e(url('/department/'.$department['id'])); ?>" class="doc"> 
                    <div class="grouptitle" style="background-color:lightblue;text-align: center;">
                        <br>
                        <img width="60" style="vertical-align:center;" height="60" 
                        src="<?php echo e(url('/assets/img/departments/'.$department->image)); ?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" />
                        <div class="ww">
                            <br><p class="mm-font mm3">
                            <?php echo e($department->name); ?></p>
                        </div>
                        <br>
                    </div>
                </a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

       <!--  <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-3 col-md-6 single-team">
            <div class="thumb">
                <img class="img-fluid" src="assets/img/doctors/t1.jpg" alt="">
                <div class="align-items-end justify-content-center d-flex">
                    <div class="social-links">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                    <p>
                        <?php echo e($doctor->degree); ?>

                    </p>
                    <h4><?php echo e($doctor->name); ?> </h4>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> -->



        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hospital_booking\resources\views/doctor.blade.php ENDPATH**/ ?>