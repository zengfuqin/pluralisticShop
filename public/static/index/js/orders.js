
function adre()
{
	var url = location.search;
	var id=url.substring(4);

	var sheng=$("#sheng .kitjs-form-suggestselect-wrapper input[type=hidden]").val();
	var shi=$("#shi .kitjs-form-suggestselect-wrapper input[type=hidden]").val();
	var qu=$("#qu .kitjs-form-suggestselect-wrapper .kitjs-form-list .kitjs-form-listItem").attr('key');
	var xiang=$("#address").val();
	
	var address=sheng+shi+qu+xiang;
	var name=$("#name").val();
	var email=$("#email").val();
	var postal_code=$("#postal_code").val();
	var phone=$("#phone").val();
	var postData={'address':address,'name':name,'email':email,'postal_code':postal_code,'phone':phone};
	var url=scope.address_url;
	$.post(url,postData,function(result){
		if (result.code==1) {
			var answer = confirm("地址添加成功！");
			if(answer) {
			location.href="http://www.pluralisticshop.com/index/orders/orders.html?id="+id;
			}
		}
	},'json')
}

function btnOrder()
{
	var addressId=$(".active .user_address .address").val();

	var id=$('input:radio[name="radio"]:checked').attr('id');
	var kuaidi=$("#"+id).parent().find(".labelauty-unchecked").text();

	var idradio1=$('input:radio[name="radio1"]:checked').attr('id');
	var way=$("#"+idradio1).parent().find(".labelauty-unchecked").text();
	alert(way);
}