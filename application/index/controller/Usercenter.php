<?php
namespace app\index\controller;
use think\Controller;
use \think\Session;
class Usercenter extends Common
{
    public function usercenter()
    {
       return $this->fetch('userCenter');
    }
}