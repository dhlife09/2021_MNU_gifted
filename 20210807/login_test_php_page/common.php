<?php
// 회원 가입과 로그인 모듈을 위한 상수
    define("START_PAGE", "login_main.php");
// 세션이 시작되지 않았을 경우 세션을 시작하는 함수
    function session_start_if_none() {
        if (session_status() == PHP_SESSION_NONE) 
            session_start();
    }
// GET/POST로 전달된 값을 읽어 반환하는 함수
    function requestValue($name) {
        return isset($_REQUEST[$name]) ? $_REQUEST[$name] : "";
    }
// 세션변수 값을 읽어 반환하는 함수
    function sessionValue($name) {
        return isset($_SESSION[$name]) ? $_SESSION[$name] : "";
    }
// 지시된 URL로 이동하는 함수
    function goNow($url) {
        header("Location: $url");
        exit();
    }

// 게시판 모듈의 URL을 반환하는 함수
    function boardUrl($file, $num, $page) {
        $join = "?";                         // GET 방식으로 전달
        if ($num) {
            $file .= $join . "num=$num";
            $join = "&";                      // ?num=숫자&page=숫자
        }
        if ($page)
            $file .= $join . "page=$page";    // ?page=숫자
        return $file;
    }
	
    // 경고창에 오류 메시지를 출력하고 이전 페이지로 돌아가는 함수
    function errorBack($msg) {
?>
        <!doctype html>
        <html>
        <head> <meta charset="utf-8"> </head>
        <body>
        <script> 
            alert('<?= $msg ?>'); 
            history.back(); 
        </script>
        </body>
        </html>
<?php 
        exit();
    }
    // 경고창에 지정된 메시지를 출력하고 
    // 지정된 페이지로 이동하는 함수
    function okGo($msg, $url) {
?>
        <!doctype html>
        <html>
        <head> <meta charset="utf-8"> </head>
        <body>
        <script> 
            alert('<?= $msg ?>'); 
            location.href='<?= $url ?>'; 
        </script>
          
        </body>
        </html>
<?php 
        exit();
    }
?>
