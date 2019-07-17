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

    @if($user->role_id == 1)  <!-- admin -->
    <li class="{{ Request::is('dashboard*')?'active':''}}">
      <a href="{{ url('/dashboard')}}">
        <i class="menu-icon fa fa-home"></i>
        <span class="menu-text"> Dashboard </span>
      </a>
      <b class="arrow"></b>
    </li>
    <li class="{{ Request::is('doctors*')?'active':''}}">
      <a href="{{ url('doctors')}}">
        <i class="menu-icon fa fa-user"></i>
        Doctors
      </a>
      <b class="arrow"></b>
    </li>

    <li class="{{ Request::is('appointments*')?'active':''}}">
      <a href="{{ url('appointments')}}">
        <i class="menu-icon fa fa-desktop"></i>
        Appointments
      </a>
      <b class="arrow"></b>
    </li>
    <li class="{{ Request::is('patient*')?'active':''}}">
      <a href="{{ url('patient')}}">
        <i class="menu-icon fa fa-desktop"></i>
        Patients
      </a>
      <b class="arrow"></b>
    </li>
    @elseif($user->role_id == 2)<!-- doctor -->
    <li class="{{ Request::is('doctors*')?'active':''}}">
      <a href="{{ url('/doctors/'.$user->id )}}">
        <i class="menu-icon fa fa-home"></i>
        <span class="menu-text"> Profile </span>
      </a>
      <b class="arrow"></b>
    </li>
    <li class="{{ Request::is('appointments*')?'active':''}}">
      <a href="{{ url('appointments')}}">
        <i class="menu-icon fa fa-desktop"></i>
        Appointments
      </a>
      <b class="arrow"></b>
    </li>
    <li class="{{ Request::is('patients*')?'active':''}}">
      <a href="{{ url('his_patients')}}">
        <i class="menu-icon fa fa-user"></i>
        Patients
      </a>
      <b class="arrow"></b>
    </li>
    @endif
  </ul>

  <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
    <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
  </div>
</div>
