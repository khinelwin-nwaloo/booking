<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
  <title>Ziiwaka </title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

  <!-- Scripts -->
  <script>
    window.Laravel = <?php echo json_encode([
      'csrfToken' => csrf_token(),
      ]); ?>;
    </script>

    <!-- <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(url('/assets/logo/fav.ico')); ?>"> -->

    <!--Basic Styles-->
    <link rel="stylesheet" href="<?php echo e(url('assets/css/bootstrap.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(url('assets/font-awesome/4.5.0/css/font-awesome.min.css')); ?>" />
    <!-- text fonts -->
    <link rel="stylesheet" href="<?php echo e(url('assets/css/fonts.googleapis.com.css')); ?>" />
   
    <link rel="stylesheet" href="<?php echo e(url('/assets/css/chosen.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('/assets/css/jquery.fancybox-1.3.4.css')); ?>">
    <!-- ace styles -->
    <link rel="stylesheet" href="<?php echo e(url('assets/css/ace.min.css')); ?>" class="ace-main-stylesheet" id="main-ace-style')}}" />
    <link rel="stylesheet" href="<?php echo e(url('assets/css/bootstrap-datepicker3.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(url('assets/css/ace-skins.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(url('assets/css/ace-rtl.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(url('/assets/css/custom.css')); ?>"> 
    
    <link rel="stylesheet" href="<?php echo e(url('/assets/css/styles.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('/assets/css/AdminLTE.min.css')); ?>">
<!--    <link rel="stylesheet" href="<?php echo e(url('/assets/css/sweetalert.css')); ?>">-->
    
    <?php echo $__env->yieldContent('css'); ?>
    <!-- ace settings handler -->
    <script src="<?php echo e(url('assets/js/ace-extra.min.js')); ?>"></script> 
    <!-- Firebase App is always required and must be first -->


  </head>
  <body class="skin-1">
    <!-- Loading Container -->
    <div class="loading-container">
      <div class="loader"></div>
    </div>
    <!--  /Loading Container -->
    <!-- Navbar -->
    <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- /Navbar -->
    <div class="main-container ace-save-state" id="main-container">

      <!-- Page Sidebar -->
      <?php echo $__env->make('partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- Page Body -->
      <div class="main-content">
        <div class="main-content-inner">
          <?php echo $__env->yieldContent('content'); ?>
          
        </div>
      </div>

    </div>
    <!--Basic Scripts-->
    <script src="<?php echo e(url('assets/js/jquery-2.1.4.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/bootstrap.min.js')); ?>"></script>

    <script type="text/javascript" src="<?php echo e(url('assets/js/chosen.jquery.min.js')); ?>">  </script>

    <!-- ace scripts -->
    <script src="<?php echo e(url('assets/js/ace-elements.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/ace.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(url('/assets/js/bootstrap-datepicker.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/jquery.dataTables.bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/dataTables.select.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/dataTables.buttons.min.js')); ?>"></script>

    <script src="<?php echo e(url('assets/js/jquery.fancybox-1.3.4.pack.js')); ?>"></script>
     <script type="text/javascript"  src="<?php echo e(url('assets/js/hospital.js')); ?>"></script>
    <?php echo $__env->yieldContent('js'); ?>
  </body>

  </html><?php /**PATH C:\xampp\htdocs\hospital_booking\resources\views/layouts/admin.blade.php ENDPATH**/ ?>