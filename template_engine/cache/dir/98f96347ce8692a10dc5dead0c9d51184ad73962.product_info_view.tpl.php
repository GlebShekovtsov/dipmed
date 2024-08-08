<?php
/* Smarty version 4.3.0, created on 2023-06-26 03:49:17
  from 'C:\OpenServer\domains\dipmed\template_engine\template\dir\product_info_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6498e08d410cd2_69955008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a006583df9393aeae68e1316db639835cf62507' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\product_info_view.tpl',
      1 => 1687464267,
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
function content_6498e08d410cd2_69955008 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Информация о товаре</title>
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
                    Информация о товарах
                </h1>
            </div>
            <div class="left-button-margin">
                <a href="/admin" class="btn btn-default pull-left">На главную</a>
            </div>
            <div class="right-button-margin">
                <a href="/admin/create-product-info" class="btn btn-default pull-right">Добавить информацию о товаре</a>
            </div>
            <form role='search' action='/admin/search_product_info' class="search__form">
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
                        <th>ID продукта</th>
                        <th>Полное название</th>
                        <th>ID производителя</th>
                        <th>ID категории</th>
                        <th>Страна</th>
                        <th>Цена</th>
                        <th>Описание</th>
                        <th>Действия</th>

                    </tr>


                                            <tr>
                            <td class="setting__column">24</td>
                            <td class="setting__column">Автоклав Statim 2000 S кассетный, объём 1,8 л</td>
                            <td class="setting__column">1</td>
                            <td class="setting__column">3</td>
                            <td class="setting__column">Канада</td>
                            <td class="setting__column">250000 руб.</td>
                            <td class="setting__column">&lt;p class=&quot;product-below-descr__text&quot;&gt;
    Автоклав Statim 2000 - самый быстрый в мире автоклав. Надёжный и компактный
    кассетный стерилизатор S класса для стерилизации стоматологических наконечников,
    инструментов Lasik, эндоскопических и офтальмологических инструментов.
&lt;/p&gt;

&lt;p class=&quot;product-below-descr__text&quot;&gt;
    Автоклав Statim позволяет стерилизовать наконечники всего лишь в течении 9 минут
    (упакованные) и 6 минут (неупакованные) в перерывах между приёмом пациентов, что
    позволяет повысить эффективность работы и обеспечивает значительную экономию
    рабочего времени. Четыре программы стерилизации, выбор одним нажатием кнопки.
    Усовершенствованный микропроцессор контролирует все функции и поддерживает
    оптимальные условия стерилизации.
&lt;/p&gt;

&lt;p class=&quot;product-below-descr__text&quot;&gt;
    Внутренние размеры кассеты: Д 280 мм x Ш 180 мм x В 35 мм, объём кассеты 1,8 л.,
    вместительность резервуара: 4 л (дистиллированная вода) приблизительно 40
    циклов.
    Гарантия 1 год.
&lt;/p&gt;

&lt;h3 class=&quot;product-below-descr__header&quot;&gt;
    Технические характеристики:
&lt;/h3&gt;

&lt;ul class=&quot;product-below-descr__list descr-list&quot;&gt;
    &lt;li class=&quot;descr-list__item&quot;&gt;Напряжение питания 220 В/50Гц,&lt;/li&gt;
    &lt;li class=&quot;descr-list__item&quot;&gt;Максимальная потребляемая мощность 1300 Вт,&lt;/li&gt;
    &lt;li class=&quot;descr-list__item&quot;&gt;Габариты (ш х в х г) 415 х 150 х 480 мм, вес 21 кг.
    &lt;/li&gt;
&lt;/ul&gt;</td>
                            <td class="setting__column">
                                <a href='read-product-info?id=1' class='btn btn-primary left-margin'>
                                    <span class='glyphicon glyphicon-list'></span> Просмотр
                                </a>

                                <a href='update-product-info?id=1' class='btn btn-info left-margin'>
                                    <span class='glyphicon glyphicon-edit'></span> Редактировать
                                </a>

                                <a href='delete_product_info.php?id=1' class='btn btn-danger delete-object'>
                                    <span class='glyphicon glyphicon-remove'></span> Удалить
                                </a>
                            </td>
                        <tr>
                                                <tr>
                            <td class="setting__column">5</td>
                            <td class="setting__column">Tempo 9 ELX cart - подкатной модуль для стоматологической установки</td>
                            <td class="setting__column">2</td>
                            <td class="setting__column">2</td>
                            <td class="setting__column">Италия</td>
                            <td class="setting__column">559000 руб.</td>
                            <td class="setting__column">&lt;h3 class=&quot;product-below-descr__header&quot;&gt;
ТЕMPO 9 ELX CART - мобильный автономный модуль врача на 4 инструмента.
&lt;/h3&gt;

&lt;h3 class=&quot;product-below-descr__header&quot;&gt;
    Технические характеристики:
&lt;/h3&gt;

&lt;ul class=&quot;product-below-descr__list descr-list&quot;&gt;
    &lt;li class=&quot;descr-list__item&quot;&gt;3-функциональный пистолет вода-воздух MINIMATE со съемным автоклавируемым корпусом;&lt;/li&gt;
    &lt;li class=&quot;descr-list__item&quot;&gt;Свободное гнездо;
&lt;/li&gt;
    &lt;li class=&quot;descr-list__item&quot;&gt;Электрический микромотор Bien-Air с подсветкой, раздельной подачей воздуха и воды для спрея, с продувкой (chip blower);
&lt;/li&gt;
 &lt;li class=&quot;descr-list__item&quot;&gt;
Турбинный шланг c разъемом Midwest с подсветкой и функцией продувки без вращения турбины (Chip blower).
&lt;/li&gt;
&lt;li class=&quot;descr-list__item&quot;&gt;Емкость автономной воды с переключением на водопроводную воду.
&lt;/li&gt;
&lt;li class=&quot;descr-list__item&quot;&gt;Напольный блок подводок.
&lt;/li&gt;
&lt;/ul&gt;</td>
                            <td class="setting__column">
                                <a href='read-product-info?id=2' class='btn btn-primary left-margin'>
                                    <span class='glyphicon glyphicon-list'></span> Просмотр
                                </a>

                                <a href='update-product-info?id=2' class='btn btn-info left-margin'>
                                    <span class='glyphicon glyphicon-edit'></span> Редактировать
                                </a>

                                <a href='delete_product_info.php?id=2' class='btn btn-danger delete-object'>
                                    <span class='glyphicon glyphicon-remove'></span> Удалить
                                </a>
                            </td>
                        <tr>
                                                <tr>
                            <td class="setting__column">6</td>
                            <td class="setting__column">Carving plus - стоматологическая установка с верхней подачей</td>
                            <td class="setting__column">2</td>
                            <td class="setting__column">2</td>
                            <td class="setting__column">Италия</td>
                            <td class="setting__column">1440870 руб.</td>
                            <td class="setting__column">&lt;p class=&quot;product-below-descr__text&quot;&gt;
Стоматологическая установка OMS Universal C (Carving) PLUS используется в стоматологических кабинетах и клиниках для осмотра ротовой полости пациентов, лечения зубов и выполнения других стоматологических процедур. Модель оснащена съемной плевательницей с автоклавируемыми канюлями смыва плевательницы и наполнения стакана для надежной гигиенической обработки, бесщеточным микромотором с эндодонтическими функциями, звуковым сигналом при обратном направлении вращения электромотора, бортиком на столике врача, кнопкой вызова ассистента, и электрическим бесколлекторным микромотором BIEN AIR MCX LED со светодиодной подсветкой, раздельной подачей спрея и продувкой.
&lt;/p&gt;</td>
                            <td class="setting__column">
                                <a href='read-product-info?id=6' class='btn btn-primary left-margin'>
                                    <span class='glyphicon glyphicon-list'></span> Просмотр
                                </a>

                                <a href='update-product-info?id=6' class='btn btn-info left-margin'>
                                    <span class='glyphicon glyphicon-edit'></span> Редактировать
                                </a>

                                <a href='delete_product_info.php?id=6' class='btn btn-danger delete-object'>
                                    <span class='glyphicon glyphicon-remove'></span> Удалить
                                </a>
                            </td>
                        <tr>
                                                <tr>
                            <td class="setting__column">8</td>
                            <td class="setting__column">Артикулятор 5032 Asa Dental</td>
                            <td class="setting__column">3</td>
                            <td class="setting__column">4</td>
                            <td class="setting__column">Италия</td>
                            <td class="setting__column">9500 руб.</td>
                            <td class="setting__column">&lt;h3 class=&quot;product-below-descr__header&quot;&gt;5032 -анатомический артикулятор из литого алюминия имеет возможность работы с лицевой дугой, что позволяет располагать модели верхней и нижней челюсти индивидуально.&lt;/h3&gt;
&lt;p class=&quot;product-below-descr__text&quot;&gt;Может использоваться в соответствии с геометрическими законами средних величин (трехпунктный контакт Бонвилла). 
Имеет возможность работы с магнитной фиксацией моделей. 
Автоматический возврат к шарнирной оси с пружинами. 
Оснащен системой анти-шок в случае внезапного падения артикулятора. 
Включает изцизиальный пин, резцовую тарелку 0°, штифт высоты прикуса.&lt;/p&gt;</td>
                            <td class="setting__column">
                                <a href='read-product-info?id=10' class='btn btn-primary left-margin'>
                                    <span class='glyphicon glyphicon-list'></span> Просмотр
                                </a>

                                <a href='update-product-info?id=10' class='btn btn-info left-margin'>
                                    <span class='glyphicon glyphicon-edit'></span> Редактировать
                                </a>

                                <a href='delete_product_info.php?id=10' class='btn btn-danger delete-object'>
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
