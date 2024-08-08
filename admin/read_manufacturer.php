<?php
// получаем ID товара
$id = isset($_GET["id"]) ? $_GET["id"] : die("ERROR: отсутствует ID.");

// подключаем файлы для работы с базой данных и файлы с объектами
include_once 'template_config.php';
include_once "config/database.php";
include_once "objects/manufacturer_admin.php";


$smarty = new Smarty_Config();
$smarty->caching = true;
$smarty->force_compile = true;

// получаем соединение с базой данных
$database = new Database();
$db = $database->getConnection();

// подготавливаем объекты
$manufacturer = new manufacturer($db);


// устанавливаем свойство ID товара для чтения
$manufacturer->id = $id;

$stmt = $manufacturer->readName();

$items = array();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $items[] = $row;
}


// получаем информацию о товаре
$manufacturer->readName();

$smarty->assign('items', $items);
$smarty->assign('title', 'Производитель');
$smarty->display('read_manufacturer.tpl');
?>
<div class="container">
    <table class="table table-hover table-responsive table-bordered">
        <tr>
            <td>Название</td>
            <td><?= $manufacturer->man_name; ?></td>
        </tr>
        <tr>
            <td>Изображение</td>
            <td>
                <?= $manufacturer->image ? "<img src='../uploads/{$manufacturer->image}' style='width:300px;' />" : "Изображение не найдено."; ?>
            </td>
        </tr>
    </table>
</div>