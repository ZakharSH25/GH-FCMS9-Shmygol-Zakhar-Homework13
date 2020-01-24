<?php

$mysqli = new mysqli('127.0.0.1', 'root', 'keks2004', 'auth');

$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT id, username, password FROM `users`  WHERE username = '$username'";
if (!$result = $mysqli->query($sql)) {
    echo "Извините, возникла проблема в работе сайта.";

    echo "Ошибка: Наш запрос не удался и вот почему: \n";
    echo "Запрос: " . $sql . "\n";
    echo "Номер ошибки: " . $mysqli->errno . "\n";
    echo "Ошибка: " . $mysqli->error . "\n";
    exit;
}

if ($result->num_rows === 0) {
    echo "No user with username ".$_POST["username"];
    exit;
}


$user = $result->fetch_assoc();

if ($user["password"] !== $_POST["password"]) {
    echo "INVALID PASSWORD";
    exit;
}

echo $_POST["username"] . $_POST["password"];
