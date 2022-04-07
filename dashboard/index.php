<?php
    session_start();
    if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_name'])) {
        echo "<meta http-equiv='refresh' content='0;url=login.php'>";
        exit;
    }
?>

<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>대시보드 | <?php echo $_SESSION['user_name']."님"; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
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
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- jvectormap CSS
		============================================ -->
    <link rel="stylesheet" href="css/jvectormap/jquery-jvectormap-2.0.3.css">
    <!-- notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/notika-custom-icon.css">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="css/wave/waves.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
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
    <!-- Start Header Top Area -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="#"><img src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a data-toggle="collapse" data-target="#home" href="#">홈</a>
                                    <ul id="home" class="collapse dropdown-header-top">
                                        <li><a href="index.php">대시보드</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#custom" href="#">사용자정의</a>
                                    <ul id="custom" class="collapse dropdown-header-top">
                                        <li><a href="customize/profile.php">프로필 수정</a></li>
                                        <li><a href="customize/portfolio.php">포트폴리오 수정</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#user" href="#"><?php echo "<b>".$_SESSION['user_name']."</b> 님"; ?></a>
                                    <ul id="user" class="collapse dropdown-header-top">
                                        <li><a href="logout.php">로그아웃</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li class="active"><a data-toggle="tab" href="#maintab"><i class="notika-icon notika-house"></i> 홈</a>
                    </li>
                    <li><a data-toggle="tab" href="#customtab"><i class="notika-icon notika-edit"></i> 사용자 정의</a>
                    </li>
                    <li><a data-toggle="tab" href="#usertab"><i class="notika-icon notika-support"></i> <?php echo "<b>".$_SESSION['user_name']."</b> 님"; ?></a>
                    </li>
                </ul>
                <div class="tab-content custom-menu-content">
                    <div id="maintab" class="tab-pane in active notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="index.php">대시보드</a>
                            </li>
                        </ul>
                    </div>
                    <div id="customtab" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="customize/profile.php">프로필 수정</a>
                            </li>
                            <li><a href="customize/portfolio.php">포트폴리오 수정</a>
                            </li>
                        </ul>
                    </div>
                    <div id="usertab" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="logout.php">로그아웃</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Menu area End-->
    <!-- Start Status area -->
    <div class="notika-status-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter"><?php $now_day = date("Y-m-d"); $conn = mysqli_connect("localhost", "hwahyang_pf_v1", "rrFevF#rdwN2mA-@Ah=W8xfBn5R%4m+K", "hwahyang_pf_v1"); if(mysqli_connect_errno()) { echo '<script>alert("서버와의 연결이 유효하지 않습니다.\n잠시 후 다시 시도하여 주세요.");</script>'; exit; } mysqli_query($conn, "set session character_set_connection=utf8;"); mysqli_query($conn, "set session character_set_results=utf8;"); mysqli_query($conn, "set session character_set_client=utf8;");  $select_query = "SELECT total FROM counter WHERE `date`='".$now_day."'"; $result_set = mysqli_query($conn, $select_query); $row = mysqli_fetch_array($result_set); if ($row['total'] == "") { echo "0"; } else { $row['total']; } ?></span>명</h2>
                            <p>전체 접속자</p>
                        </div>
                        <div class="sparkline-bar-stats1">9,4,8,6,5,6,4,8,3,5,9,5</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter"><?php $now_day = date("Y-m-d"); $conn = mysqli_connect("localhost", "hwahyang_pf_v1", "rrFevF#rdwN2mA-@Ah=W8xfBn5R%4m+K", "hwahyang_pf_v1"); if(mysqli_connect_errno()) { echo '<script>alert("서버와의 연결이 유효하지 않습니다.\n잠시 후 다시 시도하여 주세요.");</script>'; exit; } mysqli_query($conn, "set session character_set_connection=utf8;"); mysqli_query($conn, "set session character_set_results=utf8;"); mysqli_query($conn, "set session character_set_client=utf8;");  $select_query = "SELECT count FROM counter WHERE `date`='".$now_day."'"; $result_set = mysqli_query($conn, $select_query); $row = mysqli_fetch_array($result_set); if ($row['count'] == "") { echo "0"; } else { $row['count']; } ?></span>명</h2>
                            <p>오늘 접속자</p>
                        </div>
                        <div class="sparkline-bar-stats2">1,4,8,3,5,6,4,8,3,3,9,5</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Status area-->
    <br>
    <!-- Start Email Statistic area-->
    <div class="notika-email-post-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="recent-items-wp notika-shadow sm-res-mg-t-30">
                        <div class="rc-it-ltd">
                            <div class="recent-items-ctn">
                                <div class="recent-items-title">
                                    <h2>접속방식 통계 (SAMPLE)</h2>
                                </div>
                            </div>
                            <div class="recent-items-inn">
                                <table class="table table-inner table-vmiddle">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>접속방식</th>
                                            <th>누적 접속자</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="f-500 c-cyan">1</td>
                                            <td>직접 접속</td>
                                            <td class="f-500 c-cyan"><span class="counter">463</span>명</td>
                                        </tr>
                                        <tr>
                                            <td class="f-500 c-cyan">2</td>
                                            <td>Twitter</td>
                                            <td class="f-500 c-cyan"><span class="counter">314</span>명</td>
                                        </tr>
                                        <tr>
                                            <td class="f-500 c-cyan">3</td>
                                            <td>Discord</td>
                                            <td class="f-500 c-cyan"><span class="counter">241</span>명</td>
                                        </tr>
                                        <tr>
                                            <td class="f-500 c-cyan">4</td>
                                            <td>Facebook</td>
                                            <td class="f-500 c-cyan"><span class="counter">155</span>명</td>
                                        </tr>
                                        <tr>
                                            <td class="f-500 c-cyan">5</td>
                                            <td>Google 검색</td>
                                            <td class="f-500 c-cyan"><span class="counter">544</span>명</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="recent-items-wp notika-shadow sm-res-mg-t-30">
                        <div class="rc-it-ltd">
                            <div class="recent-items-ctn">
                                <div class="recent-items-title">
                                    <h2>접속국가 통계 (SAMPLE)</h2>
                                </div>
                            </div>
                            <div class="recent-items-inn">
                                <table class="table table-inner table-vmiddle">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>국가명</th>
                                            <th>누적 접속자</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="f-500 c-cyan">1</td>
                                            <td>South Korea</td>
                                            <td class="f-500 c-cyan"><span class="counter">4658</span>명</td>
                                        </tr>
                                        <tr>
                                            <td class="f-500 c-cyan">2</td>
                                            <td>United States</td>
                                            <td class="f-500 c-cyan"><span class="counter">240</span>명</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Email Statistic area-->
    <!-- Start Footer area-->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>&copy; 2017-2020 <a href="https://hwahyang.space">화향</a>. | 디자인 : <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer area-->
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- jvectormap JS
		============================================ -->
    <script src="js/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/jvectormap/jvectormap-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/curvedLines.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="js/knob/jquery.knob.js"></script>
    <script src="js/knob/jquery.appear.js"></script>
    <script src="js/knob/knob-active.js"></script>
    <!--  wave JS
		============================================ -->
    <script src="js/wave/waves.min.js"></script>
    <script src="js/wave/wave-active.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="js/todo/jquery.todo.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
	<!--  Chat JS
		============================================ -->
    <script src="js/chat/moment.min.js"></script>
    <script src="js/chat/jquery.chat.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
</body>

</html>