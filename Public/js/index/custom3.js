
 /* jQuery Pre loader
  -----------------------------------------------*/
$(window).load(function(){
    $('.preloader').fadeOut(1000); // set duration in brackets    
});


/* HTML document is loaded. DOM is ready. 
-------------------------------------------*/
$(document).ready(function() {

  /* template navigation
  -----------------------------------------------*/
 $('.main-navigation').onePageNav({
        scrollThreshold: 0.2, // Adjust if Navigation highlights too early or too late
        scrollOffset: 75, //Height of Navigation Bar
        filter: ':not(.external)',
        changeHash: true
    }); 

    /* Navigation visible on Scroll */
    mainNav();
    $(window).scroll(function () {
        mainNav();
    });

    function mainNav() {
        var top = (document.documentElement && document.documentElement.scrollTop) || document.body.scrollTop;
        if (top > 40) $('.sticky-navigation').stop().animate({
            "opacity": '1',
            "top": '0'
        });
        else $('.sticky-navigation').stop().animate({
            "opacity": '0',
            "top": '-75'
        });
    }
    

   /* Hide mobile menu after clicking on a link
    -----------------------------------------------*/
    $('.navbar-collapse a').click(function(){
        $(".navbar-collapse").collapse('hide');
    });


  /*  smoothscroll
  ----------------------------------------------*/
   $(function() {
        $('.navbar-default a, #home a, #overview a').bind('click', function(event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - 49
            }, 1000);
            event.preventDefault();
        });
    });


 /* Parallax section
    -----------------------------------------------*/
  function initParallax() {
    $('#home').parallax("100%", 0.1);
    $('#overview').parallax("100%", 0.3);
    $('#trainer').parallax("100%", 0.2);
    $('#newsletter').parallax("100%", 0.3);
    $('#blog').parallax("100%", 0.1);
    $('#price').parallax("100%", 0.2);
    $('#testimonial').parallax("100%", 0.2);

  }
  initParallax();


   /* home slider section
  -----------------------------------------------*/
  // $(function(){
  //   jQuery(document).ready(function() {
  //   $('#home').backstretch([
  //      "images/home-bg-slider-img1.jpg",
  //      "images/home-bg-slider-img2.jpg",
  //      "images/seu1.jpg",
  //       ],  {duration: 2000, fade: 750});
  //   });
  // })
  //   $(function(){
  //       jQuery(document).ready(function() {
  //           $('#fullscreen-slider').backstretch([
  //               // "./images/index/seu2.jpg",
  //               "http://58.213.164.146:8011/managers/picture/roll/seu2.jpg",
  //               "http://58.213.164.146:8011/managers/picture/roll/seu3.jpg",
  //               "http://58.213.164.146:8011/managers/picture/roll/seu1.jpg",
  //               "http://58.213.164.146:8011/managers/picture/roll/seu4.jpg",
  //               "http://58.213.164.146:8011/managers/picture/roll/seu5.jpg",
  //               // "http://58.213.164.146:8011/managers/Public/images/index/seu2.jpg",
  //               // "http://58.213.164.146:8011/managers/Public/images/index/seu3.jpg",
  //               // "http://58.213.164.146:8011/managers/Public/images/index/seu1.jpg",
  //               // "./images/index/seu3.jpg",
  //               // "./images/index/seu1.jpg",
  //           ],  {duration: 2000, fade: 750});
  //       });
  //   })

    $(function(){
        jQuery(document).ready(function() {
            var temp;
            $.ajax({
                type : "post",
                async : false,
                url : "http://112.124.107.125:8011/index.php/Admin/Administrator/getPicture",
                dataType : 'json',
                data : {
                    "key" : "check"
                },

                success : function (data) {
                    var str = eval(data);
                    temp = data;
                    // alert("照片提取成功");
                },
                error : function (data) {
                    alert("照片提取失败");
                }
            })
            $('#fullscreen-slider').backstretch([
                // "http://58.213.164.146:8011/managers/picture/roll/seu2.jpg",
                // "http://58.213.164.146:8011/managers/picture/roll/seu3.jpg",
                // "http://58.213.164.146:8011/managers/picture/roll/seu1.jpg",
                // "http://58.213.164.146:8011/managers/picture/roll/seu4.jpg",
                // "http://58.213.164.146:8011/managers/picture/roll/seu5.jpg",
                temp[0],
                temp[1],
                temp[2],
                temp[3],
                temp[4],
            ],  {duration: 2000, fade: 750});
        });
    })


  /* Owl Carousel
  -----------------------------------------------*/
  $(document).ready(function() {
    $("#owl-testimonial").owlCarousel({
      autoPlay: 6000,
      items : 1,
      itemsDesktop : [1199,1],
      itemsDesktopSmall : [979,1],
      itemsTablet: [768,1],
      itemsTabletSmall: false,
      itemsMobile : [479,1],
    });
  });


  /* wow
  -------------------------------*/
  new WOW({ mobile: false }).init();

  });

