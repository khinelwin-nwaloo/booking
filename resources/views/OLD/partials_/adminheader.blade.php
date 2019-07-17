<div class="wrapper">

<script type="text/javascript">
     try{ace.settings.loadState('main-container')}catch(e){}
 </script>

     <div id="mySidenav" class="sidenav">


             <div class="sidebar-header">
                     <h2 align="center"> ZIIWAKA</h2>
             </div>

             <script type="text/javascript">
                 try{ace.settings.loadState('sidebar')}catch(e){}
             </script>

             <ul class="list-unstyled components">
                     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

                     <li class="{{ Request::is('myprofile*')?'active':''}}">
                        <a href="{{ url('/myprofile')}}">
                          

                        </a>
                        <b class="arrow"></b>
		            </li>
                    <li class="{{ Request::is('doctors*')?'active':''}}">
                        <a href="{{ url('/doctors')}}">
                            <i class="menu-icon fa fa-user"></i>
                            <span class="menu-text"> Doctors </span>
                        </a>
                        <b class="arrow"></b>
                    </li>
                    <li class="{{ Request::is('appointments*')?'active':''}}">
                        <a href="{{ url('/appointments')}}">
                            <i class="menu-icon fa fa-user"></i>
                            <span class="menu-text"> Appointments </span>
                        </a>
                        <b class="arrow"></b>
                    </li>
                    <li class="{{ Request::is('H/*')?'active':''}}">
                        <a href="#subhistory" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <i class="menu-icon fa fa-list"></i>
                            <span class="menu-text"> Patient </span>
                            <b class="arrow fa fa-angle-down"></b>
                        </a>
                        <b class="arrow"></b>
                    <ul class="collapse list-unstyled" id="subhistory">
                        <li class="{{ Request::is('history*')?'active':''}}">
                            <a href="{{ url('history')}}">
                                <i class="menu-icon fa fa-user"></i>
                                Register Patient
                            </a>
                            <b class="arrow"></b>
                        </li>
                        <li class="{{ Request::is('H/myvideos*')?'active':''}}">
                            <a href="{{ url('H/myvideos')}}">
                                <i class="menu-icon fa fa-history"></i>
                                History Patient
                            </a>
                            <b class="arrow"></b>
                        </li>
                    </ul>
                    </li>
                    <li class="{{ Request::is('D/*')?'active':''}}">
                        <a href="#subhistory" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <i class="menu-icon fa fa-list"></i>
                            <span class="menu-text"> Doctor </span>
                            <b class="arrow fa fa-angle-down"></b>
                        </a>
                        <b class="arrow"></b>
                    <ul class="collapse list-unstyled" id="subhistory">
                        <li class="{{ Request::is('history*')?'active':''}}">
                            <a href="{{ url('history')}}">
                                <i class="menu-icon fa fa-user"></i>
                                Register Patient
                            </a>
                            <b class="arrow"></b>
                        </li>
                    </ul>
                    </li>
                    

		<li class="{{ Request::is('C/*')?'active':''}}">
			<a href="#subchannels" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
				<i class="menu-icon fa fa-list"></i>
				<span class="menu-text"> ZANN Channels </span>
				<span class="badge badge-primary"></span>
				<b class="arrow fa fa-angle-down"></b>
			</a>
			<b class="arrow"></b>
			<ul class="collapse list-unstyled" id="subchannels">
				
			</ul>
		</li>
             </ul>
     </div>

     <div class="content">
         <nav class="navbar navbar-expand-lg">

            <i class="fa fa-align-justify" onclick="openNav()" style="color:white; font-size:20px;padding-top: 15px;"> </i>


             <div class="pull-right" role="navigation">
				<ul class="nav ace-nav">
					<li class="light-blue dropdown-modal">
						<a data-toggle="dropdown" href="#" class="dropdown-toggle">
							
							<img class="nav-user-photo" src=""  />
							<span class="user-info">

							</span>
							
							<span class="user-info">
			                 Khine
							</span>

							<i class="ace-icon fa fa-caret-down"></i>
						</a>

						<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-caret dropdown-close">

							 <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
						</ul>
					</li>
				</ul>
			</div>

         </nav>

     </div>
</div>

<script>
        function openNav() {
        document.getElementById("mySidenav").style.width = "230px";
        }

        function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        }
    </script>
