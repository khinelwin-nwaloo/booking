@extends('layouts.master')
@section('content')

            <!-- start banner Area -->
            <section class="banner-area relative about-banner" id="home">
                <div class="overlay overlay-bg"></div>
                <div class="container">
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="about-content col-lg-12">
                            <h1 class="text-white">
                                Doctors
                            </h1>
                            <p class="text-white link-nav"><a href="{{url('/home')}}">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="{{url('/doctor')}}"> Doctors</a></p>
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
                        @foreach($doctors as $doctor)
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
                                        {{ $doctor->degree}}
                                    </p>
                                    <h4>{{ $doctor->name }} </h4>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>

@endsection