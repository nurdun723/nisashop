<?php
namespace Admin\Model;
use Think\Model;
use Think\Think;

class ViplevelModel extends Model{

    protected $_validate=array(
        array('level_name','require','会员等级名称不能为空！',1),
        array('point_min','require','积分下限不能为空！',1),
        array('point_max','require','积分上限不能为空！',1),
        array('rate','require','会员折扣率不能为空！',1),
        array('level_name','require','会员等级名称不能重复！',1,'unique',1),
        array('level_name','require','会员等级名称不能重复',1,'unique',2)

    );
}
