<?php
// получаем ID товара
$id = isset($_GET["id"]) ? $_GET["id"] : die("ERROR: отсутствует ID.");

// подключаем файлы для работы с базой данных и файлы с объектами
include_once 'template_config.php';
include_once "config/database.php";
include_once "objects/news_admin.php";


$smarty = new Smarty_Config();
$smarty->caching = true;
$smarty->force_compile = true;

// получаем соединение с базой данных
$database = new Database();
$db = $database->getConnection();

// подготавливаем объекты
$news = new news($db);


// устанавливаем свойство ID товара для чтения
$news->id = $id;

$stmt = $news->readOne();

$items = array();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $items[] = $row;
}


// получаем информацию о товаре
$news->readOne();

$smarty->assign('items', $items);
$smarty->assign('title', 'Новости');
$smarty->display('read_news.tpl');
?>
<div class="container">
    <table class="table table-hover table-responsive table-bordered">
        <tr>
            <td>Заголовок</td>
            <td><?= $news->header; ?></td>
        </tr>
        <tr>
            <td>Текст</td>
            <td><?= $news->text; ?></td>
        </tr>
        <tr>
            <td>Просмотры</td>
            <td><?= $news->views; ?></td>
        </tr>
        <tr>
            <td>Просмотры</td>
            <td><?= $news->date; ?></td>
        </tr>
        <tr>
            <td>Изображение</td>
            <td>
                <?= $news->img ? "<img src='../uploads/{$news->img}' style='width:300px;' />" : "Изображение не найдено."; ?>
            </td>
        </tr>
    </table>
</div>