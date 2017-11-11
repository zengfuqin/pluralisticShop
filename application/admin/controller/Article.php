<?php
namespace app\admin\controller;
use think\Controller;
class Article extends controller
{
    public function index()
    {
        return $this->fetch('article-list');
    }
    public function actadd()
    {
        return $this->fetch('article-add');
    }
   
}
