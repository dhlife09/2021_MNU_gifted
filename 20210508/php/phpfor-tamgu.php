<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">

<?php
$colors = array('red', 'green', 'yellow', 'blue', 'magenta', 'purple', 'black', 'deepblue', 'lightblue');
shuffle($colors);

for ($i=2; $i!=7; $i++) {
    echo '<span style="font-size: '. ($i*5). 'px; color: '. $colors[$i]. ';">Size: '. ($i*5). '</span><br>';
}

?>