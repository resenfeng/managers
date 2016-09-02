<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- Bootstrap Core CSS -->
	<link href="/managers/Public/css/club/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<!-- Custom CSS -->
	<link href="/managers/Public/css/club/style.css" rel='stylesheet' type='text/css' />
	<link href="/managers/Public/css/club/font-awesome.css" rel="stylesheet">
	<!-- jQuery -->
	<script src="/managers/Public/js/club/jquery.min.js"></script>



	<!----webfonts--->
	<link href='http://fonts.useso.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
	<!---//webfonts--->
	<!-- Bootstrap Core JavaScript -->
	<script src="/managers/Public/js/club/bootstrap.min.js"></script>
	<!--引用判断登录逻辑js文件 -->
	<script type="text/javascript" src="/managers/Public/js/index/login_form.js"></script>
</head>
<body id="login">
<div class="login-logo">
	<a ><img src="/managers/Public/images/index/logo1.png" width="240" length="240" alt=""/></a>
</div>
<div class="app-cam">


	<form action="<?php echo U('Admin/LoginReg/login');?>" method="post" id="form" name="user_form">
		<div class="login-radio">
			<p><label class="label_radio">
				<input type="radio" name="seu" value="student" checked="">学生
			</label>
				<label class="label_radio">
					<input type="radio" name="seu" value="admin" >学团联
				</label>

				<label class="label_radio">
					<input type="radio" name="seu" value="club">社团
				</label></p>
		</div>
		<input type="text" class="text" id="account" name="user_name" value="" placeholder="请输入账号（学生账户为一卡通号）">
		<input type="password" id="pwd" name="user_password" value="" placeholder="密码" >
		<div class="submit"><input type="submit" id="login" name="login" value="登录" onclick="return check();"></div>
</div>
<div class="loginbottom">
	<p align="center"><span align="right"><a  href="<?php echo U('Admin/LoginReg/register');?>">注册新账号</a></span><b>|</b><span><a href="#">忘记密码?</a></span></p>
</div>
</form>

</body>
</html>