
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>note</title>
    <link rel="stylesheet" href="{{asset('css/write.css')}}">
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_599606_l2fax3xcdem9ggb9.css">
</head>
<body>
<div class="head">
    <div class="header">
        <div class="h_fh">
            <a href="{{url('index')}}" style="text-decoration: none">
            <i class="iconfont icon-return" style="font-size: 24px; "></i>
            </a>
        </div>
        <div class="h_title">
            <h3 class="h_test">日常账本</h3>
        </div>
    </div>
</div>
<div class="list">
    <ul class="l_x">
        <a href="{{url('backend')}}">
        <li class="action" >
            <h3  class="l_zc losecount">支出</h3>
        </li>
        </a>
        <a href="{{route('backend.create')}}">
        <li >
            <h3  class="l_zc getcount">收入</h3>
        </li>
        </a>
    </ul>
</div>
<form action="{{url('backend')}}" method="post">
    {{csrf_field()}}
<div class="sr" style="display: block;">
    <div class="s_cont">
        <a name="awd" id="cooking" for="text1" >请选择类型</a>
        <input type="hidden" name="cooking_type" id="cooking_type">
        <input id="text1" style="text-align: right;" onfocus="this.value=''" name="money" value="0.00">
    </div>

    <div class="tb">
        <div class="tb_list">
            <ul class="type">
                <li>
                    <i class="iconfont icon-tubiaozhizuomoban" style="font-size: 24px;"></i>
                    <p class="iconfont_text">餐饮</p>
                </li>
                <li>
                    <i class="iconfont icon-jiaotong" style=" font-size: 24px;" ></i>
                    <p class="iconfont_text">交通</p>
                </li>
                <li>
                    <i class="iconfont icon-gouwuche" style=" font-size: 24px;"></i>
                    <p class="iconfont_text">购物</p>
                </li>
                <li>
                    <i class="iconfont icon-juzhudi" style=" font-size: 24px;"></i>
                    <p class="iconfont_text">居住</p>
                </li>
                <li>
                    <i class="iconfont icon-yule" style=" font-size: 24px;"></i>
                    <p class="iconfont_text">娱乐</p>
                </li>
                <li>
                    <i class="iconfont icon-yiliao" style=" font-size: 24px;"></i>
                    <p class="iconfont_text">医疗</p>
                </li>
                <li>
                    <i class="iconfont icon-jiaoyu" style=" font-size: 24px;"></i>
                    <p class="iconfont_text">教育</p>
                </li>
                <li>
                    <i class="iconfont icon-fengturenqing" style=" font-size: 24px;"></i>
                    <p class="iconfont_text">人情</p>
                </li>
                <li>
                    <i class="iconfont icon-qita" style=" font-size: 24px;"></i>
                    <p class="iconfont_text">其他支出</p>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="sr"  style="display: none;">
    <div class="s_cont">
        <label id="cooking" for="text1">餐饮</label>
        <input id="text1" style="text-align: right;" value="0.00" onfocus="this.value=''">
    </div>
    <div class="tb">
        <div class="tb_list">
            <ul class="type">
                <li>
                    <i class="iconfont icon-tubiaozhizuomoban" style="font-size: 24px;"></i>
                    <p class="iconfont_text">餐饮</p>
                </li>
                <li>
                    <i class="iconfont icon-jiaotong" style=" font-size: 24px;"></i>
                    <p class="iconfont_text">交通</p>
                </li>
                <li>
                    <i class="iconfont icon-gouwuche" style=" font-size: 24px;"></i>
                    <p class="iconfont_text">交通</p>
                </li>
                <li>
                    <i class="iconfont icon-juzhudi" style=" font-size: 24px;"></i>
                    <p class="iconfont_text">居住</p>
                </li>
                <li>
                    <i class="iconfont icon-yule" style=" font-size: 24px;"></i>
                    <p class="iconfont_text">娱乐</p>
                </li>
                <li>
                    <i class="iconfont icon-yiliao" style=" font-size: 24px;"></i>
                    <p class="iconfont_text">医疗</p>
                </li>
                <li>
                    <i class="iconfont icon-jiaoyu" style=" font-size: 24px;"></i>
                    <p class="iconfont_text">教育</p>
                </li>
                <li>
                    <i class="iconfont icon-fengturenqing" style=" font-size: 24px;"></i>
                    <p class="iconfont_text">人情</p>
                </li>
                <li>
                    <i class="iconfont icon-qita" style=" font-size: 24px;"></i>
                    <p class="iconfont_text">其他支出</p>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="btn-row">
                <button type="submit" class="qdl">
                    <em class="sub-txt">提交</em>
                </button>
    </div>
</form>
</body>
<script type="text/javascript" src="{{asset('js/calculatet.js')}}"></script>
<script type="text/javascript">
    var cookingLabel = document.querySelector('#cooking');
    var cookingInput = document.querySelector('#cooking_type');
    var items = document.querySelectorAll('.type>li');
    var topBar = document.querySelector('.sr');
    /*es6*/
    items.forEach(item => {
        item.onclick = () => {
        const color = getComputedStyle(item.querySelector('.iconfont')).color
        const text = item.querySelector('.iconfont_text').innerText;
        topBar.style.backgroundColor = color;
        cookingLabel.innerText = text;
        cookingInput.value = text;
    }
    });
    /*es5*/
    // for (item of items) {
    //     (function(item){
    //         item.onclick = function(e){
    //             var color = getComputedStyle(item.querySelector('.iconfont')).color
    //             var text = item.querySelector('.iconfont_text').innerText;
    //             topBar.style.backgroundColor = color;
    //             cookingLabel.innerText = text;
    //         }
    //     })(item);
    // }
    /*点击响应*/
    /*计算器*/
    (function(){
        var input1 = document.getElementById('text1');
        var input2 = document.getElementById('text2');
        input1.onclick = function(){
            new KeyBoard(input1);
        };
    })();
</script>
</html>