<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/html">

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
	<link href="/managers/Public/css/common/custom.css" rel="stylesheet">
	<!-- Metis Menu Plugin JavaScript -->
	<script src="/managers/Public/js/common/metisMenu.min.js"></script>
	<script src="/managers/Public/js/common/custom.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="/managers/Public/js/common/bootstrap.min.js"></script>
    <!--社团申请样式表-->
	<style>
		.btn2{
			background-color: #60d3da;
			border-radius: 5px;
			border: 0;
		}
        .btn3{
            position: absolute;
            left: 20%;
            background-color: #60d3da;
            border-radius: 5px;
            border: 0;
        }
        .btn4{
            position: absolute;
            left: 30%;
            background-color: #60d3da;
            border-radius: 5px;
            border: 0;
        }
		.head_title{
			position:relative;
			left:45%;
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
	</style>
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
			<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="/managers/Public/images/common/1.png" alt=""/><span class="badge"></span></a>
			<ul class="dropdown-menu">
				<li class="dropdown-menu-header text-center">
					<strong>账户设置</strong>
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
		<!--试成立审批列表-->
		<div class="bs-example4 newClub_applyList div-a" data-example-id="contextual-table" >
			<div class="">
				<h3 align="center">试成立社团列表</h3>
			</div>
			<table  class="table">
				<tr class="info">

					<th>序号</th>
					<th>社团名称</th>
					<th>申请时间</th>
					<th>申请状态</th>
					<th>查看详情</th>
					<th>删除申请</th>
				</tr>
				<!--<tr class="active" height="30px">-->
					<!--<td width="50px">-->
						<!--<form>-->
							<!--<input type="checkbox" id="check1" accesskey="c" checked="">-->
						<!--</form>-->
					<!--</td>-->
					<!--<th scope="row">1</th>-->

					<!--<td>松鼠</td>-->
					<!--<td>2016/9/4</td>-->
					<!--<td><input type="button" id="show_inf" class="btn1" value="查看详情" ></td>-->
					<!--<td><input type="button" class="btn2" value="删除" onclick=""></td>-->
				<!--</tr>-->
				<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$s): $mod = ($i % 2 );++$i;?><tr class="active" height="30px">
						
						<td><?php echo ($s["club_apply_id"]); ?></td>
						<td><?php echo ($s["club_name"]); ?></td>
						<td><?php echo ($s["club_apply_time"]); ?></td>
						<td>
							<?php if($s["club_apply_state"] == 1): ?>未审批
								<?php elseif($s["club_apply_state"] == 2): ?>通过
								<?php else: ?>未通过<?php endif; ?>
						</td>
						<td><input type="button" class="show_inf" value="查看详情" data-vid="<?php echo ($s["club_apply_id"]); ?>"></td>
						<td><input type="button"  value="删除" onclick="deleteClubApply('<?php echo ($s["club_apply_id"]); ?>')"></td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			</table>
		</div>

		<!--试成立审批详情-->
		<div class="newClub_applyInfo" hidden="hidden" >
			<div class="bs-example4 div-b" data-example-id="contextual-table">
				<div class="">
					<h3 align="center">试成立社团详情</h3>
				</div>
				<table  class="table">
					<tr class="active">
						<td>申请社团名称:<span id="club_name"></span></td>
					</tr>
					<tr>
						<td>申请社团类别:<span id="club_type"></span></td>
					</tr>
					<tr class="success">
						<td>发起人信息简介:<span id="manager_intro"></span></td>
					</tr>
					<tr>
						<td>申请简述:<span id="club_intro"></span></td>
					</tr>
				</table>
				<!--另起一个发起人信息表-->
				<table  class="table">
					<tr class="info">
						<th>发起人姓名<span id="manager_name"></span></th>
						<th>发起人院系<span id="manager_academy"></span></th>
						<th>发起人联系方式<span id="manager_phone"></span></th>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</table>
				<div class="col-sm-8 col-sm-offset-2">
					<button class="btn-success btn" id="pass">通过</button>
					<button class="btn-default btn" onclick="notPass()">不通过</button>
					<button class="btn-default btn" id="return" >返回</button>
				</div>
			</div>
		</div>
        <!--审批反馈-->
        <div class="newClubInfo_return" hidden="hidden">
            <div class="bs-example4 div-d" data-example-id="contextual-table">
                <div class="">
                    <h3 align="center">请为社团分配账号</h3>
                </div>
				<form action="<?php echo U('Admin/Administrator/setClubAdmin');?>" method="post">
                <table  class="table" border="1">
                    <tr class="active">
                        <td>设置manager的职位:</td>
                        <td><input type="text" name="manager_position" id="manager_position" value=""required style="width:400px"></td>
                    </tr>
                    <tr>
                        <td>申请社团账号:</td>
                        <td><input type="text" name="newClub_account" id="newClub_account" value=""required style="width: 400px" onblur="isExist()"></td>
                    </tr>
                    <tr class="success">
                        <td>申请账号密码:</td>
                        <td><input type="password" name="newClub_password" id="newClub_password" value=""required style="width: 400px"></td>
                    	<input type="hidden" value="" name="clubId" id="clubId">
					</tr>
                </table>

                <div class="col-sm-8 col-sm-offset-2">
                    <input class="btn3" type="submit" id="submit" onclick="alert('提交成功')" value="提交">
                    <input class="btn4" type="button" id="success" value="完成">
                </div>
				</form>
            </div>
        </div>
	</div>
	<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- Nav CSS -->
<script type="text/javascript">
	var temp;
	var tempArray;
	$(".show_inf").click(function(){
		var vid = $(this).attr("data-vid");
		var result;
		$.ajax({
			type : "post",
//			url : "http://localhost:8080/managers9/index.php/Admin/Administrator/outdoorDetail",
			url : "index.php/Admin/Administrator/clubApplyDetail",
//            url : "http://58.213.164.146:8011/managers/index.php/Admin/Administrator/outdoorDetail",
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

		document.getElementById("club_name").innerHTML = result["club_name"];
		document.getElementById("club_type").innerHTML = result["club_type"];
		document.getElementById("manager_intro").innerHTML = result["manager_intro"];
		document.getElementById("club_intro").innerHTML = result["club_intro"];
		document.getElementById("manager_name").innerHTML = result["manager_name"];
		document.getElementById("manager_academy").innerHTML = result["manager_academy"];
		document.getElementById("manager_phone").innerHTML = result["manager_phone"];

		tempArray = result;
		temp = vid;
		$('.newClub_applyList').hide();
		$(".newClub_applyInfo").show();
	})
	$("#return").click(function(){
		$('.newClub_applyList').show();
		$('.newClub_applyInfo').hide();
	})
    $("#pass").click(function(){
		var check = 0;
		$.ajax({
			type : "post",
			url : "index.php/Admin/Administrator/addClub",
			async : false,
			data : {
				"apply" : tempArray
			},

			success:function (data) {
				var str = data;
				if (str == "error"){
					alert("申请已被拒绝或通过");
					check = 1;
				}
				else{
					document.getElementById("clubId").value = str;
					alert("社团创建成功");
				}
			},
			error:function (data) {
				alert("ajax操作失败");
			}
		})
		if (check == 0){
			$(".newClub_applyInfo").hide();
			$(".newClubInfo_return").show();
		}
    })
	
	function notPass() {
		var id = tempArray["club_apply_state"];
		window.location.href="index.php/Admin/Administrator/clubApplyRefuse?id=" + id;
	}
	
	function deleteClubApply(id) {
		window.location.href="index.php/Admin/Administrator/deleteClubApply?id=" + id;
	}

	function isExist() {
		var account = document.getElementById("newClub_account").value;
		$.ajax({
			type : "post",
			url : "index.php/Admin/Administrator/adminIsExist",
			async : false,
			data : {
				"account" : account
			},

			success:function (data) {
				var str = data;
				if (str == "exist"){
					alert("账户已存在，请重新输入!");
					document.getElementById("newClub_account").value="";
					document.getElementById("newClub_account").focus();
				}
			},
			error:function (data) {
				alert("ajax操作失败");
			}
		})
	}
	
    $("#success").click(function(){
        $(".newClubInfo_return").hide();
        $(".newClub_applyList").show();
    })


</script>
</body>
</html>