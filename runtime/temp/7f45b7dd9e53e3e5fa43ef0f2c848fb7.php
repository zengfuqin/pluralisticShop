<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:83:"/var/www/html/pluralisticShop/public/../application/index/view/comment/comment.html";i:1508654827;s:81:"/var/www/html/pluralisticShop/public/../application/index/view/public/header.html";i:1508470000;s:78:"/var/www/html/pluralisticShop/public/../application/index/view/public/nav.html";i:1508466331;s:81:"/var/www/html/pluralisticShop/public/../application/index/view/public/footer.html";i:1508310080;s:80:"/var/www/html/pluralisticShop/public/../application/index/view/public/right.html";i:1508308453;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/static/index/css/common.css" rel="stylesheet" tyle="text/css" />
<link href="/static/index/css/style.css" rel="stylesheet" type="text/css" />
<link href="/static/index/fonts/iconfont.css" rel="stylesheet" type="text/css" />
<link href="/static/index/css/component.css" rel="stylesheet">
<link href="/static/index/css/comment.css" rel="stylesheet">
<script src="/static/index/js/jquery.min.1.8.2.js" type="text/javascript"></script>
<script src="/static/index/js/jqzoom.js" type="text/javascript"></script>
<script src="/static/index/js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
<script src="/static/index/js/common_js.js" type="text/javascript"></script>
<script src="/static/index/js/footer.js" type="text/javascript"></script>
<script src="/static/index/js/jquery.jumpto.js" type="text/javascript"></script>
<script type="text/javascript"> 
window.onload = function (){
	var oStar = document.getElementById("star");
	var aLi = oStar.getElementsByTagName("li");
	var oUl = oStar.getElementsByTagName("ul")[0];
	var oSpan = oStar.getElementsByTagName("span")[1];
	var oP = oStar.getElementsByTagName("p")[0];
	var i = iScore = iStar = 0;
	var aMsg = [
				"很不满意|差得太离谱，与卖家描述的严重不符，非常不满",
				"不满意|部分有破损，与卖家描述的不符，不满意",
				"一般|质量一般，没有卖家描述的那么好",
				"满意|质量不错，与卖家描述的基本一致，还是挺满意的",
				"非常满意|质量非常好，与卖家描述的完全一致，非常满意"
				]
	for (i = 1; i <= aLi.length; i++){
		aLi[i - 1].index = i;
		//鼠标移过显示分数
		aLi[i - 1].onmouseover = function (){
			fnPoint(this.index);
			//浮动层显示
			oP.style.display = "block";
			//计算浮动层位置
			oP.style.left = oUl.offsetLeft + this.index * this.offsetWidth - 104 + "px";
			//匹配浮动层文字内容
			oP.innerHTML = "<em><b>" + this.index + "</b> 分 " + aMsg[this.index - 1].match(/(.+)\|/)[1] + "</em>" + aMsg[this.index - 1].match(/\|(.+)/)[1]
		};
		//鼠标离开后恢复上次评分
		aLi[i - 1].onmouseout = function (){
			fnPoint();
			//关闭浮动层
			oP.style.display = "none"
		};
		//点击后进行评分处理
		aLi[i - 1].onclick = function (){
			iStar = this.index;
			oP.style.display = "none";
			oSpan.innerHTML = "<strong>" + (this.index) + " 分</strong> (" + aMsg[this.index - 1].match(/\|(.+)/)[1] + ")"
		}
	}
	//评分处理
	function fnPoint(iArg){
		//分数赋值
		iScore = iArg || iStar;
		for (i = 0; i < aLi.length; i++) aLi[i].className = i < iScore ? "on" : "";	
	}
};
</script>
<title>产品名称详细页</title>
</head>

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
<!--产品详细页-->
<div class="clearfix  Inside_pages" style="border:1px solid green">
 <!--位置-->
 <div id="goodsInfo">
 <div class="Location_link">
  <em></em><a href="#">进口食品、进口牛</a>  &lt;   <a href="#">进口饼干/糕点</a>   &lt;   <a href="#">产品名称</a>
 </div>
 <!--产品详细介绍-->
 <div class="Details_style clearfix" style="border:1px solid yellow">
  <div class="mod_picfold clearfix">
    <div class="clearfix" id="detail_main_img">
	 <div class="layout_wrap preview">
     <div id="vertical" class="bigImg">
		<img src="/static/index/mid/01.jpg" width="" height="" alt="" id="midimg" />
		<div style="display:none;" id="winSelector"></div>
	</div>
     <div class="smallImg">
		<div class="scrollbutton smallImgUp disabled">&lt;</div>
		<div id="imageMenu">
			<ul>
				<li><img src="/static/index/small/01.jpg" width="68" height="68" alt="洋妞"/></li>
				<li><img src="/static/index/small/02.jpg" width="68" height="68" alt="洋妞"/></li>
				<li><img src="/static/index/small/03.jpg" width="68" height="68" alt="洋妞"/></li>
				<li><img src="/static/index/small/04.jpg" width="68" height="68" alt="洋妞"/></li>
				<li><img src="/static/index/small/05.jpg" width="68" height="68" alt="洋妞"/></li>
				<li><img src="/static/index/small/06.jpg" width="68" height="68" alt="洋妞"/></li>
                <li><img src="/static/index/small/07.jpg" width="68" height="68" alt="洋妞"/></li>
			</ul>
		</div>
		<div class="scrollbutton smallImgDown">&gt;</div>
	</div><!--smallImg end-->	
	<div id="bigView" style="display:none;"><div><img width="800" height="800" alt="" src="" /></div></div>
	 </div>
	</div>
		 <div class="Sharing">
	 <div class="bdsharebuttonbox bdshare-button-style0-16" data-bd-bind="1441079683326"><a href="#" class="bds_more" data-cmd="more">分享到：</a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
<script>
window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{"bdSize":16},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
</script>
  <!--收藏-->
	  
	 </div>
   </div> 
   <!--信息样式-->
    <div class="textInfo">
    <form action="javascript:addToCart(97)" name="ECS_FORMBUY" id="ECS_FORMBUY">
	  <div class="title"><h1>Mixx 炼乳奶酪饼干 600g 马来西亚进口</h1><p>进口饼干糕点 西式糕点 休闲轻松</p></div>
	  <div class="mod_detailInfo_priceSales">
		  <div class="margins">
		 	 <div class="Price clearfix"><label>价格</label><span>¥10.90</span></div>
		  	<div class="Activity clearfix"><label>配送</label><span>快递：0.00</span></div>
	       		 <div class="p_Size clearfix"><label>评价</label><span>fksjd</span></div>
		  </div>
	 </div>
	 <div class="buyinfo" id="detail_buyinfo" style="background:  #fdfbfa;color:#8d7664;">
	 	<dt style="white-space:pre;font-size:18px;"> 类型:dsfjhjksdfhljk</dt>
	 	<dd style="padding-left:40px;padding-top:20px;color:#666;">现在查看的是 您所购买商品的信息</dd>
	 	<dd style="padding-left:40px;padding-top:20px;color:#666;">于2017年7月16日下单购买了此商品</dd>
	 </div>
	</form>
  </div>
  </div>
  <!-- 评论 -->
 <div id="commentBox">
 	<div id="commentNeiBox">
 		<div id="numBox">
 			<div id="num">累计评价 <span>99215</span></div>
 		</div>
 		<div id="xingPing">
 			<div id="star" >
			<span>          您的评论很重要</span>
			<ul>
				<li><a href="javascript:;">1</a></li>
				<li><a href="javascript:;">2</a></li>
				<li><a href="javascript:;">3</a></li>
				<li><a href="javascript:;">4</a></li>
				<li><a href="javascript:;">5</a></li>
			</ul>
			<span></span>
			<p></p>
			</div><!--star end-->
 		</div>
 		<div class="comTextBox">
 			<div class="text">其他买家，需要你的建议哦！</div>
 			<div class="shiyong">使用感受:</div>
 			<textarea class="neiRong" maxlength="200" minlength="" placeholder="字数限定在200之间"></textarea>
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
