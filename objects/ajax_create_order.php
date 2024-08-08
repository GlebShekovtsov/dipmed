<?php

// проверим, было ли получено значение в $_POST
// подключаем файлы для работы с базой данных и файлы с объектами
include_once "config/database.php";
include_once "objects/order.php";

// получаем соединение с базой данных
$database = new Database();
$db = $database->getConnection();

// подготавливаем объект Order
$order = new Order($db);

$order->fio = $_POST["fio"];
$order->gender = $_POST["gender"];
$order->email = $_POST["email"];
$order->telnum = $_POST["telnum"];
$order->message = $_POST["message"];
// создаем заявку
if ($order->create()) {
    echo "Заявка подана";
}

// если невозможно удалить товар
else {
    echo "Невозможно подать заявку";
}
