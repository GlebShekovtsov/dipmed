<?php
// получаем ID товара
$id = isset($_GET["id"]) ? $_GET["id"] : die("ERROR: отсутствует ID.");

// подключаем файлы для работы с базой данных и файлы с объектами
include_once 'template_config.php';
include_once "config/database.php";
include_once "objects/vendor_admin.php";


$smarty = new Smarty_Config();
$smarty->caching = true;
$smarty->force_compile = true;

// получаем соединение с базой данных
$database = new Database();
$db = $database->getConnection();

// подготавливаем объекты
$vendor = new vendor($db);


// устанавливаем свойство ID товара для чтения
$vendor->id = $id;

$stmt = $vendor->readOne();

$items = array();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $items[] = $row;
}


// получаем информацию о товаре
$vendor->readOne();

$smarty->assign('items', $items);
$smarty->assign('title', 'Партнер');
$smarty->display('read_vendor.tpl');
?>
<div class="container">
    <table class="table table-hover table-responsive table-bordered">
        <tr>
            <td>Название</td>
            <td><?= $vendor->name; ?></td>
        </tr>
        <tr>
            <td>Описание</td>
            <td><?= $vendor->descr; ?></td>
        </tr>
        <tr>
            <td>Ссылка</td>
            <td><?= $vendor->link; ?></td>
        </tr>
        <tr>
            <td>Изображение</td>
            <td>
                <?= $vendor->img ? "<img src='../uploads/{$vendor->img}' style='width:300px;' />" : "Изображение не найдено."; ?>
            </td>
        </tr>
    </table>
</div>