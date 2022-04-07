<?php

session_start();

// 랜덤값 생성
function get_random_string($type = '', $len = 10) {
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numeric = '0123456789';
    $special = '`~!@#$%^&*()-_=+\\|[{]};:\'",<.>/?';

    $key = '';
    $token = '';
 
    if ($type == '') {
        $key = $lowercase.$uppercase.$numeric;
    } else {
        if (strpos($type,'09') > -1) $key .= $numeric;
        if (strpos($type,'az') > -1) $key .= $lowercase;
        if (strpos($type,'AZ') > -1) $key .= $uppercase;
        if (strpos($type,'$') > -1) $key .= $special;
    }
 
    for ($i = 0; $i < $len; $i++) {
        $token .= $key[mt_rand(0, strlen($key) - 1)];
    }
 
    return $token;
}

// MYSQL 접속
$conn = mysqli_connect("localhost", "hwahyang_pf_v1", "rrFevF#rdwN2mA-@Ah=W8xfBn5R%4m+K", "hwahyang_pf_v1");
if(mysqli_connect_errno()) {
    echo '<!DOCTYPE HTML><html><head><meta charset="utf-8" /><script>alert("서버와의 연결이 유효하지 않습니다.\n잠시 후 다시 시도하여 주세요.");</script><meta http-equiv="refresh" content="0; url=./dashboard/customize/profile.php"></meta></head><body></body></html>';
    exit;
}
mysqli_query($conn, "set session character_set_connection=utf8;");
mysqli_query($conn, "set session character_set_results=utf8;");
mysqli_query($conn, "set session character_set_client=utf8;");

$result_set = mysqli_query($conn, "SELECT name, profile_dir FROM `users` WHERE `id`=$id");
$row = mysqli_fetch_array($result_set);
$old_nickname = $row['name'];
$old_dir = $row['profile_dir'];

// 정의
define ('SITE_ROOT', realpath(dirname(__FILE__)));
$filename = get_random_string('azAZ09', 5);
$nofile = true;
$mysql_dir = $old_dir;

// 파일 존재 여부
if ($_POST['check'] == "on") {
    $nofile = false;
}
if (empty($_POST['check'])) {
    $nofile = true;
}

// POST로 넘어온거 정의
$id = $_POST['ID'];
$email = $_POST['email'];
$nickname = $_POST['nickname'];
if ($nofile == false) {
    $image = $_FILES['thumb'];
    $image_name = $image['name'];
    $image_temp = $image['tmp_name'];
    $image_error = $image['error'];
}

// 업로드
if ($nofile == false) {
    // 업로드 전 정의
    $ext = substr($image_name, strrpos($image_name, '.') + 1);
    $uploads_dir = '/img/profile';
    $mysql_dir = "$uploads_dir/$filename.$ext";
    $imgdirname = SITE_ROOT."$uploads_dir/$filename.$ext";

    // 오류 확인
    if( $image_error != UPLOAD_ERR_OK ) {
        switch( $image_error ) {
            case UPLOAD_ERR_INI_SIZE:
            case UPLOAD_ERR_FORM_SIZE:
            echo '<!DOCTYPE HTML><html><head><meta charset="utf-8" /><script>alert("파일이 너무 큽니다.\n확인 후 다시 시도하여 주세요.");</script><meta http-equiv="refresh" content="0; url=./dashboard/customize/profile.php"></meta></head><body></body></html>';
            exit;
        }
        exit;
    }

    // 파일 업로드
    move_uploaded_file( $image_temp, $imgdirname);

}
if ($nofile == false) {
    mysqli_query($conn, "UPDATE `users` SET `profile_dir`='$mysql_dir' WHERE `id`=$id");
}
mysqli_query($conn, "UPDATE `users` SET `name`='$nickname',`email`='$email' WHERE `id`=$id");
mysqli_query($conn, "UPDATE `portfolio` SET `author`='$nickname' WHERE `author`='$old_nickname'");
mysqli_query($conn, "UPDATE `portfolio` SET `editor`='$nickname' WHERE `editor`='$old_nickname'");
if ( empty($_POST['password']) ) {
    //
} else {
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    mysqli_query($conn, "UPDATE `portfolio` SET `password`='$password' WHERE `editor`='$old_nickname'");
}
mysqli_close($conn);

session_destroy();
echo '<!DOCTYPE HTML><html><head><meta charset="utf-8" /><script>alert("성공적으로 프로필을 수정하였습니다!\n보안을 위하여 로그아웃 처리됩니다.");</script><meta http-equiv="refresh" content="0; url=./dashboard/login.php"></meta></head><body></body></html>';
exit;

?>