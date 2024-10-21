<?php
echo "<table border='1' cellspacing='0' cellpadding='0'>";

for ($i = 1; $i <= 30; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 30; $j++) {
        $value = $i * $j;
        $color = '';

        // Определяем цвет фона по остатку от деления
        $remainder = $value % 7;
        switch ($remainder) {
            case 0:
                $color = "white";
                break;
            case 1:
                $color = "aqua";
                break;
            case 2:
                $color = "blue";
                break;
            case 3:
                $color = "yellow";
                break;
            case 4:
                $color = "purple";
                break;
            case 5:
                $color = "red";
                break;
            case 6:
                $color = "lime";
                break;
        }

        // Ячейка с фоном и размером текста
        echo "<td style='background-color:$color; width:14px; height:15px; font-size:1px'>&nbsp;</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
