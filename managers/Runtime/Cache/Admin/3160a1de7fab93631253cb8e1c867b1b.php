<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Bootstrap Core CSS -->
    <link href="/managers/Public/association/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="/managers/Public/association/css/style.css" rel='stylesheet' type='text/css' />
    <link href="/managers/Public/association/css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="/managers/Public/association/js/jquery.min.js"></script>
    <script src="/managers/Public/association/js/register_form.js"></script>
    <!----webfonts--->
    <link href='http://fonts.useso.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <!---//webfonts--->
    <!-- Bootstrap Core JavaScript -->
    <script src="/managers/Public/association/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/managers/Public/js/register_form.js"></script>
</head>
<body id="login">

<h2 class="zhuce">新用户注册</h2>
<form class="form-signin app-cam" action="<?php echo U('Admin/LoginReg/register');?>" name="user_form" method="post">

    <input type="text" class="form-control1" name="user_name" placeholder="用户名／一卡通号" autofocus="">
    <input type="text" class="form-control1" name="user_email" placeholder="Email" autofocus="">
    <input type="text" class="form-control1" name="user_phone" placeholder="手机号" autofocus="">
    <div class="form-control1" bgcolor="black">
        <p><b>性别：</b> <label for="radio-01" class="label_radio">
            <input type="radio" name="user_sex" value="女"> Famale
        </label>
            <label for="radio-02" class="label_radio">
                <input type="radio" name="user_sex" value="男"> Male
            </label>

            <label for="radio-02" class="label_radio">
                <input type="radio" name="user_sex" value="保密"> Secret
            </label></p>
    </div>
    <div class="form-control3">
        <p><b>请选择院系</b>
            <select name="user_academy">
                <option value ="建筑学院">建筑学院</option>
                <option value ="能源与环境学院">能源与环境学院</option>
                <option value="土木工程学院">土木工程学院</option>
                <option value="数学系">数学系</option>
                <option value="计算机科学与工程学院">计算机科学与工程学院</option>
                <option value="生物科学与医学工程学院">生物科学与医学工程学院</option>
                <option value="人文学院">人文学院</option>
                <option value="电气工程学院">电气工程学院</option>
                <option value="体育系">体育系</option>
                <option value="交通学院">交通学院</option>
                <option value="艺术学院">艺术学院</option>
                <option value="医学院">医学院</option>
                <option value="吴健雄学院">吴健雄学院</option>
                <option value="软件学院">软件学院</option>
                <option value="马克思主义学院">马克思主义学院</option>
                <option value="机械工程学院">机械工程学院</option>
                <option value="信息科学与工程学院">信息科学与工程学院</option>
                <option value="电子科学与工程学院">电子科学与工程学院</option>
                <option value="自动化学院">自动化学院</option>
                <option value="物理系">物理系</option>
                <option value="数学系">数学系</option>
                <option value="材料科学与工程学院">材料科学与工程学院</option>
                <option value="经济管理学院">经济管理学院</option>
                <option value="外国语学院">外国语学院</option>
                <option value="化学化工学院">化学化工学院</option>
                <option value="仪器科学与工程学院">仪器科学与工程学院</option>
                <option value="法学院">法学院</option>
                <option value="公共卫生学院">公共卫生学院</option>
                <option value="海外教育学院">海外教育学院</option>
                <option value="微电子学院">微电子学院</option>
                <option value="生命科学研究院">生命科学研究院</option>
            </select>
        </p>
    </div>
    <input type="password" class="form-control1" name="user_password" placeholder="密码" autofocus="">
    <input type="password" class="form-control1" name="user_repassword" placeholder="确认密码" autofocus="">
    <input type="text1" class="form-control1" name="vacode" placeholder="验证码" autofocus="">
    <!--<input type="button" class="form-control1" name="user_vacode" value="获得验证码" onclick="showcode()">-->
    <!--<img class="verify" src="http://localhost/home-page/Home/Verify/verify" alt="验证码">-->
    <!--<img class="verify" src="http://localhost/managers/Admin/Verify/verify" alt="验证码">-->
    <!--<img class="verify" src="http://localhost/managers/index.php?m=Admin&c=Verify&a=verify" alt="验证码">-->
    <!--<img class="verify" src="<?php echo U('home-page/Home/Verify/verify');?>" alt="验证码">-->
    <img class="verify" src="<?php echo U('Admin/Verify/verify');?>" alt="验证码" onClick="this.src=this.src+'?'+Math.random()">
    <label class="checkbox-custom check-success">
        <input type="checkbox" value="agree this condition" id="checkbox1"> <label for="checkbox1">我同意注册协议</label>
    </label>
    <button class="btn btn-lg btn-success1 btn-block" type="submit" onclick="return check();">提交</button>
    <div class="registration">
        已经注册过了.
        <a class="" href="../LoginReg/login.html">
            登录
        </a>
    </div>


</form>
<div class="copy_layout login register">

</div>
</body>
</html>