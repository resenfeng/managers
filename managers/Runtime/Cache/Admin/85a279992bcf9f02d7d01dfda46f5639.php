<?php if (!defined('THINK_PATH')) exit();?>
<html >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>审批进度</title>
    <link rel="stylesheet" type="text/css" href="/managers/Public/css/student/studentstyle.css" />
    <script type="text/javascript" src="/managers/Public/js/student/jquery-1.6.min.js"></script>
    <script type="text/javascript" src="/managers/Public/js/student/student.js"></script>

    <style>
        body{
            background-image: url("/managers/Public/images/student/bg.jpg");
            background-size: 100%;
            background-repeat:no-repeat; /*是否重复*/
            background-attachment:fixed;/*是否随滚动条固定*/
            background-position:center;/*背景图开始位置*/

        }
        .back{
            background-color: rgba(205, 246, 253, 0.4);
            border-radius: 10px;
            width: 600px;

        }

        .btn2{

            position: relative;
            left: 55%;
        }

        .table{
            position:absolute;
            left: 25%;
            top: 40%;

        }
        .table1 tr{
            height: 50px;
            background-color: rgba(0, 170, 241, 0.24);
            font-size: 3ch;
            font-family: "Courier New";
            border-radius: 7px;
        }
        .table2 tr{
            height: 45px;
            font-size: 2.5ch;
            color: #000000;

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
                    <a class="lista_first" href="<?php echo U('Admin/Student/stuInfo');?>">个人信息</a>
                    <a href="<?php echo U('Admin/Student/applyClub');?>" >参加社团 </a>
                    <a href="<?php echo U('Admin/Student/clubEstablish');?>">成立社团</a>
                    <a href="<?php echo U('Admin/Student/stuApply_state');?>">审批进度</a>
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
                    <a class="j_lista_first" href="<?php echo U('Admin/Student/stuInfo');?>" >个人信息</a>
                    <a href="<?php echo U('Admin/Student/applyClub');?>" >参加社团</a>
                    <a href="<?php echo U('Admin/Student/clubEstabish');?>">成立社团</a>
                    <a href="<?php echo U('Admin/Student/stuApply_state');?>">审批进度</a>
                    <a href="<?php echo U('Admin/LoginReg/editPwd');?>">修改密码</a>
                    <a href="<?php echo U('Admin/LoginReg/logout');?>">注销登录</a>
                </div>
            </li>

        </ul>

    </div>
    <div class="rightcon">
        <div class="right_con">

            <div class="table back" id="club_join">

                <table  class="table1">
                    <tr >
                        <th width="200">申请社团名称</th>
                        <th width="200">申请社团类别</th>
                        <th width="200">审核状态</th>
                    </tr>
                    </table>
                <table class="table2">
                    <tr >
                        <th width="200">杂志社</th>
                        <th width="200">文体专项类</th>
                        <th width="200">等待审核</th>
                    </tr>
                </table>

            </div>
        </div>
    </div>
</div>
</body>

</html>