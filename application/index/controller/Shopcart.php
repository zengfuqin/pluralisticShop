<?php
namespace app\index\controller;
use think\Controller;
use \think\Session;
class Shopcart extends Common
{
    public function shopcart()
    {
      if(session("?account")){
    	$userid=session("account");
    	$result=model('Shopcart')->query($userid);
    	$list=json_decode(json_encode($result),true);
      // var_dump($list);exit;
    	//购物车物品遍历
    	$this->assign('list',$list);
     }
      $this->nav();
      return $this->fetch('shop_cart');
    }
    //添加购物车
    public function addCart($productid,$num,$size,$color)
    {
    	$dataInfo=model('product')->checkZiduan($productid,'id');
    	$price=$dataInfo['price'];
    	//用户的id
    	$userid=session("account");
    	$createtime=time();
    	$data=array(
    		'productid'=>$productid,
    		'userid'=>$userid,
    		'num'=>$num,
    		'price'=>$price,
                            'size'=>$size,
                            'color'=>$color,
    		'createtime'=>$createtime
    		);

    	$result=model('Shopcart')->checkZiduan($productid,$userid);
    	if ($result) {
    		$res=model('Shopcart')->updataDatas($productid,$userid,$num);
    		$this->result($_SERVER['HTTP_REFERER'],1,'success');
    	}else{
    		$res=model('Shopcart')->add($data);
    	}
    	if ($res) {
    		$this->result($_SERVER['HTTP_REFERER'],1,'success');
    	}else{
    		$this->result($_SERVER['HTTP_REFERER'],0,'error');
    	}
    }
    
   
}