<?php
// 1. Создание ассоциативного массива
$cust = [
    'cnum' => 2001,
    'cname' => 'Hoffman',
    'city' => 'London',
    'snum' => 1001,
    'rating' => 100
];

print_r($cust);
echo "<br>";

// 2. Сортировка по значениям
asort($cust);
print_r($cust);
echo "<br>";

// 3. Сортировка по ключам
ksort($cust);
print_r($cust);
echo "<br>";

// 4. Сортировка с помощью sort()
sort($cust);
print_r($cust);
echo "<br>";
// sort() сортирует по значениям и сбрасывает ключи, массив становится индексированным.


?>
