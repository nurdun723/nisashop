
  $.ajax({
    type:"GET",
    url:"/shop/index.php/home/user/checklogin",
    dataType:"json",
    success:function(data){
      if(data){
        $("#login_check").html('您好'+data.username+'<a href="/shop/index.php/home/user/logout">退出</a>');
      }else{
        $("#login_check").html('欢迎光临本店，<a href="/shop/index.php/home/user/login" target="_blank">登录</a><span>|</span><a href="/shop/index.php/home/user/reg" target="_blank">注册</a><span>|</span><a href="/" target="_blank">我的账户</a><span>|</span><a href="/" target="_blank">我的订单</a>');
      }
    }
  });

