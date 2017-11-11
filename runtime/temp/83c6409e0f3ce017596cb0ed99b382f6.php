<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:81:"/var/www/html/pluralisticShop/public/../application/index/view/orders/orders.html";i:1510218922;s:81:"/var/www/html/pluralisticShop/public/../application/index/view/public/header.html";i:1508755522;s:78:"/var/www/html/pluralisticShop/public/../application/index/view/public/nav.html";i:1508834615;s:81:"/var/www/html/pluralisticShop/public/../application/index/view/public/footer.html";i:1508310080;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/static/index/css/style.css" rel="stylesheet" type="text/css" />
<link href="/static/index/css/common.css" rel="stylesheet" tyle="text/css" />
<link href="/static/index/css/Orders.css" rel="stylesheet" type="text/css" />
<script src="/static/index/js/jquery.min.1.8.2.js" type="text/javascript"></script>
<script src="/static/index/js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
<script src="/static/index/js/jquery.reveal.js" type="text/javascript"></script>
<script src="/static/index/js/jquery.sumoselect.min.js" type="text/javascript"></script>
<script src="/static/index/js/common_js.js" type="text/javascript"></script>
<script src="/static/index/js/footer.js" type="text/javascript"></script>
<script src="/static/index/js/jquery.jumpto.js" type="text/javascript"></script>
<title>确认订单界面</title>
</head>
 <script type="text/javascript">
        $(document).ready(function () {
            window.asd = $('.SlectBox').SumoSelect({ csvDispCount: 3 });
            window.test = $('.testsel').SumoSelect({okCancelInMulti:true });
        });
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
<div id="Orders" class="Inside_pages  clearfix">
<div class="Process"></div>
  <div class="Orders_style clearfix">
     <div class="address clearfix">
       <div class="title">收货人信息</div>
          <div class="adderss_list clearfix">
            <div class="title_name">选择收货地址 <a href="">+添加地址</a></div>
            <div class="list" id="select">
        <?php if(is_array($useraddress) || $useraddress instanceof \think\Collection || $useraddress instanceof \think\Paginator): $i = 0; $__LIST__ = $useraddress;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['choice_first']==0): ?>
            <ul class="confirm active">
                <div class="default">默认地址</div>
              <?php else: ?>
              <ul class="">
              <?php endif; ?>
                <div class="adderss_operating">
                    <div class="Operate"><a href="#" class="delete_btn"></a> <a href="#" class="modify_btn"></a></div>
                </div>
                <div class="user_address">
                  <input type="hidden" name="address" value="<?php echo $vo['id']; ?>" class="address"/>
                  <li><?php echo $vo['name']; ?></li>
                  <li><?php echo $vo['address']; ?></li>
                  <li class="Postcode"><?php echo $vo['postal_code']; ?></li>      
                  <li><?php echo $vo['phone']; ?></li>
                </div>
            </ul>
        <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
           </div>
     </div>       
     	<form class="form" method="post">  
		<fieldset> 
     <!--快递选择-->
     <div class="express_delivery">
       <div class="title_name">选择快递方式</div>
    
        <ul class="dowebok">
	    <li><input type="radio" name="radio" data-labelauty="圆通快递">
                <div class="description">
                       <em class="arrow"></em>
                       <p>到付价格=现付价格*1.25 ，不足1元按1元收取，到付最低15元起。此价格供参考，详情请咨询圆通当地营业网点</p>
                       <p>资费：15元</p>
                       <p class="Note">满68元包邮</p>
                       <p><a href="#">点击查看是否在配送范围内</a></p>
                </div>
           </li>
	    <li><input type="radio" name="radio" data-labelauty="中通快递">
                 <div class="description">
                     <em class="arrow"></em>
                     <p>到付价格=现付价格*1.25 ，不足1元按1元收取，到付最低15元起。此价格供参考，详情请咨询圆通当地营业网点</p>
                     <p>资费：15元</p>
                     <p class="Note">满68元包邮</p>
                  </div>
        </li>
	    <li><input type="radio" name="radio" data-labelauty="申通快递">
               <div class="description">
                   <em class="arrow"></em>
                   <p>到付价格=现付价格*1.25 ，不足1元按1元收取，到付最低15元起。此价格供参考，详情请咨询圆通当地营业网点</p>
                   <p>资费：15元</p>
                   <p class="Note">满68元包邮</p>
                </div>
        </li>
	    <li><input type="radio" name="radio" data-labelauty="邮政EMS">
         <div class="description">
           <em class="arrow"></em>
           <p>到付价格=现付价格*1.25 ，不足1元按1元收取，到付最低15元起。此价格供参考，详情请咨询圆通当地营业网点</p>
           <p>资费：15元</p>
           <p class="Note">满68元包邮</p>
          </div>
        </li>
        <li><input type="radio" name="radio" data-labelauty="城际快递">
         <div class="description">
           <em class="arrow"></em>
           <p>到付价格=现付价格*1.25 ，不足1元按1元收取，到付最低15元起。此价格供参考，详情请咨询圆通当地营业网点</p>
           <p>资费：同城包邮</p>
   
          </div>
        </li>
        <li><input type="radio" name="radio" data-labelauty="韵达快递">
         <div class="description">
           <em class="arrow"></em>
           <p>到付价格=现付价格*1.25 ，不足1元按1元收取，到付最低15元起。此价格供参考，详情请咨询圆通当地营业网点</p>
           <p>资费：15元</p>
           <p class="Note">满68元包邮</p>
          </div>
        </li>
	    <li><input type="radio" name="radio" data-labelauty="国通快递">
         <div class="description">
           <em class="arrow"></em>
           <p>到付价格=现付价格*1.25 ，不足1元按1元收取，到付最低15元起。此价格供参考，详情请咨询圆通当地营业网点</p>
           <p>资费：15元</p>
           <p class="Note">满68元包邮</p>
          </div>
        </li>
	    <li><input type="radio" name="radio" data-labelauty="顺丰快递">
         <div class="description">
           <em class="arrow"></em>
           <p>到付价格=现付价格*1.25 ，不足1元按1元收取，到付最低15元起。此价格供参考，详情请咨询圆通当地营业网点</p>
           <p>资费：15元</p>
           <p class="Note">满88元包邮</p>
          </div>
        </li>
	    <li><input type="radio" name="radio" data-labelauty="邮政小包">
         <div class="description">
           <em class="arrow"></em>
           <p>到付价格=现付价格*1.25 ，不足1元按1元收取，到付最低15元起。此价格供参考，详情请咨询圆通当地营业网点</p>
           <p>资费：15元</p>
           <p class="Note">满68元包邮</p>
          </div>
        </li>
        <li><input type="radio" name="radio" data-labelauty="天天快递">
         <div class="description">
           <em class="arrow"></em>
           <p>到付价格=现付价格*1.25 ，不足1元按1元收取，到付最低15元起。此价格供参考，详情请咨询圆通当地营业网点</p>
           <p>资费：15元</p>
           <p class="Note">满68元包邮</p>
          </div>
        </li>
        </ul>       
      
     </div>
    
     <!--付款方式-->
     <div class="payment">
      <div class="title_name">支付方式</div>
       <ul>
        <li><input type="radio" name="radio1" data-labelauty="余额支付"></li>
        <li><input type="radio" name="radio1" data-labelauty="支付宝"></li>
        <li><input type="radio" name="radio1" data-labelauty="微信支付"></li>
        <li><input type="radio" name="radio1" data-labelauty="银联支付"></li>
         <li><input type="radio" name="radio1" data-labelauty="货到付款"></li>
       </ul>
     </div>
      <!--发票样式-->
    <!--  <div class="invoice_style">
       <ul>
         <li class="invoice_left"><input name="" type="checkbox" value="" data-labelauty="是否开发票"/> </li>
         <li class="invoice_left"><select name="somename" class="SlectBox" onclick="console.log($(this).val())" onchange="console.log('change is firing')">
              <option disabled="disabled" selected="selected">发票类型</option>
              <option value="办公用品">办公用品</option>
              <option value="食品">食品</option>
              <option value="20元红包">20元红包</option>
              <option value="50元红包">50元红包</option>
              <option value="100元红包">100元红包</option>
              <option value="200元红包">200元红包</option>
            </select>
         </li>
         <li class="invoice_left">发票抬头
         <input name="" type="text" class="text_info" /></li>
         <li class="invoice_left">
         <select name="somename" class="SlectBox" onclick="console.log($(this).val())" onchange="console.log('change is firing')">
              <option disabled="disabled" selected="selected">发票内容</option>
              <option value="办公用品">办公用品</option>
              <option value="食品">食品</option>
              <option value="数码配件">数码配件</option>
              <option value="电脑">电脑</option>
              <option value="手机">手机</option>
              <option value="200元红包">200元红包</option>
            </select>
         
         </li>
        </ul>
     </div> -->
     <!--产品列表-->
     <div class="Product_List">
     <div class="envelopes">
     选择已有红包<select name="somename" class="SlectBox" onclick="console.log($(this).val())" onchange="console.log('change is firing')">
			        <option disabled="disabled" selected="selected">选择红包金额</option>
			        <!--placeholder-->
			        <option value="5元红包">5元红包</option>
			        <option value="10元红包">10元红包</option>
			        <option value="20元红包">20元红包</option>
			        <option value="50元红包">50元红包</option>
                    <option value="100元红包">100元红包</option>
                    <option value="200元红包">200元红包</option>
			    </select>
                或者输入红包序列号<input name="" type="text" class="text_number" /><input type="submit"  class="verification_btn" value="验证序列号"/>
     </div>
      <table>
       <thead><tr class="title"><td class="name">商品名称</td><td class="price">商品价格</td><td class="Preferential">优惠价</td><td class="Quantity">购买数量</td><td class="Money">金额</td></tr></thead>
       <tbody>
       <?php if(is_array($res) || $res instanceof \think\Collection || $res instanceof \think\Paginator): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if(is_array($vo) || $vo instanceof \think\Collection || $vo instanceof \think\Paginator): $i = 0; $__LIST__ = $vo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$wo): $mod = ($i % 2 );++$i;?>
       <tr>
        <td class="Product_info">
         <a href="#"><img src="<?php echo $wo['color']; ?>"  width="100px" height="100px"/></a>
         <a href="" class="product_name"><?php echo $wo['product_title']; ?></a>
         </td>
        <td><i>￥</i><span><?php echo $wo['price']; ?></span></td>
        <td><i>￥</i><span id="youhui_<?php echo $wo['id']; ?>" num=<?php echo $wo['id']; ?>><?php echo $wo['originalprice'] - $wo['price']; ?></span></td>
        <td><span><?php echo $wo['num']; ?></span></td>
        <td class="Moneys"><i>￥</i><span id="totalMoneys_<?php echo $wo['id']; ?>"><?php echo $wo['price'] * $wo['num']; ?></span></td>
       </tr>
       <?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
       </tbody>
      </table>
      <div class="Pay_info">
       <label>订单留言</label><input name="" type="text"  onkeyup="checkLength(this);" class="text_name " />  <span class="wordage">剩余字数：<span id="sy" style="color:Red;">50</span></span>  
      </div>
      <!--价格-->
      <div class="price_style">
      <div class="right_direction">
        <ul>
         <li><label>商品总价</label><i>￥</i><span id="total_price"></span></li>
         <li><label>优惠金额</label><i>￥</i><span id="you_hui"></span></li>
         <li><label>配&nbsp;&nbsp;送&nbsp;&nbsp;费</label><i>￥</i><span>0</span></li>
         <li class="shiji_price"><label>实&nbsp;&nbsp;付&nbsp;&nbsp;款</label><i>￥</i><span>425.00</span></li>    
        </ul>   
        <div class="btn"><input name="btn" type="button" onclick="btnOrder()"  value="提交订单" class="submit_btn"/> <input name="" type="button" value="返回购物车"  class="return_btn"/></div>
         <div class="integral right">待订单确认后，你将获得<span>345</span>积分</div>
      </div>
      </div>
     </div>  
     </fieldset>
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
  <script src="/static/index/js/orders.js" type="text/javascript"></script>
<script type="text/javascript">
// var scope={
//   'id':"",
// }
function checkLength(which) {
	var maxChars = 50; //
	if(which.value.length > maxChars){
		alert("您出入的字数超多限制!");
		// 超过限制的字数了就将 文本框中的内容按规定的字数 截取
		which.value = which.value.substring(0,maxChars);
		return false;
	}else{
		var curr = maxChars - which.value.length; //250 减去 当前输入的
		document.getElementById("sy").innerHTML = curr.toString();
		return true;
	}
}
</script>
<script>
$(document).ready(
  function(){
  var id=[];
  $("[id^=youhui_]").each(function(){
     id.push($(this).attr('num'));
    })
  id= id.join("-");
  var href="<?php echo url('Useraddress/useraddress',['id'=>'"+id+"']); ?>";
  var title_name=$(".title_name a").attr('href',href);
 
  }
  )

$(function(){
	$(':input').labelauty();
});

//商品总价
$(function(){
  //总价
  var totalMoneys=[];
  $("[id^=totalMoneys_]").each(function(){
    totalMoneys.push(Number($(this).text()).toFixed(2));
  })
  var price=0;
 for (var i = 0; i < totalMoneys.length; i++) {
   price+=Number(totalMoneys[i]);
 }
  $("#total_price").text(price);
  //优惠价
  var youhuiMoneys=[];
  $("[id^=youhui_]").each(function(){
   youhuiMoneys.push(Number($(this).text()).toFixed(2));
  })
  var youhuiprice=0;
 for (var i = 0; i < youhuiMoneys.length; i++) {
   youhuiprice+=Number(youhuiMoneys[i]);
 }
  $("#you_hui").text(youhuiprice);
})


</script>
</body>
</html>
