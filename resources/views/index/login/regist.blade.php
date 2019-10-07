<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>手机注册</title>
<base href="/static/weui/" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta name="description" content="Write an awesome description for your new site here. You can edit this line in _config.yml. It will appear in your document head meta (for Google search results) and in your feed.xml site description.
">
<link rel="stylesheet" href="lib/weui.min.css">
<link rel="stylesheet" href="css/jquery-weui.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body ontouchstart>
<!--主体-->
<header class="wy-header">
  <div class="wy-header-icon-back"><span></span></div>
  <div class="wy-header-title">手机注册</div>
</header>
<form action="/weui/regist" method="post" id="form">
@csrf
<div class="weui-content">
  <div class="weui-cells weui-cells_form wy-address-edit">
    <div class="weui-cell weui-cell_vcode">
      <div class="weui-cell__hd"><label class="weui-label wy-lab">手机号</label></div>
      <div class="weui-cell__bd">
        <input class="weui-input" type="tel" name="phone" placeholder="请输入手机号">
      </div>
      <div class="weui-cell__ft"><button class="weui-vcode-btn">获取验证码</button></div>
    </div>
   <!--  <div class="weui-cell weui-cell_vcode">
      <div class="weui-cell__hd"><label class="weui-label wy-lab">验证码</label></div>
      <div class="weui-cell__bd"><input class="weui-input" type="number" placeholder="请输入验证码"></div>
      <div class="weui-cell__ft"><img class="weui-vcode-img" src="./images/vcode.jpg"></div>
    </div> -->
    <div class="weui-cell">
      <div class="weui-cell__hd"><label class="weui-label wy-lab">设置密码</label></div>
      <div class="weui-cell__bd">
        <input class="weui-input" type="password" name="userpwd" pattern="[0-9]*" placeholder="请输入新密码">
      </div>
    </div>
    <div class="weui-cell">
      <div class="weui-cell__hd"><label class="weui-label wy-lab">确认密码</label></div>
      <div class="weui-cell__bd">
        <input class="weui-input" type="password" name="conpwd" pattern="[0-9]*" placeholder="请再次输入新密码">
      </div>
    </div>
  </div>
  <label for="weuiAgree" class="weui-agree">
    <input id="weuiAgree" type="checkbox" class="weui-agree__checkbox" name="code" value="yes" checked="checked">
    <span class="weui-agree__text">阅读并同意<a href="javascript:void(0);">《注册协议》</a></span>
  </label>
  <div class="weui-btn-area">
    <input type="button" class="weui-btn weui-btn_warn" id="sub" value="注册并登陆">
  </div>
  <div class="weui-cells__tips t-c font-12">登陆账号为您输入的手机号码</div>
  <div class="weui-cells__tips t-c pd-10"><a href="/weui/xieyi/" class="weui-cell_link font-12">查看注册协议</a></div>
</div>
</form>

<script src="lib/jquery-2.1.4.js"></script> 
<script src="lib/fastclick.js"></script> 
<script type="text/javascript" src="js/jquery.Spinner.js"></script>
<script>
  $(function() {
    FastClick.attach(document.body);
  });
</script>
<script src="js/jquery-weui.js"></script>
<script>
$(function(){
    $(document).on('click','#sub',function(){

        var form = $('#form').serialize();// 序列化serialize
        // alert(form);return;
        $.ajax({
          url:"/weui/regist",
          data:form,
          type:"POST",
          dataType:'json',
          // processData: false, //需设置为false。因为data值是FormData对象，不需要对数据做处理
          // contentType: false, //需设置为false。因为是FormData对象，且已经声明了属性
          success:function(res){
            // alert(res);
            if (res.code == 1) {
              alert(res.font);
              location.href="/weui/index";
            }else{
              alert(res.font);
            }
          }
        })
    })
})
</script>
</body>
</html>
