<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <title>场地申请</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Bootstrap Core CSS -->
    <link href="Public/css/common/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="Public/css/common/style.css" rel='stylesheet' type='text/css' />
    <link href="Public/css/common/font-awesome.css" rel="stylesheet">
    <link href="Public/css/common/custom.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="Public/js/common/jquery.min.js"></script>
    <script src="Public/js/common/metisMenu.min.js"></script>
    <script src="Public/js/common/custom.js"></script>
    <!----webfonts--->
    <!--<link href='http://fonts.useso.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>-->
    <!---//webfonts--->
    <!-- Bootstrap Core JavaScript -->
    <script src="Public/js/common/bootstrap.min.js"></script>
    <!--场地申请样式表 -->
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
            font-weight: bold;
        }
    </style>
    <!-- 场地类型切换表单效果-->
    <script type="text/javascript">
        function getContent(value) {
            if(value=="indoor") {
                $(".club_outApply").hide();
                $(".club_inApply").show();
            }else{
                $(".club_inApply").hide();
                $(".club_outApply").show();
            }

        }
    </script>
</head>
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
                <h3 class="page-header text-center">场地申请表</h3>
            <!-- 户外场地申请表单 -->
            <form action="<?php echo U('Admin/ClubManager/placeApply');?>" class="form-horizontal" method="post"  name="club_outApply" id="club_outApply">
                <div class="form-group col-md-9">
                    <label for="place_type" class="label-control col-md-2">场地类型:</label>
                    <div class="col-md-2">
                        <select class="form-control" name="place_type" id="place_type" onchange="getContent(this.value)" required>
                            <option value="outdoor" clicked>户外</option>
                            <option value="indoor">室内</option>
                        </select>
                    </div>
                </div>
                <div class="club_outApply">
                    <!--<form action="" method="post"  name="club_outApply" id="club_outApply">-->
                    <div class="form-group col-md-6">
                        <label for="proposer" class="label-control col-md-3">申请社团:</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="oapply_org" id="proposer" size="30" value=""required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="act_date" class="label-control col-md-3">场地借用时间:</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="oapply_time" id="act_date"  value="" required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="act_name" class="label-control col-md-3">用途:</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="oapply_act" id="act_name" size="30" value=""required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="act_num" class="label-control col-md-3">预计参与人数:</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="oapply_num" id="act_num" size="30" value=""required>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <div class="form-group col-md-6">
                            <label for="n_goods" class="label-control col-md-3">使用物资:</label>
                            <div class="col-md-3">
                                <input type="radio" name="normal_act_ifcome_peo" id="n_goods" size="30" value="no" checked>无
                                <input type="radio" name="normal_act_ifcome_peo"  id="y_goods" size="30" value="yes">有
                            </div>
                            <div class="col-md-3"></div>
                            <div class="goods_extra">
                            <label for="goods_extra" class="label-control col-md-3">物资：</label>
                                </div>
                        </div>
                        <div class="goods_extra">
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control " name="oapply_goods" id="goods_extra" size="30" value="">
                            </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="place_name" class="label-control col-md-3">申请场地:</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="oapply_place" id="place_name" size="30" value=""required>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="manager" class="label-control col-md-3">联系人:</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="oapply_peo" id="manager" size="30" value=""required>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                        <label for="manager_phone" class="label-control col-md-3">联系方式:</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="oapply_peo_phone" id="manager_phone" size="30" value=""required>
                        </div>
                    </div>
                        <div class="form-group col-md-6">
                            <label for="apply_date" class="label-control col-md-3">填写日期:</label>
                            <div class="col-md-8">
                                <input type="date" class="form-control" name="oapply_apply_time" id="apply_date" size="30" value=""required>
                            </div>
                        </div>
                        <div class="col-md-5"></div>
                        <div class="form-group col-md-1">
                            <input class="form-control btn-primary" type="submit" name="submit" value="提交"onclick="check()">
                        </div>
                </div>
                    <!--</form>-->
            </form>
            <!-- 室内场地申请表单 -->
            <div class="club_inApply" hidden="hidden">
                <form action="<?php echo U('Admin/ClubManager/placeApply');?>" class="form-horizontal" method="post"  name="club_inApply" id="club_inApply">
                    <div class="form-group col-md-6">
                        <label for="proposer_in" class="label-control col-md-3">申请社团:</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="iapply_org" id="proposer_in" size="30" value=""required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="act_date_in" class="label-control col-md-3">场地借用时间:</label>
                        <div class="col-md-8">
                            <input type="date" class="form-control" name="iapply_time" id="act_date_in" size="30" value=""required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="act_name_in" class="label-control col-md-3">用途:</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="iapply_act" id="act_name_in" size="30" value=""required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="act_num_in" class="label-control col-md-3">预计参与人数:</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="iapply_num" id="act_num_in" size="30" value=""required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="place_name_in" class="label-control col-md-3">申请场地:</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="iapply_place" id="place_name_in" size="30" value=""required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="manager_in" class="label-control col-md-3">联系人:</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="iapply_peo" id="manager_in" size="30" value=""required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="manager_phone_in" class="label-control col-md-3">联系方式:</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="iapply_peo_phone" id="manager_phone_in" size="30" value=""required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="apply_date_in" class="label-control col-md-3">填写日期:</label>
                        <div class="col-md-8">
                            <input type="date" class="form-control" name="iapply_apply_time" id="apply_date_in" size="30"  value=""required>
                        </div>
                    </div>
                    <div class=" col-md-5"></div>
                    <div class="form-group col-md-1">
                        <input class="form-control btn-primary" type="submit" name="submit" value="提交"onclick="check()">
                    </div>
                </form>
            </div>
        </div>
        <!-- /#col-md-12 graphs -->
    </div>
</div>
</div>

<!-- /#wrapper -->
<!-- Nav CSS -->

<!--否时内容隐藏效果 -->
<script type="text/javascript">
    $(".goods_extra").hide();
    $("#y_goods").click(function () {
        $(".goods_extra").show();
    })
    $("#n_goods").click(function () {
        $(".goods_extra").hide();
    })
</script>
</body>
</html>