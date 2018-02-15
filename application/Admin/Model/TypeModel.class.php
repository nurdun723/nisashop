<?php
namespace Admin\Model;
use Think\Model;
use Think\Think;

class TypeModel extends Model{

    protected $_validate=array(
        array('typename','require','商品类型名称不能为空！',1),
        array('typename','','商品类型名称不能重复！',1,'unique'),
    );
}
