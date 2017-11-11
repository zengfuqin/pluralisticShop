<?php
namespace app\admin\controller;
use think\Controller;
class Common extends controller
{
      //状态
    public function status(){
     $data=input('get.');
    
      if (empty($data['id'])) {
        $this->error('id不合法');
      }
      if (!is_numeric($data['status'])) {
        $this->error('status不合法');
      }
      $model=request()->controller();
      $res=model($model)->save(['status'=>$data['status']],['id'=>$data['id']]);
      if ($res) {
        $this->success('状态更新成功！');
      }else{
        $this->error('状态更新失败！');
      }
  }




}