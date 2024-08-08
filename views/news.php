<?php
require 'template_config.php';
include_once 'config/database.php';
include_once 'objects/news.php';
include_once 'objects/categories.php';


$page = isset($_GET["page"]) ? $_GET["page"] : 1;

// устанавливаем ограничение количества записей на странице
$records_per_page = 5;
// подсчитываем лимит запроса
$from_record_num = ($records_per_page * $page) - $records_per_page;


$smarty = new Smarty_Config();
$smarty->caching = true;
$smarty->force_compile = true;

$database = new Database();
$db = $database->getConnection();

$category = new Category($db);
$news = new News($db);
$stmt = $news->readAll($from_record_num, $records_per_page);
$page_url = "view-news?";
$total_rows = $news->countAll();
$num = $stmt->rowCount();

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
$smarty->assign('page_url', $page_url);
$smarty->assign('page', $page);
$smarty->assign('total_rows', $total_rows);
$smarty->assign('records_per_page', $records_per_page);
$smarty->display('news.tpl');
