<html>

<?php
$a = $_POST['a'];   //성인
$b = $_POST['b'];   //청소년
$c = $_POST['c'];   //어린이
$d = $_POST['d'];   //유아
$totalPeople = $a+$b+$c+$d;
?>

총 <?php echo $totalPeople; ?>명<br>
총 금액: <?php echo (10000*$a)+(7000*$b)+(5000*$c)+(0*$d); ?>원<br>
<hr>
성인: <?php echo $a. '명 * 10000원 = '. (10000*$a). '원'; ?><br>
청소년: <?php echo $b. '명 * 7000원 = '. (7000*$b). '원'; ?><br>
어린이: <?php echo $c. '명 * 5000원 = '. (5000*$c). '원'; ?><br>
유아: <?php echo $d. '명 * 0원 = '. (0*$d). '원'; ?><br>
</html>