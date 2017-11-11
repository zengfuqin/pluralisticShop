<?php
namespace app\admin\controller;
use think\Controller;
class Category extends controller
{
    public function index()
    {
    	$parentId=input('get.parent_id',0,'intval');
    	//获取一级栏目
    	$categorys=model("Category")->getFirstCategorys($parentId);
    	$status=1;
    	$this->assign('status',$status);
        	return $this->fetch('category-list',['categorys'=>$categorys]);
    }
    public function catadd()
    {
    	$res=model("Category")->allCategory();
       $categorys=getTree($res);
       return $this->fetch('category-add',['categorys'=>$categorys]);
    }
//添加栏目
   public function save($categorytitle,$categoryurl,$categorycolumn)
    {
    	$data=['categorytitle'=>$categorytitle,'categoryurl'=>$categoryurl,'parent_id'=>$categorycolumn];
    	$validate=validate('Category');
    	if (!$validate->scene('add')->check($data)) {
    		$this->error($validate->getError());
    	}
    	$res=model("Category")->add($data);
    	if ($res) {
    		$this->success("新增成功");
    	}else{
    		$this->error('新增失败');
    	}
    }

    public function edit()
    {
      $id=input("get.id");
      if (intval($id)<1) {
        $this->error("参数不合法！");
      }
      $category=model("Category")->get($id);
      $res=model("Category")->allCategory();
       $categorys=getTree($res);
      return $this->fetch('category-edit',['categorys'=>$categorys,'category'=>$category]);
    }
//编辑跟新栏目
    public function upSave($categorytitle,$categoryurl,$categorycolumn,$id)
    {
      $data=['categorytitle'=>$categorytitle,'categoryurl'=>$categoryurl,'parent_id'=>$categorycolumn];
      $validate=validate('Category');
      if (!$validate->scene('add')->check($data)) {
        $this->error($validate->getError());
      }
     $res= model("Category")->where('id',$id)->update($data);
     if ($res) {
        $this->success("更新成功");
      }else{
        $this->error('更新失败');
      }
    }
    //排序
    public function listorder($id,$listorder)
    {
    	$res=model('Category')->save(['listorder'=>$listorder],['id'=>$id]);
    	if ($res) {
    		$this->result($_SERVER['HTTP_REFERER'],1,'SUCCESS');
    	}else{
    		$this->result($_SERVER['HTTP_REFERER'],0,'ERROR');
    	}
    }

    //状态
    public function status(){
     $data=input('get.');
     // var_dump($data);exit;
      $validate=validate('Category');
      if (!$validate->scene('status')->check($data)) {
        $this->error($validate->getError());
      }

      $res=model('Category')->save(['status'=>$data['status']],['id'=>$data['id']]);
      if ($res) {
        $this->success('状态更新成功！');
      }else{
        $this->error('状态更新失败！');
      }
  }


}
