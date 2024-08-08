<?php
require_once 'template_config.php';
include_once 'config/database.php';
include_once 'objects/categories.php';
include_once 'objects/vendor.php';

$smarty = new Smarty_Config;
$smarty->caching = true;
$smarty->force_compile = true;


$database = new Database();
$db = $database->getConnection();

$category = new Category($db);

$stmtc = $category->read();
$categories = array();
while ($row = $stmtc->fetch(PDO::FETCH_ASSOC)) {
    $categories[] = $row;
}
$vendor = new Vendor($db);
$stmt = $vendor->readRealAll();
$items = array();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $items[] = $row;
}
$smarty->assign('items', $items);
$smarty->assign('categories', $categories);
$smarty->assign('title', 'Партнеры');
$smarty->display('partners.tpl');
