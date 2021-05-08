<?php
    $age = $_POST['age'];
    if (8 > $age) {
        $k = '유아';
        $p = '0';
    } else if (14 > $age) {
        $k = '어린이';
        $p = '5000';
    } else if (20 > $age) {
        $k = '청소년';
        $p = '7000';
    } else {
        $k = '성인';
        $p = '10000';
    }

    echo $_POST['name']. '은(는) '. $k. '입니다.<br>요금은 '. $p. '원 입니다.';
?>