  <div class="navbar-header">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
  <a class="navbar-brand" href="{{url('/home')}}">ZANN</a>
</div>
<!-- /.navbar-header -->
<div>
  <ul class="nav navbar-nav navbar-right">
    <li class="dropdown">
      <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown" style="color: #fff;">
        <img src="{{url('assets/image/2.png')}}">
        <span>
          <?php $user = session()->get('admin'); ?>
          {{$user['name']}}
        </span>
      </a>
      <ul class="dropdown-menu">
        <li class="dropdown-menu-header text-center">
          <strong>Account</strong>
        </li>
        <li class="m_2"><a><i class="fa fa-user"></i> 
            <?php $user = session()->get('admin'); ?>
            {{$user['name']}}
          </a>
        </li>
        <!-- <li class="m_2"><a href="#"><i class="fa fa-user"></i> Profile</a></li> -->
        <li class="m_2"><a href="{{url('/logout')}}"><i class="fa fa-lock"></i> Logout</a></li>

      </ul>
    </li>
  </ul>
</div>
<!-- 	<form class="navbar-form navbar-right">
          <input type="text" class="form-control" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
        </form> -->