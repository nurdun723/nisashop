<?php
namespace Admin\Controller;
class AdminController extends CommonController {
    public function lst(){
        $admin=D('admin');//实例化模型
        $count=$admin->count();//查询满足条件的总记录数
        $page=new \Think\Page($count,1);//实例化分页类，而且传递总记录数和每页显示的记录数
        $page->setConfig("prev","上一页");
        $page->setConfig("next","下一页");
        $show=$page->show();//分页显示输出
        $adminers=$admin->order(" id ")->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('page',$show);
        $this->assign("adminers",$adminers);
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
               $admin->password=md5($admin->password); /*md5($admin->password);*/
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
        $admin=D("admin");
        $user=$admin->find(I('id'));
       if(IS_POST){
            if($admin->create()){
                if(I('password')){
                    $admin->password=I('password');
                }else{
                    $admin->password=$user['password'];
                }
                if($admin->save()!==false){
                     $this->success("编辑成功！",U("lst"));
                }else{
                   $this->error("编辑失败！");
                }
            }else{
                $this->error($admin->getError());
            }
            return ;
        }
        $this->assign("user",$user);
        $this->display();
    }

    public function delt(){
        $admin=D("admin");
        if($admin->delete(I('id'))){
            $this->success("删除管理员成功",U('lst'));
        }else{
            $this->error("删除管理员失败!");
        }
    }
}