<?php
namespace app\index\controller;
use think\Controller;
class Userorderslist extends Common
{
    public function userordersList()
    {
        return $this->fetch("userordersList");
    }
}