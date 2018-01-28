<?php

namespace Admin\Model;
use Think\Model;
use Think\Think;
header("Content-type: text/html; charset=utf-8");
class CategoryModel extends Model{

    protected $_validate=array(
        array('catename','require','分类名称不能为空！',1),
        array('catename','require','分类名称已存在！',1,'unique',1),
    );

    //查询分类，排序数据 然后排序返回给控制器
    public function catetree(){
        $data=$this->select();
        return $this->resort($data);
    }
    public function resort($data,$pid=0,$level=0){
        $arr=array();
        foreach ($data as $k=>$v){
            if($v['pid']==$pid){
                $v['lavel']=$level;
                $arr[]=$v;
                $arr=array_merge($arr,$this->resort($data,$v['cateid'],$level+1));
            }
        }
        return $arr;
    }
    //递归删除
    public function findids($cateid){
        $data=$this->select();
        return $this->childrenid($data,$cateid);
    }

    //通过ID递归查找所有子id
    public function childrenid($data,$cateid){
        $arr=array();
        $arr[]=$cateid;
        foreach ($data as $k=>$v){
            if($v['pid']==$cateid){
                $arr[]=$v['cateid'];
                $arr=array_merge($arr,$this->childrenid($data,$v['cateid']));
            }
        }
        return array_unique($arr);
    }
}
