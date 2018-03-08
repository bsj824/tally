@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{!! asset('css/zc.css') !!}">
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
                <form action="{!! route('register') !!}"  method="post" outsubmit="return false" autocomplete="off" class="rel">
                    {!! csrf_field() !!}
                    <div class="sec">
                        <div class="sec">
                            <div class="sjh">
                                <div class="s_rel">
                                    <input type="tel" maxlength="11" class="mob" name="name" placeholder="用户名" data-error="请输入用户名" data-error-empty="请输入用户名"required>
                                </div>
                            </div>
                            <div class="sjh">
                                <div class="s_rel">
                                    <input type="tel" maxlength="11" class="mob" name="phone" placeholder="手机号" data-type="phone" data-error="请输入正确的手机号" data-error-empty="请输入手机号"required>
                                </div>
                            </div>
                             <div class="yzm">
                                 <span class="dib">
                                     <input type="tel" maxlength="4" class="verify" name="verify" placeholder="请输入图形验证码" data-type="imagecode" data-error="请输入4位图形验证码" data-error-empty="请输入图形验证码"required>
                                 </span>
                                 <label class="p_yzm">
                                     <img src="img/new.jpg" alt="图形验证码"title="点击更换验证码" >
                                 </label>
                             </div>
                            {{--<div class="yzm">
                                <span class="dib">
                                    <input type="tel" maxlength="4" class="verify" name="verify" placeholder="请输入短信验证码" data-type="imagecode" data-error="请输入短信验证码" data-error-empty="请输入短信验证码"required>
                                </span>
                                <label class="verify_btn">
                                    <em class="send">发送验证码</em>
                                    <em class="resend">重新发送验证码</em>
                                </label>
                            </div>--}}
                            <div class="sjh">
                                <div class="s_rel">
                                    <input type="text" class="mm" name="password" placeholder="您的密码" data-type="password" data-error="您的密码" data-error-empty="您的密码" required>
                                </div>
                            </div>
                            <div class="sjh">
                                <div class="s_rel">
                                    <input type="text" class="qmm" name="password_confirmation" placeholder="确认密码" data-type="password" data-error="确认密码" data-error-empty="确认密码" required>
                                </div>
                            </div>
                        </div>
                        <div class="btn-row">
                            <button type="submit" class="qdl">
                                <em class="sub-txt">注册</em>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
</body>
@endsection