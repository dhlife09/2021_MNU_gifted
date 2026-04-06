<?php
    require_once("common.php");
    require_once("BoardDB.php");
    $num     = requestValue("num");   // 수정할 게시글 번호
    $page    = requestValue("page");  // 게시글이 포함된 페이지 번호
    $writer  = requestValue("writer");   // 수정된 내용
    $title   = requestValue("title");    // 수정된 내용
    $content = requestValue("content");  // 수정된 내용
    // 모든 항목이 값이 있으면 업데이트
    if () {

        goNow(boardUrl("board.php", 0, $page)); // 페이지 복귀
    } else
        errorBack("모든 항목이 빈칸 없이 입력되어야 합니다.");
?>