<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>反馈</title>
    <link rel="stylesheet" href="{{asset('css/feed.css')}}">
</head>
<body>

<form method="post"  action="{{url('/feed')}}"  class="forml">
    {{csrf_field()}}
    <div class="head">
        <div class="logo">
            <span>问题反馈</span>
        </div>
    </div>
    <div class="inform">
      <div class="informbox">
          <ul class="formtop">
              <li>
                  <label class="lab">
                      您的称呼：
                  </label>
                  <input name="nickname" type="text" id="txtuser" class="subinput">
                  @if ($errors->has('nickname'))
                      <span class="help-block">
                                        <strong>{{ $errors->first('nickname') }}</strong>
                                    </span>
                  @endif
              </li>
              <li>
                  <label class="lab">
                      问题主题：
                  </label>
                  <input name="theme" type="text" id="txtthem" class="subinput">
                  @if ($errors->has('theme'))
                      <span class="help-block">
                                        <strong>{{ $errors->first('theme') }}</strong>
                                    </span>
                  @endif
              </li>
              <li>
                  <label class="lab">
                      问题内容：
                  </label>
                  <div class="neir">
                      <textarea name="details" id="txtcontent" class="subtxt">
                      </textarea>
                      @if ($errors->has('details'))
                          <span class="help-block">
                                        <strong>{{ $errors->first('details') }}</strong>
                                    </span>
                      @endif
                  </div>
              </li>
          </ul>
          <ul class="formbot">
              <li class="lx">联系方式</li>
              <li>
                  <label class="lab">
                      手机号：
                  </label>
                  <input name="phone" type="text" id="txtphone" class="subinput">
                  @if ($errors->has('phone'))
                      <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                  @endif
              </li>
              <li>
                  <label class="lab">
                      QQ：
                  </label>
                  <input name="qq" type="text" id="txtQQ" class="subinput">
                  @if ($errors->has('qq'))
                      <span class="help-block">
                                        <strong>{{ $errors->first('qq') }}</strong>
                                    </span>
                  @endif
              </li>
              <li>
                  <label class="lab">
                      邮箱：
                  </label>
                  <input name="e_mail" type="text" id="txtemail" class="subinput">
                  @if ($errors->has('e_mail'))
                      <span class="help-block">
                                        <strong>{{ $errors->first('e_mail') }}</strong>
                                    </span>
                  @endif
              </li>
          </ul>
      </div>
    </div>
    <button>提交</button>
</form>
</body>
</html>