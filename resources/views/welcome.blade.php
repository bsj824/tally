<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://cdn.bootcss.com/slick-carousel/1.8.1/slick.min.css">
	<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="https://cdn.bootcss.com/slick-carousel/1.8.1/slick.min.js" charset="utf-8"></script>
	<link rel="stylesheet" href="{{asset('css/wel.css')}}">
</head>
<body>
	<div class="banner" id="banner">
		<div class="slider">
            <div class="main">
                <div class="content">
                    <img src="{{asset('img/ld.jpg')}}" id="img">
                </div>
                <div class="m_title">
                    <div class="box">
                        <h3 class="test">此账本最大的特点它可以分类记账，每种记账本都有属于它自己的分类特色</h3>
                    </div>
                </div>
            </div>
            <div class="main" id="main">
                <div class="content">
                    <img src="{{asset('img/ld.jpg')}}">
                </div>
                <div class="m_title">
                    <div class="box">
                        <h3 class="test">它的使用简单、明了、直观。</h3>
                    </div>
                </div>
            </div>
            <div class="main" id="main">
                <div class="content">
                    <img src="{{asset('img/ld.jpg')}}">
                </div>
                <div class="m_title">
                    <div class="box">
                        <h3 class="test">摇钱树账本管理是通过数据库去管理这款记账本，安全性能强，管理力度高；用户可以放心的去使用这款记账本。</h3>
                    </div>
                </div>
                <div class="btm">
                    <a href="{{url('login')}}">
                        <button type="button" class="dl">
                            <span >进入首页</span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
	
	$(".slider").slick({
        infinite: false,

	});
	var width = document.body.clientWidth ;
	var height = document.body.clientHeight ;
	var banner = document.getElementById('banner');
	banner.style.width = width + 'px';
	banner.style.height = height + 'px';


    var main = document.getElementById('img');
    img.style.width = width + 'px';
    img.style.height = height + 'px';
</script>
</html>