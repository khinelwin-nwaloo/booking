<?php $__env->startSection('content'); ?>

<!-- start banner Area -->
<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                 <?php echo e($department->name); ?>

             </h1>
             
         </div>
     </div>
 </div>
</section>
<!-- End banner Area -->
<!-- Start team Area -->
<div>
    <?php if(session ('success')): ?>
    <div id="successMessage" class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <?php echo e(session('success')); ?>

    </div>
    <?php endif; ?>
    <?php if(session ('fail')): ?>
    <div id="successMessage" class="alert alert-danger">
     <button type="button" class="btm btn-primary" data-dismiss="alert">×</button>
     <?php echo e(session('fail')); ?>

 </div>
 <?php endif; ?>
</div>
<section class="team-area section-gap" style="background-color:#F0F0F0">
    <div class="container" >
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-7">
                <div class="title text-center">
                  <!--   <h1 class="mb-10"><?php echo e($department->name); ?></h1> -->
                  <p style="font-weight:bold;"><?php echo e($department->descriptions); ?></p>
              </div>
          </div>
      </div>

      <div class="row justify-content-center d-flex align-items-center">

       <div class="col-md-12" >
           <table class="table style="background-color:#FFFFFF">
              <thead>
                <tr bgcolor="#0BB288">
                   <th scope="col">
                       No
                   </th>
                   <th scope="col">
                       Doctor'Name
                   </th>
                   <th scope="col">
                       Qualifications
                   </th>
                   <th scope="col">
                       Speciality
                   </th>
                   <th scope="col">
                       Clinic Day & Time
                   </th>
               </tr>
           </thead>
           <?php $num = 1 ; $count = count($doctor_dutytime); ?>
           <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <tbody style="background-color:#FFFFFF">
            <tr> 
               <th scope="row" width="5%">
                <?php echo e($num++); ?>

            </th>
            <th width="10%"><?php echo e($doctor->name); ?></th>
            <th width="35%" style=" word-wrap:break-word;  word-break:break-all;     
            overflow-wrap: break-all;"><?php echo e($doctor->degree); ?></th>
            <th width="20%" ><?php echo e($doctor->department->name); ?></th>
            <th width="30%">
              <?php for($i = 0 ; $i < $count ; $i++): ?>
              <?php if($doctor->id == $doctor_dutytime[$i]['id']): ?>
              <?php $__currentLoopData = $doctor_dutytime[$i]['duty_time']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dutytime): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if($dutytime['time']): ?>
              <?php echo e($dutytime['time']); ?> <br>
              <?php endif; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php endif; ?>

              <?php endfor; ?>
          </th>
      </tr>
  </tbody>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</div>



</div>
</div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\booking\resources\views/departments/doctors.blade.php ENDPATH**/ ?>