<?php
namespace app\index\controller;
use think\Controller;
use \think\Session;
class Useraddress extends Common
{
    public function useraddress()
    {
    	$this->nav();
       return $this->fetch('UserAddress');
    }
    public function address()
    {
    	$data=input("post.");
    	$data['user_id']=session("account");
    	$data['create_time']=time();
    	$res=model("Useraddress")->add($data);
    	if ($res) {
    		$this->result($_SERVER['HTTP_REFERER'],1,'success');
    	}else{
    		$this->result($_SERVER['HTTP_REFERER'],0,'error');
    	}
    }
}