<?php
    require_once("common.php");
    require_once("MemberDB.php");
    $id   = requestValue("id"); // 회원가입 폼에 입력된 데이터 읽기
    $pw   = requestValue("pw");
    $name = requestValue("name");
    $mdb = new Member(); 
    if (  ) { // 모든 입력란이 채워져 있고
        if (  )
            errorBack("이미 사용 중인 아이디입니다.");
        else {  // 사용 중인 아이디가 아니면
            // 회원정보 추가
            okGo("가입이 완료되었습니다.", START_PAGE);
        }
    } else
        errorBack("모든 입력란을 채워주세요.");
?>