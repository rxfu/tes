<!-- Main sidebar -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  	<!-- Brand logo -->
  	<a href="#" class="brand-link">
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
            		<a href="#" class="d-block">{{ 'auth()->user()->name' }}</a>
          	</div>
        	</div>

        	<!-- Sidebar Menu -->
        	<nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            	<!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
              @foreach (config('menu') as $item)
                  @if (is_array($item))
                      @isset($item['children'])
                      <li class="nav-item has-treeview">
                          <a href="{{ $item['action'] ?? '#' }}" class="nav-link">
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
                                  <li class="nav-item"><a href="{{ $subitem['action'] ?? '#' }}" class="nav-link">
                                      @isset ($subitem['icon'])                                          
                                          <i class="nav-icon fa fa-{{ $subitem['icon'] }}"></i>
                                      @else
                                          <i class="nav-icon fa fa-circle-o"></i>
                                      @endisset
                                      <p>{{ $subitem['title'] ?? '无标题' }}</p>
                                    </a></li>
                              @endforeach
                          </ul>
                      </li>
                      @else
                          <li class="nav-item">
                              <a href="{{ $item['action'] ?? '#' }}" class="nav-link">
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
              <!--
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fa fa-dashboard"></i>
                <p>
                  Starter Pages
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link active">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Active Page</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Inactive Page</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-th"></i>
                <p>
                  Simple Link
                  <span class="right badge badge-danger">New</span>
                </p>
              </a>
            </li>
          -->
          </ul>
        </nav>
  	</div>
</aside>