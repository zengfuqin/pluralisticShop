<?php
namespace app\common\model;

use think\Model;

class Product extends Model
{
	
	public function add($data){
		$data['status']=1;
		$data['createTime']=time();
		return $this->save($data);
	}
	//所有的数据
	public function getAllInfo()
	{
		return $this->where('status','>=',0)
		->select();
	}
	//获取状态为正常的栏目信息
	public function getAllNorInfo($picture_type)
	{
		$data=['picture_type'=>$picture_type,'status'=>1];
		return $this->where($data)
		->select();
	}
	//根据id获取当前记录
	public function getInfoById($id)
	{
		$data=['id'=>$id];
		return $this->where($data)->find();
	}
	public function getAll()
	{
		return $this->select();
	}
	public function getInfoByProductid($product_id)
	{
		$data=['product_id'=>$product_id];
		return $this->where($data)->find();
	}
	//查询某个字段是否存在
	public function checkZiduan($account,$ziduan){
		$account=[$ziduan=>$account];
		return $this->where($account)->find();
	}
}