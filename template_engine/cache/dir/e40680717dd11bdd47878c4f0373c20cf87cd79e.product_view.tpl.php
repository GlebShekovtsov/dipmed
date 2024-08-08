<?php
/* Smarty version 4.3.0, created on 2023-06-26 03:46:26
  from 'C:\OpenServer\domains\dipmed\template_engine\template\dir\product_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6498dfe2730213_69201352',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b3c6f2bae726af84359194078c0f7b7969d864f' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\product_view.tpl',
      1 => 1672079833,
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
function content_6498dfe2730213_69201352 (Smarty_Internal_Template $_smarty_tpl) {
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
                    Товары
                </h1>
            </div>
            <div class="left-button-margin">
                <a href="/admin" class="btn btn-default pull-left">На главную</a>
            </div>
            <div class="right-button-margin">
                <a href="/admin/create-product" class="btn btn-default pull-right">Добавить карточку товара</a>
            </div>
                            <table class="table table-hover table-responsive table-bordered">
                    <tr>
                        <th>Название</th>
                        <th>Категория</th>
                        <th>Ссылка</th>
                        <th>Действия</th>
                    </tr>


                                            <tr>
                            <td> Vericom Co Ltd Denfil KIT</td>
                            <td>Стоматологические материалы</td>
                            <td class="item__link">https://shop.stomatorg.ru/catalog/plombirovochnye_materialy_svetovogo_otverzhdeniya/denfil_kit_startovyy_nabor_5_kh_4_g_a2_a3_a3_5_b2_b3_kompozitnyy_svetootverzhdaemyy_material/</td>
                            <td>
                                <a href='read-product?id=22' class='btn btn-primary left-margin'>
                                    <span class='glyphicon glyphicon-list'></span> Просмотр
                                </a>

                                <a href='update-product?id=22' class='btn btn-info left-margin'>
                                    <span class='glyphicon glyphicon-edit'></span> Редактировать
                                </a>

                                <a href='delete_product.php?id=22' class='btn btn-danger delete-object'>
                                    <span class='glyphicon glyphicon-remove'></span> Удалить
                                </a>
                            </td>
                        <tr>
                                                <tr>
                            <td> Дезcредство с моющим эффектом</td>
                            <td>Стерилизация и дезинфекция</td>
                            <td class="item__link">https://almadez.ru/dez-sredstva/concentrate/almadez-5l/#desc</td>
                            <td>
                                <a href='read-product?id=19' class='btn btn-primary left-margin'>
                                    <span class='glyphicon glyphicon-list'></span> Просмотр
                                </a>

                                <a href='update-product?id=19' class='btn btn-info left-margin'>
                                    <span class='glyphicon glyphicon-edit'></span> Редактировать
                                </a>

                                <a href='delete_product.php?id=19' class='btn btn-danger delete-object'>
                                    <span class='glyphicon glyphicon-remove'></span> Удалить
                                </a>
                            </td>
                        <tr>
                                                <tr>
                            <td>Carving plus</td>
                            <td>Стоматологические установки
</td>
                            <td class="item__link">https://shop.stomatorg.ru/catalog/oms/ustanovka_stomatologicheskaya_universal_carving_plus_tsvet_na_vybor_116609/</td>
                            <td>
                                <a href='read-product?id=6' class='btn btn-primary left-margin'>
                                    <span class='glyphicon glyphicon-list'></span> Просмотр
                                </a>

                                <a href='update-product?id=6' class='btn btn-info left-margin'>
                                    <span class='glyphicon glyphicon-edit'></span> Редактировать
                                </a>

                                <a href='delete_product.php?id=6' class='btn btn-danger delete-object'>
                                    <span class='glyphicon glyphicon-remove'></span> Удалить
                                </a>
                            </td>
                        <tr>
                                                <tr>
                            <td>Tempo 9 ELX cart</td>
                            <td>Стоматологические установки</td>
                            <td class="item__link">https://shop.stomatorg.ru/catalog/oms/ustanovka_stomatologicheskaya_tempo_9_elx_kart_17_1502_podkatnoy_modul_dlya_kp/</td>
                            <td>
                                <a href='read-product?id=5' class='btn btn-primary left-margin'>
                                    <span class='glyphicon glyphicon-list'></span> Просмотр
                                </a>

                                <a href='update-product?id=5' class='btn btn-info left-margin'>
                                    <span class='glyphicon glyphicon-edit'></span> Редактировать
                                </a>

                                <a href='delete_product.php?id=5' class='btn btn-danger delete-object'>
                                    <span class='glyphicon glyphicon-remove'></span> Удалить
                                </a>
                            </td>
                        <tr>
                                                <tr>
                            <td>Автоклав Statim 2000 S кассетный, объём 1,8 л</td>
                            <td>Стоматологическое оборудование</td>
                            <td class="item__link">https://shop.stomatorg.ru/catalog/avtoklavy/avtoklav_statim_2000_s_kassetnyy_obyem_1_8_l/</td>
                            <td>
                                <a href='read-product?id=24' class='btn btn-primary left-margin'>
                                    <span class='glyphicon glyphicon-list'></span> Просмотр
                                </a>

                                <a href='update-product?id=24' class='btn btn-info left-margin'>
                                    <span class='glyphicon glyphicon-edit'></span> Редактировать
                                </a>

                                <a href='delete_product.php?id=24' class='btn btn-danger delete-object'>
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
