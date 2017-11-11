<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:79:"/var/www/html/pluralisticShop/public/../application/index/view/index/index.html";i:1509333084;s:81:"/var/www/html/pluralisticShop/public/../application/index/view/public/header.html";i:1508755522;s:78:"/var/www/html/pluralisticShop/public/../application/index/view/public/nav.html";i:1508834615;s:81:"/var/www/html/pluralisticShop/public/../application/index/view/public/footer.html";i:1508310080;s:80:"/var/www/html/pluralisticShop/public/../application/index/view/public/right.html";i:1508308453;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/static/index/css/common.css" rel="stylesheet" tyle="text/css" />
<link href="/static/index/css/style.css" rel="stylesheet" type="text/css" />
<link href="/static/index/fonts/iconfont.css" rel="stylesheet" type="text/css" />
<script src="/static/index/js/jquery.min.1.8.2.js" type="text/javascript"></script>
<script src="/static/index/js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
<script src="/static/index/js/common_js.js" type="text/javascript"></script>
<script src="/static/index/js/footer.js" type="text/javascript"></script>
<script src="/static/index/js/jquery.jumpto.js" type="text/javascript"></script>
<script src="/static/index/js/template-native.js" type="text/javascript"></script>
<title>商城首页-传统版</title>
</head>

<body>
<script type="text/javascript" charset="UTF-8">
<!--
 //点击效果start
 function infonav_more_down(index)
 {
  var inHeight = ($("div[class='p_f_name infonav_hidden']").eq(index).find('p').length)*30;//先设置了P的高度，然后计算所有P的高度
  if(inHeight > 60){
   $("div[class='p_f_name infonav_hidden']").eq(index).animate({height:inHeight});
   $(".infonav_more").eq(index).replaceWith('<p class="infonav_more"><a class="more"  onclick="infonav_more_up('+index+');return false;" href="javascript:">收起<em class="pulldown"></em></a></p>');
  }else{
   return false;
  }
 }
 function infonav_more_up(index)
 {
  var infonav_height = 85;
  $("div[class='p_f_name infonav_hidden']").eq(index).animate({height:infonav_height});
  $(".infonav_more").eq(index).replaceWith('<p class="infonav_more"> <a class="more" onclick="infonav_more_down('+index+');return false;" href="javascript:">更多<em class="pullup"></em></a></p>');
 }
   
 function onclick(event) {
  info_more_down();
 return false;
 }
 //点击效果end  
//-->
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
<div class="Slide_style" >
<!--幻灯片样式1-->
<div class="Menu_style clearfix" id="Slide">
  	<div id="xiao_slideBox" class="xiao_slideBox">
			<div class="hd">
				<ul class="smallUl"></ul>
			</div>
			<div class="bd">
				<ul>
                                <?php if(is_array($xiaolunbo_img_srcn) || $xiaolunbo_img_srcn instanceof \think\Collection || $xiaolunbo_img_srcn instanceof \think\Paginator): $i = 0; $__LIST__ = $xiaolunbo_img_srcn;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<li><a href="#" target="_blank"><div style="background:url(<?php echo $vo; ?>) no-repeat; background-position:center;background-size:100% 645px; width:100%; height:645px;"></div></a></li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
			<!-- 下面是前/后按钮代码，如果不需要删除即可 -->
			<a class="prev" href="javascript:void(0)"></a>
			<a class="next" href="javascript:void(0)"></a>

		</div>
		<script type="text/javascript">
		jQuery(".xiao_slideBox").slide({titCell:".hd ul",mainCell:".bd ul",autoPlay:true,autoPage:true,interTime:9000});
		</script>
</div>
<!--幻灯片样式-->
   	<div id="slideBox" class="slideBox">
			<div class="hd">
				<ul class="smallUl"></ul>
			</div>
			<div class="bd">
				<ul>
                                <?php if(is_array($dalunbo_img_srcn) || $dalunbo_img_srcn instanceof \think\Collection || $dalunbo_img_srcn instanceof \think\Paginator): $i = 0; $__LIST__ = $dalunbo_img_srcn;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<li><a href="#" target="_blank"><div style="background:url(<?php echo $vo; ?>) no-repeat; background-position:center; width:80%; height:645px; background-size:100% 100%"></div></a></li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
			<!-- 下面是前/后按钮代码，如果不需要删除即可 -->
			<a class="prev" href="javascript:void(0)"><em class="left_arrow"></em></a>
			<a class="next" href="javascript:void(0)"><em class="right_arrow"></em></a>

		</div>
		<script type="text/javascript">
		jQuery(".slideBox").slide({titCell:".hd ul",mainCell:".bd ul",autoPlay:true,autoPage:true,delayTime:500,interTime:5000});
		</script>
 </div>
<div class="index_style clearfix" id="service_list">
  <div class="service_style">
    <ul class="service_list">
       <li class="xianduan"><a href="#"><em class="iconfont icon-plane"></em><h2>机票</h2></a></li>
       <li><a href="#"><em class="iconfont icon-train"></em><h2>火车票</h2></a></li>
       <li><a href="#"><em class="iconfont icon-friendfill"></em><h2>便民服务</h2></a></li>
       <li><a href="#"><em class="iconfont icon-jianzhutubiao"></em><h2>同城</h2></a></li>
       <li><a href="#"><em class="iconfont icon-jiudian"></em><h2>酒店</h2></a></li>
       <li><a href="#"><em class="iconfont icon-chongzhi"></em><h2>充值</h2></a></li>
       <li><a href="#"><em class="iconfont icon-car"></em><h2>交通违章</h2></a></li>
       <li><a href="#"><em class="iconfont icon-xiangzi"></em><h2>成人用品</h2></a></li>
    </ul>
  </div>
</div>
<div class="index_style clearfix">
 <!--推荐图层样式-->
  <div class="recommend">
   <div class="recommend_bg"></div>
   <div class="list">
     <div class="picScroll">
        <div class="hd">
        <a class="prev" href="javascript:void(0)">&gt;</a>
        <a class="next" href="javascript:void(0)">&lt;</a>
        </div>
        <div class="bd">
          <ul>
           <li class="recommend_info">
            <a href="#" class="img_link"><img src="/static/index/Products/x-1.jpg"  width="130px" height="130px"/></a>
            <div class="content">
             <a href="#" class="title_name">有货潮牌Life After Life/男MA-1飞行夹克</a>
             <h2><i>￥</i>124.00</h2>          
            </div>
             <a href="#" class="buy_btn"> 立即购买</a>
           </li>
             <li class="recommend_info">
            <a href="#" class="img_link"><img src="/static/index/Products/x-2.jpg"  width="130px" height="130px"/></a>
            <div class="content">
             <a href="#" class="title_name">烟花烫女装气质修身显瘦连衣裙套装</a>
             <h2><i>￥</i>124.00</h2>          
            </div>
             <a href="#" class="buy_btn"> 立即购买</a>
           </li>
             <li class="recommend_info">
            <a href="#" class="img_link"><img src="/static/index/Products/x-3.jpg"  width="130px" height="130px"/></a>
            <div class="content">
             <a href="#" class="title_name">SK-II 肌底晶透护肤礼盒（神仙水 补水保湿 精华液 乳液 套装）</a>
             <h2><i>￥</i>124.00</h2>          
            </div>
             <a href="#" class="buy_btn"> 立即购买</a>
           </li>
             <li class="recommend_info">
            <a href="#" class="img_link"><img src="/static/index/Products/x-4.jpg"  width="130px" height="130px"/></a>
            <div class="content">
             <a href="#" class="title_name">荣耀 6 Plus (PE-TL10) 3GB内存增强版 金色 移动联通双4G手机 双卡</a>
             <h2><i>￥</i>1124.00</h2>          
            </div>
             <a href="#" class="buy_btn"> 立即购买</a>
           </li>
            <li class="recommend_info ">
            <a href="#" class="img_link"><img src="/static/index/Products/x-5.jpg"  width="130px" height="130px"/></a>
            <div class="content">
             <a href="#" class="title_name">荣耀 6 Plus (PE-TL10) 3GB内存增强版 金色 移动联通双4G手机 双卡</a>
             <h2><i>￥</i>1124.00</h2>          
            </div>
             <a href="#" class="buy_btn"> 立即购买</a>
           </li>
             <li class="recommend_info ">
            <a href="#" class="img_link"><img src="/static/index/Products/x-6.jpg"  width="130px" height="130px"/></a>
            <div class="content">
             <a href="#" class="title_name">荣耀 6 Plus (PE-TL10) 3GB内存增强版 金色 移动联通双4G手机 双卡</a>
             <h2><i>￥</i>1124.00</h2>          
            </div>
             <a href="#" class="buy_btn"> 立即购买</a>
           </li>
            <li class="recommend_info ">
            <a href="#" class="img_link"><img src="/static/index/Products/x-7.jpg"  width="130px" height="130px"/></a>
            <div class="content">
             <a href="#" class="title_name">荣耀 6 Plus (PE-TL10) 3GB内存增强版 金色 移动联通双4G手机 双卡</a>
             <h2><i>￥</i>1124.00</h2>          
            </div>
             <a href="#" class="buy_btn"> 立即购买</a>
           </li>
             <li class="recommend_info">
            <a href="#" class="img_link"><img src="/static/index/Products/x-8.jpg"  width="130px" height="130px"/></a>
            <div class="content">
             <a href="#" class="title_name">荣耀 6 Plus (PE-TL10) 3GB内存增强版 金色 移动联通双4G手机 双卡</a>
             <h2><i>￥</i>1124.00</h2>          
            </div>
             <a href="#" class="buy_btn"> 立即购买</a>
           </li>
          </ul>
        </div>      
     </div>
     <script>jQuery(".picScroll").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"leftLoop",autoPlay:true,vis:4});</script>
   </div>
  </div>
  <!--品牌列表样式-->
  <div class="Brand clearfix">
   <div class="title_name"><span>品牌库</span><span class="English">BRANDS LIBRARIES</span></div>
   <div class="img_title">
     <div class="img_title_name">
      <h1>大品牌，大智慧</h1>
      <h2>优质品牌，精选品牌</h2>
     </div>  
     </div>
    <div class="Brand_style">
     <div class="hd">
      <ul>
       <li>女装品牌</li>
       <li>男装品牌</li>
       <li>外国品牌</li>
       <li>国内品牌</li>
      </ul>
     </div>
     <div class="bd">
      <ul>
       <li>
       <?php if(is_array($nvzhuangpinp_img_srcn) || $nvzhuangpinp_img_srcn instanceof \think\Collection || $nvzhuangpinp_img_srcn instanceof \think\Paginator): $i = 0; $__LIST__ = $nvzhuangpinp_img_srcn;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
       <a href="#"><img src="<?php echo $vo; ?>"  width="125" height="38"/></a>
       <?php endforeach; endif; else: echo "" ;endif; ?>
       </li>
      </ul>
      <ul>
      <?php if(is_array($nanzhuangpinp_img_srcn) || $nanzhuangpinp_img_srcn instanceof \think\Collection || $nanzhuangpinp_img_srcn instanceof \think\Paginator): $i = 0; $__LIST__ = $nanzhuangpinp_img_srcn;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
       <a href="#"><img src="<?php echo $vo; ?>"  width="125" height="38"/></a>
        <?php endforeach; endif; else: echo "" ;endif; ?>  
      </ul>
      <ul>
      <?php if(is_array($waizhuangpinp_img_srcn) || $waizhuangpinp_img_srcn instanceof \think\Collection || $waizhuangpinp_img_srcn instanceof \think\Paginator): $i = 0; $__LIST__ = $waizhuangpinp_img_srcn;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <a href="#"><img src="<?php echo $vo; ?>" width="125" height="38"/></a>
        <?php endforeach; endif; else: echo "" ;endif; ?>  
      </ul>
      <ul>
       <?php if(is_array($guozhuangpinp_img_srcn) || $guozhuangpinp_img_srcn instanceof \think\Collection || $guozhuangpinp_img_srcn instanceof \think\Paginator): $i = 0; $__LIST__ = $guozhuangpinp_img_srcn;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <a href="#"><img src="<?php echo $vo; ?>" width="125" height="38"/></a>
        <?php endforeach; endif; else: echo "" ;endif; ?>  
       
      </ul>
     </div>
    </div>
    <script>jQuery(".Brand_style").slide({trigger:"click"});</script>
  </div>
  <!--产品版块样式图层-->
  <div class="Product_area clearfix">
   <div class="area_title"><div class="name"><span class="floors">1F</span>男装女装</div></div>
   <div class="list_style clearfix">
    <div class="Left_side">
     <ul>
      <li><a href="#"><img src="/static/index/Products/AD-1.jpg" /><div class="Layers"><img src="/static/index/images/bg_img.png" /></div></a></li>
      <li><a href="#"><img src="/static/index/Products/AD-2.jpg" /><div class="Layers"><img src="/static/index/images/bg_img.png" /></div></a></li>
      <li><a href="#"><img src="/static/index/Products/AD-3.jpg" /><div class="Layers"><img src="/static/index/images/bg_img.png" /></div></a></li>
      <li><a href="#"><img src="/static/index/Products/AD-4.jpg" /><div class="Layers"><img src="/static/index/images/bg_img.png" /></div></a></li>
     </ul>
    </div>
    <div class="middle">
     <!--广告-->
      <div class="hd">
         <a class="prev" href="javascript:void(0)">&gt;</a>
		<a class="next" href="javascript:void(0)">&lt;</a>
      </div>
      <div class="bd">
      <ul>
       <li><a href="#"><img src="/static/index/Products/AD-5.jpg" /></a></li>
        <li><a href="#"><img src="/static/index/Products/AD-6.jpg" /></a></li>
      </ul>
      </div>    
    </div>
    <script type="text/javascript">
		jQuery(".middle").slide({titCell:".hd ul",mainCell:".bd ul",autoPlay:true,autoPage:true,interTime:7000});
		</script>
     <div class="Left_side">
     <ul>
       <li><a href="#"><img src="/static/index/Products/AD-1.jpg" /><div class="Layers"><img src="/static/index/images/bg_img.png" /></div></a></li>
      <li><a href="#"><img src="/static/index/Products/AD-2.jpg" /><div class="Layers"><img src="/static/index/images/bg_img.png" /></div></a></li>
      <li><a href="#"><img src="/static/index/Products/AD-3.jpg" /><div class="Layers"><img src="/static/index/images/bg_img.png" /></div></a></li>
      <li><a href="#"><img src="/static/index/Products/AD-4.jpg" /><div class="Layers"><img src="/static/index/images/bg_img.png" /></div></a></li>
     </ul>
    </div>
    <div class="advertising">
     <a href="#"><img src="/static/index/Products/AD-7.jpg"  width="219" height="150"/></a>
     <a href="#"><img src="/static/index/Products/AD-8.jpg" width="219" height="150"/></a>
     <a href="#" class="da_AD"><img src="/static/index/Products/AD-9.jpg" width="318" height="150"/></a>
     <a href="#"><img src="/static/index/Products/AD-10.jpg" width="219" height="150"/></a>
     <a href="#"><img src="/static/index/Products/AD-7.jpg" width="219" height="150"/></a>
    </div>
    <!--品牌-->
    <div class="Brand_Gallery">
     <a href="#"><img src="/static/index/Brand/p-1.jpg"  width="120" height="32"/></a>
     <a href="#"><img src="/static/index/Brand/p-4.jpg"  width="120" height="32"/></a>
     <a href="#"><img src="/static/index/Brand/p-6.jpg"  width="120" height="32"/></a>
     <a href="#"><img src="/static/index/Brand/p-11.jpg"  width="120" height="32"/></a>
     <a href="#"><img src="/static/index/Brand/p-14.jpg"  width="120" height="32"/></a>
     <a href="#"><img src="/static/index/Brand/p-17.jpg"  width="120" height="32"/></a>
     <a href="#"><img src="/static/index/Brand/p-19.jpg"  width="120" height="32"/></a>
     <a href="#"><img src="/static/index/Brand/p-13.jpg"  width="120" height="32"/></a>
    </div>
   </div>
  </div>
    <!--产品版块样式图层-->
  <div class="Product_area clearfix">
   <div class="area_title"><div class="name"><span class="floors">2F</span>个人美妆</div></div>
   <div class="list_style clearfix">
    <div class="Left_side">
     <ul>
      <li><a href="#"><img src="/static/index/Products/AD-1.jpg" /><div class="Layers"><img src="/static/index/images/bg_img.png" /></div></a></li>
      <li><a href="#"><img src="/static/index/Products/AD-2.jpg" /><div class="Layers"><img src="/static/index/images/bg_img.png" /></div></a></li>
      <li><a href="#"><img src="/static/index/Products/AD-3.jpg" /><div class="Layers"><img src="/static/index/images/bg_img.png" /></div></a></li>
      <li><a href="#"><img src="/static/index/Products/AD-4.jpg" /><div class="Layers"><img src="/static/index/images/bg_img.png" /></div></a></li>
     </ul>
    </div>
    <div class="middle">
     <!--广告-->
      <div class="hd">
         <a class="prev" href="javascript:void(0)">&gt;</a>
		<a class="next" href="javascript:void(0)">&lt;</a>
      </div>
      <div class="bd">
      <ul>
       <li><a href="#"><img src="/static/index/Products/AD-5.jpg" /></a></li>
        <li><a href="#"><img src="/static/index/Products/AD-6.jpg" /></a></li>
      </ul>
      </div>    
    </div>
    <script type="text/javascript">
		jQuery(".middle").slide({titCell:".hd ul",mainCell:".bd ul",autoPlay:true,autoPage:true,interTime:7000});
		</script>
     <div class="Left_side">
     <ul>
       <li><a href="#"><img src="/static/index/Products/AD-15.jpg" /><div class="Layers"><img src="/static/index/images/bg_img.png" /></div></a></li>
      <li><a href="#"><img src="/static/index/Products/AD-16.jpg" /><div class="Layers"><img src="/static/index/images/bg_img.png" /></div></a></li>
      <li><a href="#"><img src="/static/index/Products/AD-17.jpg" /><div class="Layers"><img src="/static/index/images/bg_img.png" /></div></a></li>
      <li><a href="#"><img src="/static/index/Products/AD-18.jpg" /><div class="Layers"><img src="/static/index/images/bg_img.png" /></div></a></li>
     </ul>
    </div>
    <div class="advertising">
     <a href="#"><img src="/static/index/Products/AD-11.jpg"  width="219" height="150"/></a>
     <a href="#"><img src="/static/index/Products/AD-12.jpg" width="219" height="150"/></a>
     <a href="#" class="da_AD"><img src="/static/index/Products/AD-14.jpg" width="318" height="150"/></a>
     <a href="#"><img src="/static/index/Products/AD-13.jpg" width="219" height="150"/></a>
     <a href="#"><img src="/static/index/Products/AD-19.jpg" width="219" height="150"/></a>
    </div>
    <!--品牌-->
    <div class="Brand_Gallery">
     <a href="#"><img src="/static/index/Brand/p-1.jpg"  width="120" height="32"/></a>
     <a href="#"><img src="/static/index/Brand/p-4.jpg"  width="120" height="32"/></a>
     <a href="#"><img src="/static/index/Brand/p-6.jpg"  width="120" height="32"/></a>
     <a href="#"><img src="/static/index/Brand/p-11.jpg"  width="120" height="32"/></a>
     <a href="#"><img src="/static/index/Brand/p-14.jpg"  width="120" height="32"/></a>
     <a href="#"><img src="/static/index/Brand/p-17.jpg"  width="120" height="32"/></a>
     <a href="#"><img src="/static/index/Brand/p-19.jpg"  width="120" height="32"/></a>
     <a href="#"><img src="/static/index/Brand/p-13.jpg"  width="120" height="32"/></a>
    </div>
   </div>
  </div>
    <!--产品版块样式图层-->
  <div class="Product_area clearfix">
   <div class="area_title"><div class="name"><span class="floors">3F</span>美食保健</div></div>
   <div class="list_style clearfix">
    <div class="Left_side">
     <ul>
      <li><a href="#"><img src="/static/index/Products/S-AD-5.jpg"  width="200" height="220"/><div class="Layers"><img src="/static/index/images/bg_img.png" /></div></a></li>
      <li><a href="#"><img src="/static/index/Products/S-AD-6.jpg" width="200" height="220" /><div class="Layers"><img src="/static/index/images/bg_img.png" /></div></a></li>
      <li><a href="#"><img src="/static/index/Products/AD-3.jpg"  width="200" height="220"/><div class="Layers"><img src="/static/index/images/bg_img.png" /></div></a></li>
      <li><a href="#"><img src="/static/index/Products/AD-4.jpg"  width="200" height="220"/><div class="Layers"><img src="/static/index/images/bg_img.png" /></div></a></li>
     </ul>
    </div>
    <div class="middle">
     <!--广告-->
      <div class="hd">
         <a class="prev" href="javascript:void(0)">&gt;</a>
		<a class="next" href="javascript:void(0)">&lt;</a>
      </div>
      <div class="bd">
      <ul>
       <li><a href="#"><img src="/static/index/Products/AD-5.jpg" /></a></li>
        <li><a href="#"><img src="/static/index/Products/AD-6.jpg" /></a></li>
      </ul>
      </div>    
    </div>
    <script type="text/javascript">
		jQuery(".middle").slide({titCell:".hd ul",mainCell:".bd ul",autoPlay:true,autoPage:true,interTime:7000});
		</script>
     <div class="Left_side">
     <ul>
       <li><a href="#"><img src="/static/index/Products/S-AD-1.jpg"  width="200" height="220"/><div class="Layers"><img src="/static/index/images/bg_img.png"  width="220" height="220"/></div></a></li>
      <li><a href="#"><img src="/static/index/Products/S-AD-2.jpg"  width="200" height="220"/><div class="Layers"><img src="/static/index/images/bg_img.png"  width="220" height="220"/></div></a></li>
      <li><a href="#"><img src="/static/index/Products/S-AD-3.jpg" width="200" height="220"/><div class="Layers"><img src="/static/index/images/bg_img.png"  width="220" height="220"/></div></a></li>
      <li><a href="#"><img src="/static/index/Products/S-AD-4.jpg"  width="200" height="220"/><div class="Layers"><img src="/static/index/images/bg_img.png"  width="220" height="220"/></div></a></li>
     </ul>
    </div>
    <div class="advertising">
     <a href="#"><img src="/static/index/Products/S-AD-X-1.jpg"  width="219" height="150"/></a>
     <a href="#"><img src="/static/index/Products/S-AD-X-2.jpg" width="219" height="150"/></a>
     <a href="#" class="da_AD"><img src="/static/index/Products/AD-14.jpg" width="318" height="150"/></a>
     <a href="#"><img src="/static/index/Products/S-AD-X-3.jpg" width="219" height="150"/></a>
     <a href="#"><img src="/static/index/Products/AD-19.jpg" width="219" height="150"/></a>
    </div>
    <!--品牌-->
    <div class="Brand_Gallery">
     <a href="#"><img src="/static/index/Brand/p-1.jpg"  width="120" height="32"/></a>
     <a href="#"><img src="/static/index/Brand/p-4.jpg"  width="120" height="32"/></a>
     <a href="#"><img src="/static/index/Brand/p-6.jpg"  width="120" height="32"/></a>
     <a href="#"><img src="/static/index/Brand/p-11.jpg"  width="120" height="32"/></a>
     <a href="#"><img src="/static/index/Brand/p-14.jpg"  width="120" height="32"/></a>
     <a href="#"><img src="/static/index/Brand/p-17.jpg"  width="120" height="32"/></a>
     <a href="#"><img src="/static/index/Brand/p-19.jpg"  width="120" height="32"/></a>
     <a href="#"><img src="/static/index/Brand/p-13.jpg"  width="120" height="32"/></a>
    </div>
   </div>
  </div>
     <!--产品版块样式图层-->
  <div class="Product_area clearfix">
   <div class="area_title"><div class="name"><span class="floors">4F</span>鞋子箱包</div></div>
   <div class="list_style clearfix">
    <div class="Left_side">
     <ul>
      <li><a href="#"><img src="/static/index/Products/X-AD-5.jpg"  width="200" height="220"/><div class="Layers"><img src="/static/index/images/bg_img.png" /></div></a></li>
      <li><a href="#"><img src="/static/index/Products/X-AD-6.jpg" width="200" height="220" /><div class="Layers"><img src="/static/index/images/bg_img.png" /></div></a></li>
      <li><a href="#"><img src="/static/index/Products/X-AD-7.jpg"  width="200" height="220"/><div class="Layers"><img src="/static/index/images/bg_img.png" /></div></a></li>
      <li><a href="#"><img src="/static/index/Products/AD-4.jpg"  width="200" height="220"/><div class="Layers"><img src="/static/index/images/bg_img.png" /></div></a></li>
     </ul>
    </div>
    <div class="middle">
     <!--广告-->
      <div class="hd">
         <a class="prev" href="javascript:void(0)">&gt;</a>
		<a class="next" href="javascript:void(0)">&lt;</a>
      </div>
      <div class="bd">
      <ul>
       <li><a href="#"><img src="/static/index/Products/AD-5.jpg" /></a></li>
        <li><a href="#"><img src="/static/index/Products/AD-6.jpg" /></a></li>
      </ul>
      </div>    
    </div>
    <script type="text/javascript">
		jQuery(".middle").slide({titCell:".hd ul",mainCell:".bd ul",autoPlay:true,autoPage:true,interTime:7000});
		</script>
     <div class="Left_side">
     <ul>
       <li><a href="#"><img src="/static/index/Products/X-AD-1.jpg"  width="200" height="220"/><div class="Layers"><img src="/static/index/images/bg_img.png"  width="220" height="220"/></div></a></li>
      <li><a href="#"><img src="/static/index/Products/X-AD-2.jpg"  width="200" height="220"/><div class="Layers"><img src="/static/index/images/bg_img.png"  width="220" height="220"/></div></a></li>
      <li><a href="#"><img src="/static/index/Products/X-AD-3.jpg" width="200" height="220"/><div class="Layers"><img src="/static/index/images/bg_img.png"  width="220" height="220"/></div></a></li>
      <li><a href="#"><img src="/static/index/Products/S-AD-4.jpg"  width="200" height="220"/><div class="Layers"><img src="/static/index/images/bg_img.png"  width="220" height="220"/></div></a></li>
     </ul>
    </div>
    <div class="advertising">
     <a href="#"><img src="/static/index/Products/S-AD-X-1.jpg"  width="219" height="150"/></a>
     <a href="#"><img src="/static/index/Products/S-AD-X-2.jpg" width="219" height="150"/></a>
     <a href="#" class="da_AD"><img src="/static/index/Products/AD-14.jpg" width="318" height="150"/></a>
     <a href="#"><img src="/static/index/Products/S-AD-X-3.jpg" width="219" height="150"/></a>
     <a href="#"><img src="/static/index/Products/X-AD-1.jpg" width="219" height="150"/></a>
    </div>
    <!--品牌-->
    <div class="Brand_Gallery">
     <a href="#"><img src="/static/index/Brand/p-1.jpg"  width="120" height="32"/></a>
     <a href="#"><img src="/static/index/Brand/p-4.jpg"  width="120" height="32"/></a>
     <a href="#"><img src="/static/index/Brand/p-6.jpg"  width="120" height="32"/></a>
     <a href="#"><img src="/static/index/Brand/p-11.jpg"  width="120" height="32"/></a>
     <a href="#"><img src="/static/index/Brand/p-14.jpg"  width="120" height="32"/></a>
     <a href="#"><img src="/static/index/Brand/p-17.jpg"  width="120" height="32"/></a>
     <a href="#"><img src="/static/index/Brand/p-19.jpg"  width="120" height="32"/></a>
     <a href="#"><img src="/static/index/Brand/p-13.jpg"  width="120" height="32"/></a>
    </div>
   </div>
  </div>
  <!--热销-->
<div id="showcase" class="advanced">
	<div id="guessyou" class="m"><div class="mt"><h2>猜你喜欢</h2><a href="javascript:;" class="extra">更多</a></div>
    <div class="mc"><div class="spacer"><i></i></div>
    <ul id="lists">        
    <li class="fore1">           
     <div class="p-img">
     <a data-clk="" href="" target="_blank"><img data-lazy-img="done" width="130" height="130" title="夏普（SHARP）LCD-50V3A 50英寸安卓智能液晶电视（黑色）" src="/static/index/Products/product_img.jpg" class=""></a>
     </div>                
     <div class="p-info">               
      <div class="p-name">
      <a data-clk="" href="" target="_blank" title="夏普（SHARP）LCD-50V3A 50英寸安卓智能液晶电视（黑色）">夏普（SHARP）LCD-50V3A 50英寸安卓智能液晶电视（黑色）</a></div>
      <div class="p-price" data-lazyload-fn="done"><span class="left"><i>¥</i>48.00</span><span class="Original_Price">45.9</span></div>            
      </div> 
      <div class="Detailed" style="display: none;">
	   <div class="content">
		  <p class="center"><a href="#" class="Buy_btn">立即购买</a></p>
		  </div>
	   </div>       
      </li>        
      <li class="fore2">           
       <div class="p-img"><a data-clk="" href="h" target="_blank">
       <img data-lazy-img="done" width="130" height="130" title="海信（Hisense）LED55EC520UA 55英寸 VIDAA3 14核 炫彩4K智能电视(黑色)" src="/static/index/Products/product_img1.jpg" class=""></a></div>              
         <div class="p-info">              
           <div class="p-name">
           <a data-clk="" href="" target="_blank" title="海信（Hisense）LED55EC520UA 55英寸 VIDAA3 14核 炫彩4K智能电视(黑色)">海信（Hisense）LED55EC520UA 55英寸 VIDAA3 14核 炫彩4K智能电视(黑色)</a></div>
           <div class="p-price"><span class="left"><i>¥</i>48.00</span><span class="Original_Price">45.9</span></div>            
       </div> 
        <div class="Detailed" style="display: none;">
	   <div class="content">
		  <p class="center"><a href="#" class="Buy_btn">立即购买</a></p>
		  </div>
	   </div>       
        </li>        
        <li class="fore3">            
        <div class="p-img">
        <a data-clk="" href="" target="_blank">
        <img data-lazy-img="done" width="130" height="130" title="联想 扬天W4090V 台式税控专用电脑（G3260双核 4G1T DVD WIN7) 标配主机(无显示器)" src="/static/index/Products/product_img2.jpg" class=""></a></div>             
        <div class="p-info">               
         <div class="p-name">
         <a href="" target="_blank" title="联想 扬天W4090V 台式税控专用电脑（G3260双核 4G1T DVD WIN7) 标配主机(无显示器)">联想 扬天W4090V 台式税控专用电脑（G3260双核 4G1T DVD WIN7) 标配主机(无显示器)</a></div>
           <div class="p-price"><span class="left"><i>¥</i>48.00</span><span class="Original_Price">45.9</span></div>       
             </div> 
              <div class="Detailed">
	   <div class="content">
		  <p class="center"><a href="#" class="Buy_btn">立即购买</a></p>
		  </div>
	   </div>     
           </li>        
           <li class="fore4">         
            <div class="p-img">
             <a href="" target="_blank">
             <img data-lazy-img="done" width="130" height="130" title="联想（Lenovo） 扬天R4905d 台式电脑 （G1820 4G 500G） 商用电脑 20英寸普通LED屏" src="/static/index/Products/product_img3.jpg" class=""></a></div>
             <div class="p-info">             
              <div class="p-name">
              <a href="" target="_blank" title="联想（Lenovo） 扬天R4905d 台式电脑 （G1820 4G 500G） 商用电脑 20英寸普通LED屏">联想（Lenovo） 扬天R4905d 台式电脑 （G1820 4G 500G） 商用电脑 20英寸普通LED屏</a></div>
                 <div class="p-price"><span class="left"><i>¥</i>48.00</span><span class="Original_Price">45.9</span></div>          
          </div>  
           <div class="Detailed">
	   <div class="content">
		  <p class="center"><a href="#" class="Buy_btn">立即购买</a></p>
		  </div>
	   </div>    
           </li>       
            <li class="fore5">       
            <div class="p-img">
            <a data-clk="" href="" target="_blank"><img data-lazy-img="done" width="130" height="130" title="金正（NINTAUS）韩式 电火锅 多用锅 家用 5L" src="/static/index/Products/product_img4.jpg" class=""></a></div>
                 <div class="p-info">                
                  <div class="p-name">
                  <a href="" target="_blank" title="金正（NINTAUS）韩式 电火锅 多用锅 家用 5L">金正（NINTAUS）韩式 电火锅 多用锅 家用 5L</a>
                  </div>
                  <div class="p-price"><span class="left"><i>¥</i>48.00</span><span class="Original_Price">45.9</span></div>          
          </div>   
           <div class="Detailed">
	   <div class="content">
		  <p class="center"><a href="#" class="Buy_btn">立即购买</a></p>
		  </div>
	   </div>  
           </li>       
         <li class="fore6">           
          <div class="p-img">
          <a data-clk="" href="" target="_blank">
          <img data-lazy-img="done" width="130" height="130" title="洗颜专科 柔澈泡沫 洁面乳 120g（资生堂授权）" src="/static/index/Products/product_img5.jpg" class=""></a>  
          </div>          
         <div class="p-info">                
        <div class="p-name">
        <a data-clk="" href="#" target="_blank" title="洗颜专科 柔澈泡沫 洁面乳 120g（资生堂授权）">洗颜专科 柔澈泡沫 洁面乳 120g（资生堂授权）</a></div>
        <div class="p-price"><span class="left"><i>¥</i>48.00</span><span class="Original_Price">45.9</span></div>     
         </div>
          <div class="Detailed">
	   <div class="content">
		  <p class="center"><a href="#" class="Buy_btn">立即购买</a></p>
		  </div>
	   </div>        
        </li>
       </ul>
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
