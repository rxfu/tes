<!-- Navbar -->
<nav class="main-header navbar navbar-expand bg-info navbar-light border-bottom">
	<!-- Left navbar links -->
	<ul class="navbar-nav">
		<li class="nav-item">
			<a href="#" class="nav-link" data-widget="pushmenu">
				<i class="fa fa-bars"></i>
			</a>
		</li>
		@foreach (config('menu.navigation') as $item)
			<li class="nav-item d-done d-sm-inine-block">
				<a href="
                @isset($item['route'])
                    {{ route($item['route']) }}
                @else
                    @isset ($item['url'])
                        {{ url($item['url']) }}
                    @else
                        #
                    @endisset
                @endisset
                "class="nav-link">{{ $item['title'] ?? '无标题' }}</a>
			</li>
		@endforeach
	</ul>

	<!-- Right navbar links -->
	<ul class="navbar-nav ml-auto">
		<li class="nav-item d-done d-sm-inline-block"">
			<a href="#" class="nav-link">
				<i class="nav-icon fa fa-sign-out"></i>
				登出系统
			</a>
		</li>
		<li class="nav-item">
	    	<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
	    		<i class="fa fa-th-large"></i>
	    	</a>
	  	</li>
	</ul>
</nav>