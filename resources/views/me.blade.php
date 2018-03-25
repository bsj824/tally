<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
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
<div class="tx">
  <div class="cont">
    <div class="i_tx">
        <input  type="file" name="avatar" id="avatar" style="position: absolute;opacity: 0;width: 52px;height: 52px">
        <img src="img/tx.png" id="preview" src="" alt="">
    </div>
      <a href="">
          <p class="gq">Hello Wolrd</p>
      </a>
  </div>
</div>
<div class="main">
    <div class="c_list">
        <ul>

            @php
                $information = \App\Model\Information::where('user_id',\Illuminate\Support\Facades\Auth::id())->first();
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
                </a>
                <a href="">
                    <li>
                       <h4 class="f">账号管理</h4>
                          <div class="icon"><img src="img/返回%20(6).png"></div>
                    </li>
                </a>
                <a href="">
                    <li>
                       <h4 class="f">安全中心</h4>
                         <div class="icon"><img src="img/返回%20(6).png"></div>
                     </li>
                </a>
                <a href="">
                   <li>
                     <h4 class="f">问题反馈</h4>
                        <div class="icon"><img src="img/返回%20(6).png"></div>
                    </li>
                </a>
        </ul>
    </div>
    <div class="c_list">

       <ul>
          <a href="">
              <li>
                 <h4 class="f">隐私</h4>
                 <div class="icon"><img src="img/返回%20(6).png"></div>
              </li>
          </a>
          <a href="">
               <li>
                 <h4 class="f">通用</h4>
                  <div class="icon"><img src="img/返回%20(6).png"></div>
               </li>
          </a>
          <a href="">
               <li>
                 <h4 class="f">关于我们</h4>
                 <div class="icon"><img src="img/返回%20(6).png"></div>
               </li>
          </a>
     </ul>
</div>
<div class="btn-row">
    <button type="submit" class="qdl">
        <em class="sub-txt">退出登录</em>
    </button>
</div>
</div>
</body>
<script>
    var previewImage = document.querySelector("#preview")
    var oAvatar = document.querySelector("#avatar")
    oAvatar.onchange = function (e){
        previewImage.src = window.URL.createObjectURL((e.srcElement.files[0]))
    }
</script>
</html>