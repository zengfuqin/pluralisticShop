<?php
namespace app\admin\controller;
use think\Controller;
use think\Config;
class Product extends controller
{
    public function index()
    {
        return $this->fetch('product-brand');
    }

    public function procategory()
    {
        return $this->fetch('product-category');
    }
    //产品管理页
    public function prolist()
    {
      $res=model("Product")->getAllInfo();
      $this->assign('res',$res);
        return $this->fetch('product-list');
    }
    //
    public function procatadd()
    {
        return $this->fetch('product-category-add');
    }
    //检查产品编码是否存在
    public function checkProductId($product_id)
    {
      $res=model("Product")->getInfoByProductid($product_id);
      if ($res) {
        $this->result($_SERVER['HTTP_REFERER'],1,'SUCCESS');
      }else{
        $this->result($_SERVER['HTTP_REFERER'],0,'ERROR');
      }
    }
    //添加产品页
    public function proadd()
    {
        $id=input('post.id');
        if ($id) {
        
         $res=model("Category")->getNormalFirstCategory($id);
          if (!$res) {
           return show(0,'error');
          }
          return show(1,'success',$res);
        }
       
        $categorytitleEr=[];
        $res=model("Category")->getNormalFirstCategory(0);
        $res=json_decode(json_encode($res),true);
        foreach ($res as $key => $value) {
          $id=$value['id'];
          $res=model("Category")->getNormalFirstCategory($id);
          $res=json_decode(json_encode($res),true);
          foreach ($res as $key => $value) {
            $categorytitleEr[]=$value;
          }
        }
        $this->assign('categorytitleEr',$categorytitleEr);
        return $this->fetch('product-add');
    }
    /*  
    *产品添加
    */
    public function save()
    {
      $data=input('post.');
       //封面图
      $file = request()->file('img_src');
      $img_src='';
      if($file){
            $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
            if($info){
                // 成功上传后 获取上传信息
                $img_src=$info->getSaveName();
                $img_src="/uploads/".$img_src;
             }else{
            // 上传失败获取错误信息
                echo $file->getError();
             }
      }
      $data['img_src']=$img_src;
       $validate=validate('Product');
            if (!$validate->scene('add')->check($data)) {
                  $this->error($validate->getError());
            }
            
            $res=model("Product")->add($data);
            if ($res) {
                  $this->success("新增成功");
            }else{
                  $this->error('新增失败');
            }
    }
/**
 * 添加规格
 * 
 */
  public function addSpec()
  {
    $product_id=input("get.product_id");
     $product_spec=db('product_spec')->where('product_id',$product_id)->find();

     //颜色
      $color=$product_spec['color'];
      $color=explode('@', $color);
      $len=count($color)-1;
      unset($color[$len]);

      $this->assign("color",$color);
      //细节图
      $img_srcn=$product_spec['img_srcn'];
      $img_srcn=explode('@', $img_srcn);
      $len=count($img_srcn)-1;
      unset($img_srcn[$len]);

      $this->assign("img_srcn",$img_srcn);
    return $this->fetch('product-addspec',['product_id'=>$product_id,'product_spec'=>$product_spec]);
  }
   
   public function savespec()
   {
       //颜色图片
      $color_img_src = "";
       $files = request()->file('color_img_src');
      foreach($files as $file){

            $info = $file->move(ROOT_PATH . 'public' . DS . 'coloruploads');
            if($info){

             $img_srcd=$info->getSaveName();
             $color_img_src .= "/coloruploads/".$img_srcd.'@';
            }else{

            echo $file->getError();
            }    
      }
      //多图上传
      $img_srcn = "";
       $files = request()->file('img_srcn');
      foreach($files as $file){

            $info = $file->move(ROOT_PATH . 'public' . DS . 'coloruploads');
            if($info){

             $img_srcd=$info->getSaveName();
             $img_srcn .= "/coloruploads/".$img_srcd.'@';
            }else{

            echo $file->getError();
            }    
      }
      if ($color_img_src=='') {
       return $this->error("颜色不能为空！");
      }
       if ($img_srcn=='') {
       return $this->error("细节图不能为空！");
      }
            $data=input("post.");
            $data['color']=$color_img_src;
            $data['img_srcn']=$img_srcn;
            $validate=validate('Product');
            if (!$validate->scene('save')->check($data)) {
                  $this->error($validate->getError());
            }

            $res=db('product_spec')->insert($data);

            if ($res) {
                  $this->success("新增成功");
            }else{
                  $this->error('新增失败');
            }
   }
//更新属性
public function updataspec()
{
  $product_id=input('post.product_id');
  $data=input('post.');
//颜色图片
      $color_img_src = "";
       $files = request()->file('color_img_src');
      foreach($files as $file){

            $info = $file->move(ROOT_PATH . 'public' . DS . 'coloruploads');
            if($info){

             $img_srcd=$info->getSaveName();
             $color_img_src .= "/coloruploads/".$img_srcd.'@';
            }else{

            echo $file->getError();
            }    
      }
      //多图上传
      $img_srcn = "";
       $files = request()->file('img_srcn');
      foreach($files as $file){

            $info = $file->move(ROOT_PATH . 'public' . DS . 'coloruploads');
            if($info){

             $img_srcd=$info->getSaveName();
             $img_srcn .= "/coloruploads/".$img_srcd.'@';
            }else{

            echo $file->getError();
            }    
      }
      if ($color_img_src!='') {
        $data['color']=$color_img_src;
      }
      if ($img_srcn!='') {
       $data['img_srcn']=$img_srcn;
      }
  $res=db('product_spec')->where('product_id',$product_id)->update($data);
  if ($res) {
    $this->success("更新成功！");
  }else{
    $this->error("更新失败！");
  }
}

public function edit()
{
        //下拉框
        $categorytitleEr=[];
        $res=model("Category")->getNormalFirstCategory(0);
        $res=json_decode(json_encode($res),true);
        foreach ($res as $key => $value) {
          $id=$value['id'];
          $res=model("Category")->getNormalFirstCategory($id);
          $res=json_decode(json_encode($res),true);
          foreach ($res as $key => $value) {
            $categorytitleEr[]=$value;
          }
        }
        $id=input('get.id');
        $info=model("product")->getInfoById($id);
       $info=json_decode(json_encode($info),true);
       $sele=model("Category")->where('id',$info['product_type'])->find();
       $sele=json_decode(json_encode($sele),true);
        $this->assign('categorytitleEr',$categorytitleEr);
        $this->assign('sele',$sele);
        return $this->fetch('product-edit',['info'=>$info]);
}

public function editsave()
{
      $data=input('post.');
       //封面图
      $file = request()->file('img_src');
      $img_src='';
      if($file){
            $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
            if($info){
                // 成功上传后 获取上传信息
                $img_src=$info->getSaveName();
                $img_src="/uploads/".$img_src;
             }else{
            // 上传失败获取错误信息
                echo $file->getError();
             }
      }
      if ($img_src!='') {
        $data['img_src']=$img_src;
      }
      
       $validate=validate('Product');
            if (!$validate->scene('add')->check($data)) {
                  $this->error($validate->getError());
            }
            $id=input("get.id");
            $res=model("Product")->where('id',$id)->update($data);
            if ($res) {
                  $this->success("更新成功","Product/prolist");
            }else{
                  $this->error('更新失败');
            }
}
 //状态
    public function status(){
     $data=input('get.');
     // var_dump($data);exit;
      $validate=validate('Product');
      if (!$validate->scene('status')->check($data)) {
        $this->error($validate->getError());
      }

      $res=model('Product')->save(['status'=>$data['status']],['id'=>$data['id']]);
      if ($res) {
        $this->success('状态更新成功！');
      }else{
        $this->error('状态更新失败！');
      }
  }

}
