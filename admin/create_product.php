<?php
include_once 'template_config.php';
include_once 'config/database.php';
include_once 'objects/product_admin.php';
include_once 'objects/categories_admin.php';

$smarty = new Smarty_Config();
$smarty->caching = true;
$smarty->force_compile = true;
$database = new Database();
$db = $database->getConnection();

$product = new Product($db);
$categories = new Category($db);


$stmt = $categories->read();
$itemsCategory = array();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $itemsCategory[] = $row;
}

if ($_POST) {
    $product->name = $_POST['name'];
    $product->category = $_POST["category_id"];
    $product->link = $_POST['link'];
    $img = !empty($_FILES["img"]["name"])
        ? sha1_file($_FILES["img"]["tmp_name"]) . "-" . basename($_FILES["img"]["name"]) : "";

    $product->img = $img;


    if ($product->create()) {
        $alert = '<div class="alert alert-success">Продукт был успешно создан.</div>';
        echo $product->uploadPhoto();
        $smarty->assign('status', $alert);
    } else {
        $alert = '<div class="alert alert-danger">Невозможно создать продукт.</div>';
        $smarty->assign('status', $alert);
    }
}

$smarty->assign('itemsCategory', $itemsCategory);
$smarty->assign('title', 'Создание продукта');

$smarty->display('create_product.tpl');
