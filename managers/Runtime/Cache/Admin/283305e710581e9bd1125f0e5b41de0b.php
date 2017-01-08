<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <title>修改密码</title>
    <style>
        .back{

            background-image: url("/managers/Public/images/common/bg.jpg");
            background-size: 100%;
        }
    </style>
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
    <!--<link href='http://fonts.useso.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>-->
    <!---//webfonts--->
    <!-- Bootstrap Core JavaScript -->
    <script src="/managers/Public/js/club/bootstrap.min.js"></script>
    <!--引用判断登录逻辑js文件 -->
    <script type="text/javascript" src="/managers/Public/js/index/login_form.js"></script>
</head>
<body  id="login"> 
<div >
     <div class="login-logo">
         <a ><img src="/managers/Public/images/index/logo1.png" width="240" length="240" alt=""/></a> 
</div>
      <div class="app-cam"> 
    <form action="<?php echo U('Admin/LoginReg/editPwd');?>" method="post" id="form" name="user_form"> 
        <input type="password" class="old_pwd" id="ole_pwd" name="user_password" value="" placeholder="请输入旧密码"> 
        <input type="password" id="new_pwd" name="user_new_password" value="" placeholder="请输入新密码" > 
        <input type="password" id="new_pwdCheck" name="user_new_passwordCheck" value="" placeholder="请再次输入新密码" > 
        <div class="submit"> 
            <input type="submit" id="editCheck" name="editCheck" value="确认修改密码" onclick="return check();"> 
        </div> 
    </form> 
</div> 
</div> 
<script>
    /*
     * 制作人：王鑫
     * 日期：2.16、9/13
     * 内容：判断修改密码逻辑
     */


    //检测属性是否为空函数
    function isEmpty(name,str){
        if(name.value.length==0){
            alert(str);
            name.focus();
            return true;
        }
    }

    //检测属性是否符合规范函数
    function test(reg,name,str){
        if(!reg.test(name.value)){
            alert(str);
            name.value="";
            name.focus();
            return true;
        }
    }

    //主函数
    function check(){
        var pwd=user_form.user_password;
        var npwd=user_form.user_new_password;
        var rnpwd=user_form.user_new_passwordCheck;
        //检测是否为空
        if(isEmpty(pwd,"旧密码不能为空！")){
            return false;
        }else if(isEmpty(npwd,"请填写新密码！")) {
            return false;
        } else if(isEmpty(rnpwd,"请确认新密码！")){
                return false;
        }

        //检测修改密码格式是否正确
        //检测密码格式是否正确
        var reg_pwd=/^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{8,16}$/;
        if(test(reg_pwd,npwd,"新密码格式错误(必须且只含有数字和字母,8-16位)!")){
            rpwd.value="";
            return false;
        }
        //检测两次密码是否一致
        if(npwd.value!=rnpwd.value){
            alert("两次密码输入不一致！");
            rpwd.value="";
            rpwd.focus();
            return false;
        }
        // alert("登录成功！")

    }
</script>
</body>
</html>