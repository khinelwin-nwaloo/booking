<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
  <head>
    <title>Ziiwaka</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <?php echo $__env->yieldContent('css'); ?>
    <!-- Scripts -->
    <script>
      window.Laravel = <?php echo json_encode([
              'csrfToken' => csrf_token(),
      ]); ?>

      ;
    </script>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(url('/assets/logo/fav.ico')); ?>">
    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="<?php echo e(url('/assets/css/bootstrap.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(url('/assets/font-awesome/4.5.0/css/font-awesome.min.css')); ?>" />
    <!-- text fonts -->
    <link rel="stylesheet" href="<?php echo e(url('/assets/css/fonts.googleapis.com.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(url('/assets/css/styles.css')); ?>">
    <!--  <link rel="stylesheet" href="<?php echo e(url('/assets/css/style1.css')); ?>"> -->
    <link rel="stylesheet" href="<?php echo e(url('/assets/css/custom.css')); ?>">
     <link rel="stylesheet" href="<?php echo e(url('assets/css/ace.min.css')); ?>" class="ace-main-stylesheet" id="main-ace-style')}}" />
    <link rel="stylesheet" href="<?php echo e(url('/assets/css/sweetalert.css')); ?>">
  </head>
  <body>
    <div id="login">
      <?php echo $__env->yieldContent('content'); ?>
    </div>


  </div>
  <script type="text/javascript" src="<?php echo e(url('/assets/js/jquery-2.1.4.min.js')); ?>"></script>

  <script type="text/javascript" src="<?php echo e(url('/assets/js/bootstrap.min.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(url('assets/js/sweetalert.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(url('assets/js/hostpital.js')); ?>"></script>

  <?php echo $__env->yieldContent('js'); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\hospital_booking\resources\views/layouts/app.blade.php ENDPATH**/ ?>