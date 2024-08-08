<?php
/* Smarty version 4.3.0, created on 2023-06-26 03:50:29
  from 'C:\OpenServer\domains\dipmed\template_engine\template\dir\product_images_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6498e0d54d28c7_86746699',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2be09b30e2d37c1a951d5b5b1b1bd478ba96d6c' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\product_images_view.tpl',
      1 => 1687118658,
      2 => 'file',
    ),
    '3d1116ab5f9566ef3f0ac5ff6da2d6b927115b91' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\title_admin.tpl',
      1 => 1686666698,
      2 => 'file',
    ),
    'c08b652391867877704aa181387808c35f9cef1b' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\footer_admin.tpl',
      1 => 1670954434,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_6498e0d54d28c7_86746699 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Товар</title>
    <link rel="apple-touch-icon" sizes="180x180" href="../../../favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../../favicon-16x16.png">
    <link rel="manifest" href="../../../site.webmanifest">
    <link rel="mask-icon" href="../../../safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="../styles/normalize.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../styles/custom.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>
<body>
    <main class="main__section admin__section">

        <div class="container">
            <div class="page-header">
                <h1>
                    Изображения товаров
                </h1>
            </div>
            <div class="left-button-margin">
                <a href="/admin" class="btn btn-default pull-left">На главную</a>
            </div>
            <div class="right-button-margin">
                <a href="/admin/create-product-image" class="btn btn-default pull-right">Добавить изображения</a>
            </div>
                            <table class="table table-hover table-responsive table-bordered">
                    <tr>
                        <th>ID продукта</th>
                        <th>Изображение</th>
                    </tr>


                                            <tr>
                            <td class="setting__column">24 - Автоклав Statim 2000 S кассетный, объём 1,8 л</td>
                            <td class="setting__column"><img class="prod_image" src="../uploads/e21c9587148c6b16afc4413096b772e2da4d4d9c-25cf07eb572c11e284ee001e0b8d0418_db4e95a0040d4cc1ab64596e958788d5_resize1.jpg" alt=""></td>

                            <td class="setting__column">
                                <a href='delete_product_image.php?id=24' class='btn btn-danger delete-object'>
                                    <span class='glyphicon glyphicon-remove'></span> Удалить
                                </a>
                            </td>
                        <tr>
                                                <tr>
                            <td class="setting__column">24 - Автоклав Statim 2000 S кассетный, объём 1,8 л</td>
                            <td class="setting__column"><img class="prod_image" src="../uploads/e21c9587148c6b16afc4413096b772e2da4d4d9c-25cf07eb572c11e284ee001e0b8d0418_db4e95a0040d4cc1ab64596e958788d5_resize1.jpg" alt=""></td>

                            <td class="setting__column">
                                <a href='delete_product_image.php?id=24' class='btn btn-danger delete-object'>
                                    <span class='glyphicon glyphicon-remove'></span> Удалить
                                </a>
                            </td>
                        <tr>
                                                <tr>
                            <td class="setting__column">5 - Tempo 9 ELX cart</td>
                            <td class="setting__column"><img class="prod_image" src="../uploads/642e63577664b2e323f9b0d947549f8d3a259411-9944de458e0a4a83a2fcf21fa473ccf5_310620a68e19488997084371ca1601fb_resize1.jpg" alt=""></td>

                            <td class="setting__column">
                                <a href='delete_product_image.php?id=5' class='btn btn-danger delete-object'>
                                    <span class='glyphicon glyphicon-remove'></span> Удалить
                                </a>
                            </td>
                        <tr>
                                                <tr>
                            <td class="setting__column">5 - Tempo 9 ELX cart</td>
                            <td class="setting__column"><img class="prod_image" src="../uploads/642e63577664b2e323f9b0d947549f8d3a259411-9944de458e0a4a83a2fcf21fa473ccf5_310620a68e19488997084371ca1601fb_resize1.jpg" alt=""></td>

                            <td class="setting__column">
                                <a href='delete_product_image.php?id=5' class='btn btn-danger delete-object'>
                                    <span class='glyphicon glyphicon-remove'></span> Удалить
                                </a>
                            </td>
                        <tr>
                                                <tr>
                            <td class="setting__column">8 - Артикулятор 5032</td>
                            <td class="setting__column"><img class="prod_image" src="../uploads/4c77ff9d1837f1e1958ba9f20d3b2ced5b4322f3-0e1eee15572b11e284ee001e0b8d0418_5e7dd708f454465c840487b821a55056_resize1.jpg" alt=""></td>

                            <td class="setting__column">
                                <a href='delete_product_image.php?id=8' class='btn btn-danger delete-object'>
                                    <span class='glyphicon glyphicon-remove'></span> Удалить
                                </a>
                            </td>
                        <tr>
                                        </table>
                    </div>

    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="../js/jquery-3.6.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="../js/bootbox.min.js"></script>
</html><?php }
}
