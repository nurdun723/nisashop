<?php
namespace Admin\Model;
use Think\Model;
use Think\Think;

class BrandModel extends Model{

    protected $_validate=array(
        array('brand_name','require','品牌名称不能为空！',1),
      
    );

    public function _before_insert(&$data,$option){
       if($_FILES['brand_logo']['tmp_name']){
           $upload = new \Think\Upload();// 实例化上传类
           $upload->maxSize   =     3145728 ;// 设置附件上传大小
           $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
           $upload->autoSub = FALSE;  //关闭自动生产子目录
           $upload->rootPath  =     './'; // 设置附件上传根目录
           $upload->savePath  =     './public/Upload/Brand/'; // 设置附件上传（子）目录
           $info=$upload->uploadOne($_FILES['brand_logo']);
           $log=$info['savepath'].$info['savename'];
           $image = new \Think\Image(); 
           $image->open($log);
           $image->thumb(100,30)->save($log);
           $data['brand_logo']=$log;
       }
    }
   
}
