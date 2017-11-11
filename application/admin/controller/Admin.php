<?php
namespace app\admin\controller;
use think\Controller;
class Admin extends controller
{
    public function index()
    {
        return $this->fetch('admin-role');
    }
    public function adminpermission(){
        return $this->fetch('admin-permission');
    }
    public function adminlist()
    {
        return $this->fetch('admin-list');
    }
    public function adminroleadd()
    {
        return $this->fetch('admin-role-add');
    }
     public function adminadd()
    {
        return $this->fetch('admin-add');
    }
    
   
}