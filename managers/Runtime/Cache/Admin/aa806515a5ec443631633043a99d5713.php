<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <title>资金报销</title>
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
    <!--隐藏file按钮-->
    <script type="text/javascript">
        $(document).ready(function (){
            $("#hiddenFile").hide();
        })
    </script>

    <!--报销经费表单样式表-->
    <style>

        #page-wrapper{
            height: 700px;

        }
        #page-wrapper{
            background-image: url("/managers/Public/images/common/bg.jpg");
            background-size: 100%;
            background-attachment: fixed;
            min-height: 1000px;
            height: auto;
        }

        .graphs{
            padding: 2em 1em;
            background: rgba(242, 244, 248, 0);
            font-family: 'Roboto', sans-serif;
        }
        .club_name{
            position: absolute;
            top:50%;
            left:7%;
        }
        .club_id{
            position: absolute;
            top:50%;
            left:60%;
        }
        .club_id input{
            position: absolute;
            left: 110%;
        }
        .activity_name{
            position: absolute;
            top:80%;
            left:7%;
        }
        .destination{
            border:1px dashed #F00;
            width:600px;
            height:200px;
            margin-top:10px;
            position: absolute;
            top:170%;
            left:15%;
        }
        .photo{
            position: absolute;
            top:170%;
            left: 7%;

        }

        .upload_file{
            position: absolute;
            top:290%;
            left:15%;
        }
        .found{
            position: absolute;
            top:110%;
            left: 7%;
        }
        .apply_date{
            position: absolute;
            top:140%;
            left: 60%;
        }
        .apply_date input{
            position: absolute;
            left: 110%;
        }
        .invoice_title{
            position: absolute;
            top:140%;
            left:7% ;
        }
        .invoice_type{
            position: absolute;
            top:110%;
            left: 60%;
        }
        .invoice_type input{
            position: absolute;
            left: 110%;
        }
        .news_release{

            position: absolute;
            top:80%;
            left:60%;
        }
        #found_apply p input{
            border-radius: 8px;
            border-color: rgba(19, 212, 87, 0.53);
            background-color: rgba(227, 227, 238, 0.58);

        }
        .submit{
            position: relative;
            top:400px;
            left:40%;
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
                            <li><a href="<?php echo U('Admin/ClubManager/clubIntro');?>">社团简介</a></li>
                            <li><a href="<?php echo U('Admin/ClubManager/setShowInfo');?>">社团活动</a></li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li><a href="<?php echo U('Admin/ClubManager/recruit');?>"><i class="glyphicon glyphicon-pencil"></i>社团招新</a></li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>
    <div  id="page-wrapper">
        <div class="col-md-12 graphs">

            <div class="xs" align="center">
                <h3 >经费报销申请</h3>
            </div >
            <!-- 经费报销申请表单 -->
            <form action="<?php echo U('Admin/ClubManager/rbmApply');?>" method="post"  name="found_apply" id="found_apply" enctype="multipart/form-data">
                <p class="club_name"><b>社团名称：</b><input type="text" name="rbm_club_name" id="club_name" size="30" value=""required></p>
                <p class="club_id"><b>社团编号：</b><input type="text" name="rbm_club_id" id="club_id" size="30" value=""required></p>
                <p class="activity_name"><b>活动名称：</b><input type="text" name="rbm_act_name" id="activity_name" size="30" value=""required></p>
                <p class="destination" style="width:250px;height:150px;border:1px solid #000000;"><img src="nopic.jpg" /></p>
                <p class="photo"><b>发票照片:</b></p>
                <p class="upload_file"><input type="file" class="imgUpload"  name="imgUpload" draggable="true" single/></p>
                <p class="news_release"><b>新闻稿链接:</b><input  name="rbm_new_url" value="" id="news_release" size="30" />
                <p class="found"><b>报销金额：</b><input type="text" name="rbm_invoice_money" id="found" size="30" value=""required></p>
                <p class="apply_date"><b>预约日期：</b><input type="date" name="rbm_order_date" id="apply_date" size="30" value=""required></p>
                <p class="invoice_title"><b>发票抬头：</b><input type="text" name="rbm_invoice_name" id="invoice_title" size="30" value=""required></p>
                <p class="invoice_type"><b>发票类型：</b><input type="text" name="rbm_invoice_type" id="invoice_type" size="30" value=""required></p>
                <p class="submit"><input type="submit"name="submit"value="提交"></p>
            </form>
        </div>
        <!-- /#col-md-12 graphs -->
    </div>
</div>
<!-- /#wrapper -->
</body>
<script type="text/javascript">



    //处理file input加载的图片文件
    $(document).ready(function(e) {
        //判断浏览器是否有FileReader接口
        if(typeof FileReader =='undefined')
        {
            $(".destination").css({'background':'none'}).html('亲,您的浏览器还不支持HTML5的FileReader接口,无法使用图片本地预览,请更新浏览器获得最好体验');
            //如果浏览器是ie
            if($.browser.msie===true)
            {
                //ie6直接用file input的value值本地预览
                if($.browser.version==6)
                {
                    $(".imgUpload").change(function(event){
                        //ie6下怎么做图片格式判断?
                        var src = event.target.value;
                        //var src = document.selection.createRange().text;        //选中后 selection对象就产生了 这个对象只适合ie
                        var img = '<img src="'+src+'" width="250px" height="150px" />';
                        $(".destination").empty().append(img);
                    });
                }
                //ie7,8使用滤镜本地预览
                else if($.browser.version==7 || $.browser.version==8)
                {
                    $(".imgUpload").change(function(event){
                        $(event.target).select();
                        var src = document.selection.createRange().text;
                        var dom = document.getElementById('destination');
                        //使用滤镜 成功率高
                        dom.filters.item('DXImageTransform.Microsoft.AlphaImageLoader').src= src;
                        dom.innerHTML = '';
                        //使用和ie6相同的方式 设置src为绝对路径的方式 有些图片无法显示 效果没有使用滤镜好
                        /*var img = '<img src="'+src+'" width="200px" height="200px" />';
                         $(".destination").empty().append(img);*/
                    });
                }
            }
            //如果是不支持FileReader接口的低版本firefox 可以用getAsDataURL接口
            else if($.browser.mozilla===true)
            {
                $(".imgUpload").change(function(event){
                    //firefox2.0没有event.target.files这个属性 就像ie6那样使用value值 但是firefox2.0不支持绝对路径嵌入图片 放弃firefox2.0
                    //firefox3.0开始具备event.target.files这个属性 并且开始支持getAsDataURL()这个接口 一直到firefox7.0结束 不过以后都可以用HTML5的FileReader接口了
                    if(event.target.files)
                    {
                        //console.log(event.target.files);
                        for(var i=0;i<event.target.files.length;i++)
                        {
                            var img = '<img src="'+event.target.files.item(i).getAsDataURL()+'" width="250px" height="150px"/>';
                            $(".destination").empty().append(img);
                        }
                    }
                    else
                    {

                    }
                });
            }
        }
        else
        {

            //多图上传 input file控件里指定multiple属性 e.target是dom类型
            $(".imgUpload").change(function(e){
                for(var i=0;i<e.target.files.length;i++)
                {
                    var file = e.target.files.item(i);
                    //允许文件MIME类型 也可以在input标签中指定accept属性
                    //console.log(/^image\/.*$/i.test(file.type));
                    if(!(/^image\/.*$/i.test(file.type)))
                    {
                        continue;            //不是图片 就跳出这一次循环
                    }

                    //实例化FileReader API
                    var freader = new FileReader();
                    freader.readAsDataURL(file);
                    freader.onload=function(e)
                    {
                        var img = '<img src="'+e.target.result+'" width="250px" height="150px"/>';
                        $(".destination").empty().append(img);
                    }
                }
            });

            //处理图片拖拽的代码
            var destDom = document.getElementById('destination');
            destDom.addEventListener('dragover',function(event){
                event.stopPropagation();
                event.preventDefault();
            },false);

            destDom.addEventListener('drop',function(event){
                event.stopPropagation();
                event.preventDefault();
                var img_file = event.dataTransfer.files.item(0);                //获取拖拽过来的文件信息 暂时取一个
                //console.log(event.dataTransfer.files.item(0).type);
                if(!(/^image\/.*$/.test(img_file.type)))
                {
                    alert('您还未拖拽任何图片过来,或者您拖拽的不是图片文件');
                    return false;
                }
                fReader = new FileReader();
                fReader.readAsDataURL(img_file);
                fReader.onload = function(event){
                    destDom.innerHTML='';
                    destDom.innerHTML = '<img src="'+event.target.result+'" width="250px" height="150px"/>';
                };
            },false);
        }
    });
    </script>
</html>