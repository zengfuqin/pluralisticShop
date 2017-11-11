<?php
namespace app\common\model;
use think\Model;
class Registered extends Model
{
	protected $autoWriteTimestamp = true;
	public function add($data){
		$data['status']=1;
		return $this->save($data);
	}
	//查询某个字段是否存在
	public function checkZiduan($account,$ziduan){
		$account=[$ziduan=>$account];
		return $this->where($account)->find();
	}
	public function checkAllZiduan($account,$ziduan){
		$account=[$ziduan=>$account];
		return $this->where($account)->select();
	}
	/**
	 * 登入
	 */
	public function checkLogin($account,$password)
	{
		$coditions=[
		'account'=>$account,
		'password'=>$password,
		];
		return $this->where($coditions)->find();
	}
}