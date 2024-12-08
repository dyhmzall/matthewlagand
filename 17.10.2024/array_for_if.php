<?php

$array = [1, 2, 3];
$array = ['Matthew', 'Mikhail'];

$a = 1;
$b = 2;
$c = 3;
$d = 'Matthew';
$e = 'Mikhail';

$someArray = [$a, $b, $c, $d, $e];

$someArray[3] = 'Veronika';

echo $someArray[3];
echo "\n\n\n";

// --- найти все "простые" числа от 1 до 100
// Простые числа это числа, которые делятся только на 1 и на себя

for($i = 1; $i <= 10; $i++) {

    // пропустить печать на вывод всех четных числе
    if ($i % 2 == 0) {
        continue; // пропускаем все, что ниже
    }

    echo $i . "\n";

    if ($i == 5) {
        break; // завершить цикл досрочно
    }
}
