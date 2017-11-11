<?php
namespace app\index\controller;
use think\Controller;
class Comment extends Common
{
    public function comment()
    {
        return $this->fetch();
    }
}
