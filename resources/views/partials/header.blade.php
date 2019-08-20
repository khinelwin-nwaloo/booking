    <style type="text/css">

      a.notif {
        position: relative;
        display: block;
        height: 50px;
        width: 50px;
        background: url('assets/img/noti.png');
        background-size: contain;
        text-decoration: none;
      }
      .num {
        position: absolute;
        right: 11px;
        top: 6px;
        color: #fff;
      }
    </style>
    <header id="header">
      <div class="header-top">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-5 col-sm-6 col-4 header-top-left" >
              <a href="tel:+95 9 259 175 889"><span class="lnr lnr-phone-handset"></span> <span class="text"><span class="text">+959 259 175 889</span></span></a>
              <a href="mailto:contact@ziiwaka.com"><span class="lnr lnr-envelope"></span> <span class="text"><span class="text">contact@ziiwaka.com</span></span></a>
            </div>
            <?php $user = session()->get('user');  ?>
            <div class="col-lg-2 col-sm-6 col-8 header-top-right">
              @if($user)

              <?php $patients = \App\Appointment::where('patient_id',$user->id)
              ->where('retake',1)->get();
              $count = count($patients);
              

              ?>
              <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Notification
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @if($count != 0)
                    @foreach($patients as $patient)
                    
                    <a class="dropdown-item" href="#">{{ $patient->doctor_remarks}}</a>
                    
                    @endforeach
                    @else
                    <a class="dropdown-item" href="#">No Retake Appointment</a>
                    @endif

                  </div>
                </li> 
              </ul>
              @endif
            </div>
            @if($user)
            <div class="col-lg-5 col-sm-6 col-8 header-top-left"> 
              
             <!-- <a href="" class="notif"><span class="num">2</span></a> -->
             <a href="{{url('/patient/history')}}"  style="font-weight: bold;font-size:13px;padding-right:15px;">History</a>

             <a href="{{url('/appointments/create')}}" style="font-weight: bold;font-size:13px;padding-right:15px;">Book An Appointment</a>

             <a href="" style="font-weight: bold;font-size:13px;color:lightblue;">{{ $user->name }}</a>

             <a  class="btn btn-default btn-flat" href="{{ url('logout') }}" onclick="event.preventDefault();
             document.getElementById('logout-form').submit();">
             <i class="ace-icon fa fa-power-off"></i> Logout </a>

             <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>   

            @else
            <div class="col-lg-5 col-sm-6 col-8 header-top-right">
              <a href="{{url('/login')}}" class="primary-btn text-uppercase">Log In</a>
              @endif
            </div>

          </div>
        </div>
      </div>
      <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
          <div id="logo">
            <a href="{{url('/home')}}"><img src="{{url('assets/img/logo (2).png')}}" alt="Ziiwaka Medical Care" title="ZMC" width="125" height="50" /></a>
          </div>
          <nav id="nav-menu-container">
            <ul class="nav-menu">
              <li class="{{Request::is('home')?'active':''}}"><a href="{{url('/home')}}">Home</a></li>
              <li class="{{Request::is('about')?'active':''}}"><a href="{{url('/about')}}">About</a></li>
              <li class="{{Request::is('service')?'active':''}}"><a href="{{url('/service')}}">Services</a></li>
              <li class="{{Request::is('department')?'active':''}}"><a href="{{url('/department')}}">Find Doctors</a></li>
              <!-- <li class="{{Request::is('department')?'active':''}}"><a href="{{url('/department')}}">Departments</a></li> -->
              <li class="{{Request::is('contact')?'active':''}}"><a href="{{url('/contact')}}" >Contact Us</a></li>
            </ul>
          </nav><!-- #nav-menu-container -->
        </div>
      </div>
    </header><!-- #header -->