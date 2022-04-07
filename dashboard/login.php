<?php
session_start();
if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_name'])) {
	
} else {
  echo "<meta http-equiv='refresh' content='0;url=index.php'>";
	exit;
}

?>

<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>로그인 | 로그인되지 않음</title>
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
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="css/wave/waves.min.css">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/notika-custom-icon.css">
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
    <!-- Login Register area Start-->
    <div class="login-content">
        <!-- Login -->
        <div class="nk-block toggled" id="l-login">
            <div class="nk-form">
                <p class="text-left" style="display:none" id="loading_form">처리중입니다. 잠시만 기다려 주세요.</p>
                <form method='post' action='login_ok.php' id="login_form">
                <div class="input-group" id="emailform">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
                    <div class="nk-int-st">
                        <input type="text" class="form-control" placeholder="아이디 (이메일)" id="email" name="email">
                    </div>
                </div>
                <div class="input-group mg-t-15" id="pw_form">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
                    <div class="nk-int-st">
                        <input type="password" class="form-control" placeholder="비밀번호" id='password' name="password">
                    </div>
                </div>
                <div class="fm-checkbox" id="loginsave_form">
                    <label><input type="checkbox" class="i-checks" disabled> <i></i> 로그인 유지 (개발중!!!)</label>
                </div>
                  <button type='submit' class="btn btn-login btn-success btn-float" id="submit_form"><i class="notika-icon notika-right-arrow right-arrow-ant"></i></button>
                </form>
            </div>
        </div>
    </div>
    <!-- Login Register area End-->
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
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="js/knob/jquery.knob.js"></script>
    <script src="js/knob/jquery.appear.js"></script>
    <script src="js/knob/knob-active.js"></script>
    <!--  Chat JS
		============================================ -->
    <script src="js/chat/jquery.chat.js"></script>
    <!--  wave JS
		============================================ -->
    <script src="js/wave/waves.min.js"></script>
    <script src="js/wave/wave-active.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="js/todo/jquery.todo.js"></script>
    <!-- Login JS
		============================================ -->
    <script src="js/login/login-action.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=6Lcx8dUUAAAAALfVhy46xEbpWcADq0f0KXm4Litj"></script>
    <script>
      // when form is submit
      $('#login_form').submit(function() {
        //alert('처리중입니다. 잠시만 기다려 주세요.');
        emailform.style.display = 'none';
        pw_form.style.display = 'none';
        loginsave_form.style.display = 'none';
        submit_form.style.display = 'none';
        loading_form.style.display = 'block';
        // we stoped it
        event.preventDefault();
        var email = $('#email').val();
        var password = $("#password").val();
        // needs for recaptacha ready
        grecaptcha.ready(function() {
          // do request for recaptcha token
          // response is promise with passed token
          grecaptcha.execute('6Lcx8dUUAAAAALfVhy46xEbpWcADq0f0KXm4Litj', {action: 'create_comment'}).then(function(token) {
            // add token to form
            $('#login_form').prepend('<input type="hidden" name="g-recaptcha-response" value="' + token + '">');
            $.post("login_ok.php",{email: email, password: password, token: token}, function(result) {
              if(result.success) {
                location.href = "./";
              } else if (result.mysqlerr) {
                alert('일시적인 서버 오류입니다.');
                window.location.reload();
              } else if (result.idpwerr) {
                alert('아이디 또는 비밀번호가 틀립니다.');
                window.location.reload();
              } else {
                alert('reCAPTCHA 인증에 실패했습니다.');
                window.location.reload();
              }
            });
          });;
        });
      });
  </script>
</body>

</html>