<?php

// проверим, было ли получено значение в $_POST
// подключаем файлы для работы с базой данных и файлы с объектами
include_once "config/database.php";
include_once "objects/deal.php";

// получаем соединение с базой данных
$database = new Database();
$db = $database->getConnection();

// подготавливаем объект Deal
$deal = new Deal($db);

$deal->product_id = $_POST["product_id"];
$deal->phone_num = $_POST["phone_num"];
$deal->message = $_POST["message"];
// создаем заявку
if ($deal->create()) {
    echo "Заявка подана";
}

// если невозможно удалить товар
else {
    echo "Невозможно подать предложение";
}
