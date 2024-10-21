<?php
// Значения по умолчанию
$align = isset($_POST['align']) ? $_POST['align'] : 'left';
$valign = isset($_POST['valign']) ? $_POST['valign'] : 'top';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Таблица с выравниванием текста</title>
</head>
<body>

<!-- Таблица с одной ячейкой -->
<table border="1" width="300" height="300">
    <tr>
        <td align="<?php echo $align; ?>" valign="<?php echo $valign; ?>">
            Здесь находится ваш текст
        </td>
    </tr>
</table>

<!-- HTML-форма -->
<form method="post">
    <label>Горизонтальное выравнивание:</label><br>
    <input type="radio" name="align" value="left" <?php if ($align == 'left') echo 'checked'; ?>> Слева
    <input type="radio" name="align" value="center" <?php if ($align == 'center') echo 'checked'; ?>> Центр
    <input type="radio" name="align" value="right" <?php if ($align == 'right') echo 'checked'; ?>> Справа<br>

    <label>Вертикальное выравнивание:</label><br>
    <input type="checkbox" name="valign" value="top" <?php if ($valign == 'top') echo 'checked'; ?>> Сверху
    <input type="checkbox" name="valign" value="middle" <?php if ($valign == 'middle') echo 'checked'; ?>> По центру
    <input type="checkbox" name="valign" value="bottom" <?php if ($valign == 'bottom') echo 'checked'; ?>> Снизу<br>

    <input type="submit" value="Выполнить">
</form>

</body>
</html>
