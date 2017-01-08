<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<title>十佳</title>
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
					<li><a href="#">场地审批<span class="fa arrow"></span></a>
						<ul class="nav nav-third-level">
							<li><a href="<?php echo U('Admin/Administrator/indoorApply');?>">室内场地</a></li>
							<li><a href="<?php echo U('Admin/Administrator/outdoorApply');?>">室外场地</a></li>
						</ul>

					<li><a href="<?php echo U('Admin/Administrator/reimbursement');?>">报销审核</a></li>
				</ul>
			</li>

			<li>
				<a href="#"><i class="fa fa-indent nav_icon"></i>社团管理<span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					<li><a href="<?php echo U('Admin/Administrator/getViolate');?>">违规登记</a></li>
					<li><a href="<?php echo U('Admin/Administrator/clubWarning');?>">预警社团</a></li>
					<li><a href="<?php echo U('Admin/Administrator/clubApply');?>">试成立审批</a></li>
					<li><a href="<?php echo U('Admin/Administrator/getBriefClub');?>">注销社团</a></li>
				</ul>
			</li>
			<li><a href="UrgentMessage.html"><i class="fa fa-envelope nav_icon"></i>站内信</a></li>
			<li>
				<a href="widgets.html"><i class="fa fa-flask nav_icon"></i>资料接收<span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					<li><a href="ClubEvaluate.html">十佳</a></li>
					<li><a href="ClubEvaluate.html">星评</a></li>
					<li><a href="ClubEvaluate.html">我最喜爱</a></li>
				</ul>
			</li>

			<li>
				<a href="#"><i class="fa fa-sitemap fa-fw nav_icon"></i>修改主页信息<span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					<li><a href="media.html">活动预告</a></li>
					<li><a href="login.html">社彩缤纷</a></li>
					<li><a href="login.html">轮播图片及信息</a></li>
				</ul>
			</li>

		</ul>
	</div>
	<!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
</nav>

<div  class="back"  id="page-wrapper">
	<div class="graphs">

		<div class="">
			<h3>常规活动审批</h3>
		</div>



	</div>
	<div class="div-relative">

		<div class="bs-example4 div-b" data-example-id="contextual-table">
			<table class="table">
				<thead>
				<tr>
					<th>#</th>
					<th>Column heading</th>
					<th>Column heading</th>
					<th>Column heading</th>
				</tr>
				</thead>
				<tbody>
				<tr class="active">
					<th scope="row">1</th>
					<td>Column content</td>
					<td>Column content</td>
					<td>Column content</td>
				</tr>
				<tr>
					<th scope="row">2</th>
					<td>Column content</td>
					<td>Column content</td>
					<td>Column content</td>
				</tr>
				<tr class="success">
					<th scope="row">3</th>
					<td>Column content</td>
					<td>Column content</td>
					<td>Column content</td>
				</tr>
				<tr>
					<th scope="row">4</th>
					<td>Column content</td>
					<td>Column content</td>
					<td>Column content</td>
				</tr>
				<tr class="info">
					<th scope="row">5</th>
					<td>Column content</td>
					<td>Column content</td>
					<td>Column content</td>
				</tr>

				</tbody>
			</table>
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
</body>
</html>