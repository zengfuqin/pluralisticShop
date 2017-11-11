<?php
namespace app\api\controller;
use think\Controller;
use think\Request;
use think\File;
use think\Config;
class Image extends Controller
{
	public function upload()
	{
		$file=Request::instance()->file('file');
		// //给定一个目录
		$info=$file->move('upload');
		if ($info&&$info->getPathname()) {
              	return show(1,'success','/'.$info->getPathname());
              }
              	return show(1,'error');
		}
		// $url = $info->getPathname();

		// //查询出商品
		// $id = ;
		
		// $old_url = $goods['img_src'];
		// $new_url = $old_url."####".$url;

		//保存到对应商品

		// print_r($info->getPathname());

	}
}