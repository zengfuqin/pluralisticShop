<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:87:"/var/www/html/pluralisticShop/public/../application/admin/view/picture/picture-add.html";i:1509275059;}*/ ?>
<!DOCTYPE HTML>
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
<title>新增图片</title>
<link href="/static/admin/lib/webuploader/0.1.5/webuploader.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="page-container">
<?php switch($id): case "": ?>
    <form class="form form-horizontal" id="form-article-add" enctype="multipart/form-data" method="post" action="__URL__/insert">
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>图片标题：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="" placeholder="" id="picture_title" name="picture_title">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>图片链接地址：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="" placeholder="" id="picture_url" name="picture_url">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>图片类型：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <span class="select-box">
                <select name="picture_type" class="select">
                <?php if(is_array($picture_type) || $picture_type instanceof \think\Collection || $picture_type instanceof \think\Paginator): $i = 0; $__LIST__ = $picture_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <option value="<?php echo $key; ?>"><?php echo $vo; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
                </span>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">排序值：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="0" placeholder="" id="" name="listorder">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">封面图：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="file"  name="img_src" value=" " placeholder="请选择文件 ">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">多图上传：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="file"  name="img_srcn[]" value=" " multiple="multiple" placeholder="请选择文件 ">
            </div>
        </div>
        <div class="row cl">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                <button  class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存</button>
                
                <button onClick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
            </div>
        </div>
    </form>
    <?php break; default: ?>
    <form class="form form-horizontal" id="form-article-add" enctype="multipart/form-data" method="post" action="__URL__/updata?id=<?php echo $getInfoByIds['id']; ?>">
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>图片标题：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo $getInfoByIds['picture_title']; ?>" placeholder="" id="picture_title" name="picture_title">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>图片链接地址：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo $getInfoByIds['picture_url']; ?>" placeholder="" id="picture_url" name="picture_url">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>图片类型：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <span class="select-box">
                <select name="picture_type" class="select">
                <?php if(is_array($picture_type) || $picture_type instanceof \think\Collection || $picture_type instanceof \think\Paginator): $i = 0; $__LIST__ = $picture_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <option value="<?php echo $key; ?>"><?php echo $vo; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
                </span>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">排序值：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo $getInfoByIds['listorder']; ?>" placeholder="" id="" name="listorder">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">封面图：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="file"  name="img_src" value=" " placeholder="请选择文件 ">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">封面图：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="hidden" value="<?php echo $getInfoByIds['img_src']; ?>" name="img">
                <img src="<?php echo $getInfoByIds['img_src']; ?>" alt="" width="200px" height="200px" style="border:1px solid #EFEEF0;">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">多图上传：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="file"  name="img_srcn[]" value=" " multiple="multiple" placeholder="请选择文件 ">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">多图上传：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="hidden" value="<?php echo $getInfoByIds['img_srcn']; ?>" name="imgs">
                <?php if(is_array($img_srcn) || $img_srcn instanceof \think\Collection || $img_srcn instanceof \think\Paginator): $i = 0; $__LIST__ = $img_srcn;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                 <img src="<?php echo $vo; ?>" alt="" width="200px" height="200px" style="border:1px solid #EFEEF0;margin-bottom:5px;">
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
        <div class="row cl">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                <button  class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 更新</button>
                
                <button onClick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
            </div>
        </div>
    </form>
    <?php endswitch; ?>
</div>


<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/static/admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/static/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/static/admin/static/h-ui/js/H-ui.min.js"></script> 
<script type="text/javascript" src="/static/admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/static/admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="/static/admin/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="/static/admin/lib/jquery.validation/1.14.0/messages_zh.js"></script> 
<script type="text/javascript" src="/static/admin/lib/webuploader/0.1.5/webuploader.min.js"></script>
<!-- <script type="text/javascript" src="/static/admin/js/webuploader.js"></script>  -->
<script type="text/javascript">
function article_save(){
    alert("刷新父级的时候会自动关闭弹层。")
    window.parent.location.reload();
}


</script>
</body>
</html>