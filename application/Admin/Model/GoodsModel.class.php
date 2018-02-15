<?php
namespace Admin\Model;
use Think\Model;
use Think\Think;

class GoodsModel extends Model{

    protected $_validate=array(
        array('goods_name','require','商品名称不能为空！',1),
        array('cate_id','require','商品分类不能为空！',1),
        array('market_price','require','市场价格名称不能为空！',1),
        array('shop_price','require','本店价格名称不能为空！',1),
        array('goods_name','','商品名称已存在！',1,'unique'),
      
    );

    public function _before_insert(&$data,$option){
        if($_FILES['original']['tmp_name']){
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize   =     3145728 ;// 设置附件上传大小
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->autoSub = FALSE;  //关闭自动生产子目录
            $upload->rootPath  =     './'; // 设置附件上传根目录
            $upload->savePath  =     './public/Upload/Goods/'; // 设置附件上传（子）目录
            $info=$upload->uploadOne($_FILES['original']);
            $original=$info['savepath'].$info['savename'];
            $max_thumb=$info['savepath'].'max_'.$info['savename'];
            $mid_thumb=$info['savepath'].'mid_'.$info['savename'];
            $sm_thumb=$info['savepath'].'sm_'.$info['savename'];
            $image = new \Think\Image();
            $image->open($original);
            $image->thumb(362,362)->save($max_thumb);//大缩略图
            $image->thumb(222,222)->save($mid_thumb);//中缩略图
            $image->thumb(67,67)->save($sm_thumb);//小缩略图
            $data['original']=$original;
            $data['sm_thumb']=$max_thumb;
            $data['mid_thumb']=$mid_thumb;
            $data['max_thumb']=$sm_thumb;
        }
        $data['goods_code']=date("ymdhis").rand(111,999);
        if($data['onsale']){
            $data['onsale']=1;
        }else{
            $data['onsale']=0;
        }

    }

    public function _after_insert(&$data,$option){
        $lev=I('lev');
        if($lev){
            $vipprice=D('vipprice');
            foreach ($lev as $k=>$v){
                if(trim($v)!=''){
                    $vipprice->add(array(
                        'price'=>$v,
                        'level_id'=>$k,
                        'goods_id'=>$data['id']
                    ));
                }
            }
        }

        //处理商品图片
        if($this->hasimage($_FILES['goods_pics']['tmp_name'])){
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize   =     3145728 ;// 设置附件上传大小
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->autoSub = FALSE;  //关闭自动生产子目录
            $upload->rootPath  =     './'; // 设置附件上传根目录
            $upload->savePath  =     './public/Upload/Goods/'; // 设置附件上传（子）目录
            $info=$upload->upload(array('goods_pics'=>$_FILES['goods_pics']));
            $image = new \Think\Image();
            $goodspics=D('goodspic');
            foreach ($info as $key=>$value){
                $original=$value['savepath'].$value['savename'];
                $image->open($original);
                $max_thumb=$value['savepath'].'max_'.$value['savename'];
                $sm_thumb=$value['savepath'].'sm_'.$value['savename'];
                $image->thumb(362,362)->save($max_thumb);//大缩略图
                $image->thumb(67,67)->save($sm_thumb);//小缩略图
                $goodspics->add(array(
                    'goods_id'=>$data['id'],
                    'original'=>$original,
                    'max_thumb'=>$max_thumb,
                    'sm_thumb'=>$sm_thumb
                ));
            }
        }
    }

    public function hasimage($files){
        foreach($files as $k=>$value){
            if($value){
                return true;
            }else{
                return  false;
            }
        }
    }

   
}
