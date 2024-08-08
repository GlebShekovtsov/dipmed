<?php
include_once 'template_config.php';
include_once 'config/database.php';
include_once 'objects/news_admin.php';

$smarty = new Smarty_Config();
$smarty->caching = true;
$smarty->force_compile = true;
$database = new Database();
$db = $database->getConnection();

$news = new News($db);


if ($_POST) {

    $news->header = $_POST['header'];
    $news->text = $_POST['text'];
    $news->views = $_POST['views'];
    $img = !empty($_FILES["img"]["name"])
        ? sha1_file($_FILES["img"]["tmp_name"]) . "-" . basename($_FILES["img"]["name"]) : "";

    $news->img = $img;



    echo "<div class='container'>";
    if ($news->create()) {
        $alert = '<div class="alert alert-success">Новость была успешно создана.</div>';
        echo $news->uploadPhoto();
        $smarty->assign('status', $alert);
    } else {
        $alert = '<div class="alert alert-danger">Невозможно создать новость.</div>';
        $smarty->assign('status', $alert);
    }
    echo "</div>";
}

$smarty->assign('title', 'Создание новости');

$smarty->display('create_news.tpl');
