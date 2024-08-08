<?php
include_once 'template_config.php';
include_once 'config/database.php';
include_once 'objects/vendor_admin.php';

$smarty = new Smarty_Config();
$smarty->caching = true;
$smarty->force_compile = true;
$database = new Database();
$db = $database->getConnection();

$vendor = new Vendor($db);
// class CreationVendor
// {
//     public function PostCheck()
//     {
//         if ($_POST) {
//             $this->vendor->img = "placeholder.png";
//             $this->vendor->name = $_POST['name'];
//             $this->vendor->descr = $_POST['descr'];
//             $this->vendor->link = $_POST['link'];

//             if ($this->vendor->create()) {
//                 $alert = '<div class="alert alert-success">Товар был успешно создан.</div>';
//                 $this->smarty->assign('status', $alert);
//             } else {
//                 $alert = '<div class="alert alert-danger">Невозможно создать товар.</div>';
//                 $this->smarty->assign('status', $alert);
//             }
//         }
//     }
// }

if ($_POST) {
    $vendor->name = $_POST['name'];
    $vendor->descr = $_POST['descr'];
    $vendor->link = $_POST['link'];
    $img = !empty($_FILES["img"]["name"])
        ? sha1_file($_FILES["img"]["tmp_name"]) . "-" . basename($_FILES["img"]["name"]) : "";
        
    $vendor->img = $img;


    if ($vendor->create()) {
        $alert = '<div class="alert alert-success">Карточка была успешно создана.</div>';
        echo $vendor->uploadPhoto();
        $smarty->assign('status', $alert);
    } else {
        $alert = '<div class="alert alert-danger">Невозможно создать карточку.</div>';
        $smarty->assign('status', $alert);
    }
}

$smarty->assign('title', 'Создание партнера');

$smarty->display('create_vendor.tpl');
