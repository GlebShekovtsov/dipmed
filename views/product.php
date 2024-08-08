<?php
require 'template_config.php';
include_once 'config/database.php';
include_once 'objects/product.php';
include_once 'objects/product_info.php';
include_once 'objects/categories.php';

$page = isset($_GET["page"]) ? $_GET["page"] : 1;
$id = isset($_GET["category"]) ? $_GET["category"] : "Все категории";
$name = isset($_GET["name"]) ? $_GET["name"] : "Все категории";
// устанавливаем ограничение количества записей на странице
$records_per_page = 5;
// подсчитываем лимит запроса
$from_record_num = ($records_per_page * $page) - $records_per_page;


$smarty = new Smarty_Config();
$smarty->caching = true;
$smarty->force_compile = true;

$database = new Database();
$db = $database->getConnection();

$product = new ProductInfo($db);
$category = new Category($db);


$product->category = $id;

$product->readCategory();

if(isset($_GET["category"])) {
    $stmt = $product->readCategory();
}
else {
    $stmt = $product->readAllWP();
}


$products = array();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

    $products[] = $row;
}


$stmtc = $category->read();
$categories = array();
while ($row = $stmtc->fetch(PDO::FETCH_ASSOC)) {
    $categories[] = $row;
}
$smarty->assign('id', $id);
$smarty->assign('name', $name);

$smarty->assign('categories', $categories);
$smarty->assign('title', 'Продукт');
$smarty->assign('products', $products);
$smarty->display('product.tpl');
