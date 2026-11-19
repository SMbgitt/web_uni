<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Результат — количество слов</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
    </style>
</head>
<body>
<?php
$str = htmlspecialchars($_POST['str']);
$wordCount = str_word_count($str);

echo "<h2>Результат</h2>";
echo "<p>Введённая строка: <b>$str</b></p>";
echo "<p>Количество слов: <b>$wordCount</b></p>";
?>
</body>
</html>
