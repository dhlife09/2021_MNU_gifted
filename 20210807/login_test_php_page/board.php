<?php
    require_once("common.php");
    require_once("BoardDB.php");
    $page = requestValue("page");  // 전달된 페이지 번호 저장
// 화면 구성에 관련된 상수 정의
    define("NUM_LINES",      5);   // 페이지에 표시할 게시글 수
    define("NUM_PAGE_LINKS", 3);   // 페이지에 표시될 페이지 링크 수
// 게시판의 전체 게시글 수 알아보기
    $bdb = new Board();
    $numMsgs = $bdb->getNumMsgs(); // 전체 게시글 수
    if ($numMsgs > 0) {
        $numPages = ceil($numMsgs / NUM_LINES); // 페이지 수
        // 현재 페이지 번호가 (1 ~ 전체 페이지 수)를 벗어나면 보정
        if ($page < 1)         $page = 1;         // 페이지 시작
        if ($page > $numPages) $page = $numPages; // 페이지 끝
        // 리스트에 보일 게시글 데이터 읽기
        $start = ($page - 1) * NUM_LINES;
                 // 페이지의 시작 게시글 번호 계산
        $msgs = $bdb->getManyMsgs($start, NUM_LINES);
                 // $start 위치부터 남은 게시글 수 (최대 NUM_LINES)
        // 페이지 링크 컨트롤의 처음/마지막 페이지 링크 번호 계산
        $firstLink = floor(($page - 1) / NUM_PAGE_LINKS)
                   * NUM_PAGE_LINKS + 1;
        $lastLink = $firstLink + NUM_PAGE_LINKS - 1;
        if ($lastLink > $numPages)  $lastLink = $numPages;
    }
?>
<!doctype html>
<html>
<head> <meta charset="utf-8"> </head>
<body>
<div class="container">
    <?php if ($numMsgs > 0) : ?>                         
        <table class="list">
            <tr><th class="list-num">번호</th>
                <th class="list-title">제목</th>
                <th class="list-writer">작성자</th>
                <th class="list-regtime">작성일시</th>
                <th>조회수</th>
            </tr>


        </table>
        <br>
        <?php if ($firstLink > 1) : ?>
            <a href="<?= boardUrl("board.php", 0, 
                      $page - NUM_PAGE_LINKS) ?>"><</a>&nbsp;
        <?php endif ?>
        <?php for ($i = $firstLink; $i <= $lastLink; $i++) : ?>
            <?php if ($i == $page) : ?>
                <a href="<?= boardUrl("board.php", 0, $i) ?>">
                   <b><?= $i ?></b></a>&nbsp;
            <?php else : ?>
                <a href="<?= boardUrl("board.php", 0, $i) ?>">
                   <?= $i ?></a>&nbsp;
            <?php endif ?>
        <?php endfor ?>
        <?php if ($lastLink < $numPages) : ?>
            <a href="<?= boardUrl("board.php", 0, 
                      $page + NUM_PAGE_LINKS) ?>">></a>
        <?php endif ?>
    <?php endif ?>                                      
    <br><br>
    <div class="right">
        <input type="button" value="글쓰기" onclick="location.href=
               '<?= boardUrl("write_form.php", 0, $page) ?>'">
    </div>
</div>
</body>
</html>