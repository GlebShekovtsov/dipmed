<?php
require_once 'template_config.php';
include_once 'config/database.php';
include_once 'objects/categories.php';
include_once 'objects/news.php';
include_once 'objects/product.php';


$smarty = new Smarty_Config;
$smarty->caching = true;
$smarty->force_compile = true;

$database = new Database();
$db = $database->getConnection();

$category = new Category($db);
$news = new News($db);
$product = new Product($db);


$stmtn = $news->read();
$newsArr = array();
while ($row = $stmtn->fetch(PDO::FETCH_ASSOC)) {
    $newsArr[] = $row;
}
$stmtc = $category->read();
$categories = array();
while ($row = $stmtc->fetch(PDO::FETCH_ASSOC)) {
    $categories[] = $row;
}
$stmtp = $product->read();
$products = array();
while ($row = $stmtp->fetch(PDO::FETCH_ASSOC)) {
    $products[] = $row;
}
$smarty->assign('categories', $categories);
$smarty->assign('news', $newsArr);
$smarty->assign('products', $products);

$smarty->assign('title', 'О нас');
$smarty->display('about.tpl');
