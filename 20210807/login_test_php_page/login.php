<?php
    require_once("common.php");
    require_once("MemberDB.php");
// 로그인 폼에서 전달된 아이디, 비밀번호 읽기
    $id = requestValue("id");
    $pw = requestValue("pw");
// 로그인 폼에 입력된 아이디의 회원정보를 DB에서 읽기
    $mdb = new Member();
    $member = $mdb->getMember($id);
// 그런 아이디를 가진 레코드가 있고, 비밀번호가 맞으면 로그인
    if (     ) {

        goNow(START_PAGE); // 시작 페이지로 돌아감
    } else
        errorBack("아이디 또는 비밀번호가 잘못 입력되었습니다.");
?>