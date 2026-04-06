<?php
    require_once("common.php");
    require_once("MemberDB.php");
    $id   = requestValue("id"); // 회원정보 수정 폼에 데이터 읽기
    $pw   = requestValue("pw");
    $name = requestValue("name");
    if ( ) { // 모든 입력란이 채워져 있으면


        okGo("회원정보가 수정되었습니다.", START_PAGE);
    }
    else 
        errorBack("모든 입력란을 채워주세요.");
?>