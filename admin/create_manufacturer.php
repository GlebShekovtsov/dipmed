<?php
include_once 'template_config.php';
include_once 'config/database.php';
include_once 'objects/manufacturer_admin.php';

$smarty = new Smarty_Config();
$smarty->caching = true;
$smarty->force_compile = true;
$database = new Database();
$db = $database->getConnection();

$manufacturer = new Manufacturer($db);



if ($_POST) {
    $manufacturer->man_name = $_POST['man_name'];
    $img = !empty($_FILES["image"]["name"])
        ? sha1_file($_FILES["image"]["tmp_name"]) . "-" . basename($_FILES["image"]["name"]) : "";

    $manufacturer->image = $img;


    if ($manufacturer->create()) {
        $alert = '<div class="alert alert-success">Производитель был успешно создан.</div>';
        echo $manufacturer->uploadPhoto();
        $smarty->assign('status', $alert);
    } else {
        $alert = '<div class="alert alert-danger">Невозможно создать производителя.</div>';
        $smarty->assign('status', $alert);
    }
}

$smarty->assign('title', 'Создание производителя');

$smarty->display('create_manufacturer.tpl');
