<?php
namespace app\common\model;
use think\Model;
class Useraddress extends Model
{
	public function add($data)
	{
		$data['status']=1;
		$result=$this->save($data);
		return $result;
	}
	public function query($user_id)
	{
		$data=['user_id'=>$user_id];
		return $this->where($data)->select();
	}
}