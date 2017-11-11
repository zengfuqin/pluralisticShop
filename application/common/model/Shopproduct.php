<?php
namespace app\common\model;
use think\Model;
class Shopproduct extends Model
{
	//查询某个字段是否存在
	public function checkZiduan($account,$ziduan){
		$account=[$ziduan=>$account];
		return $this->where($account)->find();
	}
}