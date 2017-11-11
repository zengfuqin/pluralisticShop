<?php
namespace app\index\controller;
use think\Controller;
class Product extends Common
{
//列表页
    public function productList()
    {
        $res=model("Product")->getAllInfo();
        $productList=json_decode(json_encode($res),true);
        $this->assign("productList",$productList);
        $this->nav();
        return $this->fetch("product_list");
    }
//详情页
    public function productDetailed()
    {
      $id=input("get.id");
      $res=model("Product")->getInfoById($id);
      $product=json_decode(json_encode($res),true);
      
      $product_id=$product['product_id'];
      $product_spec=db('product_spec')->where('product_id',$product_id)->find();
 
      //细节图
      $img_srcn=$product_spec['img_srcn'];
      $img_srcn=explode('@', $img_srcn);
      $len=count($img_srcn)-1;
      unset($img_srcn[$len]);
      //颜色
      $color=$product_spec['color'];
      $color=explode('@', $color);
      $len=count($color)-1;
      unset($color[$len]);
      //尺码
      $size=$product_spec['size'];
      $size=explode('@', $size);

      $this->assign("product",$product);
      $this->nav();
    	return $this->fetch("Product_Detailed",['img_srcn'=>$img_srcn,'size'=>$size,'color'=>$color]);	
    }

    //添加购物车信息
    public function addShopCar()
    {

    }
}
