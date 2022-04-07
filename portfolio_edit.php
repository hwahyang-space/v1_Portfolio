<?php
    // php.ini 건들기
    ini_set("memory_limit", "1024M");

    // Startswith이 PHP에는 없어서 정의함
    function startsWith($haystack, $needle) {
        return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== false;
    }

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

    // 파일 압축
    function compress($source, $destination, $quality) {
        $info = getimagesize($source);

        if ($info['mime'] == 'image/jpeg') {
            $image = imagecreatefromjpeg($source);
            imagejpeg($image, $destination, $quality);
        } else if ($info['mime'] == 'image/gif') {
            $image = imagecreatefromgif($source);
            imagegif($image, $destination, $quality);
        } else if ($info['mime'] == 'image/png') {
            /*$image = imagecreatefrompng($source);
            imagesavealpha($image, true);

            $q = (int)$quality/100;

            $height = $info[1];
            $width = $info[0];
            $ratio = $width/$height;

            if ((int)$quality > 50) {
                $newheight = 720;
            } else {
                $newheight = 240;
            }
            
            $newwidth = $newheight * $ratio;
            $newImage = imagecreate($newwidth, $newheight);
            imagecopyresampled($newImage, $image, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
            imagepng($newImage, $destination, $q);
            imagedestroy($newImage);*/
            echo '<!DOCTYPE HTML><html><head><meta charset="utf-8" /><script>alert("시스템 자체 버그로 인하여 jpg 파일만 올릴 수 있습니다.\n투명화가 적용된 png 파일은 \'#F5F5F5\' 배경이 있는 jpg로 다시 작업해서 올려 주세요.");</script><meta http-equiv="refresh" content="0; url=./dashboard/customize/portfolio.php"></meta></head><body></body></html>';
            exit;
        }

        return $destination;
    }

    // 정의
    define ('SITE_ROOT', realpath(dirname(__FILE__)));
    $filename = get_random_string('azAZ09', 10);
    $nofile = true;

    // POST로 넘어온거 정의
    $id = $_POST['num'];

    // 사전 확인
    if ($id == 'new') {
        $nofile = false;
    }

    // POST로 넘어온거 마저 정의
    $filter = $_POST['filters'];
    $title = $_POST['name'];
    $author = $_POST['author'];
    $editor = $_POST['editor'];
    $youtube = $_POST['ytlink'];
    $youtube = str_replace(' ', '', $youtube);
    if ($nofile == false) {
        $image = $_FILES['thumb'];
        $image_name = $image['name'];
        $image_temp = $image['tmp_name'];
        $image_error = $image['error'];
    }
    $description = $_POST['des'];
    $description = str_replace('<p data-f-id="pbf" style="text-align: center; font-size: 14px; margin-top: 30px; opacity: 0.65; font-family: sans-serif;">Powered by <a href="https://www.froala.com/wysiwyg-editor?pb=1" title="Froala Editor">Froala Editor</a></p>', '', $description);

    // 선택항목 재정의
    if ($youtube == "" || $youtube == " " || $youtube == null || $youtube == "null" || $youtube == "없음") {
        $youtube = "null";
    } else {
        if (startsWith($youtube, "https://www.youtube.com") or startsWith($youtube, "https://youtube.com") or startsWith($youtube, "http://www.youtube.com") or startsWith($youtube, "http://youtube.com")) {
            $youtube = "'$youtube'";
        } else {
            $youtube = "'$youtube'";
            $youtube = str_replace('youtu.be', 'www.youtube.com/?v=', $youtube);
        }
    }

    if ($description == "" || $description == " " || $description == null || $description == "null" || empty($description)) {
        $description = "null";
    } else {
        $description = "'$description'";
    }

    if ($filter == "null") {
        $filter = "'null'";
        $dirfilter = "null";
    } else {
        $dirfilter = $filter;
        $filter = "'$filter'";
    }

    // 업로드
    if ($nofile == false) {
        // 업로드 전 정의
        $ext = substr($image_name, strrpos($image_name, '.') + 1);
        $uploads_dir = '/img/portfolio/'.$dirfilter;
        $imgdirname = SITE_ROOT."$uploads_dir/$filename.$ext";
        $tempimgdirname = SITE_ROOT."$uploads_dir/thumb_$filename.$ext";
        $uploads_dir = '/img/portfolio/'.$dirfilter.'/'.$filename.'.'.$ext;
        $uploads_temp_dir = '/img/portfolio/'.$dirfilter.'/thumb_'.$filename.'.'.$ext;

        // 오류 확인
        if( $image_error != UPLOAD_ERR_OK ) {
            switch( $image_error ) {
                case UPLOAD_ERR_INI_SIZE:
                case UPLOAD_ERR_FORM_SIZE:
                echo '<!DOCTYPE HTML><html><head><meta charset="utf-8" /><script>alert("파일이 너무 큽니다.\n확인 후 다시 시도하여 주세요.");</script><meta http-equiv="refresh" content="0; url=./dashboard/customize/portfolio.php"></meta></head><body></body></html>';
                exit;
            }
            exit;
        }

        if ($_POST['resize'] == "" or isset($_POST['resize'])) {
            // 파일 업로드
            move_uploaded_file($image_temp, $imgdirname);

            // 파일 리사이즈
            compress($imgdirname, $imgdirname, 65);

            // 파일 업로드
            //move_uploaded_file( $image_temp, $tempimgdirname);

            // 파일 리사이즈
            compress($imgdirname, $tempimgdirname, 10);
        } else {
            move_uploaded_file($image_temp, $imgdirname);
            $tempimgdirname = SITE_ROOT."$uploads_dir/$filename.$ext";
            $uploads_temp_dir = '/img/portfolio/'.$dirfilter.'/'.$filename.'.'.$ext;
        }
    }
    
    // MYSQL 접속
    $conn = mysqli_connect("localhost", "hwahyang_pf_v1", "rrFevF#rdwN2mA-@Ah=W8xfBn5R%4m+K", "hwahyang_pf_v1");
    if(mysqli_connect_errno()) {
        echo '<!DOCTYPE HTML><html><head><meta charset="utf-8" /><script>alert("서버와의 연결이 유효하지 않습니다.\n잠시 후 다시 시도하여 주세요.");</script><meta http-equiv="refresh" content="3; url=./dashboard/customize/portfolio.php"></meta></head><body></body></html>';
        exit;
    }
    mysqli_query($conn, "set session character_set_connection=utf8;");
    mysqli_query($conn, "set session character_set_results=utf8;");
    mysqli_query($conn, "set session character_set_client=utf8;");

    if ($id == 'new') {
        if ($nofile == true) {
            mysqli_close($conn);
            echo '<!DOCTYPE HTML><html><head><meta charset="utf-8" /><script>alert("새로운 포트폴리오를 추가할 경우, 이미지를 무조건 추가해야 합니다.\n확인 후 다시 시도하여 주세요.");</script><meta http-equiv="refresh" content="0; url=./dashboard/customize/portfolio.php"></meta></head><body></body></html>';
            exit;
        }
        mysqli_query($conn, "INSERT INTO `portfolio`(`name`, `filter`, `img_dir`, `thumb_dir`, `author`, `ytlink`, `description`) VALUES ('$title', $filter, '$uploads_dir', '$uploads_temp_dir', '$author', $youtube, $description)");
        mysqli_close($conn);
        echo '<!DOCTYPE HTML><html><head><meta charset="utf-8" /><script>alert("성공적으로 포트폴리오를 등록하였습니다!\n포트폴리오 목록으로 돌아갑니다");</script><meta http-equiv="refresh" content="0; url=./dashboard/customize/portfolio.php"></meta></head><body></body></html>';
        exit;
    } else {
        $now = date("Y-m-d H:i:s");
        mysqli_query($conn, "UPDATE `portfolio` SET `name`='$title', `datetime`='$now', `filter`=$filter, `author`='$author', `editor`='$editor', `ytlink`=$youtube, `description`=$description WHERE `id`=$id");
        mysqli_close($conn);
        echo '<!DOCTYPE HTML><html><head><meta charset="utf-8" /><script>alert("성공적으로 포트폴리오를 수정하였습니다!\n포트폴리오 목록으로 돌아갑니다");</script><meta http-equiv="refresh" content="0; url=./dashboard/customize/portfolio.php"></meta></head><body></body></html>';
        exit;
    }
?>