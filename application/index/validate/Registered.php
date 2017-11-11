<?php
namespace app\index\validate;
use think\Validate;
class Registered extends Validate
{
	protected $rule=[
		['account','require|max:20','用户名不可缺少！|用户名长度不可大于20字符！'],
		['password','require','密码必须'],
		['phone','require|number','手机号码必须填写！|确认是否是手机号码！'],
		['yzm_code','require|number'],
		['status','number|in:-1,0,1','状态必须是数字|状态不合法'],
		['listorder','number'],
		['id','number']
	];
	//场景设置
	protected $scene=[
		'add'=>['account','password','phone'],//注册
		'listorder'=>['listorder','id'],//排序
	];
}