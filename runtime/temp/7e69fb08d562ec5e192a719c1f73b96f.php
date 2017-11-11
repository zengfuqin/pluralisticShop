<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:86:"/var/www/html/pluralisticShop/public/../application/index/view/shopcart/shop_cart.html";i:1510197165;s:81:"/var/www/html/pluralisticShop/public/../application/index/view/public/header.html";i:1508755522;s:78:"/var/www/html/pluralisticShop/public/../application/index/view/public/nav.html";i:1508834615;s:81:"/var/www/html/pluralisticShop/public/../application/index/view/public/footer.html";i:1508310080;}*/ ?>
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
<title>购物车</title>
</head>
<script type="text/javascript">
$(document).ready(function () {
   //全选
   $("#CheckedAll").click(function () {
	   if (this.checked) {                 //如果当前点击的多选框被选中
		   $('input[type=checkbox][name=checkitems]').attr("checked", true);
	   } else {
		   $('input[type=checkbox][name=checkitems]').attr("checked", false);
	   }
   });
   $('input[type=checkbox][name=checkitems]').click(function () {
	   var flag = true;
	   $('input[type=checkbox][name=checkitems]').each(function () {
		   if (!this.checked) {
			   flag = false;
		   }
	   });

	   if (flag) {
		   $('#CheckedAll').attr('checked', true);
	   } else {
		   $('#CheckedAll').attr('checked', false);
	   }
   });
   //输出值
   $("#send").click(function () {
	      if($("input[type='checkbox'][name='checkitems']:checked").attr("checked")){
	   var str = "你是否要删除选中的商品：\r\n";
	   $('input[type=checkbox][name=checkitems]:checked').each(function () {
		   str += $(this).val() + "\r\n";
	   })
	   alert(str);
		  }
		  else{
			   var str = "你未选中任何商品，请选择后在操作！"; 
			   alert(str);
       }
	   	    
   });
})

function test(obj){
	if ($(obj).is(':checked')) {
		$(obj).attr("checked",true);
	}else{
		$(obj).attr("checked",false);
	}
}

</script>
<body>
 <div id="header_top">
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
<!--购物车样式图层-->
<div class="Inside_pages">
 <div class="shop_carts">
   <div class="Process"></div>
 <div class="Shopping_list">
  <div class="title_name">
    <ul>
	<li class="checkbox"></li>
	<li class="name">商品名称</li>
	<li class="size" >尺码</li>
	<li class="scj">市场价</li>
	<li class="bdj">本店价</li>
	<li class="sl">购买数量</li>
	<li class="xj">小计</li>
	<LI class="cz">操作</LI>
  </ul> 
 </div>
  <div class="shopping">
  <form  method="post" action="">
 <table class="table_list">
 <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
   <tr class="tr">
   <td class="checkbox"><input name="checkitems" type="checkbox" id="<?php echo $vo['productid']; ?>" value="<?php echo $vo['product_title']; ?>" onclick="test(this)" /></td>
    <td class="name">
	  <div class="img"><img src="<?php echo $vo['color']; ?>" /></div>
	  <div class="p_name" style="width:220px;line-height:20px;padding-top:35px;word-break:break-all;"><a href="<?php echo url('product/productDetailed',['id'=>$vo['id']]); ?>" ><?php echo $vo['product_title']; ?></a></div>
	</td>
	<td style="margin-right:5px;"><?php echo $vo['size']; ?></td>
	<td class="scj sp">￥<span id="Original_Price_<?php echo $vo['id']; ?>"><?php echo $vo['originalprice']; ?></span></td>
	<td class="bgj sp" >￥<span id="price_item_<?php echo $vo['id']; ?>"><?php echo $vo['price']; ?></span></td>
	<td class="sl">
	    <div class="Numbers">
		  <a onClick="jian(<?php echo $vo['id']; ?>)" href="javascript:void(0)" class="jian">-</a>
          		<input type="text" name="qty_item_<?php echo $vo['id']; ?>" value="<?php echo $vo['num']; ?>" id="qty_item_<?php echo $vo['id']; ?>" onkeyup="setAmount.modify('#qty_item_<?php echo $vo['id']; ?>')" class="number_text">
		  <a onClick="jia(<?php echo $vo['id']; ?>)" href="javascript:void(0)" class="jia">+</a>
		 </div>
	</td>
	<td class="xj  xjPrice td_<?php echo $vo['id']; ?>" >
		<input type="hidden" value="<?php echo $vo['id']; ?>" id="tdnum" />
		<input type="hidden" id="xjPrice_<?php echo $vo['id']; ?>" name=""  value="<?php echo $vo['price'] * $vo['num']; ?>"/>
	</td>
	<td class="cz">
	 <p><a href="#">删除</a><P>
	 <p><a href="#">收藏该商品</a></p>
	 
	</td>
   </tr>
   <?php endforeach; endif; else: echo "" ;endif; ?>
     </table>
 <div class="sp_Operation clearfix">
  <div class="select-all">
  <div class="cart-checkbox"><input type="checkbox"  id="CheckedAll" name="toggle-checkboxes" class="jdcheckbox" clstag="clickcart">全选</div>
  <div class="operation"><a href="javascript:void(0);" id="send">删除选中的商品</a></div> 
    </div>    
	 <!--结算-->
	<div class="toolbar_right">
    <ul class="Price_Info">
    <li class="p_Total"><label class="text" id="priceTotal"  style="width:140px;color:red">商品总价:</label><span class="price sumPrice" id="Total_price"></span></li>
	<li class="Discount"><label class="text" id="jiesheng" style="width:140px;white-space:pre;color:red;"></label><span class="price" id="Preferential_price"></span></li>
    <li class="integral">本次购物可获得<b id="total_points"></b>积分</li>
    </ul>
	<div class="btn"><a class="cartsubmit" href=""></a><a class="continueFind" href="Orders.html"></a></div>
  </div>
  </div>
   </form>
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
<script src="/static/index/js/shop-car.js" type="text/javascript"></script>
<script>
$(".cartsubmit").click(function(){
	var id=[];
	$("input[name='checkitems']:checked").each(function(){
		id.push($(this).attr('id'));
	})
	id = id.join("-");
	if (id=='') {return alert("请选择要购买的商品！");}
	href="<?php echo url('orders/orders',['id'=>'"+id+"']); ?>";
	$(this).attr("href",href);
})

</script>
</body>
</html>
