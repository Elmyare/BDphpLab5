<?php
function WeekDay($day, $color, $size) {
    // В зависимости от значения $size выбираем тег заголовка
    echo "<h$size style='color:$color;'>$day</h$size>";
}

$size = 1;
$days = ["Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота", "Воскресенье"];
$colors = ["red", "blue", "green", "orange", "purple", "brown", "black"];

for ($i = 0; $i < 7; $i++) {
    WeekDay($days[$i], $colors[$i], $size);
    $size++; // Увеличиваем размер заголовка (начиная с h1 и до h7)
}
?>
