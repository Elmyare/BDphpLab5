<?php
// Правильные ответы
$otv = [1 => 1, 2 => 2];

$name = $_POST['name'];
$score = 0;

if ($_POST['q1'] == $otv[1]) $score++;
if ($_POST['q2'] == $otv[2]) $score++;

echo "Имя тестируемого: " . $name . "<br>";
echo "Оценка: ";

switch ($score) {
    case 0:
        echo "Очень плохо!";
        break;
    case 1:
        echo "Неплохо!";
        break;
    case 2:
        echo "Отлично!";
        break;
}
?>
