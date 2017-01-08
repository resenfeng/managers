<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <title>社团活动简介</title>
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
    <!-- Bootstrap Core JavaScript -->
    <script src="/managers/Public/js/common/bootstrap.min.js"></script>
    <!-- Nav CSS -->
    <link href="/managers/Public/css/common/custom.css" rel="stylesheet">
    <!-- Metis Menu Plugin JavaScript -->
    <script src="/managers/Public/js/common/metisMenu.min.js"></script>
    <script src="/managers/Public/js/common/custom.js"></script>
    <!--社团活动-->
    <style>
        h2{
            text-align: center;
        }
        #page-wrapper{
            height: 3400px;
        }
        #page-wrapper{
            background-image: url("/managers/Public/images/common/bg.jpg");
            background-size: 100%;
            background-attachment: fixed;
        }

        #page-wrapper input{
            border-radius: 8px;
            border-color: rgba(19, 212, 87, 0.53);
            background-color: rgba(227, 227, 238, 0.58);
        }
        #page-wrapper textarea{
            resize:none;
            border-radius: 8px;
            border-color: rgba(19, 212, 87, 0.53);
            background-color: rgba(227, 227, 238, 0.58);

        }
        #page-wrapper h2{
            position: relative;
            top: 20px;
        }
        .activity_name{
            position: relative;
            left: 20%;
            top: 40px;
        }
        .activity_introduction1 p{
            position: relative;
            left:20%;
            top: 60px;
        }
        .activity_introduction1 input{
            position: relative;
            left: 70%;
        }
        .destination{
            position: relative;
            left: 20%;
            top: 30px;
        }

        .activity_introduction1  b{
            position: relative;
            top:55px;
            left: 20%;
        }
        .activity_introduction2 b{
            position: relative;
            top: 55px;
            left: 20%;
        }
        .activity_introduction2 p{
            position: relative;
            left: 20%;
            top: 53px;
        }
        .activity_introduction3 b{
            position: relative;
            top: 55px;
            left: 20%;
        }
        .activity_introduction3 p{
            position: relative;
            left: 20%;
            top: 53px;
        }
        .activity_introduction4 b{
            position: relative;
            top: 55px;
            left: 20%;
        }
        .activity_introduction4 p{
            position: relative;
            left: 20%;
            top: 53px;
        }
        .activity_introduction5 b{
            position: relative;
            top: 55px;
            left: 20%;
        }
        .activity_introduction5 p{
            position: relative;
            left: 20%;
            top: 120px;
        }
        #picture1{
            position: relative;
            left: 20%;
            top: 55px;

        }
        #picture2{
            position: relative;
            left: 20%;
            top: 55px;
        }
        #picture3{
            position: relative;
            left: 20%;
            top: 46px;
        }
        #picture4{
            position: relative;
            left: 20%;
            top: 49px;
        }
        #picture5{
            position: relative;
            left: 20%;
            top: 60px;
        }
        .activity_introduction2 input{
            position: relative;
            left: 70%;
        }
        .activity_introduction3 input{
            position: relative;
            left: 70%;
        }
        .activity_introduction4 input{
            position: relative;
            left: 70%;
        }
        .activity_introduction5 input{
            position: relative;
            left: 70%;
        }
        .activity_video{
            width: 500px;
            height: 370px;
            position: relative;
            top:110px;
            left: 20%;
        }
        .activity_video input{
            position: relative;
            left: 110%;
        }
        .video{
            position: relative;
            top:90px;
            left: 20%;
        }
        .btn{
            position: relative;
            top:150px;
            left: 30%;
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
                        <a href="#">
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
                    <!--<li class="m_2"><a href="#"><i class="fa fa-user"></i>更换头像</a></li>-->
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
                            <!--<li><a href="<?php echo U('Admin/ClubManager/applyState');?>">申请进度</a></li>-->
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
        <div id="page1" style="display: block">
            <h2>社团活动</h2>
            <p class="activity_name"><b> 活动名称:</b><input type="text" name="act_name" id="activity_name1" value="<?php echo ($showInfo["act_name"]); ?>" readonly="readonly" ></p>
            <div class="activity_introduction1">
                <b>首页图片:</b>
                <div class="destination" id="picture1"style="width:500px;height:300px;border:1px solid #000000;"><img src="<?php echo ($picUrl[0]); ?>" /></div>
            </div>
            <div class="activity_introduction2">
                <b>活动简介1:</b>
                <p class="club_abstract2">
                    <textarea rows="5" cols="45"  name="" value="" readonly="readonly"><?php echo ($showInfo["act_context1"]); ?></textarea>
                </p>

                <div class="Destination" id="picture2"style="width:500px;height:300px;border:1px solid #000000;"><img src="<?php echo ($picUrl[1]); ?>" /></div>
            </div>
            <div class="activity_introduction3">
                <b>活动简介2:</b>
                <p class="club_abstract3">
                    <textarea type="textarea" rows="5" cols="45"  name="" class="club_abstract1" value="" readonly="readonly"><?php echo ($showInfo["act_context2"]); ?></textarea>
                </p>

                <div class="destination" id="picture3"style="width:500px;height:300px;border:1px solid #000000;"><img src="<?php echo ($picUrl[2]); ?>" /></div>
            </div>
            <div class="activity_introduction4">
                <b>活动简介3:</b>
                <p class="club_abstract4">
                    <textarea type="textarea" rows="5" cols="45"  name="" class="club_abstract1" value="" readonly="readonly"><?php echo ($showInfo["act_context3"]); ?></textarea>
                </p>

                <div class="destination" id="picture4"style="width:500px;height:300px;border:1px solid #000000;"><img src="<?php echo ($picUrl[3]); ?>" /></div>
            </div>
            <div class="activity_introduction5">
                <b>二维码:</b>
                <div class="destination" id="picture5"style="width:500px;height:300px;border:1px solid #000000;"><img src="<?php echo ($picUrl[4]); ?>" /></div>
            </div>
            <P class="video"><b>视频</b></P>
            <div style="border:1px solid black " class="activity_video">
                <video controls="controls" height="350px" width="500px">
                    <source src="<?php echo ($showInfo["act_video"]); ?>" type="video/mp4">
                </video>
            </div>
            <input type="button" value="修改" class="btn" id="modify" onclick="showpage2()">
        </div>

        <div id="page2" style="display: none">
            <form enctype="multipart/form-data" action="<?php echo U('Admin/ClubManager/setShowInfo');?>" method="post" >
                <h2>社团活动</h2>
                <p class="activity_name"><b> 活动名称:</b><input type="text" name="act_name" id="activity_name2"  ></p>
                <div class="activity_introduction1">
                    <b>首页图片:</b>

                    <input type="file" class="imgUpload1" name="act_pic1" draggable="true" single/>  <!--允许file控件接受的文件类型-->
                    <div class="destination" id="img1" style="width:500px;height:300px;border:1px solid #000000;"></div>
                </div>
                <div class="activity_introduction2">
                    <b>活动简介1:</b>
                    <p class="club_abstract1">
                        <textarea rows="5" cols="45"  name="act_context1" value="" ></textarea>
                    </p>
                    <input type="file" class="imgUpload2" name="act_pic2" draggable="true" single/>  <!--允许file控件接受的文件类型-->
                    <div class="destination" id="img2" style="width:500px;height:300px;border:1px solid #000000;"></div>
                </div>
                <div class="activity_introduction3">
                    <b>活动简介2:</b>
                    <p class="club_abstract2">
                        <textarea rows="5" cols="45"  name="act_context2" id="club_abstract2" value="" ></textarea>
                    </p>
                    <input type="file" class="imgUpload3" name="act_pic3" draggable="true" single/>  <!--允许file控件接受的文件类型-->
                    <div class="destination" id="img3" style="width:500px;height:300px;border:1px solid #000000;"></div>
                </div>
                <div class="activity_introduction4">
                    <b>活动简介3:</b>
                    <p class="club_abstract3">
                        <textarea rows="5" cols="45"  name="act_context3" id="club_abstract3" value="" ></textarea>
                    </p>
                    <input type="file" class="imgUpload4" name="act_pic4" draggable="true" single/>  <!--允许file控件接受的文件类型-->
                    <div class="destination" id="img4" style="width:500px;height:300px;border:1px solid #000000;"></div>
                </div>
                <div class="activity_introduction5">
                    <b>二维码:</b>
                    <input type="file" class="imgUpload5" name="act_pic5" draggable="true" single/>  <!--允许file控件接受的文件类型-->
                    <div class="destination" id="img5" style="width:500px;height:300px;border:1px solid #000000;"></div>
                    <P class="video"><b>视频</b></P>
                    <div style="border:1px solid black " class="activity_video">
                        <input type="file" class="videoUp" name="act_video" />
                        <video controls="controls" height="350px" width="500px">
                            <source src="视频地址" type="video/mp4">
                        </video>
                    </div>
                    <input type="submit" value="完成" class="btn" id="finish" onclick="showpage1()">
            </form>
        </div>
    </div>
</div>
<!-- /#wrapper -->

</body>
<!--加载并且预览图片jss-->
<script type="text/javascript">

    //切换表单
    function showpage2() {
        document.getElementById("page1").style.display="none";
        document.getElementById("page2").style.display="block";
    }
    function showpage1() {
        document.getElementById("page2").style.display="none";
        document.getElementById("page1").style.display="block";

    }
    //处理file input加载的图片文件
    $(document).ready(function(e) {
        //判断浏览器是否有FileReader接口
        if(typeof FileReader =='undefined')
        {
            $("#img1").css({'background':'none'}).html('亲,您的浏览器还不支持HTML5的FileReader接口,无法使用图片本地预览,请更新浏览器获得最好体验');
            //如果浏览器是ie
            if($.browser.msie===true)
            {
                //ie6直接用file input的value值本地预览
                if($.browser.version==6)
                {
                    $(".imgUpload1").change(function(event){
                        //ie6下怎么做图片格式判断?
                        var src = event.target.value;
                        var img = '<img src="'+src+'" width="500px" height="300px" />';
                        $("#img1").empty().append(img);
                    });
                }
                else if($.browser.version==7 || $.browser.version==8)
                {
                    $(".imgUpload1").change(function(event){
                        $(event.target).select();
                        var src = document.selection.createRange().text;
                        var dom = document.getElementById('img1');
                        //使用滤镜 成功率高
                        dom.filters.item('DXImageTransform.Microsoft.AlphaImageLoader').src= src;
                        dom.innerHTML = '';
                    });
                }
            }
            //如果是不支持FileReader接口的低版本firefox 可以用getAsDataURL接口
            else if($.browser.mozilla===true)
            {
                $(".imgUpload1").change(function(event){
                    if(event.target.files)
                    {
                        //console.log(event.target.files);
                        for(var i=0;i<event.target.files.length;i++)
                        {
                            var img = '<img src="'+event.target.files.item(i).getAsDataURL()+'" width="500px" height="300px"/>';
                            $("#img1").empty().append(img);
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
            $(".imgUpload1").change(function(e){
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
                        var img = '<img src="'+e.target.result+'" width="500px" height="300px"/>';
                        $("#img1").empty().append(img);
                    }
                }
            });

            //处理图片拖拽的代码
            var destDom = document.getElementById('img1');
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
                    destDom.innerHTML = '<img src="'+event.target.result+'" width="500px" height="300px"/>';
                };
            },false);
        }
    });

    $(document).ready(function(e) {
        //判断浏览器是否有FileReader接口
        if(typeof FileReader =='undefined')
        {
            $("#img2").css({'background':'none'}).html('亲,您的浏览器还不支持HTML5的FileReader接口,无法使用图片本地预览,请更新浏览器获得最好体验');
            //如果浏览器是ie
            if($.browser.msie===true)
            {
                //ie6直接用file input的value值本地预览
                if($.browser.version==6)
                {
                    $(".imgUpload2").change(function(event){
                        //ie6下怎么做图片格式判断?
                        var src = event.target.value;
                        var img = '<img src="'+src+'" width="500px" height="300px" />';
                        $("#img2").empty().append(img);
                    });
                }
                else if($.browser.version==7 || $.browser.version==8)
                {
                    $(".imgUpload2").change(function(event){
                        $(event.target).select();
                        var src = document.selection.createRange().text;
                        var dom = document.getElementById('img2');
                        //使用滤镜 成功率高
                        dom.filters.item('DXImageTransform.Microsoft.AlphaImageLoader').src= src;
                        dom.innerHTML = '';
                    });
                }
            }
            //如果是不支持FileReader接口的低版本firefox 可以用getAsDataURL接口
            else if($.browser.mozilla===true)
            {
                $(".imgUpload2").change(function(event){
                    if(event.target.files)
                    {
                        //console.log(event.target.files);
                        for(var i=0;i<event.target.files.length;i++)
                        {
                            var img = '<img src="'+event.target.files.item(i).getAsDataURL()+'" width="500px" height="300px"/>';
                            $("#img2").empty().append(img);
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
            $(".imgUpload2").change(function(e){
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
                        var img = '<img src="'+e.target.result+'" width="500px" height="300px"/>';
                        $("#img2").empty().append(img);
                    }
                }
            });

            //处理图片拖拽的代码
            var destDom = document.getElementById('img2');
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
                    destDom.innerHTML = '<img src="'+event.target.result+'" width="500px" height="300px"/>';
                };
            },false);
        }
    });

    $(document).ready(function(e) {
        //判断浏览器是否有FileReader接口
        if(typeof FileReader =='undefined')
        {
            $("#img3").css({'background':'none'}).html('亲,您的浏览器还不支持HTML5的FileReader接口,无法使用图片本地预览,请更新浏览器获得最好体验');
            //如果浏览器是ie
            if($.browser.msie===true)
            {
                //ie6直接用file input的value值本地预览
                if($.browser.version==6)
                {
                    $(".imgUpload3").change(function(event){
                        //ie6下怎么做图片格式判断?
                        var src = event.target.value;
                        var img = '<img src="'+src+'" width="500px" height="300px" />';
                        $("#img3").empty().append(img);
                    });
                }
                else if($.browser.version==7 || $.browser.version==8)
                {
                    $(".imgUpload3").change(function(event){
                        $(event.target).select();
                        var src = document.selection.createRange().text;
                        var dom = document.getElementById('img3');
                        //使用滤镜 成功率高
                        dom.filters.item('DXImageTransform.Microsoft.AlphaImageLoader').src= src;
                        dom.innerHTML = '';
                    });
                }
            }
            //如果是不支持FileReader接口的低版本firefox 可以用getAsDataURL接口
            else if($.browser.mozilla===true)
            {
                $(".imgUpload3").change(function(event){
                    if(event.target.files)
                    {
                        //console.log(event.target.files);
                        for(var i=0;i<event.target.files.length;i++)
                        {
                            var img = '<img src="'+event.target.files.item(i).getAsDataURL()+'" width="500px" height="300px"/>';
                            $("#img3").empty().append(img);
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
            $(".imgUpload3").change(function(e){
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
                        var img = '<img src="'+e.target.result+'" width="500px" height="300px"/>';
                        $("#img3").empty().append(img);
                    }
                }
            });

            //处理图片拖拽的代码
            var destDom = document.getElementById('img3');
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
                    destDom.innerHTML = '<img src="'+event.target.result+'" width="500px" height="300px"/>';
                };
            },false);
        }
    });

    $(document).ready(function(e) {
        //判断浏览器是否有FileReader接口
        if(typeof FileReader =='undefined')
        {
            $("#img4").css({'background':'none'}).html('亲,您的浏览器还不支持HTML5的FileReader接口,无法使用图片本地预览,请更新浏览器获得最好体验');
            //如果浏览器是ie
            if($.browser.msie===true)
            {
                //ie6直接用file input的value值本地预览
                if($.browser.version==6)
                {
                    $(".imgUpload4").change(function(event){
                        //ie6下怎么做图片格式判断?
                        var src = event.target.value;
                        var img = '<img src="'+src+'" width="500px" height="300px" />';
                        $("#img4").empty().append(img);
                    });
                }
                else if($.browser.version==7 || $.browser.version==8)
                {
                    $(".imgUpload4").change(function(event){
                        $(event.target).select();
                        var src = document.selection.createRange().text;
                        var dom = document.getElementById('img4');
                        //使用滤镜 成功率高
                        dom.filters.item('DXImageTransform.Microsoft.AlphaImageLoader').src= src;
                        dom.innerHTML = '';
                    });
                }
            }
            //如果是不支持FileReader接口的低版本firefox 可以用getAsDataURL接口
            else if($.browser.mozilla===true)
            {
                $(".imgUpload4").change(function(event){
                    if(event.target.files)
                    {
                        //console.log(event.target.files);
                        for(var i=0;i<event.target.files.length;i++)
                        {
                            var img = '<img src="'+event.target.files.item(i).getAsDataURL()+'" width="500px" height="300px"/>';
                            $("#img4").empty().append(img);
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
            $(".imgUpload4").change(function(e){
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
                        var img = '<img src="'+e.target.result+'" width="500px" height="300px"/>';
                        $("#img4").empty().append(img);
                    }
                }
            });

            //处理图片拖拽的代码
            var destDom = document.getElementById('img4');
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
                    destDom.innerHTML = '<img src="'+event.target.result+'" width="500px" height="300px"/>';
                };
            },false);
        }
    });

    $(document).ready(function(e) {
        //判断浏览器是否有FileReader接口
        if(typeof FileReader =='undefined')
        {
            $("#img5").css({'background':'none'}).html('亲,您的浏览器还不支持HTML5的FileReader接口,无法使用图片本地预览,请更新浏览器获得最好体验');
            //如果浏览器是ie
            if($.browser.msie===true)
            {
                //ie6直接用file input的value值本地预览
                if($.browser.version==6)
                {
                    $(".imgUpload5").change(function(event){
                        //ie6下怎么做图片格式判断?
                        var src = event.target.value;
                        var img = '<img src="'+src+'" width="500px" height="300px" />';
                        $("#img5").empty().append(img);
                    });
                }
                else if($.browser.version==7 || $.browser.version==8)
                {
                    $(".imgUpload5").change(function(event){
                        $(event.target).select();
                        var src = document.selection.createRange().text;
                        var dom = document.getElementById('img5');
                        //使用滤镜 成功率高
                        dom.filters.item('DXImageTransform.Microsoft.AlphaImageLoader').src= src;
                        dom.innerHTML = '';
                    });
                }
            }
            //如果是不支持FileReader接口的低版本firefox 可以用getAsDataURL接口
            else if($.browser.mozilla===true)
            {
                $(".imgUpload5").change(function(event){
                    if(event.target.files)
                    {
                        //console.log(event.target.files);
                        for(var i=0;i<event.target.files.length;i++)
                        {
                            var img = '<img src="'+event.target.files.item(i).getAsDataURL()+'" width="500px" height="300px"/>';
                            $("#img5").empty().append(img);
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
            $(".imgUpload5").change(function(e){
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
                        var img = '<img src="'+e.target.result+'" width="500px" height="300px"/>';
                        $("#img5").empty().append(img);
                    }
                }
            });

            //处理图片拖拽的代码
            var destDom = document.getElementById('img5');
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
                    destDom.innerHTML = '<img src="'+event.target.result+'" width="500px" height="300px"/>';
                };
            },false);
        }
    });
</script>


</html>