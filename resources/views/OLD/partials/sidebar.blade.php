<?php
$role = Auth::guard('admin')->user()->role;
?>
<div id="sidebar" class="sidebar  responsive  ace-save-state">
  <script type="text/javascript">
    try {
      ace.settings.loadState('sidebar')
    } catch (e) {
    }
  </script>
  <ul class="nav nav-list">
    <li class="{{ Request::is('home*')?'active':''}}">
      <a href="{{ url('/home')}}">
        <i class="menu-icon fa fa-home"></i>
        <span class="menu-text"> Dashboard </span>
      </a>
      <b class="arrow"></b>
    </li>
    <li class="{{ Request::is('Chart*')?'active':''}}">
      <a href="{{ url('A/graphreport')}}">
        <i class="menu-icon fa fa-desktop"></i>
        <span class="menu-text"> Report Chart </span>
      </a>
      <b class="arrow"></b>
    </li> 
    <li class="{{ Request::is('A/admin*')?'active':''}}">
      <a href="{{ url('A/admin')}}">
        <i class="menu-icon fa fa-user"></i>
        Admin
      </a>
      <b class="arrow"></b>
    </li>
    
<!--    <li class="{{ Request::is('A/videoajax*')?'active':''}}">
      <a href="{{ url('A/videoajax')}}">
        <i class="menu-icon fa fa-user"></i>
        Video Ajax
      </a>
      <b class="arrow"></b>
    </li>
-->
    <li class="{{ Request::is('U*')?'active':''}}">
      <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa fa-list"></i>
        <span class="menu-text"> User </span>
        <b class="arrow fa fa-angle-down"></b>
      </a>
      <b class="arrow"></b>
      <ul class="submenu">
        <li class="{{ Request::is('A/user*')?'active':''}}">
          <a href="{{ url('A/user')}}">
            <i class="menu-icon fa fa-user"></i>
            All User
          </a>
          <b class="arrow"></b>
        </li>
        <li class="{{ Request::is('A/phoneuser*')?'active':''}}">
      <a href="{{ url('A/phoneuser')}}">
        <i class="menu-icon fa fa-user"></i>
       Phone User Register
      </a>
      <b class="arrow"></b>
    </li>
    <li class="{{ Request::is('A/facebookuser*')?'active':''}}">
      <a href="{{ url('A/facebookuser')}}">
        <i class="menu-icon fa fa-user"></i>
        Facebook User Register
      </a>
      <b class="arrow"></b>
    </li>
    <li class="{{ Request::is('A/bluemarkuser*')?'active':''}}">
      <a href="{{ url('A/bluemarkuser')}}">
        <i class="menu-icon fa fa-user"></i>
        Bluemark User
      </a>
      <b class="arrow"></b>
    </li>
      </ul>
    </li>

    <li class="{{ Request::is('A/channel*')?'active':''}}">
      <a href="{{ url('A/channel')}}">
        <i class="menu-icon fa fa-file-video-o "></i>
        Channel
      </a>
      <b class="arrow"></b>
    </li>
    <li class="{{ Request::is('A/organization*')?'active':''}}">
      <a href="{{ url('A/organization')}}">
        <i class="menu-icon fa fa-file-video-o "></i>
        Organization
      </a>
      <b class="arrow"></b>
    </li>

    <li class="{{ Request::is('A/comments*')?'active':''}}" >
      <a href="{{ url('A/comments')}}">
        <i class="menu-icon fa fa-desktop"></i>
        <span class="menu-text">Comments</span>
      </a>
      <b class="arrow"></b>
    </li>
    <li class="{{ Request::is('V*')?'active':''}}">
      <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa fa-list"></i>
        <span class="menu-text"> Video </span>
        <b class="arrow fa fa-angle-down"></b>
      </a>
      <b class="arrow"></b>
      <ul class="submenu">
        <li class="{{ Request::is('A/video*')?'active':''}}" >
          <a href="{{ url('A/video')}}">
            <i class="menu-icon fa fa-desktop"></i>
            <span class="menu-text"> Video </span>
          </a>
          <b class="arrow"></b>
        </li>
        <li class="{{ Request::is('A/videoajax*')?'active':''}}" >
          <a href="{{ url('A/videoajax')}}">
            <i class="menu-icon fa fa-desktop"></i>
            <span class="menu-text">Video With Ajax</span>
          </a>
          <b class="arrow"></b>
        </li>
        <li class="{{ Request::is('A/trendingvideo*')?'active':''}}" >
          <a href="{{ url('A/trendingvideo')}}">
            <i class="menu-icon fa fa-desktop"></i>
            <span class="menu-text">Trending Video </span>
          </a>
          <b class="arrow"></b>
        </li>
        <li class="{{ Request::is('A/hidevideo*')?'active':''}}" >
          <a href="{{ url('A/hidevideo')}}">
            <i class="menu-icon fa fa-desktop"></i>
            <span class="menu-text">Hide Video </span>
          </a>
          <b class="arrow"></b>
        </li>
      </ul>
    </li>
    <!-- <?php if ($role == '0') { ?>
         <li class="{{ Request::is('S*')?'active':''}}">
          <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-list"></i>
            <span class="menu-text"> System Setting </span>
            <b class="arrow fa fa-angle-down"></b>
          </a>
          <b class="arrow"></b>
          <ul class="submenu">
            
            
            <li class="{{ Request::is('A/system_setting*')?'active':''}}" >
              <a href="{{ url('A/system_setting')}}">
                <i class="menu-icon fa fa-desktop"></i>
                <span class="menu-text"> Send Setting </span>
              </a>
              <b class="arrow"></b>
            </li>
            
            <li class="{{ Request::is('A/getsystem_setting*')?'active':''}}" >
              <a href="{{ url('A/getsystem_setting')}}">
                <i class="menu-icon fa fa-desktop"></i>
                <span class="menu-text"> All Setting </span>
              </a>
              <b class="arrow"></b>
            </li>
            
          </ul>
        </li>
    <?php } ?>  -->
    <li class="{{ Request::is('M*')?'active':''}}">
      <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa fa-list"></i>
        <span class="menu-text"> Message </span>
        <b class="arrow fa fa-angle-down"></b>
      </a>
      <b class="arrow"></b>
      <ul class="submenu">

        <?php if ($role == '0' || $role == '1') { ?>
          <li class="{{ Request::is('A/message*')?'active':''}}" >
            <a href="{{ url('A/message')}}">
              <i class="menu-icon fa fa-desktop"></i>
              <span class="menu-text"> Send Message </span>
            </a>
            <b class="arrow"></b>
          </li>
        <?php } ?>
        <li class="{{ Request::is('A/getmessage*')?'active':''}}" >
          <a href="{{ url('A/getmessage')}}">
            <i class="menu-icon fa fa-desktop"></i>
            <span class="menu-text"> All Message </span>
          </a>
          <b class="arrow"></b>
        </li>
      </ul>
    </li>
    <li class="{{ Request::is('R*')?'active':''}}">
      <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa fa-list"></i>
        <span class="menu-text"> Reports </span>
        <b class="arrow fa fa-angle-down"></b>
      </a>
      <b class="arrow"></b>
      <ul class="submenu">
        <li class="{{ Request::is('R/user*')?'active':''}}">
          <a href="{{ url('R/user/report')}}">
            <i class="menu-icon fa fa-desktop"></i>
            <span class="menu-text"> User Reports </span>
          </a>
          <b class="arrow"></b>
        </li>
      </ul>
    </li>
  </ul>

  <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
    <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
  </div>
</div>
