<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <title>站内信</title>
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
    <!-- chart -->
    <script src="/managers/Public/js/common/Chart.js"></script>

    <link href="/managers/Public/css/common/custom.css" rel="stylesheet">
    <!-- Metis Menu Plugin JavaScript -->
    <script src="/managers/Public/js/common/metisMenu.min.js"></script>
    <script src="/managers/Public/js/common/custom.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="/managers/Public/js/common/bootstrap.min.js"></script>
    <!-- //chart -->
    <style>
        /**站内信css*/
        .mail{
        }
        th{
            text-align:center;
        }
        td
        {
            text-align:center;
        }

        /*站内信列表*/
        #table_all{
            margin: 0px 50px;

        }
        #head_title{
            height: 90px;
        }
        #mail_head{
            background-color:rgba(173, 255, 47, 0.66);
            position: relative;
            padding: 15px ;
            height: 60px;
            margin:  0px 50px;
        }
        #write{
            position: relative;
            left: 10%;
        }
        #remark{
            position: relative;
            left: 40%;
            top:-20px;
        }
        .table_head{
            padding: 5px;
        }

        /*写信*/
        .mail_type{
            position: absolute;
            left: 20%;
            top: 20%;
        }
        .mail_theme{
            position: absolute;
            left: 20%;
            top: 30%;
        }
        .mail_article{
            position: absolute;
            left: 20%;
            top: 40%;

        }
        #mail_article{
            width: 300%;
        }
        .submit{
            position: absolute;
            left: 30%;
            top: 85%;
        }
        .back{
            position: absolute;
            left: 50%;
            top: 85%;
        }

        /*阅读*/
        .rmail_type{
            position: absolute;
            left: 20%;
            top: 20%;
        }
        .rmail_theme{
            position: absolute;
            left: 20%;
            top: 30%;
        }
        #rmail_theme{
            position: absolute;
            left: 160%;
            top: 0%;
        }
        .rmail_article{
            position: absolute;
            left: 20%;
            top: 40%;

        }
        #rmail_article{
            width: 300%;
        }

        .back{
            position: absolute;
            left: 40%;
            top: 85%;
        }
        .rback{
            position: absolute;
            left: 40%;
            top: 85%;
        }
        #page-wrapper{
            background-image: url("/managers/Public/images/common/bg.jpg");
            background-size: 100%;
            background-attachment: fixed;
            min-height: 1000px;
            height: auto;
        }
        .div-a{
            position: absolute;
            top: 20%;
            left: 23%;
            width: 1000px;
            height: auto;
            border-radius: 10px;
        }


    </style>

    <script type="text/javascript">
        //判断写信返回逻辑
        $(document).ready(function () {
            $(".write_form").hide();
            $(".read_form").hide();

            $("#write").click(function () {
                $(".mail").hide();
                $(".write_form").show();
            })
            $(".submit").click(function () {
                $(".write_form").hide();
                $(".mail").show();
            })
            $(".read").click(function () {
                var vid = $(this).attr("data-vid");
                //后台返回的结果
                var result;
                $.ajax({
                    type: "post",
                    url: "index.php/Admin/ClubManager/msgDetail",
                    async: false,
                    dataType: "json",
                    data: {
                        "id": vid
                    },

                    success: function (data) {
                        var str = eval(data);
                        result = str;
                    },
                    error: function (data) {
                        alert("ajax操作失败");
                    }
                })

                document.getElementById("rmail_type").value = result["msg_level"];
                document.getElementById("rmail_theme").value = result["msg_theme"];
                document.getElementById("rmail_article").value = result["msg_context"];

                $(".mail").hide();
                $(".read_form").show();

            })
            $(".back").click(function () {
                $(".write_form").hide();
                $(".mail").show();
            })
            $(".rback").click(function () {
                history.go(0);
            })
        })
    </script>
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
        <!--    主席团信息-->

        <div class="mail bs-example4 div-a">
            <div id="head_title">
                <h1 align="center">站内信</h1>
            </div>
            <div id="mail_head" >
                <tr>
                    <td><button id="write" onclick="writeMail()">写信</button></td>
                    <td><p id="remark" >红色为紧急，黑色为普通</p></td>
                </tr>
            </div>

            <table id="table_all"  align="center" border="0"  width="91%" >
                <thead>
                <div class="table_head  ">
                    <tr >

                        <td width="50px">状态</td>
                        <td width="100px">发件人</td>
                        <td width="200px">主题</td>
                        <td width="100px">时间</td>
                        <td width="100px">操作</td>
                    </tr>
                </div>
                </thead>
                <tbody>
                <div class="table_body">
                    <?php if(is_array($msg)): $i = 0; $__LIST__ = $msg;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ms): $mod = ($i % 2 );++$i;?><tr >
                            <td>
                                <?php if($ms["msg_state"] == 0): ?><script>
                                        document.write("  <img id=\"mail_state\"  src=\"/managers/Public/images/index/nread.png\"  width=\"20px\">");
                                    </script>
                                    <?php else: ?>
                                    <script>
                                        document.write("  <img id=\"mail_state\"  src=\"/managers/Public/images/index/hread.png\"  width=\"20px\">");
                                    </script><?php endif; ?>
                             </td>
                            <?php if($ms["msg_level"] == 紧急): ?><script>
                                    document.write(" <td style='color: red' >seu</td> <td style='color: red'><?php echo ($ms["msg_theme"]); ?></td> <td style='color: red'><?php echo ($ms["msg_time"]); ?></td>");
                                </script>
                                <?php else: ?>
                                <script>
                                    document.write(" <td>seu</td> <td><?php echo ($ms["msg_theme"]); ?></td> <td><?php echo ($ms["msg_time"]); ?></td>");
                                </script><?php endif; ?>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-success read"  data-vid="<?php echo ($ms["msg_id"]); ?>" >查看</a>
                                    <a class="btn btn-warning" href="<?php echo U('ClubManager/delMsg?msg_id='.$ms['msg_id']);?>">删除</a>
                                </div>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                </tbody>
            </table>

        </div>
        <div class="write_form">
            <form action="" method="post"  name="mail_form" id="mail_form">
                <p class="mail_type"><b>紧急类型：</b>
                    <select name="mail_type" id="mail_type" required>
                        <option value="normal" clicked>普通</option>
                        <option value="urgent">紧急</option>
                    </select>
                </p>
                <p class="mail_theme"><b>主题：</b><input type="text" name="mail_theme" id="mail_theme" size="30" value="" ></p>
                <p class="mail_article"><b>正文：</b><textarea rows="10" name="mail_article" id="mail_article"  value="" required></textarea></p>
                <p class="submit"><input type="submit"name="send"value="发送"></p>
                <p class="back"><input type="button"value="返回"></p>
            </form>
        </div>
        <div class="read_form">
            <form action="" method="post"  name="rmail_form" id="rmail_form">
                    <p class="rmail_type"><b>紧急类型：</b><input type="text" name="rmail_type" id="rmail_type" size="30" value="<?php echo ($msgDetail["msg_level"]); ?>" readonly ></p>
                    <p class="rmail_theme"><b>主题：</b><input type="text" name="rmail_theme" id="rmail_theme" size="30" value="<?php echo ($msgDetail["msg_theme"]); ?>" readonly ></p>
                    <p class="rmail_article"><b>正文：</b><textarea rows="10" clos="85" name="rmail_article" id="rmail_article"  value="<?php echo ($msgDetail["msg_context"]); ?>" readonly><?php echo ($detail["msg_context"]); ?></textarea></p>
                    <p class="rback"><input type="button"value="返回"></p>
            </form>
        </div>
    </div>
</div>
</body>
</html>