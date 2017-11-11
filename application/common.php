<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
function status($status){
	if ($status==1) {
		$str="<span class='label label-success radius'>正常</span>";
	}elseif($status==0){
		$str="<span class='label label-danger radius'>待审</span>";
	}else{
		$str="<span class='label label-danger radius'>删除</span>";
	}
	return $str;
}
/*
作用：生成分类树
$array：数组
$pid：父id
$level：等级
$html：填充字符
返回：数组
*/
 function getTree($array,$parent_id=0,$level=0,$html='------'){//
	$tree=array();
	foreach ($array as $row) {
		if ($row['parent_id']==$parent_id) {
			$row['level']=$level+1;
			$row['html']=str_repeat($html, $level);
			$tree[]=$row;
			$tree=array_merge($tree,getTree($array,$row['id'],$level+1,$html));
		}
	}
	return $tree;
}
function curlPost($url,$postFields){
	$postFields = json_encode($postFields);
	$ch = curl_init ();
	curl_setopt( $ch, CURLOPT_URL, $url ); 
	curl_setopt( $ch, CURLOPT_HTTPHEADER, array(
		'Content-Type: application/json; charset=utf-8'
		)
	);
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
	curl_setopt( $ch, CURLOPT_POST, 1 );
	curl_setopt( $ch, CURLOPT_POSTFIELDS, $postFields);
	curl_setopt( $ch, CURLOPT_TIMEOUT,1); 
	curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 0);
	$ret = curl_exec ( $ch );
	if (false == $ret) {
		$result = curl_error(  $ch);
	} else {
		$rsp = curl_getinfo( $ch, CURLINFO_HTTP_CODE);
		if (200 != $rsp) {
			$result = "请求状态 ". $rsp . " " . curl_error($ch);
		} else {
			$result = $ret;
		}
	}
	curl_close ( $ch );
	return $result;
}

function sendSMS( $mobile, $msg, $needstatus = 'true') {
	$chuanglan_config = array(
		'api_account' => 'N1701723',
		'api_password' => 'IlFVim0cs73a69',
		'api_send_url' => 'http://smssh1.253.com/msg/send/json'
	);
	$msg = "【253云通讯】您好，您的验证码是{$msg}";
	
	//创蓝接口参数
	$postArr = array (
		'account'  =>  $chuanglan_config['api_account'],
		'password' => $chuanglan_config['api_password'],
		'msg' => urlencode($msg),
		'phone' => $mobile,
		'report' => $needstatus
	);

	$result = curlPost( $chuanglan_config['api_send_url'] , $postArr);
	return $result;
}

// $ret = sendSMS('17620516272', '123456');

// var_dump($ret);




//weibo
function get( $url, $_header = NULL )
{
	$curl = curl_init();
	curl_setopt ( $curl, CURLOPT_SAFE_UPLOAD, false); 
	if( stripos($url, 'https://') !==FALSE )
	{
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
	}

	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_HEADER, 0);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	if ( $_header != NULL )
	{
		curl_setopt($ch, CURLOPT_HTTPHEADER, $_header);
	}
	$ret	= curl_exec($curl);
	$info	= curl_getinfo($curl);
	curl_close($curl);

	if( intval( $info["http_code"] ) == 200 )
	{
		return $ret;
	}

	return false;
}
/*
 * post method
 */
function post( $url, $param )
{
 	$oCurl = curl_init ();
    curl_setopt ( $oCurl, CURLOPT_SAFE_UPLOAD, false);
    if (stripos ( $url, "https://" ) !== FALSE) {
        curl_setopt ( $oCurl, CURLOPT_SSL_VERIFYPEER, FALSE );
        curl_setopt ( $oCurl, CURLOPT_SSL_VERIFYHOST, false );
    }
    
    curl_setopt ( $oCurl, CURLOPT_URL, $url );
    curl_setopt ( $oCurl, CURLOPT_RETURNTRANSFER, 1 );
    curl_setopt ( $oCurl, CURLOPT_POST, true );
    curl_setopt ( $oCurl, CURLOPT_POSTFIELDS, $param );
    $sContent = curl_exec ( $oCurl );
    $aStatus = curl_getinfo ( $oCurl );
    curl_close ( $oCurl );
    if (intval ( $aStatus ["http_code"] ) == 200) {
        return $sContent;
    } else {
        return false;
    }
}
