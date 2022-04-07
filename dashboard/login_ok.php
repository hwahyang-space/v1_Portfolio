<?php
$user_id = $_POST['email'];
$user_pw = $_POST['password'];
$captcha = $_POST['token'];
$success = false;

if(! $captcha){
    header('Content-type: application/json');
    echo json_encode(array('success' => 'false'));
    exit;
}

$secretKey = "6Lcx8dUUAAAAAAjpthLpbuLZve1J_h0heErp3gon";
$ip = $_SERVER['REMOTE_ADDR'];

$url = 'https://www.google.com/recaptcha/api/siteverify';
$data = array('secret' => $secretKey, 'response' => $captcha);

$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);

$context  = stream_context_create($options);
$response = file_get_contents($url, false, $context);
$responseKeys = json_decode($response,true);
header('Content-type: application/json');
if(! $responseKeys["success"]) {
    header('Content-type: application/json');
  echo json_encode(array('success' => 'false'));
  exit;
}

$conn = mysqli_connect("localhost", "hwahyang_pf_v1", "rrFevF#rdwN2mA-@Ah=W8xfBn5R%4m+K", "hwahyang_pf_v1");
if(mysqli_connect_errno()) {
    header('Content-type: application/json');
    echo json_encode(array('mysqlerr' => 'true'));
    exit;
}
mysqli_query($conn, "set session character_set_connection=utf8;");
mysqli_query($conn, "set session character_set_results=utf8;");
mysqli_query($conn, "set session character_set_client=utf8;");
    
$result_set = mysqli_query($conn, "SELECT * FROM `users`");
mysqli_close($conn);

while ($row = mysqli_fetch_array($result_set)) {
    if ($row['email'] == $user_id AND password_verify($user_pw, $row['password'])) {
        $success = true;
        $name = $row['name'];
    }
}

if (! $success) {
    header('Content-type: application/json');
    echo json_encode(array('idpwerr' => 'true'));
    exit;
}

session_start();
$_SESSION['user_id'] = $user_id;
$_SESSION['user_name'] = $name;
echo json_encode(array('success' => 'true'));
?>