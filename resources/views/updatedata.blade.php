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
<form method="post" action="{!! route('user.update',\Illuminate\Support\Facades\Auth::id()) !!}" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <input type="hidden" name="_method" value="PUT">
    <div class="main">
      <div class="c_list">
              <ul>
                  <a href="">
                      <li>
                          <h4 class="f">头像</h4>
                          <div class="stx">
                              <input  type="file" name="avatar" id="avatar" style="position: absolute;opacity: 0;width: 22px;height: 22px">
                              <img src="{{$information->avatar}}" id="preview" src="" alt="" style="width:22px;height:22px;">

                          </div>
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
                        <input type="text"  value="{{$information->sign}}" class="gq" name="sign" >
                    </div>
                </li>
                <li >
                    <div class="g_left">
                        <h4>性别</h4>
                    </div>
                    <label for="sex-man" class="radio_label checked">
                        <input type="radio" value="1" checked="checked" id="sex-man" name="sex" />
                        男
                    </label>
                    <label for="sex-female" class="radio_label">
                        <input type="radio" value="2" id="sex-female" name="sex" />
                        女
                    </label>
                </li>
                <li>
                    <div class="g_left">
                        <h4>生日</h4>
                    </div>
                    <div class="g_right">
                        <input type="text" class="gq" value="{{$information->birthday}}" name="birthday" >
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
    <div class="btn-row">
        <button type="submit" class="qdl">
            <em class="sub-txt">提交</em>
        </button>
    </div>
</form>
</body>
<script>
    var previewImage = document.querySelector("#preview")
    var oAvatar = document.querySelector("#avatar")
    oAvatar.onchange = function (e){
        previewImage.src = window.URL.createObjectURL((e.srcElement.files[0]))
    }
</script>
</html>