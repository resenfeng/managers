<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <title>主席团人员修改</title>
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
        hr{
            noshade:noshade;
        }

        .head_title{
            position: absolute;
            left: 35%;
        }
        #page-wrapper{
            height: 700px;
        }
        .manager_id{
            position: absolute;
            left: 30%;
            top: 140%;
        }
        #manager_id{
            position: absolute;
            left: 295%;
            top: 0%;
        }
        .manager_position {
            position: absolute;
            left: 30%;
            top: 240%;
        }
        #manager_position{
            position: absolute;
            left: 180%;
            top: 0%;
        }
        .manager_phone{
            position: absolute;
            left: 30%;
            top: 340%;
        }
        #manager_phone{
            position: absolute;
            left: 130%;
            top: 0%;
        }
        .manager_qq{
            position: absolute;
            left: 30%;
            top: 440%;
        }
        #manager_qq{
            position: absolute;
            left: 225%;
            top: 0%;
        }
        .manager_email{
            position: absolute;
            left: 30%;
            top: 540%;
        }
        #manager_email{
            position: absolute;
            left: 163%;
            top: 0%;
        }

        .submit{
            position: absolute;
            left: 40%;
            top: 670%;
        }
        .return{
            position: absolute;
            top: 670%;
            left: 45%;


        }
        .back{

            background-image: url("/managers/Public/images/common/bg.jpg");
            background-size: 100%;
            background-attachment: fixed;
            min-height: 1000px;
            height: auto;
        }
        .div-a{ position:absolute;left:35%;top:20%;z-index:80;width:500px;height:470px;background-color: rgba(205, 248, 255, 0.39);border-radius: 10px;
        }
        .div-b{position:absolute;left:10%;top:20%; z-index:100;}

        .Seu_ModifyPresidium p input{
            position: relative;
            top:20%;
            border-radius: 8px;
            border-color: rgba(19, 212, 87, 0.53);
            background-color: rgba(227, 227, 238, 0.58);

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
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-comments-o"></i><span class="badge"></span></a>
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
                <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="/managers/Public/images/common/1.png" alt=""/><span class="badge"></span></a>
                <ul class="dropdown-menu">
                    <li class="dropdown-menu-header text-center">
                        <strong>账户设置</strong>
                   
                    <li class="m_2"><a href="<?php echo U('Admin/LoginReg/editPwd');?>"><i class="fa fa-wrench"></i>修改密码</a></li>
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
                    </li>
                    <ul class="nav" id="side-menu">
                        <!--<li><a href="<?php echo U('Admin/ClubManager/clubManage');?>"><i class="fa fa-dashboard fa-fw nav_icon"></i>社团管理</a></li>-->
                        <li><a href="#"><i class="fa fa-indent nav_icon"></i>社团信息修改<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="<?php echo U('Admin/ClubManager/managersList');?>">主席团</a></li>
                                <li><a href="<?php echo U('Admin/ClubManager/membersList');?>">会员</a></li>
                                <li><a href="<?php echo U('Admin/ClubManager/clubInfo');?>">社团信息</a></li>
                            </ul>
                            <!-- /.nav-second-level -->
                    <li>
                        <a href="#"><i class="fa fa-check-square-o nav_icon"></i>申请<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo U('Admin/ClubManager/activityApply');?>">活动申请</a></li>
                            <li><a href="<?php echo U('Admin/ClubManager/rbmApply');?>">经费报销</a></li>
                            <li><a href="<?php echo U('Admin/ClubManager/placeApply');?>">场地申请</a></li>
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

        <div >
            <div class="div-a "></div>

            <div class="col-md-12 div-b graphs">
                <div class="head_title">
                    <h3 >主席团人员修改</h3>
                </div>

                <!-- 社团人员修改表单 -->
                <div class="Seu_ModifyPresidium">

                    <form action="" method="post"  name="club_tenTest" id="club_tenTest" >

                        <p class="manager_id"><b>管理ID</b><input  name="manager_id" id="manager_id" size="20" value="<?php echo ($managerInfo["manager_id"]); ?>" readonly="readonly" required></p>
                        <p class="manager_position"><b>管理者职位</b><input  type="text" name="manager_position" id="manager_position" size="20" value="" placeholder="<?php echo ($managerInfo["manager_position"]); ?>"required></p>
                        <p class="manager_phone"><b>管理者联系方式</b><input  type="text" name="manager_phone" id="manager_phone" size="20" value="" placeholder="<?php echo ($managerInfo["manager_phone"]); ?>"required></p>
                        <p class="manager_qq"><b>管理者QQ</b><input type="text"  name="manager_qq" id="manager_qq" size="20" value="" placeholder="<?php echo ($managerInfo["manager_qq"]); ?>"required></p>
                        <p class="manager_email"><b>管理者Email</b><input type="text"  name="manager_email" id="manager_email" size="20" value="" placeholder="<?php echo ($managerInfo["manager_email"]); ?>"required></p>
                        <p class="submit"><input type="submit"name="submit"value="保存"></p>
                        <p class="return"><input type="button"name="return"value="返回"  onclick="javascript:history.back(-1);"></p>

                    </form>
                </div>
            </div>

        </div>
        <!-- /#col-md-12 graphs -->
    </div>
    <!-- /#page-wrapper -->
    <!-- /#wrapper -->
</div>
</body>
</html>