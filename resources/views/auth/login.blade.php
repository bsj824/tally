@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{!! asset('css/dl.css') !!}">
    @endsection
@section('title')
    登录
@endsection
@section('content')
<body>
<div class="head">
    <div class="header">
        <div class="button">
            <a href="{{route('register')}}" class="reg">注册新用户</a>
        </div>
        <div class="title">
            <h1 class="logo">财爷</h1>
        </div>
    </div>
</div>
<div class="dl_box">
    <form action="{!! route('login') !!}" method="post" class="dl_form">
        {!! csrf_field() !!}
        <div class="dl_title">
            <h2 class="dl_cy">登录财爷</h2>
            <div class="fix">
                <div class="input-warp">
                    <input type="test" label="登录账号" placeholder="请用手机号进行登录" class="yhm" name="phone" data-type="notempty" data-error="请输入正确的手机号" data-error-empty="请输入您的账号" required>
                    @if ($errors->has('phone'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
            <label>  <input type="password" style="display: none"></label>

            <div class="pw">
                <div class="input-warp">
                    <input type="password" label="您的密码" placeholder="密码" noptncheck="true" class="paw" name="password" data-type="password" data-error="请输入密码" data-error-empty="请输入您的密码" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
        </div>
    <div class="foot_cnt">
        <label>
            <input value="remember me" type="checkbox" name="remember">自动登录
        </label>
    </div>
    <div class="btn-row">
            <button type="submit" class="qdl">
                <em class="sub-txt">登录</em>
            </button>
     </div>
    </form>
</div>
</body>
@endsection



