<?php
namespace Admin\Controller;
use Think\Think;

class GoodsController extends CommonController {

    //品牌列表
    public function goodslist(){
         $goods=D('GoodsView');
         $count=$goods->count();//查找品牌表的总记录数
         $Page=new \Think\Page($count,2);//实例化分页类，传递总记录数和每页显示的记录数
         $Page->setConfig("prev","上一页");//设置分页类的属性
         $Page->setConfig("next","下一页");
         $show=$Page->show();//分页显示输出
         $goodsinfo=$goods->order()->limit($Page->firstRow.','.$Page->listRows)->select();
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
        $this->display();
    }

    //删除商品方法
    public function goodsdelt(){
       
    }
    //修改商品
    public function goodsedit(){
       
        $this->display();
    }

}