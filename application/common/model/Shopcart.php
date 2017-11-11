<?php
namespace app\common\model;
use think\Model;
class Shopcart extends Model
{
	//添加数据
	public function add($data){
		return $this->save($data);
	}
	public function checkZiduan($productid,$userid)
	{
		$condition=['productid'=>$productid,'userid'=>$userid];
		return $this->where($condition)->find();
	}
	// 更新数据
	public function updataDatas($productid,$userid,$num)
	{
		$condition=['productid'=>$productid,'userid'=>$userid];
		$data=['num'=>$num];
		return $this->where($condition)->setField($data);
	}
	// 关联查询数据
	public function query($userid)
	{
		$join = [
		    ['think_product w','a.productid=w.id'],
		];
		$condition=['userid'=>$userid];
		return $this->alias('a')->join($join)->where($condition)->select();
	}
	// 关联查询数据
	public function queryByproductid($productid)
	{
		$join = [
		    ['think_product w','a.productid=w.id'],
		];
		$condition=['productid'=>$productid];
		return $this->alias('a')->join($join)->where($condition)->select();
	}
}