<?php
include_once 'template_config.php';
include_once 'config/database.php';
include_once 'objects/vendor.php';
include_once 'objects/order.php';
include_once 'objects/categories.php';
include_once 'objects/product.php';
include_once 'objects/news.php';



$smarty = new Smarty_Config();
$smarty->caching = true;
$smarty->force_compile = true;

$database = new Database();
$db = $database->getConnection();

$vendor = new Vendor($db);
$order = new Order($db);
$category = new Category($db);
$product = new Product($db);
$news = new News($db);


$stmt = $vendor->readAll();

$stmtc = $category->read();

$stmtp = $product->read();

$stmtn = $news->read();

$items = array();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $items[] = $row;
}
$categories = array();
while ($row = $stmtc->fetch(PDO::FETCH_ASSOC)) {
    $categories[] = $row;
}
$products = array();
while ($row = $stmtp->fetch(PDO::FETCH_ASSOC)) {
    $products[] = $row;
}
$newsArr = array();
while ($row = $stmtn->fetch(PDO::FETCH_ASSOC)) {
    $newsArr[] = $row;
}

$smarty->assign('items', $items);
$smarty->assign('categories', $categories);
$smarty->assign('products', $products);
$smarty->assign('news', $newsArr);

$smarty->assign('title', 'Главная');
$smarty->display('index.tpl');
