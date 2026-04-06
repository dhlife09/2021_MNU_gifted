<!DOCTYPE html> <html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
    // $_REQUEST ["action"] 값에 따라 세션 생성 또는 삭제
    $action = isset($_REQUEST["action"]) ? $_REQUEST["action"] : "";
    if ($action == "create")
        $_SESSION ["user"] = "test";
    else if ($action == "delete") {
//        $_SESSION ["user"] = "test";
		echo "session deleted";
        unset( $_SESSION ["user"] );
	}
    // 세션변수를 읽기
    $session = isset($_SESSION["user"]) ? $_SESSION["user"] : "";
?>
세션변수 user의 값 : <?= $session ?><br>
<a href="?action=create">세션 시작</a><br>
<a href="?action=delete">세션 종료</a><br>
<a href="?action=null">세션 확인</a><br>
</body>
</html>