<?php
    session_start();
    if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_name'])) {
        echo "<meta http-equiv='refresh' content='0;url=../login.php'>";
        exit;
    }
?>

<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>포트폴리오 수정 | <?php echo $_SESSION['user_name']."님"; ?></title>
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
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="../css/owl.carousel.css">
    <link rel="stylesheet" href="../css/owl.theme.css">
    <link rel="stylesheet" href="../css/owl.transitions.css">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="../css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/animation/animation-custom.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="../css/normalize.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="../css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="../css/notika-custom-icon.css">
    <!-- Data Table JS
		============================================ -->
    <link rel="stylesheet" href="../css/jquery.dataTables.min.css">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="../css/wave/waves.min.css">
    <link rel="stylesheet" href="../css/wave/button.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="../css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="../style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="../js/vendor/modernizr-2.8.3.min.js"></script>
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
                        <a href="#"><img src="../img/logo/logo.png" alt="" /></a>
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
                                        <li><a href="../index.php">대시보드</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#custom" href="#">사용자정의</a>
                                    <ul id="custom" class="collapse dropdown-header-top">
                                        <li><a href="../customize/profile.php">프로필 수정</a></li>
                                        <li><a href="../customize/portfolio.php">포트폴리오 수정</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#user" href="#"><?php echo "<b>".$_SESSION['user_name']."</b> 님"; ?></a>
                                    <ul id="user" class="collapse dropdown-header-top">
                                        <li><a href="../logout.php">로그아웃</a></li>
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
                    <li><a data-toggle="tab" href="#maintab"><i class="notika-icon notika-house"></i> 홈</a></li>
                    <li class="active"><a data-toggle="tab" href="#customtab"><i class="notika-icon notika-edit"></i> 사용자 정의</a>
                    </li>
                    <li><a data-toggle="tab" href="#usertab"><i class="notika-icon notika-support"></i> <?php echo "<b>".$_SESSION['user_name']."</b> 님"; ?></a>
                    </li>
                </ul>
                <div class="tab-content custom-menu-content">
                    <div id="maintab" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="../index.php">대시보드</a>
                            </li>
                        </ul>
                    </div>
                    <div id="customtab" class="tab-pane in active notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="../customize/profile.php">프로필 수정</a>
                            </li>
                            <li><a href="../customize/portfolio.php">포트폴리오 수정</a>
                            </li>
                        </ul>
                    </div>
                    <div id="usertab" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="../logout.php">로그아웃</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Menu area End-->
	<!-- Breadcomb area Start-->
	<div class="breadcomb-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="breadcomb-list">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="breadcomb-wp">
                    <div class="breadcomb-icon">
                      <i class="notika-icon notika-form"></i>
                    </div>
                    <div class="breadcomb-ctn">
                      <h2>포트폴리오 수정</h2>
                      <p>홈페이지에 노출되는 포트폴리오를 수정합니다.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                  <div class="breadcomb-report">
                    <a data-toggle="tooltip" data-placement="left" class="btn" href="./portfolio_editor.php?id=new"><i class="notika-icon notika-edit"></i> 새 포트폴리오 작성</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcomb area End-->
    
    <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>포트폴리오 목록</h2>
                            <p>현재 홈페이지에 게시중인 포트폴리오 목록입니다.<br>과거순으로 보여집니다.</p>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>이름</th>
                                        <th>설명</th>
                                        <th>작성 / 수정</th>
                                        <th>최종 수정일</th>
                                        <th>이미지</th>
                                        <th>편집</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                      $conn = mysqli_connect("localhost", "hwahyang_pf", "rrFevF#rdwN2mA-@Ah=W8xfBn5R%4m+K", "hwahyang_pf");
                                      if(mysqli_connect_errno()) {
                                        echo '<script>alert("서버와의 연결이 유효하지 않습니다.\n잠시 후 다시 시도하여 주세요.");</script>';
                                        exit;
                                      }

                                      mysqli_query($conn, "set session character_set_connection=utf8;");
                                      mysqli_query($conn, "set session character_set_results=utf8;");
                                      mysqli_query($conn, "set session character_set_client=utf8;");
                                      $result_set = mysqli_query($conn, "SELECT * FROM `portfolio`");

                                      while ($row = mysqli_fetch_array($result_set)) {
                                        if ($row["filter"] == "null") {
                                          $filter = "카테고리 없음";
                                        } else if ($row["filter"] == "typo") {
                                          $filter = "타이포그래피";
                                        } else if ($row["filter"] == "pv") {
                                          $filter = "P/V";
                                        } else if ($row["filter"] == "webdev") {
                                          $filter = "웹 개발";
                                        } else if ($row["filter"] == "botdev") {
                                          $filter = "채팅봇 개발";
                                        } else if ($row["filter"] == "etc") {
                                          $filter = "기타";
                                        } else {
                                          $filter = $row['filter'];
                                        }

                                        if ($row['description'] == "") {
                                          $des = "작성된 설명이 없습니다.";
                                        } else { 
                                          $des = $row['description'];
                                          $des = str_replace('<p>' , '', $des);
                                          $des = str_replace('</p>' , '', $des);
                                        }

                                        if ( $row['editor'] == "") {
                                          $editor = "없음";
                                        } else {
                                          $editor = $row['editor'];
                                        }

                                        echo "<tr>
                                        <td>".$row['id']."</td>
                                        <td>[".$filter."] ".$row['name']."</td>
                                        <td><a href='javascript:void(0)' Onclick=\"alert('".$des."');\">설명 보기</a></td>
                                        <td>".$row['author']." / ".$editor."</td>
                                        <td>".substr($row['datetime'], 0, 16)."</td>
                                        <td><a href='".$row['img_dir']."' target='_blank'>링크&nbsp;<i class='notika-icon notika-next'></i></a></td>
                                        <td><a class='btn btn-success notika-btn-success' href='./portfolio_editor.php?id=".$row['id']."'>수정</a>&nbsp;&nbsp;<a class='btn btn-warning notika-btn-warning' OnClick='del(".$row['id'].");'>삭제</a></td>
                                    </tr>
                                        ";
                                      }
                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>이름</th>
                                        <th>설명</th>
                                        <th>작성 / 수정</th>
                                        <th>최종 수정일</th>
                                        <th>이미지</th>
                                        <th>편집</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End--
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
    <script src="../js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="../js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="../js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="../js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="../js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="../js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="../js/counterup/jquery.counterup.min.js"></script>
    <script src="../js/counterup/waypoints.min.js"></script>
    <script src="../js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="../js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="../js/sparkline/jquery.sparkline.min.js"></script>
    <script src="../js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="../js/flot/jquery.flot.js"></script>
    <script src="../js/flot/jquery.flot.resize.js"></script>
    <script src="../js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="../js/knob/jquery.knob.js"></script>
    <script src="../js/knob/jquery.appear.js"></script>
    <script src="../js/knob/knob-active.js"></script>
    <!--  wave JS
		============================================ -->
    <script src="../js/wave/waves.min.js"></script>
    <script src="../js/wave/wave-active.js"></script>
    <!--  animation JS
        ============================================ -->
    <script src="../js/animation/animation-active.js"></script>
    <!--  Chat JS
		============================================ -->
    <script src="../js/chat/jquery.chat.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="../js/todo/jquery.todo.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="../js/plugins.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="../js/plugins.js"></script>
    <!-- Data Table JS
		============================================ -->
    <script src="../js/data-table/jquery.dataTables.min.js"></script>
    <script src="../js/data-table/data-table-act.js"></script>
    <!-- main JS
		============================================ -->
    <script src="../js/main.js"></script>

    <!-- Delete -->
    <script>
        function del(id) {
            var response = confirm("정말로 해당 포트폴리오를 삭제하시겠습니까?\n삭제 후에는 취소할 수 없습니다");
            if (response == true) {
                location.href="./portfolio_del.php?id=" + id;
            }
        }
    </script>
</body>

</html>