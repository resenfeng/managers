<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<title>文体专项活动审批</title>
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
	<link href="/managers/Public/css/common/custom.css" rel="stylesheet">
	<!-- Metis Menu Plugin JavaScript -->
	<script src="/managers/Public/js/common/metisMenu.min.js"></script>
	<script src="/managers/Public/js/common/custom.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="/managers/Public/js/common/bootstrap.min.js"></script>
	<!--全选-->
	<script type="text/javascript">
		function getContent() {
			if (document.getElementById("check").checked == true) {
				document.getElementById("check1").checked = true;
			}

			else {
				document.getElementById("check1").checked = false;
			}
		}
	</script>
	<style>
		.head_title{
			position:relative;
			left:340px;
			top: 2px;
		}
		.btn-success{
			position: relative;
			left:450px;
			top:50px;
		}
		.btn-default{
			position: relative;
			left:450px;
			top:50px;
		}
		.btn2{
			position: relative;
			left:450px;
			top:50px;
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
			top: 10%;
			left: 23%;
			width: 1000px;
			height: 85%;
			border-radius: 10px;
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
			<div class="bs-example4 spAct_applyList div-a " data-example-id="contextual-table">
				<div class="head_title">
					<h3>文体专项活动审批</h3>
				</div>
				<table  class="table">
					<tr class="info">

						<th>活动序号</th>
						<th>活动名称</th>
						<th>社团名称</th>
						<th>负责人</th>
						<th>负责人联系方式</th>
						<th>申请状态</th>
						<th>查看详情</th>
						<th>操作</th>
					</tr>
					<!--<tr class="active" height="30px">-->
						<!--<td width="50px">-->
							<!--<form>-->
								<!--<input type="checkbox" id="check1" accesskey="c" checked="">-->
							<!--</form>-->
						<!--</td>-->
						<!--<th scope="row">1</th>-->
						<!--<td>编程之美</td>-->
						<!--<td>微软俱乐部</td>-->
						<!--<td>张三</td>-->
						<!--<td>98765432199</td>-->
						<!--<td><input type="button" id="show_inf" class="btn1" value="查看详情" ></td>-->
						<!--<td><input type="button" value="删除" onclick=""></td>-->
					<!--</tr>-->
					<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$s): $mod = ($i % 2 );++$i;?><tr class="active" height="30px">
							
							<td><?php echo ($s["sp_act_id"]); ?></td>
							<td><?php echo ($s["sp_act_name"]); ?></td>
							<td><?php echo ($s["sp_act_club"]); ?></td>
							<td><?php echo ($s["sp_act_head"]); ?></td>
							<td><?php echo ($s["sp_act_head_phone"]); ?></td>
							<td>
								<?php if($s["sp_act_state"] == 1): ?>未审批
									<?php elseif($s["sp_act_state"] == 2): ?>通过
									<?php else: ?>未通过<?php endif; ?>
							</td>
							<td><input type="button" class="show_inf" value="查看详情" data-vid="<?php echo ($s["sp_act_id"]); ?>"></td>
							<td><input type="button" value="删除" onclick="deleteApply('<?php echo ($s["sp_act_id"]); ?>')"></td>
						</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				</table>
			</div>
			<!--文体专项活动申请详情-->
			<div class="spAct_apply" hidden="hidden" >
				<div class="bs-example4 div-b" data-example-id="contextual-table">
					<table  class="table">
						<tr class="active">
							<td>社团名称:<span id="sp_act_club"></span></td>
							<td>活动名称:<span id="sp_act_name"></span></td>
						</tr>
						<tr>
							<td>活动主办方:<span id="sp_act_organizer"></span></td>
							<td>活动承办方:<span id="sp_act_holder"></span></td>
						</tr>
						<tr class="active">
							<td>活动时间:<span id="sp_act_time"></span></td>
							<td>负责人:<span id="sp_act_head"></span></td>
						</tr>
						<tr>
							<td>负责人联系方式:<span id="sp_act_head_phone"></span></td>
							<td>活动形式:<span id="sp_act_type"></span></td>
						</tr>
						<tr class="active">
							<td>活动对象:<span id="sp_act_object"></span></td>
							<td>预计参与人数:<span id="sp_act_num"></span></td>
						</tr>
						<tr>
							<td>活动场地:<span id="sp_act_place"></span></td>
						</tr>

					</table>
					<table class="table">
						<tr class="active">
							<td>外来单位或来宾:<span id="sp_act_come"></span></td>
						</tr>
						<tr>
							<td>活动流程:<span id="sp_act_proc"></span></td>
						</tr>
						<tr class="active">
							<td>备注:<span id="sp_act_text"></span></td>
						</tr>
					</table>
					<div class="col-sm-8 col-sm-offset-2">
						<button class="btn-default btn" ><a id="sp_act_enclosure" href="">下载附件</a></button>
						<button class="btn-success btn" onclick="pass()">通过</button>
						<button class="btn-default btn" onclick="notPass()">不通过</button>
						<button class="btn-default btn" id="return" >返回</button>
					</div>
				</div>
			</div>
		</div>
		<!-- /#page-wrapper -->
	</div>
	<!-- /#wrapper -->
	<!-- Nav CSS -->
	<script type="text/javascript">
		//全局变量，用于通过、不通过和删除操作
		var temp;
		$(".show_inf").click(function(){
			var vid = $(this).attr("data-vid");
			temp = vid;
			var result;
			$.ajax({
				type : "post",
//				url : "http://58.213.164.146:8011/managers/index.php/Admin/Administrator/spActDetail",
				url : "index.php/Admin/Administrator/spActDetail",
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

			document.getElementById("sp_act_club").innerHTML = result["sp_act_club"];
			document.getElementById("sp_act_name").innerHTML = result["sp_act_name"];
			document.getElementById("sp_act_organizer").innerHTML = result["sp_act_organizer"];
			document.getElementById("sp_act_holder").innerHTML = result["sp_act_holder"];
			document.getElementById("sp_act_time").innerHTML = result["sp_act_time"];
			document.getElementById("sp_act_head").innerHTML = result["sp_act_head"];
			document.getElementById("sp_act_head_phone").innerHTML = result["sp_act_head_phone"];
			document.getElementById("sp_act_come").innerHTML = result["sp_act_come"];
			document.getElementById("sp_act_type").innerHTML = result["sp_act_type"];
			document.getElementById("sp_act_place").innerHTML = result["sp_act_place"];
			document.getElementById("sp_act_object").innerHTML = result["sp_act_object"];
			document.getElementById("sp_act_num").innerHTML = result["sp_act_num"];
			document.getElementById("sp_act_proc").innerHTML = result["sp_act_proc"];
			document.getElementById("sp_act_text").innerHTML = result["sp_act_text"];

			document.getElementById("sp_act_enclosure").href = "http://58.213.164.146:8011/managers/applyFile/" + result["normal_act_enclosure"];


			$('.spAct_applyList').hide();
			$(".spAct_apply").show();
		})
		$("#return").click(function(){
			$('.spAct_applyList').show();
			$('.spAct_apply').hide();
		})

		function pass() {
			window.location.href="index.php/Admin/Administrator/spActApprove?id=" + temp;
		}

		function notPass() {
			window.location.href="index.php/Admin/Administrator/spActRefuse?id=" + temp;
		}

		function deleteApply(id) {
			window.location.href="index.php/Admin/Administrator/deleteSpAct?id=" + id;
		}
	</script>
	</div>
</body>
</html>