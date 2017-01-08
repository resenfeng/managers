<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <title>轮播图片及信息修改</title>
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
    <style>

        .head_title{
            position:relative;
            left:40%;
            top:0px;
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
        .select_position2{
            position: relative;
            left: 25%;
        }
        .select_position1{
            position: relative;
            left: 45%;
        }
        .select_position3{
            position: relative;
            left: 43%;
        }
        .select_position4{
            position: relative;
            left: 40%;
        }
        .btn{
            position: relative;
            left: 48%;
            top: 40%;
        }
        .form1{
            border-radius: 8px;

            border-color: rgba(19, 212, 87, 0.53);
            background-color: rgba(244, 244, 255, 0.58);
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

<div   id="page-wrapper">
    <div class="bs-example4 div-a">
    <div class="head_title">
    <h3>轮播照片及信息修改</h3>
    </div>
    <form action="<?php echo U('Admin/Administrator/pictureModify');?>"   method="post" enctype="multipart/form-data">
        <div class="select_position4">
            <p class="title_Modify">
                <b>标题：</b> <input  type="text" class="title_Modify form1" name="title_Modify" value=""required>
            </p>
        </div>
        <div class="select_position1">
            <b>修改位置：</b>
            <select   name="pictureSelect" id="pictureSelect">
                <option value ="1">1</option>
                <option value ="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            </div>
        <div class="select_position3">
            <input type="file" class="imgUpload" name="imgUpload1" id="imgUpload1"/>
            </div><!--允许file控件接受的文件类型-->
            <!--<input type="file" id="imgUpload" name="imgUpload" accept="image/*" multiple/>-->
        <div class="select_position2">
            <div class="destination" style="width:500px;height:300px;border:1px solid #000000;">
                <img src="nopic.jpg" />
            </div>
        </div>

        <input type="submit"  value="提交" class=" btn-default btn" name="submit">

    </form>
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
                        var img = '<img src="'+src+'" width="500px" height="300px" />';
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
                            var img = '<img src="'+event.target.files.item(i).getAsDataURL()+'" width="500px" height="300px"/>';
                            $(".destination").empty().append(img);
                        }
                    }
                    else
                    {
                        //console.log(event.target.value);
                        //$("#imgPreview").attr({'src':event.target.value});
                    }
                });
            }
        }
        else
        {
            // version 1
            /*$(".imgUpload").change(function(e){
             var file = e.target.files[0];
             var fReader = new FileReader();
             //console.log(fReader);
             //console.log(file);
             fReader.onload=(function(var_file)
             {
             return function(e)
             {
             $("#imgPreview").attr({'src':e.target.result,'alt':var_file.name});
             }
             })(file);
             fReader.readAsDataURL(file);
             });*/

            //单图上传 version 2
            /*$(".imgUpload").change(function(e){
             var file = e.target.files[0];
             var reader = new FileReader();
             reader.onload = function(e){
             //displayImage($('bd'),e.target.result);
             //alert('load');
             $("#imgPreview").attr({'src':e.target.result});
             }
             reader.readAsDataURL(file);
             });*/
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
                        var img = '<img src="'+e.target.result+'" width="500px" height="300px"/>';
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
                    destDom.innerHTML = '<img src="'+event.target.result+'" width="500px" height="300px"/>';
                };
            },false);
        }
    });
</script>
</html>