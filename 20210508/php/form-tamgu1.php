
<?php
$kor = $_POST['kor'];
$eng = $_POST['eng'];
$mat = $_POST['mat'];
$sci = $_POST['sci'];
$total = $kor+$eng+$mat+$sci;
?>


국어: <?php echo $kor; ?><br>
영어: <?php echo $eng; ?><br>
수학: <?php echo $mat; ?><br>
과학: <?php echo $sci; ?><br>

<br><br>
총점: <?php echo $total; ?><br>
평균: <?php echo $total/4; ?>