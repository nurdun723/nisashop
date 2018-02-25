<?php
namespace Admin\Model;
use Think\Model\ViewModel;

class GoodsViewModel extends ViewModel{

    protected $viewFields =array(
        "Goods"=>array('id','goods_name','sm_thumb','market_price','shop_price','onsale','cate_id','brand_id'),
        "Category"=>array('catename','_on'=>'goods.cate_id=category.cateid','_type'=>'LEFT'),
        "Product"=>array('goods_number','SUM(goods_number)','_on'=>'goods.id=product.goods_id','_type'=>'LEFT'),
        "Brand"=>array('brand_name','_on'=>'goods.brand_id=brand.id')
    );

   
}
