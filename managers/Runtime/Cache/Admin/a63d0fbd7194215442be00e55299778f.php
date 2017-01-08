<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<title>星级评比参评</title>
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
	<script type="text/javascript">
		function checkAll(checkedState) {
			var chkChild=document.getElementsByName("chkChild");
			for(var i=0;i<chkChild.length;i++)
				chkChild[i].checked=checkedState;
		}
	</script>
	<style>
		.bestClub_list{
			position: absolute;
			left:40%;
			top:20%;
		}
		.head_title{
			position:relative;
			left:1%;
			top:2px;
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
		.div-b{
			position: absolute;
			top: 20%;
			left: 23%;
			width: 1000px;
			height:auto;
			border-radius: 10px;
		}
		.btn{
			position: relative;
			left: 44%;

		}
	</style>
</head>
<body>

<div id="wrapper">
<!-- Navigation -->
	<nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
		<div class="navbar-header">
			<a class="navbar-brand" href="<?php echo U('Admin/Administrator/adminManage');?>">学团联管理</a>
		</div>
		<!--显示站内信模块和个人账户-->
		<ul class="nav navbar-nav navbar-right">
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
							<li><a href="<?php echo U('Admin/Administrator/getBriefClub');?>">社团列表</a></li>
						</ul>
					</li>
					<li><a href="<?php echo U('Admin/Administrator/message');?>"><i class="fa fa-envelope nav_icon"></i>站内信</a></li>
					<li>
						<a href="widgets.html"><i class="fa fa-flask nav_icon"></i>资料接收<span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
							<li><a href="<?php echo U('Admin/Administrator/bestClub');?>">十佳</a></li>
							<li><a href="<?php echo U('Admin/Administrator/starClub');?>">星评</a></li>
							<li><a href="<?php echo U('Admin/Administrator/favoClub');?>">我最喜爱</a></li>
						</ul>
					</li>

					<li>
						<a href="#"><i class="fa fa-sitemap fa-fw nav_icon"></i>修改主页信息<span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
							<li><a href="<?php echo U('Admin/Administrator/actTrailer');?>">活动预告</a></li>
							<li><a href="<?php echo U('Admin/Administrator/brilliantClub');?>">社彩缤纷</a></li>
							<li><a href="<?php echo U('Admin/Administrator/pictureModify');?>">轮播图片及信息</a></li>
						</ul>
					</li>

				</ul>
			</div>
			<!-- /.sidebar-collapse -->
		</div>
		<!-- /.navbar-static-side -->
	</nav>
	<div  class="back"  id="page-wrapper">



		<div class="div-relative">
			<div class="bs-example4 bestClub_list div-a" data-example-id="contextual-table">
				<div class="" align="center">
					<h3>星评申报列表</h3>
				</div>

				<table class="table">
					<thead>
					<tr class="info">

						<th>序号</th>
						<th>社团编号</th>
						<th>社团名称</th>
						<th>是否参评</th>
						<th>查看附件</th>

					</tr>
					</thead>
					<tbody>
					<!--<tr>-->
						<!--<td><input type="checkbox" name="chkChild" value="<?php echo ($s["manager_id"]); ?>"></td>-->
						<!--<th scope="row">1</th>-->
						<!--<td>E1</td>-->
						<!--<td>微软俱乐部</td>-->
						<!--<td>是</td>-->
						<!--<td><input type="button" value="删除" onclick="deleteApply('<?php echo ($s["normal_act_id"]); ?>')"></td>-->
					<!--</tr>-->
					<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$s): $mod = ($i % 2 );++$i;?><tr class="active" height="30px">

							<td><?php echo ($i); ?></td>
							<td><?php echo ($s["star_apply_club_id"]); ?></td>
							<td><?php echo ($s["star_apply_club_name"]); ?></td>
							<td>参评</td>
							<td><a id="myHref" href="http://58.213.164.146:8011/managers/applyFile/<?php echo ($s["star_apply_enclosure"]); ?>" onclick="noEnclosure()"><input type="button" value="查看附件" onclick=""></a></td>
							<script>
								function noEnclosure() {
									var h = document.getElementById("myHref").href;
									if (h == "http://58.213.164.146:8011/managers/applyFile/"){
										alert("没有附件上传！");
										window.event.returnValue = false; 									}
								}
							</script>
						</tr><?php endforeach; endif; else: echo "" ;endif; ?>
					<?php if(is_array($list2)): $i = 0; $__LIST__ = $list2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$s): $mod = ($i % 2 );++$i;?><tr class="active" height="30px">

							<td><?php echo ($i+1); ?></td>
							<td><?php echo ($s["club_id"]); ?></td>
							<td><?php echo ($s["club_name"]); ?></td>
							<td>不参评</td>
							<td>无</td>

						</tr><?php endforeach; endif; else: echo "" ;endif; ?>
					</tbody>
				</table>
			</div>

		</div>
		<!-- /#page-wrapper -->
	</div>
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