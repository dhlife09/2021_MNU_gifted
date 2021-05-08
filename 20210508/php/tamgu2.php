소수점 둘째자리에서 반올림 됩니다.<br>
반지름을 GET을 통해 r값으로 전달해 주세요.<br>
<br><br>
<?php

$r = $_GET['r'];

$a = $r*2*pi();
$b = $r^2*pi();

echo '원의 둘레: '. round($a,2). '<br>';
echo '원의 면적: '. round($b,2). '<br>';
echo '원의 반지름: '. $_GET['r'];

?>