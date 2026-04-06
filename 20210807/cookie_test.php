<!DOCTYPE html> <html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
    // $_REQUEST ["action"] 값에 따라 쿠키 생성 또는 삭제
    $action = isset($_REQUEST["action"]) ? $_REQUEST["action"] : "";
    if ($action) {
        if ($action == "create")
            setcookie("user", "test", time()+60*60*24);
        else if ($action == "delete")
            setcookie("user");
        // 쿠키 정보를 반영하여 다시 시작
        header ("location: $_SERVER[SCRIPT_NAME]"); 
        exit();
    }
    // 쿠키 값 읽기
    $cookie = isset($_COOKIE["user"]) ? $_COOKIE["user"] : "";
?>
user 쿠키의 값 : <?= $cookie ?><br>
<a href="?action=create">쿠키 생성</a><br>
<a href="?action=delete">쿠키 삭제</a><br>
</body>
</html>