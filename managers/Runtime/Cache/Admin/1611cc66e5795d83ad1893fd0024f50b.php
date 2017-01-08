<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <title>活动申请</title>
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
    <!--/*<link href='http://fonts.useso.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>*/-->
    <!---//webfonts--->
    <!-- Bootstrap Core JavaScript -->
    <script src="/managers/Public/js/common/bootstrap.min.js"></script>
    <script type="text/javascript">
        function getContent(value) {
            if(value=="special"){
                $(".spClub_apply").show();
                $(".noClub_apply").hide();
            }else{
                $(".spClub_apply").hide();
                $(".noClub_apply").show();
            }
        }

    </script>
    <!--活动申请样式表-->
    <style>
        #page-wrapper{
            background-image: url("/managers/Public/images/common/bg.jpg");
            background-size: 100%;
            background-attachment: fixed;
            min-height: 1000px;
            height: auto;
        }
        h3{
            font-weight: bolder;
        }
        label{
            font-weight:bold;
        }
    </style>

</head>
<body>
<div id="wrapper">
    <!-- Navigation -->
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
                    <li><a href="<?php echo U('Admin/ClubManager/recruit');?>"><i class="glyphicon glyphicon-pencil"></i>社团招新</a></li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">
        <div class="container">
                <h3 class="page-header text-center">活动申请表</h3>
            <form action="<?php echo U('Admin/ClubManager/activityApply');?>" method="post" class="form-horizontal" name="noClub_apply" id="noClub_apply" enctype="multipart/form-data">
                <div class="form-group col-md-9">
                    <label for="apply_type" class="label-control col-md-2">活动类型：</label>
                    <div class="col-md-2">
                    <select class="form-control" name="apply_type" id="apply_type" onchange="getContent(this.value)" required>
                        <option value="normal" clicked>常规活动</option>
                        <option value="special">文体专项</option>
                    </select>
                    </div>
                </div>
                <!--一般活动申请表单 -->
                <div class="noClub_apply">
                    <!--<form action="" method="post"  name="noClub_apply" id="noClub_apply">-->
                    <div class="form-group col-md-6">
                        <label for="noClub_stu" class="label-control col-md-3">学生团体：</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="normal_act_club" id="noClub_stu" size="30" value=""required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="noAct_name" class="label-control col-md-3">活动名称：</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="normal_act_name" id="noAct_name" size="30" value=""required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="noAct_sponsor" class="label-control col-md-3">活动主办方：</label>
                        <div class="col-md-8">
                            <input type="text"  class="form-control" name="normal_act_organizer" id="noAct_sponsor" size="30" value=""required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="noAct_organizer" class="label-control col-md-3">活动承办方：</label>
                        <div class="col-md-8">
                            <input type="text"  class="form-control" name="normal_act_holder" id="noAct_organizer" size="30" value=""required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="noAct_time" class="label-control col-md-3">活动时间：</label>
                        <div class="col-md-8">
                            <input type="date" class="form-control" name="normal_act_time" id="noAct_time"  style="height:30px" value=""required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="noManager" class="label-control col-md-3">负责人：</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="normal_act_head" id="noManager" size="30" value=""required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="noManager_phone" class="label-control col-md-3">负责人手机号：</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="normal_act_head_phone" id="noManager_phone" size="30" value=""required>
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                    <label for="noAct_exp" class="label-control col-md-3">举办经历：</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="normal_act_exp" id="noAct_exp" size="30" value=""required>
                    </div>
                </div>
                    <div class="form-group col-md-12">
                        <div class="form-group col-md-6">
                        <label for="n_noCompany" class="label-control col-md-3">外来单位：</label>
                        <div class=" col-md-3">
                            <input type="radio" name="normal_act_ifcome_org" id="n_noCompany" size="30" value="no" checked>无
                            <input type="radio" name="normal_act_ifcome_org"  id="y_noCompany" size="30" value="yes">有
                        </div>
                            <div class="noCompany_extra ">
                            <label for="noCompany_num" class="label-control col-md-2">人数：</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control " name="normal_act_comepeo_num" id="noCompany_num" size="30" value="">
                            </div>
                                </div>
                        </div>
                    <div class="form-group col-md-6">
                        <div class="noCompany_extra ">
                            <label for="noCompany_name" class="label-control col-md-3">实物：</label>
                            <div class="col-md-8">
                            <input type="text" class="form-control " name="normal_act_goods" id="noCompany_name" size="30" value="">
                            </div>
                        </div>
                        </div>
                        </div>

                    <div class="form-group col-md-12">
                    <div class="form-group col-md-6">
                    <label for="n_noGuest" class="label-control col-md-3">有无来宾：</label>
                        <div class=" col-md-3">
                        <input type="radio" name="normal_act_ifcome_peo" id="n_noGuest" size="30" value="no" checked>无
                        <input type="radio" name="normal_act_ifcome_peo"  id="y_noGuest" size="30" value="yes">有
                        </div>
                        <div class="noGuest_extra">
                        <label for="noGuest_name" class="label-control col-md-2">姓名：</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control " name="comer_name" id="noGuest_name" size="30" value="">
                            </div>
                            </div>
                    </div>
                    <div class="form-group col-md-6">
                    <div class="noGuest_extra">
                        <label for="noGuest_company" class="label-control col-md-3">单位：</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control " name="comer_company" id="noGuest_company" size="30" value="">
                        </div>
                    </div>
                </div>
                    </div>

                    <div class="form-group col-md-12">
                        <div class="form-group col-md-6">
                        <label for="noPro" class="label-control col-md-3">活动形式：</label>
                        <div class="col-md-8">
                            <input type="radio" name="normal_act_type" id="noPro" size="30" value="表演类" checked>表演类
                            <input type="radio" name="normal_act_type"  id="noCom" size="30" value="竞赛类">竞赛类
                            <input type="radio" name="normal_act_type" id="noLec" size="30" value="讲座类" >讲座类
                            <input type="radio" name="normal_act_type" id="noExtra" size="30" value="其他">其他
                        </div>
                    </div>
                        </div>
                    <div class="form-group col-md-6">
                        <label for="noAct_object" class="label-control col-md-3">活动对象：</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="normal_act_object" id="noAct_object" size="30" value=""required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="noAct_num" class="label-control col-md-3">预计参与人数：</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="normal_act_num" id="noAct_num" size="30" value=""required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="noAct_place" class="label-control col-md-3">活动场地：</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="normal_act_place" id="noAct_place" size="30" value=""required>
                        </div>
                    </div>

                    <div class="form-group col-md-9">
                        <label for="noAct_num" class="label-control col-md-2">活动流程：</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="normal_act_proc" id="noAct_prog" size="30" value="" required></textarea>
                        </div>
                        </div>

                    <div class="form-group col-md-9">
                        <div class="label-control col-md-2"></div>
                    <div class=" col-md-10">
                        <input type="file" class="form-control" name="act_enclosure" id="noOnload" size="30" value="">
                    </div>
                        </div>
                    <div class="form-group col-md-9">
                        <label for="noRemark" class="label-control col-md-2">备注：</label>
                        <div class=" col-md-10">
                            <textarea class="form-control" name="normal_act_text" id="noRemark" size="30" value="" ></textarea>
                        </div>
                    </div>
                    <div class="form-group col-md-9">
                        *举办经历是指是否曾举办过及举办次数与频率等
                        </div>
                    <div class="col-md-5"></div>
                    <div class="col-md-1">
                        <input class="form-control btn-primary" type="submit" name="noSubmit" value="提交">
                    </div>
                    <!--</form>-->
                </div>
            </form>
            <!-- 文体专项活动申请表单 -->
            <div class="spClub_apply" hidden="hidden">
                <form action="<?php echo U('Admin/ClubManager/activityApply');?>" class="form-horizontal" method="post"  name="spClub_apply" id="spClub_apply" enctype="multipart/form-data">
                    <div class="spClub_apply">
                        <!--<form action="" method="post"  name="noClub_apply" id="noClub_apply">-->
                        <div class="form-group col-md-6">
                            <label for="spClub_stu" class="label-control col-md-3">学生团体：</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="sp_act_club" id="spClub_stu" size="30" value=""required>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="spAct_name" class="label-control col-md-3">活动名称：</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="sp_act_name" id="spAct_name" size="30" value=""required>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="spAct_sponsor" class="label-control col-md-3">活动主办方：</label>
                            <div class="col-md-8">
                                <input type="text"  class="form-control" name="sp_act_organizer" id="spAct_sponsor" size="30" value=""required>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="spAct_organizer" class="label-control col-md-3">活动承办方：</label>
                            <div class="col-md-8">
                                <input type="text"  class="form-control" name="sp_act_holder" id="spAct_organizer" size="30" value=""required>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="spAct_time" class="label-control col-md-3">活动时间：</label>
                            <div class="col-md-8">
                                <input type="date" class="form-control" name="sp_act_time" id="spAct_time"  style="height:30px" value=""required>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="spManager" class="label-control col-md-3">负责人：</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="sp_act_head" id="spManager" size="30" value=""required>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="spManager_phone" class="label-control col-md-3">负责人手机号：</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="sp_act_head_phone" id="spManager_phone" size="30" value=""required>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="spCompany" class="label-control col-md-3">  有无外来人员或组织：</label>
                            <div class="col-md-8">
                                <textarea class="form-control" name="spCompany" id="spCompany" size="30" value=""required></textarea>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="spAct_exp" class="label-control col-md-3">举办经历：</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="sp_act_exp" id="spAct_exp" size="30" value=""required>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <div class="form-group col-md-6">
                            <label for="spPro" class="label-control col-md-3">活动形式：</label>
                            <div class="col-md-8">
                                <input type="radio" name="normal_act_type" id="spPro" size="30" value="表演类" checked>表演类
                                <input type="radio" name="normal_act_type"  id="spCom" size="30" value="竞赛类">竞赛类
                                <input type="radio" name="normal_act_type" id="spLec" size="30" value="讲座类" >讲座类
                                <input type="radio" name="normal_act_type" id="spExtra" size="30" value="其他">其他
                            </div>
                        </div>
                            </div>
                        <div class="form-group col-md-6">
                            <label for="spAct_object" class="label-control col-md-3">活动对象：</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="sprmal_act_object" id="spAct_object" size="30" value=""required>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="spAct_num" class="label-control col-md-3">预计参与人数：</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="sp_act_num" id="spAct_num" size="30" value=""required>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="spAct_place" class="label-control col-md-3">活动场地：</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="sp_act_place" id="spAct_place" size="30" value=""required>
                            </div>
                        </div>
                        <div class="form-group col-md-9">
                            <label for="spAct_num" class="label-control col-md-2">活动流程：</label>
                            <div class="col-md-10">
                                <textarea class="form-control" name="sp_act_proc" id="spAct_prog" size="30" value="" required></textarea>
                            </div>
                        </div>

                        <div class="form-group col-md-9">
                            <div class="label-control col-md-2"></div>
                            <div class=" col-md-10">
                <input type="file" class="form-control" name="act_enclosure" id="spOnload" size="30" value="">
            </div>
        </div>
        <div class="form-group col-md-9">
            <label for="spRemark" class="label-control col-md-2">备注：</label>
            <div class=" col-md-10">
                <textarea class="form-control" name="sp_act_text" id="spRemark" size="30" value="" ></textarea>
            </div>
        </div>
        <div class="col-md-5"></div>
        <div class="col-md-1">
            <input class="form-control btn-primary" type="submit" name="spSubmit" value="提交">
        </div>
    </div>
    </form>
            </div>
        </div>
    </div>
</div>
<!-- /#wrapper -->
<!-- Nav CSS -->
<link href="/managers/Public/css/common/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="/managers/Public/js/common/metisMenu.min.js"></script>
<script src="/managers/Public/js/common/custom.js"></script>
<!--//隐藏否时相关内容效果-->
<script type="text/javascript">
    $(".noCompany_extra").hide();
    $("#y_noCompany").click(function () {
        $(".noCompany_extra").show();
    })
    $("#n_noCompany").click(function () {
        $(".noCompany_extra").hide();
    })


    $(".noGuest_extra").hide();
    $("#y_noGuest").click(function () {
        $(".noGuest_extra").show();
    })
    $("#n_noGuest").click(function () {
        $(".noGuest_extra").hide();
    })
</script>
</body>
</html>