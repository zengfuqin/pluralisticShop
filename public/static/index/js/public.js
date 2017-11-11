//用户名
$("#account").blur(function(){
   var account=$(this).val();
    var div=$(this).parent().find('.message');
    var msg='';
    if (account=='') {
    	msg='用户名不能为空！';
    	div.html(msg);
    	return;
    }
    if (!/^[\u4e00-\u9fff\w]{5,16}$/g.test(account)) {
    	msg="必须是4到16位（字母，数字，下划线，减号）";
    	div.html(msg);
    	return;
    }
    var postData={'account':account};
    var url=scope.account_url;
    $.post(url,postData,function(result){
    	if (result.code==1) {
    		msg="用户名已存在，不可用！";
    		div.html(msg);
    		return;
    	}else{
    		msg="用户名可用！";
    		div.html(msg).css({"color":'green'});
    	}
    })
});

//密码
$("#password").change(function(){
	var password=$(this).val();
    	//弱：纯数字，纯字母，纯特殊字符
    	if (/^(?:\d+|[a-zA-Z]+|[!@#$%^&*]+){6,12}$/.test(password)) {
    		
    		$(this).parent().next('.Password_qd').find('ul .r').css({"background-color":"#ffcc00"});
    		//中：字母+数字，字母+特殊字符，数字+特殊字符
    		if(/^(?![a-zA-z]+$)(?!\d+$)(?![!@#$%^&*]+$)[a-zA-Z\d!@#$%^&*]+$/.test(password)) {
	    		
	    		$(this).parent().next('.Password_qd').find('ul .z').css({"background-color":"#ffa800"});
	    		//强：字母+数字+特殊字符
		    	if(/^(?![a-zA-z]+$)(?!\d+$)(?![!@#$%^&*]+$)(?![a-zA-z\d]+$)(?![a-zA-z!@#$%^&*]+$)(?![\d!@#$%^&*]+$)[a-zA-Z\d!@#$%^&*]+$/.test(password)){
		    		
		    		$(this).parent().next('.Password_qd').find('ul .q').css({"background-color":"#ff3c00"});
	    		}else{
	    			$(this).parent().next('.Password_qd').find('ul .q').css({"background-color":"#E0E0E0"});
	    		}
    		}else{
    			$(this).parent().next('.Password_qd').find('ul .z').css({"background-color":"#E0E0E0"});
    			$(this).parent().next('.Password_qd').find('ul .q').css({"background-color":"#E0E0E0"});
    		}
    	}else{
    		$(this).parent().next('.Password_qd').find('ul .r').css({"background-color":"#E0E0E0"});
    		$(this).parent().next('.Password_qd').find('ul .z').css({"background-color":"#E0E0E0"});
    		$(this).parent().next('.Password_qd').find('ul .q').css({"background-color":"#E0E0E0"});
    	}  
});
//密码一致
$("input[name='repassword']").change(function(){
	var repassword=$(this).val();
	var password=$(this).parent().prevAll().find("#password").val();
	if (repassword!=password) {
		var msg="密码不一致，请重新输入密码！";
		 div=$(this).parent().find('.message').html(msg).css({"color":"red"});
	}else{
		var msg="密码正确！";
		 div=$(this).parent().find('.message').html(msg).css({"color":"green"});
	}
})

//发送手机号码
$("input[name='phone']").change(function(){
	var phone=$(this).val();
	var div=$(this).parent().find('.message');
	var url=scope.phone_url;
	var postData={'phone':phone};
	$.post(url,postData,function(result){
		if (result.code==1) {
			var msg="手机号码以注册，不可用！";
			div.html(msg);
		}else{
			var msg="手机号码可用！";
			div.html(msg).css({"color":"green"});
		}
	})
})

// 验证码
$(".verifyMsg").click(function(){
	var phone=$(this).parent().prevAll().find("input[name='phone']").val();
	var url=scope.verify_url;
	var postData={'phone':phone};
	$.post(url,postData,function(result){

	})
})

//普通登入
$(".btn_login").click(function(){
    var account=$(this).parent().prev().find("#account").val();
    var password=$(this).parent().prev().find("#password").val();
    var url=scope.login_url;
    var postData={'account':account,'password':password};
    $.post(url,postData,function(result){
        if(result.code==1){
            window.location.href="http://www.pluralisticshop.com/index/";
        }else{
            alert("密码账号不一致！");
        }
    })
})

