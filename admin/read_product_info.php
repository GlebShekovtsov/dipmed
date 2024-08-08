<?php
// получаем ID товара
$id = isset($_GET["id"]) ? $_GET["id"] : die("ERROR: отсутствует ID.");

// подключаем файлы для работы с базой данных и файлы с объектами
include_once 'template_config.php';
include_once "config/database.php";
include_once "objects/product_admin.php";
include_once "objects/product_info_admin.php";


$smarty = new Smarty_Config();
$smarty->caching = true;
$smarty->force_compile = true;

// получаем соединение с базой данных
$database = new Database();
$db = $database->getConnection();

// подготавливаем объекты
$product = new Product($db);

$productInfo = new ProductInfo($db);

// устанавливаем свойство ID товара для чтения
$productInfo->id = $id;

$readProductInfo = $productInfo->readOne();

$items = array();
while ($row = $readProductInfo->fetch(PDO::FETCH_ASSOC)) {
    $items[] = $row;
}

// получаем информацию о товаре
$productInfo->readOne();

$smarty->assign('items', $items);
$smarty->assign('title', 'Информация о товаре');
$smarty->display('read_product_info.tpl');
?>
<div class="container">
    <table class="table table-hover table-responsive table-bordered">
        <tr>
            <td>ID товара</td>
            <td><?= $productInfo->id_product; ?> - <?= $productInfo->name ?></td>
        </tr>
        <tr>
            <td>Полное Название</td>
            <td><?= $productInfo->full_name; ?></td>
        </tr>
        <tr>
            <td>Производитель</td>
            <td><?= $productInfo->man_name; ?></td>
        </tr>
        <tr>
            <td>Категория</td>
            <td><?= $productInfo->category; ?></td>
        </tr>
        <tr>
            <td>Страна</td>
            <td><?= $productInfo->country; ?></td>
        </tr>
        <tr>
            <td>Цена</td>
            <td><?= $productInfo->price; ?> руб.</td>
        </tr>
        <tr>
            <td>Описание</td>
            <td><?= $productInfo->descr; ?></td>
        </tr>
    </table>
</div>