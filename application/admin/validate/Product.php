<?php
namespace app\admin\validate;
use think\Validate;
class Product extends Validate
{
	protected $rule=[
		['product_id','require','请输入产品编码！'],
		['pinpai','require','请输入品牌！'],
		['product_title','require','请输入产品名称！'],
		['product_type','require','请输入产品类型！'],
		['size','require','请输入尺码！'],
		['stock','require','请输入库存！'],
		['price','require','展示价格必须！'],
		['originalprice','require','市场价格必须！'],
		['product_type','number'],
		['id','number'],
		['status','number|in:-1,0,1','状态必须是数字|状态范围不合法'],
		['listorder','number'],
	];
	//场景设置
	protected $scene=[
		'add'=>['product_id','product_title','pinpai','stock','price','originalprice','product_type'],
		'save'=>['size','stock'],
		'listorder'=>['listorder','id'],//排序
		'status'=>['id','status'],
	];
}