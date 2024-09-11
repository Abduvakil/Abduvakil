<?php
// Параметры подключения к базе данных
$host = "localhost";         // Имя хоста (обычно localhost)
$user = "root";              // Имя пользователя MySQL
$password = "your_password"; // Пароль MySQL
$dbname = "shoe_store";      // Имя базы данных

// Подключение к MySQL
$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}
?>
