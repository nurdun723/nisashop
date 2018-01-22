<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends Controller {
    public function lst(){
        $this->display();
    }
     //管理员添加
    public function add(){
        //实例化Admin模型
        $admin=D('admin');
        //判断表单
        if(IS_POST){
           //创建数据对象 ,但先不会输入到数据库进行验证，验证通过了才存入到数据库
           if($admin->create()){
               $admin->password=md5($admin->password);
               //添加数据
               if($admin->add()){
                   $this->success('添加管理员成功！',U('lst'));
               }else{
                   $this->error('管理员添加失败！');
               }
           }else{
               //操作错误跳转的快捷方法 ->　error();
               //返回模型的错误信息 -> getError()
               $this->error($admin->getError());
           }
           return;
        }
        $this->display();

    }
    public function edit(){
        $this->display();
    }
}