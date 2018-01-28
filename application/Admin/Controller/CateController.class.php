<?php
namespace Admin\Controller;
class CateController extends CommonController {
    //商品分类列表
    public function catelist(){
        $category=D("category");
        $categorys=$category->catetree();//获取栏目树
        $this->assign("categorys",$categorys);
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
        $categoryes=$category->catetree();
        $this->assign("categoryes",$categoryes);
        $this->display();
    }
    //分类修改
    public function cateedit(){
        $category=D('category');
        if(IS_POST){
            if($category->create()){
                if($category->save() !==false){
                    $this->success("修改分类成功",U("catelist"));
                }else{
                    $this->error("修改分类失败！");
                }
            }else{
                $this->error($category->getError());
            }
            return ;
        }
        $cate=$category->find(I('cateid'));
        $categoryes=$category->catetree();
        $this->assign("cate",$cate);
        $this->assign("categoryes",$categoryes);
        $this->display();
    }
    //连带删除
    public function catedelt(){
        $category=D('category');
        $cateid=$category->findids(I('cateid'));
        $cateids=implode(',',$cateid);
        if($category->delete($cateids)){
            $this->success("删除分类成功！",U('catelist'));
        }else{
            $this->error("删除分类失败");
        }
    }


}