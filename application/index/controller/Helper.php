<?php
namespace app\index\controller;
use think\Controller;
class Helper extends Common
{
    public function helper()
    {
    	$this->nav();
        return $this->fetch();
    }
}
