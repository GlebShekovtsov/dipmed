<?php
include_once 'template_config.php';
include_once 'config/database.php';

include_once 'objects/product_admin.php';
include_once 'objects/product_images_admin.php';




$smarty = new Smarty_Config();
$smarty->caching = true;
$smarty->force_compile = true;
$database = new Database();
$db = $database->getConnection();

$product = new Product($db);

$productImages = new ProductImages($db);

$productRead = $product->read();




$itemsProduct = array();
while ($row = $productRead->fetch(PDO::FETCH_ASSOC)) {
    $itemsProduct[] = $row;
}

$dir = "uploads/";
$host = "localhost";
$username = "root";
$password = "root";
$dbname = "dipmedtorg";
$connect = mysqli_connect('localhost', 'root', 'root', 'dipmedtorg');
if ($connect->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_POST) {

    $id_product = $_POST['id_product'];
    foreach ($_FILES['img']['name'] as $k => $f) {
        if (!$_FILES['img']['error'][$k]) {
            $product_rename = sha1_file($_FILES["img"]["tmp_name"][$k]) . "-" . basename($_FILES["img"]["name"][$k]);
            if (is_uploaded_file($_FILES['img']['tmp_name'][$k])) { //Проверка загрузки файла в tmp
                if (move_uploaded_file($_FILES['img']['tmp_name'][$k], $dir . $product_rename)) { //Перемещение файла
                    $alert = '<div class="alert alert-success">Изображение было успешно создано</div>';
                    $smarty->assign('status', $alert);
                } else {
                    $alert = '<div class="alert alert-danger">Невозможно создать изображение.</div>';
                    $smarty->assign('status', $alert);
                }
            }
        }
        $sql = "INSERT INTO `product_images` (`id_product`, `img`) VALUES ($id_product, '$product_rename')";
        if ($connect->query($sql)) {
        }
    }
    // $productImages->id_product = $_POST['id_product'];
    // $img = !empty($_FILES["img"]["name"])
    //     ? sha1_file($_FILES["img"]["tmp_name"]) . "-" . basename($_FILES["img"]["name"]) : "";

    // $productImages->img = $img;

    // if ($productImages->create()) {
    //     $alert = '<div class="alert alert-success">Изображение было успешно создано</div>';
    //     echo $productImages->uploadPhoto();
    //     $smarty->assign('status', $alert);
    // } else {
    //     $alert = '<div class="alert alert-danger">Невозможно создать изображение.</div>';
    //     $smarty->assign('status', $alert);
    // }
}
$smarty->assign('itemsProduct', $itemsProduct);


$smarty->assign('title', 'Создание изображения продукта');

$smarty->display('create_product_image.tpl');
