<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<title>社团</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- Bootstrap Core CSS -->
	<link href="/managers/Public/css/common/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<!-- Custom CSS -->
	<link href="/managers/Public/css/common/style.css" rel='stylesheet' type='text/css' />
	<!-- Graph CSS -->
	<link href="/managers/Public/css/common/lines.css" rel='stylesheet' type='text/css' />
	<link href="/managers/Public/css/common/font-awesome.css" rel="stylesheet">
	<!-- jQuery -->
	<script src="/managers/Public/js/common/jquery.min.js"></script>
	<!-- Nav CSS -->
	<link href="/managers/Public/css/common/custom.css" rel="stylesheet">
	<!-- Metis Menu Plugin JavaScript -->
	<script src="/managers/Public/js/common/metisMenu.min.js"></script>
	<script src="/managers/Public/js/common/custom.js"></script>
	<!-- Graph JavaScript -->
	<script src="/managers/Public/js/common/d3.v3.js"></script>
	<script src="/managers/Public/js/common/rickshaw.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="/managers/Public/js/common/bootstrap.min.js"></script>
	<style>
		#page-wrapper{
			background-image: url("/managers/Public/images/common/bg.jpg");
			background-size: 100%;
			background-attachment: fixed;
			min-height: 1000px;
			height: auto;
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
					<li>
						<a href="<?php echo U('Admin/ClubManager/recruit');?>"><i class="glyphicon glyphicon-pencil"></i>社团招新</a>
					</li>
				</ul>
			</div>
			<!-- /.sidebar-collapse -->
		</div>
		<!-- /.navbar-static-side -->
	</nav>
	<div id="page-wrapper"></div>
	<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
</body>
</html>