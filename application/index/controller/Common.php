<?php
namespace app\index\controller;
use think\Controller;
use \think\Session;
class Common extends Controller
{
    public function _initialize(){
    	if(session("?account")){
    		$this->assign('account',session("account"));
    		// echo 1;
    	}else{
    		$this->assign('account',"游客");
    	}
    	
    }
    public function nav(){
        //一级栏目名称
        $classAname=model('Category')->getNormalFirstCategory(0);
        //2.分别取二级栏目
        foreach ($classAname as $key1 => $value1) {
            $pid = $value1['id'];
            $temp = model('Category')->getNormalFirstCategory($pid);
            //3.分别取三级栏目
            foreach ($temp as $key2 => $value2) {
                $pid2 = $value2['id'];
                $temp2 = model('Category')->getNormalFirstCategory($pid2);
                $temp[$key2]["level3"] = $temp2;
            }
            $classAname[$key1]['level2'] = $temp;
        }
        $this->assign('classAname',$classAname);
    }
}
