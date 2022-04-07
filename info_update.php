<?php

session_start();

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

// POST로 넘어온거 정의
$id = $_POST['ID'];
$password = $_POST['password'];

// 암호화
$password = password_hash($password, PASSWORD_DEFAULT);

mysqli_query($conn, "UPDATE `users` SET `password`='$password' WHERE `id`=$id");
mysqli_close($conn);

session_destroy();
echo '<!DOCTYPE HTML><html><head><meta charset="utf-8" /><script>alert("성공적으로 정보를 수정하였습니다!\n보안을 위하여 로그아웃 처리됩니다.");</script><meta http-equiv="refresh" content="0; url=./dashboard/login.php"></meta></head><body></body></html>';
exit;

?>