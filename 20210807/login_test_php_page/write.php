<?php
    require_once("common.php");
    require_once("BoardDB.php");
    $writer  = requestValue("writer");   // 글 작성자 정보
    $title   = requestValue("title");    // 글 제목
    $content = requestValue("content");  // 글 내용
    // 빈 칸 없이 모든 값이 전달되었으면 게시글 추가
    if () {

        goNow(bdUrl("board.php", 0, 0));  // 글 목록 페이지로 복귀
    } else
        errorBack("모든 항목이 빈칸 없이 입력되어야 합니다.");
?>