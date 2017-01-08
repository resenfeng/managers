<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <title>会员修改</title>
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
    <!-- Nav CSS -->
    <link href="/managers/Public/css/common/custom.css" rel="stylesheet">
    <!-- Metis Menu Plugin JavaScript -->
    <script src="/managers/Public/js/common/metisMenu.min.js"></script>
    <script src="/managers/Public/js/common/custom.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="/managers/Public/js/common/bootstrap.min.js"></script>
    <link href="/managers/Public/css/club/presidium.css" rel="stylesheet">
    <!-- chart -->
    <script src="/managers/Public/js/common/Chart.js"></script>
    <!-- //chart -->
    <!--社团人员修改样式表 -->
    <style>
        #page-wrapper{

            height: 600px;
        }
        hr{
            noshade:noshade;
        }

        .head_title{
            position: absolute;
          left: 40%;
        }
        .member_id{
            position: absolute;
            left: 30%;
            top: 140%;
        }
        #member_id{
            position: absolute;
            left: 310%;
            top: 0%;
        }
        .member_name {
            position: absolute;
            left: 30%;
            top: 240%;
        }
        #member_name{
            position: absolute;
            left: 237%;
            top: 0%;
        }
        .member_sex{
            position: absolute;
            left: 30%;
            top: 340%;
        }
        #member_sex{
            position: absolute;
            left:237%;
            top: 0%;
        }
        .member_academy{
            position: absolute;
            left: 30%;
            top: 440%;
        }
        #member_academy{
            position: absolute;
            left: 237%;
            top: 0%;
        }
        .member_grade{
            position: absolute;
            left: 30%;
            top: 540%;
        }
        #member_grade{
            position: absolute;
            left: 237%;
            top: 0%;
        }
        .member_phone{
            position: absolute;
            left: 30%;
            top:400px;
        }
        #member_phone{
            position: absolute;
            left: 158%;
        }
        .Seu_ModifyPresidium p input{
            position: relative;
            top:20%;
            border-radius: 8px;
            border-color: rgba(19, 212, 87, 0.53);
            background-color: rgba(227, 227, 238, 0.58);

        }

        .submit{
            position: absolute;
            left: 40%;
            top: 690%;
        }

        .back{

            background-image: url("/managers/Public/images/common/bg.jpg");
            background-size: 100%;
        }
        .div-a{ position:absolute;left:35%;top:20%;z-index:80;width:500px;height:500px;background-color: rgba(205, 248, 255, 0.39);border-radius: 10px;
        }
        .div-b{position:absolute;left:10%;top:20%; z-index:100;}
        .form-control3{
            position: absolute;
            top: 20%;
            
            border-color: rgba(136, 255, 214, 0.82);

            color: #616161;
            background: rgba(255, 255, 255, 0.69);
            box-shadow: none !important;
            width: 200px;

            height: 30px;
            border-radius: 7px;


        }
    </style>
</head>
<body>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo U('Admin/ClubManager/clubManage');?>">社团管理</a>
        </div>
        <!--显示站内信模块和个人账户-->
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-comments-o"></i><span class="badge">4</span></a>
                <ul class="dropdown-menu">
                    <li class="dropdown-menu-header">
                        <strong>站内信</strong>
                    </li>
                    <li class="avatar">
                        <a href="<?php echo U('Admin/ClubManager/message');?>">
                            <img src="/managers/Public/images/common/1.png" alt=""/>
                            <div>新消息</div>
                            <small>新</small>
                            <span class="label label-info">紧急</span>
                        </a>
                    </li>
                </ul>
            </li>
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
                    <!--<li><a href="<?php echo U('Admin/ClubManager/clubManage');?>"><i class="fa fa-dashboard fa-fw nav_icon"></i>社团管理</a></li>-->
                    <li><a href="#"><i class="fa fa-indent nav_icon"></i>社团信息修改<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo U('Admin/ClubManager/managersList');?>">主席团</a></li>
                            <li><a href="<?php echo U('Admin/ClubManager/membersList');?>">会员</a></li>
                            <li><a href="<?php echo U('Admin/ClubManager/clubInfo');?>">社团信息</a></li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-check-square-o nav_icon"></i>申请<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo U('Admin/ClubManager/activityApply');?>">活动申请</a></li>
                            <li><a href="<?php echo U('Admin/ClubManager/rbmApply');?>">经费报销</a></li>
                            <li><a href="<?php echo U('Admin/ClubManager/placeApply');?>">场地申请</a></li>
                            <li><a href="<?php echo U('Admin/ClubManager/applyState');?>">申请进度</a></li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-table nav_icon"></i>评选资料提交<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo U('Admin/ClubManager/tenBestApply');?>">十佳</a></li>
                            <li><a href="<?php echo U('Admin/ClubManager/starApply');?>">星级</a></li>
                            <li><a href="<?php echo U('Admin/ClubManager/myFavoriteApply');?>">我最喜爱</a></li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw nav_icon"></i>社团信息展示<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo U('Admin/ClubManager/clubInfoShow');?>">社团简介</a></li>
                            <li><a href="<?php echo U('Admin/ClubManager/setShowInfo');?>">社团活动</a></li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="<?php echo U('Admin/ClubManager/recruit');?>"><i class="glyphicon glyphicon-pencil"></i>社团招新</a>
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>
    <div class="back" id="page-wrapper">
        <div>
            <div class="div-a"></div>
        <div class="div-b col-md-12 graphs">
            <div class="head_title">
                <h3>会员修改</h3>
            </div>

            <!-- 社团人员修改表单 -->
            <div class="Seu_ModifyPresidium">
                <form action="" method="post"  name="club_tenTest" id="club_tenTest">
                    <p class="member_id"><b>会员ID</b><input  name="member_id" id="member_id" size="30" value="<?php echo ($memberInfo["member_id"]); ?>" readonly="readonly" required></p>
                    <p class="member_name"><b>会员姓名</b><input  type="text" name="member_name" id="member_name" size="30" value="" placeholder="<?php echo ($memberInfo["member_name"]); ?>"required></p>
                    <p class="member_sex"><b>会员性别</b><input type="text" name="member_sex" id="member_sex" size="30" value="" placeholder="<?php echo ($memberInfo["member_sex"]); ?>"required></p>
                    <p class="member_academy"><b>会员院系</b><input type="text" name="member_academy" id="member_academy" size="30" value="" placeholder="<?php echo ($memberInfo["member_academy"]); ?>"required></p>
                    <p class="member_grade"><b>会员年级</b><input  type="text" name="member_grade" id="member_grade" size="30" value="" placeholder="<?php echo ($memberInfo["member_grade"]); ?>"required></p>
                    <p class="member_phone"><b>会员联系方式</b><input  type="text" name="member_grade" id="member_phone" size="30" value="" placeholder="<?php echo ($memberInfo["member_phone"]); ?>"required></p>
                    <p class="submit"><input type="submit"name="submit"value="保存修改"></p>
                </form>
            </div>
            <!-- /#col-md-12 graphs -->
        </div>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
</div>
</body>
</html>