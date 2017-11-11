<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:88:"/var/www/html/pluralisticShop/public/../application/admin/view/picture/picture-show.html";i:1509278063;}*/ ?>
﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/static/admin/lib/html5shiv.js"></script>
<script type="text/javascript" src="/static/admin/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="/static/admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->

<title>图片展示</title>
<link href="/static/admin/lib/lightbox2/2.8.1/css/lightbox.css" rel="stylesheet" type="text/css" >
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 图片管理 <span class="c-gray en">&gt;</span> 图片展示 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l">
		<a href="<?php echo url('Picture/edit'); ?>"  class="btn btn-primary radius"><i class="Hui-iconfont">&#xe6df;</i> 编辑</a>
		<a href="javascript:;" onclick="del()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a>
		</span> <span class="r">共有数据：<strong>54</strong> 条</span> </div>
	<div class="portfolio-content">
		<ul class="cl portfolio-area">
			<?php if(is_array($img_srcn) || $img_srcn instanceof \think\Collection || $img_srcn instanceof \think\Paginator): $i = 0; $__LIST__ = $img_srcn;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			<li class="item" id="item_<?php echo $key; ?>">
				<div class="portfoliobox" >
					<input class="checkbox" id="checkbox_<?php echo $key; ?>" name="checkbox[]" type="checkbox" value="<?php echo $key; ?>">
					<div class="picbox">
						<a href="<?php echo $vo; ?>" data-lightbox="gallery" data-title="<?php echo $getInfoByIds['picture_title']; ?>">
							<img src="<?php echo $vo; ?>" id="img_<?php echo $key; ?>">
						</a>
					</div>
					<div class="textbox" data-num="<?php echo $getInfoByIds['id']; ?>"><?php echo $getInfoByIds['picture_title']; ?></div>
				</div>
			</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
</div>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/static/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/static/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/static/admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/static/admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/static/admin/lib/lightbox2/2.8.1/js/lightbox.min.js"></script> 
<script type="text/javascript">
$(function(){
	$(".portfolio-area li").Huihover();
});

//删除图片
function del(){
	obj=$(".checkbox");
	check_src=[];
	key=[];
	for(k in obj){
		if(obj[k].checked){
			var src=$("#img_"+k).attr("src");
			key.push(k);
			check_src.push(src);

		}
	}
	if (check_src=='') {alert("请选择要删除的图片！");return;};
	var id=$(".textbox").attr("data-num");
	var url="<?php echo url('Picture/del'); ?>";
	var k=$("#")
	var postData={'check_src':check_src,'id':id};
	$.post(url,postData,function(res){
		if (res.code==1) {
			for (var i = 0; i < key.length; i++) {
				$('#item_'+key[i]).remove();
			}
			alert("删除成功！");
		}else{
			alert("删除失败！");
		}
	},'json');
}


</script>
</body>
</html>