<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Результат — средний балл</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
    </style>
</head>
<body>
<?php
$family = htmlspecialchars($_POST['family']);
$mark1 = intval($_POST['mark1']);
$mark2 = intval($_POST['mark2']);
$mark3 = intval($_POST['mark3']);

$average = ($mark1 + $mark2 + $mark3) / 3;

echo "<h2>Результаты</h2>";
echo "<p>Фамилия: <b>$family</b></p>";
echo "<p>Оценка 1: $mark1</p>";
echo "<p>Оценка 2: $mark2</p>";
echo "<p>Оценка 3: $mark3</p>";
echo "<p>Средний балл: <b>" . number_format($average, 2) . "</b></p>";

if ($average >= 4.5) {
    echo "<p style='color:green;'><b>Назначена повышенная стипендия!</b></p>";
} elseif ($average >= 4.0) {
    echo "<p style='color:blue;'><b>Назначена стипендия.</b></p>";
} else {
    echo "<p style='color:red;'><b>Стипендия не назначена.</b></p>";
}
?>
</body>
</html>
