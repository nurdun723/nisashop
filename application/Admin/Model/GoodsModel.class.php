<?php
namespace Admin\Model;
use Think\Model;
use Think\Think;

class GoodsModel extends Model{

    protected $_validate=array(
        array('goods_name','require','商品名称不能为空！',1),
        array('market_price','require','市场价格名称不能为空！',1),
        array('shop_price','require','本店价格名称不能为空！',1),
        array('goods_name','','商品名称已存在！',1,'unique'),
      
    );

   
}
