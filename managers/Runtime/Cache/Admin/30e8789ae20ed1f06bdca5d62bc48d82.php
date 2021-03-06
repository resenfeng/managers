<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<title>主席团</title>
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
		/**主席团信息css*/

		/*团员表单*/
		.presidiumtable{
			border-radius:20px;
			background: rgba(205, 248, 255, 0.39);
			position: relative;
			top:50px;
			width: 90%;
			left: 5%;
		   height: 200px;

		}
		.presidium_table{
			position: relative;
			top:50px;
			height: 130px;
		}
        .btn-warning{
            border-color: #ef553a;
            background: #ef553a;
            width: 50px;
            border-radius:20px;
        }
        .btn-success{
            background-color:rgb(6, 217, 149);
            border-color:rgb(6, 217, 149);
            width: 50px;
            border-radius:20px;
        }
		.back{

			background-image: url("/managers/Public/images/common/bg.jpg");
			background-size: 100%;
		}
		.presidiumtable table td{
			font-size: 2ch;
			font-family: "Microsoft YaHei", sans-serif;
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
	<div class="back" id="page-wrapper">
		<!--    主席团信息-->
		<div class="presidiumtable">
			<table   border="0"  width="100%" class="presidium_table">
				<thead align="center">
				<tr hight="50px" align="center">

					<td width="100px">管理ID</td>
					<td width="200px">管理者职位</td>
					<td width="150px">管理者联系方式</td>
					<td width="150px">管理者QQ</td>
					<td width="150px">管理者Email</td>
					<td width="150px">操作</td>
				</tr>
				</thead>
				<tbody align="center">
				<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$s): $mod = ($i % 2 );++$i;?><tr>

						<td><?php echo ($s["manager_id"]); ?></td>
						<td><?php echo ($s["manager_position"]); ?></td>
						<td><?php echo ($s["manager_phone"]); ?></td>
						<td><?php echo ($s["manager_qq"]); ?></td>
						<td><?php echo ($s["manager_email"]); ?></td>
						<td>
							<div class="btn-group">
								<a class="btn btn-success" href="<?php echo U('ClubManager/editManager?manager_id='.$s['manager_id']);?>">编辑</a>
								<a class="btn btn-warning" onclick="warning()" href="<?php echo U('ClubManager/editManager?manager_id='.$s['manager_id']);?>">删除</a>
							</div>
						</td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				</tbody>
				</table>
			</div>
		</div>
	</div>
<script>
    function warning () {
        alert("你确定要删除吗？");
    }
</script>
</body>
</html>