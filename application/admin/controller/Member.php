<?php
namespace app\admin\controller;
use think\Controller;
class Member extends controller
{
    public function index()
    {
        return $this->fetch('member-add');
    }
    public function membershow(){
        return $this->fetch('member-show');
    }
    public function memberlist()
    {
        return $this->fetch('member-list');
    }
    public function memberdel()
    {
        return $this->fetch('member-del');
    }
     public function memberlevel()
    {
        return $this->fetch('member-level');//none
    }
     public function memberscoreoperation()
    {
        return $this->fetch('member-scoreoperation');//none
    }
     public function memberrecordbrowse()
    {
        return $this->fetch('member-record-browse');
    }
     public function memberrecorddownload()
    {
        return $this->fetch('member-record-download');
    }
     public function memberrecordshare()
    {
        return $this->fetch('member-record-share');
    }
   
}