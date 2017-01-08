<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <title>社团信息</title>
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
    <!-- Nav CSS -->
    <link href="/managers/Public/css/common/custom.css" rel="stylesheet">
    <!-- Metis Menu Plugin JavaScript -->
    <script src="/managers/Public/js/common/metisMenu.min.js"></script>
    <script src="/managers/Public/js/common/custom.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="/managers/Public/js/common/bootstrap.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="/managers/Public/js/common/bootstrap.min.js"></script>

    <script type="text/javascript">
        function jump() {
            window.location.href="<?php echo U('Admin/ClubManager/editClubInfo');?>"
        }
    </script>

    <!--社团信息css-->
    <style>
        .clubOrganization_photo{
            border:1px dashed #F00;
            width:400px;
            height:150px;
            margin-top:10px;
            position: absolute;
            top:100%;
            left:5%;
        }
        .club-picture{
            position: absolute;
            top: 10%;
            left: 40%;
        }
        #page-wrapper{
            height: 2500px;
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
        .club_inf{
            position:absolute;
            top: 25%;
            left:50%;
        }

        #club_abstract{
            position: absolute;
            top:60%;
            left:55%;
        }
        .club_abstract textarea{
            position: absolute;
            top:65%;
            left: 33%;
        }
        #club_honor{
            position: absolute;
            top:105%;
            left:55%;
        }
        .club_honor textarea{
            position: absolute;
            top:110%;
            left: 33%;

        }
        .honor_part{
            position: absolute;
            top: 130%;
            left: 33.7%;
        }
        .other_part{
            position: absolute;
            top:170%;
            left: 30%;
        }

        #club_activity{
            position: absolute;
            top: 220%;
            left:55%;
        }
        .club_activity textarea{
            position: absolute;
            top:225%;
            left: 33%;

        }
        .imgUpload1{
            position: absolute;
            top:265px;
            left: 25%;
        }
        .imgUpload2{
            position: absolute;
            top:1850px;
            left: 20%;
        }
        #img2{
            position: absolute;
            top:1650px;
            left: 20%;
        }
        .imgUpload3{
            position: absolute;
            left: 40%;
            top:1850px;
        }
        #img3{
            position: absolute;
            top:1650px;
            left: 40%;
        }
        .imgUpload4{
            position: absolute;
            top:1850px;
            left: 60%;
        }
        #img4{
            position: absolute;
            top:1650px;
            left: 60%;
        }
        .imgUpload5{
            position: absolute;
            top:1850px;
            left: 80%;
        }
        #img5{
            position: absolute;
            top:1650px;
            left: 80%;
        }
        .qr_code{
            position: absolute;
            top:305%;
            left: 57%;
        }
        .imgUpload6{
            position: absolute;
            top:2100px;
            left: 50%;
        }
        #img6{
            position: absolute;
            top:1900px;
            left: 50%;
        }
        #submit{
            position: absolute;
            top: 340%;
            left:57%;
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
                    <li><a href="<?php echo U('Admin/ClubManager/recruit');?>"><i class="glyphicon glyphicon-pencil"></i>社团招新</a></li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>
    <div id="page-wrapper"     >
        <form action="<?php echo U('Admin/ClubManager/editClubShowInfo');?>" method="post" enctype="multipart/form-data">
            <!--logo and name -->
            <div class="head_top">
                <div class="club-picture">
                    <input type="file" class="imgUpload1" name="club_show_info_pic" draggable="true" single/>  <!--允许file控件接受的文件类型-->
                    <!--<input type="file" id="imgUpload" name="imgUpload" accept="image/*" multiple/>-->
                    <div class="destination" id="img1" style="width:500px;height:250px;border:1px solid #000000;"><img src="nopic.jpg" /></div>
                </div>
                <div class="head_inf">


                    <div class="club_inf">
                        <table align="left" valign="bottom" border="0" >

                            <tr>
                                <td width="120px" height="50px"></td>
                                <td><input  type="text" id="name" name="club_name" value="" placeholder="社团名称"></td>
                            </tr>
                            <tr>
                                <td width="120px" height="50px"></td>
                                <td><input  type="text" id="slogan" name="club_slogan" value="" placeholder="会训"></td>
                            </tr>

                        </table>
                    </div>

                    <!--社团简介-->
                    <p class="club_abstract"><b id="club_abstract">社团简介:</b>
                        <textarea rows="10" cols="85"  name="club_intro" value="" ></textarea>
                    </p>
                    <!--社团荣誉-->
                    <p class="club_honor"><b id="club_honor">社团荣誉:</b>
                        <textarea rows="5" cols="85" name="club_honor" value="" placeholder="社团荣誉总介绍"></textarea>
                    </p>
                    <div class="honor_part">
                        <textarea rows="10" cols="25" name="club_show_info_hnor1" value="" placeholder="荣誉1介绍" ></textarea>
                        <textarea rows="10" cols="25" name="club_show_info_hnor2" value="" placeholder="荣誉2介绍"></textarea>
                        <textarea rows="10" cols="25" name="club_show_info_hnor3" value="" placeholder="荣誉3介绍"></textarea>
                    </div>
                    <!--随便填-->
                    <div class="other_part">
                        <textarea rows="12" cols="30" name="club_show_info_context1" value=""  placeholder="社团特色介绍"></textarea>
                        <textarea rows="12" cols="30" name="club_show_info_context2" value="" placeholder="社团氛围介绍"></textarea>
                        <textarea rows="12" cols="30" name="club_show_info_context3" value="" placeholder="社团其他方面介绍"></textarea>
                    </div>

                    <!--精品活动-->
                    <div class="club_activity">
                        <b id="club_activity">精品活动:</b>
                        <textarea rows="5" cols="85" name="club_show_info_jpact" value=""  placeholder="精品活动总介绍"></textarea>
                    </div>
                    <input type="file" class="imgUpload2" name="club_show_info_pic1" draggable="true" single/>  <!--允许file控件接受的文件类型-->
                    <!--<input type="file" id="imgUpload" name="imgUpload" accept="image/*" multiple/>-->
                    <div class="destination" id="img2" style="width:250px;height:200px;border:1px solid #000000;"><img src="nopic.jpg" /></div>
                    <input type="file" class="imgUpload3" name="club_show_info_pic2" draggable="true" single/>  <!--允许file控件接受的文件类型-->
                    <!--<input type="file" id="imgUpload" name="imgUpload" accept="image/*" multiple/>-->
                    <div class="destination" id="img3" style="width:250px;height:200px;border:1px solid #000000;"><img src="nopic.jpg" /></div>
                    <input type="file" class="imgUpload4" name="club_show_info_pic3" draggable="true" single/>  <!--允许file控件接受的文件类型-->
                    <!--<input type="file" id="imgUpload" name="imgUpload" accept="image/*" multiple/>-->
                    <div class="destination" id="img4" style="width:250px;height:200px;border:1px solid #000000;"><img src="nopic.jpg" /></div>
                    <input type="file" class="imgUpload5" name="club_show_info_pic4" draggable="true" single/>  <!--允许file控件接受的文件类型-->
                    <!--<input type="file" id="imgUpload" name="imgUpload" accept="image/*" multiple/>-->
                    <div class="destination" id="img5" style="width:250px;height:200px;border:1px solid #000000;"><img src="nopic.jpg" /></div>
                    <p class="qr_code">二维码</p>
                    <input type="file" class="imgUpload6" name="club_show_info_qrcode" draggable="true" single/>
                    <div class="destination" id="img6" style="width:250px;height:200px;border:1px solid #000000;"><img src="nopic.jpg" /></div>
                    <input type="submit" id="submit" value="确定" onclick="jump()"/>

                </div>
            </div>
        </form>
    </div>
</div>
<!-- /#page-wrapper -->

<!-- /#wrapper -->
<!--加载并且预览图片jss-->
<script type="text/javascript">



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
                        var img = '<img src="'+src+'" width="500px" height="250px" />';
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
                            var img = '<img src="'+event.target.files.item(i).getAsDataURL()+'" width="500px" height="250px"/>';
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
                        var img = '<img src="'+e.target.result+'" width="500px" height="250px"/>';
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
                    destDom.innerHTML = '<img src="'+event.target.result+'" width="500px" height="250px"/>';
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
                        var img = '<img src="'+src+'" width="250px" height="200px" />';
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
                            var img = '<img src="'+event.target.files.item(i).getAsDataURL()+'" width="250px" height="200px"/>';
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
                        var img = '<img src="'+e.target.result+'" width="250px" height="200px"/>';
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
                    destDom.innerHTML = '<img src="'+event.target.result+'" width="250px" height="200px"/>';
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
                        var img = '<img src="'+src+'" width="250px" height="200px" />';
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
                            var img = '<img src="'+event.target.files.item(i).getAsDataURL()+'" width="250px" height="200px"/>';
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
                        var img = '<img src="'+e.target.result+'" width="250px" height="200px"/>';
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
                    destDom.innerHTML = '<img src="'+event.target.result+'" width="250px" height="200px"/>';
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
                        var img = '<img src="'+src+'" width="250px" height="200px" />';
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
                            var img = '<img src="'+event.target.files.item(i).getAsDataURL()+'" width="250px" height="200px"/>';
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
                        var img = '<img src="'+e.target.result+'" width="250px" height="200px"/>';
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
                    destDom.innerHTML = '<img src="'+event.target.result+'" width="250px" height="200px"/>';
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
                        var img = '<img src="'+src+'" width="250px" height="200px" />';
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
                            var img = '<img src="'+event.target.files.item(i).getAsDataURL()+'" width="250px" height="200px"/>';
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
                        var img = '<img src="'+e.target.result+'" width="250px" height="200px"/>';
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
                    destDom.innerHTML = '<img src="'+event.target.result+'" width="250px" height=200px"/>';
                };
            },false);
        }
    });
    $(document).ready(function(e) {
        //判断浏览器是否有FileReader接口
        if(typeof FileReader =='undefined')
        {
            $("#img6").css({'background':'none'}).html('亲,您的浏览器还不支持HTML5的FileReader接口,无法使用图片本地预览,请更新浏览器获得最好体验');
            //如果浏览器是ie
            if($.browser.msie===true)
            {
                //ie6直接用file input的value值本地预览
                if($.browser.version==6)
                {
                    $(".imgUpload5").change(function(event){
                        //ie6下怎么做图片格式判断?
                        var src = event.target.value;
                        var img = '<img src="'+src+'" width="250px" height="200px" />';
                        $("#img6").empty().append(img);
                    });
                }
                else if($.browser.version==7 || $.browser.version==8)
                {
                    $(".imgUpload6").change(function(event){
                        $(event.target).select();
                        var src = document.selection.createRange().text;
                        var dom = document.getElementById('img6');
                        //使用滤镜 成功率高
                        dom.filters.item('DXImageTransform.Microsoft.AlphaImageLoader').src= src;
                        dom.innerHTML = '';
                    });
                }
            }
            //如果是不支持FileReader接口的低版本firefox 可以用getAsDataURL接口
            else if($.browser.mozilla===true)
            {
                $(".imgUpload6").change(function(event){
                    if(event.target.files)
                    {
                        //console.log(event.target.files);
                        for(var i=0;i<event.target.files.length;i++)
                        {
                            var img = '<img src="'+event.target.files.item(i).getAsDataURL()+'" width="250px" height="200px"/>';
                            $("#img6").empty().append(img);
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
            $(".imgUpload6").change(function(e){
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
                        var img = '<img src="'+e.target.result+'" width="250px" height="200px"/>';
                        $("#img6").empty().append(img);
                    }
                }
            });

            //处理图片拖拽的代码
            var destDom = document.getElementById('img6');
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
                    destDom.innerHTML = '<img src="'+event.target.result+'" width="250px" height="200px"/>';
                };
            },false);
        }
    });

</script>

<link href="Public/css/common/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="Public/js/common/metisMenu.min.js"></script>
<script src="Public/js/common/custom.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="Public/js/common/bootstrap.min.js"></script>

</body>
</html>