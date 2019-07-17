@extends('layouts.master')
@section('content')

			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Departments				
							</h1>	
							<p class="text-white link-nav"><a href="{{url('/home')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{url('/department')}}"> Departments</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start offered-service Area -->
			<section class="offered-service-area dep-offred-service">
				<div class="container">
					<div class="row offred-wrap section-gap">
						<div class="col-lg-8 offered-left">
							<h1>Departments in Our Hospital</h1>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
							</p>
							<img class="img-fluid pt-10 pb-10" src="assets/img/departments/cover-doctor.jpg" alt="Our Doctors">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
							</p>
						</div>
						<div class="col-lg-4">
							<div class="offered-right relative">
                            <div class="overlay overlay-bg"></div>
                            <h3 class="relative text-white">Departments</h3>
                            <ul class="relative dep-list">
                            	@foreach($departments as $department)
                                <li><a href="{{url('/department/'.$department['id'])}}">{{ $department->name }}</a></li>
                                @endforeach
                            </ul>
                            <!-- <a class="viewall-btn" href="{{url('/department')}}">View all Department</a> -->
                        </div>

							<div class="appointment-left sidebar-service-hr">
								<h3 class="pb-20">
									Servicing Hours
								</h3>
								<p>
									We provide services on these days.
								</p>
								<ul class="time-list">
									<li class="d-flex justify-content-between">
										<span>Monday-Friday</span>
										<span>08.00 am - 10.00 pm</span>
									</li>
									<li class="d-flex justify-content-between">
										<span>Saturday</span>
										<span>08.00 am - 10.00 pm</span>
									</li>
									<li class="d-flex justify-content-between">
										<span>Sunday</span>
										<span>08.00 am - 10.00 pm</span>
									</li>																
								</ul>
							</div>													
						</div>
					</div>
				</div>	
			</section>
			<!-- End offered-service Area -->	

@endsection