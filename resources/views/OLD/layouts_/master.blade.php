<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <title>Hospital Booking</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="csrf-token" content="{{ csrf_token() }}">

  @yield('css')
  <!-- Scripts -->
  <script>
    window.Laravel = {!! json_encode([
      'csrfToken' => csrf_token(),
      ]) !!};
    </script>

    <link rel="shortcut icon" type="icon/image" href="{{url('/assets/images/logo/fav.png')}}">
    <!-- bootstrap & fontawesome -->

    <link rel="stylesheet" type="text/css" href="{{url('/assets/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/nice-select.css')}}" type="text/css">
   <link rel="stylesheet" href="{{url('/assets/css/font-awesome.min.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{url('/assets/css/bootstrap.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{url('/assets/css/owl.carousel.css')}}" type="text/css">
    <!-- text fonts -->
    <link rel="stylesheet" href="{{url('/assets/css/linearicons.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{url('/assets/css/magnific-popup.css')}}" type="text/css">

    <link rel="stylesheet" href="{{url('/assets/css/animate.min.css')}}" type="text/css"/>
    <link rel='stylesheet' href="{{url('/assets/css/main.css')}}" type="text/css" />


  </head>

  <body>

   @include('partials.header')

     @yield('content')

      @include('partials.footer')


      <script type="text/javascript" src="{{url('assets/js/jquery-2.1.4.min.js')}}"></script>
      <script type="text/javascript" src="{{url('assets/js/popper.min.js')}}"></script>
      <script type="text/javascript" src="{{url('assets/js/vendor/bootstrap.min.js')}}"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
      <script type="text/javascript" src="{{url('assets/js/jquery-ui.js')}}"></script>
      <script type="text/javascript" src="{{url('assets/js/easing.min.js')}}"></script>
      <script type='text/javascript' src="{{url('assets/js/hoverIntent.js')}}"></script>
      <script type="text/javascript" src="{{url('assets/js/superfish.min.js')}}"></script>
      <script type="text/javascript" src="{{url('assets/js/jquery.ajaxchimp.min.js')}}"></script>
      <script type="text/javascript" src="{{url('assets/js/jquery.magnific-popup.min.js')}}"></script>
      <script type="text/javascript" src="{{url('assets/js/jquery.tabs.min.js')}}"></script>
      <script type="text/javascript" src="{{url('assets/js/jquery.nice-select.min.js')}}"></script>
      <script type="text/javascript" src="{{url('assets/js/owl.carousel.min.js')}}">  </script>
      <script type="text/javascript" src="{{url('assets/js/mail-script.js')}}">  </script>
      <script type="text/javascript" src="{{url('assets/js/main.js')}}"> </script>

      @yield('js')

    </body>
    </html>