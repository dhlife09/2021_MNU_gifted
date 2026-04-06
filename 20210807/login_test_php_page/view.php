<?php
    require_once("common.php");
    require_once("BoardDB.php");
    $num     = requestValue("num");    // 읽을 게시글 번호
    $page    = requestValue("page");   // 게시글이 있는 페이지 번호
    $bdb = new Board();
    $row = $bdb->getMsg($num);         // 게시글을 가져옴
    $bdb->increaseHits($num);          // 게시글의 읽은 조회수 증가
    // 제목의 공백, 본문의 공백과 줄넘김이 웹에서 보이도록 처리

?>
<!doctype html>
<html>
<head> <meta charset="utf-8"> </head>
<body>
<div class="container">
    <table class="msg">
        <tr><th class="msg-header">제목</th>
            <td class="msg-text left"><?=  ?></td>
        </tr>
        <tr><th>작성자</th>
            <td class="msg-text left"><?=  ?>
            </td>
        </tr>
        <tr><th>작성일시</th>
            <td class="msg-text left"><?=  ?>
            </td>
        </tr>
        <tr><th>조회수</th>
            <td class="msg-text left"><?=  ?></td>
        </tr>
        <tr><th>내용</td>
            <td class="msg-text left"><?=  ?>
            </td>
        </tr>
    </table>
    <br>
    <div class="left">
        <input type="button" value="목록보기"
             onclick="location.href='<?= 
                 boardUrl("board.php", 0, $page) ?>'">
        <input type="button" value="수정"
             onclick="location.href='<?=
                 boardUrl("modify_form.php", $num, $page) ?>'">
        <input type="button" value="삭제"
             onclick="location.href='<?=
                 boardUrl("delete.php", $num, $page) ?>'">
    </div>
</div>
</body>
</html>