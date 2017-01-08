<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <title>社团招新</title>
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
    <!--全选-->
    <script type="text/javascript">
        function getContent() {
            if (document.getElementById("check").checked == true) {
                document.getElementById("check1").checked = true;
            } else {
                document.getElementById("check1").checked = false;
            }
        }

    </script>
    <!--报名申请列表-->
    <style>
        #page-wrapper{
            height: 1000px;
        }
        #page-wrapper{
            background-image: url("/managers/Public/images/common/bg.jpg");
            background-size: 100%;
            background-attachment: fixed;
            min-height: 1000px;
            height: auto;
        }

        .head_title{
            position: absolute;
            left:40%;
            top: 2%;
        }
    </style>
    <script type="text/javascript">
        function checkAll(checkedState) {
            var chkChild=document.getElementsByName("chkChild");
            for(var i=0;i<chkChild.length;i++)
                chkChild[i].checked=checkedState;
        }
    </script>
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
                    <li>
                        <a href="<?php echo U('Admin/ClubManager/recruit');?>"><i class="glyphicon glyphicon-pencil"></i>社团招新</a>
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">
        <div class="col-md-12 graphs">
            <div class="head_title">
                <h3>报名申请表</h3>
            </div>
            <div class="div-relative">
                <div class="bs-example4 recruitList  div-d " data-example-id="contextual-table">
                    <table  class="table">
                        <thead>
                        <tr class="info">
                            <td width="50px">

                            </td>
                            <th>序号</th>
                            <th>姓名</th>
                            <th>年级</th>
                            <th>院系</th>
                            <th>联系方式</th>
                            <th>查看详情</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($recruit)): $i = 0; $__LIST__ = $recruit;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($i % 2 );++$i;?><tr class="active">
                                <td width="50px">
                                    <form>
                                    
                                    </form>
                                </td>
                                <td><?php echo ($r["recruit_id"]); ?></td>
                                <td><?php echo ($r["recruit_name"]); ?></td>
                                <td><?php echo ($r["recruit_grade"]); ?></td>
                                <td><?php echo ($r["recruit_academy"]); ?></td>
                                <td><?php echo ($r["recruit_phone"]); ?></td>
                                <td><a class="btn1" >查看详情</a></td>
                                <td><a class="btn2" href="<?php echo U('Admin/ClubManager/delRecruit?recruit_id='.$r['recruit_id']);?>" >删除</a></td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
                <div class="recruitInfo" hidden="hidden">
                    <div class="bs-example4 div-d" data-example-id="contextual-table">
                        <table  class="table">
                            <tr class="active">
                                <td>姓名:<?php echo ($r["recruit_name"]); ?></td>
                                <td>性别:<?php echo ($r["recruit_sex"]); ?></td>
                            </tr>
                            <tr>
                                <td>籍贯:<?php echo ($r["recruit_area"]); ?></td>
                                <td>出生日期:<?php echo ($r["recruit_birthday"]); ?></td>
                            </tr>
                            <tr class="active">
                                <td>年级:<?php echo ($r["recruit_grade"]); ?></td>
                                <td>院系:<?php echo ($r["recruit_academy"]); ?></td>
                            </tr>
                            <tr>
                                <td>联系方式:<?php echo ($r["recruit_phone"]); ?></td>
                                <td>是否服从调剂:<?php echo ($r["recruit_exchange"]); ?></td>
                            </tr>
                        </table>
                        <table class="table">
                            <tr class="active">
                                <td>兴趣爱好:<?php echo ($r["recruit_hobby"]); ?></td>
                            </tr>
                            <tr>
                                <td>个人简介:<?php echo ($r["recruit_intro"]); ?></td>
                            </tr>
                            <tr class="active">
                                <td>学生工作经历:<?php echo ($r["recruit_exp"]); ?></td>
                            </tr>
                            <tr>
                                <td>对于社团发展的建议:<?php echo ($r["recruit_advice"]); ?></td>
                            </tr>
                        </table>
                        <div class="col-sm-8 col-sm-offset-2">
                            <a class="btn btn_success" href="<?php echo U('Admin/ClubManager/editRecruit?recruit_id='.$r['recruit_id'].'&recruit_state='.'1');?>">通过</a>
                            <a class="btn btn_danger" href="<?php echo U('Admin/ClubManager/editRecruit?recruit_id='.$r['recruit_id'].'&recruit_state='.'0');?>">不通过</a>
                            <a class="btn_warning" >返回</a>
                        </div>
                    </div>
                </div>


                <!-- /#col-md-12 graphs -->
            </div>
        </div>
    </div>
    <!-- /#wrapper -->
    <!-- Nav CSS -->
    <link href="/managers/Public/css/common/custom.css" rel="stylesheet" />
    <!-- Metis Menu Plugin JavaScript -->
    <script src="/managers/Public/js/common/metisMenu.min.js"></script>
    <script src="/managers/Public/js/common/custom.js"></script>
    <!--//隐藏否时相关内容效果-->
    <script type="text/javascript">
        $(".btn1").click(function(){
            $('.recruitList').hide();
            $(".recruitInfo").show();
        })
        $(".btn_warning").click(function(){
            $('.recruitList').show();
            $('.recruitInfo').hide();
        })
        $(".btn2").click(function(){
            alert('是否确定删除？');
        })
    </script>
</body>
</html>