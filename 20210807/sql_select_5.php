<!DOCTYPE html> <html>
<head> <meta charset="utf-8"> </head>
<body>
<table>
    <tr><td>번호</td><td>이름</td><td>나이</td>
	<td>국어</td><td>영어</td><td>수학</td><td>평균<td></tr>
<?php
    try {
        $db = new PDO("mysql:host=localhost;dbname=mydb",  
			"php", "mnu!@34" );
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql_query = "select * from student where avrg >= 80 order by avrg desc";
        $result = $db->query($sql_query);
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr><td>", $row['num'], "</td>";
            echo "<td>", $row['name'], "</td>";
            echo "<td>", $row['age'], "</td>";
            echo "<td>", $row['kor'], "</td>";
			echo "<td>", $row['eng'], "</td>";
            echo "<td>", $row['math'], "</td>";
            echo "<td>", number_format(round($row['avrg'],2), 1) , "</td></tr>";
        }
    } catch (PDOException $e) {
        exit($e->getMessage());
    }
?> 
</table>
</body> 
</html>