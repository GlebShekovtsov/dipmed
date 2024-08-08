<?php
require 'template_config.php';
include_once 'config/database.php';
include_once 'objects/news.php';
include_once 'objects/categories.php';


// устанавливаем ограничение количества записей на странице
$id = isset($_GET["id"]) ? $_GET["id"] : die("ERROR: отсутствует ID.");



$smarty = new Smarty_Config();
$smarty->caching = true;
$smarty->force_compile = true;

$database = new Database();
$db = $database->getConnection();

$category = new Category($db);
$news = new News($db);
$news->id = $id;

$stmt = $news->readOne();

$items = array();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $items[] = $row;
}
$stmtc = $category->read();
$categories = array();
while ($row = $stmtc->fetch(PDO::FETCH_ASSOC)) {
    $categories[] = $row;
}
$stmtf = $news->recentNews();
$recentNews = array();
while ($row = $stmtf->fetch(PDO::FETCH_ASSOC)) {
    $recentNews[] = $row;
}
$smarty->assign('categories', $categories);
$smarty->assign('news', $items);
$smarty->assign('recentNews', $recentNews);

$smarty->assign('title', 'Новости');
$smarty->display('news_page.tpl');
