<!-- 
  pf.hwahyang.space (v1)
  20220407 수정본.
  20200205 개발시작, 20200205 초기배포

  © 2017-2022 화향

  구축 할 시간 없어서 byolet.com 복붙
-->

<!-- PHP 기본지정 시작. -->

<?php

// Mysql
$conn = mysqli_connect("localhost", "hwahyang_pf_v1", "rrFevF#rdwN2mA-@Ah=W8xfBn5R%4m+K", "hwahyang_pf_v1");
if(mysqli_connect_errno()) {
  //echo '<!DOCTYPE HTML><html><head><meta charset="utf-8" /><script>alert("일시적 서버 오류입니다.");</script></head><body></body></html>';
  header("Location: http://pf-v1.hwahyang.space/err/?code=500");
}

mysqli_query($conn, "set session character_set_connection=utf8;");
mysqli_query($conn, "set session character_set_results=utf8;");
mysqli_query($conn, "set session character_set_client=utf8;");

$result_set = mysqli_query($conn, "SELECT * FROM `users` WHERE `id`=1");
$row = mysqli_fetch_array($result_set);
$hwa_mail = $row['email'];
$result_set = mysqli_query($conn, "SELECT * FROM `users` WHERE `id`=1");
$row = mysqli_fetch_array($result_set);
$violet_img = $row['profile_dir'];
$violet_mail = $row['email'];
$asddddd = mysqli_query($conn, "SELECT * FROM `portfolio`");

// Page URL
$http_host = $_SERVER['HTTP_HOST'];
$request_uri = $_SERVER['REQUEST_URI'];

// GET
if ( empty($_GET['checked']) ) {
  $notchecked = true;
  $suffix = '&checked=false';
} else {
  if ( $_GET['checked'] == 'true') {
    $notchecked = false;
    $suffix = '&checked=true';
  } else {
    $notchecked = true;
    $suffix = '&checked=false';
  }
}

// Check Mobile
$mAgent = array("iPhone","iPod","Android","Blackberry", "Opera Mini", "Windows ce", "Nokia", "sony");
$chkMobile = false;
for($i=0; $i<sizeof($mAgent); $i++){
    if(stripos( $_SERVER['HTTP_USER_AGENT'], $mAgent[$i] )){
        $chkMobile = true;
        break;
    }
}

// Redirect
//if($chkMobile and $notchecked) {
//  header('Location: http://pf-v1.hwahyang.space/mobile/?redirect=http://'.$http_host.$request_uri);
//} else {
//  $suffix = '&checked=true';
//}
?>

<!-- PHP 기본지정 끝, HTML 시작 -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    
    <!-- 기본 메타 -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title class="browser-title">화향's Portfolio</title>
    <meta name="description" content="화향 / Developer, Director" />
    
    <!-- 파비콘 -->
    <link rel="apple-touch-icon" sizes="57x57" href="img/farvicon/57X57_HwaHyang_08_Alpha.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/farvicon/60X60_HwaHyang_08_Alpha.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/farvicon/72X72_HwaHyang_08_Alpha.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/farvicon/76X76_HwaHyang_08_Alpha.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/farvicon/114X114_HwaHyang_08_Alpha.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/farvicon/120X120_HwaHyang_08_Alpha.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/farvicon/144X144_HwaHyang_08_Alpha.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/farvicon/152X152_HwaHyang_08_Alpha.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/farvicon/180X180_HwaHyang_08_Alpha.png">
    <link rel="icon" type="image/png" sizes="192x192" href="img/farvicon/192X192_HwaHyang_08_Alpha.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/farvicon/32X32_HwaHyang_08_Alpha.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/farvicon/96X96_HwaHyang_08_Alpha.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/farvicon/16X16_HwaHyang_08_Alpha.png">
    
    <!-- 루트 정의 -->
    <link rel="canonical" href="http://pf-v1.hwahyang.space">
    
    <!-- 정체성 -->
    <meta name="title" content="화향's Portfolio" class="meta-title">
    <meta name="description" content="화향 / Developer, Director" class="meta-desc">
    <meta name="keywords" content="포트폴리오, 화향, 개발, 채팅봇, 디스코드, 유튜브, 트위터, 페이스북, 타이포, 영상, 애펙, 프리미어, PV, 동인">
    <meta name="apple-mobile-web-app-title" content="화향's Portfolio">
    <link rel="image_src" href="https://pf-v1.hwahyang.space/img/farvicon/192X192_HwaHyang_08_Alpha.png">
    
    <!-- 메인컬러 -->
    <meta name="theme-color" content="#edb2fc">
    
    <!-- SNS 메타 -->
      <!-- Facebook / Discord -->
      <meta property="og:site_name" content="화향's Portfolio" class="meta-title">
      <meta property="og:title" content="화향's Portfolio" class="meta-title">
      <meta property="og:description" content="화향 / Developer, Director" class="meta-desc">
      <meta property="og:type" content="website">
      <meta property="og:locale" content="KR">
      <meta property="og:url" content="http://pf-v1.hwahyang.space">
      <meta property="og:image" content="https://pf-v1.hwahyang.space/img/farvicon/192X192_HwaHyang_08_Alpha.png">
      <meta property="og:image:width" content="192">
      <meta property="og:image:height" content="192">
    
      <!-- Twitter -->
      <meta name="twitter:card" content="summary">
      <meta name="twitter:title" content="화향's Portfolio" class="meta-title">
      <meta name="twitter:description" content="화향 / Developer, Director" class="meta-desc">
      <meta name="twitter:url" content="http://pf-v1.hwahyang.space">
      <meta name="twitter:image" content="https://pf-v1.hwahyang.space/img/farvicon/192X192_HwaHyang_08_Alpha.png"> <!-- 200*200px -->
    
      <!-- MS -->
      <meta name="msapplication-TileColor" content="#edb2fc">
      <meta name="msapplication-TileImage" content="https://pf-v1.hwahyang.space/img/farvicon/144X144_HwaHyang_08_Alpha.png"> <!-- 144*144px -->
    <!-- // SNS 메타 -->
    
    <!-- 자동 태깅 방지 -->
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="email=no">
    
    <!-- 부트 css -->
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    
    <!-- 슬라이더 css -->
    <link href="css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="css/owl.theme.css" rel="stylesheet" media="screen">
    <link href="css/animate.css" rel="stylesheet" media="screen">
    
    <!-- lightbox Stylesheet -->
    <link rel="stylesheet" type="text/css"  href="css/lity.css">
    
    <!-- Stylesheet -->
    <link rel="stylesheet" type="text/css"  href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600|Montserrat:100,200,300,300i,400,500,600,700,800,900|Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/modernizr.custom.js"></script>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
<div id="main-block"> 
  
  <!-- 헤더 시작 -->
  <header id="top-header">
    <div class="container">
      <div class="row">
        <div class="col-md-3 header-col-1"><a href="javascript:void(0);" class="company-logo"> <img src="img/farvicon/100X110_HwaHyang_08_Alpha.png" class="pull-left logo"></a></div>
        <div class="col-md-6  header-col-2"> <a href="javascript:void(0);" class="company-logo"> <img src="img/farvicon/100X110_HwaHyang_08_Alpha.png" class="pull-left logo"></a>
          <div class="clearfix"></div>
          <span class="company-name">Develop, Directing&nbsp;</span>
          <p class="head-content wow fadeInDown">화향's Portfolio</p>
          <!-- 요거 쓸모없어서 그냥 지워버렸는데 나중에 필요하면 써야지ㅣ
            <span class="header-tagline">-  Develop by. 화향</span>-->
        </div>
      </div>
    </div>
  </header>
  <!-- 헤더 끝 -->
  
  <!-- 배너 시작 -->
  <Section id="home-banner" >
    <div class="wow fdeInUp"  data-wow-duration="1s"> 
      
      <!-- 프로필 시작 -->
      <div class="col-md-6 row-with-content" >
        <div class="content-row">
          <h1>화향</h1>
          <span>Developer, Director</span><a href="#portfolio">작업물 확인하기 &rightarrow;</a>
        </div>
      </div>
      <!-- 프로필 끝 --> 
      
      <!-- 이미지 정의 -->
      <div class="col-md-6 row-without-content" style="background-image:url(<?php echo $violet_img; ?>);"></div>
    </div>
  </Section>
  
  <!-- 포트폴리오 시작 -->
  <section id="portfolio">
    <div class="container">
      <!-- 템플릿이 이상해서 억지부렸음!! 시간나면 css 뜯어야지,, -->
      <center>
        <br>
        <h1>디자인 작업물</h1>
        <br>
        <!--<h4><font color="gray">설명</font></h4>-->
        <h5><font color="gray">이미지를 클릭하여 자세한 정보를 보실 수 있습니다</font></h5>
        <div class="checkbox checkbox-warning">
          <!-- 2019년 8월 5일부로 내가 불편해서 새탭에서 포트폴리오 인포 열수있게 했음. 생각보다 간단한데 삽질했더라 -->
          <input type="checkbox" id="newtab" class="newtab"<?php if ( empty($_GET['pf_newtab']) ) { echo ''; } else { if ( $_GET['pf_newtab'] == "on" ) { echo ' checked'; } else { echo ''; } } ?>></input>
          <label>새탭에서 링크열기</label>
        </div>
        <br>
      </center>
      
      <div class="categories">
        <ul class="cat">
          <li>
            <ol class="type">
              <!-- 카테고리 정의 시작 -->
              <li><a href="#" data-filter="*" class="active">전체</a></li>
              <li><a href="#" data-filter=".typo">타이포그래피</a></li>
              <li><a href="#" data-filter=".pv">P/V</a> </li>
              <li><a href="#" data-filter=".webdev">웹 개발</a></li>
              <li><a href="#" data-filter=".botdev">채팅봇 개발</a></li>
              <li><a href="#" data-filter=".etc">기타</a></li>
              <!-- 카테고리 정의 끝 -->
            </ol>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div id="pic-block" class="photos clearfix">
        <!-- [div class="photo" + 필터명] 으로 사용함 -->
        <!--
          a href :: 원본
          img src :: 썸네일
          data-lity :: iframe 사용
        -->

        <?php 
          while ($row = mysqli_fetch_array($asddddd)) {
            if ($row['filter'] == "null") {
              $filter = "";
            } else {
              $filter = $row['filter'];
            }

            if ($filter == "null") {
              $ko_filter = "카테고리없음";
            } else if ($filter == "typo") {
              $ko_filter = "타이포그래피";
            } else if ($filter == "pv") {
              $ko_filter = "P/V";
            } else if ($filter == "webdev") {
              $ko_filter = "웹 개발";
            } else if ($filter == "botdev") {
              $ko_filter = "채팅봇 개발";
            } else if ($filter == "etc") {
              $ko_filter = "기타";
            } else {
              $ko_filter = "정의되지않음_".$filter;
            }
            echo '<div class="photo '.$filter.'"><a href="javascript:void(0);" OnClick="pf_open(\'/info.php?id='.$row['id'].$suffix.'\');" class="portfolio-link"><i class="fa fa-link"></i></a> <a href="javascript:void(0);" OnClick="pf_open(\'/info.php?id='.$row['id'].$suffix.'\');" title="'.$ko_filter.'_'.$row['name'].'"><img src="'.$row['thumb_dir'].'" alt="'.$ko_filter.'_'.$row['name'].'" /></a></div>
            ';
          }
        ?>
      </div>
    </div>
  </section>
  <!-- 포트폴리오 끝 -->

  <br><br>

  <!-- 푸터 시작 -->
  <footer class="footer-bottom">
    <div class="container">
      <div class="row text-center"> 
        
        <!--로고 -->
        <div class="col-md-12 footer-logos"> <a href="javascript:void(0);" class="company-logo"> <img src="img/farvicon/100X110_HwaHyang_08_Alpha.png" class="logo"></a> <span class="company-name">Portfolio</span> </div>
        
        <!-- 네비게이션 -->
        <div class="col-md-12 footer-nav">
          <ul>
            <li><a href="/post.php?id=1<?php echo $suffix; ?>">이메일 무단 수집거부</a></li>
            <li><a href="/?pf_newtab=<?php if ( empty($_GET['pf_newtab']) ) { echo 'off'; } else { echo $_GET['pf_newtab']; } echo $suffix; ?>">홈</a></li>
            <li><a href="mailto:<?php echo $hwa_mail; ?>">이메일</a></li>
          </ul>
        </div>
        
        <!-- 소셜 -->
        <div class="col-md-12 footer-social">
          <ul>
            <li><a href="https://twitter.com/_hwahyang_" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://youtube.com/c/화향" target="_blank"><i class="fa fa-youtube"></i></a></li>
            <li><a href="https://facebook.com/hwahyang1" target="_blank"><i class="fa fa-facebook"></i></a></li>
          </ul>
        </div>
        
        <!-- 저작권 -->
        <div class="col-md-12 footer-copyright">
          <p>© 2017-2020 화향 | 디자인 : <a href="https://dcrazed.com">Dcrazed</a></p>
        </div>
      </div>
    </div>
  </footer>
  <!-- 푸터 끝 -->
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script type="text/javascript" src="js/bootstrap.js"></script>
<!--<script type="text/javascript" src="js/SmoothScroll.js"></script>-->
<script type="text/javascript" src="js/lity.js"></script> 
<script src="js/owl.carousel.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 

<!-- Custom Javascripts --> 
<script type="text/javascript" src="js/main.js"></script> 
<script src="js/wow.min.js"></script> 
<!--<script src="js/imagesloaded.js"></script>-->
<script src="js/classie.js"></script> 
<script src="js/AnimOnScroll.js"></script> 
  
  <!-- masonry layout --> 
  <script>
    $(function(){
      var $container = $('#pic-block');
  
      $container.imagesLoaded( function(){
        $container.isotope({
          itemSelector : '.photo'
        });
      });
      
    });
  </script>
  
  <script>
    // Scroll animation
    new AnimOnScroll( document.getElementById( 'grid' ), {
      minDuration : 0.4,
      maxDuration : 0.7,
      viewportFactor : 0.2
    });
  
    // wow
    new WOW().init();
  </script> 
  
  <!-- Lty Lightbox --> 
  <script>
    // Bind as an event handler
    $(document).on('click', '[data-lightbox]', lity);;
  </script>
  
  <script>
    new WOW().init();
  </script>
  
  <script>
    // Bind as an event handler
    $(document).on('click', '[data-lightbox]', lity);
  </script>

  <!-- 새탭열기 부분. 포폴 클릭하면 인풋값 읽어서 작동되게 함. -->
  <script>
    function pf_open(url) {
      try {
        var newtab_onoff = document.querySelector('.newtab:checked').value;
      } catch {
        var newtab_onoff = "off";
      };

      if (newtab_onoff == "on") {
        var win = window.open(url + '&pf_newtab=on', '_blank');
        win.focus();
      } else {
        location.href = url + '&pf_newtab=off';
      }
    }
  </script>

</body>
</html>
