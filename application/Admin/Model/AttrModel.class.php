<?php
namespace Admin\Model;
use Think\Model;
use Think\Think;

class AttrModel extends Model{

    protected $_validate=array(
        array('attr_name','require','属性名称不能为空！',1),
      
    );


   
}
