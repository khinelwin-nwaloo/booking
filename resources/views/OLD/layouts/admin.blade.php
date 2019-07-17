<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <title>ZANN </title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Scripts -->
  <script>
    window.Laravel = {!! json_encode([
      'csrfToken' => csrf_token(),
      ]) !!};
    </script>

    <link rel="shortcut icon" type="image/x-icon" href="{{url('/assets/logo/fav.ico')}}">

    <!--Basic Styles-->
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{url('assets/font-awesome/4.5.0/css/font-awesome.min.css')}}" />
    <!-- text fonts -->
    <link rel="stylesheet" href="{{url('assets/css/fonts.googleapis.com.css')}}" />
    
    <link rel="stylesheet" href="assets/css/jquery-ui.custom.min.css" />
    <link rel="stylesheet" href="{{url('/assets/css/chosen.min.css')}}">
    <link rel="stylesheet" href="{{url('/assets/css/jquery.fancybox-1.3.4.css')}}">
    <!-- ace styles -->
    <link rel="stylesheet" href="{{url('assets/css/ace.min.css')}}" class="ace-main-stylesheet" id="main-ace-style')}}" />
    <link rel="stylesheet" href="{{url('assets/css/bootstrap-datepicker3.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('assets/css/ace-skins.min.css')}}" />
    <link rel="stylesheet" href="{{url('assets/css/ace-rtl.min.css')}}" />
    <link rel="stylesheet" href="{{url('/assets/css/custom.css')}}"> 
    
    <link rel="stylesheet" href="{{url('/assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{url('/assets/css/AdminLTE.min.css')}}">
<!--    <link rel="stylesheet" href="{{url('/assets/css/sweetalert.css')}}">-->
    
    @yield('css')
    <!-- ace settings handler -->
    <script src="{{url('assets/js/ace-extra.min.js')}}"></script> 
    <!-- Firebase App is always required and must be first -->


<!-- Add additional services that you want to use -->
<!-- <script src="https://www.gstatic.com/firebasejs/5.5.3/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.3/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.3/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.3/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.3/firebase-messaging.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.3/firebase-functions.js"></script> -->

  </head>
  <body class="skin-1">
    <!-- Loading Container -->
    <div class="loading-container">
      <div class="loader"></div>
    </div>
    <!--  /Loading Container -->
    <!-- Navbar -->
    @include('partials.navbar')
    <!-- /Navbar -->
    <div class="main-container ace-save-state" id="main-container">

      <!-- Page Sidebar -->
      @include('partials.sidebar')
      <!-- Page Body -->
      <div class="main-content">
        <div class="main-content-inner">
          @yield('content')
          
        </div>
      </div>

    </div>
    <!--Basic Scripts-->
    <script src="{{url('assets/js/jquery-2.1.4.min.js')}}"></script>
    <script src="{{url('assets/js/bootstrap.min.js')}}"></script>

    <script type="text/javascript" src="{{url('assets/js/chosen.jquery.min.js')}}">  </script>

    <!-- ace scripts -->
    <script src="{{url('assets/js/ace-elements.min.js')}}"></script>
    <script src="{{url('assets/js/ace.min.js')}}"></script>
    <script type="text/javascript" src="{{url('/assets/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{url('assets/js/zann.js')}}"></script>

    <script src="{{url('assets/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('assets/js/jquery.dataTables.bootstrap.min.js')}}"></script>
    <script src="{{url('assets/js/dataTables.select.min.js')}}"></script>
    <script src="{{url('assets/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{url('assets/js/duration.js')}}"></script>
    <script src="{{url('assets/js/jquery.fancybox-1.3.4.pack.js')}}"></script>
 
    @yield('js')
  </body>

  </html>