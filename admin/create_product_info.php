<?php
include_once 'template_config.php';
include_once 'config/database.php';

include_once 'objects/product_admin.php';
include_once 'objects/product_info_admin.php';

include_once 'objects/categories_admin.php';
include_once 'objects/manufacturer_admin.php';



$smarty = new Smarty_Config();
$smarty->caching = true;
$smarty->force_compile = true;
$database = new Database();
$db = $database->getConnection();

$product = new Product($db);

$categories = new Category($db);

$manufacturer = new Manufacturer($db);

$productInfo = new ProductInfo($db);

$productRead = $product->read();

$manufacturerRead = $manufacturer->read();

$stmt = $categories->read();

$itemsCategory = array();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $itemsCategory[] = $row;
}

$itemsProduct = array();
while ($row = $productRead->fetch(PDO::FETCH_ASSOC)) {
    $itemsProduct[] = $row;
}
$itemsManufacturer = array();
while ($row = $manufacturerRead->fetch(PDO::FETCH_ASSOC)) {
    $itemsManufacturer[] = $row;
}

if ($_POST) {
    $productInfo->id_product = $_POST['id_product'];
    $productInfo->full_name = $_POST["full_name"];
    $productInfo->manufacturer_id = $_POST['manufacturer_id'];
    $productInfo->country = $_POST['country'];
    $productInfo->price = $_POST['price'];
    $productInfo->descr = $_POST['descr'];
    $productInfo->category_id = $_POST['category_id'];

    if ($productInfo->create()) {
        $alert = '<div class="alert alert-success">Продукт был успешно создан.</div>';
        $smarty->assign('status', $alert);
    } else {
        $alert = '<div class="alert alert-danger">Невозможно создать продукт.</div>';
        $smarty->assign('status', $alert);
    }
}

$smarty->assign('itemsCategory', $itemsCategory);

$smarty->assign('itemsProduct', $itemsProduct);

$smarty->assign('itemsManufacturer', $itemsManufacturer);

$smarty->assign('title', 'Создание информации о продукте');

$smarty->display('create_product_info.tpl');
