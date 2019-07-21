@extends('layouts.master')
@section('content')

            <!-- start banner Area -->
            <section class="banner-area relative about-banner" id="home">
                <div class="overlay overlay-bg"></div>
                <div class="container">
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="about-content col-lg-12">
                            <h1 class="text-white">
                                About Us
                            </h1>
                            <p class="text-white link-nav"><a href="{{url('/home')}}">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="{{url('/about')}}"> About Us</a></p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End banner Area -->
            <section class="offered-service-area dep-offred-service">
                <div class="container">
                    <div class="row offred-wrap section-gap">
                        <div class="col-md-12">
                            <h1>About Ziiwaka Medical Center</h1>
                            <br>
                            <p>
                                ZMC is a private hospital treating for all specialities which is located at No. 137/ D Thudhamma Road, near Malamu Pagoda, North Okkalapa Township, Yangon Division. 
                            </p>
                            <p>
                                The hospital is founded since June 2009 as the 16-bedded hospital & expanded to the 100-bedded hospital starting from 15th January 2011. We provide a wide area of parking lot & the seven-storeyed hospital is surrounded by Swal Taw Pagoda, Malamu Pagoda, Wut Kway Taw Pyay Pagoda & Nga Moe Yate stream which give delightful & heart-warming scenery to the patients.
                            </p>
                            <p>
                                ZMC warmly welcome not only in-patients but also out-patients with experienced & skilful specialists from morning to night. With modern devices & skilful staffs, we are ready to fulfill your needs at any time.
                            </p>
                            <img class="img-fluid pt-10 pb-10" src="assets/img/departments/cover-doctor.jpg" alt="Our Doctors">
                            <p>
                                Everyday we provide treatment to 400 patients & emergency service is available 24/7 a day. The hospital which is treating the patients with over 400 people of manpower, is the member of Private Hospital Association & we are fulfilling the needs of the patients & their families in standard with ZMC culture: team work, dual respect, mutual understanding & no blaming.
                            </p>
                            <p>
                                The hospital has 15 departments which undertake 9 standard services to operate the tasks. We provide reasonable price in considering everyone’s ability to afford & it only takes 30 mins from downtown, 15 mins from Aung Mingalar highway station which is convenient for those living in East Yangon & those living in other regions of Myanmar.
                            </p>
                            <p>
                                We’re proudly partnering with Haemodialysis center & Physiotherapy and Rehabilitation Centre to provide you special service.
                            </p>
                        </div>
                    </div>
                </div>  
            </section>


@endsection