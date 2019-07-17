    <header id="header">
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6 col-4 header-top-left">
                        <a href="tel:+95 9 259 175 889"><span class="lnr lnr-phone-handset"></span> <span class="text"><span class="text">+959 259 175 889</span></span></a>
                        <a href="mailto:contact@ziiwaka.com"><span class="lnr lnr-envelope"></span> <span class="text"><span class="text">contact@ziiwaka.com</span></span></a>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-8 header-top-right">
                        <a href="{{url('/register')}}" class="primary-btn text-uppercase">Book An Appointment</a>
                        
                        <a href="{{url('/login')}}" class="primary-btn text-uppercase">Log In</a>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="container main-menu">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="{{url('/home')}}"><img src="assets/img/logo (2).png" alt="Ziiwaka Medical Care" title="ZMC" width="125" height="50" /></a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="{{Request::is('home')?'active':''}}"><a href="{{url('/home')}}">Home</a></li>
                        <li class="{{Request::is('about')?'active':''}}"><a href="{{url('/about')}}">About</a></li>
                        <li class="{{Request::is('service')?'active':''}}"><a href="{{url('/service')}}">Services</a></li>
                        <li class="{{Request::is('doctor')?'active':''}}"><a href="{{url('/doctor')}}">Doctors</a></li>
                        <li class="{{Request::is('department')?'active':''}}"><a href="{{url('/department')}}">Departments</a></li>
                        <li class="{{Request::is('contact')?'active':''}}"><a href="{{url('/contact')}}" >Contact Us</a></li>
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </div>
    </header><!-- #header -->