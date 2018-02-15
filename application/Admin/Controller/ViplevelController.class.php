<?php
namespace Admin\Controller;
class ViplevelController extends CommonController {
    //会员等级列表
    public function levellist(){
        $level=D('viplevel');
        $leveles=$level->select();
        $this->assign("leveles",$leveles);
        $this->display();
    }
    //会员等级添加
    public function leveladd(){
        $level=D('viplevel');
        if(IS_POST){
            if($level->create()){
                if($level->add()){
                    $this->success("添加会员等级成功！",U('levellist'));
                }else{
                    $this->error("添加会员等级失败！");
                }
            }else{
                $this->error($level->getError());
            }
            return;
        }
        $this->display();
    }
    //修改会员等级
    public function leveledit(){
        $level=D('viplevel');
        if(IS_POST){
            if($level->create()){
                if($level->save()!==false){
                    $this->success("修改会员等级成功！",U('levellist'));
                }else{
                    $this->error("修改会员等级失败！");
                }
            }else{
                $this->error($level->getError());
            }
            return;
        }
        $leveles=$level->find(I('id'));
        $this->assign('leveles',$leveles);
        $this->display();
    }
    //会员等级删除
    public function leveldelt(){
        $level=D('viplevel');
        if($level->delete(I('id'))){
            $this->success('删除会员等级成功',U('levellist'));
        }else{
            $this->error('删除会员等级失败');
        }
    }

}