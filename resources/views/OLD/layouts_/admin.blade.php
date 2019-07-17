<!DOCTYPE html>
<html>
<head>

  <title>ZANN</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <script>
    window.Laravel = <?php echo json_encode([
      'csrfToken' => csrf_token(),
      ]); ?>
    </script>
    @yield('css')
  
    <!-- <link rel="shortcut icon" type="image/x-icon" href="{{url('/assets/logo/fav.ico')}}"> -->
    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="{{url('/assets/css/bootstrap.min.css')}}" />
    <!-- <link rel="stylesheet" href="{{url('/assets/css/bootstrap.4.1.3.min.css')}}" />
 -->
    <link rel="stylesheet" href="{{url('/assets/font-awesome/4.5.0/css/font-awesome.min.css')}}" />
    <!-- text fonts -->
    <link rel="stylesheet" href="{{url('/assets/css/fonts.googleapis.com.css')}}" />
    <link rel="stylesheet" href="{{url('/assets/css/chosen.min.css')}}" />
    <!-- ace styles -->
    <link rel="stylesheet" href="{{url('/assets/css/ace.min.css')}}" class="ace-main-stylesheet" id="main-ace-style" />
    <link rel="stylesheet" href="{{url('assets/css/bootstrap-datepicker3.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('/assets/css/ace-skins.min.css')}}" />
    <link rel="stylesheet" href="{{url('/assets/css/ace-rtl.min.css')}}" />

    <link rel="stylesheet" href="{{url('/assets/css/bootstrap-select.css')}}">
   <link rel="stylesheet" href="{{url('/assets/css/styles.css')}}">
   <link rel="stylesheet" href="{{url('/assets/css/appraisal.css')}}">
   <!-- datatable -->
    <link rel="stylesheet" href="{{url('/assets/library/datatable/css/jquery.dataTables.min.css')}}" />
    <link rel="stylesheet" href="{{url('/assets/library/datatable/css/dataTables.bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{url('/assets/library/fullcalendar/css/fullcalendar.min.css')}}" />
    <link rel="stylesheet" href="{{url('/assets/library/fullcalendar/css/fullcalendar.print.min.css')}}" media="print"/>
    <!-- fullcalendar -->

    <link rel="stylesheet" href="{{url('/assets/css/material-design-iconic-font.min.css')}}" />
    <link rel="stylesheet" href="{{url('/assets/css/style.css')}}" />

</head>
    <!--  -->
  <!-- FOR BODY -->
  <body class="no-skin">

   @include('partials.adminheader')
   <div class="main-container ace-save-state" id="main-container">
     @include('partials.sidebar')
     <div class="main-content">
      <div class="main-content-inner">
       @yield('content')
     </div>
   </div>
    @include('partials.adminfooter')
 </div>

 <script type="text/javascript" src="{{url('/assets/js/jquery-2.1.4.min.js')}}"></script>
 <script src="{{url('/assets/js/ace.min.js')}}"></script>
 <script type="text/javascript" src="{{url('/assets/js/bootstrap.min.js')}}"></script>
 <!-- <script type="text/javascript" src="{{url('/assets/js/bootstrap.4.1.3.min.js')}}"></script> -->
 <script type="text/javascript" src="{{url('/assets/js/chosen.jquery.min.js')}}"></script>
 <!-- moment and its datepicker -->
 <script type="text/javascript" src="{{url('/assets/js/moment.min.js')}}"></script>
  <script type="text/javascript" src="{{url('/assets/js/bootstrap-datepicker.js')}}"></script>

<!--  <script type="text/javascript" src="{{url('/assets/library/datepicker/js/bootstrap-datepicker.js')}}"></script> -->
 <!-- datatable -->
 <script type="text/javascript" src="{{url('/assets/library/datatable/js/jquery.dataTables.min.js')}}"></script>
 <script type="text/javascript" src="{{url('/assets/library/fullcalendar/js/fullcalendar.min.js')}}"></script>
<!--  -->
 <script src="{{url('/assets/js/chosen.jquery.min.js')}}"></script>
 <script type="text/javascript" src="{{url('assets/js/bootstrap-select.js')}}">  </script>
 <script type="text/javascript" src="{{url('/assets/js/zann.js')}}"></script>

  @yield('js')
</body>
</html>