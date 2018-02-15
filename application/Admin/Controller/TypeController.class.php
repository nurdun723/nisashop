<?php
namespace Admin\Controller;
use Think\Think;

class TypeController extends CommonController {

    //商品类型列表
    public function typelist(){
        $type=D('type');
        $count=$type->count();//查找品牌表的总记录数
        $Page=new \Think\Page($count,2);//实例化分页类，传递总记录数和每页显示的记录数
        $Page->setConfig("prev","上一页");//设置分页类的属性
        $Page->setConfig("next","下一页");
        $show=$Page->show();//分页显示输出
        $typeinfo=$type->order()->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign("typeinfo",$typeinfo);
        $this->assign("page",$show);
        $this->display();
    }

    //新增商品类型
    public function typeadd(){
        $type=D('type');
        if(IS_POST){
            if($type->create()){
                if($type->add()){
                    $this->success("添加商品类型成功！",U('typelist'));
                }else{
                    $this->error("添加商品品牌失败！");
                }
            }else{
                $this->error($type->getError());
            }
            return;
        }

        $this->display();
    }

    //删除商品类型的方法
    public function branddelt(){
        $type=D('type');
        if($type->delete(I('id'))){
            $this->success('删除商品类型成功',U('typelist'));
        }else{
            $this->error('删除商品类型失败');
        }
    }
    //商品类型修改
    public function typeedit(){
        $type=D('type');
        if(IS_POST){
            if($type->create()){
                if($type->save()!==false){
                    $this->success("修改商品类型成功!",U('typelist'));
                }else{
                    $this->error("修改商品类型失败");
                }    
            }else{
                $this->error($type->getError());
            }    
            return ;
        }
        $typeinfo=$type->find(I('id'));
        $this->assign('typeinfo',$typeinfo);
        $this->display();
    }

}