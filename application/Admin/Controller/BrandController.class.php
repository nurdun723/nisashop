<?php
namespace Admin\Controller;
use Think\Think;

class BrandController extends CommonController {

    //品牌列表
    public function brandlist(){
        $brand=D('brand');
        $count=$brand->count();//查找品牌表的总记录数
        $Page=new \Think\Page($count,2);//实例化分页类，传递总记录数和每页显示的记录数
        $Page->setConfig("prev","上一页");//设置分页类的属性
        $Page->setConfig("next","下一页");
        $show=$Page->show();//分页显示输出
        $brandinfo=$brand->order()->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign("brandinfo",$brandinfo);
        $this->assign("page",$show);
        $this->display();
    }

    //品牌新增
    public function brandadd(){
        $brand=D('brand');
        if(IS_POST){
            if($brand->create()){
                if($brand->add()){
                    $this->success("添加商品品牌成功！",U('brandlist'));
                }else{
                    $this->error("添加商品品牌失败！");
                }
            }else{
                $this->error($brand->getError());
            }
            return;
        }

        $this->display();
    }

    //删除商品品牌的方法
    public function branddelt(){
        $brand=D('brand');
        if($brand->delete(I('id'))){
            $this->success('删除品牌成功',U('brandlist'));
        }else{
            $this->error('删除品牌失败');
        }
    }
    //商品品牌修改
    public function brandedit(){
        $brand=D('brand');
        if(IS_POST){
            if($brand->create()){
                if($brand->save()){
                    $this->success("修改品牌成功!",U('brandlist'));
                }else{
                    $this->error("修改品牌失败");
                }    
            }else{
                $this->error($brand->getError());
            }    
            return ;
        }
        $brandinfo=$brand->find(I('id'));
        $this->assign('brandinfo',$brandinfo);
        $this->display();
    }

}