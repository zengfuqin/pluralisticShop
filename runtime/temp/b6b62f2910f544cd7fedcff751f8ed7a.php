<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:91:"/var/www/html/pluralisticShop/public/../application/admin/view/product/product-addspec.html";i:1509886798;}*/ ?>
<!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />
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
<!--/meta 作为公共模版分离出去-->

<link href="/static/admin/lib/webuploader/0.1.5/webuploader.css" rel="stylesheet" type="text/css" />
	
</head>
<body>
<div class="page-container">
	<form action="<?php echo !empty($product_spec)?'/admin/product/updataspec.html' : '/admin/product/savespec.html'; ?>" enctype="multipart/form-data" method="post" class="form form-horizontal" id="form-article-add">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>产品编码：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo $product_id; ?>" readonly id="product_id" name="product_id">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>尺码：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo !empty($product_spec)?$product_spec['size'] : ''; ?>" placeholder="格式是：S@M@L" id="size" name="size">
			</div>
		</div>
			
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>颜色：</label>
			<div class="formControls col-xs-8 col-sm-9">
			<?php echo !empty($color)?'<input type="file"  name="color_img_src[]" value=" " multiple="multiple"  placeholder="请选择文件 "><div class="color_img"></div>' : '<input type="file"  name="color_img_src[]" value=" " multiple="multiple"  placeholder="请选择文件 ">'; ?>
			</div>
		</div> 
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>库存：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" name="stock" id="" placeholder="格式是：100@20@45" value="<?php echo !empty($product_spec)?$product_spec['stock'] : ''; ?>" class="input-text">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">细节展示图：</label>
			<div class="formControls col-xs-8 col-sm-9">
			<?php echo !empty($img_srcn)?'<input type="file"  name="img_srcn[]" value=" " multiple="multiple" placeholder="请选择文件 "><div class="img_srcn_img"></div>' : '<input type="file"  name="img_srcn[]" value=" " multiple="multiple" placeholder="请选择文件 ">'; ?>
			
			</div>
		</div> 

		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">

				<button  class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> <?php echo !empty($product_spec)?'更新规格属性' : '保存规格属性'; ?></button>
				
				<button onClick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
			</div>
		</div>
	</form>
</div>

<!--_footer 作为公共模版分离出去-->

<script type="text/javascript" src="/static/admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/static/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/static/admin/static/h-ui/js/H-ui.min.js"></script> 
<script type="text/javascript" src="/static/admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/static/admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/static/admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="/static/admin/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="/static/admin/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript" src="/static/admin/lib/webuploader/0.1.5/webuploader.min.js"></script> 
<script type="text/javascript" src="/static/admin/lib/ueditor/1.4.3/ueditor.config.js"></script>
<script type="text/javascript" src="/static/admin/lib/ueditor/1.4.3/ueditor.all.min.js"> </script>
<script type="text/javascript" src="/static/admin/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript">

$(".categorytitleEr").change(function(){
	var parent_id=$(this).val();
	var postData={'id':parent_id};
	var url="<?php echo url('product/proadd'); ?>";
	$.post(url,postData,function(result){
		if (result.status==1) {
			//将信息填充到html中
			data=result.data;
			product_html="";
			$(data).each(function(i){
				product_html+="<option value='"+this.id+"'>"+this.categorytitle+"</option>";
			})
			$('.categorytitleSan').html(product_html);
		}else if(result.status==0){
			alert(result.message);
			return;
		}	
	},'json')
})
function selecttime(flag){
    if(flag==1){
        var endTime = $("#countTimeend").val();
        if(endTime != ""){
            WdatePicker({dateFmt:'yyyy-MM-dd HH:mm',maxDate:endTime})}else{
            WdatePicker({dateFmt:'yyyy-MM-dd HH:mm'})}
    }else{
        var startTime = $("#countTimestart").val();
        if(startTime != ""){
            WdatePicker({dateFmt:'yyyy-MM-dd HH:mm',minDate:startTime})}else{
            WdatePicker({dateFmt:'yyyy-MM-dd HH:mm'})}
    }
 }


$(function(){
	<?php if(is_array($color) || $color instanceof \think\Collection || $color instanceof \think\Paginator): $i = 0; $__LIST__ = $color;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
	$(".color_img").append('<img src="<?php echo $vo; ?>" alt="" width="50px" height="50px"> ').css("margin-top","5px");
	<?php endforeach; endif; else: echo "" ;endif; if(is_array($img_srcn) || $img_srcn instanceof \think\Collection || $img_srcn instanceof \think\Paginator): $i = 0; $__LIST__ = $img_srcn;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
	$(".img_srcn_img").append('<img src="<?php echo $vo; ?>" alt="" width="50px" height="50px"> ').css("margin-top","5px");
	<?php endforeach; endif; else: echo "" ;endif; ?>
});

</script>
</body>
</html>