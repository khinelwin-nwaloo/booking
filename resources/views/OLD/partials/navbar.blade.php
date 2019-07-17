<div id="navbar" class="navbar navbar-default ace-save-state">
  <div class="navbar-container ace-save-state" id="navbar-container">
    <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
      <span class="sr-only">Toggle sidebar</span>

      <span class="icon-bar"></span>

      <span class="icon-bar"></span>

      <span class="icon-bar"></span>
    </button>

    <div class="navbar-header pull-left">
      <a href="{{url('/home')}}" class="navbar-brand">
        <small>
          <img src="{{url('assets/logo/logo.png')}}" alt="" />
        </small>
      </a>
    </div>

    <div class="navbar-buttons navbar-header pull-right" role="navigation">
      <ul class="nav ace-nav">
        <li class="light-blue dropdown-modal">
          <a data-toggle="dropdown" href="#" class="dropdown-toggle">
              <!-- <img class="nav-user-photo" src="{{url('assets/images/avatars/2.png')}}" alt="Jason's Photo" /> -->
            <span class="user-info">
              @if(Auth::guard('admin')->check())
                <h5>{{Auth::guard('admin')->user()->name}}</h5>
              @endif
            </span>

            <i class="ace-icon fa fa-caret-down"></i>
          </a>

          <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
            <li>
              <a href="{{url('A/admin/'.Auth::guard('admin')->user()->id.'/edit')}}">
                <i class="ace-icon fa fa-pencil-square-o  bigger-130"></i>
                Edit
              </a>
            </li>
            <li>
              <a href="{{url('/admin/logout')}}">
                <i class="ace-icon fa fa-power-off"></i>
                Logout
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div><!-- /.navbar-container -->
</div>