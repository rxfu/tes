<!-- Main sidebar -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  	<!-- Brand logo -->
  	<a href="{{ url('/', $guard) }}" class="brand-link">
		<img src="{{ asset('img/AdminLTELogo.png') }}" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">{{ config('setting.slug') }}</span>
  	</a>

  	<!-- Sidebar -->
  	<div class="sidebar">
      	<!-- Sidebar user panel (optional) -->
      	<div class="user-panel mt-3 pb-3 mb-3 d-flex">
          	<div class="image">
            	<img src="{{ asset('img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="用户头像">
          	</div>
          	<div class="info">
            	<a href="#" class="d-block">{{ $name }}</a>
          	</div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          	    <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                @foreach (config('menu.sidebar.' . $guard) as $items)
                    @foreach ($items as $item)
                        @if (is_array($item))
                            @isset($item['children'])
                                <li class="nav-item has-treeview">
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
                                    " class="nav-link">
                                        @isset ($item['icon'])
                                            <i class="nav-icon fa fa-{{ $item['icon'] }}"></i>
                                        @endisset
                                        <p>
                                            {{ $item['title'] ?? '无标题' }}
                                            <i class="right fa fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        @foreach ($item['children'] as $subitem)
                                            <li class="nav-item">
                                                <a href="
                                                @isset($subitem['route'])
                                                    {{ route($subitem['route']) }}
                                                @else
                                                    @isset ($subitem['url'])
                                                        {{ url($subitem['url']) }}
                                                    @else
                                                        #
                                                    @endisset
                                                @endisset
                                                " class="nav-link">
                                                    @isset ($subitem['icon'])                                          
                                                        <i class="nav-icon fa fa-{{ $subitem['icon'] }}"></i>
                                                    @else
                                                        <i class="nav-icon fa fa-circle-o"></i>
                                                    @endisset
                                                    <p>{{ $subitem['title'] ?? '无标题' }}</p>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                <li class="nav-item">
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
                                    " class="nav-link">
                                        @isset ($item['icon'])
                                            <i class="nav-icon fa fa-{{ $item['icon'] }}"></i>
                                        @endisset
                                        <p>{{ $item['title'] ?? '无标题' }}</p>
                                    </a>
                                </li>
                            @endisset
                        @else
                            <li class="nav-header">{{ $item }}</li>
                        @endif
                    @endforeach
                @endforeach
            </ul>
        </nav>
  	</div>
</aside>