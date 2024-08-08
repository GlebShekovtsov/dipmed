<?php
require 'template_config.php';
include_once 'config/database.php';
include_once 'objects/categories.php';


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
$smarty->assign('categories', $categories);


$smarty->assign('title', 'Контакты');
$smarty->display('contacts.tpl');
