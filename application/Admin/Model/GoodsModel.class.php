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
        //处理商品属性
        $goods_attr=I('goods_attr');
        $goods_price=I('price');
        if($goods_attr){
            $attrprice=D('attrprice');
            $i=0;
            foreach ($goods_attr as $key=>$value){
                if(is_array($value)){
                    foreach ($value as $k=>$v){
                        $attrprice->add(array(
                            'goods_id'=>$data['id'],
                            'attr_id'=>$key,
                            'attr_value'=>$v,
                            'price'=>$goods_price[$i]
                        ));
                        $i++;
                    }
                }else{
                    $attrprice->add(array(
                        'goods_id'=>$data['id'],
                        'attr_id'=>$key,
                        'attr_value'=>$value,
                        'price'=>$goods_price[$i]
                    ));
                    $i++;
                }
            }
        }
    }
    //商品删除前执构造
    public function  _before_delete($option){
        $id=$option['where']['id'];
        //删除商品的缩略图
        $this->field("original,sm_thumb,mid_thumb,max_thumb")->find($id);
        @unlink($this->original);
        @unlink($this->sm_thumb);
        @unlink($this->mid_thumb);
        @unlink($this->max_thumb);
        //删除商品的图片和logo
        $goodsimgages=D("goodspic")->where(array("goods_id"=>$id))->select();
        foreach ($goodsimgages as $k=>$v){
            @unlink($v['original']);
            @unlink($v['max_thumb']);
            @unlink($v['sm_thumb']);
        }
        D("goodspic")->where(array("goods_id"=>$id))->delete();
        //删除商品的属性
        D("attrprice")->where(array("goods_id"=>$id))->delete();
        //删除商品的会员价格
        D("vipprice")->where(array("goods_id"=>$id))->delete();
        //删除库存
        D("product")->where(array("goods_id"=>$id))->delete();
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

    public function getRadioAttr($goods_id){
        $sql="select a.id ,a.goods_id,a.attr_id,a.attr_value,b.attr_name from sp_attrprice as a LEFT JOIN sp_attr b ON a.attr_id=b.id WHERE a.goods_id=$goods_id AND b.attr_type='1'";
        return $this->query($sql);
    }
   
}
