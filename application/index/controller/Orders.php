<?php
namespace app\index\controller;
use think\Controller;
class Orders extends Common
{
    public function orders()
    {
      $idString=input("get.id");
      $idArr=explode('-', $idString);
      $res=[];
      foreach ($idArr as $key => $value) {
        $res[]=model("Shopcart")->queryByproductid($value);
      }
      $res=json_decode(json_encode($res),true);
      //地址信息
      $user_id=session("account");
      $Useraddress=model("Useraddress")->query($user_id);
      $Useraddress=json_decode(json_encode($Useraddress),true);
    
      $this->nav();
      return $this->fetch('orders',['res'=>$res,'useraddress'=>$Useraddress]);
    }
    
}
