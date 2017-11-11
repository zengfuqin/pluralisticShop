<?php
namespace app\admin\controller;
use think\Controller;
use think\Config;
class Picture extends Common
{
    public function index()
    {
        $picture_type=input('get.pictureType',0,'intval');
        $picturesInfo=model("Picture")->getAllInfo($picture_type);
        $picturesInfolist=json_decode(json_encode($picturesInfo),true);
        $picture_type= Config::get('picturetype.picture_type');
        return $this->fetch('picture-list',[
                    'pictureInfo'=>$picturesInfolist,
                    'picture_type'=>$picture_type,
                    'picture_type_val'=>empty($picturesInfolist[0]['picture_type']) ? '' : $picturesInfolist[0]['picture_type']
                    ]);
    }

    public function pshow()
    {
      $id=input("get.id");
      $getInfoByIds=model("Picture")->getInfoById($id);
      $getInfoByIds=json_decode(json_encode($getInfoByIds),true);
      $img_srcn =  $getInfoByIds['img_srcn'];
      $img_srcn = explode('@', $img_srcn);
      $len = count($img_srcn) - 1;
      unset($img_srcn[$len]); 
      return $this->fetch('picture-show',['img_srcn'=>$img_srcn,'getInfoByIds'=>$getInfoByIds]);
    }

    public function padd()
    {
      $id='';
      $picture_type= Config::get('picturetype.picture_type');
      $id=input('get.id');
      $this->assign('id',$id);
      if ($id) {
        $getInfoByIds=model("Picture")->getInfoById($id);
        $getInfoByIds=json_decode(json_encode($getInfoByIds),true);

        $tmp =  $getInfoByIds['img_srcn'];
        $tmp = explode('@', $tmp);
        $len = count($tmp) - 1;
        unset($tmp[$len]);

        return $this->fetch('picture-add',[
          'getInfoByIds'=>$getInfoByIds,
          'picture_type'=>$picture_type,
          'img_srcn'=>$tmp
          ]);
      }
      
        return $this->fetch('picture-add',['picture_type'=>$picture_type]);
    }

  //保存数据
    public function insert()
    {
      //封面图
      $file = request()->file('img_src');
      $img_src='';
      if($file){
            $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
            if($info){
                // 成功上传后 获取上传信息
                $img_src=$info->getSaveName();
                $img_src="/uploads/".$img_src;
             }else{
            // 上传失败获取错误信息
                echo $file->getError();
             }
      }
      //多图上传
      $img_srcn = "";
       $files = request()->file('img_srcn');
      foreach($files as $file){
            // 移动到框架应用根目录/public/uploads/ 目录下
            $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
            if($info){
            // 成功上传后 获取上传信息
             $img_srcd=$info->getSaveName();
             $img_srcn .= "/uploads/".$img_srcd.'@';
            }else{
            // 上传失败获取错误信息
            echo $file->getError();
            }    
      }
            $data=input("post.");
            $data['img_src']=$img_src;
            $data['img_srcn']=$img_srcn;
            $validate=validate('Picture');
            if (!$validate->scene('add')->check($data)) {
                  $this->error($validate->getError());
            }
            
            $res=model("Picture")->add($data);
            if ($res) {
                  $this->success("新增成功");
            }else{
                  $this->error('新增失败');
            }
    }
//更析数据
    public function updata()
    {
      $data=input("post.");
      $id=input('get.id');
      $img_src=$data['img'];
      $img_srcn=$data['imgs'];
      unset($data['img']);
      unset($data['imgs']);
      //封面图
      $file = request()->file('img_src');
      if($file){
            $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
            if($info){
                // 成功上传后 获取上传信息
                $img_src=$info->getSaveName();
                $img_src="/uploads/".$img_src;
             }else{
            // 上传失败获取错误信息
                echo $file->getError();
             }
      }
      //多图上传
      $img_srcns='';
       $files = request()->file('img_srcn');
      foreach($files as $file){
            // 移动到框架应用根目录/public/uploads/ 目录下
            $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
            if($info){
            // 成功上传后 获取上传信息
             $img_srcd=$info->getSaveName();
             $img_srcns .= "/uploads/".$img_srcd.'@';
            }else{
            // 上传失败获取错误信息
            echo $file->getError();
            }    
      }
            $data['img_src']=$img_src;
            if ($img_srcns!='') {
              $data['img_srcn']=$img_srcns;
            }else{
              $data['img_srcn']=$img_srcn;
            }
            
            $validate=validate('Picture');
            if (!$validate->scene('add')->check($data)) {
                  $this->error($validate->getError());
            }

            $res=model("Picture")->save($data,['id'=>$id]);
            if ($res) {
                  $this->success("更新成功");
            }else{
                  $this->error('更新失败');
            }

    }
//删除图片
    public function del($check_src,$id)
    {
      $getInfoByIds=model("Picture")->getInfoById($id);
      $getInfoByIds=json_decode(json_encode($getInfoByIds),true);     
      $img_srcn=$getInfoByIds['img_srcn'];
      foreach ($check_src as $value) {
         $img_srcn=str_replace($value, 'a', $img_srcn);
      }
       $tmp = explode('@', $img_srcn);
       $len = count($tmp) - 1;
       unset($tmp[$len]);  
       foreach ($tmp as $key => $value) {
         if ($value=='a') {
           unset($tmp[$key]);
         }
       }
       $img_srcn=[];
       $i=0;
       foreach ($tmp as $value) {
         $img_srcn[$i]=$value;

         $i++;
       }
       $img_srcn=implode('@', $img_srcn);
       $img_srcn=$img_srcn.'@';
       $data['img_srcn']=$img_srcn;
       $res=model("Picture")->save($data,['id'=>$id]);

       if ($res) {
          $resu=model("Picture")->where('id',$id)->find(); 
         $resu=json_decode(json_encode($resu),true);
         if ($resu['img_srcn']=="@") {
             $res=model("Picture")->save(['img_srcn'=>''],['id'=>$id]);
       }
       $this->result($_SERVER['HTTP_REFERER'],1,'success');
      }else{
            $this->result($_SERVER['HTTP_REFERER'],0,'error');
      }  
 
    }
//编辑图片
public function edit($check_src,$id)
{
  return $this->fetch('picture-edit');

}



   //类结束
}
