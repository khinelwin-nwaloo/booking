    <header id="header">
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6 col-4 header-top-left">
                        <a href="tel:+95 9 259 175 889"><span class="lnr lnr-phone-handset"></span> <span class="text"><span class="text">+959 259 175 889</span></span></a>
                        <a href="mailto:contact@ziiwaka.com"><span class="lnr lnr-envelope"></span> <span class="text"><span class="text">contact@ziiwaka.com</span></span></a>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-8 header-top-right">
                     <?php $user = session()->get('user');  ?>
                     <?php if($user): ?>
                     <a href="<?php echo e(url('/patient/history')); ?>" class="primary-btn text-uppercase">History</a>
                     <a href="<?php echo e(url('/appointments/create')); ?>" class="primary-btn text-uppercase">Book An Appointment</a>

                     <a  class="btn btn-default btn-flat" href="<?php echo e(url('logout')); ?>" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                     <i class="ace-icon fa fa-power-off"></i> Logout </a>

                     <form id="logout-form" action="<?php echo e(url('logout')); ?>" method="POST" style="display: none;">
                        <?php echo e(csrf_field()); ?>

                    </form>   

                    <?php else: ?>
                    <a href="<?php echo e(url('/login')); ?>" class="primary-btn text-uppercase">Log In</a>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </div>
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="<?php echo e(url('/home')); ?>"><img src="<?php echo e(url('assets/img/logo (2).png')); ?>" alt="Ziiwaka Medical Care" title="ZMC" width="125" height="50" /></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="<?php echo e(Request::is('home')?'active':''); ?>"><a href="<?php echo e(url('/home')); ?>">Home</a></li>
                    <li class="<?php echo e(Request::is('about')?'active':''); ?>"><a href="<?php echo e(url('/about')); ?>">About</a></li>
                    <li class="<?php echo e(Request::is('service')?'active':''); ?>"><a href="<?php echo e(url('/service')); ?>">Services</a></li>
                    <li class="<?php echo e(Request::is('doctor')?'active':''); ?>"><a href="<?php echo e(url('/doctor')); ?>">Doctors</a></li>
                    <li class="<?php echo e(Request::is('department')?'active':''); ?>"><a href="<?php echo e(url('/department')); ?>">Departments</a></li>
                    <li class="<?php echo e(Request::is('contact')?'active':''); ?>"><a href="<?php echo e(url('/contact')); ?>" >Contact Us</a></li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
    </header><!-- #header --><?php /**PATH C:\xampp\htdocs\hospital_booking\resources\views/partials/header.blade.php ENDPATH**/ ?>