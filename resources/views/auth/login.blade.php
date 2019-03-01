@extends('layouts.default')

@section('body-class', 'login-page')

@section('page')
<!-- Login box -->
<div class="login-box">
    <!-- Login logo -->
    <div class="login-logo">
        <a href="{{ url('/') }}">{{ config('setting.name') }}</a>
    </div>

    <!-- Login card -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">登录系统</p>

            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="input-group mb-3{{ $errors->has('username') ? ' is_invalid' : '' }}">
                    <input type="username" class="form-control" placeholder="用户名">
                    <div class="input-group-append">
                        <span class="fa fa-user input-group-text"></span>
                    </div>
                    @if ($errors->has('username'))
                        <div class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('username') }}</strong>
                        </div>
                    @endif
                </div>
                <div class="input-group mb-3{{ $errors->has('password') ? ' is_invalid' : '' }}">
                    <input type="password" class="form-control" placeholder="密码">
                    <div class="input-group-append">
                        <span class="fa fa-lock input-group-text"></span>
                    </div>
                    @if ($errors->has('password'))
                        <div class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </div>
                    @endif
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox"> 记住我
                            </label>
                        </div>
                    </div>

                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">登录</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="card-footer">
            <a href="{{ route('login') }}" title="后台登录">管理平台</a>
        </div>
    </div>
</div>
@endsection

@push('styles')
<!-- iCheck -->
<link rel="stylesheet" href="{{ asset('plugins/iCheck/square/blue.css') }}">
<style>
    .login-logo {
        font-size: 28px;
    }
</style>
@endpush

@push('scripts')
<!-- iCheck -->
<script src="{{ asset('plugins/iCheck/icheck.min.js') }}"></script>
<script>
$(function () {
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass   : 'iradio_square-blue',
        increaseArea : '20%' // optional
    })
})
</script>
@endpush
