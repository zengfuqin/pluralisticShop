<?php
namespace app\index\controller;
use think\Controller;
use  think\Session;
use think\Request;
header("content-type:text/html;charset=utf-8");
class Registered extends Controller
{
    public $saveCode;
   
     public function index()
    {
        return $this->fetch('registered');
    }
    //ajax校验用户名信息
    public function confirmationAccount($account)
    {
            $ziduan='account';
    	$accounts=model('Registered')->checkZiduan($account,$ziduan);
    	if ($accounts) {
    		$this->result($_SERVER['HTTP_REFERER'],1,'success');
    	}else{
    		$this->result($_SERVER['HTTP_REFERER'],0,'error');
    	}
    }

    //ajax校验手机号码
    public function confirmationPhone($phone)
    {
            $ziduan='phone';
    	$phones=model('Registered')->checkZiduan($phone,$ziduan);
    	if ($phones) {
    		$this->result($_SERVER['HTTP_REFERER'],1,'success');
    	}else{
    		$this->result($_SERVER['HTTP_REFERER'],0,'error');
    	}
    }

    //发送验证码
    public function confirmationVerify($phone){
    	$code=rand(100000,999999);
	Session::set('code',$code);
	$ret=sendSMS( $phone, $code);
	$ret=json_decode($ret,true);
	// echo $code;
    }

    //注册提交
    public function registered(Request $request)
    {
    	$account=input('post.account');
    	$password=md5(input('post.password'));
    	$phone=input('post.phone');
             $data=array(
                'account'=>$account,
                'password'=>$password,
                'phone'=>$phone,
                );
    	$verify=input("post.verify");
    	$saveCode=$request->session('code'); 
    	$validate=validate('Registered');
                
    	if (!$validate->scene('add')->check($data)) {
    		$this->error($validate->getError());
    	}
    	if ($verify!=$saveCode) {
    		$this->error("验证码错误！");
    		return ;
    	}else{
                           if (session("?weibo_data") && session('weibo_data')['weibo_uid']!= "" ) {//是否存在微博信息
                                   $weibo_data=session('weibo_data', '', 'think');
                                         $datas=array_merge($data,$weibo_data);
                                         $res=model('Registered')->add($datas);
                                         echo "<script>alert('微博绑定手机号码成功！')</script>";
                                        return $this->success("微博绑定手机号码成功！","login/index");
                                 
                            }else{
                                $res=model('Registered')->add($data);
                                if ($res) {
                                    echo "<script>alert('注册成功！')</script>";
                                    // $this->redirect('Login/index',Null,3,'注册成功！');
                                    $this->success("注册成功！","Login/index");
                                }else{
                                    echo "注册失败";return;
                                }
                                
                            }   
                          
    	}
    	
    }
}

