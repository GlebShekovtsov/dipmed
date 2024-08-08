<?php
/* Smarty version 4.3.0, created on 2023-06-26 03:49:20
  from 'C:\OpenServer\domains\dipmed\template_engine\template\dir\order_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6498e090753d34_69514248',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16854e2735f73aac2434fa518ba34956cf29118a' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\order_view.tpl',
      1 => 1687472714,
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
function content_6498e090753d34_69514248 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Заявки</title>
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
                    Заявки
                </h1>
            </div>
            <div class="right-button-margin">
                <a href="/admin" class="btn btn-default pull-right">На главную</a>
            </div>
            <form role='search' action='/admin/search_orders' class="search__form">
                <div class='input-group col-md-3 pull-left margin-right-1em search__input'>
                    <input type='text' class='form-control' placeholder='Введите название...' name='s' required />
                    <div class='input-group-btn'>
                        <button class='btn btn-primary' type='submit'>
                            <i class='glyphicon glyphicon-search'></i></button>";
                    </div>
                </div>
            </form>
                            <table class="table table-hover table-responsive table-bordered">
                    <tr>
                        <th>Номер заявки</th>
                        <th>ФИО</th>
                        <th>Почта</th>
                        <th>Номер телефона</th>
                        <th>Сообщение</th>
                        <th>Создана</th>
                        <th>Действия</th>
                    </tr>


                                            <tr>
                            <td>2</td>
                            <td>Шеховцов Глеб Евгеньевич</td>
                            <td>sanlpop1234@gmail.com</td>
                            <td>+7(904) 772-72-99</td>
                            <td>Сообщение</td>
                            <td>26.06.2023 03:14</td>
                            <td>
                                <form method="post" class="order-form" id="order-form">
                                    <input type="hidden" name="fio" value="Шеховцов Глеб Евгеньевич">
                                    <input type="hidden" name="telnum" value="+7(904) 772-72-99">
                                    <input type="hidden" name="email" value="sanlpop1234@gmail.com">


                                    <a href='read-order?id=2' class='btn btn-primary left-margin'>
                                        <span class='glyphicon glyphicon-list'></span> Просмотр
                                    </a>

                                    <button class="btn btn-info left-margin">
                                        <span class='glyphicon glyphicon-edit'></span> Добавить клиента
                                    </button>

                                    <a href='delete_order.php?id=2' class='btn btn-danger delete-object'
                                        id="delete-object">
                                        <span class='glyphicon glyphicon-remove'></span> Удалить
                                    </a>
                                </form>

                            </td>
                        <tr>
                                                <tr>
                            <td>1</td>
                            <td>123</td>
                            <td>123</td>
                            <td>+7(123) 123-12-31</td>
                            <td>23123</td>
                            <td>23.06.2023 01:03</td>
                            <td>
                                <form method="post" class="order-form" id="order-form">
                                    <input type="hidden" name="fio" value="123">
                                    <input type="hidden" name="telnum" value="+7(123) 123-12-31">
                                    <input type="hidden" name="email" value="123">


                                    <a href='read-order?id=1' class='btn btn-primary left-margin'>
                                        <span class='glyphicon glyphicon-list'></span> Просмотр
                                    </a>

                                    <button class="btn btn-info left-margin">
                                        <span class='glyphicon glyphicon-edit'></span> Добавить клиента
                                    </button>

                                    <a href='delete_order.php?id=1' class='btn btn-danger delete-object'
                                        id="delete-object">
                                        <span class='glyphicon glyphicon-remove'></span> Удалить
                                    </a>
                                </form>

                            </td>
                        <tr>
                                        </table>
                    </div>

    </main>
</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('order-form').addEventListener('submit', getAjaxOrder);
        //Если форма отправлена
        function getAjaxOrder(e) {
            e.preventDefault();

            var xhr = new XMLHttpRequest(); //Инициализируем API


            //Инициализируем запрос
            //Путь до файла обработчика(с расширением если без рутинговой библиотеки)
            xhr.open('POST', '/objects/create-client', true);
            //Обрабатываем запрос
            xhr.onreadystatechange = function() {
                //Если состояние запроса DONE(4) и код состояния DONE(200) то
                if (xhr.readyState == 4 & xhr.status == 200) {
                    console.log(xhr.responseText);
                    bootbox.alert({
                        message: "Клиент добавлен",
                        centerVertical: true
                    });
                } else if (xhr.onerror == 404) {
                    console.log('Error');

                }
            }
            xhr.send(new FormData(e.target));
        }
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="../js/jquery-3.6.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="../js/bootbox.min.js"></script>
</html><?php }
}
