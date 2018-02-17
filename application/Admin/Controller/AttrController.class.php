<?php
namespace Admin\Controller;
use Think\Think;

class AttrController extends CommonController {

    //品牌列表
    public function attrlist(){
        $attr=D('attr');
        $count=$attr->where(array('type_id'=>I('typeid')))->count();//查找品牌表的总记录数
        $Page=new \Think\Page($count,5);//实例化分页类，传递总记录数和每页显示的记录数
        $Page->setConfig("prev","上一页");//设置分页类的属性
        $Page->setConfig("next","下一页");
        $show=$Page->show();//分页显示输出
        $attrinfo=$attr->order()->where(array('type_id'=>I('typeid')))->limit($Page->firstRow.','.$Page->listRows)->select();
        $typeinfo=D('type')->select();
        $typeid=I('typeid');
        $this->assign("attrinfo",$attrinfo);
        $this->assign("typeinfo",$typeinfo);
        $this->assign("typeid",$typeid);
        $this->assign("page",$show);
        $this->display();
    }

    //品牌新增
    public function attradd(){
        $attr=D('attr');
        if(IS_POST){
            $type_id=$_POST['type_id'];
            if($attr->create()){
                if($attr->add()){
                    $this->success("添加属性成功！",U('attrlist',array('typeid'=>$type_id)));
                }else{
                    $this->error("添加属性失败！");
                }
            }else{
                $this->error($attr->getError());
            }
            return;
        }
        $typeinfo=D('type')->select();
        $typeid=I('typeid');
        $this->assign("typeinfo",$typeinfo);
        $this->assign("typeid",$typeid);

        $this->display();
    }

    //删除属性的方法
    public function attrdelt(){
        $attr=D('attr');
        if($attr->delete(I('id'))){
            $this->success('删除属性成功',U('attrlist',array('typeid'=>I('typeid'))));
        }else{
            $this->error('删除品牌失败');
        }
    }
    //商品品牌修改
    public function attredit(){
        $attr=D('attr');
        if(IS_POST){
            $typeid=$_POST['type_id'];
            if($attr->create()){
                if($attr->save()!==false){
                    $this->success("修改属性成功!",U('attrlist',array('typeid'=>$typeid)));
                }else{
                    $this->error("修改属性失败");
                }    
            }else{
                $this->error($attr->getError());
            }    
            return ;
        }
        $attrinfo=$attr->find(I('id'));
        $typeinfo=D('type')->select();
        $typeid=I('typeid');
        $this->assign('attrinfo',$attrinfo);
        $this->assign('typeinfo',$typeinfo);
        $this->assign('typeid',$typeid);
        $this->display();
    }

}