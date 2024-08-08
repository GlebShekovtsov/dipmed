<?php
/* Smarty version 4.3.0, created on 2023-06-26 03:49:40
  from 'C:\OpenServer\domains\dipmed\template_engine\template\dir\create_product_image.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6498e0a4626ee7_57349086',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b28e91253657fe0528948af7a4aef0de4ace6618' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\create_product_image.tpl',
      1 => 1687035026,
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
function content_6498e0a4626ee7_57349086 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создание изображения продукта</title>
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
                <h1>Создание карточки продукта</h1>
            </div>
            <div class="right-button-margin">
                <a href="/admin/view-product_images" class="btn btn-default float-end">Просмотреть всё</a>
            </div>
            <div class="alert alert-success">Изображение было успешно создано</div>
            <form action="/admin/create-product-image" enctype="multipart/form-data" method="post">

                <table class="table table-hover table-responsive table-bordered">

                    <tr>
                        <td>ID товара</td>
                        <td>
                            <select name="id_product" class="form-control">
                                                                    <option value="5">5 - Tempo 9 ELX cart</option>
                                                                    <option value="6">6 - Carving plus</option>
                                                                    <option value="8">8 - Артикулятор 5032</option>
                                                                    <option value="9">9 - Воск погружной ELASTO DIP</option>
                                                                    <option value="13">13 - Сплав Magnum Ceramic S</option>
                                                                    <option value="14">14 - Фрезерный станок A3 IRON</option>
                                                                    <option value="15">15 - Смеситель вакуумный FOX.88/1.0.</option>
                                                                    <option value="16">16 - Имплантат Submerged без имплантовода</option>
                                                                    <option value="17">17 - Имплантат Submerged с имплантоводом</option>
                                                                    <option value="18">18 - Бинокуляры Heine HR 2.5х</option>
                                                                    <option value="19">19 -  Дезcредство с моющим эффектом</option>
                                                                    <option value="20">20 - Диспенсерная система с салфетками</option>
                                                                    <option value="22">22 -  Vericom Co Ltd Denfil KIT</option>
                                                                    <option value="23">23 - Шовный материал Супрамид HS 18</option>
                                                                    <option value="24">24 - Автоклав Statim 2000 S кассетный, объём 1,8 л</option>
                                                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Изображение</td>
                        <td><input type="file" name="img[]" multiple></td>
                    </tr>
                    <tr>
                        <td>Действия</td>
                        <td>
                            <button type="submit" class="btn btn-primary">Создать</button>
                        </td>
                    </tr>

                </table>
            </form>
        </div>

    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="../js/jquery-3.6.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="../js/bootbox.min.js"></script>
</html><?php }
}
