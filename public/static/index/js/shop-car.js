//数量的增加
function add(){
	var n=$("#buy-num").val();
	var num=parseInt(n)+1;
	if (num==0) {return;}
	$("#buy-num").val(num);
	// alert(num);
}
//数量的减少
function reduce(){
	var n=$("#buy-num").val();
	var num=parseInt(n)-1;
	if (num==0) {return;}
	$("#buy-num").val(num);
	// alert(num);
}
// 添加到购物车
function addCart(){
	var url=scope.addCart_url;
	var geturl = location.search; //获取url中"?"符后的字串
	var productid=geturl.substr(4,1);
	var size=$(".size").hasClass("selected");
	if (size) {
		size=$(".selected").find("a").text();
	}
	var color=$(".color").hasClass("selected");
	if (color) {
		color=$(".selected").find("img").attr('src');
	}
	var num=$("#buy-num").val();
	var postData={'productid':productid,'num':num,'size':size,'color':color};
	var callback=function(result){
		if(result.code==1){
			var msg="已成功添加到购物车！";
			$("#msg_alert").text(msg);
		}else{
			var msg="添加到购物车失败！";
			$("#msg_alert").text(msg);
		};
	};
	$.post(url,postData,callback,'json');
}
//我的订单的数量加减
function jia(id){

	var n=$("#qty_item_"+id).val();
	var num=parseInt(n)+1;

	var money=$("#price_item_"+id).text();
	money = money.replace('￥','');
	money = Number(money);
	var xj=money*num;
	xj=xj.toFixed(2);
	$(".td_"+id).html('￥'+xj);
	if (num==0) {return }
	$("#qty_item_"+id).val(num);
	var xjPrice=$(".xjPrice");
	var result=[];
	var sum=0;
	xjPrice.each(function(){
		 result.push($(this).text());
	});
	for (var i = 0; i < result.length; i++) {
		var prices=result[i];
		var priceTotal=prices.replace('￥','');
		priceTotal = Number(priceTotal);
		sum+=priceTotal;
	}
	$("#priceTotal").text('商品总价：'+sum);
	// 原价
	var originalPrice=[];
	var originalObj=$("[id^=Original_Price_]");

	originalObj.each(function(){
		originalPrice.push($(this).text());
	});
	var originalSum=0;
	var num=[];
	var numObj=$("[id^=qty_item_]");
	numObj.each(function(){
		num.push($(this).val());
	});
	for (var i = 0; i < originalPrice.length; i++) {
		var priceTotal=originalPrice[i]*num[i];
		priceTotal = Number(priceTotal);
		originalSum+=priceTotal;
	}
	var jiesheng=originalSum-sum;
	$("#jiesheng").text('以  节  省：'+jiesheng);
}

function jian(id){
	var n=$("#qty_item_"+id).val();
	var num=parseInt(n)-1;
	if (num<=0) {num=1};
	var money=$("#price_item_"+id).text();
	money = money.replace('￥','');
	money = Number(money);
	var xj=money*num;
	xj=xj.toFixed(2);
	$(".td_"+id).html('￥'+xj);
	$("#qty_item_"+id).val(num);
	var xjPrice=$(".xjPrice");
	var result=[];
	var sum=0;
	xjPrice.each(function(){
		 result.push($(this).text());
	});
	for (var i = 0; i < result.length; i++) {
		var prices=result[i];
		var priceTotal=prices.replace('￥','');
		priceTotal = Number(priceTotal);
		sum+=priceTotal;
	}
	$("#priceTotal").text('商品总价：'+sum);
	// 原价
	var originalPrice=[];
	var originalObj=$("[id^=Original_Price_]");

	originalObj.each(function(){
		originalPrice.push($(this).text());
	});
	var originalSum=0;
	var num=[];
	var numObj=$("[id^=qty_item_]");
	numObj.each(function(){
		num.push($(this).val());
	});
	for (var i = 0; i < originalPrice.length; i++) {
		var priceTotal=originalPrice[i]*num[i];
		priceTotal = Number(priceTotal);
		originalSum+=priceTotal;
	}
	var jiesheng=originalSum-sum;
	$("#jiesheng").text('以  节  省：'+jiesheng);
}

$(function(){ 

	var price=[];
	var obj=$("[id^=xjPrice_]");
	obj.each(function(){
		price.push(Number($(this).val()).toFixed(2));
	});
	for (var i = 0; i < price.length; i++) {
		var res=price[i];
		var tdnum=$("#tdnum").val();
		$(".td_"+tdnum).text('￥'+res);
	};

	var xjPrice=$(".xjPrice");
	var result=[];
	var sum=0;
	xjPrice.each(function(){
		 result.push($(this).text());
	});
	for (var i = 0; i < result.length; i++) {
		var prices=result[i];
		var priceTotal=prices.replace('￥','');
		priceTotal = Number(priceTotal);
		sum+=priceTotal;
	}
	$("#priceTotal").text('商品总价：'+sum);
	// 原价
	var originalPrice=[];
	var originalObj=$("[id^=Original_Price_]");

	originalObj.each(function(){
		originalPrice.push($(this).text());
	});
	var originalSum=0;
	var num=[];
	var numObj=$("[id^=qty_item_]");
	numObj.each(function(){
		num.push($(this).val());
	});
	for (var i = 0; i < originalPrice.length; i++) {
		var priceTotal=originalPrice[i]*num[i];
		priceTotal = Number(priceTotal);
		originalSum+=priceTotal;
	}
	var jiesheng=originalSum-sum;
	$("#jiesheng").text('以  节  省：'+jiesheng);

}); 
