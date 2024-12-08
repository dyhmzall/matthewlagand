<?php
// даны 3 массива - 1 с игроками, 2 с очками, 3 с флагом активности

$users = ['Matthew', 'Mikhail', 'Veronika', 'Sonya', 'Evgenii'];
$points = [110, 67, 99, 15, 0];
$active = [true, true, true, false, false];

// 1) нужно вывести табличку игроков и очков
// Matthew: 110
// 2) вывести активных игроков
// Активные игроки: Matthew,..
// 3) вывести неактивных игрово
// Неактивные игроки: Sonya,..

for($i = 0; $i < count($users); $i++) {
    echo 'игрок:';
    echo $users[$i];
    echo ': ';
    echo $points[$i];
    echo ' ';
    if($active[$i] == true){
        echo 'в сети';

    }else{
        echo 'не в сети';
    }
    echo "\n";
}

echo 'активные: ';

for($j = 0;$j < count($users);$j++){
    if($active[$j] == true){
        echo $users[$j];
        echo ', ';
    }
}

echo "\n";
echo 'не активные: ';

for($j = 0;$j < count($users);$j++){
    if($active[$j] == false){
        echo $users[$j];
        echo ', ';
    }
}