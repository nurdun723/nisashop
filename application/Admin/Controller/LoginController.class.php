<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {

    public function index(){
        $admin=D('admin');
        if(IS_POST){
            if($admin->create()){
                if($admin->login()){
                    $this->success("登录成功！",U('Index/index'));
                }else{
                    $this->error("登录失败！");
                }
            }else{

                $this->error($admin->getError());
            }
            return;
        }

        $this->display();
    }
}