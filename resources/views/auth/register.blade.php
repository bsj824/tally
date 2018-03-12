@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{!! asset('css/zc.css') !!}">
@endsection
@section('title')
    注册
    @endsection
@section('content')
<body>
<div class="fh">
</div>
<div class="head">
    <div class="header">
        <div class="button">
            <a href="" class="reg">登录已有账号</a>
        </div>
        <div class="title">
            <h1 class="logo">财爷</h1>
        </div>
    </div>
</div>
<div class="main">
    <div class="main_content">
        <div class="title">
            <h2>注册新用户</h2>
        </div>
        <div class="media">
            <div class="m_box">
                <form action="{{ route('register') }}"  outsubmit="return false" autocomplete="off" class="rel" method="POST">
                    {{ csrf_field() }}
                    <div class="sec">
                        <div class="sjh">
                            <div class="s_rel">
                                <input type="tel" maxlength="11" class="mob" name="name" placeholder="您的用户名" data-type="phone" data-error="请输入正确的用户名" data-error-empty="请输入用户名"required>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="yzm">
                           <span class="dib">
                               <input type="tel" maxlength="5" class="verify" name="captcha" placeholder="请输入图形验证码" data-type="imagecode" data-error="请输入4位图形验证码" data-error-empty="请输入图形验证码"required>
                               @if ($errors->has('captcha'))
                                   <span class="help-block">
                                       <strong>{{ $errors->first('captcha') }}</strong>
                                    </span>
                               @endif
                           </span>
                            <label class="p_yzm">
                                <img src="{{captcha_src()}}" onclick="this.src='/captcha/default?'+Math.random()" alt="验证码">
                            </label>
                        </div>

                        <div class="sjh">
                            <div class="s_rel">
                                <input type="password" class="mm" name="password" placeholder="您的密码" data-type="password" data-error="您的密码" data-error-empty="您的密码"required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="sjh">
                            <div class="s_rel">
                                <input type="password" class="qmm" name="password_confirmation" placeholder="确认密码" data-type="password" data-error="确认密码" data-error-empty="确认密码"required>
                            </div>
                        </div>
                    </div>
                    <div class="btn-row">
                        <button type="submit" class="qdl">
                            <em class="sub-txt">注册</em>
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

</div>
</body>
@endsection