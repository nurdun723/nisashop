<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><!--Head--><head>
    <meta charset="utf-8">
    <title>nisa商城</title>
    <meta name="description" content="login page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="http://localhost/nisashop./application/Admin/Public/style/bootstrap.css" rel="stylesheet">
    <link href="http://localhost/nisashop./application/Admin/Public/style/font-awesome.css" rel="stylesheet">
    <!--Beyond styles-->
    <link id="beyond-link" href="http://localhost/nisashop./application/Admin/Public/style/beyond.css" rel="stylesheet">
    <link href="http://localhost/nisashop./application/Admin/Public/style/demo.css" rel="stylesheet">
    <link href="http://localhost/nisashop./application/Admin/Public/style/animate.css" rel="stylesheet">
</head>
<!--Head Ends-->
<!--Body-->

<body>
    <div class="login-container animated fadeInDown">
        <form action="/nisashop/admin.php/Login/index.html" method="post">
            <div class="loginbox bg-white">
                <div class="loginbox-title">后台登录</div>
                <div class="loginbox-textbox">
                    <input  class="form-control" placeholder="输入用户名" name="username" type="text">
                </div>
                <div class="loginbox-textbox">
                    <input class="form-control" placeholder="输入密码" name="password" type="password">
                </div>
                <div class="loginbox-textbox">
                    <input  class="form-control" style="width: 120px;height:50px;float: left" placeholder="输入用户名" name="verify" type="text">
                    <img src="/nisashop/admin.php/Login/verify" style="height: 50px;border: 0;width: 100px;cursor: pointer" onclick="this.src='/nisashop/admin.php/Login/verify/'+Math.random()">
                </div>
                <div class="loginbox-submit">
                    <input class="btn btn-primary btn-block" value="登录" type="submit">
                </div>
            </div>
                <div class="logobox">
                    <p class="text-center">nisa商城后台登录</p>
                </div>
        </form>
    </div>
    <!--Basic Scripts-->
    <script src="http://localhost/nisashop./application/Admin/Public/style/jquery.js"></script>
    <script src="http://localhost/nisashop./application/Admin/Public/style/bootstrap.js"></script>
    <script src="http://localhost/nisashop./application/Admin/Public/style/jquery_002.js"></script>
    <!--Beyond Scripts-->
    <script src="http://localhost/nisashop./application/Admin/Public/style/beyond.js"></script>




</body><!--Body Ends--></html>