<?php
// получаем ID товара
$id = isset($_GET["id"]) ? $_GET["id"] : die("ERROR: отсутствует ID.");

// подключаем файлы для работы с базой данных и файлы с объектами
include_once 'template_config.php';
include_once "config/database.php";
include_once "objects/client_admin.php";


$smarty = new Smarty_Config();
$smarty->caching = true;
$smarty->force_compile = true;

// получаем соединение с базой данных
$database = new Database();
$db = $database->getConnection();

// подготавливаем объекты
$client = new client($db);


// устанавливаем свойство ID товара для чтения
$client->id = $id;

$stmt = $client->readOne();


// получаем информацию о товаре
$client->readOne();

$smarty->assign('title', 'Клиент');
$smarty->display('read_client.tpl');
?>
<div class="container">
    <table class="table table-hover table-responsive table-bordered">
        <tr>
            <td>Название</td>
            <td><?= $client->fio; ?></td>
        </tr>
        <tr>
            <td>Описание</td>
            <td><?= $client->telnum; ?></td>
        </tr>
        <tr>
            <td>Ссылка</td>
            <td><?= $client->email; ?></td>
        </tr>
        <tr>
            <td>Клиент с</td>
            <td><?= $client->date; ?></td>
        </tr>
    </table>
</div>