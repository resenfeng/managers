<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>首页</title>
    <link rel="stylesheet" type="text/css" href="/managers/Public/css/student/studentstyle.css" />
    <script type="text/javascript" src="/managers/Public/js/student/jquery-1.6.min.js"></script>
    <script type="text/javascript" src="/managers/Public/js/student/student.js"></script>
    <style>
        body{
            background-image: url("/managers/Public/images/student/bg.jpg");
            background-size: cover;
            background-repeat:no-repeat; /*是否重复*/
            background-attachment:fixed;/*是否随滚动条固定*/
            background-position:center;/*背景图开始位置*/
        }

        .info_page{
            position:absolute;
            left: 40%;

        }
        .info_page b{
            position: relative;
            right: 30%;
        }
        .back{
            background-color: rgba(205, 246, 253, 0.4);
            border-radius: 10px;
        }
        .div{
            width: 400px;
            height: 500px;
        }
        .btn2{
            width: 70px;
            height: 30px;
            font-size: 20px;
            border-radius: 10px;
            background-color: #65cea7;
            left: 40%;
            position: relative;

        }

    </style>
</head>

<body>
<div class="nav-top">
    <span>社团管理个人界面</span>
    <div class="nav-topright">

    </div>
</div>
<div class="nav-down">
    <div class="leftmenu1">
        <div class="menu-oc"><img src="/managers/Public/images/student/menu-all.png" /></div>
        <ul>
            <li>
                <a class="a_list a_list1">个人管理</a>
                <div class="menu_list menu_list_first">
                    <a class="lista_first" href="<?php echo U('Admin/Student/stuInfo');?>" onclick="showinfo()">个人信息</a>
                    <a href="<?php echo U('Admin/Student/applyClub');?>" >参加社团 </a>
                    <a href="<?php echo U('Admin/Student/clubEstablish');?>">成立社团</a>

                    <a href="<?php echo U('Admin/LoginReg/editPwd');?>">修改密码</a>
                    <a href="<?php echo U('Admin/LoginReg/logout');?>">注销登录</a>
                </div>
            </li>

        </ul>
    </div>
    <div class="leftmenu2">
        <div class="menu-oc1"><img src="/managers/Public/images/student/menu-all.png" /></div>
        <ul>
            <li>
                <a class="j_a_list j_a_list1"></a>
                <div class="j_menu_list j_menu_list_first">
                    <span class="sp1"><i></i>个人管理</span>
                    <a class="j_lista_first" href="<?php echo U('Admin/Student/stuInfo');?>" onclick="showinfo()">个人信息</a>
                    <a href="<?php echo U('Admin/Student/applyClub');?>" >参加社团</a>
                    <a href="<?php echo U('Admin/Student/clubEstablish');?>">成立社团</a>

                    <a href="<?php echo U('Admin/LoginReg/editPwd');?>">修改密码</a>
                    <a href="<?php echo U('Admin/LoginReg/logout');?>">注销登录</a>
                </div>
            </li>
        </ul>
    </div>
</div>
</body>
<script type="text/javascript">
    function  showinfo() {
        document.getElementById("info_display").style.display="block";
        document.getElementById("info_change").style.display="none";

    }
    function showchange() {
        document.getElementById("info_display").style.display="none";
        document.getElementById("info_change").style.display="block";

    }

</script>
</html>