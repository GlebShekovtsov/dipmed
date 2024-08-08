<?php
session_start();
include_once 'template_config.php';
include_once 'config/database.php';
include_once 'objects/vendor_admin.php';
include_once 'objects/admin_admin.php';



$smarty = new Smarty_Config();
$smarty->caching = true;
$smarty->force_compile = true;

$database = new Database();
$db = $database->getConnection();

$admin = new Admin($db);



if ($_POST) {
    $admin->login = $_POST['login'];
    $admin->password = $_POST['password'];
    if ($admin->readOne() == true) {
        $alert = '<div class="alert alert-success">Вход выполнен</div>';
        $smarty->assign('status', $alert);
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['password'] = $_POST['password'];
    } else {
        $alert = '<div class="alert alert-danger">Данные неверны</div>';
        $smarty->assign('status', $alert);
    }
}

if (isset($_SESSION['login']) && isset($_SESSION['password'])) {
}


$smarty->assign('title', 'Административная панель');
$smarty->display('product_settings.tpl');
