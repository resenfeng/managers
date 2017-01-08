<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<title>报销审核</title>
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
	<!--报销样式表-->
	<style>
		.btn2{
			background-color: rgba(103, 250, 245, 0.56);
			border-radius: 5px;
			border: 0;
		}
		.detail_btn{
			position: absolute;
			left:49%;
		}
		.back{

			background-image: url("/managers/Public/images/common/bg.jpg");
			background-size: 100%;
		}
		#page-wrapper {

			height: 700px;
		}
		.money_approval{
			width: auto;
			position: absolute;
			top:20%;
			left: 30%;

		}
		.money_approval_detail{
			width: auto;
			position: absolute;
			top:20%;
			left: 20%;

		}
		.club_name{
			position: absolute;
			top:50%;
			left:5%;
		}
		.club_id{
			position: absolute;
			top:50%;
			left:50%;
		}
		.activity_name{
			position: absolute;
			top:80%;
			left:5%;
		}
		.invoice_pohto{
			border:1px dashed #F00;
			width:600px;
			height:200px;
			margin-top:10px;
			position: absolute;
			top:100%;
			left:5%;
		}
		。div-d{
			position:absolute;left:30px;top:30px;z-index:100;border-radius: 10px}


		.found{
			position: absolute;
			top:300%;
			left: 5%;
		}
		.apply_date{
			position: absolute;
			top:300%;
			left: 50%;
		}
		.invoice_title{
			position: absolute;
			top:340%;
			left:5% ;
		}
		.invoice_type{
			position: absolute;
			top:340%;
			left: 50%;
		}
		.news_release{

			position: absolute;
			top:260%;
			left:5%;


		}
		.return{
			position:relative;
			top:470px;
			left:30%;
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
	<div class="back" id="page-wrapper">
		<div class="money_approval bs-example4 div-b" id="money_approval" style="display: block">
			<div class="xs">
				<h3>报销申请列表</h3>
			</div >
			<table  class="table">

				<tr class="info">
					<th>社团名称</th>
					<th>社团编号</th>
					<th>活动名称</th>
					<th>报销金额</th>
					<th>预约日期</th>
					<th>申请状态</th>
					<th>查看详情</th>
					<th>操作</th>
				</tr>
				<!--<tr >-->
				<!--<td>clubname</td>-->
				<!--<td>clubnum</td>-->
				<!--<td>activityname</td>-->
				<!--<td>money</td>-->
				<!--<td>applydate</td>-->
				<!--<td><input type="button" class="btn2"  value="查看"  onclick="show()"></td>-->
				<!--</tr>-->
				<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$s): $mod = ($i % 2 );++$i;?><tr class="active">
						<td><?php echo ($s["rbm_club_name"]); ?></td>
						<td><?php echo ($s["rbm_club_id"]); ?></td>
						<td><?php echo ($s["rbm_act_name"]); ?></td>
						<td><?php echo ($s["rbm_invoice_money"]); ?></td>
						<td><?php echo ($s["rbm_order_date"]); ?></td>
						<td>
							<?php if($s["rem_state"] == 1): ?>未审批
								<?php elseif($s["rem_state"] == 2): ?>通过
								<?php else: ?>未通过<?php endif; ?>
						</td>
						<td><input type="button"  value="查看详情" onclick="show('<?php echo ($s["rbm_id"]); ?>')"></td>
						<td><input type="button"  value="删除" onclick="deleteReimbursement('<?php echo ($s["rbm_id"]); ?>')"></td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			</table>
		</div>
		<div class=" money_approval_detail bs-example4 div-b"  id="moneyform" style="display: none" >

			<div class="xs">
				<h3>经费报销申请</h3>
			</div >
			<!-- 经费报销申请详细单 -->
			<table  class="table">

				<tr class="info">

					<th width="300px">社团名称:<span id="rbm_club_name"></span></th>
					<th width="300px">社团编号:<span id="rbm_club_id"></span></th>
					<th width="300px">活动名称:<span id="rbm_act_name"></span></th>
				</tr>
			</table>

			<table  class="table">
				<tr >
					<th>新闻稿链接:<span id="rbm_new_url"></span></th>
				</tr>
			</table>
			<table  class="table">
				<tr class="success">
					<th>报销金额:<span id="rbm_invoice_money"></span></th>
					<th>发票抬头:<span id="rbm_invoice_name"></span></th>
				</tr>
			</table>
			<table  class="table">

				<th>发票照片:<span id="rbm_invoice_pic"></span></th>

			</table>

			<div class="col-sm-8 col-sm-offset-2">
				<button class="btn-default btn" ><a id="reimbursement_enclosure" href="" onclick="noEnclosure()">下载附件</a></button>
				<button class="btn-success btn" onclick="pass()">通过</button>
				<button class="btn-default btn" onclick="notPass()">不通过</button>
				<button class="btn-default btn" id="return" onclick="unshow()">返回</button>
				<script>
					function noEnclosure() {
						var h = document.getElementById("reimbursement_enclosure").href;
						if (h == "http://58.213.164.146:8011/managers/applyFile/"){
							alert("没有附件上传！");
							window.event.returnValue = false; 									}
					}
				</script>
			</div>
		</div>
		<!-- /#page-wrapper -->
	</div>
</div>
<!-- /#wrapper -->
<!-- Nav CSS -->
<script>
	var temp;
	function show(vid) {
		var result;
		temp = vid;
		$.ajax({
			type : "post",
			url : "index.php/Admin/Administrator/reimbursementDetail",
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

		document.getElementById("rbm_club_name").innerHTML = result["rbm_club_name"];
		document.getElementById("rbm_club_id").innerHTML = result["rbm_club_id"];
		document.getElementById("rbm_act_name").innerHTML = result["rbm_act_name"];
		document.getElementById("rbm_new_url").innerHTML = result["rbm_new_url"];
		document.getElementById("rbm_invoice_money").innerHTML = result["rbm_invoice_money"];
		document.getElementById("rbm_invoice_name").innerHTML = result["rbm_invoice_name"];
		document.getElementById("rbm_invoice_pic").innerHTML = result["rbm_invoice_pic"];

		document.getElementById("reimbursement_enclosure").href = "http://58.213.164.146:8011/managers/applyFile/" + result["rem_enclosure"];

		document.getElementById("moneyform").style.display="block";
		document.getElementById("money_approval").style.display="none";
	}
	function unshow(){
		document.getElementById("moneyform").style.display="none";
		document.getElementById("money_approval").style.display="block";
	}

	function pass() {
		window.location.href="index.php/Admin/Administrator/reimbursementApprove?id=" + temp;
	}

	function notPass() {
		window.location.href="index.php/Admin/Administrator/reimbursementRefuse?id=" + temp;
	}

	function deleteReimbursement(id) {
		window.location.href="index.php/Admin/Administrator/deleteReimbursement?id=" + id;
	}
</script>
<link href="/managers/Public/css/common/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="/managers/Public/js/common/metisMenu.min.js"></script>
<script src="/managers/Public/js/common/custom.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="/managers/Public/js/common/bootstrap.min.js"></script>
</body>
</html>