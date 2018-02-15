<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {

    public function index(){
        $admin=D('admin');
        if(IS_POST){
            if($admin->create($_POST,4)){
                if($admin->login()){
                    $this->success("登录成功,跳转中...！",U('Index/index'));
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

//    //验证码
//    public function verify(){
//        $verify=new \Think\Verify();
//        $verify->length=4;
//        $verify->entry();
//    }
}