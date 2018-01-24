<?php
namespace Admin\Model;
use Think\Model;
use Think\Think;

class AdminModel extends Model{

    protected $_validate=array(
        array('username','require','用户名不能为空！',1),
        array('password','require','用户密码不能为空！',1,'regex',1),
        array('username','require','用户名已存在',1,'unique',1),
        array('username','require','用户名已存在',1,'unique',2),
        array('verify','verify','验证码有误！',1,'callback ',4)
    );
    public function login(){
        $userinfo=$this->where("username='$this->username' and password=md5('$this->password')")->find();
        if($userinfo){
            session('uid',$userinfo['id']);
            session('username',$userinfo['username']);
            return true;
        }else{
            return false;
        }
    }
    //验证码验证方法
    public function verify($code){
        $verify=new \Think\Verify();
        return $verify->check($code,'');
    }
}
