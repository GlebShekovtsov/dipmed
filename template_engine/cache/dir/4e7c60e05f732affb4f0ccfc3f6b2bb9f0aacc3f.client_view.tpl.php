<?php
/* Smarty version 4.3.0, created on 2023-06-12 02:32:51
  from 'C:\OpenServer\domains\dipmed\template_engine\template\dir\client_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_648659a38545f9_92265133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c84b933b26bb43c549e7e09d02af8adc75fa8a3' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\client_view.tpl',
      1 => 1671404620,
      2 => 'file',
    ),
    '3d1116ab5f9566ef3f0ac5ff6da2d6b927115b91' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\title_admin.tpl',
      1 => 1672080002,
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
function content_648659a38545f9_92265133 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Клиенты</title>
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
                    Клиенты
                </h1>
            </div>
            <div class="right-button-margin">
                <a href="/admin" class="btn btn-default pull-right">На главную</a>
            </div>
                            <table class="table table-hover table-responsive table-bordered">
                    <tr>
                        <th>ФИО</th>
                        <th>Почта</th>
                        <th>Номер телефона</th>
                        <th>Клиент с</th>
                        <th>Действия</th>
                    </tr>

                                            <tr>
                            <td>Шеховцов Глеб Евгеньевич</td>
                            <td>sanlpop1234@gmail.com</td>
                            <td>+7(904) 772-72-99</td>
                            <td>20.12.2022</td>
                            <td>
                                <a href='read-client?id=3' class='btn btn-primary left-margin'>
                                    <span class='glyphicon glyphicon-list'></span> Просмотр
                                </a>

                                <a href='update-client?id=3' class='btn btn-info left-margin'>
                                    <span class='glyphicon glyphicon-edit'></span> Редактировать
                                </a>
                                <a href='delete_client.php?id=3' class='btn btn-danger delete-object'
                                    id="delete-object">
                                    <span class='glyphicon glyphicon-remove'></span> Удалить
                                </a>
                            </td>
                        <tr>
                                                <tr>
                            <td>Жмышенко Валерий Альбертович</td>
                            <td>jmix@mail.ru</td>
                            <td>+7(904) 712-31-32</td>
                            <td>17.12.2022</td>
                            <td>
                                <a href='read-client?id=1' class='btn btn-primary left-margin'>
                                    <span class='glyphicon glyphicon-list'></span> Просмотр
                                </a>

                                <a href='update-client?id=1' class='btn btn-info left-margin'>
                                    <span class='glyphicon glyphicon-edit'></span> Редактировать
                                </a>
                                <a href='delete_client.php?id=1' class='btn btn-danger delete-object'
                                    id="delete-object">
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
