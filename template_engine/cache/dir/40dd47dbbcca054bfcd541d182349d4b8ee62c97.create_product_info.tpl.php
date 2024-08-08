<?php
/* Smarty version 4.3.0, created on 2023-06-26 03:49:15
  from 'C:\OpenServer\domains\dipmed\template_engine\template\dir\create_product_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6498e08b7cea17_34246113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db743f3e828fbfed0ca59ceb567df1d0c0a07704' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\create_product_info.tpl',
      1 => 1686679517,
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
function content_6498e08b7cea17_34246113 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создание информации о продукте</title>
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
                <a href="/admin/view-product_info" class="btn btn-default float-end">Просмотреть всё</a>
            </div>
            
            <form action="/admin/create-product-info" enctype="multipart/form-data" method="post">

                <h3 class="product__header">ID Товара</h3>
                <select name="id_product" class="form-control settings__control">
                                            <option value="5">5 - Tempo 9 ELX cart - Стоматологические установки</option>
                                            <option value="6">6 - Carving plus - Стоматологические установки
</option>
                                            <option value="8">8 - Артикулятор 5032 - Стоматологические инструменты</option>
                                            <option value="9">9 - Воск погружной ELASTO DIP - Зуботехнические материалы</option>
                                            <option value="13">13 - Сплав Magnum Ceramic S - Зуботехнические материалы</option>
                                            <option value="14">14 - Фрезерный станок A3 IRON - Зуботехническое оборудование</option>
                                            <option value="15">15 - Смеситель вакуумный FOX.88/1.0. - Зуботехническое оборудование</option>
                                            <option value="16">16 - Имплантат Submerged без имплантовода - Имплантология</option>
                                            <option value="17">17 - Имплантат Submerged с имплантоводом - Имплантология</option>
                                            <option value="18">18 - Бинокуляры Heine HR 2.5х - Медицинская оптика</option>
                                            <option value="19">19 -  Дезcредство с моющим эффектом - Стерилизация и дезинфекция</option>
                                            <option value="20">20 - Диспенсерная система с салфетками - Стерилизация и дезинфекция</option>
                                            <option value="22">22 -  Vericom Co Ltd Denfil KIT - Стоматологические материалы</option>
                                            <option value="23">23 - Шовный материал Супрамид HS 18 - Шовный материал</option>
                                            <option value="24">24 - Автоклав Statim 2000 S кассетный, объём 1,8 л - Стоматологическое оборудование</option>
                                    </select>
                <h3 class="product__header">Полное название товара</h3>
                <input type="text" name="full_name" class="form-control settings__input" />
                <h3 class="product__header">Страна</h3>
                <input type="text" name="country" class="form-control settings__input" />
                <h3 class="product__header">Цена</h3>
                <input type="text" name="price" class="form-control settings__input" />
                <h3 class="product__header">Производитель</h3>
                <select name="manufacturer_id" class="form-control settings__control">
                                            <option value="1">1 - SciCan</option>
                                            <option value="2">2 - OMS</option>
                                            <option value="3">3 - Asa Dental</option>
                                    </select>
                <h3 class="product__header">Категория</h3>
                <select name="category_id" class="form-control settings__control">
                                            <option value="1">1 - Имплантология</option>
                                            <option value="2">2 - Стоматологические установки</option>
                                            <option value="3">3 - Стоматологическое оборудование</option>
                                            <option value="4">4 - Стоматологические инструменты</option>
                                            <option value="5">5 - Стоматологические материалы</option>
                                            <option value="6">6 - Зуботехнические материалы</option>
                                            <option value="7">7 - Зуботехническое оборудование</option>
                                            <option value="8">8 - Шовный материал</option>
                                            <option value="9">9 - Стерилизация и дезинфекция</option>
                                            <option value="10">10 - Медицинская оптика</option>
                                    </select>
                <div class="message__wrapper">
                    <h3 class="product__header">Описание</h3>
                    <div class="buttons__wrapper">
                        <a href="#" id="button-p">Параграф</a>
                        <a href="#" id="button-ul">Список</a>
                        <a href="#" id="button-li">Элемент списка</a>
                        <a href="#" id="button-h">Заголовок</a>
                    </div>
                    <textarea name="descr" class="form-control settings__area" id="control"></textarea>

                </div>
                <button type="submit" class="btn btn-primary">Создать</button>
            </form>
        </div>

    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="../js/jquery-3.6.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="../js/bootbox.min.js"></script><script>
    function addTag(open, close) {
        var control = $('#control')[0];
        var start = control.selectionStart;
        var end = control.selectionEnd;
        if (start != end) {
            var text = $(control).val();
            $(control).val(text.substring(0, start) + open + text.substring(start, end) + close + text.substring(end));
            $(control).focus();
            var sel = end + (open + close).length;
            control.setSelectionRange(sel, sel);
        }
        return false;
    }
    // Параграф
    $('#button-p').click(function() {
        return addTag('<p class="product-below-descr__text">', '</p>');
    });
    $('#button-ul').click(function() {
        return addTag('<ul class="product-below-descr__list descr-list">', '</ul>');
    });
    $('#button-li').click(function() {
        return addTag('<li class="descr-list__item">', '</li>');
    });
    $('#button-h').click(function() {
        return addTag('<h3 class="product-below-descr__header">', '</h3>');
    });
</script>

</html><?php }
}
