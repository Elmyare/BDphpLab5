<?php
// 1. Треугольные числа
$treug = [];
for ($n = 1; $n <= 10; $n++) {
    $treug[] = $n * ($n + 1) / 2;
}
echo implode('  ', $treug) . "<br>";

// 2. Квадраты чисел
$kvd = [];
for ($n = 1; $n <= 10; $n++) {
    $kvd[] = $n * $n;
}
echo implode('  ', $kvd) . "<br>";

// 3. Объединение массивов
$rez = array_merge($treug, $kvd);
echo implode('  ', $rez) . "<br>";

// 4. Сортировка массива
sort($rez);
echo implode('  ', $rez) . "<br>";

// 5. Удаление первого элемента
array_shift($rez);
echo implode('  ', $rez) . "<br>";

// 6. Удаление повторяющихся элементов
$rez1 = array_unique($rez);
echo implode('  ', $rez1) . "<br>";

?>
