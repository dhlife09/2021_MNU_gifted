<?php

?>
<!DOCTYPE html> 
<html>
<head> <meta charset="utf-8"> </head>
<body>
<?php  ?>    
<form action="./logout.php" method="post">
    <?= $name ?>님이 로그인하셨습니다.<br>
    <input type="submit" value="로그아웃">&nbsp;&nbsp;
    <input type="button" value="회원정보 수정"
        onclick="location.href='./member_update_form.php'">
</form>
<?php  ?>   
<form action="./login.php" method="post">
    아이디 : <input type="text" name="id"> &nbsp;&nbsp;
    비밀번호 : <input type="password" name="pw"> &nbsp;&nbsp;
    <input type="submit" value="로그인"> &nbsp;&nbsp;
    <input type="button" value="회원가입"
        onclick="location.href='./member_join_form.php'">
</form>
<?php  ?>                                        
</body>
</html>
