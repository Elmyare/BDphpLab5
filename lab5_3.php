<?php
$e = 2.718281;

echo "Число Эйлера равно $e <br>";

// Изменение типа на строковый
$e = (string)$e;
echo "Тип: " . gettype($e) . ", значение: $e <br>";

// Изменение типа на целочисленный
$e = (int)$e;
echo "Тип: " . gettype($e) . ", значение: $e <br>";

// Изменение типа на булевый
$e = (bool)$e;
echo "Тип: " . gettype($e) . ", значение: $e <br>";
?>