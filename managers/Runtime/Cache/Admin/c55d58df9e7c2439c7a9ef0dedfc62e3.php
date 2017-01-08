<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <title>试成立审批</title>
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
                    <li><a href="<?php echo U('Admin/Administrator/placeApply');?>">场地审批</a></li>
                    <li><a href="<?php echo U('Admin/Administrator/reimbursement');?>">报销审核</a></li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-indent nav_icon"></i>社团管理<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?php echo U('Admin/Administrator/getViolate');?>">违规登记</a></li>
                    <li><a href="<?php echo U('Admin/Administrator/clubWarning');?>">预警社团</a></li>
                    <li><a href="<?php echo U('Admin/Administrator/clubApply');?>">试成立审批</a></li>
                    <li><a href="<?php echo U('Admin/Administrator/getBriefClub');?>">增删社团</a></li>
                </ul>
            </li>
            <li><a href="UrgentMessage.html"><i class="fa fa-envelope nav_icon"></i>站内信</a></li>
            <li>
                <a href="widgets.html"><i class="fa fa-flask nav_icon"></i>资料接收<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="ClubEvaluate.html">十佳</a></li>
                    <li><a href="ClubEvaluate.html">星评</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-table nav_icon"></i>三大评比<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="TenBestSelect.html">十佳</a></li>
                    <li><a href="StarLevelSelect.html">星评</a></li>
                    <li><a href="MyFavoriteSelect.html">我最喜爱</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-sitemap fa-fw nav_icon"></i>修改主页信息<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="media.html">活动预告</a></li>
                    <li><a href="login.html">学校通知</a></li>
                    <li><a href="login.html">团委通知</a></li>
                    <li><a href="login.html">社团精选</a></li>
                    <li><a href="login.html">轮播图片及信息</a></li>
                </ul>
            </li>
            <li><a href="../index.html">修改密码</a></li>
            <li><a href="<?php echo U('Admin/LoginReg/logout');?>">注销登录</a></li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
</nav>

<div  class="back"  id="page-wrapper">
    <div class="">
        <h3>室外场地审批</h3>
    </div>
    <div class="div-relative">
        <div class="bs-example4 outPlace_applyList div-d " data-example-id="contextual-table">
            <table  class="table">
                <tr class="info">
                    <td width="50px">
                        <form>
                            <input type="checkbox" id="check" onchange="getContent()" checked="true">
                        </form>
                    </td>
                    <th>序号</th>
                    <th>社团名称</th>
                    <th>申请时间</th>
                    <th>申请场地</th>
                    <th>查看详情</th>
                    <th>操作</th>
                </tr>
                <?php if(is_array($outdoorList)): $i = 0; $__LIST__ = $outdoorList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$s): $mod = ($i % 2 );++$i;?><tr class="active" height="30px">
                        <td width="50px">
                            <form>
                                <input type="checkbox" id="check1" accesskey="c" checked="">
                            </form>
                        </td>
                        <td><?php echo ($s["outdoor_id"]); ?></td>
                        <td><?php echo ($s["oapply_org"]); ?></td>
                        <td><?php echo ($s["oapply_time"]); ?></td>
                        <td><?php echo ($s["oapply_place"]); ?></td>
                        <td><input type="button" class="show_inf" value="查看详情" data-vid="<?php echo ($s["outdoor_id"]); ?>"></td>
                        <td><input type="button" value="删除" onclick=""></td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </table>
        </div>
        <!--试成立审批详情-->
        <div class="outPlace_apply" hidden="hidden" >
            <div class="bs-example4 div-d" data-example-id="contextual-table">
                <table  class="table">

                    <tr class="active">
                        <td>申请社团名称:<span id="oapply_org"></span></td>
                        <td>场地借用时间:<span id="oapply_time"></span></td>
                    </tr>
                    <tr>
                        <td>用途:<span id="oapply_act"></span></td>
                        <td>预计参与人数:<span id="oapply_num"></span></td>
                    </tr>
                    <tr>
                        <td>申请场地:<span id="oapply_place"></span></td>
                        <td>申请单位:</td>
                    </tr>
                </table>
                <table class="table">
                    <tr class="success">
                        <td>使用物资:<span id="oapply_text"></span></td>
                    </tr>
                </table>
                <table  class="table">

                    <tr class="info">
                        <th>联系人：<span id="oapply_peo"></span></th>
                        <th>联系方式：<span id="oapply_peo_phone"></span></th>
                        <th>填写日期：</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                </table>
                <div class="col-sm-8 col-sm-offset-2">
                    <button class="btn-success btn">通过</button>
                    <button class="btn-default btn">不通过</button>
                    <button class="btn1" id="return" >返回</button>


                </div>

            </div>

        </div>


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
<script src="/managers/Public/js/common/bootstrap.min.js"></script>
<script type="text/javascript">
    $(".show_inf").click(function(){
        var vid = $(this).attr("data-vid");
        var result;
        $.ajax({
            type : "post",
//			url : "http://localhost:8080/managers9/index.php/Admin/Administrator/outdoorDetail",
//            url : "index.php/Admin/Administrator/outdoorDetail",
            url : "http://58.213.164.146:8011/managers/index.php/Admin/Administrator/outdoorDetail",
            async : false,
            dataType : "json",
            data : {
                "id" : vid
            },

            success:function (data) {
                var str = eval(data);
                result = str;
            },
            error:function (data) {
                alert("ajax操作失败");
            }
        })

        document.getElementById("oapply_org").innerHTML = result["oapply_org"];
        document.getElementById("oapply_time").innerHTML = result["oapply_time"];
        document.getElementById("oapply_act").innerHTML = result["oapply_act"];
        document.getElementById("oapply_num").innerHTML = result["oapply_num"];
        document.getElementById("oapply_text").innerHTML = result["oapply_text"];
        document.getElementById("oapply_peo").innerHTML = result["oapply_peo"];
        document.getElementById("oapply_peo_phone").innerHTML = result["oapply_peo_phone"];
        document.getElementById("oapply_place").innerHTML = result["oapply_place"];

        $('.outPlace_applyList').hide();
        $(".outPlace_apply").show();
    })
    $("#return").click(function(){
        $('.outPlace_applyList').show();
        $('.outPlace_apply').hide();
    })
</script>
</body>
</html>