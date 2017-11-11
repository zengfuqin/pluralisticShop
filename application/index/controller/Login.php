<?php
namespace app\index\controller;
use think\Controller;
use \think\Session;
use think\Config;
header("content-type:text/html;charset=utf-8");
class Login extends Common
{
    public function index()
    {
        $key=Config::get('weibo.key');
        $secret=Config::get('weibo.secret');
        $redirect_uri=Config::get('weibo.redirect_uri');
        $redirect_uri=urldecode($redirect_uri);
        $url="https://api.weibo.com/oauth2/authorize?client_id={$key}&response_type=code&redirect_uri={$redirect_uri}";
        $this->assign('url',$url);
       return $this->fetch('login');
    }
    //普通登入
    public function ptLogin($account,$password)
    {
    	$password=md5($password);
    	$res=model("Registered")->checkLogin($account,$password);
    	if ($res) {
    		session("account", $account, "think");
    		$this->result($_SERVER['HTTP_REFERER'],1,'success');
    	}else{
    		$this->result($_SERVER['HTTP_REFERER'],0,'error');
    	}
    }
    //微薄登入
    public function weiboLogin()
    {
        $code=input('get.code');
        $key= Config::get('weibo.key');
        $secret= Config::get('weibo.secret');
        $redirect_uri=Config::get('weibo.redirect_uri');
        $redirect_uri=urldecode($redirect_uri);
        //获取access_token
         $url="https://api.weibo.com/oauth2/access_token?client_id={$key}&client_secret={$secret}&grant_type=authorization_code&redirect_uri={$redirect_uri}&code={$code}";
        $token = post($url,"");
        $token=json_decode($token,true);
       $ziduan='weibo_uid';
       $res=model('Registered')->checkZiduan($token['uid'],$ziduan);
       if ($res) {
               echo "<script>alert('已经有微博账号了！');window.location.href='http://www.pluralisticshop.com/index/login/';</script>";
               $this->ptLogin($account,$password);
              return ;
       }else{
              $url ="https://api.weibo.com/2/users/show.json?access_token={$token['access_token']}&uid={$token['uid']}";
              $userinfo=get($url);
              $userinfo=json_decode($userinfo,true);
              $data=array(
                'weibo_uid'=>$token['uid'],
                'weibo_name'=>$userinfo['name'],
                'weibo_profile_image_url'=>$userinfo['profile_image_url']
                );
              session("weibo_data", $data, "think");
            echo "<script>alert('请绑定手机号码！');window.location.href='http://www.pluralisticshop.com/index/registered/'</script>";
       }
    }
//安全退出
	public function out(){
	          setcookie(session_name(),'',time()-1,'/');
	           $_SESSION=array();
	           session_destroy();
	          $this->redirect("login/index");
	}



}
