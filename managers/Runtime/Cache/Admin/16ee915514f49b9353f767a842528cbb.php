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
        textarea{ resize:none;}

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
    <div class="rightcon">
        <div class="right_con">
            <div class="info_page">
                <div class="back div" id="info_display" >
                    <h2 align="center">个人信息</h2>
                    <p align="center" name="personal_name" class="personal_name">姓名：<?php echo ($stuInfo["user_real_name"]); ?></p>
                    <p align="center" name="sex" class="sex">性别:<?php echo ($stuInfo["user_sex"]); ?></p>
                    <p align="center" name="personal_grade" class="personal_grade">年级：<?php echo ($stuInfo["user_grade"]); ?></p>
                    <p align="center" name="personal_age" class="personal_age" >年龄：<?php echo ($stuInfo["user_age"]); ?></p>
                    <p align="center" name="personal_academy" class="personal_academy">院系：<?php echo ($stuInfo["user_academy"]); ?></p>
                    <p align="center" name="personal_phone" class="personal_phone">手机：<?php echo ($stuInfo["user_phone"]); ?></p>
                    <p align="center" name="personal_email" class="personal_email">Email：<?php echo ($stuInfo["user_email"]); ?></p>
                    <p align="center">兴趣爱好:</p>
                    <p align="center" name="personal_hobby" class="personal_hobby"><textarea rows="9" cols="28"><?php echo ($stuInfo["user_hobby"]); ?></textarea></p>
                    <input  type="button" class="btn2" value="修改" class="btn2" name="btn1" onclick="showchange()"/>
                </div>


                <div class="back div" id="info_change" style="display: none">
                    <h2 align="center">个人信息</h2>
                    <form action="<?php echo U('Admin/Student/editStuInfo');?>" method="post">
                        <p align="center" >姓名：<input type="text" class="personal_name" name="user_real_name" value="<?php echo ($stuInfo["user_real_name"]); ?>"/> </p>
                        <p align="center">性别:<label>男<input type="radio" class="male" name="user_sex" value="男"/></label><label>女<input type="radio" class="female" name="user_sex" value="女"/></label></p>
                        <p align="center">年级:<input type="text" class="personal_grade" name="user_grade" value="<?php echo ($stuInfo["user_grade"]); ?>"/></p>
                        <p align="center">年龄:<input type="text" class="personal_age" name="user_age" value="<?php echo ($stuInfo["user_age"]); ?>"/></p>
                        <p align="center">院系:<input type="text" class="personal_academy" name="user_academy" value="<?php echo ($stuInfo["user_academy"]); ?>"></b></p>
                        <p align="center">手机:<input type="text" class="personal_phone" name="user_phone" value="<?php echo ($stuInfo["user_phone"]); ?>"></b></p>
                        <p align="center">Email:<input type="text" class="personal_email" name="user_email" value="<?php echo ($stuInfo["user_email"]); ?>"></b></p>
                        <p align="center">兴趣爱好</p>
                        <p align="center"><textarea rows="8" cols="29" class="personal_hobby" name="user_hobby"  ><?php echo ($stuInfo["user_hobby"]); ?></textarea></p>
                        <input type="submit" class="btn2" value="确定" class="btn2" name="btn1" onclick="showinfo()"/>
                    </form>
                </div>
            </div>

        </div>
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