<?php
namespace Admin\Controller;
class BrandController extends CommonController {

    //品牌列表
    public function brandlist(){

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

}