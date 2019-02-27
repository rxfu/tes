<!-- Navbar -->
<nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
	<!-- Left navbar links -->
	<ul class="navbar-nav">
		<li class="nav-item">
			<a href="#" class="nav-link" data-widget="pushmenu">
				<i class="fa fa-bars"></i>
			</a>
		</li>
		<li class="nav-item d-done d-sm-inline-block">
			<a href="#" class="nav-link">首页</a>
		</li>
		<li class="nav-item d-done d-sm-inline-block">
			<a href="#" class="nav-link">联系我们</a>
		</li>
	</ul>

	<!-- Right navbar links -->
	<ul class="navbar-nav ml-auto">
		<li class="nav-item dropdown user user-menu">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<img src="{{ asset('img/user2-160x160.jpg') }}" alt="用户头像" class="user-image">
				<span class="hidden-xs">{{ auth()->user()->name }}</span>
			</a>

			<ul class="dropdown-menu">
				<li class="dropdown-item user-header">
					<img src="{{ asset('img/user2-160x160.jpg') }}" alt="用户头像" class="img-circle">
					<p>
						{{ auth()->user()->name }}
						<small>{{ auth()->user()->created_at->format('Y年m月d日注册') }} </small>
					</p>
				</li>
				<li class="dropdown-item user-body">
					{{ auth()->user()->telephone }}
				</li>
				<li class="dropdown-item user-footer">
                	<div>
                  		<a href="#" class="btn btn-default btn-flat">基本信息</a>
                	</div>
                	<div class="ml-auto">
                  		<a href="#" class="btn btn-default btn-flat">登出系统</a>
                	</div>
				</li>
			</ul>
		</li>
	</ul>
</nav>