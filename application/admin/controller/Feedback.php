<?php
namespace app\admin\controller;
use think\Controller;
class Feedback extends controller
{
    public function index()
    {
        return $this->fetch("feedback-list");
    }
    public function membershow(){
    	return $this->fetch('member-show');
    }
}
