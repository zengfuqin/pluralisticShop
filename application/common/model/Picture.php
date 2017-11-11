<?php
namespace app\common\model;

use think\Model;

class Picture extends Model
{
	protected $autoWriteTimestamp = true;
	public function add($data){
		$data['status']=1;
		return $this->save($data);
	}
	//图片类型
	public function getAllInfo($picture_type)
	{
		$data=['picture_type'=>$picture_type];
		return $this->where($data)->where('status','>=',0)
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
}