<?php
namespace app\common\model;
use think\Model;
class Category extends Model
{
	//增加autoWriteTimestamp方法动态设置时间字段写入
	protected $autoWriteTimestamp = true;
	public function add($data){
		$data['status']=1;
		$result=$this->save($data);
		// echo $this->getLastSql();//sql语句
		return $result;
	}
	//所有的类别名称
	public function allCategory(){
		$data=[
			'status'=>1,
		];
		return $this->where($data)->select();
	}
	//
	//获取所属父id的名称
	public function getNormalFirstCategory($parent_id=0){
		$data=[
			'status'=>1,
			'parent_id'=>$parent_id,
		];
		
		return $this->where($data)
		->select();
	}
	//获取一级栏目数据
	public function getFirstCategorys($parentId=0){
		$data=['parent_id'=>$parentId,'status'=>['neq',-1]];
		$order=['listorder'=>'desc','id'=>'desc'];
		$result=$this->where($data)->order($order)->paginate();
		// echo $this->getLastSql();//sql语句
		return $result;
	}
	public function getCategoryByParentId($parentId=0){//一级栏目
		$conditon=['status'=>1,'parent_id'=>$parentId];
		$order=['id'=>'desc'];
		return $this->where($conditon)->order($order)->select();
	}
	//查询某个字段是否存在
	public function checkZiduan($account,$ziduan){
		$account=[$ziduan=>$account];
		return $this->where($account)->find();
	}
}