
<div id="sidebar" class="sidebar responsive ace-save-state">
	<script type="text/javascript">
		try{ace.settings.loadState('sidebar')}catch(e){}
	</script>
	
	<!-- <div class="sidebar-shortcuts" id="sidebar-shortcuts">
		<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
			<button class="btn btn-success">
				<i class="ace-icon fa fa-signal"></i>
			</button>

			<button class="btn btn-info">
				<i class="ace-icon fa fa-pencil"></i>
			</button>

			<button class="btn btn-warning">
				<i class="ace-icon fa fa-users"></i>
			</button>

			<button class="btn btn-danger">
				<i class="ace-icon fa fa-cogs"></i>
			</button>
		</div>

		<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
			<span class="btn btn-success"></span>

			<span class="btn btn-info"></span>

			<span class="btn btn-warning"></span>

			<span class="btn btn-danger"></span>
		</div>
	</div> -->

	<ul class="nav nav-list">
		<li class="{{ Request::is('userprofile*')?'active':''}}">				 
			<a href="{{ url('/myprofile')}}">
				@if(Session::get('user') != '')
				<?php $origin_path = config('sys.image_path');
				$Session = Session::get('user');
				$img_path = $Session['image'];
				$name = $Session['name'];
				$img = $img_path;
				?>
				<img class="nav-user-photo sidebar_profile" src="{{ $img }}"  />
				<span class="menu-text"> {{ $name }} </span>
				@else

				@endif
				
			</a>
			<b class="arrow"></b>
		</li>
		<li class="{{ Request::is('home*')?'active':''}}">				 
			<a href="{{ url('/home')}}">
				<i class="menu-icon fa fa-home"></i>
				<span class="menu-text"> Home </span>
			</a>
			<b class="arrow"></b>
		</li>
		<li class="{{ Request::is('trending/*')?'active':''}}">				 
			<a href="{{ url('trending')}}">
				<i class="menu-icon fa fa-arrow-circle-up"></i>
				<span class="menu-text"> Trending Video </span>
			</a>
			<b class="arrow"></b>
		</li>
		<li class="{{ Request::is('V/*')?'active':''}}">				 
			<a href="{{ url('V/upload')}}">
				<i class="menu-icon fa fa-video-camera"></i>
				<span class="menu-text"> Video Upload </span>
			</a>
			<b class="arrow"></b>
		</li>
		<li class="{{ Request::is('H/*')?'active':''}}">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-list"></i>
				<span class="menu-text"> History </span>
				<b class="arrow fa fa-angle-down"></b>
			</a>
			<b class="arrow"></b>
			<ul class="submenu">
				<li class="{{ Request::is('H/history*')?'active':''}}">
					<a href="{{ url('H/history')}}">
						<i class="menu-icon fa fa-user"></i>
						My History
					</a>
					<b class="arrow"></b>
				</li>
				<li class="{{ Request::is('H/myvideos*')?'active':''}}">
					<a href="{{ url('H/myvideos')}}">
						<i class="menu-icon fa fa-user"></i>
						My Video
					</a>
					<b class="arrow"></b>
				</li>
			</ul>
		</li>
		<li class="{{ Request::is('C/*')?'active':''}}">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-list"></i>
				<span class="menu-text"> ZANN Channels </span>
				<span class="badge badge-primary">{{$channel_count}}</span>
				<b class="arrow fa fa-angle-down"></b>
			</a>
			<b class="arrow"></b>
			<ul class="submenu">
				  @foreach($channels as $result)
				    <li class="{{ Request::is( 'C/channel?c_id='.$result['channel_id']) ? 'active':''}}">	 
				    	<a href="{{url('C/channel?c_id='.$result['channel_id']) }}" >         
				    		<i class="menu-icon fa fa-tachometer"></i>					 
				    		<span class="menu-text"> {{ $result['name_eng'] }} </span>
				    	</a>
				    	<b class="arrow"></b>
				    </li>
				    @endforeach
			</ul>
		</li>
	</ul>
</div>

