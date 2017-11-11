<?php
namespace app\admin\validate;
use think\Validate;
class Category extends Validate
{
	protected $rule=[
		['categorytitle','require|max:30','栏目名称不可缺少！|用户名长度不可大于30字符！'],
		['categoryurl','require','链接必须填写！'],
		['categorycolumn','number'],
		['id','number'],
		['status','number|in:-1,0,1','状态必须是数字|状态范围不合法'],
		['listorder','number'],
	];
	//场景设置
	protected $scene=[
		'add'=>['categorytitle','categoryurl','categorycolumn'],
		'listorder'=>['listorder','id'],//排序
		'status'=>['id','status'],
	];
}