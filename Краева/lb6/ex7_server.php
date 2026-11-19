<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Упражнение 7. Параметры Web-сервера</title>
</head>
<body>
<h2>Параметры Web-сервера</h2>
<?php
echo "<p>IP-адрес удаленного компьютера: " . $_SERVER['REMOTE_ADDR'] . "</p>";
echo "<p>Метод пересылки данных: " . $_SERVER['REQUEST_METHOD'] . "</p>";
echo "<p>Программное обеспечение сервера: " . $_SERVER['SERVER_SOFTWARE'] . "</p>";
echo "<p>Протокол передачи данных: " . $_SERVER['SERVER_PROTOCOL'] . "</p>";
echo "<p>Каталог для хранения документов: " . $_SERVER['DOCUMENT_ROOT'] . "</p>";
echo "<p>IP-адрес сервера: " . $_SERVER['SERVER_ADDR'] . "</p>";
echo "<p>Почтовый адрес администратора: " . (isset($_SERVER['SERVER_ADMIN']) ? $_SERVER['SERVER_ADMIN'] : "не задан") . "</p>";
echo "<p>Имя хост-компьютера: " . $_SERVER['SERVER_NAME'] . "</p>";
?>
</body>
</html>
