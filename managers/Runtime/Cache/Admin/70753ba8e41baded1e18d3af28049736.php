<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>Unicorn a Corporate Category Flat Bootstarp responsive Website Template| Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Unicorn Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstarp-css -->
    <link href="/managers/Public/css/other/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!--// bootstarp-css -->
    <!-- css -->
    <link rel="stylesheet" href="/managers/Public/css/other/style2.css" type="text/css" media="all" />
    <!--// css -->
    <script src="/managers/Public/js/other/jquery-1.11.0.min.js"></script>
    <!--fonts-->
    <!--<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>-->
    <!--/fonts-->
    <!---- start-smoth-scrolling---->
    <script type="text/javascript" src="/managers/Public/js/other/move-top.js"></script>
    <script type="text/javascript" src="/managers/Public/js/other/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <style>
        @import url(http://fonts.googleapis.com/css?family=Varela+Round);

        .slides {
            padding: 0;
            width: 1409px;
            height: 0px;
            display: block;
            margin: 0 auto;
            position: inherit;
        }

        .slides * {
            user-select: none;
            -ms-user-select: none;
            -moz-user-select: none;
            -khtml-user-select: none;
            -webkit-user-select: none;
            -webkit-touch-callout: none;
        }

        .slides input { display: none; }

        .slide-container { display: block; }

        .nav label {
            width: 150px;
            height: 500%;
            display: none;
            position: absolute;

            opacity: 0;
            z-index: 9;
            cursor: pointer;

            transition: opacity .8s;

            color: #000;
            font-size: 156pt;
            text-align: center;
            line-height: 580px;
            font-family: "Varela Round", sans-serif;
            /*background-color: rgba(255, 255, 255, .3);*/
            text-shadow: 0px 0px 15px rgb(119, 119, 119);
        }

        .slide:hover + .nav label { opacity: 0.5; }

        .nav label:hover { opacity: 1; }

        .nav .next { right: 0; }

        input:checked + .slide-container  .slide {
            opacity: 1;

            transform: scale(1);

            transition: opacity 1s ease-in-out;
        }

        input:checked + .slide-container .nav label { display: block; }
    </style>
    <!--start-smoth-scrolling-->
</head>
<body>
<!-- banner -->
<ul class="slides">
    <input type="radio" name="radio-btn" id="img-1" checked />
    <li class="slide-container">
        <div class="nav">
            <!--<a href="<?php echo U('Admin/Index/clubIndex2');?>"><label class="prev">&#x2039;</label></a>-->
            <a href="<?php echo U('Admin/Index/clubIndex2');?>"><label class="next">&#x203a;</label></a>
        </div>
    </li>
</ul>

<div class="banner" id="home">
    <!-- container -->
    <div class="container">
        <div class="header">
            <div class="header-info-right">
                <div class="header cbp-spmenu-push">
                    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
                        <a href="<?php echo U('Admin/Index/index');?>">主页</a>
                        <a class="scroll" href="#about">关于我们</a>
                        <a class="scroll" href="#stories">活动简介</a>
                        <a href="<?php echo U('Admin/LoginReg/login');?>">登录注册</a>
                    </nav>
                    <!--script-nav -->
                    <script>
                        $("span.menu").click(function(){
                            $("ul.navigatoin").slideToggle("300" , function(){
                            });
                        });
                    </script>
                    <script type="text/javascript">
                        jQuery(document).ready(function($) {
                            $(".scroll").click(function(event){
                                event.preventDefault();
                                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                            });
                        });
                    </script>
                    <div class="clearfix"> </div>
                    <!-- /script-nav -->
                    <div class="main">
                        <section class="buttonset">
                            <button id="showRightPush"><img src="/managers/Public/images/other/menu.png" /></button>
                        </section>
                    </div>
                    <!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
                    <script src="/managers/Public/js/other/classie.js"></script>
                    <script>
                        var	menuRight = document.getElementById( 'cbp-spmenu-s2' ),
                                showRightPush = document.getElementById( 'showRightPush' ),
                                body = document.body;

                        showRightPush.onclick = function() {
                            classie.toggle( this, 'active' );
                            classie.toggle( body, 'cbp-spmenu-push-toleft' );
                            classie.toggle( menuRight, 'cbp-spmenu-open' );
                            disableOther( 'showRightPush' );
                        };
                    </script>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //container -->
    <div class="container">
        <div class="banner-info">
            <?php if($show["club_name"] == NULL): ?><h2>没有社团了，向左或向右看看</h2><?php endif; ?>
            <h2><?php echo ($show["club_name"]); ?></h2>
            <span></span>
            <p><?php echo ($show["club_slogan"]); ?></p>
            <div class="bnr-btn">
                <a href="#" class="hvr-bounce-to-right">加入我们</a>
            </div>
        </div>
    </div>
</div>
<!--//banner-->
<!--about-starts-->
<div class="about" id="about">
    <div class="container">
        <div class="about-mian">
            <img src="/managers/Public/images/other/abt-1.png" alt=""/>
            <h3>社团简介</h3>
            <p><?php echo ($show["club_intro"]); ?></p>
            <!--<p>The gentlemen who rented the room would sometimes take their evening meal at home in the living room that was used by everyone, and so the door to this room was often kept closed in the evening. But Gregor found it easy to give up having the door open, he had, after all, often failed to make use of it when it was open and, without the family having noticed it, lain in his room in its darkest corner. One time, though, the charwoman left the door.</p>-->
        </div>
    </div>
</div>
<!--about-ends-->

<!--articles-starts-->
<div class="articles">
    <div class="container">
        <div class="articles-top">
            <h3>社团荣誉</h3>
            <p><?php echo ($show["club_honor"]); ?></p>
        </div>
        <div class="articles-bottom">
            <div  id="top" class="callbacks_container">
                <ul class="rslides" id="slider4">
                    <li>
                            <div class="articles-btm">
                                <div class="col-md-4 articles-left active">
                                    <div class="articles-one">
                                        <div class="art-top">
                                            <h4>社团荣誉一</h4>
                                            <p><?php echo ($show["club_show_info_honor1"]); ?></p>
                                        </div>
                                        <div class="art-bottom">
                                            <div class="art-right">
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <span></span>
                                    </div>
                                </div>
                                <div class="col-md-4 articles-left">
                                    <div class="articles-one">
                                        <div class="art-top">
                                            <h4>社团荣誉二</h4>
                                            <p><?php echo ($show["club_show_info_honor2"]); ?></p>
                                        </div>
                                        <div class="art-bottom">
                                            <div class="art-right">
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <span></span>
                                    </div>
                                </div>
                                <div class="col-md-4 articles-left">
                                    <div class="articles-one">
                                        <div class="art-top">
                                            <h4>社团荣誉三</h4>
                                            <p><?php echo ($show["club_show_info_honor3"]); ?></p>
                                        </div>
                                        <div class="art-bottom">
                                            <div class="art-right">
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <span></span>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--articles-ends-->
<!--Slider-Starts-Here-->
<!--clients-starts-->
<div class="clients">
    <div class="container">
        <div class="clients-top">
            <div class="col-md-4 service-left">
                <span class="service-one"> </span>
                <h3>社团展示一</h3>
                <p><?php echo ($show["club_show_info_context1"]); ?></p>
            </div>
            <div class="col-md-4 service-left">
                <span class="service-two"> </span>
                <h3>社团展示二</h3>
                <p><?php echo ($show["club_show_info_context2"]); ?></p>
            </div>
            <div class="col-md-4 service-left">
                <span class="service-tre"> </span>
                <h3>社团展示三</h3>
                <p><?php echo ($show["club_show_info_context3"]); ?></p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
</div>
<!--clients-ends-->

<!--portfolio-starts-->
<div class="port" id="stories">
    <div class="port-top">
        <h3>精品活动</h3>
        <p><?php echo ($show["club_show_info_jpact"]); ?></p>
        <span></span>
    </div>
    <div class="portfolio-bottom">
        <div class="portfolios entertain_box  wow fadeInUp" data-wow-delay="0.4s" id="portfolio">
            <div class="portfolio-top">
                <div id="portfoliolist">
                    <div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper">
                            <a href="/managers/Public/images/other/port-1.jpg" class="b-link-stripe b-animate-go   swipebox"  title="Image Title">
                                <img src="<?php echo ($show["club_show_info_pic"]["1"]); ?>" width="337" height="275"/><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><?php echo ($show["club_name"]); ?></h2>
                            </div></a>
                        </div>
                    </div>
                    <div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper">
                            <a href="/managers/Public/images/other/port-2.jpg" class="b-link-stripe b-animate-go   swipebox"  title="Image Title">
                                <img src="<?php echo ($show["club_show_info_pic"]["2"]); ?>" width="337" height="275"/><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><?php echo ($show["club_name"]); ?></h2>
                            </div></a>
                        </div>
                    </div>
                    <div class="portfolio photo mix_all" data-cat="photo" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper">
                            <a href="/managers/Public/images/other/port-3.jpg" class="b-link-stripe b-animate-go   swipebox"  title="Image Title">
                                <img src="<?php echo ($show["club_show_info_pic"]["3"]); ?>" width="337" height="275"/><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><?php echo ($show["club_name"]); ?></h2>
                            </div></a>
                        </div>
                    </div>
                    <div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper">
                            <a href="/managers/Public/images/other/port-4.jpg" class="b-link-stripe b-animate-go   swipebox"  title="Image Title">
                                <img src="<?php echo ($show["club_show_info_pic"]["4"]); ?>" width="337" height="275"/><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><?php echo ($show["club_name"]); ?></h2>
                                <!--<img src="/managers/Public/images/other/port-4.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">Processing Steps Web</h2>-->
                            </div></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--portfolio-ends-->
<!--end-special-->
<link rel="stylesheet" href="/managers/Public/css/other/swipebox.css">
<script src="/managers/Public/js/other/jquery.swipebox.min.js"></script>
<script type="text/javascript">
    jQuery(function($) {
        $(".swipebox").swipebox();
    });
</script>
<!-- Portfolio Ends Here -->
<script type="text/javascript" src="/managers/Public/js/other/jquery.mixitup.min.js"></script>
<script type="text/javascript">
    $(function () {

        var filterList = {

            init: function () {

                // MixItUp plugin
                // http://mixitup.io
                $('#portfoliolist').mixitup({
                    targetSelector: '.portfolio',
                    filterSelector: '.filter',
                    effects: ['fade'],
                    easing: 'snap',
                    // call the hover effect
                    onMixEnd: filterList.hoverEffect()
                });

            },

            hoverEffect: function () {

                // Simple parallax effect
                $('#portfoliolist .portfolio').hover(
                        function () {
                            $(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
                            $(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');
                        },
                        function () {
                            $(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
                            $(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');
                        }
                );

            }

        };

        // Run the show!
        filterList.init();

    });
</script>
<div class="footer" id="hello">
    <div class="container">
        <div class="footer-top">
            <div class="col-md-6 footer-left">
                <div class="contact-text">
                    <input type="text" value="邮箱:  <?php echo ($show["manager_email"]); ?>" readonly="readonly"/>
                    <input type="text" value="负责人:  <?php echo ($show["manager_name"]); ?>" readonly="readonly"/>
                    <br>
                    <input type="text" value="联系方式:  <?php echo ($show["manager_phone"]); ?>" readonly="readonly"/>
                </div>
            </div>
            <div class="col-md-6 footer-right">
                <div class="col-md-4 footer-links">
                    <h4>我们的二维码</h4>
                    <ul>
                        <img src="<?php echo ($show["club_show_info_pic"]["5"]); ?>" width="260" height="260"/>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            /*
             var defaults = {
             containerID: 'toTop', // fading element id
             containerHoverID: 'toTopHover', // fading element hover id
             scrollSpeed: 1200,
             easingType: 'linear'
             };
             */

            $().UItoTop({ easingType: 'easeOutQuart' });

        });
    </script>
    <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</div>
</body>
</html>