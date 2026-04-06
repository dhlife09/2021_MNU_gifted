<?php 

?>
<!doctype html>
<html>
<head><meta charset="utf-8">
      <title>홍길동의 홈페이지</title>
</head>
<body>
<div id="m-container">
    <h2>홍길동의 홈페이지에 오신 것을 환영합니다!</h2>
    <?php  ?>
        <form action="logout.php" method="post">
            <?= $name ?>님 로그인 &nbsp;
            <input type="submit" value="로그아웃"> &nbsp;
            <input type="button" value="회원정보 수정" onclick
                   ="location.href='member_update_form.php'">
        </form>
    <?php ?>
        <form action="login.php" method="post">
            아이디: <input type="text" name="id">&nbsp;&nbsp;
            비밀번호: <input type="password" name="pw">&nbsp;
            <input type="submit" value="로그인"> &nbsp;
            <input type="button" value="회원가입" onclick
                   ="location.href='member_join_form.php'">
        </form>
    <?php  ?>
<div id="m-sidebar">
    <a href="index.php"> 처음 페이지</a><br>
    <a href="board.php"> 게시판</a><br>
    <a href="storage.php"> 파일저장소</a><br>
    <a href="survey.php"> 설문조사</a><br>
</div> 
<div id="m-footer"> <p>Copyright.</p> </div>
</body>
</html>