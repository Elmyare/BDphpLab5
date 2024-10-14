<?php
$var1 = "Alice";
$var2 = "My friend is $var1";  // В двойных кавычках переменные интерполируются
$var3 = 'My friend is $var1';  // В одинарных кавычках переменные не интерполируются, просто строка

// Создаем ссылку
$var4 = &$var1;

// Вывод до изменения $var1
echo "Before changing \$var1: <br>";
echo "var1: $var1 <br>";
echo "var2: $var2 <br>";
echo "var3: $var3 <br>";
echo "var4 (reference): $var4 <br>";

// Меняем значение $var1
$var1 = "Bob";

// Вывод после изменения $var1
echo "<br>After changing \$var1 to 'Bob': <br>";
echo "var1: $var1 <br>";
echo "var2: $var2 <br>";
echo "var3: $var3 <br>";
echo "var4 (reference): $var4 <br>";

// Динамическая переменная
$user = "Michael";
$$user = "Jackson";

echo "<br>Dynamic variable: <br>";
echo "\$user: $user <br>";
echo "\$\$user (Michael): $Michael <br>";
?>
