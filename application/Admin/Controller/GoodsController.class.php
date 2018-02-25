<?php
namespace Admin\Controller;
use Think\Think;

class GoodsController extends CommonController {

    //品牌列表
    public function goodslist(){
         $goods=D('Goods');
         $count=$goods->count();//查找品牌表的总记录数
         $Page=new \Think\Page($count,5);//实例化分页类，传递总记录数和每页显示的记录数
         $Page->setConfig("prev","上一页");//设置分页类的属性
         $Page->setConfig("next","下一页");
         $show=$Page->show();//分页显示输出
         $goodsinfo=$goods->alias('a')->field('a.*,SUM(b.goods_number) as gn,c.catename,br.brand_name')
                          ->join('left join sp_product b on a.id=b.goods_id
                               left join sp_category c on a.cate_id=c.cateid
                               left join sp_brand br on .a.brand_id=br.id
                             ')
                          ->group('a.id')
                          ->order("id desc")
                          ->limit($Page->firstRow.','.$Page->listRows)->select();
         $this->assign('page',$show);
         $this->assign('goodsinfo',$goodsinfo);
         $this->display();
    }

    //商品新增
    public function goodsadd(){
        $goods=D('goods');
        if(IS_POST){
            if($goods->create()){
                if($goods->add()){
                    $this->success('添加商品成功！',U('goodslist'));
                }else{
                    $this->error('添加商品失败！');
                }
            }else{
                $this->error($goods->getError());
            }

            return;
        }
        $categorys=D('category')->catetree();
        $this->assign('categorys',$categorys);
        $brand=D('brand')->select();
        $this->assign('brands',$brand);
        $leveles=D('viplevel')->select();
        $this->assign('leveles',$leveles);
        $goodstypes=D('type')->select();
        $this->assign('goodstypes',$goodstypes);
        $this->display();
    }

    //删除商品方法
    public function goodsdelt(){
       $goods=D("goods");
       if($goods->delete(I('id'))){
           $this->success('商品删除成功');
       }else{
           $this->error("商品删除失败");
       }
    }
    //修改商品
    public function goodsedit(){
       
        $this->display();
    }

    public function product($id){
        $product=D('product');
        if(IS_POST){
            $goods_num=I('goods_number');
            $goods_attr=I('goods_attr');
            $product->where(array("goods_id"=>$id))->delete();
            foreach ($goods_num as $key=>$value){
                $attr=array();
                foreach ($goods_attr as $k=>$v){
                    if((int)$v[$key]<=0){
                        continue 2;
                    }
                    $attr[]=$v[$key];
                }
                sort($attr);
                $attrs=implode(',',$attr);
                $product->add(array(
                    'goods_id'=>$id,
                    'goods_number'=>$value,
                    'goods_attr'=>$attrs
                ));
            }
            $this->success('添加库存成功');
            return;
        }
        $goods=D("goods");
        $radioattr=$goods->getRadioAttr($id);
        $radioattrs=array();
        foreach ($radioattr as $k=>$v){
            $radioattrs[$v['attr_id']][]=$v;
        }
        $products=$product->where(array("goods_id"=>$id))->order("id desc")->select();
        $this->assign(array(
            "radioattrs"=>$radioattrs,
            "products"=>$products
        ));
        $this->display();
    }

    public function ajaxgetattr($typeid){
         $attres=D("attr")->where(array("type_id"=>$typeid))->select();
         echo json_encode($attres);
    }

}