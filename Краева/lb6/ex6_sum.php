<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Упражнение 6. Сложение двух переменных</title>
</head>
<body>
<?php
// Вызов: localhost/ex6_sum.php?var1=3&var2=5
$var1 = isset($_GET['var1']) ? floatval($_GET['var1']) : 0;
$var2 = isset($_GET['var2']) ? floatval($_GET['var2']) : 0;
$sum = $var1 + $var2;

echo "<h2>Сложение двух чисел</h2>";
echo "<p>Переменная 1: $var1</p>";
echo "<p>Переменная 2: $var2</p>";
echo "<p><b>Сумма: $sum</b></p>";
?>
</body>
</html>
