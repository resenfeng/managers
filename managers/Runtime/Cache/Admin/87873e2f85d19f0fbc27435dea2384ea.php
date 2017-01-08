<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>资金报销</title>
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
    <!--隐藏file按钮-->
    <script type="text/javascript">
        $(document).ready(function (){
            $("#hiddenFile").hide();
        })
    </script>

    <!--报销经费表单样式表-->
    <style>


        #page-wrapper{


            height: 700px;



        }

        .club_name{
            position: absolute;
            top:50%;
            left:5%;
        }
        .club_id{
            position: absolute;
            top:50%;
            left:50%;
        }
        .activity_name{
            position: absolute;
            top:80%;
            left:5%;
        }
        .invoice_pohto{
            border:1px dashed #F00;
            width:600px;
            height:200px;
            margin-top:10px;
            position: absolute;
            top:100%;
            left:5%;
        }

        .upload_file{
            position: absolute;
            top:220%;
            left:60%;
        }

        .found{
            position: absolute;
            top:300%;
            left: 5%;
        }
        .apply_date{
            position: absolute;
            top:300%;
            left: 50%;
        }
        .invoice_title{
            position: absolute;
            top:340%;
            left:5% ;
        }
        .invoice_type{
            position: absolute;
            top:340%;
            left: 50%;
        }
        .news_release{

            position: absolute;
            top:260%;
            left:5%;


        }
        .submit{
            position: relative;
            top:470px;
            left:40%;
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
                        <a href="#">
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
                            <li><a href="<?php echo U('Admin/ClubManager/remApply');?>">经费报销</a></li>
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
                            <li><a href="<?php echo U('Admin/ClubManager/clubIntro');?>">社团简介</a></li>
                            <li><a href="<?php echo U('Admin/ClubManager/setShowInfo');?>">社团活动</a></li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li><a href="<?php echo U('Admin/LoginReg/recruit');?>"><i class="fa fa-envelope nav_icon"></i>社团招新</a></li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>
    <div id="page-wrapper">
        <div class="col-md-12 graphs">

            <div class="xs">
                <h3>经费报销申请</h3>
            </div >
            <!-- 经费报销申请表单 -->
            <form action="<?php echo U('Admin/ClubManager/remApply');?>" method="post"  name="found_apply" id="found_apply" enctype="multipart/form-data">
                <p class="club_name"><b>社团名称：</b><input type="text" name="rem_club_name" id="club_name" size="30" value=""required></p>
                <p class="club_id"><b>社团编号：</b><input type="text" name="rem_club_id" id="club_id" size="30" value=""required></p>
                <p class="activity_name"><b>活动名称：</b><input type="text" name="rem_act_name" id="activity_name" size="30" value=""required></p>
                <p class="invoice_pohto">发票照片：</p>
                <p class="upload_file"><input type="file" name="rem_invoice_pic" id="upload_file" size="30" value=""></p>
                <p class="news_release"><b>新闻稿链接:</b><input  name="rem_new_url" value="" id="news_release" size="30" />
                <p class="found"><b>报销金额：</b><input type="text" name="rem_invoice_money" id="found" size="30" value=""required></p>
                <p class="apply_date"><b>预约日期：</b><input type="date" name="rem_order_date" id="apply_date" size="30" value=""required></p>
                <p class="invoice_title"><b>发票抬头：</b><input type="text" name="rem_invoice_name" id="invoice_title" size="30" value=""required></p>
                <p class="invoice_type"><b>发票类型：</b><input type="text" name="rem_invoice_type" id="invoice_type" size="30" value=""required></p>
                <p class="submit"><input type="submit"name="submit"value="提交"></p>
            </form>
        </div>
        <!-- /#col-md-12 graphs -->
    </div>
</div>
<!-- /#wrapper -->


</body>
</html>