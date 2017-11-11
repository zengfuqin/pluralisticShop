function categorySave(){
	var categorytitle=$('#categorytitle').val();
	var categorycolumn=$('#categorycolumn').val();
	var categoryurl=$("#categoryurl").val();
	var url=scope.category_url;
	var postData={'categorytitle':categorytitle,'categoryurl':categoryurl,'categorycolumn':categorycolumn};
	$.post(url,postData,function(result){
		if (result.code==0) {
			alert(result.msg);
		}else if(result.code==1){
			alert(result.msg);
		}
	},'json');
}
//更新栏目
function categoryUpsave(){
	var categorytitle=$('#categorytitle').val();
	var categorycolumn=$('#categorycolumn').val();
	var categoryurl=$("#categoryurl").val();
	var id=$("#id").val();
	var url=scope.categoryup_url;
	var postData={'categorytitle':categorytitle,'categoryurl':categoryurl,'categorycolumn':categorycolumn,'id':id};
	$.post(url,postData,function(result){
		if (result.code==0) {
			alert(result.msg);
		}else if(result.code==1){
			alert(result.msg);
		}
	},'json');
}
// 删除
function category_del(url){
	layer.confirm('确认要删除吗？',function(index){
		window.location.href=url;
	});
}
//排序
$(".listorder input").blur(function(){
	var id=$(this).attr('attr-id');
	var listorder=$(this).val();
	var postData={'id':id,'listorder':listorder}
	var url=scope.categorylist_url;
	$.post(url,postData,function(result){
		if(result.code==1){
			location.href=result.data;
		}else{
			alert(result.msg);
		}
	},'json')
})

