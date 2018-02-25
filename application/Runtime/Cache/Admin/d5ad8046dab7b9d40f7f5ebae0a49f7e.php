<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html><head>
	    <meta charset="utf-8">
    <title>nisa商城</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="http://localhost/nisashop./application/Admin/Public/style/bootstrap.css" rel="stylesheet">
    <link href="http://localhost/nisashop./application/Admin/Public/style/font-awesome.css" rel="stylesheet">
    <link href="http://localhost/nisashop./application/Admin/Public/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="http://localhost/nisashop./application/Admin/Public/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="http://localhost/nisashop./application/Admin/Public/style/demo.css" rel="stylesheet">
    <link href="http://localhost/nisashop./application/Admin/Public/style/typicons.css" rel="stylesheet">
    <link href="http://localhost/nisashop./application/Admin/Public/style/animate.css" rel="stylesheet">
    
</head>
<body>
	<!-- 头部 -->
        <div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                        <img src="http://localhost/nisashop./application/Admin/Public/img/logo.png" alt="">
                    </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="http://localhost/nisashop./application/Admin/Public/img/adam-jansen.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span><?php echo (session('username')); ?></span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="/admin.php/Admin/logout">
                                        退出登录
                                    </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="/admin.php/Admin/edit/id/<?php echo (session('uid')); ?>">
                                        修改密码
                                    </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>
	<!-- /头部 -->
	
	<div class="main-container container-fluid">
		<div class="page-container">
			<!-- Page Sidebar -->
               <div class="page-sidebar" id="sidebar">
    <!-- Page Sidebar Header-->
    <div class="sidebar-header-wrapper">
        <input class="searchinput" type="text">
        <i class="searchicon fa fa-search"></i>
        <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
    </div>
    <!-- /Page Sidebar Header -->
    <!-- Sidebar Menu -->
    <ul class="nav sidebar-menu">
        <!--Dashboard-->
        <li>
            <a href="#" class="menu-dropdown">
               <i class="menu-icon fa fa-gear"></i>
                    <span class="menu-text">管理员管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="/admin.php/admin/lst">
                        <span class="menu-text">管理员列表</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/admin.php/admin/add">
                        <span class="menu-text">新增管理员</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
               <i class="menu-icon fa fa-gear"></i>
                    <span class="menu-text">商品中心</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li class="">
                    <a href="#" class="menu-dropdown">
                        <span class="menu-text">分类模块</span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu" style="display:none;">
                        <li>
                            <a href="/admin.php/cate/catelist">
                                <i class="menu-icon fa fa-rocket"></i>
                                <span class="menu-text">分类列表</span>
                            </a>
                        </li>
                        <li>
                            <a href="/admin.php/cate/cateadd">
                                <i class="menu-icon glyphicon glyphicon-stats"></i>
                                <span class="menu-text">分类添加</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="#" class="menu-dropdown">
                        <span class="menu-text">品牌模块</span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu" style="display: none;">
                        <li>
                            <a href="/admin.php/brand/brandlist">
                                <i class="menu-icon fa fa-rocket"></i>
                                <span class="menu-text">品牌列表</span>
                            </a>
                        </li>
                        <li>
                            <a href="/admin.php/brand/brandadd">
                                <i class="menu-icon glyphicon glyphicon-stats"></i>
                                <span class="menu-text">品牌添加</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="#" class="menu-dropdown">
                        <span class="menu-text">类型模块</span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu" style="display: none;">
                        <li>
                            <a href="/admin.php/type/typelist">
                                <i class="menu-icon fa fa-rocket"></i>
                                <span class="menu-text">类型列表</span>
                            </a>
                        </li>
                        <li>
                            <a href="/admin.php/type/typeadd">
                                <i class="menu-icon glyphicon glyphicon-stats"></i>
                                <span class="menu-text">类型添加</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="#" class="menu-dropdown">
                        <span class="menu-text">属性模块</span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu" style="display: none;">
                        <li>
                            <a href="/admin.php/attr/attrlist/typeid/1">
                                <i class="menu-icon fa fa-rocket"></i>
                                <span class="menu-text">属性列表</span>
                            </a>
                        </li>
                        <li>
                            <a href="/admin.php/attr/attradd">
                                <i class="menu-icon glyphicon glyphicon-stats"></i>
                                <span class="menu-text">属性添加</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="#" class="menu-dropdown">
                        <span class="menu-text">商品模块</span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu" style="display: none;">
                        <li>
                            <a href="/admin.php/goods/goodslist">
                                <i class="menu-icon fa fa-rocket"></i>
                                <span class="menu-text">商品列表</span>
                            </a>
                        </li>
                        <li>
                            <a href="/admin.php/goods/goodsadd">
                                <i class="menu-icon glyphicon glyphicon-stats"></i>
                                <span class="menu-text">商品添加</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">会员中心</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="#">
                        <span class="menu-text">会员管理</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/admin.php/Viplevel/levellist">
                        <span class="menu-text">会员等级</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">管理员管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li class="open">
                    <a href="#" class="menu-dropdown">
                       <span class="menu-text">商品分类模块</span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu" style="display: block;">
                        <li>
                            <a href="font-awesome.html">
                                <i class="menu-icon fa fa-rocket"></i>
                                <span class="menu-text">商品分类列表</span>
                            </a>
                        </li>
                        <li>
                            <a href="glyph-icons.html">
                                <i class="menu-icon glyphicon glyphicon-stats"></i>
                                <span class="menu-text">商品分类添加</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
    <!-- /Sidebar Menu -->
</div>
            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                      <li>
                        <a href="/admin.php/Index/index">系统</a>
                      </li>
                      <li><a href="/admin.php/Cate/catelist">商品管理</a></li>
                      <li class="active">新增商品分类</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">新增商品分类</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="/admin.php/Cate/cateadd" method="post">
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">分类名称</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="username" placeholder="请输入用户名"  name="catename" type="text">
                            </div>
                            <!--<p class="help-block col-sm-4 red">* 必填</p>-->
                        </div>

                        <div class="form-group">
                            <label for="group_id" class="col-sm-2 control-label no-padding-right">上级分类</label>
                            <div class="col-sm-6">
                                <select name='pid'>
                                    <option value='0'>顶级分类</option>
                                    <?php if(is_array($categoryes)): $i = 0; $__LIST__ = $categoryes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?><option value="<?php echo ($value["cateid"]); ?>"><?php echo (str_repeat("&nbsp;&nbsp;",$value['lavel']*3)); echo ($value["catename"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                            <!--<p class="help-block col-sm-4 red">* 必填</p>-->
                        </div>  
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">保存信息</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
		</div>	
	</div>

	    <!--Basic Scripts-->
    <script src="http://localhost/nisashop./application/Admin/Public/style/jquery_002.js"></script>
    <script src="http://localhost/nisashop./application/Admin/Public/style/bootstrap.js"></script>
    <script src="http://localhost/nisashop./application/Admin/Public/style/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="http://localhost/nisashop./application/Admin/Public/style/beyond.js"></script>
    


</body></html>