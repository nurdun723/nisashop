<?php
namespace Admin\Model;
use Think\Model;
use Think\Think;

class CategoryModel extends Model{

    protected $_validate=array(
        array('catename','require','分类名称不能为空！',1),
    );
    
}
