<?php
    require_once("common.php");
    require_once("BoardDB.php");
    $num    = requestValue("num");   // 수정할 게시글 번호
    $page   = requestValue("page");  // 게시글이 포함된 페이지 번호
    $bdb = new Board();
    $row = $bdb->getMsg($num);// $num번 게시글 데이터 읽기
?>
<!doctype html>
<html>
<head> <meta charset="utf-8"> </head>
<body>
<div class="container">
    <form method="post"
          action="<? ?>">
        <table class="msg">
            <tr><th>제목</th>
                <td><input type="text" name="title" 
                           maxlength="80" value="
                           <?=  ?>" class="msg-text">
                </td>
            </tr>
            <tr><th class="msg-header">작성자</th>
                <td><input type="text" name="writer"
                    maxlength="20" value="<?=  ?>"
                                   class="msg-text">
                </td>
            </tr>
            <tr><th>내용</th>
                <td><textarea name="content" wrap="virtual"
                              rows="10" class="msg-text">
                              <?= ?></textarea>
                </td>
            </tr>
        </table>
        <br>
        <div class="left">
            <input type="submit" value="반영">
            <input type="button" value="목록보기" 
                   onclick="location.href='<?=  ?>'">
        </div>
    </form>
</div>
</body>
</html>