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
    <link href="/managers/Public/association/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="/managers/Public/association/css/style.css" rel='stylesheet' type='text/css' />
    <link href="/managers/Public/association/css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="/managers/Public/association/js/jquery.min.js"></script>
    <!----webfonts--->
    <link href='http://fonts.useso.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <!---//webfonts--->
    <!-- Bootstrap Core JavaScript -->
    <script src="/managers/Public/association/js/bootstrap.min.js"></script>
    <!--引用判断登录逻辑js文件 -->
    <script type="text/javascript" src="/managers/Public/js/login_form.js"></script>
</head>
<body id="login">
<div class="login-logo">
    <a ><img src="/managers/Public/images/logo1.png" width="240" length="240" alt=""/></a>
</div>
<div class="app-cam">
    <h2 class="form-heading">账号登录</h2>
    <form action="<?php echo U('Admin/LoginReg/Login');?>" method="post" id="form" name="user_form">
        <div class="select1"> <select name="user_type">
            <option name="seu" value="admin">学团联账号</option>
            <option name="club" value="club">社团账号</option>
            <option name="student" value="student">学生账号</option>
        </select>
        </div>
        <input type="text" class="text" id="account" name="user_name" value="" placeholder="请输入账号（学生账户为一卡通号）">
        <input type="password" id="pwd" name="user_password" value="" placeholder="密码" >
        <div class="submit"><input type="submit" id="login" name="login" value="登录" onclick="return check();"></div>
        <ul class="new">
            <li aglin="center"><p><a href="#">忘记密码 ?</a><a href="<?php echo U('Admin/LoginReg/Register');?>">注册</a></p></li>
            <div class="clearfix"></div>
        </ul>
    </form>
</div>
</body>
</html>