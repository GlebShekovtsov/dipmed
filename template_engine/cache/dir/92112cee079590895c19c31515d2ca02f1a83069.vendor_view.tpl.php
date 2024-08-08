<?php
/* Smarty version 4.3.0, created on 2023-06-23 01:03:43
  from 'C:\OpenServer\domains\dipmed\template_engine\template\dir\vendor_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6494c53f1cd429_33423414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a47a60463964c8e54d9b0ad8922c50f3856dd7a4' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\vendor_view.tpl',
      1 => 1687454447,
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
function content_6494c53f1cd429_33423414 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Партнеры</title>
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
                    Партнеры
                </h1>
            </div>
            <div class="left-button-margin">
                <a href="/admin" class="btn btn-default pull-left">На главную</a>
            </div>
            <div class="right-button-margin">
                <a href="/admin/create-vendor" class="btn btn-default pull-right">Добавить карточку партнера</a>
            </div>
            <form role='search' action='/admin/search' class="search__form">
                <div class='input-group col-md-3 pull-left margin-right-1em search__input'>
                    <input type='text' class='form-control' placeholder='Введите название...' name='s' required />
                    <div class='input-group-btn'>";
                        <button class='btn btn-primary' type='submit'>
                        <i class='glyphicon glyphicon-search'></i></button>";
                    </div>
                </div>
            </form>
                            <table class="table table-hover table-responsive table-bordered">
                    <tr>
                        <th>Название</th>
                        <th>Описание</th>
                        <th>Ссылка</th>
                        <th>Действия</th>
                    </tr>


                                            <tr>
                            <td>Bottis</td>
                            <td>Botiss biomaterials – одна из ведущих компаний в области регенерации костной и мягких тканей, на 100% сфокусированная на создании регенерационных материалов именно для стоматологии. Это инновационная, клинически ориентированная биотехнологичная компания, головной офис и производственные мощности которой находятся в Берлине. Подробную информацию о botiss biomaterials можно найти на сайте botiss-dental.com

</td>
                            <td>https://botissplus.ru/</td>
                            <td>
                                <a href='read-vendor?id=8' class='btn btn-primary left-margin'>
                                    <span class='glyphicon glyphicon-list'></span> Просмотр
                                </a>

                                <a href='update-vendor?id=8' class='btn btn-info left-margin'>
                                    <span class='glyphicon glyphicon-edit'></span> Редактировать
                                </a>

                                <a href='delete_vendor.php?id=8' class='btn btn-danger delete-object'>
                                    <span class='glyphicon glyphicon-remove'></span> Удалить
                                </a>
                            </td>
                        <tr>
                                                <tr>
                            <td>PharmaDental</td>
                            <td>Компания Pharmadental – крупнейший поставщик оборудования для стоматологий на территории России. </td>
                            <td>https://www.pharma-dental.ru/</td>
                            <td>
                                <a href='read-vendor?id=6' class='btn btn-primary left-margin'>
                                    <span class='glyphicon glyphicon-list'></span> Просмотр
                                </a>

                                <a href='update-vendor?id=6' class='btn btn-info left-margin'>
                                    <span class='glyphicon glyphicon-edit'></span> Редактировать
                                </a>

                                <a href='delete_vendor.php?id=6' class='btn btn-danger delete-object'>
                                    <span class='glyphicon glyphicon-remove'></span> Удалить
                                </a>
                            </td>
                        <tr>
                                                <tr>
                            <td>Stomatorg</td>
                            <td>Крупнейший дистрибьютор высококачественного оборудования, расходных материалов, инструментов для стоматологических клиник и зуботехнических лабораторий на территории РФ.  </td>
                            <td>https://stomatorg.ru/company/index.php</td>
                            <td>
                                <a href='read-vendor?id=4' class='btn btn-primary left-margin'>
                                    <span class='glyphicon glyphicon-list'></span> Просмотр
                                </a>

                                <a href='update-vendor?id=4' class='btn btn-info left-margin'>
                                    <span class='glyphicon glyphicon-edit'></span> Редактировать
                                </a>

                                <a href='delete_vendor.php?id=4' class='btn btn-danger delete-object'>
                                    <span class='glyphicon glyphicon-remove'></span> Удалить
                                </a>
                            </td>
                        <tr>
                                                <tr>
                            <td>Telos</td>
                            <td>С 1975 года компания Telos занимается разработкой и внедрением технологий в области травматологии и ортопедии.
 
На счету компании такие разработки как: комплекс для лечения переломов трубчатых костей,технология диагностики разрывов связок голеностопа и коленного сустава, система диагностики разрыва локтевой коллатеральной связки большого пальца, комплекс для обследования передней и задней крестообразных связок коленного сустава, разработка и производство искусственных связок, инструменты для проведения операций по имплантации искусственных связок коленного сустава.</td>
                            <td>https://telos-healthcare.ru/index.php/o-kompanii</td>
                            <td>
                                <a href='read-vendor?id=2' class='btn btn-primary left-margin'>
                                    <span class='glyphicon glyphicon-list'></span> Просмотр
                                </a>

                                <a href='update-vendor?id=2' class='btn btn-info left-margin'>
                                    <span class='glyphicon glyphicon-edit'></span> Редактировать
                                </a>

                                <a href='delete_vendor.php?id=2' class='btn btn-danger delete-object'>
                                    <span class='glyphicon glyphicon-remove'></span> Удалить
                                </a>
                            </td>
                        <tr>
                                                <tr>
                            <td>Алмадез</td>
                            <td>Производитель дезинфицирующих средств ООО «Базовая дезинфекция» зарекомендовал себя на рынке с 2009 года. Главным продуктом является бренд «Алмадез», представленный в широком разнообразии специальных дезсредств.</td>
                            <td>https://almadez.ru/</td>
                            <td>
                                <a href='read-vendor?id=5' class='btn btn-primary left-margin'>
                                    <span class='glyphicon glyphicon-list'></span> Просмотр
                                </a>

                                <a href='update-vendor?id=5' class='btn btn-info left-margin'>
                                    <span class='glyphicon glyphicon-edit'></span> Редактировать
                                </a>

                                <a href='delete_vendor.php?id=5' class='btn btn-danger delete-object'>
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
