<?php

    // GET으로 넘어온거 정의
    $id = $_GET['id'];

    // 확인
    if ($id == "new") {
        echo '<!DOCTYPE HTML><html><head><meta charset="utf-8" /><script>alert("성공적으로 포트폴리오를 삭제하였습니다!\n포트폴리오 목록으로 돌아갑니다.");</script><meta http-equiv="refresh" content="0; url=portfolio.php"></meta></head><body></body></html>';
        exit;
    }
    
    // MYSQL 접속
    $conn = mysqli_connect("localhost", "hwahyang_pf", "rrFevF#rdwN2mA-@Ah=W8xfBn5R%4m+K", "hwahyang_pf");
    if(mysqli_connect_errno()) {
        echo '<!DOCTYPE HTML><html><head><meta charset="utf-8" /><script>alert("서버와의 연결이 유효하지 않습니다.\n잠시 후 다시 시도하여 주세요.");</script><meta http-equiv="refresh" content="0; url=portfolio.php"></meta></head><body></body></html>';
        exit;
    }
    mysqli_query($conn, "set session character_set_connection=utf8;");
    mysqli_query($conn, "set session character_set_results=utf8;");
    mysqli_query($conn, "set session character_set_client=utf8;");
        
    mysqli_query($conn, "DELETE FROM `portfolio` WHERE `id`=$id");
    mysqli_close($conn);
    echo '<!DOCTYPE HTML><html><head><meta charset="utf-8" /><script>alert("성공적으로 포트폴리오를 삭제하였습니다!\n포트폴리오 목록으로 돌아갑니다");</script><meta http-equiv="refresh" content="0; url=portfolio.php"></meta></head><body></body></html>';
    exit;
?>