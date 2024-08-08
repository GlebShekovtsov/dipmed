<?php
// получаем ID товара

// подключаем файлы для работы с базой данных и файлы с объектами
include_once 'template_config.php';
include_once "config/database.php";
include_once "objects/order_admin.php";


$smarty = new Smarty_Config();
$smarty->caching = true;
$smarty->force_compile = true;

// получаем соединение с базой данных
$database = new Database();
$db = $database->getConnection();

// подготавливаем объекты
$order = new Order($db);


// получаем информацию о товаре
$order->readNew();

if ($order->readNew() == true) {
    echo "1";
} else {
    echo "2";
}
