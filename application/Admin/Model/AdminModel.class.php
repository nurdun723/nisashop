<?php
namespace Admin\Model;
use Think\Model;

class AdminModel extends Model{

    protected $_validate=array(
        array('username','require','用户名不能为空！',1),
        array('password','require','用户密码不能为空！',1,'regex',1),
        /*array('username','require','用户名已存在',1,'unique')*/
    );
    public function login(){
        $userinfo=$this->where("username='$this->username' and password=md5('$this->password')")->find();
        if($userinfo){
            return true;
        }else{
            return false;
        }
    }
}