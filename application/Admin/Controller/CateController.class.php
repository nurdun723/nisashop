<?php
namespace Admin\Controller;
class CateController extends CommonController {
    //商品分类列表
    public function catelist(){

        $this->display();
    }
    //商品分类添加
    public function cateadd(){
        $category=D('category');
        if(IS_POST){
            if($category->create()){
                if($category->add()){
                    $this->success("分类添加成功！",U('catelist'));
                }else{
                    $this->error("添加不成功！");
                }
            }else{
                $this->error($category->getError());
            }
            return ;
        }
        $categoryes=$category->select();
        $this->assign("catagoryes",$categoryes);
        $this->display();
    }


}