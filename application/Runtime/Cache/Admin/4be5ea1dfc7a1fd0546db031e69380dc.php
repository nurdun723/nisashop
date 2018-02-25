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
                      <li class=""><a href="#">商品中心</a></li>
                      <li class="active">商品库存</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
                    <button type="button" tooltip="添加商品库存" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '/admin.php/Goods/goodsadd'"> <i class="fa fa-plus"></i> Add </button>
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <div class="widget">
                                <div class="widget-body">
                                <div class="flip-scroll">
                                    <form action="/admin.php/Goods/product/id/25" method="post"   >
                                    <table class="table table-bordered table-hover">
                                    <thead class="">
                                         <tr>
                                            <?php if(is_array($radioattrs)): $i = 0; $__LIST__ = $radioattrs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><th class="text-center"><?php echo ($vo[0]['attr_name']); ?></th><?php endforeach; endif; else: echo "" ;endif; ?>
                                            <th class="text-center">库存量</th>
                                             <th class="text-center">操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if($products): if(is_array($products)): foreach($products as $key1=>$value1): ?><tr>
                                            <?php if(is_array($radioattrs)): foreach($radioattrs as $key=>$value): ?><td align="center">
                                                <select name="goods_attr[<?php echo ($key); ?>][]" >
                                                    <option value="">请选择</option>
                                                    <?php foreach($value as $k=>$v): if(strpos(','.$value1['goods_attr'].',',','.$v['id'].',')!==false){ $selected='selected="selected"'; }else{ $selected=''; } ?>
                                                    <option value="<?php echo $v['id'] ?>" <?php echo $selected; ?>   ><?php echo $v['attr_value']?></option>
                                                    <?php endforeach;?>
                                                </select>
                                            </td><?php endforeach; endif; ?>
                                            <td align="center">
                                                <input type="text" name="goods_number[]" value="<?php echo ($value1["goods_number"]); ?>" style='padding:6px 6px; width:100px;'>
                                            </td>
                                            <td align="center">
                                                <input type="button" value="<?php if($key1 == 0): ?>+<?php else: ?>-<?php endif; ?>" onclick="addrow(this)" class="btn btn-primary btn-sm shiny">
                                            </td>
                                          </tr><?php endforeach; endif; ?>
                                        <?php else: ?>
                                            <tr>
                                                <?php if(is_array($radioattrs)): foreach($radioattrs as $key=>$value): ?><td align="center">
                                                        <select name="goods_attr[<?php echo ($key); ?>][]" id="">
                                                            <option value="">请选择</option>
                                                            <?php if(is_array($value)): $i = 0; $__LIST__ = $value;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["attr_value"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                                        </select>
                                                    </td><?php endforeach; endif; ?>
                                                <td align="center">
                                                    <input type="text" name="goods_number[]" style='padding:6px 6px; width:100px;'>
                                                </td>
                                                <td align="center">
                                                    <input type="button" value="+" onclick="addrow(this)" class="btn btn-primary btn-sm shiny">
                                                </td>
                                            </tr><?php endif; ?>
                                    </tbody>
                                    </table>
                                        <input type="submit" value="添加库存" style="width:150px;" class="btn btn-darkorange btn-block">
                                  </form>
                                </div>
                                <div>
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
        function addrow(o) {
            var tr=$(o).parent().parent();
            if($(o).val()=='+'){
                var newtr=tr.clone();
                newtr.find(":button").val("-");
                tr.after(newtr);
            }else{
                tr.remove();
            }
        }
    </script>
    


</body></html>