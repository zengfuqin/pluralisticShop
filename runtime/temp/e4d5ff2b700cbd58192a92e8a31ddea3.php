<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:81:"/var/www/html/pluralisticShop/public/../application/index/view/helper/helper.html";i:1508296885;s:44:"../application/index/view/public/header.html";i:1508308431;s:41:"../application/index/view/public/nav.html";i:1508310584;s:43:"../application/index/view/public/right.html";i:1508308453;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/static/index/css/common.css" rel="stylesheet" tyle="text/css" />
<link href="/static/index/css/style.css" rel="stylesheet" type="text/css" />
<link href="/static/index/fonts/iconfont.css" rel="stylesheet" type="text/css" />
<script src="/static/index/js/jquery.min.1.8.2.js" type="text/javascript"></script>
<script src="/static/index/js/payfor.js" type="text/javascript"></script>
<script src="/static/index/js/lrtk.js" type="text/javascript"></script>
<script src="/static/index/js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
<script src="/static/index/js/common_js.js" type="text/javascript"></script>
<script src="/static/index/js/footer.js" type="text/javascript"></script>
<script src="/static/index/js/jquery.jumpto.js" type="text/javascript"></script>
<title>帮助界面</title>
</head>

<body>
<body>
<div id="header_top">
  <div id="top">
    <div class="Inside_pages">
      <div class="Collection"><span id="user"><?php echo $account; ?></span>您好，欢迎光临520私库商城！<em></em><a href="#">收藏我们</a></div>
  <div class="hd_top_manu clearfix">
    <ul class="clearfix">
     <li class="hd_menu_tit zhuce" data-addclass="hd_menu_hover">欢迎光临本店！
     <?php switch($account): case "游客": ?>
     <a href="<?php echo url('index/login/index'); ?>" class="red">[请登录]</a> 
     新用户<a href="<?php echo url('index/registered/index'); ?>" class="red">[免费注册]</a></li>
     <?php break; default: ?>
      <a href="<?php echo url('index/login/out'); ?>" class="red">[安全退出]</a> 
      <?php endswitch; ?>

     <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="<?php echo url('index/userorderslist/userordersList'); ?>">我的订单</a></li> 
     <li class="hd_menu_tit" data-addclass="hd_menu_hover"> <a href="<?php echo url('index/shopcart/shopcart'); ?>">购物车(<b>0</b>)</a> </li>
     <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">联系我们</a></li>
     <li class="hd_menu_tit list_name" data-addclass="hd_menu_hover"><a href="#" class="hd_menu">客户服务</a>
      <div class="hd_menu_list">
       <ul>
        <li><a href="<?php echo url('index/helper/helper'); ?>">常见问题</a></li>
      <li><a href="#">在线退换货</a></li>
        <li><a href="#">在线投诉</a></li>
      <li><a href="#">配送范围</a></li>
       </ul>
    </div>     
     </li>
       <li class="hd_menu_tit phone_c" data-addclass="hd_menu_hover"><a href="#" class="hd_menu "><em class="iconfont icon-phone"></em>手机版</a>
      <div class="hd_menu_list erweima">
       <ul>
            <img src="/static/index/images/erweima.png"  width="100px" height="100"/>
       </ul>
    </div>     
     </li>
    </ul>
  </div>
    </div>
  </div>
  <!--样式-->
<!--顶部样式2-->
<div id="header "  class="header page_style">
  <div class="logo"><a href="#"><img src="/static/index/images/logo.png" /></a></div>
  <!--可修改图层-->
  <div class="festival"><a href="#"><img src="/static/index/images/logo_yd.png" /></a></div>
  <!--结束图层-->
  <div class="Search">
    <p><input name="" type="text"  class="text"/><input name="" type="submit" value="搜 索"  class="Search_btn"/></p>
  <p class="Words"><a href="#">苹果</a><a href="#">香蕉</a><a href="#">菠萝</a><a href="#">西红柿</a><a href="#">橙子</a><a href="#">苹果</a></p>
</div>
<!--可修改图层2-->
  <!--<div class="festival1"><a href="#"><img src="/static/index/images/logo_sd.png" /></a></div>--><!--结束-->
 <!--购物车样式-->
 <div class="hd_Shopping_list" id="Shopping_list">
   <div class="s_cart"><em></em><a href="<?php echo url('index/shopcart/shopcart'); ?>">我的购物车</a> <i class="ci-right">&gt;</i><i class="ci-count" id="shopping-amount">0</i></div>
   <div class="dorpdown-layer">
    <div class="spacer"></div>
   <!--<div class="prompt"></div><div class="nogoods"><b></b>购物车中还没有商品，赶紧选购吧！</div>-->
   <ul class="p_s_list">     
    <li>
        <div class="img"><img src=""></div>
        <div class="content"><p><a href="#">产品名称</a></p><p>颜色分类:紫花8255尺码:XL</p></div>
      <div class="Operations">
      <p class="Price">￥55.00</p>
      <p><a href="#">删除</a></p></div>
      </li>
    </ul>   
   <div class="Shopping_style">
   <div class="p-total">共<b>1</b>件商品　共计<strong>￥ 515.00</strong></div>
    <a href="shop_cart.html" title="去购物车结算" id="btn-payforgoods" class="Shopping">去购物车结算</a>
   </div>  
   </div>
 </div>
</div>
<!--菜单导航样式-->

</div>
<script>

</script>
<div id="Menu" class="clearfix">
<div class="Inside_pages">
  <div id="allSortOuterbox" class="display">
    <div class="t_menu_img"></div>
    <div class="Category"><a href="#"><em></em>所有产品分类</a></div>
    <div class="hd_allsort_out_box_new">
   <!--左侧栏目开始-->
   <ul class="Menu_list"> 
      <li class="name">
    <div class="Menu_name"><a href="#" >男装女装</a> <span>&lt;</span></div>
    <div class="link_name">
      <p><a href="#">茅台</a>  <a href="#">五粮液</a>  <a href="#">郎酒</a>  <a  href="#">剑南春</a></p>
          <p><a href="#">酱香型</a>  <a href="#">四川</a>  <a href="#">贵州</a>  <a  href="#">养生酒</a></p>
    </div>
    <div class="menv_Detail">
     <div class="cat_pannel clearfix">
       <div class="hd_sort_list">
        <dl class="clearfix" data-tpc="1">
       <dt>白酒</dt>
       <dd><a href="#">酱香型</a></dd> 
       <dd><a href="#">浓香型</a></dd> 
       <dd><a href="#">清香型</a></dd> 
       <dd><a href="#">绵柔香型</a></dd> 
       <dd><a href="#">老白干香型</a></dd> 
       <dd><a href="#">凤香型</a></dd> 
       <dd><a href="#">馥香型</a></dd> 
       <dd><a href="#">米香型</a></dd> 
       <dd><a href="#">青稞清香型</a></dd> 
       <dd><a href="#">董香型</a></dd> 
       <dd><a href="#">特香型</a></dd> 
       <dd><a href="#">芝麻香型</a></dd>
      </dl>
       <dl class="clearfix" data-tpc="2">
       <dt>葡萄酒</dt>
       <dd><a href="#">酱香型</a></dd> 
       <dd><a href="#">浓香型</a></dd> 
       <dd><a href="#">清香型</a></dd> 
       <dd><a href="#">绵柔香型</a></dd> 
       <dd><a href="#">老白干香型</a></dd> 
       <dd><a href="#">凤香型</a></dd> 
       <dd><a href="#">馥香型</a></dd> 
       <dd><a href="#">米香型</a></dd> 
       <dd><a href="#">青稞清香型</a></dd> 
       <dd><a href="#">董香型</a></dd> 
       <dd><a href="#">特香型</a></dd> 
       <dd><a href="#">芝麻香型</a></dd>
      </dl>
       <dl class="clearfix" data-tpc="3">
       <dt>洋酒</dt>
       <dd><a href="#">酱香型</a></dd> 
       <dd><a href="#">浓香型</a></dd> 
       <dd><a href="#">清香型</a></dd> 
       <dd><a href="#">绵柔香型</a></dd> 
       <dd><a href="#">老白干香型</a></dd> 
       <dd><a href="#">凤香型</a></dd> 
       <dd><a href="#">馥香型</a></dd> 
       <dd><a href="#">米香型</a></dd> 
       <dd><a href="#">青稞清香型</a></dd> 
       <dd><a href="#">董香型</a></dd> 
       <dd><a href="#">特香型</a></dd> 
       <dd><a href="#">芝麻香型</a></dd>
      </dl>
       <dl class="clearfix" data-tpc="4">
       <dt>啤酒/养生酒</dt>
       <dd><a href="#">酱香型</a></dd> 
       <dd><a href="#">浓香型</a></dd> 
       <dd><a href="#">清香型</a></dd> 
       <dd><a href="#">绵柔香型</a></dd> 
       <dd><a href="#">老白干香型</a></dd> 
       <dd><a href="#">凤香型</a></dd> 
       <dd><a href="#">馥香型</a></dd> 
       <dd><a href="#">米香型</a></dd> 
       <dd><a href="#">青稞清香型</a></dd> 
       <dd><a href="#">董香型</a></dd> 
       <dd><a href="#">特香型</a></dd> 
       <dd><a href="#">芝麻香型</a></dd>
      </dl>
       </div><div class="Brands">
       <a href="#"><img src="" /></a>
       <a href="#"><img src="" /></a>
       <a href="#"><img src="" /></a>
       <a href="#"><img src="" /></a>
       <a href="#"><img src="" /></a>     
      </div>
      </div>
      <!--品牌-->     
    </div>     
    </li>
    <li class="name">
    <div class="Menu_name"><a href="#" >个人护理</a><span>&lt;</span></div>
    <div class="link_name">
     <a href="#">饼干蛋糕</a><a href="#">糖果</a><a href="#">巧克力</a><a href="#">坚果</a>
         <a href="#">饼干蛋糕</a><a href="#">糖果</a><a href="#">巧克力</a><a href="#">坚果</a>
    </div>
    <div class="menv_Detail">
     <div class="cat_pannel clearfix">       
      </div>
    </div>    
    </li>
    <li class="name">
    <div class="Menu_name"><a href="#" >鞋子箱包</a><span>&lt;</span></div>
    <div class="link_name">
    <a href="#">休闲零食</a><a href="#">坚果炒货</a><a href="#">饼干蛋糕</a>
        <a href="#">饼干蛋糕</a><a href="#">糖果</a><a href="#">巧克力</a><a href="#">坚果</a>
    </div>
    <div class="menv_Detail">
     <div class="cat_pannel clearfix">       
      </div>
    </div>  
    </li>
    <li class="name">
    <div class="Menu_name"><a href="#" >食品保健</a><span>&lt;</span></div>
    <div class="link_name">
    <a href="#">休闲零食</a><a href="#">坚果炒货</a><a href="#">饼干蛋糕</a>
        <a href="#">饼干蛋糕</a><a href="#">糖果</a><a href="#">巧克力</a><a href="#">坚果</a>
    </div>
    <div class="menv_Detail">
     <div class="cat_pannel clearfix">        
      </div>
    </div>  
    </li>
    <li class="name">
    <div class="Menu_name"><a href="#" >综合百货</a><span>&lt;</span></div>
    <div class="link_name">
    <a href="#">休闲零食</a><a href="#">坚果炒货</a><a href="#">饼干蛋糕</a>
        <a href="#">饼干蛋糕</a><a href="#">糖果</a><a href="#">巧克力</a><a href="#">坚果</a>
    </div>
    <div class="menv_Detail">
     <div class="cat_pannel clearfix">        
      </div>
    </div>  
    </li>
    <li class="name customize">
    <div class="Menu_name"><a href="#" >私人定制</a><span>&lt;</span></div>
    </li>     
  </ul> 
  </div>    
  </div>
  <script>$("#allSortOuterbox").slide({ titCell:".Menu_list li",mainCell:".menv_Detail",  });</script>
  <!--菜单栏-->
  <div class="Navigation" id="Navigation">
     <ul class="Navigation_name">
      <li><a href="<?php echo url('index/Product/productList'); ?>">美食</a></li>
      <li><a href="#">美妆</a></li>
      <li><a href="#">服饰</a></li>
      <li><a href="#">产品预订</a></li>
      <li><a href="#">积分商城</a></li>
      <li><a href="#">礼品DIY</a></li>
      <li><a href="#">区域合作</a></li>
      <li><a href="#">联系我们</a></li>
      <li><a href="#">购物车</a></li>
     </ul>       
    </div>
  <script>$("#Navigation").slide({titCell:".Navigation_name li"});</script>   
  </div>
</div>
</div>
<!--帮助中心-->
<div class="Inside_pages clearfix">
  <div class="helpBox">
     <div class="Location_link">
  <em></em><a href="#">网站首页</a>  &lt;   <a href="#">帮助中心</a>  
 </div>
 <!--[[leftMenu菜单-->
 <div class="lMenu">
            <h2 class="h2_tle">帮助中心</h2>
            <div class="list_box">
              <ul>
                <li>
                  <a class="small_tlt cr cdr" href="javascript:void(0)">使用帮助</a>
                  <ul class="ul_item" style="display:block">               
                    <li><a href="help_index.html" tppabs="help_index.html">购物流程</a></li>  
                    <li><a class="selGreen" href="h_qus_01.html" tppabs="h_qus_01.html">常见问题</a></li> 
                    <li><a href="kefu.html" tppabs="kefu.html">客服联系方式</a></li>
                  </ul>
                </li>
                 <li>
                  <a class="small_tlt cdr" href="javascript:void(0)">配送方式</a>
                  <ul class="ul_item">               
                    <li><a class="selGreen" href="pssm.html" tppabs="pssm.html">配送说明</a></li>
                    <li><a href="yfsm.html" tppabs="yfsm.html">运费说明</a></li>
                    <li><a href="yhqs.html" tppabs="yhqs.html">验货签收</a></li>
                  </ul>
                </li>
                 <li>
                  <a class="small_tlt cdr" href="javascript:void(0)">支付方式</a>
                  <ul class="ul_item">               
                    <li><a href="">在线支付</a></li> 
                    <li><a href="javascript:;">货到付款</a></li>
                  </ul>
                </li>
                <li>
                  <a class="small_tlt cdr" href="javascript:void(0)">售后服务</a>
                  <ul class="ul_item">               
                    <li><a href="">退货政策</a></li>
                    <li><a href="thlc.html" tppabs="thlc.html">退货办理</a></li>
                    <li><a href="tksm.html" tppabs="tksm.html">退款说明</a></li>
                  </ul>
                </li>
              </ul>
            </div>
              <script type="text/javascript">
              $(function () {
                $(".lMenu ul li").click(function(){
                  var thisSpan=$(this);
                  $(".ul_item").prev(".small_tlt").removeClass("crd");
                  $("ul", this).prev(".small_tlt").addClass("cdr");
                  $(this).children(".ul_item").slideDown("fast");
                  $(this).siblings().children(".ul_item").slideUp("fast");
                })
              });
            </script>
      </div>
      <div class="rcont">
        <div class="shopProcess">
          <div class="h_qus_box">
            <h2 class="hp_tle">购物流程</h2>
            <ul class="qus_list">
              <li>
                <h5 class="qus_title"><span class="right">&nbsp;</span>1. 忘记登录密码了怎么办？</h5>
                <div class="answer_wrap">
                  <p>第一步：通过登录界面点击“忘记密码”，然后按页面提示操作即可。</p>
                  <p>第二步：进入安全中心，输入账户名和验证码，再点击“下一步”。</p>
                  <p>第三步：验证身份，选择验证方式（验证方式根据登录环境而定，分为身验证密保找回，获取验证码，点击“确定”；和短信找回，发送短信，点击“我已发送”）（如果绑定的手机已停用，请点击蓝色字体“人工申诉”查看）</p>
                  <p>第四步：重置密码，输入您的新密码，点击“确定”。</p>
                  <p>第五步：密码重置成功，重新登录即可。</p>
                </div>
              </li>
              <li>
                <h5 class="qus_title"><span class="right">&nbsp;</span>2. 总是提示填写的邮箱格式有误怎么办？</h5>
                <div class="answer_wrap">
                  <p>为了保证您的服务质量，建议您使用服务稳定安全性较高的邮箱注册和绑定。目前我们支持邮箱如：qq.com,126.com,sina.com,sohu.com,163.com,gmail.com,hotmail.com等绝大多数市面常见邮箱。</p>
                </div>
              </li>
              <li>
                <h5 class="qus_title"><span class="right">&nbsp;</span>3.为什么结算页面没有货到付款？</h5>
                <div class="answer_wrap">
                  <p>我店商品暂不支持货到付款，给您带来不便，敬请谅解。</p>
                </div>
              </li>
                <li>
                <h5 class="qus_title"><span class="right">&nbsp;</span>4.下单后可以修改订单吗？</h5>
                <div class="answer_wrap">
                  <p>我店商品暂不支持货到付款，给您带来不便，敬请谅解。</p>
                </div>
              </li>
                <li>
                <h5 class="qus_title"><span class="right">&nbsp;</span>5.为什么结算页面没有货到付款？</h5>
                <div class="answer_wrap">
                  <p>我店商品暂不支持货到付款，给您带来不便，敬请谅解。</p>
                </div>
              </li>
                <li>
                <h5 class="qus_title"><span class="right">&nbsp;</span>6.支付方式有哪些？如何支付？</h5>
                <div class="answer_wrap">
                  <p>支付方式分为以下几种：（注：先款订单请您在订单提交后24小时内完成支付， 否则订单会自动取消)</p>
                  <p>1.      货到付款：选择货到付款，在订单送达时您可选择现金、POS机刷卡、支票方式支付货款或通过京东APP手机客户端 【扫一扫】功能扫描包裹单上的订单条形码方式用手机来完成订单的支付（扫码支付）；在订单未妥投之前您还可以进入“我的订单”在线支付货款。</p>
                </div>
              </li>
                <li>
                <h5 class="qus_title"><span class="right">&nbsp;</span>7.如何联系商家？</h5>
                <div class="answer_wrap">
                  <p>我店商品暂不支持货到付款，给您带来不便，敬请谅解。</p>
                </div>
              </li>
                <li>
                <h5 class="qus_title"><span class="right">&nbsp;</span>3.为什么结算页面没有货到付款？</h5>
                <div class="answer_wrap">
                  <p>我店商品暂不支持货到付款，给您带来不便，敬请谅解。</p>
                </div>
              </li>
                <li>
                <h5 class="qus_title"><span class="right">&nbsp;</span>3.为什么结算页面没有货到付款？</h5>
                <div class="answer_wrap">
                  <p>我店商品暂不支持货到付款，给您带来不便，敬请谅解。</p>
                </div>
              </li>
            </ul>
            <script type="text/javascript">
              $(function(){
                $(".h_qus_box ul li").click(function(){
                    $(this).find('.answer_wrap').toggle();
                    $(this).toggleClass('current_show');
                  },function(){
                    $(this).find('.answer_wrap').toggle();
                  }).hover(function(){
                    $(this).find('.qus_title').addClass("cur_hover");
                  },function(){
                   $(this).find('.qus_title').removeClass("cur_hover");
                  })
              })
            </script>
          </div>
      </div>
     </div>
  </div>
</div>
  <!--底部样式-->
 <div class="ft_footer_service" id="footer">
  <div class="footerbox" >
  <!--底部-->
  <div class="Menu_style ensure ">
    <div class="phone">
      400-3456-333
    </div>
    <div class="icon_en">
     <a href="#" class="icon_link"><img src="/static/index/images/footer_icon_31.png" /><span class="left"><h2>退换货</h2>7天无理由退换货</span></a>
     <a href="#" class="icon_link"><img src="/static/index/images/footer_icon_33.png" /><span class="left"><h2>正品保障</h2>企业认证产品</span></a>
     <a href="#" class="icon_link"><img src="/static/index/images/footer_icon_35.png" /><span class="left"><h2>满包邮</h2>满68元包邮</span></a>
     <a href="#" class="icon_link"><img src="/static/index/images/footer_icon_37.png" /><span class="left"><h2>直供产品</h2>厂家直销平台</span></a>
    </div>
   </div>
  </div>
 </div>
 <!--底部样式-->
 <div class="footer">
  <div class="footerbox clearfix">
  <div class="clearfix">
   <div class="left help_link">
    <dl>
	 <dt>投保指南</dt>
	 <dd><a href="#">保险需求测试</a></dd>
     <dd><a href="#">专题及活动</a></dd>
     <dd><a href="#">挑选保险产品</a> </dd>
     <dd><a href="#">常见问题 </a></dd>
	</dl>
	<dl>
	 <dt>保险服务</dt>
	 <dd><a href="#">保险需求测试</a></dd>
     <dd><a href="#">专题及活动</a></dd>
     <dd><a href="#">挑选保险产品</a> </dd>
     <dd><a href="#">常见问题 </a></dd>
	</dl>
	<dl>
	 <dt>支付方式</dt>
	 <dd><a href="#">保险需求测试</a></dd>
     <dd><a href="#">专题及活动</a></dd>
     <dd><a href="#">挑选保险产品</a> </dd>
     <dd><a href="#">常见问题 </a></dd>
	</dl>
	<dl>
	 <dt>帮助中心</dt>
	 <dd><a href="#">保险需求测试</a></dd>
     <dd><a href="#">专题及活动</a></dd>
     <dd><a href="#">挑选保险产品</a> </dd>
     <dd><a href="#">常见问题 </a></dd>
	</dl>	   
   </div>
   <!--信息内容-->
  <!--认证-->
 <!--认证展示样式-->
<div class="Authenticate left clearfix" id="Authenticate_show">
  <div class="Authenticate_show">
  <div class="picMarquee-left">
			<div class="hd">
				<a class="next">&lt;</a>
				<a class="prev">&gt;</a>
			</div>
			<div class="bd">
				<ul class="picList">
					<li><div class="pic"><a href="" target="_blank"><img src="/static/index/images/pic1.jpg" /></a></div></li>
					<li><div class="pic"><a href="" target="_blank"><img src="/static/index/images/pic2.jpg" /></a></div></li>
					<li><div class="pic"><a href="" target="_blank"><img src="/static/index/images/pic3.jpg" /></a></div></li>
					<li><div class="pic"><a href="" target="_blank"><img src="/static/index/images/pic4.jpg" /></a></div></li>
					<li><div class="pic"><a href="" target="_blank"><img src="/static/index/images/pic5.jpg" /></a></div></li>
					<li><div class="pic"><a href="" target="_blank"><img src="/static/index/images/pic6.jpg" /></a></div></li>
                    <li><div class="pic"><a href="" target="_blank"><img src="/static/index/images/pic6.jpg" /></a></div></li>
                    <li><div class="pic"><a href="" target="_blank"><img src="/static/index/images/pic6.jpg" /></a></div></li>
				</ul>
			</div>
		</div>
		<script type="text/javascript">
		jQuery(".picMarquee-left").slide({mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",vis:2,interTime:50});
		</script>
  </div>
</div>
  </div>
 <div class="text_link">
   <p><a href="#">关于我们</a>｜ <a href="#">公开信息披露</a>｜ <a href="#">加入我们</a>｜ <a href="#">联系我们</a>｜ <a href="#">版权声明</a>｜ <a href="#">隐私声明</a>｜ <a href="#">网站地图</a></p>
   <p>蜀ICP备11017033号 Copyright ©2011 成都福际生物技术有限公司 All Rights Reserved. Technical support:CDDGG Group</p>
  </div>
  </div>
 </div>
 <!--右侧菜单栏购物车样式-->
<div class="fixedBox">
  <ul class="fixedBoxList">
      <li class="fixeBoxLi user"><a href="<?php echo url('index/usercenter/usercenter'); ?>"> <span class="fixeBoxSpan iconfont icon-my"></span> <strong>用户</strong></a> </li>
    <li class="fixeBoxLi cart_bd" style="display:block;" id="cartboxs">
    <p class="good_cart">0</p>
      <span class="fixeBoxSpan iconfont icon-cart"></span> <strong>购物车</strong>
      <div class="cartBox">
          <div class="bjfff"></div><div class="message">购物车内暂无商品，赶紧选购吧</div>    </div>
      </li>
    <li class="fixeBoxLi Service "> <span class="fixeBoxSpan iconfont icon-qq1"></span> <strong>客服</strong>
      <div class="ServiceBox">
        <div class="bjfffs"></div>
        <dl onclick="javascript:;">
        <dt><img src=""></dt>
           <dd><strong>QQ客服1</strong>
              <p class="p1">9:00-22:00</p>
               <p class="p2"><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=123456&amp;site=DGG三端同步&amp;menu=yes">点击交谈</a></p>
              </dd>
            </dl>
        <dl onclick="javascript:;">
              <dt><img src=""></dt>
              <dd> <strong>QQ客服1</strong>
                <p class="p1">9:00-22:00</p>
                <p class="p2"><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=123456&amp;site=DGG三端同步&amp;menu=yes">点击交谈</a></p>
              </dd>
            </dl>
            </div>
     </li>
   <li class="fixeBoxLi code cart_bd " style="display:block;" id="cartboxs">
      <span class="fixeBoxSpan iconfont icon-weixin"></span> <strong>微信</strong>
      <div class="cartBox">
          <div class="bjfff"></div>
      <div class="QR_code">
       <p><img src="" width="150px" height="150px" style=" margin-top:10px;" /></p>
       <p>微信扫一扫，关注我们</p>
      </div>    
      </div>
  </li>

    <li class="fixeBoxLi Home"> <a href="./"> <span class="fixeBoxSpan iconfont  icon-collect"></span> <strong>收藏</strong> </a> </li>
    <li class="fixeBoxLi BackToTop"> <span class="fixeBoxSpan iconfont icon-top"></span> <strong>返回顶部</strong> </li>
  </ul>
</div>
</body>
</html>
