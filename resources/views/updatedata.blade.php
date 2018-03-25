<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>个人资料</title>
    <link rel="stylesheet" href="{{asset('css/personal.css')}}">
    <link rel="stylesheet" href="//at.alicdn.com/t/font_584848_vu6jdu48wvims4i.css">

</head>
<body>
<div class="head">
    <div class="header">
        <div class="c_left">
            <a href="{{url('backend')}}"><img src="{{asset('img/return1.png')}}"></a>
        </div>
        <div class="c_right">
            <h3 class="my">编辑资料</h3>
        </div>
    </div>
</div>
<form method="post" action="{{url('user',['id'=>\Illuminate\Support\Facades\Auth::id()])}}" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="main">
      <div class="c_list">
              <ul>
                  <a href="">
                      <li>
                          <h4 class="f">头像</h4>
                          <i class="iconfont icon-tianjiatupian" style="font-size: 22px;">
                              <input  type="file">
                          </i>
                      </li>
                  </a>
              </ul>
          </div>
        <div class="c_list">
            <ul>
                <li>
                    <div class="g_left">
                        <h4>个签</h4>
                    </div>
                    <div class="g_right">
                        <input type="text"  value="{{$information->sign}}" class="gq" name="sign">
                    </div>
                </li>
                <li>
                    <div class="g_left">
                        <h4>性别</h4>
                    </div>
                    <div class="g_right">
                        <input type="text" class="gq" value="{{$information->sex}}" name="sex">
                    </div>
                </li>
                <li>
                    <div class="g_left">
                        <h4>生日</h4>
                    </div>
                    <div class="g_right">
                        <input type="text" class="gq" value="{{$information->birthday}}" name="birthday">
                    </div>
                </li>
            </ul>
        </div>
        <div class="c_list">
            <ul>
                <li>
                    <div class="g_left">
                        <h4>职业</h4>
                    </div>
                    <div class="g_right">
                        <input type="text"  value="{{$information->vocation}}" class="gq" name="vocation">
                    </div>
                </li>
                <li>
                    <div class="g_left">
                        <h4>公司</h4>
                    </div>
                    <div class="g_right">
                        <input type="text" value="{{$information->company}}" class="gq" name="company">
                    </div>
                </li>
                <li>
                    <div class="g_left">
                        <h4>学校</h4>
                    </div>
                    <div class="g_right">
                        <input type="text" class="gq" name="school" value="{{$information->school}}">
                    </div>
                </li>
                <li>
                    <div class="g_left">
                        <h4>所在地</h4>
                    </div>
                    <div class="g_right">
                        <input type="text" class="gq" name="location" value="{{$information->location}}">
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <button>提交</button>
</form>
</body>
</html>