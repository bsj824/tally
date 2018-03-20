<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{!! asset('css/payfor.css') !!}">
</head>
<body>
<div class="head">
    <div class="header">
        <div class="c_left">
            <h3 class="my">摇钱树</h3>
        </div>
    </div>
    <div class="zc_left">
        <h4 class="z_title">@yield('z_title')</h4>
    </div>
    <div class="xsj">
        @yield('span')
    </div>
</div>
</body>
</html>