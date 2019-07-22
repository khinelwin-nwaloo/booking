<?php $__env->startSection('content'); ?>

<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-center">
            <div class="banner-content col-lg-8 col-md-12">
                <h1>
                    One of the best hospitals in
                    Myanmar
                </h1>
                <p class="pt-10 pb-10 text-white">
                    Ziiwaka Medical Center is a private hospital providing multidisciplinary medical care survive with international health care standards .
                </p>
                <?php $user = session()->get('user');  ?>
                <?php if($user): ?>
                <a href="<?php echo e(url('/appointments/create')); ?>" class="primary-btn text-uppercase">
                 
                    <?php else: ?>|
                    <a href="<?php echo e(url('/login')); ?>" class="primary-btn text-uppercase">
                        <?php endif; ?>
                    Book An Appointment</a>

                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area 
        Start facilities Area -->
        <section class="facilities-area section-gap">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-70 col-lg-7">
                        <div class="title text-center">
                            <h1 class="mb-10">Services That We Offered</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-facilities">
                            <span> <img src="assets/img/services/emergency_opd.jpg" alt="Emergency OPD" width="250" height="200"></span>
                            <a href="#">
                                <h4>EMERGENCY OPD</h4>
                            </a>
                            <p>
                                The emergency team in Ziiwaka Medical consists of Physicians, Nurses, and Emergency Medical Technicians who are highly trained in the field of Emergency medicine. The team is dedicated to providing the highest quality of care beginning with rapid assessment, planning and treatment which is tailored to meet the patient’s specific needs.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-facilities">
                            <span> <img src="assets/img/services/specialist_opd.jfif" alt="Specialist OPD" width="250" height="200"></span>
                            <a href="#">
                                <h4>SPECIALIST OPD</h4>
                            </a>
                            <p>
                                For out-patients, we have specialist rooms where you can discuss and seek advice for your condition: At OSC hospital, you can seek treatment for general diseases, diseases which might need surgery & seek operation if needed, obstetrical & gynecological diseases, pediatric diseases, neurological diseases, dental diseases, ear, nose & throat related diseases.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-facilities">
                            <span> <img src="assets/img/services/customer_service.jpg" alt="Customer Services" width="250" height="200"></span>
                            <a href="#">
                                <h4>Customer Services</h4>
                            </a>
                            <p>
                                We see the patients as customers and we treat our customers with courtesy and respect. OSC customer service is ready to welcome you the moment you reach at the hospital for the facilitating of your hospital tour.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-facilities">
                            <span> <img src="assets/img/services/home_care_service.jpg" alt="Home Care Services" width="250" height="200"></span>
                            <a href="#">
                                <h4>Home Care Services</h4>
                            </a>
                            <p>
                                We provide 24 hours Home care service.
                                The home care service team made out of international certified doctors and nurses clung with emergency medical equipment supplies.Home care service can provide to follow township –
                                North Okkalapa Township
                                South Okkalapa Township
                                Shwe Pauk Kan Township
                                Mingalardon Township
                                Mayangone Township
                                North Dagon Township
                                South Dagon Township
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End facilities Area -->
        <!-- Start offered-service Area -->
        <section class="offered-service-area section-gap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 offered-left">
                        <h1 class="text-white">Departments in Our Hospital</h1>
                        
                        <div class="service-wrap row">
                            <div class="col-lg-6 col-md-6">
                                <div class="single-service">
                                    <div class="thumb">
                                        <img class="img-fluid" src="assets/img/departments/ICU.jpg" alt="ICU">
                                    </div>
                                    
                                    <h4 class="text-white">Intense Care Unit</h4>
                                    
                                    <p>
                                     Intensive Care Unit is a special department of OSC Hospital to monitor intensively to the patients who have just finished their operations and the intensive patients who suffer from the chronic diseases. This department is fully facilitated with basic and advanced equipment.  According to the guidelines from the specialist doctors, the doctors from ICU Team and nurses do the best care for the patients who are from Intensive Care Unit. Intensive Care Unit constantly takes care of the conditions of the patients and helps for the requirements. Thus, it is a reliable place to provide good services for the patient who needs to do admission there.
                                 </p>
                             </div>
                         </div>
                         <div class="col-lg-6 col-md-6">
                            <div class="single-service">
                                <div class="thumb">
                                    <img class="img-fluid" src="assets/img/departments/Laboratory.jpg" alt="Lab">
                                </div>
                                
                                <h4 class="text-white">Laboratory</h4>
                                
                                <p>
                                    OSC laboratory provides the definite diagnosis 24 hours daily with modern equipments like Sysmex-C.P. Auto 26 parameter Haematology Machine, Easylyte - Electrolyte Machine & Pentra 200 - Fully Auto Biochemistry Machine. We provide services for -Molecular diagnosis -Biochemistry -Haematology -Immunology -Diagnostic autoimmune, allergy testing -Histopathology -Immunohistochemistry -Cytopathology -Microbiology.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="offered-right relative">
                            <div class="overlay overlay-bg"></div>
                            <h3 class="relative text-white">Departments</h3>
                            <ul class="relative dep-list">
                                <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e(url('/department/'.$department['id'])); ?>"><?php echo e($department->name); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                            <a class="viewall-btn" href="<?php echo e(url('/department')); ?>">View all Departments</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- End team Area -->
        <!-- Start feedback Area -->
        <section class="feedback-area section-gap relative">
            <div class="overlay overlay-bg"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 pb-60 header-text text-center">
                        <h1 class="mb-10 text-white">Our Client’s Feedbacks</h1>
                        <p class="text-white">
                            We really thanks the hospital.
                        </p>
                    </div>
                </div>
                <div class="row feedback-contents justify-content-center align-items-center">
                    <div class="col-lg-6 feedback-right">
                        <div class="active-review-carusel">
                            <div class="single-feedback-carusel">
                                <img src="assets/img/feedbacks/AMH.jpg" alt="Aung Moe Hein Feedback" width="100" height="100">
                                <div class="title d-flex flex-row">
                                    <h4 class="text-white pb-10">Aung Moe Hein</h4>
                                    <div class="star">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                                <p class="text-white">
                                    Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                                </p>
                            </div>
                            <div class="single-feedback-carusel">
                                <img src="assets/img/feedbacks/MTTT.jpg" alt="Minthuta Tun Feedback" width="100" height="100">
                                <div class="title d-flex flex-row">
                                    <h4 class="text-white pb-10">Minthuta Tun</h4>
                                    <div class="star">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                                <p class="text-white">
                                    Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                                </p>
                            </div>
                            <div class="single-feedback-carusel">
                                <img src="assets/img/feedbacks/MMT.jpg" alt="Min Min Tun Feedback" width="100" height="100">
                                <div class="title d-flex flex-row">
                                    <h4 class="text-white pb-10">Min Min Tun</h4>
                                    <div class="star">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked "></span>
                                    </div>
                                </div>
                                <p class="text-white">
                                    Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End feedback Area -->


        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hospital_booking\resources\views/home.blade.php ENDPATH**/ ?>