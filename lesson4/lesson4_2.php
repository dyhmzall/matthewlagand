<?php
$numbers = [2, 4, 6, 7, 8, 9, 10, 11, 12];

for($i = 0; $i < count($numbers); $i++) {
    echo '$i';
    echo " = ";
    echo $i;
    echo "  ";
    echo '$numbers';
    echo " = ";
    echo $numbers[$i];
    echo " - ";
    echo $numbers[$i] * $numbers[$i];
    //echo $numbers;
    echo "\n";
}