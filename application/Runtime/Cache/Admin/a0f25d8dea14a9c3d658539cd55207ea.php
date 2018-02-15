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
    
    <!--引入百度编辑器-->
    <script src="http://localhost/nisashop./application/Admin/Public/ueditor/ueditor.config.js"></script>
    <script src="http://localhost/nisashop./application/Admin/Public/ueditor/ueditor.all.min.js"></script>
    <script src="http://localhost/nisashop./application/Admin/Public/ueditor/lang/zh-cn/zh-cn.js"></script>
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
                <li>
                    <a href="/admin.php/cate/catelist">
                        <span class="menu-text">商品分类列表</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/admin.php/cate/cateadd">
                        <span class="menu-text">商品分类添加</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/admin.php/brand/brandlist">
                        <span class="menu-text">品牌列表</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/admin.php/brand/brandadd">
                        <span class="menu-text">品牌新增</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/admin.php/goods/goodsadd">
                        <span class="menu-text">商品新增</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/admin.php/goods/goodslist">
                        <span class="menu-text">商品列表</span>
                        <i class="menu-expand"></i>
                    </a>
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
                <li>
                    <a href="#">
                        <span class="menu-text">管理员列表</span>
                        <i class="menu-expand"></i>
                    </a>
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
                      <li><a href="/admin.php/Goods/goodslist">商品列表</a></li>
                      <li class="active">新增商品</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">新增商品</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="/admin.php/Goods/goodsadd" method="post" enctype="multipart/form-data">
                      <!------------------新增商品--------------->
                       <div class="tabbable"> 
                         <ul id="myTab11" class="nav nav-tabs tabs-flat">
                                <li class="active">
                                    <a href="#home11" data-toggle="tab">
                                        基本信息
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#profile11" data-toggle="tab">
                                        商品描述
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#profile12" data-toggle="tab">
                                        会员价格
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#profile13" data-toggle="tab">
                                        商品属性
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#profile14" data-toggle="tab">
                                        商品图片
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content tabs-flat">
                                <!--基本信息-->
                                <div class="tab-pane active" id="home11">

                                    <div class="form-group">
                                        <label for="goods_name" class="col-sm-2 control-label no-padding-right">商品名称</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" id="goods_name" placeholder="输入商品名称"  name="goods_name" type="text">
                                        </div>
                                        <p class="help-block col-sm-4 red">* 必填</p>
                                    </div>
                                        <!--商品缩略图片-->
                                    <div class="form-group">
                                        <label for="original" class="col-sm-2 control-label no-padding-right">商品缩略图片</label>
                                        <div class="col-sm-6">
                                            <input  id="original" placeholder="输入商品名称"  name="original" type="file">
                                        </div>
                                    </div>
                                        <!--商品所属分类-->
                                    <div class="form-group">
                                        <label for="cate_id" class="col-sm-2 control-label no-padding-right">商品所属分类</label>
                                        <div class="col-sm-6">
                                            <select name="cate_id">
                                                <option value="">请选择</option>
                                                <?php if(is_array($categorys)): $i = 0; $__LIST__ = $categorys;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?><option value="<?php echo ($value["cateid"]); ?>"><?php echo (str_repeat("&nbsp;&nbsp;",$value['lavel']*3)); echo ($value["catename"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                            </select>
                                        </div>
                                    </div>
                                        <!--商品所属品牌-->
                                    <div class="form-group">
                                        <label for="brand_id" class="col-sm-2 control-label no-padding-right">商品所属品牌</label>
                                        <div class="col-sm-6">
                                            <select name="brand_id">
                                                <option>请选择</option>
                                                <?php if(is_array($brands)): $i = 0; $__LIST__ = $brands;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?><option value="<?php echo ($value["id"]); ?>"><?php echo ($value["brand_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="market_price" class="col-sm-2 control-label no-padding-right">市场价格</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" id="market_price"  name="market_price" type="text">
                                        </div>
                                        <p class="help-block col-sm-4 red">* 必填</p>
                                    </div>

                                    <div class="form-group">
                                        <label for="shop_price" class="col-sm-2 control-label no-padding-right">本店价格</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" id="shop_price"  name="shop_price" type="text">
                                        </div>
                                        <p class="help-block col-sm-4 red">* 必填</p>
                                    </div>
                                        <!--商品重量-->
                                     <div class="form-group">
                                        <label for="goods_weight" class="col-sm-2 control-label no-padding-right">商品重量</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" id="goods_weight"  name="goods_weight" type="text" style="width:60%;float:left;margin-right:10px">
                                            <select name="weight_unit">
                                                <option value="kg">kg</option>
                                                <option value="g">g</option>
                                            </select>
                                        </div>
                                    </div>
                                        <!--是否上架-->
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label no-padding-right" for="onsale">是否上架</label>
                                       <div class="col-sm-6">
                                           <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="onsale" checked="checked" class="colored-success">
                                                    <span class="text">上架</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!--商品描述-->
                                <div class="tab-pane" id="profile11" >
                                    <textarea id="goods_des" name="goods_des" style="width:500px;height:500px;"></textarea>
                                </div>
                                <!--会员价格-->
                                <div class="tab-pane" id="profile12">
                                    <?php if(is_array($leveles)): $i = 0; $__LIST__ = $leveles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?><div class="form-group">
                                        <label for="goods_name" class="col-sm-2 control-label no-padding-right"><?php echo ($value["level_name"]); ?></label>
                                        <div class="col-sm-6">
                                            <input class="form-control" id=""   name="lev[<?php echo ($value["id"]); ?>]" type="text">
                                        </div>
                                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                                <!--商品属性-->
                                <div class="tab-pane" id="profile13">
                                    <p>商品属性</p>
                                </div>
                                <!--商品图片-->
                                <div class="tab-pane" id="profile14">
                                    <div class="form-group">
                                        <label for="goods_name" class="col-sm-2 control-label no-padding-right">
                                            <a id="addimg" href="javascript:;">[+]</a>
                                        </label>
                                        <div class="col-sm-6">
                                            <input type="file"  name="goods_pics[]">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="submit" value="添加商品" style="width:150px;" class="btn btn-darkorange btn-block">
                       </div>  
                      <!------------------新增商品--------------->
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

    <script type="text/javascript">

        // <!--实例化编辑器-->
        // <!--建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例-->
        UE.getEditor('goods_des',{initialFrameWidth:900,initialFrameHeight:280,});
        var str='<div class="form-group"><label for="goods_name" class="col-sm-2 control-label no-padding-right"><a onclick="deltimg(this);" href="javascript:;">[-]</a></label><div class="col-sm-6"><input type="file"  name="goods_pics[]"></div></div>';
        $("#addimg").click(function (){
            $("#profile14").append(str);
        });
        function deltimg(o) {
            $(o).parent().parent().remove()
        }
    </script>

</body></html>