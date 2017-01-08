<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <title>活动预告</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Bootstrap Core CSS -->
    <link href="/managers/Public/css/club/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="/managers/Public/css/club/style.css" rel='stylesheet' type='text/css' />
    <link href="/managers/Public/css/club/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="/managers/Public/js/club/jquery.min.js"></script>
    <!----webfonts--->
    <!--<link href='http://fonts.useso.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>-->
    <!---//webfonts--->
    <!-- Bootstrap Core JavaScript -->
    <script src="/managers/Public/js/club/bootstrap.min.js"></script>
    <!--引用判断登录逻辑js文件 -->
    <script type="text/javascript" src="/managers/Public/js/index/login_form.js"></script>
    <style>
        .bs-example4 {
            background: rgba(255, 249, 251, 0.52);
            padding: 2em;
        }
        .div-a{
            position: relative;
            top: 20%;
            left: 15%;
            width: 1000px;
            height: auto;
            border-radius: 10px;
        }
    </style>
</head>
<body id="login">
<div class="login-logo">
    <a ><img src="/managers/Public/images/index/logo1.png" width="240" length="240" alt=""/></a>
</div>

<div class="bs-example4  div-a ">
    <div class="" align="center">
        <h3>活动预告</h3>
    </div>
    <table  class="table">
        <tr class="info">

            <th>活动日期</th>
            <th>活动名称</th>
            <th>举办社团</th>
            <th>活动场地</th>

        </tr>
        <?php if(is_array($trailer)): $i = 0; $__LIST__ = $trailer;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$s): $mod = ($i % 2 );++$i;?><tr class="success" height="30px">
                <td><?php echo ($s["act_trailer_time"]); ?></td>
                <td><?php echo ($s["act_trailer_name"]); ?></td>
                <td><?php echo ($s["act_trailer_club"]); ?></td>
                <td><?php echo ($s["act_trailer_place"]); ?></td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </table>

</div>
</body>
</html>