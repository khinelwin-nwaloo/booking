@extends('layouts.master')
@section('content')

<!-- start banner Area -->
<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Department
                </h1>
                <!-- <p class="text-white link-nav"><a href="{{url('/home')}}">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="{{url('/doctor')}}"> Doctors</a></p> -->
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
                    <h1 class="mb-10">{{ $department->name }}</h1>
                    <p>{{ $department->descriptions }}</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center d-flex align-items-center">

         <div class="col-md-12">
             <table class="table  table-hover">
              <thead>
                <tr>
                 <th scope="col">
                     No
                 </th>
                 <th scope="col">
                     Doctor'Name
                 </th>
                 <th scope="col">
                     Degree
                 </th>
                 <th scope="col">
                     Speciality
                 </th>
                 <th scope="col">
                     Clinic Day & Time
                 </th>
             </tr>
         </thead>
         <?php $num = 1 ; ?>
         @foreach($doctors as $doctor )
         <tbody>
            <tr> 
             <th scope="row">
                {{ $num++ }}
             </th>
             <th>{{ $doctor->name }}</th>
             <th>{{ $doctor->degree }}</th>
             <th>{{ $doctor->department->name }}</th>
             <th></th>
         </tr>
     </tbody>
     @endforeach
 </table>
</div>



</div>
</div>
</section>

@endsection