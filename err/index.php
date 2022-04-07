<?php session_start(); if (empty($_GET['code'])) { $id = 400; http_response_code(400); } else { http_response_code($_GET['code']); $id = $_GET['code']; } ?>

<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $id ?> Error!! | <?php if (!isset($_SESSION['user_id']) || !isset($_SESSION['user_name'])) { echo "로그인되지 않음"; } else { echo $_SESSION['user_name']."님"; } ?></title>
    <meta name="description" content="화향 / Developer, Director" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fav Icon -->
    <link rel="apple-touch-icon" sizes="57x57" href="/img/farvicon/57X57_HwaHyang_08_Alpha.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/img/farvicon/60X60_HwaHyang_08_Alpha.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/img/farvicon/72X72_HwaHyang_08_Alpha.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/farvicon/76X76_HwaHyang_08_Alpha.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/img/farvicon/114X114_HwaHyang_08_Alpha.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/img/farvicon/120X120_HwaHyang_08_Alpha.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/img/farvicon/144X144_HwaHyang_08_Alpha.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/img/farvicon/152X152_HwaHyang_08_Alpha.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/img/farvicon/180X180_HwaHyang_08_Alpha.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/img/farvicon/192X192_HwaHyang_08_Alpha.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/farvicon/32X32_HwaHyang_08_Alpha.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/img/farvicon/96X96_HwaHyang_08_Alpha.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/farvicon/16X16_HwaHyang_08_Alpha.png">
    <!-- canonical -->
    <link rel="canonical" href="http://pf.hwahyang.space">
    <!-- SEO -->
    <meta name="title" content="화향's Portfolio" class="meta-title">
    <meta name="description" content="화향 / Developer, Director" class="meta-desc">
    <meta name="keywords" content="포트폴리오, 화향, 개발, 채팅봇, 디스코드, 유튜브, 트위터, 페이스북, 타이포, 영상, 애펙, 프리미어, PV, 동인">
    <meta name="apple-mobile-web-app-title" content="화향's Portfolio">
    <link rel="image_src" href="https://pf.hwahyang.space/img/farvicon/192X192_HwaHyang_08_Alpha.png">
    <!-- Color -->
    <meta name="theme-color" content="#edb2fc">
    <!-- SNS -->
    <!-- Facebook / Discord-->
    <meta property="og:site_name" content="화향's Portfolio" class="meta-title">
    <meta property="og:title" content="<?php echo $id; ?> ERROR!!" class="meta-title">
    <meta property="og:description" content="화향 / Developer, Director" class="meta-desc">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="KR">
    <meta property="og:url" content="http://pf.hwahyang.space">
    <meta property="og:image" content="https://pf.hwahyang.space/img/farvicon/192X192_HwaHyang_08_Alpha.png">
    <meta property="og:image:width" content="192">
    <meta property="og:image:height" content="192">
    <!-- Twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="<?php echo $id; ?> ERROR!!" class="meta-title">
    <meta name="twitter:description" content="화향's Portfolio" class="meta-desc">
    <meta name="twitter:url" content="http://pf.hwahyang.space">
    <meta name="twitter:image" content="https://pf.hwahyang.space/img/farvicon/192X192_HwaHyang_08_Alpha.png"> <!-- 200*200px -->
    <!-- MS -->
    <meta name="msapplication-TileColor" content="#edb2fc">
    <meta name="msapplication-TileImage" content="https://pf.hwahyang.space/img/farvicon/144X144_HwaHyang_08_Alpha.png"> <!-- 144*144px -->
    <!-- // SNS -->
    <!-- Bots -->
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="email=no">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="/dashboard/css/bootstrap.min.css">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="/dashboard/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="/dashboard/css/owl.carousel.css">
    <link rel="stylesheet" href="/dashboard/css/owl.theme.css">
    <link rel="stylesheet" href="/dashboard/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="/dashboard/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="/dashboard/css/normalize.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="/dashboard/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="/dashboard/css/wave/waves.min.css">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="/dashboard/css/notika-custom-icon.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="/dashboard/css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="/dashboard/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="/dashboard/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="/dashboard/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-165040590-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-165040590-3');
</script>

</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">현재 <strong>오래된 버전의 브라우저에서 접속을 시도하고 있습니다</strong>. 신버전의 다른 브라우저에서 로그인을 시도 해 주세요.</p>
    <![endif]-->
    <!-- <?php echo $id; ?> Page area Start-->
    <div class="error-page-area">
        <div class="error-page-wrap">
            <i class="notika-icon notika-close"></i>
            <h2>ERROR <span class="counter"><?php echo $id; ?></span></h2>
            <p>현재 접근하시려는 페이지는 존재하지 않거나 접근 할 수 없습니다.<br>접근하시려는 페이지의 주소를 다시 한번만 확인 해 주세요.</p>
            <a href="/" class="btn">홈페이지</a>
            <a href="/dashboard/" class="btn">대시보드</a>
            <a href="mailto:<?php $conn = mysqli_connect("localhost", "hwahyang_pf", "rrFevF#rdwN2mA-@Ah=W8xfBn5R%4m+K", "hwahyang_pf"); if(mysqli_connect_errno()) { echo 'server error'; } else { mysqli_query($conn, "set session character_set_connection=utf8;"); mysqli_query($conn, "set session character_set_results=utf8;"); mysqli_query($conn, "set session character_set_client=utf8;"); $result_set = mysqli_query($conn, "SELECT * FROM `users` WHERE `id`=1"); $row = mysqli_fetch_array($result_set); echo $row['email']; } ?>" class="btn error-btn-mg">개발자에게 문의하기</a>
        </div>
    </div>
    <!-- <?php echo $id; ?> Page area End-->
    <!-- jquery
		============================================ -->
    <script src="/dashboard/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="/dashboard/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="/dashboard/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="/dashboard/js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="/dashboard/js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="/dashboard/js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="/dashboard/js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="/dashboard/js/counterup/jquery.counterup.min.js"></script>
    <script src="/dashboard/js/counterup/waypoints.min.js"></script>
    <script src="/dashboard/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="/dashboard/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="/dashboard/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="/dashboard/js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="/dashboard/js/flot/jquery.flot.js"></script>
    <script src="/dashboard/js/flot/jquery.flot.resize.js"></script>
    <script src="/dashboard/js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="/dashboard/js/knob/jquery.knob.js"></script>
    <script src="/dashboard/js/knob/jquery.appear.js"></script>
    <script src="/dashboard/js/knob/knob-active.js"></script>
    <!--  wave JS
		============================================ -->
    <script src="/dashboard/js/wave/waves.min.js"></script>
    <script src="/dashboard/js/wave/wave-active.js"></script>
    <!--  Chat JS
		============================================ -->
    <script src="/dashboard/js/chat/jquery.chat.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="/dashboard/js/todo/jquery.todo.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="/dashboard/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="/dashboard/js/main.js"></script>
</body>

</html>