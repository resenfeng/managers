<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <title>社彩缤纷</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Bootstrap Core CSS -->
    <link href="/managers/Public/css/common/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="/managers/Public/css/common/style.css" rel='stylesheet' type='text/css' />
    <link href="/managers/Public/css/common/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="/managers/Public/js/common/jquery.min.js"></script>
    <!----webfonts--->
    <!--<link href='http://fonts.useso.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>-->
    <!---//webfonts--->

    <style>

        .back{

            background-image: url("/managers/Public/images/common/bg.jpg");
            background-size: 100%;
        }
        .div-d{ position:absolute;left:30%;top:25%;border-radius: 10px;}
        .btn2{
            background-color: rgba(103, 250, 245, 0.56);
            position: absolute;
            left: 80%;
            top: 30px;
            border-radius: 5px;
            border: 0;
        }
        .btn3{
            background-color: rgba(250, 19, 32, 0.69);
            position: absolute;

            border-radius: 5px;
            border: 0;
        }




    </style>
</head>
<body>

<!-- Navigation -->
<nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <a class="navbar-brand" href="<?php echo U('Admin/Administrator/adminManage');?>">学团联管理</a>
    </div>
    <!--显示站内信模块和个人账户-->
    <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="/managers/Public/images/common/1.png" alt=""/><span class="badge">9</span></a>
            <ul class="dropdown-menu">
                <li class="dropdown-menu-header text-center">
                    <strong>账户设置</strong>
                <li class="m_2"><a href="#"><i class="fa fa-user"></i>更换头像</a></li>
                <li class="m_2"><a href="#"><i class="fa fa-wrench"></i>修改密码</a></li>
                <li class="m_2"><a href="<?php echo U('Admin/LoginReg/logout');?>"><i class="fa fa-lock"></i>退出当前账户</a></li>
            </ul>
        </li>
    </ul>
    <!--显示站内信模块和个人账户-->
    <!--设置搜索-->
    <form class="navbar-form navbar-right">
        <input type="text" class="form-control" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
    </form>
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="#"><i class="fa fa-check-square-o nav_icon"></i>申请审批<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="#">活动审批<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li><a href="<?php echo U('Admin/Administrator/normalActApply');?>">常规活动</a></li>
                                <li><a href="<?php echo U('Admin/Administrator/spActApply');?>">文体专项活动</a></li>
                            </ul>
                        </li>
                        <li><a href="#">场地审批<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li><a href="<?php echo U('Admin/Administrator/indoorApply');?>">室内场地</a></li>
                                <li><a href="<?php echo U('Admin/Administrator/outdoorApply');?>">室外场地</a></li>
                            </ul>

                        <li><a href="<?php echo U('Admin/Administrator/reimbursement');?>">报销审核</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="fa fa-indent nav_icon"></i>社团管理<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="<?php echo U('Admin/Administrator/getViolate');?>">违规登记</a></li>
                        <li><a href="<?php echo U('Admin/Administrator/clubWarning');?>">预警社团</a></li>
                        <li><a href="<?php echo U('Admin/Administrator/clubApply');?>">试成立审批</a></li>
                        <li><a href="<?php echo U('Admin/Administrator/getBriefClub');?>">注销社团</a></li>
                    </ul>
                </li>
                <li><a href="UrgentMessage.html"><i class="fa fa-envelope nav_icon"></i>站内信</a></li>
                <li>
                    <a href="widgets.html"><i class="fa fa-flask nav_icon"></i>资料接收<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="ClubEvaluate.html">十佳</a></li>
                        <li><a href="ClubEvaluate.html">星评</a></li>
                        <li><a href="ClubEvaluate.html">我最喜爱</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="fa fa-sitemap fa-fw nav_icon"></i>修改主页信息<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="media.html">活动预告</a></li>
                        <li><a href="<?php echo U('Admin/Administrator/brilliantclub');?>">社彩缤纷</a></li>
                        <li><a href="login.html">轮播图片及信息</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>

<div  class="back"  id="page-wrapper">
    <div class="bs-example4 div-d" data-example-id="contextual-table">
        <div>
            <h3>社彩缤纷</h3>
        </div>
        <div>
        <button class="btn2">添加</button>
    </div>

        <table border="0" class="table">
            <thead>
            <tr class="success">
                <th width="150px">序号</th>
                <th width="150px">社团编号</th>
                <th width="150px">社团名称</th>
                <th width="150px">操作</th>
            </tr>
            </thead>
            <tr >
                <th width="150px">1</th>
                <th width="150px">1</th>
                <th width="150px">青年志愿者协会</th>
                <th width="150px"><button class="btn3">删除</button></th>
            </tr>

        </table>

    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- Nav CSS -->
<link href="/managers/Public/css/common/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="/managers/Public/js/common/metisMenu.min.js"></script>
<script src="/managers/Public/js/common/custom.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="/managers/Public/js/common/bootstrap.min.js"></script>
</body>
</html>