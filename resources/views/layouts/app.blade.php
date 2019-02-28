@extends('layouts.default')

@section('body-class', 'sidebar-mini')

@section('page')
	
    @include('shared.header')

    @include('shared.sidebar')

    <!-- Content wrapper -->
    <div class="content-wrapper">
    	<!-- Content header -->
    	<div class="content-header">
    		<div class="container-fluid">
    			<div class="row mb-2">
    				<div class="col-sm-6">
    					<h1 class="m-0 text-dark">{{ $title ?? '默认页面'}}</h1>
    				</div>
    				<div class="col-sm-6">
    					@include('shared.breadcrumb')
    				</div>
    			</div>
    		</div>
    	</div>

	    <!-- Main content -->
	    <div class="content">
	    	<div class="content-fluid">
	    		@yield('content')
	    	</div>
	    </div>
    </div>

    @include('shared.footer')

    @include('shared.control')

@endsection