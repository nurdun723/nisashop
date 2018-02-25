<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->show("<div style='width: 100%;height: 100%'><h2>欢迎来到NISA商城</h2></div>");
    }
}