<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:89:"/var/www/html/pluralisticShop/public/../application/index/view/usercenter/userCenter.html";i:1508303112;s:81:"/var/www/html/pluralisticShop/public/../application/index/view/public/header.html";i:1508307563;s:78:"/var/www/html/pluralisticShop/public/../application/index/view/public/nav.html";i:1508307630;s:80:"/var/www/html/pluralisticShop/public/../application/index/view/public/right.html";i:1508307173;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/static/index/css/common.css" rel="stylesheet" tyle="text/css" />
<link href="/static/index/css/style.css" rel="stylesheet" type="text/css" />
<link href="/static/index/fonts/iconfont.css" rel="stylesheet" type="text/css" />
<link href="/static/index/css/Orders.css" rel="stylesheet" type="text/css" />
<script src="/static/index/js/jquery.min.1.8.2.js" type="text/javascript"></script>
<script src="/static/index/js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
<script src="/static/index/js/common_js.js" type="text/javascript"></script>
<script src="/static/index/js/footer.js" type="text/javascript"></script>
<script src="/static/index/js/jquery.jumpto.js" type="text/javascript"></script>
<title>用户中心</title>
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
   <div class="s_cart"><em></em><a href="#">我的购物车</a> <i class="ci-right">&gt;</i><i class="ci-count" id="shopping-amount">0</i></div>
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

</script><div id="Menu" class="clearfix">
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
      <li><a href="#">美食</a></li>
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
       <li><a href="<?php echo url('index/userorderslist/userordersList'); ?>"><em></em><span>我的订单</span></a></li>
       <li><a href="#"><em></em><span>我的评论</span></a></li>
       <li><a href="#"><em></em><span>我的积分</span></a></li>
       <li><a href="#"><em></em><span>我的收藏</span></a></li>
       <li><a href=""><em></em><span>收货地址管理</span></a></li>
      </ul>
 </div>
 <!--右侧内容展示-->
  <div class="right_style r_user_style">
  <div class="Notice"><span>系统最新公告:</span>为了更好地服务于【每日鲜】的会员朋友及读者 发表意见。</div> 
   <!--用户基本信息-->
   <div class="clearfix">
    <div class="user_info clearfix">
	     <div class="user_name_info">
          <ul>
	       <li class="us_one">
	        <div class="name left">用户名:<b><?php echo $account; ?></b>,  欢迎你 <a href="#" class="link_user">[修改密码]</a>  </div>
	        <div class="right time"> <span>上次访问时间：2015-5-21 10:23</span></div>
	      </li>
	      <li class="us_two"> 
	      <dl><dt class="left">账户余额：</dt><dd>￥<b>0</b>元</dd></dl>
	   <dl><dt class="left">账户积分：</dt><dd><b>2355</b>分 &nbsp;<a href="#" class="link_user">[积分兑换]</a></dd></dl>
	   <dl><dt class="left">用户等级：</dt><dd><b>普通会员</b></dd></dl>
	  </li>
	  <li class="us_Order">
	   <dl><dt class="left">未完成订单：</dt><dd><a href="#">0</a></dd></dl>
	   <dl><dt class="left">完成订单：</dt><dd><a href="#">2</a></dd></dl>
	  </li>
	  <li class="us_four">
	  <div class="Address"><em></em><a href="<?php echo url('index/useraddress/useraddress'); ?>">地址管理&gt;</a></div>
	  </li>
	 </ul>
    </div>
   </div>  
  </div>
  <!--订单-->
   <div class="user_info_p_s clearfix">
    <div class="left_user_cont">
     <div class="us_Orders left clearfix">
  <div class="Orders_name">
   <div class="title_name">
   <div class="Records">购买记录</div>
   <div class="right select">
   只记录你最近30天的购买记录   </div>
   </div>   
  </div>
  <table>
  <thead>
  <tr>
   <th>产品名称</th>
   <th>数量</th>
   <th>状态</th>
   <th>操作</th>
   </tr>
  </thead>
  <tbody>
   <tr>
    <td class="img">
<a href="#"><span class="left"><img src="common//static/index/images/cp-2.jpg"></span>
	<span class="left">产品名称敬龙云</span></a>
	</td>
	<td>2</td>
	<td>完成</td>
	<td><a href="#">查看</a></td>
   </tr>
    <tr>
    <td class="img">
<a href="#"><span class="left"><img src="common//static/index/images/cp-2.jpg"></span>
	<span class="left">产品名称敬龙云</span></a>
	</td>
	<td>2</td>
	<td>完成</td>
	<td><a href="#">查看</a></td>
   </tr>
   </tbody>
  </table>
   <div class="us_jls">共2条记录</div>
  </div>
    </div> 
    <!--右侧记录样式-->
    <div class="right_user_recording">
    <div class="us_Record">
	  <div id="Record_p" class="Record_p">
	    <div class="title_name">
		<span class="name left">浏览历史</span>
		 <span class="pageState right"><span>1</span>/7</span>		</div>
	 
						<div class="hd">
							<a class="next">&lt;</a>
							<a class="prev">&gt;</a>						</div>
						<div class="bd">
							<ul >
                            <li class="clone">
									<div class="p_width">
								<div class="pic"><a href=""><img src="Products/P-1.jpg"></a></div>	
								<div class="title"><a href="#">金龙鱼 东北大米 蟹稻共生 盘锦大米5KG</a></div>
								<div class="Purchase_info"><span class="p_Price">￥32.50</span> <a href="#" class="Purchase">立即购买</a></div>
							</div>	
								</li>
							<li >
							<div class="p_width">
								<div class="pic"><a href=""><img src="Products/P-2.jpg"></a></div>	
								<div class="title"><a href="#">金龙鱼 东北大米 蟹稻共生 盘锦大米5KG</a></div>
								<div class="Purchase_info"><span class="p_Price">￥32.50</span> <a href="#" class="Purchase">立即购买</a></div>
							</div>		
							</li>
								<li >
									<div class="p_width">
								<div class="pic"><a href=""><img src="Products/P-3.jpg"></a></div>	
								<div class="title"><a href="#">金龙鱼 东北大米 蟹稻共生 盘锦大米5KG</a></div>
								<div class="Purchase_info"><span class="p_Price">￥32.50</span> <a href="#" class="Purchase">立即购买</a></div>
							</div>	
								</li>
								<li >
									<div class="p_width">
								<div class="pic"><a href=""><img src="Products/P-4.jpg"></a></div>	
								<div class="title"><a href="#">金龙鱼 东北大米 蟹稻共生 盘锦大米5KG</a></div>
								<div class="Purchase_info"><span class="p_Price">￥32.50</span> <a href="#" class="Purchase">立即购买</a></div>
							</div>							
								</li>
								<li>
									<div class="p_width">
								<div class="pic"><a href=""><img src="Products/P-5.jpg"></a></div>	
								<div class="title"><a href="#">金龙鱼 东北大米 蟹稻共生 盘锦大米5KG</a></div>
								<div class="Purchase_info"><span class="p_Price">￥32.50</span> <a href="#" class="Purchase">立即购买</a></div>
							</div>							
								</li>
                                	<li style="float: left; width: 180px;">
									<div class="p_width">
								<div class="pic"><a href=""><img src="Products/P-8.jpg"></a></div>	
								<div class="title"><a href="#">金龙鱼 东北大米 蟹稻共生 盘锦大米5KG</a></div>
								<div class="Purchase_info"><span class="p_Price">￥32.50</span> <a href="#" class="Purchase">立即购买</a></div>
							</div>				
								</li>
                                	<li >
									<div class="p_width">
								<div class="pic"><a href=""><img src="Products/P-1.jpg"></a></div>	
								<div class="title"><a href="#">金龙鱼 东北大米 蟹稻共生 盘锦大米5KG</a></div>
								<div class="Purchase_info"><span class="p_Price">￥32.50</span> <a href="#" class="Purchase">立即购买</a></div>
							</div>	
								</li>
                                	<li>
									<div class="p_width">
								<div class="pic"><a href=""><img src="Products/P-6.jpg"></a></div>	
								<div class="title"><a href="#">金龙鱼 东北大米 蟹稻共生 盘锦大米5KG</a></div>
								<div class="Purchase_info"><span class="p_Price">￥32.50</span> <a href="#" class="Purchase">立即购买</a></div>
							</div>	
								</li>
								<li class="clone" >
							<div class="p_width">
								<div class="pic"><a href=""><img src="Products/P-10.jpg"></a></div>	
								<div class="title"><a href="#">金龙鱼 东北大米 蟹稻共生 盘锦大米5KG</a></div>
								<div class="Purchase_info"><span class="p_Price">￥32.50</span> <a href="#" class="Purchase">立即购买</a></div>
							</div>		
							</li></ul></div>
						
					</div>
					<script type="text/javascript">jQuery("#Record_p").slide({ mainCell:".bd ul",effect:"leftLoop",vis:1,autoPlay:false });</script>
	    </div>
    </div>
   </div>
   <!--收藏商品-->
   <div class="Collections_p">
   <div class="title_name">收藏的商品</div>
    <div id="Collect_Products" class="Collect_Products">
						<div class="hd">
							<a class="next">&lt;</a>
							<a class="prev">&gt;</a>
						</div>
						<div class="bd">
							<ul >
                            <li>
										<div class="pic"><a href=""><img src="Products/P-10.jpg"></a></div>	
									<div class="title"><a href="#">金龙鱼 东北大米 蟹稻共生 盘锦大米5KG</a></div>
									<div class="p_Price">￥32.50</div>		
								</li>
								<li s>
									<div class="pic"><a href=""><img src="Products/P-9.jpg"></a></div>
									<div class="title"><a href="#">金龙鱼 东北大米 蟹稻共生 盘锦大米5KG</a></div>
									<div class="p_Price">￥32.50</div>
								</li>
								<li >
									<div class="pic"><a href=""><img src="Products/P-8.jpg"></a></div>	
									<div class="title"><a href="#">金龙鱼 东北大米 蟹稻共生 盘锦大米5KG</a></div>
									<div class="p_Price">￥32.50</div>							
								</li>
								<li>
										<div class="pic"><a href=""><img src="Products/P-4.jpg"></a></div>	
									<div class="title"><a href="#">金龙鱼 东北大米 蟹稻共生 盘锦大米5KG</a></div>
									<div class="p_Price">￥32.50</div>								
								</li>
                                	<li >
										<div class="pic"><a href=""><img src="Products/P-3.jpg"></a></div>	
									<div class="title"><a href="#">金龙鱼 东北大米 蟹稻共生 盘锦大米5KG</a></div>
									<div class="p_Price">￥32.50</div>					
								</li>
                                	<li >
										<div class="pic"><a href=""><img src="Products/P-8.jpg"></a></div>	
									<div class="title"><a href="#">金龙鱼 东北大米 蟹稻共生 盘锦大米5KG</a></div>
									<div class="p_Price">￥32.50</div>		
								</li>
                                	<li>
										<div class="pic"><a href=""><img src="Products/P-8.jpg"></a></div>	
									<div class="title"><a href="#">金龙鱼 东北大米 蟹稻共生 盘锦大米5KG</a></div>
									<div class="p_Price">￥32.50</div>		
								</li>
							    <li>
									<div class="pic"><a href=""><img src="Products/P-5.jpg"></a></div>
									<div class="title"><a href="#">金龙鱼 东北大米 蟹稻共生 盘锦大米5KG</a></div>
									<div class="p_Price">￥32.50</div>
								</li>
                                <li >
									<div class="pic"><a href=""><img src="Products/P-6.jpg"></a></div>	
									<div class="title"><a href="#">金龙鱼 东北大米 蟹稻共生 盘锦大米5KG</a></div>
									<div class="p_Price">￥32.50</div>							
								</li>
                                <li >
										<div class="pic"><a href=""><img src="Products/P-8.jpg"></a></div>	
									<div class="title"><a href="#">金龙鱼 东北大米 蟹稻共生 盘锦大米5KG</a></div>
									<div class="p_Price">￥32.50</div>								
								</li>
                                <li >
										<div class="pic"><a href=""><img src="Products/P-8.jpg"></a></div>	
									<div class="title"><a href="#">金龙鱼 东北大米 蟹稻共生 盘锦大米5KG</a></div>
									<div class="p_Price">￥32.50</div>					
								</li>
                                <li >
										<div class="pic"><a href=""><img src="Products/P-8.jpg"></a></div>	
									<div class="title"><a href="#">金龙鱼 东北大米 蟹稻共生 盘锦大米5KG</a></div>
									<div class="p_Price">￥32.50</div>		
								</li></ul>
                                </div>
						</div>
				
	<script type="text/javascript">jQuery("#Collect_Products").slide({ mainCell:".bd ul",effect:"leftLoop",vis:5,autoPlay:false });</script>
 </div>
   <!--结束-->
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
						<div class="pic"><a href="http://www.SuperSlide2.com" target="_blank"><img src="/static/index/images/pic1.jpg" /></a></div>
                          <!--<div class="title"><a href="http://www.SuperSlide2.com" target="_blank">效果图1</a></div>-->					
                    </li>
					<li>
						<div class="pic"><a href="http://www.SuperSlide2.com" target="_blank"><img src="/static/index/images/pic2.jpg" /></a></div>
						<!--<div class="title"><a href="http://www.SuperSlide2.com" target="_blank">效果图2</a></div>-->
					</li>
					<li>
						<div class="pic"><a href="http://www.SuperSlide2.com" target="_blank"><img src="/static/index/images/pic3.jpg" /></a></div>
						
					</li>
					<li>
						<div class="pic"><a href="http://www.SuperSlide2.com" target="_blank"><img src="/static/index/images/pic4.jpg" /></a></div>
						
					</li>
					<li>
						<div class="pic"><a href="http://www.SuperSlide2.com" target="_blank"><img src="/static/index/images/pic5.jpg" /></a></div>
						
					</li>
					<li>
						<div class="pic"><a href="http://www.SuperSlide2.com" target="_blank"><img src="/static/index/images/pic6.jpg" /></a></div>
						
					</li>
                    <li>
						<div class="pic"><a href="http://www.SuperSlide2.com" target="_blank"><img src="/static/index/images/pic6.jpg" /></a></div>
						
					</li>
                    <li>
						<div class="pic"><a href="http://www.SuperSlide2.com" target="_blank"><img src="/static/index/images/pic6.jpg" /></a></div>
						
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
