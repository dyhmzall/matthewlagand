<?php
$months = ['январь','февраль','март','апрель','май','июнь','июль','август','сентябрь','октябрь','ноябрь','декабрь'];
$days = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
for($i = 0;$i < count($months);$i++){
    echo $months[$i];
    echo '<br>';
    for($j = 1;$j < $days[$i];$j++) {
        echo $j;
        echo '<br>';

    }

    }

//$dni = [31,30,29];
//$i = 0;
//for($i = 0; $i < )