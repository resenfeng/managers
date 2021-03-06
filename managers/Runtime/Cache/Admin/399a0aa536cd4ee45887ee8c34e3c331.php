<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <title>社团简介</title>
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
            window.location.href="<?php echo U('Admin/ClubManager/editClubInfoShow');?>"
        }
    </script>

    <!--社团信息css-->
    <style>
        .clubOrganization_photo{
            border:1px dashed #F00;
            width:400px;
            height:150px;
            margin-top:10px;
            position: absolute;
            top:100%;
            left:5%;
        }
        .club-picture{
            position: absolute;
            top: 10%;
            left: 40%;
        }
        #page-wrapper{
            height: 2500px;
        }
        #page-wrapper{
            background-image: url("/managers/Public/images/common/bg.jpg");
            background-size: 100%;
            background-attachment: fixed;

        }
        #page-wrapper input{
            border-radius: 8px;
            border-color: rgba(19, 212, 87, 0.53);
            background-color: rgba(227, 227, 238, 0.58);
        }
        #page-wrapper textarea{
            resize:none;
            border-radius: 8px;
            border-color: rgba(19, 212, 87, 0.53);
            background-color: rgba(227, 227, 238, 0.58);

        }
        .club_inf{
            position:absolute;
            top: 25%;
            left:50%;
        }

        #club_abstract{
            position: absolute;
            top:60%;
            left:55%;
        }
        .club_abstract textarea{
            position: absolute;
            top:65%;
            left: 33%;
        }
        #club_honor{
            position: absolute;
            top:105%;
            left:55%;
        }
        .club_honor textarea{
            position: absolute;
            top:110%;
            left: 33%;

        }
        .honor_part{
            position: absolute;
            top: 130%;
            left: 33.7%;
        }
        .other_part{
            position: absolute;
            top:170%;
            left: 30%;
        }

        #club_activity{
            position: absolute;
            top: 220%;
            left:55%;
        }
        .club_activity textarea{
            position: absolute;
            top:225%;
            left: 33%;

        }
        .imgUpload1{
            position: absolute;
            top:265px;
            left: 25%;
        }
        .imgUpload2{
            position: absolute;
            top:1800px;
            left: 20%;
        }
        #img2{
            position: absolute;
            top:1650px;
            left: 20%;
        }
        .imgUpload3{
            position: absolute;
            left: 40%;
            top:1800px;
        }
        #img3{
            position: absolute;
            top:1650px;
            left: 40%;
        }
        .imgUpload4{
            position: absolute;
            top:1800px;
            left: 60%;
        }
        #img4{
            position: absolute;
            top:1650px;
            left: 60%;
        }
        .imgUpload5{
            position: absolute;
            top:1800px;
            left: 80%;
        }
        #img5{
            position: absolute;
            top:1650px;
            left: 80%;
        }
        .qr_code{
            position: absolute;
            top:305%;
            left: 57%;
        }
        .imgUpload6{
            position: absolute;
            top:2100px;
            left: 50%;
        }
        #img6{
            position: absolute;
            top:1900px;
            left: 50%;
        }
        #modify{
            position: absolute;
            top: 340%;
            left:57%;
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
    <div id="page-wrapper"     >

        <!--logo and name -->
        <div class="head_top">

            <div class="club-picture">
                <!--允许file控件接受的文件类型-->
                <!--<input type="file" id="imgUpload" name="imgUpload" accept="image/*" multiple/>-->
                <div class="destination" id="img1" style="width:500px;height:250px;border:1px solid #000000;">
                    <img src="http://58.213.164.146:8011/managers/picture/logo/微软俱乐部.jpeg" />
                </div>
            </div>
            <div class="head_inf">
                    <div class="club_inf">
                        <table align="left" valign="bottom" border="0" >
                            <tr>
                                <td width="120px" height="50px"></td><td><input  type="text" id="name" name="name" value="" placeholder="社团名称"></td>
                            </tr>
                            <tr>
                                <td width="120px" height="50px"></td><td><input  type="text" id="slogan" name="slogan" value="" placeholder="会训"></td>
                            </tr>



                        </table>
                    </div>

                    <!--社团简介-->
                    <p class="club_abstract"><b id="club_abstract">社团简介:</b>
                        <textarea rows="10" cols="85"  name="club_abstract" value="" ></textarea>
                    </p>
                    <!--社团荣誉-->
                    <p class="club_honor"><b id="club_honor">社团荣誉:</b>
                        <textarea rows="5" cols="85" name="club_honor" value="" placeholder="社团荣誉总介绍"></textarea>
                    </p>
                    <div class="honor_part">
                        <textarea rows="10" cols="25" name="club_honor1" value="" placeholder="荣誉1介绍" ></textarea>
                        <textarea rows="10" cols="25" name="club_honor2" value="" placeholder="荣誉2介绍"></textarea>
                        <textarea rows="10" cols="25" name="club_honor3" value="" placeholder="荣誉3介绍"></textarea>
                    </div>
                    <!--随便填-->
                    <div class="other_part">
                        <textarea rows="12" cols="30" name="other_part1" value=""  placeholder="社团特色介绍"></textarea>
                        <textarea rows="12" cols="30" name="other_part2" value="" placeholder="社团氛围介绍"></textarea>
                        <textarea rows="12" cols="30" name="other_part3" value="" placeholder="社团其他方面介绍"></textarea>
                    </div>

                    <!--精品活动-->
                    <div class="club_activity">
                        <b id="club_activity">精品活动:</b>
                        <textarea rows="5" cols="85" name="activity1" value=""  placeholder="精品活动总介绍"></textarea>
                    </div>
                     <!--允许file控件接受的文件类型-->
                    <!--<input type="file" id="imgUpload" name="imgUpload" accept="image/*" multiple/>-->
                    <div class="destination" id="img2" style="width:250px;height:200px;border:1px solid #000000;">
                        <img src="nopic.jpg" />
                    </div>
                    <!--允许file控件接受的文件类型-->
                    <!--<input type="file" id="imgUpload" name="imgUpload" accept="image/*" multiple/>-->
                    <div class="destination" id="img3" style="width:250px;height:200px;border:1px solid #000000;">
                        <img src="nopic.jpg" />
                    </div>
                      <!--允许file控件接受的文件类型-->
                    <!--<input type="file" id="imgUpload" name="imgUpload" accept="image/*" multiple/>-->
                    <div class="destination" id="img4" style="width:250px;height:200px;border:1px solid #000000;">
                        <img src="nopic.jpg" />
                    </div>
                     <!--允许file控件接受的文件类型-->
                    <!--<input type="file" id="imgUpload" name="imgUpload" accept="image/*" multiple/>-->
                    <div class="destination" id="img5" style="width:250px;height:200px;border:1px solid #000000;">
                        <img src="nopic.jpg" />
                    </div>
                    <p class="qr_code">二维码</p>

                    <div class="destination" id="img6" style="width:250px;height:200px;border:1px solid #000000;">
                        <img src="nopic.jpg" />
                    </div>
                    <input type="button" id="modify" value="修改" onclick="jump()"/>
            </div>
        </div>
    </div>
</div>
<!-- /#page-wrapper -->
<!-- /#page-wrapper -->

<!-- /#wrapper -->

<link href="Public/css/common/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="Public/js/common/metisMenu.min.js"></script>
<script src="Public/js/common/custom.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="Public/js/common/bootstrap.min.js"></script>
<script>
    function jump() {
        window.location.href="<?php echo U('Admin/ClubManager/editClubInfoShow');?>";

    }
</script>

</body>
</html>