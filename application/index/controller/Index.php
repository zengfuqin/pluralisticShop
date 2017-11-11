<?php
namespace app\index\controller;
use think\Controller;
class Index extends Common
{
    public function index()
    {
	$picture=model("Picture")->getAll();
	$picture=json_decode(json_encode($picture),true);
	$valueArr=[];
	foreach ($picture as $value) {
		$valueArr[]=$value['img_srcn'];
	}
	//大轮播
	$dalunbo_img_srcn=explode("@", $valueArr[0]);
    	$len=count($dalunbo_img_srcn)-1;
    	unset($dalunbo_img_srcn[$len]);
    	$this->assign("dalunbo_img_srcn",$dalunbo_img_srcn);
    	//小轮播
    	$xiaolunbo_img_srcn=explode("@", $valueArr[1]);
    	$len=count($xiaolunbo_img_srcn)-1;
    	unset($xiaolunbo_img_srcn[$len]);
    	$this->assign("xiaolunbo_img_srcn",$xiaolunbo_img_srcn);
    	// 女装logo
    	$nvzhuangpinp_img_srcn=explode("@", $valueArr[2]);
    	$len=count($nvzhuangpinp_img_srcn)-1;
    	unset($nvzhuangpinp_img_srcn[$len]);
    	$this->assign("nvzhuangpinp_img_srcn",$nvzhuangpinp_img_srcn);
    	// 男装logo
    	$nanzhuangpinp_img_srcn=explode("@", $valueArr[3]);
    	$len=count($nanzhuangpinp_img_srcn)-1;
    	unset($nanzhuangpinp_img_srcn[$len]);
    	$this->assign("nanzhuangpinp_img_srcn",$nanzhuangpinp_img_srcn);
    	// 外国logo
    	$waizhuangpinp_img_srcn=explode("@", $valueArr[4]);
    	$len=count($waizhuangpinp_img_srcn)-1;
    	unset($waizhuangpinp_img_srcn[$len]);
    	$this->assign("waizhuangpinp_img_srcn",$waizhuangpinp_img_srcn);
	//国内品牌
	$guozhuangpinp_img_srcn=explode("@", $valueArr[5]);
    	$len=count($guozhuangpinp_img_srcn)-1;
    	unset($guozhuangpinp_img_srcn[$len]);
    	$this->assign("guozhuangpinp_img_srcn",$guozhuangpinp_img_srcn);
    	$this->nav();
       return $this->fetch();	
    }

    public function dalunbo()
    {
    	    	$dalunbo=model("Picture")->getAllInfo(0);
    	$dalunbo=json_decode(json_encode($dalunbo),true);
    	foreach ($dalunbo as $value) {
    		$dalunbo_img_srcn= $value['img_srcn'];
    	}
    	$dalunbo_img_srcn=explode("@", $dalunbo_img_srcn);
    	$len=count($dalunbo_img_srcn)-1;
    	unset($dalunbo_img_srcn[$len]);
    	$this->assign("dalunbo_img_srcn",$dalunbo_img_srcn);
    }
}
