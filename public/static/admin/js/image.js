$(function() {
	$("#file_upload").uploadify({
		'swf'           : scope.uploadify_swf,
		'uploader'      : scope.image_upload,
		'buttonText'	:'图片上传',
		'fileTypeDesc'	:'Image files',
		'fileObjName'	:'file',
		'fileTypeExts'	:'*.gif; *.jpg; *.png',
		'onUploadSuccess'	:function(file,data,response){
			// console.log(file);
			console.log(data);	//
			// console.log(response);	//处理结果
		}
	});
});