<?php
// $role = Auth::guard('admin')->user()->role;
?>
<div id="sidebar" class="sidebar  responsive  ace-save-state">
  <script type="text/javascript">
    try {
      ace.settings.loadState('sidebar')
    } catch (e) {
    }
  </script>
  <ul class="nav nav-list">
    <?php $user = session()->get('user');?>

    <?php if($user->role_id == 1): ?>  <!-- admin -->
    <li class="<?php echo e(Request::is('dashboard*')?'active':''); ?>">
      <a href="<?php echo e(url('/dashboard')); ?>">
        <i class="menu-icon fa fa-home"></i>
        <span class="menu-text"> Dashboard </span>
      </a>
      <b class="arrow"></b>
    </li>
    <li class="<?php echo e(Request::is('doctors*')?'active':''); ?>">
      <a href="<?php echo e(url('doctors')); ?>">
        <i class="menu-icon fa fa-user"></i>
        Doctors
      </a>
      <b class="arrow"></b>
    </li>

    <li class="<?php echo e(Request::is('appointments*')?'active':''); ?>">
      <a href="<?php echo e(url('appointments')); ?>">
        <i class="menu-icon fa fa-desktop"></i>
        Appointments
      </a>
      <b class="arrow"></b>
    </li>
    <li class="<?php echo e(Request::is('patient*')?'active':''); ?>">
      <a href="<?php echo e(url('patient')); ?>">
        <i class="menu-icon fa fa-desktop"></i>
        Patients
      </a>
      <b class="arrow"></b>
    </li>
    <?php elseif($user->role_id == 2): ?><!-- doctor -->
    <li class="<?php echo e(Request::is('doctors*')?'active':''); ?>">
      <a href="<?php echo e(url('/doctors/'.$user->id )); ?>">
        <i class="menu-icon fa fa-home"></i>
        <span class="menu-text"> Profile </span>
      </a>
      <b class="arrow"></b>
    </li>
    <li class="<?php echo e(Request::is('appointments*')?'active':''); ?>">
      <a href="<?php echo e(url('appointments')); ?>">
        <i class="menu-icon fa fa-desktop"></i>
        Appointments
      </a>
      <b class="arrow"></b>
    </li>
    <li class="<?php echo e(Request::is('patients*')?'active':''); ?>">
      <a href="<?php echo e(url('his_patients')); ?>">
        <i class="menu-icon fa fa-user"></i>
        Patients
      </a>
      <b class="arrow"></b>
    </li>
    <?php endif; ?>
  </ul>

  <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
    <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
  </div>
</div>
<?php /**PATH C:\xampp\htdocs\hospital_booking\resources\views/partials/sidebar.blade.php ENDPATH**/ ?>