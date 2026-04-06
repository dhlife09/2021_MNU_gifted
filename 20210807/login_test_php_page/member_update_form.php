<?php


?>
<!doctype html>
<html>
<head> <meta charset="utf-8"> </head>
<body>
<form action="member_update.php" method="post">
    <table>
        <tr><td>아이디</td>
            <td><input type="text" name="id" 
                 value= <?= $member["id"] ?> readonly></td>
        </tr>
        <tr><td>비밀번호</td>
            <td><input type="password" name="pw" 
                 value=<?= $member["pw"] ?>></td>
        </tr>
        <tr><td>성명</td>
            <td><input type="text" name="name" 
                 value=<?= $member["name"] ?>></td>
        </tr>
    </table>
    <input type="submit" value="확인"> 
</form>
</body>
</html>