<?php

$mysqli = new mysqli('127.0.0.1', 'root', 'keks2004', 'auth');

$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$repeat_password= $_POST["repeat_password"];
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$age = $_POST["age"];

if ($password !== $repeat_password) {
    echo "Пароли не совпадают";
    exit;
}

$sql = "SELECT id, username, password, email, FROM `users`  WHERE username = '$username'";
if (!$result = $mysqli->query($sql)) {
    echo "Извините, возникла проблема в работе сайта.";

    echo "Ошибка: Наш запрос не удался и вот почему: \n";
    echo "Запрос: " . $sql . "\n";
    echo "Номер ошибки: " . $mysqli->errno . "\n";
    echo "Ошибка: " . $mysqli->error . "\n";
    exit;
}

$sql = "INSERT INTO users (username, email, password, firstname)
    VALUES ('$username', '$email', '$password', egrthgrt)";