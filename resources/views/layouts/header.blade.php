@yield('header')

<link rel="icon" href="/images/favicon.ico" >
<link rel="shortcut icon" href="/images/favicon.ico"  />
<link  rel="stylesheet" media="screen" href="/css/style.css">
<link  rel="stylesheet" href="/css/camera.css">
<link  rel="stylesheet" href="/css/carousel.css">
<link  rel="stylesheet" href="/css/font-awesome.css">

<link  rel="stylesheet" href="/css/bootstrap.min.css">
<link  rel="stylesheet" href="/css/bootstrap-theme.min.css">


@yield('style')

<script src="/js/jquery.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery-migrate-1.1.1.js"></script>
<script src="/js/script.js"></script> 
<script src="/js/jquery.equalheights.js"></script>
<script src="/js/superfish.js"></script>
<script  src="/js/jquery.responsivemenu.js"></script>
<script  src="/js/jquery.mobilemenu.js"></script>
<script  src="/js/jquery.easing.1.3.js"></script>
<script src="/js/camera.js"></script>
<!--[if (gt IE 9)|!(IE)]><!-->
<script  src="/js/jquery.mobile.customized.min.js"></script>
<!--<![endif]-->
<script src="/js/jquery.carouFredSel-6.1.0-packed.js"></script>
<script  src="/js/jquery.touchSwipe.min.js"></script>
<script>
	$(document).ready(function(){
        jQuery('#camera_wrap').camera({
            loader: false,
            pagination: false,
            thumbnails: false,
            height: '45%',
            caption: false,
            navigation: true,
            fx: 'simpleFade'
        });   
	});

  $(window).load (
    function(){$('.carousel1').carouFredSel({auto: false, prev: '.prev1',next: '.next1', width: 940, items: {
    visible : {min: 1,
    max: 1
    },
    height: 'auto',
    width: 940,

    }, responsive: true, 

    scroll: 1, 

    mousewheel: false,

    swipe: {onMouse: true, onTouch: true}});

    } ); 


</script>
@yield('script')