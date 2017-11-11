<?php
namespace app\admin\validate;
use think\Validate;
class Picture extends Validate
{
	protected $rule=[
		['picture_title','require','图片标题！'],
		['picture_url','require','图片链接地址！'],
		['picture_type','number'],
		['id','number'],
		['status','number|in:-1,0,1','状态必须是数字|状态范围不合法'],
		['listorder','number'],
	];
	//场景设置
	protected $scene=[
		'add'=>['picture_title','picture_url','picture_type'],
		'listorder'=>['listorder','id'],//排序
		'status'=>['id','status'],
	];
}