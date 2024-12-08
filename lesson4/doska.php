<?php
$numbers = [1, 2, 3, 4, 5, 6, 7, 8];
$bykvi = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h'];

echo "&nbsp;&nbsp;";

for($i = 0; $i < count($numbers); $i++) {

    echo " ";
    echo $numbers[$i];

}
for ($j = 0; $j < count($bykvi); $j++) {
    echo "<br>";
    echo $bykvi[$j];
    echo " ";


    for($k = 0; $k < 8; $k++) {
        echo '<span> 123 </span>';
    }

}