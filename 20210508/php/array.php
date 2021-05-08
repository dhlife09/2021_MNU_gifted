<?php
    $items = ['id', 'name', 'phone', 'address'];
    $users = [
        ['php001', '코끼리', '12345', '서울'],
        ['html02', '흐트멀', '11111', '광주'],
        ['css003', '스타일', '24643', '목포'],
    ];

?>

<table>
    <tr>
        <?php
        for ($i=0; $i < count($users); $i++) {
            echo "<td> $items[$i] </td>";
            
        }