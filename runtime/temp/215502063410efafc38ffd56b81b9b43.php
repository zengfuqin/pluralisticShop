<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:89:"/var/www/html/pluralisticShop/public/../application/index/view/registered/registered.html";i:1508231464;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/static/index/css/common.css" rel="stylesheet" tyle="text/css" />
<link href="/static/index/css/style.css" rel="stylesheet" type="text/css" />
<style>
.message{height:10px;padding:2px;text-indent:80px;color:red;}
.verifyMsg{font-family:"新宋体";font-size: 20px; padding-top: 3px;}
.verifyMsg:hover{cursor:pointer;}
</style>
<script src="/static/index/js/jquery2.14.min.js" type="text/javascript"></script>
<title>用户注册</title>
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
<div class="rgister Narrow">
  <div class="Sign">
     <div class="AD_img"><img  src="/static/index/images/adbg_03.png" /></div>
     <div class="rgister-form">
      <div class="rgister-name"><span class="name">用户注册</span> <span class="English">REGISTER</span></div>
	  <form id="form1" name="form1" method="post" action="<?php echo url('index/registered/registered'); ?>"> 
	   <div class="form clearfix">	
	    <div class="item"><label class="rgister-label">用&nbsp;&nbsp;户&nbsp;&nbsp;名：</label><input name="account" type="text"  class="text" id="account" /><b>*</b><div class="message"></div></div>

		<div class="item"><label class="rgister-label" >密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码：</label><input name="password" type="password"  class="text" id="password"/><b>*</b></div> 
	    <div class="Password_qd"><ul><li class="r">弱</li><li class="z">中</li><li class="q">强</li></ul></div>

		<div class="item"><label class="rgister-label " >确认密码：</label><input name="repassword" type="password"  class="text" /><b>*</b><div class="message"></div></div>

	    <div class="item"><label class="rgister-label" >手&nbsp;机&nbsp;号：</label><input name="phone" type="text"  class="text" /><b>*</b><div class="message"></div></div> 
	 
	    <div class="item "><label  class="rgister-label ">验&nbsp;证&nbsp;码：</label><input name="verify" type="text"  class="Recommend_text" id="verify" /><a  class="verifyMsg">   获取邀请码</a></div>
		<div class="item-ifo">

                    <input type="checkbox" class="checkbox left" checked="checked" id="readme" onclick="agreeonProtocol();">
                    <label for="protocol" class="left">我已阅读并同意<a href="#" class="blue" id="protocol">《福际商城用户注册协议》</a></label>
                </div>
	  </div>	
	  <div class="rgister-btn">
	  <input type="submit" class="btn_rgister" value="注&nbsp;&nbsp;&nbsp;&nbsp;册" / style="border:none">
	  </div>
	  <div class="Note"><span class="login_link">已是会员<a href="<?php echo url('index/login/index'); ?>">请登录</a></span></div>	  
	  </form>
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
//跑送地址
var scope={
	'account_url':"<?php echo url('registered/confirmationAccount'); ?>",
	'phone_url':"<?php echo url('registered/confirmationPhone'); ?>",
	'verify_url':"<?php echo url('registered/confirmationVerify'); ?>",
}
</script>
</body>
</html>
