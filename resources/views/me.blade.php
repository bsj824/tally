<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>我的</title>
    <link rel="stylesheet" href="{{asset('css/MY.css')}}">
</head>
<body>
<div class="head">
    <div class="header">
        <div class="c_left">
            <h3 class="my">我的</h3>
        </div>
        <div class="c_right">
            <img src="{{asset('img/setting.png')}}">
        </div>
    </div>
</div>
<div class="main">
        <div class="c_list">
            <ul>
                <a href="">
                    <li>
                        <img src="img/avatar.png">
                        <h4 class="f">未登录</h4>
                        <div class="icon"><img src="img/return.png"></div>
                    </li>
                </a>
                @php
                    $information = \App\Model\Information::where('user_id',\Illuminate\Support\Facades\Auth::id())->get();
                @endphp
                @if($information)
                    <a href="{{route('user.edit',['id'=>\Illuminate\Support\Facades\Auth::id()])}}">
                        @else
                            <a href="{{url('user')}}">
                                @endif

              {{--  <a href="{{url('user')}}">
                    <a href="{{url('user/{user}/edit',['id'=>\Illuminate\Support\Facades\Auth::id()])}}">--}}
                <li>
                    <img src="{{asset('img/information.png')}}">
                    <h4 class="f">个人资料</h4>
                    <div class="icon"><img src="img/return.png"></div>
                </li>
                </a>
                <a href="">
                <li>
                    <img src="img/分享.png">
                    <h4 class="f">分享到</h4>
                    <div class="icon"><img src="img/return.png"></div>
                </li>
                </a>
            </ul>
        </div>
</div>
</body>
</html>