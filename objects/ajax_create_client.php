<?php

// проверим, было ли получено значение в $_POST
// подключаем файлы для работы с базой данных и файлы с объектами
include_once "config/database.php";
include_once "objects/client.php";

// получаем соединение с базой данных
$database = new Database();
$db = $database->getConnection();

// подготавливаем объект Order
$client = new Client($db);

$client->fio = $_POST["fio"];
$client->email = $_POST["email"];
$client->telnum = $_POST["telnum"];
// создаем заявку
if ($client->create()) {
    echo "Клиент создан";
}

// если невозможно удалить товар
else {
    echo "Невозможно подать заявку";
}
