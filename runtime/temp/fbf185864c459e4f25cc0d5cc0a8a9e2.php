<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:91:"/var/www/html/pluralisticShop/public/../application/index/view/useraddress/UserAddress.html";i:1510152282;s:81:"/var/www/html/pluralisticShop/public/../application/index/view/public/header.html";i:1508755522;s:78:"/var/www/html/pluralisticShop/public/../application/index/view/public/nav.html";i:1508834615;s:81:"/var/www/html/pluralisticShop/public/../application/index/view/public/footer.html";i:1508310080;s:80:"/var/www/html/pluralisticShop/public/../application/index/view/public/right.html";i:1508308453;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/static/index/css/common.css" rel="stylesheet" tyle="text/css" />
<link href="/static/index/css/style.css" rel="stylesheet" type="text/css" />
<link href="/static/index/fonts/iconfont.css" rel="stylesheet" type="text/css" />
<link href="/static/index/css/Orders.css" rel="stylesheet" type="text/css" />
<script src="/static/index/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="/static/index/js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
<script src="/static/index/js/common_js.js" type="text/javascript"></script>
<script src="/static/index/js/footer.js" type="text/javascript"></script>
<script src="/static/index/js/jquery.jumpto.js" type="text/javascript"></script>
<title>用户地址管理</title>
</head>
<script type="text/javascript">
  $(document).ready(function(){

		  setInterval(showTime, 1000);                                
		  function timer(obj,txt){
						  obj.text(txt);
		  }        
		  function showTime(){                                
				  var today = new Date();
				  var weekday=new Array(7)
				  weekday[0]="星期日"
				  weekday[1]="星期一"
				  weekday[2]="星期二"
				  weekday[3]="星期三"
				  weekday[4]="星期四"
				  weekday[5]="星期五"
				  weekday[6]="星期六"                                        
				  var y=today.getFullYear()+"年";
				  var month=today.getMonth()+1+"月";
				  var td=today.getDate();
				  var d=weekday[today.getDay()];
				  var h=today.getHours();
				  var m=today.getMinutes();
				  var s=today.getSeconds();        
				  timer($("#y"),y+month);
				  //timer($("#MH"),month);        
				  timer($("h1"),td);        
				  timer($("#D"),d);
				  timer($("#H"),h);
				  timer($("#M"),m);
				  timer($("#S"),s);
		  }        
  })
</script>
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
    <a href="<?php echo url('index/shopcart/shopcart'); ?>" title="去购物车结算" id="btn-payforgoods" class="Shopping">去购物车结算</a>
   </div>  
   </div>
 </div>
</div>
<!--菜单导航样式-->

</div>
<script>

</script><div id="Menu" class="clearfix">
<div class="Inside_pages">
  <div id="allSortOuterbox" class="display">
    <div class="t_menu_img"></div>
    <div class="Category"><a href="#"><em></em>所有产品分类</a></div>
    <div class="hd_allsort_out_box_new" style="border:1px solid green;height:532px;">
   <!--左侧栏目开始-->
   <ul class="Menu_list" > 
        <?php if(is_array($classAname) || $classAname instanceof \think\Collection || $classAname instanceof \think\Paginator): $k1 = 0; $__LIST__ = $classAname;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k1 % 2 );++$k1;?>
        <li class="name">
              <div class="Menu_name"><a href="#" ><?php echo $vo['categorytitle']; ?></a> <span>&lt;</span></div>
              <div class="link_name">
                  <p>
                      <a href="#">茅台</a><a href="#">五粮液</a><a href="#">郎酒</a><a  href="#">剑南春</a>
                  </p>
                  <p>
                      <a href="#">酱香型</a><a href="#">四川</a><a href="#">贵州</a><a  href="#">养生酒</a>
                  </p>
              </div>
              <div class="menv_Detail">
                  <div class="cat_pannel clearfix">
               <div class="hd_sort_list">
                     <?php if(is_array($vo['level2']) || $vo['level2'] instanceof \think\Collection || $vo['level2'] instanceof \think\Paginator): $k2 = 0; $__LIST__ = $vo['level2'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$level2): $mod = ($k2 % 2 );++$k2;?>
                      <dl class="clearfix" data-tpc="1">
                           <dt><?php echo $level2['categorytitle']; ?></dt>
                           
                           <dd>
                            <?php if(is_array($level2['level3']) || $level2['level3'] instanceof \think\Collection || $level2['level3'] instanceof \think\Paginator): $k3 = 0; $__LIST__ = $level2['level3'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$level3): $mod = ($k3 % 2 );++$k3;?>
                                <a href="#"><?php echo $level3['categorytitle']; ?></a>
                                <!-- <php> <br> </php> -->
                                  <?php if($k3 == 8): ?> <br>
                                  <?php elseif($k3 == 16): ?><br>
                                  <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                           </dd> 
                      </dl>
                    <?php endforeach; endif; else: echo "" ;endif; ?> 
               </div>
               <div class="Brands">
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
        <?php endforeach; endif; else: echo "" ;endif; ?>
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
<!--内页样式-->
<div class="user_style clearfix" id="user">

 <!--用户中心布局样式-->
   <div class="left_style">
   <!--栏目名称-->
   <div class="title_username">个人中心</div> 
  
   <div class="user_Head"> 
   <div class="user_time">
       <h4 id="y" class="years"></h4>
      <h1></h1>
      <h4 id="D"></h4>
     </div>
     <div class="user_portrait">
   <a href="#" title="修改头像"></a> <img src="/static/index/images/people.png" />
    <div class="background_img"></div></div>
    
   </div>
<ul class="Section">
       <li><a href="#" class="on"><em></em><span>我的特色馆</span></a></li>
       <li><a href="#"><em></em><span>个人信息</span></a></li>
       <li><a href="#"><em></em><span>修改密码</span></a></li>
       <li><a href="user_OrdersList.html"><em></em><span>我的订单</span></a></li>
       <li><a href="#"><em></em><span>我的评论</span></a></li>
       <li><a href="#"><em></em><span>我的积分</span></a></li>
       <li><a href="#"><em></em><span>我的收藏</span></a></li>
       <li><a href="User_Address.html"><em></em><span>收货地址管理</span></a></li>
      </ul>
 </div>
 <!--右侧样式布局-->
   <div class="right_style r_user_style">
    <!--地址管理-->
     <div class="user_address">
        <div class="title_name"> <span class="name">地址管理</span></div>
        <div class="Address_List clearfix">
        <!--地址类表-->
           <ul class="Address_info">
            <div class="address_title"><a href="#" class="modify" title="修改信息"></a>地址信息 <a href="javascript:over('0')" class="delete "><i class="iconfont icon-close"></i></a></div>
            <li>张婷婷</li>
            <li>四川成都武侯区簇景横街210号3栋1单元307号。</li>
            <li>182938596861</li>
            <li>610000</li>
           </ul>
           <ul class="Address_info">
            <div class="address_title"><a href="#" class="modify" title="修改信息"></a>地址信息 <a href="javascript:over('0')" class="delete "><i class="iconfont icon-close"></i></a></div>
            <li>张婷婷</li>
            <li>四川成都武侯区簇景横街210号3栋1单元307号。</li>
            <li>182938596861</li>
            <li>610000</li>
           </ul>
           <ul class="Address_info">
            <div class="address_title"><a href="#" class="modify" title="修改信息"></a>地址信息 <a href="javascript:over('0')" class="delete "><i class="iconfont icon-close"></i></a></div>
            <li>张婷婷</li>
            <li>四川成都武侯区簇景横街210号3栋1单元307号。</li>
            <li>182938596861</li>
            <li>610000</li>
           </ul>
           <ul class="Address_info">
            <div class="address_title"><a href="#" class="modify " title="修改信息"></a>地址信息 <a href="javascript:over('0')" class="delete "><i class="iconfont icon-close"></i></a></div>
            <li>张婷婷</li>
            <li>四川成都武侯区簇景横街210号3栋1单元307号。</li>
            <li>182938596861</li>
            <li>610000</li>
           </ul>
        </div>
        <!--添加地址样式-->
          <script src="/static/index/Threelinkage/kit.js"></script>
		<!-- <script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-30210234-1']);
			_gaq.push(['_trackPageview']);
			(function() {
				var ga = document.createElement('script');
				ga.type = 'text/javascript';
				ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(ga, s);
			})();

		</script> -->
		<script src="/static/index/Threelinkage/dom.js"></script>
		<script src="/static/index/Threelinkage/event.js"></script>
        		<!-- <script src="/static/index/Threelinkage/math.js"></script> -->
		<script src="/static/index/Threelinkage/TreeDict.js"></script>
		<script src="/static/index/Threelinkage/form.js"></script>
		<script src="/static/index/Threelinkage/combobox.js"></script>
		<script src="/static/index/Threelinkage/suggestselect.js"></script>
		<script src="/static/index/Threelinkage/list.js"></script>
		<!--json data-->
		<script src="/static/index/Threelinkage/json-data.js" charset="utf-8"></script>
        <link href="/static/index/Threelinkage/linkage.css" rel="stylesheet"  type="text/css"/>

        <form >
        <div class="Add_Addresss">
             <div class="title_name"><i></i>添加地址</div>
             <table>
              <tr>
               <td class="label_name">收货地址</td>
               <td colspan="3" class="select"> 
               <span class="select_adderss" id="sheng"><label> 省份 </label><select class="kitjs-form-suggestselect " ></select></span>
               <span class="select_adderss" id="shi"><label> 市/县 </label><select class="kitjs-form-suggestselect "></select></span>
               <span class="select_adderss" id="qu"><label> 区/县 </label><select class="kitjs-form-suggestselect"></select></span>
               <span class="select_adderss"><label> 详细地址 </label><input name="address" id="address" value="" type="text" class="Add-text"/></span>
               </td>
               </tr>
              <tr>
              <td class="label_name">收件人姓名</td><td><input name="name" id="name" type="text"  class="Add-text"/><i>（必填）</i></td>
              <td class="label_name">电子邮箱</td><td><input name="email" id="email" type="text"  class="Add-text"/><i>（选填）</i></td>
              </tr>
              <tr>
              <td class="label_name">邮&nbsp;&nbsp;编</td><td><input name="postal_code" id="postal_code" type="text"  class="Add-text"/><i>（必填）</i></td>
              <td class="label_name">手&nbsp;&nbsp;机</td><td><input name="phone" id="phone" type="text"  class="Add-text"/><i>（必填）</i></td>
              </tr>
              <tr><td class="label_name"></td><td></td><td class="label_name"></td><td></td>
              </tr>             
             </table>
             <div class="address_Note"><span>注：</span>只能添加5个收货地址信息。请乎用假名填写地址，如造成损失由收货人自己承担。</div>
             <div class="btn"><input name="btn" type="button" onclick="adre()" value="添加地址" class="Add_btn" /></div>
         </div>
       </form>
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
					<li>
						<div class="pic"><a href="" target="_blank"><img src="/static/index/images/pic1.jpg" /></a></div>
                          <!--<div class="title"><a href="http://www.SuperSlide2.com" target="_blank">效果图1</a></div>-->					
                    </li>
					<li>
						<div class="pic"><a href="" target="_blank"><img src="/static/index/images/pic2.jpg" /></a></div>
						<!--<div class="title"><a href="http://www.SuperSlide2.com" target="_blank">效果图2</a></div>-->
					</li>
					<li>
						<div class="pic"><a href="" target="_blank"><img src="/static/index/images/pic3.jpg" /></a></div>
						
					</li>
					<li>
						<div class="pic"><a href="" target="_blank"><img src="/static/index/images/pic1.jpg" /></a></div>
						
					</li>
					<li>
						<div class="pic"><a href="" target="_blank"><img src="/static/index/images/pic1.jpg" /></a></div>
						
					</li>
					<li>
						<div class="pic"><a href="" target="_blank"><img src="/static/index/images/pic1.jpg" /></a></div>
						
					</li>
                    <li>
						<div class="pic"><a href="" target="_blank"><img src="/static/index/images/pic1.jpg" /></a></div>
						
					</li>
                    <li>
						<div class="pic"><a href="" target="_blank"><img src="/static/index/images/pic1.jpg" /></a></div>
						
					</li>
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
   <p>
  <a href="#">关于我们</a>｜ <a href="#">公开信息披露</a>｜ <a href="#">加入我们</a>｜ <a href="#">联系我们</a>｜ <a href="#">版权声明</a>｜ <a href="#">隐私声明</a>｜ <a href="#">网站地图</a></p>
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
 <script src="/static/index/js/orders.js" type="text/javascript"></script>
<script>
var scope={
	'address_url':"<?php echo url('Useraddress/address'); ?>",
}
var a = $kit.els8cls($kit.ui.Form.ComboBox.Select.defaultConfig.transformCls), a1 = [];
for(var i = 0; i < a.length; i++) {
	a1.push(a[i])
}
a = a1;
var b1 = new $kit.ui.Form.ComboBox.Select({
	el : a[0],
	data : (function() {
		var provTreeDict = new TreeDict();
		for(var prov in chinaJSON) {
			provTreeDict.ad(prov, prov);
		}
		return provTreeDict;
	})()
});
b1.transform();
b1.ev({
	ev : 'change',
	fn : function() {
		var prov = chinaJSON[b1.inputEl.value];
		if(prov == null) {
			return;
		}
		var cityTree = new TreeDict();
		for(var city in prov) {
			cityTree.ad(city, city);
		}
		b2.inputEl.value = '';
		b2.formEl.value = '';
		b2.config.data = cityTree;
		b2.list.buildList(cityTree.search(''));
	}
});
var b2 = new $kit.ui.Form.ComboBox.Select({
	el : a[1],
	data : undefined
});
b2.transform();
b2.ev({
	ev : 'change',
	fn : function() {
		var city = chinaJSON[b1.inputEl.value][b2.inputEl.value];
		if(city == null) {
			return;
		}
		var districtTree = new TreeDict();
		for(var district in city) {
			districtTree.ad(district, city[district]);
		}
		b3.inputEl.value = '';
		b3.formEl.value = '';
		b3.config.data = districtTree;
		b3.list.buildList(districtTree.search(''));
	}
});
var b3 = new $kit.ui.Form.ComboBox.Select({
	el : a[2],
	data : undefined
});
b3.transform();

</script>