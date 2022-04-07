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
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="../css/normalize.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="../css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="../css/notika-custom-icon.css">
    <!-- dropzone CSS
		============================================ -->
    <link rel="stylesheet" href="../css/dropzone/dropzone.css">
    <!-- wysiwyg CSS
		  ============================================ -->
    <link href="../css/editor/editor.css" rel="stylesheet" type="text/css" />
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
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcomb area End-->
    <!-- Compose email area Start-->
    <div class="inbox-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="inbox-left-sd">
                            <div class="compose-ml">
                                <br>
                                <a class="btn" href="./portfolio.php">&leftarrow; 목록으로</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                        <div class="view-mail-list sm-res-mg-t-30">
                            <div class="view-mail-hd">
                                <div class="view-mail-hrd">
                                    <h2>포트폴리오 추가 / 수정</h2>
                                </div>
                            </div>
                            <form action="../../portfolio_edit.php" method="POST" enctype="multipart/form-data">
                            <div class="cmp-int mg-t-20">
                                <div class="row">
                                    <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12">
                                        <div class="cmp-int-lb cmp-int-lb1 text-right">
                                            <span>ID: </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-11 col-md-10 col-sm-10 col-xs-12">
                                        <div class="form-group">
                                            <div class="nk-int-st cmp-int-in cmp-email-over">
                                                <input type="text" class="form-control" name="num" id="num" value="<?php echo $_GET['id']; ?>" readonly />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12">
                                        <div class="cmp-int-lb cmp-int-lb1 text-right">
                                            <span>구분: </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-11 col-md-10 col-sm-10 col-xs-12">
                                        <div class="form-group">
                                            <div class="nk-int-st cmp-int-in cmp-email-over">
                                                <br>
                                                <select name='filters'>
                                                    <optgroup label="선택 안함">
                                                        <option value="null" <?php $id = $_GET['id']; if ($id == "new") { echo "selected='selected'"; } else { $conn = mysqli_connect("localhost", "hwahyang_pf", "rrFevF#rdwN2mA-@Ah=W8xfBn5R%4m+K", "hwahyang_pf"); if (mysqli_connect_errno()) { echo '서버와의 연결이 유효하지 않습니다. 잠시 후 다시 시도하여 주세요.'; exit; } mysqli_query($conn, "set session character_set_connection=utf8;"); mysqli_query($conn, "set session character_set_results=utf8;"); mysqli_query($conn, "set session character_set_client=utf8;"); $select_query = "SELECT filter FROM portfolio WHERE `id`='".$id."'"; $result_set = mysqli_query($conn, $select_query); $row = mysqli_fetch_array($result_set); $filter = $row['filter']; if ($filter == "null") { echo "selected='selected'"; } } ?>>선택 안함</option>
                                                    </optgroup>
                                                    <optgroup label="영상">
                                                        <option value="typo" <?php $id = $_GET['id']; if ($id == "new") { echo ""; } else { $conn = mysqli_connect("localhost", "hwahyang_pf", "rrFevF#rdwN2mA-@Ah=W8xfBn5R%4m+K", "hwahyang_pf"); if (mysqli_connect_errno()) { echo '서버와의 연결이 유효하지 않습니다. 잠시 후 다시 시도하여 주세요.'; exit; } mysqli_query($conn, "set session character_set_connection=utf8;"); mysqli_query($conn, "set session character_set_results=utf8;"); mysqli_query($conn, "set session character_set_client=utf8;"); $select_query = "SELECT filter FROM portfolio WHERE `id`='".$id."'"; $result_set = mysqli_query($conn, $select_query); $row = mysqli_fetch_array($result_set); $filter = $row['filter']; if ($filter == "typo") { echo "selected='selected'"; } } ?>>- 타이포그래피</option>
                                                        <option value="pv" <?php $id = $_GET['id']; if ($id == "new") { echo ""; } else { $conn = mysqli_connect("localhost", "hwahyang_pf", "rrFevF#rdwN2mA-@Ah=W8xfBn5R%4m+K", "hwahyang_pf"); if (mysqli_connect_errno()) { echo '서버와의 연결이 유효하지 않습니다. 잠시 후 다시 시도하여 주세요.'; exit; } mysqli_query($conn, "set session character_set_connection=utf8;"); mysqli_query($conn, "set session character_set_results=utf8;"); mysqli_query($conn, "set session character_set_client=utf8;"); $select_query = "SELECT filter FROM portfolio WHERE `id`='".$id."'"; $result_set = mysqli_query($conn, $select_query); $row = mysqli_fetch_array($result_set); $filter = $row['filter']; if ($filter == "pv") { echo "selected='selected'"; } } ?>>- P/V</option>
                                                    </optgroup>
                                                    <optgroup label="개발">
                                                        <option value="webdev" <?php $id = $_GET['id']; if ($id == "new") { echo ""; } else { $conn = mysqli_connect("localhost", "hwahyang_pf", "rrFevF#rdwN2mA-@Ah=W8xfBn5R%4m+K", "hwahyang_pf"); if (mysqli_connect_errno()) { echo '서버와의 연결이 유효하지 않습니다. 잠시 후 다시 시도하여 주세요.'; exit; } mysqli_query($conn, "set session character_set_connection=utf8;"); mysqli_query($conn, "set session character_set_results=utf8;"); mysqli_query($conn, "set session character_set_client=utf8;"); $select_query = "SELECT filter FROM portfolio WHERE `id`='".$id."'"; $result_set = mysqli_query($conn, $select_query); $row = mysqli_fetch_array($result_set); $filter = $row['filter']; if ($filter == "webdev") { echo "selected='selected'"; } } ?>>- 웹 개발</option>
                                                        <option value="botdev" <?php $id = $_GET['id']; if ($id == "new") { echo ""; } else { $conn = mysqli_connect("localhost", "hwahyang_pf", "rrFevF#rdwN2mA-@Ah=W8xfBn5R%4m+K", "hwahyang_pf"); if (mysqli_connect_errno()) { echo '서버와의 연결이 유효하지 않습니다. 잠시 후 다시 시도하여 주세요.'; exit; } mysqli_query($conn, "set session character_set_connection=utf8;"); mysqli_query($conn, "set session character_set_results=utf8;"); mysqli_query($conn, "set session character_set_client=utf8;"); $select_query = "SELECT filter FROM portfolio WHERE `id`='".$id."'"; $result_set = mysqli_query($conn, $select_query); $row = mysqli_fetch_array($result_set); $filter = $row['filter']; if ($filter == "botdev") { echo "selected='selected'"; } } ?>>- 채팅봇 개발</option>
                                                    </optgroup>
                                                    <optgroup label="기타">
                                                        <option value="etc" <?php $id = $_GET['id']; if ($id == "new") { echo ""; } else { $conn = mysqli_connect("localhost", "hwahyang_pf", "rrFevF#rdwN2mA-@Ah=W8xfBn5R%4m+K", "hwahyang_pf"); if (mysqli_connect_errno()) { echo '서버와의 연결이 유효하지 않습니다. 잠시 후 다시 시도하여 주세요.'; exit; } mysqli_query($conn, "set session character_set_connection=utf8;"); mysqli_query($conn, "set session character_set_results=utf8;"); mysqli_query($conn, "set session character_set_client=utf8;"); $select_query = "SELECT filter FROM portfolio WHERE `id`='".$id."'"; $result_set = mysqli_query($conn, $select_query); $row = mysqli_fetch_array($result_set); $filter = $row['filter']; if ($filter == "etc") { echo "selected='selected'"; } } ?>>- 기타</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12">
                                        <div class="cmp-int-lb text-right">
                                            <span>제목: </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-11 col-md-10 col-sm-10 col-xs-12">
                                        <div class="form-group cmp-em-mg">
                                            <div class="nk-int-st cmp-int-in cmp-email-over">
                                                <input type="text" class="form-control" placeholder="작품명" value="<?php $id = $_GET['id']; if ($id == "new") { echo ""; } else { $conn = mysqli_connect("localhost", "hwahyang_pf", "rrFevF#rdwN2mA-@Ah=W8xfBn5R%4m+K", "hwahyang_pf"); if (mysqli_connect_errno()) { echo '서버와의 연결이 유효하지 않습니다. 잠시 후 다시 시도하여 주세요.'; exit; } mysqli_query($conn, "set session character_set_connection=utf8;"); mysqli_query($conn, "set session character_set_results=utf8;"); mysqli_query($conn, "set session character_set_client=utf8;"); $select_query = "SELECT name FROM portfolio WHERE `id`='".$id."'"; $result_set = mysqli_query($conn, $select_query); $row = mysqli_fetch_array($result_set); echo $row["name"]; } ?>" name="name" id="name" required />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12">
                                        <div class="cmp-int-lb text-right">
                                            <span>작성: </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-11 col-md-10 col-sm-10 col-xs-12">
                                        <div class="form-group cmp-em-mg">
                                            <div class="nk-int-st cmp-int-in cmp-email-over">
                                                <input type="text" class="form-control" placeholder="작성자" value="<?php $id = $_GET['id']; if ($id == "new") { echo $_SESSION['user_name']; } else { $conn = mysqli_connect("localhost", "hwahyang_pf", "rrFevF#rdwN2mA-@Ah=W8xfBn5R%4m+K", "hwahyang_pf"); if (mysqli_connect_errno()) { echo '서버와의 연결이 유효하지 않습니다. 잠시 후 다시 시도하여 주세요.'; exit; } mysqli_query($conn, "set session character_set_connection=utf8;"); mysqli_query($conn, "set session character_set_results=utf8;"); mysqli_query($conn, "set session character_set_client=utf8;"); $select_query = "SELECT author FROM portfolio WHERE `id`='".$id."'"; $result_set = mysqli_query($conn, $select_query); $row = mysqli_fetch_array($result_set); echo $row["author"]; } ?>" name="author" id="author" readonly />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12">
                                        <div class="cmp-int-lb text-right">
                                            <span>수정: </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-11 col-md-10 col-sm-10 col-xs-12">
                                        <div class="form-group cmp-em-mg">
                                            <div class="nk-int-st cmp-int-in cmp-email-over">
                                                <input type="text" class="form-control" placeholder="수정자" value="<?php $id = $_GET['id']; if ($id == "new") { echo ""; } else { echo $_SESSION['user_name']; } ?>" name="editor" id="editor" readonly />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12">
                                        <div class="cmp-int-lb text-right">
                                            <span>영상: </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-11 col-md-10 col-sm-10 col-xs-12">
                                        <div class="form-group cmp-em-mg">
                                            <div class="nk-int-st cmp-int-in cmp-email-over">
                                                <input type="text" class="form-control" placeholder="올바른 유튜브 링크를 넣어주세요." value="<?php $id = $_GET['id']; if ($id == "new") { echo ""; } else { $conn = mysqli_connect("localhost", "hwahyang_pf", "rrFevF#rdwN2mA-@Ah=W8xfBn5R%4m+K", "hwahyang_pf"); if (mysqli_connect_errno()) { echo '서버와의 연결이 유효하지 않습니다. 잠시 후 다시 시도하여 주세요.'; exit; } mysqli_query($conn, "set session character_set_connection=utf8;"); mysqli_query($conn, "set session character_set_results=utf8;"); mysqli_query($conn, "set session character_set_client=utf8;"); $select_query = "SELECT ytlink FROM portfolio WHERE `id`='".$id."'"; $result_set = mysqli_query($conn, $select_query); $row = mysqli_fetch_array($result_set); echo $row["ytlink"]; } ?>" name="ytlink" id="ytlink" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12">
                                        <div class="cmp-int-lb text-right">
                                            <span>첨부: </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-11 col-md-10 col-sm-10 col-xs-12">
                                        <div class="form-group cmp-em-mg">
                                            <div class="nk-int-st cmp-int-in cmp-email-over">
                                                <input type="file" class="input" name="thumb" id="thumb" /> <b>한번 올라간 첨부파일은 수정이 불가합니다!!!</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12">
                                        <div class="cmp-int-lb text-right">
                                            <span>옵션: </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-11 col-md-10 col-sm-10 col-xs-12">
                                        <div class="form-group cmp-em-mg">
                                            <div class="nk-int-st cmp-int-in cmp-email-over">
                                                <input type="checkbox" class="i-checks" id="resize" name="resize"> <i></i> 이미지 크기 조정안함 <b>(이미지 업로드 시, 문제가 생기면 반드시 체크하세요!!!)</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cmp-int-box mg-t-20">
                                <textarea name="des" id="des">
                                    <?php $id = $_GET['id']; if ($id == "new") { echo ""; } else { $conn = mysqli_connect("localhost", "hwahyang_pf", "rrFevF#rdwN2mA-@Ah=W8xfBn5R%4m+K", "hwahyang_pf"); if (mysqli_connect_errno()) { echo '서버와의 연결이 유효하지 않습니다. 잠시 후 다시 시도하여 주세요.'; exit; } mysqli_query($conn, "set session character_set_connection=utf8;"); mysqli_query($conn, "set session character_set_results=utf8;"); mysqli_query($conn, "set session character_set_client=utf8;"); $select_query = "SELECT description FROM portfolio WHERE `id`='".$id."'"; $result_set = mysqli_query($conn, $select_query); $row = mysqli_fetch_array($result_set); echo $row["description"]; } ?>
                                </textarea>
                            </div>
                            <div class="vw-ml-action-ls text-right mg-t-20">
                                <div class="btn-group ib-btn-gp active-hook nk-email-inbox">
                                    <button class="btn btn-default btn-sm waves-effect" type="submit"><i class="notika-icon notika-edit"></i> 수정 / 등록</button>
                                    <a class="btn btn-default btn-sm waves-effect" OnClick="del(<?php echo $_GET['id']; ?>);"><i class="notika-icon notika-trash"></i> 삭제</a>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Compose email area End-->
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
    <!-- wysiwyg JS
		  ============================================ -->
    <script type="text/javascript" src="../js/editor/editor.js"></script>
    <script src='../js/editor/languages/ko.js'></script>
    <script>
      $(function() {
        $('div#froala-editor').froalaEditor({
          language: 'ko'
        })
      });
    </script>
    <script>
      new FroalaEditor('textarea');
    </script>
    <!-- dropzone JS
        ============================================ -->
    <script src="../js/dropzone/dropzone.js"></script>
    <!--  wave JS
		============================================ -->
    <script src="../js/wave/waves.min.js"></script>
    <script src="../js/wave/wave-active.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="../js/icheck/icheck.min.js"></script>
    <script src="../js/icheck/icheck-active.js"></script>
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

    <!-- Prevent Submit -->
    <script>
        $('textarea[id="des"]').keydown(function() {
            if (event.keyCode === 13) {
                event.preventDefault();
            }
        });
    </script>
</body>

</html>