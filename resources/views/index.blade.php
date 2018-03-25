<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title></title>
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_599606_jumgvj3639639pb9.css">
</head>

<body>
<div>
    <ul class="bg-bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>

<div class="head">
    <div class="header">
        <div class="h_title">
            <h3 class="h_test">摇钱树</h3>
        </div>
    </div>
</div>
<div class="jz">
    <a href="{{url('backend')}}">
        <button class="bt">
            <p>记一笔</p>
        </button>
    </a>
</div>
<div class="sr">
    @include('layouts.message')
    <ul>
        <li>
            <label class="l_sr" >收入</label>
            @php
                $userid = \Illuminate\Support\Facades\Auth::id();
                $sum = \App\Model\Money::where('user_id', $userid)->where('type', 'pay')->sum('money');
            @endphp
            @if(\Illuminate\Support\Facades\Auth::check())
            <div type="text" class="i_sr">￥{{$sum}}</div>
                @else
                <div type="text" class="i_sr">￥0.00</div>
                @endif
        </li>
        @php
            $userid = \Illuminate\Support\Facades\Auth::id();
            $sum = \App\Model\Money::where('user_id', $userid)->where('type', 'income')->sum('money');
        @endphp
        <li>
            <label class="l_sr" >支出</label>
            @if(\Illuminate\Support\Facades\Auth::check())
                <div type="text" class="i_sr">￥{{$sum}}</div>
            @else
                <div type="text" class="i_sr">￥0.00</div>
            @endif
        </li>
    </ul>
</div>

<div class="foot" >
    @component('nav.foot')
    @endcomponent
</div>
</body>
</html>