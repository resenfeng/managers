<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <title>社团信息</title>
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
    <!-- Bootstrap Core JavaScript -->
    <script src="/managers/Public/js/common/bootstrap.min.js"></script>

    <script type="text/javascript">
        function jump() {
            window.location.href="<?php echo U('Admin/ClubManager/editClubInfo');?>"
        }
    </script>

    <!--社团信息css-->
    <style>
        #page-wrapper{
            background-image: url("/managers/Public/images/common/bg.jpg");
            background-size: 100%;
            background-attachment: fixed;
            height: auto;
        }

        textarea{
            resize:none;
        }
        label{
            font-weight:bold;
        }
        .club-logo{
            height:300px
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
                    <!--<li class="m_2"><a href="#"><i class="fa fa-user"></i>更换头像</a></li>-->
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
    <div id="page-wrapper" >

        <!--logo and name -->
        <div class="container">

            <div class="club-logo col-md-3">
                <image  src="<?php echo ($clubInfo["club_logo"]); ?>" name="clubLogo" width=250px height=250px></image>
            </div>
            <form class="form-horizontal">
                <!--社团信息-->
                    <div class="club_inf">
                        <div class="form-group col-md-9"></div>

                        <div class="form-group col-md-3"></div>
                                <div class="form-group col-md-6">
                                    <label for="id" class="label-control col-md-3">社团编号：</label>
                                    <div class="col-md-5">
                                        <input  type="text" class="form-control" id="id" name="id" value="<?php echo ($clubInfo["club_id"]); ?>" readonly="readonly">
                                    </div>
                                </div>

                        <div class="form-group col-md-3"></div>
                                <div class="form-group col-md-6">
                                    <label for="name" class="label-control col-md-3">名称：</label>
                                    <div class="col-md-5">
                                        <input  type="text" class="form-control" id="name" name="name" value="<?php echo ($clubInfo["club_full_name"]); ?>" readonly="readonly">
                                    </div>
                                </div>

                        <div class="form-group col-md-3"></div>
                                <div class="form-group col-md-6">
                                    <label for="found-time" class="label-control col-md-3">成立时间：</label>
                                    <div class="col-md-5">
                                        <input  type="text" class="form-control" id="found-time" name="foundTime" value="<?php echo ($clubInfo["club_time"]); ?>" readonly="readonly">
                                    </div>
                                </div>

                        <div class="form-group col-md-3"></div>
                                <div class="form-group col-md-6">
                                    <label for="leader" class="label-control col-md-3">现任会长/主席：</label>
                                    <div class="col-md-5">
                                        <input  type="text" class="form-control" id="leader" name="leader" value="<?php echo ($clubInfo["manager_name"]); ?>" readonly="readonly">
                                    </div>
                                </div>

                        <div class="form-group col-md-3"></div>
                                <div class="form-group col-md-6">
                                    <label for="club-motto" class="label-control col-md-3">会训：</label>
                                    <div class="col-md-5">
                                        <input  type="text" class="form-control" id="club-motto" name="club-motto" value="<?php echo ($clubInfo["club_slogan"]); ?>" readonly="readonly">
                                    </div>
                    </div>
                        </div>

                    <!--社团简介-->
                <div class="form-group col-md-12"></div>
                <div class="form-group col-md-12"></div>
                <div class="form-group col-md-12"></div>
                <div class="form-group col-md-3"></div>
                <div class="form-group col-md-6">
                    <label for="club_abstract" class="label-control col-md-3">社团简介：</label>
                    <div class="col-md-9">
                        <textarea class="form-control" rows="10" cols="85"  id="club_abstract" name="club_abstract" value="" readonly="readonly"><?php echo ($clubInfo["club_intro"]); ?></textarea>
                    </div>
                </div>


                    <!--社团荣誉-->
                <div class="form-group col-md-12"></div>
                <div class="form-group col-md-3"></div>
                <div class="form-group col-md-6">
                    <label for="club_honor" class="label-control col-md-3">社团荣誉：</label>
                    <div class="col-md-9">
                        <textarea class="form-control" rows="10" cols="85"  id="club_honor" name="club_honor" value="" readonly="readonly"><?php echo ($clubInfo["club_honor"]); ?></textarea>
                    </div>
                </div>
                    <!--精品活动-->
                <div class="form-group col-md-12"></div>
                <div class="form-group col-md-3"></div>
                <div class="form-group col-md-6">
                  <label  class="label-control col-md-3">精品活动：</label>
                </div>
                <div class="form-group col-md-12">
                    <div class="form-group col-md-4"></div>
                    <div class="col-md-5" >
                        <a href="#" name="excellentActivity1" value=""  >精品活动1</a>
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <div class="form-group col-md-4"></div>
                    <div class="col-md-5">
                        <a href="#" name="excellentActivity1" value=""  >精品活动2</a>
                    </div>
                </div>
                <!--修改-->
                <div class="form-group col-md-12"></div>
                <div class="form-group col-md-6"></div>
                    <div class="col-md-1" >
                        <input type="button" class="form-control" id="modify" value="修改" onclick="jump()"/>
                    </div>
        </form>
    </div>
</div>
<!-- /#page-wrapper -->

<!-- /#wrapper -->

<link href="Public/css/common/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="Public/js/common/metisMenu.min.js"></script>
<script src="Public/js/common/custom.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="Public/js/common/bootstrap.min.js"></script>

</body>
</html>