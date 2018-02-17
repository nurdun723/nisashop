<?php
namespace Admin\Model;
use Think\Model;
use Think\Think;

class AttrModel extends Model{

    protected $_validate=array(
        array('attr_name','require','属性名称不能为空！',1),
        array('attr_name','','属性名称不能重复！',1,'unique')
    );

    public function _before_insert(&$data,$option){
        $data['attr_value']=str_replace('，',',',$data['attr_value']);
    }

    public function _before_update(&$data,$option){
        $data['attr_value']=str_replace('，',',',$data['attr_value']);
    }
   
}
