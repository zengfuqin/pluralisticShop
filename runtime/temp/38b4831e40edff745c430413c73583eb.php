<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"/var/www/html/pluralisticShop/public/../application/index/view/login/login.html";i:1508463543;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/static/index/css/common.css" rel="stylesheet" tyle="text/css" />
<link href="/static/index/css/style.css" rel="stylesheet" type="text/css" />
<script src="/static/index/js/jquery2.14.min.js" type="text/javascript"></script>
<script src="/static/index/js/jQuery.md5.js" type="text/javascript"></script>
<title>用户登录</title>
</head>

<body>
<!--顶部样式-->
<div class="common_top">
 <div class="Narrow">
  <div class=" left logo"><a href="#"><img src="/static/index/images/logo.png" /></a></div>
  <!--可修改图层-->
  <div class=" left festival"><a href="#"><img src="/static/index/images/logo_yd.png" /></a></div>
  <!--电话图层-->
  <div class="phone">全国服务热线：<em>400-345-5633</em></div>
 </div>
</div>
<div class="login Narrow">
   <div class="login_advertising"><img src="/static/index/images/login_img_03.png" /></div>
  <div class="login_frame">
   <div class="login-form right">
     <div class="login-name"><h1 class="name">用户登录</h1><span class="login_link"><a href="<?php echo url('index/registered/index'); ?>"><b></b>用户注册</a></span></div>
	  <!--提示信息-->
	    <!-- <div class="Prompt">账号密码不能为空！ </div> -->
	    <div class="form clearfix">
		     <div class="item item-fore1">
		     	<label for="loginname" class="login-label name-label"></label>
		     	<input name="account" type="text"  class="text" placeholder="请输入用户" id="account"/>
		     </div>

		     <div class="item item-fore2">
		     	<label for="nloginpwd" class="login-label pwd-label" ></label>
		     	<input name="password" type="password"  class="text" placeholder="用户密码" id="password"/>
		     </div> 

		     <div class="Forgetpass">
		     	<a href="#">忘记密码？</a>
		     </div>
	    </div>	
	    <div class="login-btn">
	    	<button  class="btn_login" id="btnlogin">登&nbsp;&nbsp;&nbsp;&nbsp;录</button>
	  </div>
	  <a href="<?php echo $url; ?>">微薄登入</a>
    </div>
  </div>
</div>
<!--底部样式-->
 <div class="bottom_footer">
   <p><a href="#">关于我们</a> | <a href="#">联系我们</a> | <a href="#">商家入驻</a> | <a href="#">法律申明</a> | <a href="#">友情链接</a>  </p>
	 <p>Copyright©2014四川金祥保险销售有限公司.All Rights Reserved. </p>
	 <p>川ICP备09150084号</p>
   </div>

<script src="/static/index/js/public.js" type="text/javascript"></script>
<script>
//抛送地址
var scope={
	'login_url':"<?php echo url('login/ptLogin'); ?>",
}
</script>
</body>
</html>
