<?php
// получаем ID товара
$id = isset($_GET["id"]) ? $_GET["id"] : die("ERROR: отсутствует ID.");

// подключаем файлы для работы с базой данных и файлы с объектами
include_once 'template_config.php';
include_once "config/database.php";
include_once "objects/product_admin.php";


$smarty = new Smarty_Config();
$smarty->caching = true;
$smarty->force_compile = true;

// получаем соединение с базой данных
$database = new Database();
$db = $database->getConnection();

// подготавливаем объекты
$product = new Product($db);


// устанавливаем свойство ID товара для чтения
$product->id = $id;

$stmt = $product->readOne();

$items = array();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $items[] = $row;
}


// получаем информацию о товаре
$product->readOne();

$smarty->assign('items', $items);
$smarty->assign('title', 'Товар');
$smarty->display('read_product.tpl');
?>
<div class="container">
    <table class="table table-hover table-responsive table-bordered">
        <tr>
            <td>Название</td>
            <td><?= $product->name; ?></td>
        </tr>
        <tr>
            <td>Категория</td>
            <td><?= $product->category; ?></td>
        </tr>
        <tr>
            <td>Cсылка</td>
            <td><?= $product->link; ?></td>
        </tr>
        <tr>
            <td>Изображение</td>
            <td>
                <?= $product->img ? "<img src='../uploads/{$product->img}' style='width:300px;' />" : "Изображение не найдено."; ?>
            </td>
        </tr>
    </table>
</div>