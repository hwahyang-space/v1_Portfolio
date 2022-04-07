<!-- 
  pf.hwahyang.space (v1)
  20220407 수정본.
  20200205 개발시작, 20200205 초기배포

  © 2017-2022 화향
-->

<!-- PHP 기본지정 시작. -->

<?php
// Redirect

if(empty($_GET['id'])) {
  echo '<!DOCTYPE HTML><html><head><meta charset="utf-8" /><script>alert("삭제되었거나 존재하지 않는 게시물 입니다\n메인페이지로 이동합니다.");</script><meta http-equiv="refresh" content="0; url=/"></meta></head></html>';
  exit;
} else {
  if ($_GET['id'] != "1") {
    echo '<!DOCTYPE HTML><html><head><meta charset="utf-8" /><script>alert("삭제되었거나 존재하지 않는 게시물 입니다\n메인페이지로 이동합니다.");</script><meta http-equiv="refresh" content="0; url=/"></meta></head></html>';
    exit;
  }
}

// Mysql
$conn = mysqli_connect("localhost", "hwahyang_pf_v1", "rrFevF#rdwN2mA-@Ah=W8xfBn5R%4m+K", "hwahyang_pf_v1");
if(mysqli_connect_errno()) {
  header("Location: http://pf-v1.hwahyang.space/err/?code=500");
}

mysqli_query($conn, "set session character_set_connection=utf8;");
mysqli_query($conn, "set session character_set_results=utf8;");
mysqli_query($conn, "set session character_set_client=utf8;");

$result_set = mysqli_query($conn, "SELECT * FROM `users` WHERE `id`=1");
$row = mysqli_fetch_array($result_set);
$editor_img = $row['profile_dir'];
$hwa_mail = $row['email'];
$result_set = mysqli_query($conn, "SELECT * FROM `users` WHERE `id`=2");
$row = mysqli_fetch_array($result_set);
$violet_mail = $row['email'];
mysqli_close($conn);

// Page URL
$http_host = $_SERVER['HTTP_HOST'];
$request_uri = $_SERVER['REQUEST_URI'];

// GET
try {
  if ( $_GET['checked'] == 'true') {
    $notchecked = false;
    $suffix = '&checked=true';
  } else {
    $notchecked = true;
    $suffix = '&checked=false';
  }
} catch ( Exception $e ) {
  $notchecked = true;
  $suffix = '&checked=false';
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

<!doctype html>
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
    <meta name="title" content="이메일 무단 수집거부" class="meta-title">
    <meta name="description" content="화향 / Developer, Director" class="meta-desc">
    <meta name="keywords" content="포트폴리오, 화향, 개발, 채팅봇, 디스코드, 유튜브, 트위터, 페이스북, 타이포, 영상, 애펙, 프리미어, PV, 동인">
    <meta name="apple-mobile-web-app-title" content="title">
    <link rel="image_src" href="http://pf-v1.hwahyang.space/img/bg-2.jpg">
    
    <!-- 메인컬러 -->
    <meta name="theme-color" content="#edb2fc">
    
    <!-- SNS 메타 -->
      <!-- Facebook / Discord -->
      <meta property="og:site_name" content="화향's Portfolio" class="meta-title">
      <meta property="og:title" content="이메일 무단 수집거부" class="meta-title">
      <meta property="og:description" content="화향 / Developer, Director" class="meta-desc">
      <meta property="og:type" content="website">
      <meta property="og:locale" content="KR">
      <meta property="og:url" content="http://pf-v1.hwahyang.space/post.php?id=1">
      <meta property="og:image" content="http://pf-v1.hwahyang.space/img/bg-2.jpg">
      <!--<meta property="og:image:width" content="">
      <meta property="og:image:height" content="">-->
    
      <!-- Twitter -->
      <meta name="twitter:card" content="summary">
      <meta name="twitter:title" content="이메일 무단 수집거부" class="meta-title">
      <meta name="twitter:description" content="화향 / Developer, Director" class="meta-desc">
      <meta name="twitter:url" content="http://pf-v1.hwahyang.space/post.php?id=1">
      <meta name="twitter:image" content="http://pf-v1.hwahyang.space/img/bg-2.jpg"> <!-- 200*200px -->
    
      <!-- MS -->
      <meta name="msapplication-TileColor" content="#edb2fc">
      <meta name="msapplication-TileImage" content="http://pf-v1.hwahyang.space/img/bg-2.jpg"> <!-- 144*144px -->
    
    <!-- // SNS -->
    
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

<body class="single ">
<!--Top Nav content-->
<div id="main-block"> 
  
  <!-- Header section -->
  <header id="top-header">
    <div class="container">
      <div class="row">
        <div class="col-md-3 header-col-1"><a href="javascript:void(0);" class="company-logo"> <img src="img/farvicon/100X110_HwaHyang_08_Alpha.png" class="pull-left logo"></a></div>
        <div class="col-md-6  header-col-2"> <a href="javascript:void(0);" class="company-logo"> <img src="img/farvicon/100X110_HwaHyang_08_Alpha.png" class="pull-left logo"></a>
          <div class="clearfix"></div>
          <span class="company-name">Portfolio</span>
      </div>
    </div>
  </header>
  <!-- /Header section -->
  
  <header class="entry-header" style="background-image: url(img/bg-2.jpg);">
    <div class="content wow fdeInUp">
      <div class="container">
        <a href="javascript:void(0);"><h1>이메일 무단 수집거부</h1></a>
        <span class="date-article">2019-07-11 21:42 수정</span> </div>
    </div>
  </header>
  
  <!--Post container-->
  
  <div class="container">
    <div class="row wow fdeInUp"> 
      <!--blog posts container-->
      <div class="col-md-8 col-md-offset-2 col-sm-12 single-post">
        <article class="post">
            <p>본 웹사이트에 게시된 이메일 주소가 전자우편 수집 프로그램이나 그 밖의 기술적 장치 를 이용하여 무단으로 수집되는 것을 거부하며, 이를 위반시 정보통신망법에 의해 형사 처벌됨을 유념하시기 바랍니다.</p>
            <p></p>
            <p><strong>< 정보통신망 이용촉진 및 정보보호 등에 관한 법률 ></strong></p>
            <p>
                <strong>제50조의2 (전자우편주소의 무단 수집행위 등 금지)</strong>
                <ol>
	                <li>누구든지 인터넷 홈페이지 운영자 또는 관리자의 사전 동의 없이 인터넷 홈페이지에서 자동으로 전자우편주소를 수집 하는 프로그램 그 밖의 기술적 장치를 이용하여 전자우편주소를 수집하여서는 아니된다.</li>
	                <li>누구든지 제1항의 규정을 위반하여 수집된 전자우편주소를 판매ㆍ유통하여서는 아니된다.</li>
	                <li>누구든지 제1항 및 제2항의 규정에 의하여 수집ㆍ판매 및 유통이 금지된 전자우편주소임을 알고 이를 정보 전송에 이용하여서는 아니된다.</li>
                </ol>
            </p>
            <p>
                <strong>제74조 (벌칙) 다음 각호의 1에 해당하는 자는 1천만원 이하의 벌금에 처한다.</strong>
                <ol>
	                <li>제8조제4항의 규정을 위반하여 표시ㆍ판매 또는 판매할 목적으로 진열한 자</li>
	                <li>제44조의7제1항제1호의 규정을 위반하여 음란한 부호ㆍ문언ㆍ음향ㆍ화상 또는 영상을 배포ㆍ판매ㆍ임대하거나 공연히 전시한 자</li>
                    <li>제44조의7제1항제3호의 규정을 위반하여 공포심이나 불안감을 유발하는 부호ㆍ문언ㆍ음향ㆍ화상 또는 영상을 반복적으로 상대방에게 도달하게 한 자</li>
	                <li>제50조제6항의 규정을 위반하여 기술적 조치를 한 자</li>
    	            <li>제50조의8의 규정을 위반하여 광고성 정보를 전송한 자 제50조의2의 규정을 위반하여 전자우편 주소를 수집ㆍ판매ㆍ유통 또는 정보전송에 이용한 자</li>
	                <li>제50조의8의 규정을 위반하여 광고성 정보를 전송한 자</li>
	                <li>제53조제4항을 위반하여 등록사항의 변경등록 또는 사업의 양도ㆍ양수 또는 합병ㆍ상속의 신고를 하지 아니한 자</li>
                </ol>
            </p>
        </article>
        <div class="clearfix"></div>
        
        <!--publisher-info -->
        <div class="publisher-info">
          <img src="<?php echo $editor_img; ?>">
          <h6><b>화향</b> 님이 작성</h6>
          &nbsp;&nbsp;&nbsp;
          <img src="img/cross-01.png">
          <h6>수정자 없음</h6>
        </div>
        <!--/publisher-info--> 
        
        <!--share -->
        <div class="share-article">
          <ul>
            <li><a href="javascript:void(0);" id="linkcopy"><i class="fa fa-share-alt"></i></a></li>
            <li><a href="javascript:void(0);" OnClick="notinoti();"><i class="fa fa-comment"></i></a></li>
            <li><a href="javascript:void(0);" OnClick="notinoti();"><i class="fa fa-facebook"></i></a></li>
            <li><a href="javascript:void(0);" OnClick="notinoti();"><i class="fa fa-twitter"></i></a></li>
          </ul>
        </div>
        <!--/share-->
        
        <hr>
        <div class="clearfix"></div>
        
        <!--posts navigation-->
        <nav class="navigation posts-navigation"  role="navigation">
          <ul>
            <li class="pull-left">
              <div class="nav-previous"><a href="?id=1"><i class="fa fa-chevron-left"></i> 이전 게시글로</a></div>
            </li>
            <li class="pull-right">
              <div class="nav-next"><a href="?id=1">다음 게시글로 <i class="fa fa-chevron-right"></i></a></div>
            </li>
          </ul>
        </nav>
        <!--/posts navigation-->
        
        <br><br>
        
      </div>
      <!--blog posts container-->
      
      <div class="clearfix"></div>
    </div>
  </div>
  
  <!--/Post container-->
  
  <footer class="footer-bottom">
    <div class="container">
      <div class="row text-center"> 
        
        <!--footer logos-->
        <div class="col-md-12 footer-logos"> <a href="javascript:void(0);" class="company-logo"> <img src="img/farvicon/100X110_HwaHyang_08_Alpha.png" class="logo"></a> <span class="company-name">Portfolio</span> </div>
        <!--/footer logos--> 
        
        <!--footer nav-->
        <div class="col-md-12 footer-nav">
          <ul>
            <li><a href="post.php?id=1<?php echo $suffix; ?>">이메일 무단 수집거부</a></li>
            <li><a href="/?pf_newtab=<?php if ( empty($_GET['pf_newtab']) ) { echo 'off'; } else { echo $_GET['pf_newtab']; } echo $suffix; ?>">홈</a></li>
            <li><a href="mailto:<?php echo $hwa_mail; ?>">이메일</a></li>
          </ul>
        </div>
        <!--/footer nav--> 
        
        <!--footer social-->
        <div class="col-md-12 footer-social">
          <ul>
            <li><a href="https://twitter.com/_hwahyang_" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://youtube.com/c/화향" target="_blank"><i class="fa fa-youtube"></i></a></li>
            <li><a href="https://facebook.com/hwahyang1" target="_blank"><i class="fa fa-facebook"></i></a></li>
          </ul>
        </div>
        <!--/footer social--> 
        
        <!--footer copyright-->
        <div class="col-md-12 footer-copyright">
          <p>© 2017-2020 화향 | 디자인 : <a href="https://dcrazed.com">Dcrazed</a></p>
        </div>
        <!--/footer copyright--> 
        
      </div>
    </div>
  </footer>
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

  <!-- Share -->
  <script>
    // Copy to Clipboard
    function copyToClipboard(val) {
      var t = document.createElement("textarea");
      document.body.appendChild(t);
      t.value = val;
      t.select();
      document.execCommand('copy');
      document.body.removeChild(t);
    }
    $('#linkcopy').click(function() {
      copyToClipboard(document.location.href);
      alert('클립보드에 현재 링크가 복사되었습니다!');
    });
  </script>

  <script>
    // Noti
    function notinoti() {
      alert("해당 페이지에서는 지원하지 않습니다.")
    }
  </script>
</body>
</html>
