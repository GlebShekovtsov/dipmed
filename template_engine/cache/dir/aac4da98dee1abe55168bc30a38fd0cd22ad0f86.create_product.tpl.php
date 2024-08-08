<?php
/* Smarty version 4.3.0, created on 2023-06-14 01:07:27
  from 'C:\OpenServer\domains\dipmed\template_engine\template\dir\create_product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6488e89f93df14_42879133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07a3703f55a0af0fa295e598f4a459158c5374d6' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\create_product.tpl',
      1 => 1672077343,
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
function content_6488e89f93df14_42879133 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создание партнера</title>
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
                <a href="/admin/view-product" class="btn btn-default float-end">Просмотреть всё</a>
            </div>
            <div class="alert alert-success">Продукт был успешно создан.</div>
            <form action="/admin/create-product" enctype="multipart/form-data" method="post">

                <table class="table table-hover table-responsive table-bordered">

                    <tr>
                        <td>Название</td>
                        <td><input type="text" name="name" class="form-control" /></td>
                    </tr>
                    <tr>
                        <td>Категория</td>
                        <td>
                            <select name="category_id" class="form-control">
                                                                    <option value="Имплантология">Имплантология</option>
                                                                    <option value="Стоматологические установки">Стоматологические установки</option>
                                                                    <option value="Стоматологическое оборудование">Стоматологическое оборудование</option>
                                                                    <option value="Стоматологические инструменты">Стоматологические инструменты</option>
                                                                    <option value="Стоматологические материалы">Стоматологические материалы</option>
                                                                    <option value="Зуботехнические материалы">Зуботехнические материалы</option>
                                                                    <option value="Зуботехническое оборудование">Зуботехническое оборудование</option>
                                                                    <option value="Шовный материал">Шовный материал</option>
                                                                    <option value="Стерилизация и дезинфекция">Стерилизация и дезинфекция</option>
                                                                    <option value="Медицинская оптика">Медицинская оптика</option>
                                                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Изображение</td>
                        <td><input type="file" name="img"></td>

                    </tr>
                    <tr>
                        <td>Ссылка</td>
                        <td><input type="text" name="link" class="form-control" /></td>
                    </tr>

                    <tr>
                        <td></td>
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
