<?php
/* Smarty version 4.3.0, created on 2023-06-26 20:20:25
  from 'C:\OpenServer\domains\dipmed\template_engine\template\dir\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6499c8d925cb68_53708374',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5e193bc3a3c831b39cea587ea3ff04810fd3b08' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\index.tpl',
      1 => 1687108134,
      2 => 'file',
    ),
    '65d04d5e43ce32836bded7f8b43cccfecd3a44f1' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\title.tpl',
      1 => 1686666598,
      2 => 'file',
    ),
    '9dcb218cae9c752855bf9c73a76f62e6be97aec0' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\header.tpl',
      1 => 1686178063,
      2 => 'file',
    ),
    '42d6d8d00184bd3a16da2d271390aa24754b4340' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\footer.tpl',
      1 => 1687705711,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_6499c8d925cb68_53708374 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link rel="apple-touch-icon" sizes="180x180" href="../../../favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../../favicon-16x16.png">
    <link rel="manifest" href="../../../site.webmanifest">
    <link rel="mask-icon" href="../../../safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/bootstrap.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/media.css">
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
    <script src="https://captcha-api.yandex.ru/captcha.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/index.js"></script>
    </head>
<body>
    <header class="header">
    <div class="container header__container">
        <div class="header__upper">
            <a href="/" class="header__logo logo">
                <img src="img/new_logo.svg" alt="" class="logo__image">
            </a>
            <address class="header__address address">
                <ul class="address__list">
                    <li class="address__item">
                        <svg class="address__icon" width="41" height="39" viewbox="0 0 41 39" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M24.1459 33.1262C24.7274 32.7905 25.1502 32.2347 25.3211 31.5811C25.492 30.9275 25.3972 30.2296 25.0574 29.6411L23.7761 27.4219C23.4363 26.8333 22.8794 26.4022 22.2279 26.2235C21.5764 26.0447 20.8837 26.1329 20.3021 26.4687C15.9167 29.0006 13.3542 24.5622 12.0729 22.343C10.7917 20.1238 8.22919 15.6854 12.6146 13.1535C13.1962 12.8178 13.6189 12.2619 13.7899 11.6084C13.9608 10.9548 13.8659 10.2569 13.5261 9.66835L12.2449 7.44916C11.905 6.8606 11.3481 6.42952 10.6966 6.25075C10.0451 6.07199 9.35243 6.16019 8.77089 6.49594C3.28908 9.66086 1.28125 13.779 7.6875 24.875C14.0938 35.9709 18.6641 36.2911 24.1459 33.1262Z"
                                stroke="#1F2B6C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M35.8156 23.9621C36.9804 19.4989 36.3314 14.7346 34.0113 10.716C31.6911 6.69743 27.8896 3.75324 23.442 2.53032M29.1022 22.12C29.4492 20.7945 29.5325 19.4104 29.3472 18.0469C29.162 16.6835 28.712 15.3672 28.0227 14.1735C27.3335 12.9798 26.4187 11.9319 25.3305 11.0897C24.2423 10.2476 23.002 9.62766 21.6806 9.26539M22.4248 20.2645C22.6577 19.3714 22.5278 18.4181 22.0635 17.6141C21.5993 16.81 20.8387 16.2208 19.9488 15.9759"
                                stroke="#159EEC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <div class="address__wrapper">
                            <span class="address__span">Номер телефона</span>
                            <a class="address__tele address__info" href="tel:+78442527558">+7 (8442) 52-75-58</a>
                        </div>
                    </li>
                    <li class="address__item">
                        <svg class="address__icon" width="33" height="32" viewbox="0 0 33 32" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.6777 31C24.962 31 31.6777 24.2843 31.6777 16C31.6777 7.71573 24.962 1 16.6777 1C8.39346 1 1.67773 7.71573 1.67773 16C1.67773 24.2843 8.39346 31 16.6777 31Z"
                                stroke="#1F2B6C" stroke-width="2" stroke-linecap="round" />
                            <path d="M21.6777 23.5L16.6777 16V6" stroke="#159EEC" stroke-width="2"
                                stroke-linecap="round" />
                        </svg>

                        <div class="address__wrapper">
                            <span class="address__span">Время работы</span>
                            <p class="address__hours address__info">09:00 - 18:00 По будням</p>
                        </div>
                    </li>
                    <li class="address__item">
                        <svg class="address__icon" width="33" height="39" viewbox="0 0 33 39" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1.35547 15.4C1.35547 29.8 16.3555 37 16.3555 37C16.3555 37 31.3555 29.8 31.3555 15.4C31.3555 7.45 24.643 1 16.3555 1C8.06797 1 1.35547 7.45 1.35547 15.4Z"
                                stroke="#1F2B6C" stroke-width="2" />
                            <path
                                d="M16.3553 20.32C19.2051 20.32 21.5153 18.0098 21.5153 15.16C21.5153 12.3102 19.2051 10 16.3553 10C13.5055 10 11.1953 12.3102 11.1953 15.16C11.1953 18.0098 13.5055 20.32 16.3553 20.32Z"
                                stroke="#159EEC" stroke-width="2" />
                        </svg>
                        <div class="address__wrapper">
                            <span class="address__span">Адрес</span>
                            <p class="address__street address__info">ул. Циолковского, 39</p>
                        </div>
                    </li>
                </ul>
            </address>
        </div>
    </div>
    <div class="header__lower out lower">
        <div class="container lower__container">
            <nav class="header__nav nav">
                <ul class="nav__list">
                    <li class="nav__item"><a href="/" class="nav__link">Главная</a></li>
                    <li class="nav__item nav__product-link">
                        <div class="dropdown">
                            <a href="#" class="nav__link dropdown-toggle" role="button" id="dropdownMenuLink"
                                data-bs-toggle="dropdown" aria-expanded="false">Каталог</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="/category">Все категории</a>
                                </li>
                                                                    <li><a class="dropdown-item" href="/product.php?category=6&name=Зуботехнические материалы">Зуботехнические материалы</a>
                                    </li>
                                                                    <li><a class="dropdown-item" href="/product.php?category=7&name=Зуботехническое оборудование">Зуботехническое оборудование</a>
                                    </li>
                                                                    <li><a class="dropdown-item" href="/product.php?category=1&name=Имплантология">Имплантология</a>
                                    </li>
                                                                    <li><a class="dropdown-item" href="/product.php?category=10&name=Медицинская оптика">Медицинская оптика</a>
                                    </li>
                                                                    <li><a class="dropdown-item" href="/product.php?category=9&name=Стерилизация и дезинфекция">Стерилизация и дезинфекция</a>
                                    </li>
                                                                    <li><a class="dropdown-item" href="/product.php?category=4&name=Стоматологические инструменты">Стоматологические инструменты</a>
                                    </li>
                                                                    <li><a class="dropdown-item" href="/product.php?category=5&name=Стоматологические материалы">Стоматологические материалы</a>
                                    </li>
                                                                    <li><a class="dropdown-item" href="/product.php?category=2&name=Стоматологические установки">Стоматологические установки</a>
                                    </li>
                                                                    <li><a class="dropdown-item" href="/product.php?category=3&name=Стоматологическое оборудование">Стоматологическое оборудование</a>
                                    </li>
                                                                    <li><a class="dropdown-item" href="/product.php?category=8&name=Шовный материал">Шовный материал</a>
                                    </li>
                                                            </ul>
                        </div>
                    </li>
                    <li class="nav__item nav__product-mobile"><a href="/product.php" class="nav__link">Каталог</a></li>
                    <li class="nav__item"><a href="/partners" class="nav__link">Партнеры</a></li>
                    <li class="nav__item"><a href="/news" class="nav__link">Новости</a></li>
                    <li class="nav__item"><a href="/about-us" class="nav__link">О компании</a></li>
                    <li class="nav__item"><a href="/contacts" class="nav__link">Контакты</a></li>
                </ul>
            </nav>
                            <button class="button btn-reset request__btn"><a href="#request">Оставить заявку</a></button>
                        <button class="burger btn-reset">
                <span class="burger__line"></span>
                <span class="burger__line"></span>
                <span class="burger__line"></span>
            </button>
        </div>
    </div>
</header>    <main id="main" class="main">
        <section class="hero hero__section">
            <svg class="hero__circle" width="347" height="135" viewbox="0 0 347 135" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <circle opacity="0.3" cx="-20" cy="-232" r="367" fill="#159EEC" />
            </svg>

            <div class="container hero__container">
                <div class="hero__wrapper">
                    <p class="hero__par">
                        ДипМед
                    </p>
                    <h1 class="hero__header">
                        Позаботьтесь о своём здоровье
                    </h1>
                    <button class="btn-reset button"><a href="/product">Каталог</a></button>
                </div>
                <ul class="hero__list">
                    <li class="hero__item ">
                        <p class="hero__text">Быстро работаем</p>
                        <svg class="hero__icon" width="52" height="52" viewbox="0 0 52 52" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M49.4375 1H2.5625C1.69956 1 1 1.69956 1 2.5625V49.4375C1 50.3004 1.69956 51 2.5625 51H49.4375C50.3004 51 51 50.3004 51 49.4375V2.5625C51 1.69956 50.3004 1 49.4375 1Z"
                                stroke="#BFD2F8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M16 16H6V26H16V16Z" stroke="#BFD2F8" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M25.9995 16H15.9995V26H25.9995V16Z" stroke="#BFD2F8" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M36 16H26V26H36V16Z" stroke="#BFD2F8" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M46.0005 16H36.0005V26H46.0005V16Z" stroke="#BFD2F8" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M46.0005 26H36.0005V36H46.0005V26Z" stroke="#BFD2F8" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M36 26H26V36H36V26Z" stroke="#BFD2F8" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M25.9995 26H15.9995V36H25.9995V26Z" stroke="#BFD2F8" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M16 26H6V36H16V26Z" stroke="#BFD2F8" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M16 36H6V46H16V36Z" stroke="#BFD2F8" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M25.9995 36H15.9995V46H25.9995V36Z" stroke="#BFD2F8" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M36 36H26V46H36V36Z" stroke="#BFD2F8" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M11.0005 1H16.0005V3.5C16.0005 4.88071 14.8784 6 13.5005 6C12.1198 6 11.0005 4.8779 11.0005 3.5V1Z"
                                stroke="#BFD2F8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M36.0005 1H41.0005V3.5C41.0005 4.88071 39.8784 6 38.5005 6C37.1198 6 36.0005 4.8779 36.0005 3.5V1Z"
                                stroke="#BFD2F8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </li>
                    <li class="hero__item">
                        <p class="hero__text">Лучшие партнеры</p>
                        <svg class="hero__icon" width="52" height="46" viewbox="0 0 52 46" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M17.7485 15.4739C17.384 15.6983 16.6974 17.1071 17.008 18.3431C17.47 20.1813 19.1133 20.8987 19.1133 20.8987C19.1133 20.8987 21.6841 24.2932 21.6841 26.2672C21.6841 28.2413 21.6841 29.0082 20.9952 30.6551C20.3062 32.3019 6.78262 34.2761 6.2085 43.9848H25.8921L45.7918 43.9869C45.2177 34.2782 31.6941 32.304 31.0052 30.6572C30.3162 29.0103 30.3162 28.2434 30.3162 26.2693C30.3162 24.2953 32.887 20.9009 32.887 20.9009C32.887 20.9009 34.5303 20.1834 34.9923 18.3452C35.303 17.1092 34.6163 15.7004 34.2518 15.476C35.2261 12.5032 37.172 2.25444 26.1082 1.88506C26.059 1.87807 26.0101 1.87932 25.9614 1.88076C14.8283 2.25232 16.7742 12.5011 17.7485 15.4739Z"
                                stroke="#1F2B6C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M1 37.5162C4.24791 35.2388 8.29741 34.3552 8.6274 33.5664C9.17278 32.2627 9.17278 31.6555 9.17278 30.0928C9.17278 28.5301 7.13764 25.843 7.13764 25.843C7.13764 25.843 5.83677 25.2751 5.47104 23.8199C5.22513 22.8414 5.7687 21.7262 6.05724 21.5485C5.28596 19.1952 3.74557 11.082 12.5588 10.7878C12.5974 10.7867 12.6361 10.7857 12.675 10.7912C14.5757 10.8547 15.9914 11.2865 17.0352 11.9478C17.1712 13.4169 17.4931 14.695 17.7483 15.4738C17.3838 15.6983 16.6972 17.107 17.0078 18.3431C17.4698 20.1813 19.1131 20.8987 19.1131 20.8987C19.1131 20.8987 19.1667 20.9695 19.2584 21.0965C19.2117 21.2646 19.1655 21.4167 19.1218 21.5502C19.4103 21.7279 19.9539 22.8431 19.7079 23.8216C19.3422 25.2767 18.0413 25.8447 18.0413 25.8447C18.0413 25.8447 16.0062 28.5318 16.0062 30.0945C16.0062 31.3973 16.0062 32.036 16.3222 32.9678C12.1215 34.794 6.57168 37.8405 6.20833 43.9848H25.8919L45.7917 43.9869C45.4215 37.7278 39.6693 34.6833 35.4437 32.8688C35.7353 31.9762 35.7353 31.3373 35.7353 30.0691C35.7353 28.5064 33.7001 25.8192 33.7001 25.8192C33.7001 25.8192 32.3993 25.2513 32.0335 23.7961C31.7876 22.8177 32.3312 21.7024 32.6197 21.5248C32.6015 21.4692 32.5829 21.4105 32.564 21.3487C32.7606 21.0676 32.8869 20.9008 32.8869 20.9008C32.8869 20.9008 34.5302 20.1834 34.9922 18.3452C35.3028 17.1092 34.6162 15.7004 34.2517 15.476C34.5171 14.6661 34.8546 13.3162 34.9816 11.7732C36.0056 11.1958 37.3557 10.823 39.1213 10.7641C39.1599 10.7629 39.1986 10.7619 39.2375 10.7675C47.9959 11.0599 46.4555 19.1731 45.6842 21.5264C45.9728 21.7041 46.5164 22.8193 46.2704 23.7978C45.9047 25.253 44.6038 25.8209 44.6038 25.8209C44.6038 25.8209 42.5687 28.508 42.5687 30.0708C42.5687 31.6335 42.5687 32.2406 43.1141 33.5443C43.4529 34.3542 47.7126 35.264 51 37.6796V44.0961L39.0665 44.0948H28.2556C28.2561 44.1033 28.2566 44.1118 28.2571 44.1203L12.504 44.1186H1V37.5162Z"
                                stroke="#1F2B6C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </li>
                    <li class="hero__item">
                        <p class="hero__text">Лучшие цены</p>
                        <svg class="hero__icon" width="52" height="40" viewbox="0 0 52 40" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M51 1.77075H1V31.7708H51V1.77075Z" stroke="#FCFEFE" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M48.9168 31.979H3.0835V35.104H48.9168V31.979Z" stroke="#FCFEFE" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M46.8332 35.104H5.1665V38.229H46.8332V35.104Z" stroke="#FCFEFE" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M25.7487 28.0594C30.1886 28.0594 33.7879 23.1072 33.7879 16.9984C33.7879 10.8897 30.1886 5.9375 25.7487 5.9375C21.3088 5.9375 17.7095 10.8897 17.7095 16.9984C17.7095 23.1072 21.3088 28.0594 25.7487 28.0594Z"
                                stroke="#FCFEFE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M9.98454 28.0594H42.0158C42.0158 25.005 44.4059 22.5289 47.3543 22.5289V11.468C44.4059 11.468 42.0158 8.9919 42.0158 5.9375H9.98454C9.98454 8.9919 7.59439 11.468 4.646 11.468V22.5289C7.59439 22.5289 9.98454 25.005 9.98454 28.0594Z"
                                stroke="#FCFEFE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M12.1826 18.5785C13.0151 18.5785 13.69 17.871 13.69 16.9983C13.69 16.1257 13.0151 15.4182 12.1826 15.4182C11.3502 15.4182 10.6753 16.1257 10.6753 16.9983C10.6753 17.871 11.3502 18.5785 12.1826 18.5785Z"
                                stroke="#FCFEFE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M38.8125 18.5785C39.645 18.5785 40.3199 17.871 40.3199 16.9983C40.3199 16.1257 39.645 15.4182 38.8125 15.4182C37.98 15.4182 37.3052 16.1257 37.3052 16.9983C37.3052 17.871 37.98 18.5785 38.8125 18.5785Z"
                                stroke="#FCFEFE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </li>
                </ul>
            </div>
        </section>
        <section class="main__section about">
            <div class="container about__container">
                <div class="about__wrapper info">
                    <span class="info__welcome">
                        Добро Пожаловать
                    </span>
                    <h2 class="info__header">
                        Компания ДипМед
                    </h2>
                    <p class="info__descr">
                        Мы работаем на волгоградском рынке c 2016 года. Сотрудничество с надежными, профессиональными
                        партнерами позволяет нашей компании предлагать Вам качественную продукцию по выгодным ценам.
                    </p>
                    <a href="/about-us" class="info__more">
                        <span>Узнать больше</span>
                        <svg width="13" height="12" viewbox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.21795 11L11.8333 6M11.8333 6L7.21795 1M11.8333 6H1" stroke="#1F2B6C"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
                <!-- Блок для картинки -->
                <div class="about__img-wrapper">
                    <svg class="about__circle" width="120" height="120" viewBox="0 0 120 120" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle opacity="0.3" cx="0.5" cy="0.5" r="119.5" fill="#159EEC" />
                    </svg>
                    <svg class="about__below" width="992" height="8" viewBox="0 0 1410 8" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="222" width="950" height="8" fill="#1F2B6C" />
                        <rect x="830" width="980" height="8" fill="#159EEC" />
                        <rect width="900" height="8" fill="#BFD2F8" />
                    </svg>
                </div>
                <!-- Конец блока  -->
            </div>
        </section>
        <section class="main__section brands">
            <div class="container brands__container">
                <span class="brands__welcome">
                    Сотрудничаем с лучшими компаниями
                </span>
                <h2 class="brands__header">Наши партнеры</h2>
                <ul class="brands__list">
                                            <a class="brands__link" href="https://botissplus.ru/" target="_blank">
                            <li class="brands__item">
                                <img class="brands__img" src="uploads/eb6aac33835244d42c89aaf39c1ffe0f6a19762e-botiss-PhotoRoom.png-PhotoRoom.png" alt="">
                            </li>
                        </a>
                                            <a class="brands__link" href="https://www.pharma-dental.ru/" target="_blank">
                            <li class="brands__item">
                                <img class="brands__img" src="uploads/6481a05516175b873e4233bf72f74b264025a206-pharmadental.png" alt="">
                            </li>
                        </a>
                                            <a class="brands__link" href="https://stomatorg.ru/company/index.php" target="_blank">
                            <li class="brands__item">
                                <img class="brands__img" src="uploads/9bb13eeff51b137fb5d2e579510b093ffeab8f44-stomatorg.png" alt="">
                            </li>
                        </a>
                                            <a class="brands__link" href="https://telos-healthcare.ru/index.php/o-kompanii" target="_blank">
                            <li class="brands__item">
                                <img class="brands__img" src="uploads/3ca785a10526042d8554871891c51dbf81e0633b-head_rus_12.jpg" alt="">
                            </li>
                        </a>
                                            <a class="brands__link" href="https://almadez.ru/" target="_blank">
                            <li class="brands__item">
                                <img class="brands__img" src="uploads/502fb0540e7e50210bb61902a6e7affb2477765b-35fb46kmvpxfz5pmrxvynw28xudud8j7.png" alt="">
                            </li>
                        </a>
                                            <a class="brands__link" href="https://www.inno-implant.ru/" target="_blank">
                            <li class="brands__item">
                                <img class="brands__img" src="uploads/a882172404b4efde208e226bdebd890f4467a01d-inno-logo.svg" alt="">
                            </li>
                        </a>
                                            <a class="brands__link" href="https://www.medtest.ltd/" target="_blank">
                            <li class="brands__item">
                                <img class="brands__img" src="uploads/medtest.svg" alt="">
                            </li>
                        </a>
                                            <a class="brands__link" href="https://stomus.ru/" target="_blank">
                            <li class="brands__item">
                                <img class="brands__img" src="uploads/5866158953352ac2697e0355df80b23bfcb834c4-7.png" alt="">
                            </li>
                        </a>
                                    </ul>
            </div>
        </section>

        <section class="main__section request__section" id="request">
            <div class="container request__container">
                <div class="request__wrapper">
                    <div class="request__left">
                        <h2 class="request__header">
                            Оставить заявку на покупку
                        </h2>
                        <p class="request__descr">
                            Отправьте нам сообщение, и мы с вами свяжемся. Все поля обязательны для заполнения
                        </p>
                    </div>
                    <div class="request__right">
                        <form method="post" action="/" id="ajax-form" class="request__form-index form">
                            <div class="form__upper">
                                <input type="text" name="fio" class="form__input" placeholder="ФИО" required>
                                <input type="text" name="city" class="form__input" placeholder="Город">
                                <input type="text" name="email" class="form__input email" placeholder="Email">
                                <input type="text" data-phone-pattern name="telnum" class="form__input"
                                    placeholder="+7(___) ___-__-__" required>
                            </div>
                            <div class="form__down-index">
                                <textarea class="form__textarea-index" name="message" placeholder="Сообщение"
                                    required></textarea>
                                <button class="btn-reset button ajax_btn form__button">Отправить</button>
                            </div>
                                                    </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="main__section product__section">
            <div class="container product__container">
                <p class="product__subheader">
                    Ознакомьтесь с
                </p>
                <h2 class="product__header">
                    Предложениями
                </h2>
                <div class="swiper--main">
                    <ul class="product__list swiper-wrapper">
                                                    <li class="product__item product-cart swiper-slide">
                                <img src="uploads/cfc368c1fd8206fe5a02eb30adff221f4452bcda-e2ebe0jmh5utdfy9ur3rorbbo3ezklk5.jpg" alt="" class="product-cart__image">
                                <div class="product__upper">
                                    <h3 class="product-cart__subheader">
                                         Дезcредство с моющим эффектом
                                    </h3>
                                    <p class="product-cart__header">
                                        Стерилизация и дезинфекция

                                    </p>
                                </div>
                                <div class="product__below">
                                    <span class="product-cart__more">
                                        <a href="https://almadez.ru/dez-sredstva/concentrate/almadez-5l/#desc">Подробнее</a>
                                    </span>
                                </div>
                            </li>
                                                    <li class="product__item product-cart swiper-slide">
                                <img src="uploads/ed192e3c938bb6e5b234e6c52aa37b22a3115672-38a6c4fb8d7d46cd8b49eeed351a43b0_b6a0921639d044838935bb76b008cccb_resize1.jpg" alt="" class="product-cart__image">
                                <div class="product__upper">
                                    <h3 class="product-cart__subheader">
                                        Бинокуляры Heine HR 2.5х
                                    </h3>
                                    <p class="product-cart__header">
                                        Медицинская оптика

                                    </p>
                                </div>
                                <div class="product__below">
                                    <span class="product-cart__more">
                                        <a href="https://shop.stomatorg.ru/catalog/binokulyary/binokulyary_heine_hr_2_5kh_oprava_s_frame_113311/">Подробнее</a>
                                    </span>
                                </div>
                            </li>
                                                    <li class="product__item product-cart swiper-slide">
                                <img src="uploads/642e63577664b2e323f9b0d947549f8d3a259411-9944de458e0a4a83a2fcf21fa473ccf5_310620a68e19488997084371ca1601fb_resize1.jpg" alt="" class="product-cart__image">
                                <div class="product__upper">
                                    <h3 class="product-cart__subheader">
                                        Tempo 9 ELX cart
                                    </h3>
                                    <p class="product-cart__header">
                                        Стоматологические установки

                                    </p>
                                </div>
                                <div class="product__below">
                                    <span class="product-cart__more">
                                        <a href="https://shop.stomatorg.ru/catalog/oms/ustanovka_stomatologicheskaya_tempo_9_elx_kart_17_1502_podkatnoy_modul_dlya_kp/">Подробнее</a>
                                    </span>
                                </div>
                            </li>
                                                    <li class="product__item product-cart swiper-slide">
                                <img src="uploads/5cd76513663dec7f00afcd64d874077d2e94cac3-52de750a572c11e284ee001e0b8d0418_824f1f6d722241b4b332a917ed0c6e4f_resize1.jpg" alt="" class="product-cart__image">
                                <div class="product__upper">
                                    <h3 class="product-cart__subheader">
                                        Фрезерный станок A3 IRON
                                    </h3>
                                    <p class="product-cart__header">
                                        Зуботехническое оборудование

                                    </p>
                                </div>
                                <div class="product__below">
                                    <span class="product-cart__more">
                                        <a href="https://shop.stomatorg.ru/catalog/frezernye_stanki_i_parallelometry_/frezernyy_stanok_a3_iron_90602/">Подробнее</a>
                                    </span>
                                </div>
                            </li>
                                                    <li class="product__item product-cart swiper-slide">
                                <img src="uploads/2a263e547eda1d1836bbccba93f402f7991f8ef3-cdb9326a3da514d15e67028a13c1e98e.jpg" alt="" class="product-cart__image">
                                <div class="product__upper">
                                    <h3 class="product-cart__subheader">
                                        Имплантат Submerged без имплантовода
                                    </h3>
                                    <p class="product-cart__header">
                                        Имплантология

                                    </p>
                                </div>
                                <div class="product__below">
                                    <span class="product-cart__more">
                                        <a href="https://www.inno-implant.ru/catalog/cowellmedi_implantaty/implantaty/implantat-submerged-bez-implantovoda/">Подробнее</a>
                                    </span>
                                </div>
                            </li>
                                                    <li class="product__item product-cart swiper-slide">
                                <img src="uploads/e422ed9d32bba73fda2573954bbb615722282b12-f897cee15eb25996ca118de3f96156f3.jpg" alt="" class="product-cart__image">
                                <div class="product__upper">
                                    <h3 class="product-cart__subheader">
                                        Имплантат Submerged с имплантоводом
                                    </h3>
                                    <p class="product-cart__header">
                                        Имплантология

                                    </p>
                                </div>
                                <div class="product__below">
                                    <span class="product-cart__more">
                                        <a href="https://www.inno-implant.ru/catalog/cowellmedi_implantaty/implantaty/implantat-submerged-s-implantovodom/">Подробнее</a>
                                    </span>
                                </div>
                            </li>
                                                    <li class="product__item product-cart swiper-slide">
                                <img src="uploads/ec249e07a5c3785cd0837a47943c329eaefc97b2-961edc4456d44db4a68247079aae38c7_2a9ecf8b191e46e3a94aa0f756230015_resize1.jpg" alt="" class="product-cart__image">
                                <div class="product__upper">
                                    <h3 class="product-cart__subheader">
                                        Carving plus
                                    </h3>
                                    <p class="product-cart__header">
                                        Стоматологические установки


                                    </p>
                                </div>
                                <div class="product__below">
                                    <span class="product-cart__more">
                                        <a href="https://shop.stomatorg.ru/catalog/oms/ustanovka_stomatologicheskaya_universal_carving_plus_tsvet_na_vybor_116609/">Подробнее</a>
                                    </span>
                                </div>
                            </li>
                                                    <li class="product__item product-cart swiper-slide">
                                <img src="uploads/8907c0d75f5f7628dd6c15eecd25dc7506c8f4d9-693db3b3572c11e284ee001e0b8d0418_ab72f443cb55438b85dd82258679adee_resize1.jpg" alt="" class="product-cart__image">
                                <div class="product__upper">
                                    <h3 class="product-cart__subheader">
                                        Смеситель вакуумный FOX.88/1.0.
                                    </h3>
                                    <p class="product-cart__header">
                                        Зуботехническое оборудование

                                    </p>
                                </div>
                                <div class="product__below">
                                    <span class="product-cart__more">
                                        <a href="https://shop.stomatorg.ru/catalog/vakuumnye_smesiteli/smesitel_vakuumnyy_s_vakuumnym_nasosom_fox_88_1_0/">Подробнее</a>
                                    </span>
                                </div>
                            </li>
                                            </ul>
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                </div>
            </div>
        </section>
        <section class="main__section news__section">
            <div class="container news__container">
                <p class="news__subheader">
                    Следите за нашими обновлениями
                </p>
                <h2 class="news__header">Новости</h2>

                <ul class="news__list">

                                            <li class="news__item">
                            <article class="news__article article">
                                <img src="uploads/63d9f688fd98538f32da03cf271dad52f4a0c455-_uploads_63d9f688fd98538f32da03cf271dad52f4a0c455-news-placeholder-c9151d7daa43a7dd0777b24d88d29110233c7a8ec955185e02c43534abf36172.png" alt="" class="article__img">
                                <div class="article__info-wrapper">
                                    <time datetime="2022-11-30" class="article__time">
                                        21.12.2022г
                                    </time>
                                    <h4 class="article__header">Новостной заголовок 1</h4>
                                    <div class="article__sub-wrapper asub">
                                        <div class="asub__info-wrapper ainfo">
                                            <svg class="ainfo__icon" width="18" height="13" viewBox="0 0 18 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8.98755 1C6.2041 1 3.34886 2.611 1.1011 5.83301C1.03694 5.92599 1.00178 6.0359 1.00007 6.14886C0.99835 6.26181 1.03015 6.37274 1.09146 6.46763C2.81853 9.17108 5.63555 11.2853 8.98755 11.2853C12.3031 11.2853 15.178 9.16465 16.9083 6.45513C16.9682 6.3621 17 6.25381 17 6.14318C17 6.03255 16.9682 5.92425 16.9083 5.83122C15.1741 3.15277 12.2781 1 8.98755 1Z"
                                                    stroke="#526AE9" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M8.9996 8.99969C10.5775 8.99969 11.8566 7.72056 11.8566 6.14267C11.8566 4.56478 10.5775 3.28564 8.9996 3.28564C7.42171 3.28564 6.14258 4.56478 6.14258 6.14267C6.14258 7.72056 7.42171 8.99969 8.9996 8.99969Z"
                                                    stroke="#526AE9" stroke-width="1.5" stroke-miterlimit="10" />
                                            </svg>
                                            <span class="ainfo__span">0</span>
                                        </div>
                                        <a href="read-news?id=6" class="ainfo__link">Подробнее</a>
                                    </div>
                                </div>
                            </article>
                        </li>
                                            <li class="news__item">
                            <article class="news__article article">
                                <img src="uploads/63d9f688fd98538f32da03cf271dad52f4a0c455-news-placeholder-c9151d7daa43a7dd0777b24d88d29110233c7a8ec955185e02c43534abf36172.png" alt="" class="article__img">
                                <div class="article__info-wrapper">
                                    <time datetime="2022-11-30" class="article__time">
                                        21.12.2022г
                                    </time>
                                    <h4 class="article__header">Новостной заголовок</h4>
                                    <div class="article__sub-wrapper asub">
                                        <div class="asub__info-wrapper ainfo">
                                            <svg class="ainfo__icon" width="18" height="13" viewBox="0 0 18 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8.98755 1C6.2041 1 3.34886 2.611 1.1011 5.83301C1.03694 5.92599 1.00178 6.0359 1.00007 6.14886C0.99835 6.26181 1.03015 6.37274 1.09146 6.46763C2.81853 9.17108 5.63555 11.2853 8.98755 11.2853C12.3031 11.2853 15.178 9.16465 16.9083 6.45513C16.9682 6.3621 17 6.25381 17 6.14318C17 6.03255 16.9682 5.92425 16.9083 5.83122C15.1741 3.15277 12.2781 1 8.98755 1Z"
                                                    stroke="#526AE9" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M8.9996 8.99969C10.5775 8.99969 11.8566 7.72056 11.8566 6.14267C11.8566 4.56478 10.5775 3.28564 8.9996 3.28564C7.42171 3.28564 6.14258 4.56478 6.14258 6.14267C6.14258 7.72056 7.42171 8.99969 8.9996 8.99969Z"
                                                    stroke="#526AE9" stroke-width="1.5" stroke-miterlimit="10" />
                                            </svg>
                                            <span class="ainfo__span">0</span>
                                        </div>
                                        <a href="read-news?id=7" class="ainfo__link">Подробнее</a>
                                    </div>
                                </div>
                            </article>
                        </li>
                                            <li class="news__item">
                            <article class="news__article article">
                                <img src="uploads/63d9f688fd98538f32da03cf271dad52f4a0c455-news-placeholder-c9151d7daa43a7dd0777b24d88d29110233c7a8ec955185e02c43534abf36172.png" alt="" class="article__img">
                                <div class="article__info-wrapper">
                                    <time datetime="2022-11-30" class="article__time">
                                        21.12.2022г
                                    </time>
                                    <h4 class="article__header">Новостной заголовок</h4>
                                    <div class="article__sub-wrapper asub">
                                        <div class="asub__info-wrapper ainfo">
                                            <svg class="ainfo__icon" width="18" height="13" viewBox="0 0 18 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8.98755 1C6.2041 1 3.34886 2.611 1.1011 5.83301C1.03694 5.92599 1.00178 6.0359 1.00007 6.14886C0.99835 6.26181 1.03015 6.37274 1.09146 6.46763C2.81853 9.17108 5.63555 11.2853 8.98755 11.2853C12.3031 11.2853 15.178 9.16465 16.9083 6.45513C16.9682 6.3621 17 6.25381 17 6.14318C17 6.03255 16.9682 5.92425 16.9083 5.83122C15.1741 3.15277 12.2781 1 8.98755 1Z"
                                                    stroke="#526AE9" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M8.9996 8.99969C10.5775 8.99969 11.8566 7.72056 11.8566 6.14267C11.8566 4.56478 10.5775 3.28564 8.9996 3.28564C7.42171 3.28564 6.14258 4.56478 6.14258 6.14267C6.14258 7.72056 7.42171 8.99969 8.9996 8.99969Z"
                                                    stroke="#526AE9" stroke-width="1.5" stroke-miterlimit="10" />
                                            </svg>
                                            <span class="ainfo__span">0</span>
                                        </div>
                                        <a href="read-news?id=8" class="ainfo__link">Подробнее</a>
                                    </div>
                                </div>
                            </article>
                        </li>
                                            <li class="news__item">
                            <article class="news__article article">
                                <img src="uploads/63d9f688fd98538f32da03cf271dad52f4a0c455-news-placeholder-c9151d7daa43a7dd0777b24d88d29110233c7a8ec955185e02c43534abf36172.png" alt="" class="article__img">
                                <div class="article__info-wrapper">
                                    <time datetime="2022-11-30" class="article__time">
                                        21.12.2022г
                                    </time>
                                    <h4 class="article__header">Новостной заголовок</h4>
                                    <div class="article__sub-wrapper asub">
                                        <div class="asub__info-wrapper ainfo">
                                            <svg class="ainfo__icon" width="18" height="13" viewBox="0 0 18 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8.98755 1C6.2041 1 3.34886 2.611 1.1011 5.83301C1.03694 5.92599 1.00178 6.0359 1.00007 6.14886C0.99835 6.26181 1.03015 6.37274 1.09146 6.46763C2.81853 9.17108 5.63555 11.2853 8.98755 11.2853C12.3031 11.2853 15.178 9.16465 16.9083 6.45513C16.9682 6.3621 17 6.25381 17 6.14318C17 6.03255 16.9682 5.92425 16.9083 5.83122C15.1741 3.15277 12.2781 1 8.98755 1Z"
                                                    stroke="#526AE9" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M8.9996 8.99969C10.5775 8.99969 11.8566 7.72056 11.8566 6.14267C11.8566 4.56478 10.5775 3.28564 8.9996 3.28564C7.42171 3.28564 6.14258 4.56478 6.14258 6.14267C6.14258 7.72056 7.42171 8.99969 8.9996 8.99969Z"
                                                    stroke="#526AE9" stroke-width="1.5" stroke-miterlimit="10" />
                                            </svg>
                                            <span class="ainfo__span">0</span>
                                        </div>
                                        <a href="read-news?id=9" class="ainfo__link">Подробнее</a>
                                    </div>
                                </div>
                            </article>
                        </li>
                                    </ul>
            </div>
        </section>
        <section class="main__section contacts__section">
            <div class="container contacts__section">
                <p class="contacts__subheader">
                    Связаться с нами
                </p>
                <h2 class="contacts__header">
                    Контакты
                </h2>
                <ul class="contacts__list">
                    <li class="contacts__item">
                        <address class="contacts__address">
                            <svg class="contacts__icon" width="41" height="39" viewBox="0 0 41 39" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M24.1459 33.1262C24.7274 32.7905 25.1502 32.2347 25.3211 31.5811C25.492 30.9275 25.3972 30.2296 25.0574 29.6411L23.7761 27.4219C23.4363 26.8333 22.8794 26.4022 22.2279 26.2235C21.5764 26.0447 20.8837 26.1329 20.3021 26.4687C15.9167 29.0006 13.3542 24.5622 12.0729 22.343C10.7917 20.1238 8.22919 15.6854 12.6146 13.1535C13.1962 12.8178 13.6189 12.2619 13.7899 11.6084C13.9608 10.9548 13.8659 10.2569 13.5261 9.66835L12.2449 7.44916C11.905 6.8606 11.3481 6.42952 10.6966 6.25075C10.0451 6.07199 9.35243 6.16019 8.77089 6.49594C3.28908 9.66086 1.28125 13.779 7.6875 24.875C14.0938 35.9709 18.6641 36.2911 24.1459 33.1262Z"
                                    stroke="#1F2B6C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M35.8156 23.9621C36.9804 19.4989 36.3314 14.7346 34.0113 10.716C31.6911 6.69743 27.8896 3.75324 23.442 2.53032M29.1022 22.12C29.4492 20.7945 29.5325 19.4104 29.3472 18.0469C29.162 16.6835 28.712 15.3672 28.0227 14.1735C27.3335 12.9798 26.4187 11.9319 25.3305 11.0897C24.2423 10.2476 23.002 9.62766 21.6806 9.26539M22.4248 20.2645C22.6577 19.3714 22.5278 18.4181 22.0635 17.6141C21.5993 16.81 20.8387 16.2208 19.9488 15.9759"
                                    stroke="#1F2B6C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <h4 class="contacts__block-header">Вызов</h4>
                            <a class="contacts__tel" href="tel:+78442527558">+7 (8442) 52-75-58</a>
                            <a class="contacts__tel" href="tel:+78442527558">+7 (8442) 52-75-58</a>
                        </address>
                    </li>
                    <li class="contacts__item">
                        <address class="contacts__address">
                            <svg class="contacts__icon" width="32" height="39" viewBox="0 0 32 39" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1 15.4C1 29.8 16 37 16 37C16 37 31 29.8 31 15.4C31 7.45 24.2875 1 16 1C7.7125 1 1 7.45 1 15.4Z"
                                    stroke="#BFD2F8" stroke-width="2" />
                                <path
                                    d="M15.9998 20.32C18.8496 20.32 21.1598 18.0098 21.1598 15.16C21.1598 12.3102 18.8496 10 15.9998 10C13.1501 10 10.8398 12.3102 10.8398 15.16C10.8398 18.0098 13.1501 20.32 15.9998 20.32Z"
                                    stroke="#BFD2F8" stroke-width="2" />
                            </svg>
                            <h4 class="contacts__block-lheader">Место</h4>
                            <p class="contacts__location">
                                г. Волгоград, ул. Циолковского, 39
                            </p>
                        </address>
                    </li>
                    <li class="contacts__item">
                        <address class="contacts__address">
                            <svg class="contacts__icon" width="39" height="32" viewBox="0 0 39 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.7998 1H37.1998V30.5H1.7998V1Z" stroke="#1F2B6C" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M37.1998 6.8999L19.4998 18.6999L1.7998 6.8999" stroke="#1F2B6C"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <h4 class="contacts__block-header">Почта</h4>
                            <a class="contacts__mail" href="mailto:dipmed@mail.ru">dipmed@mail.ru</a>
                            <a class="contacts__mail" href="mailto:dipmed@mail.ru">dipmed@mail.ru</a>
                        </address>
                    </li>
                    <li class="contacts__item">
                        <address class="contacts__address">
                            <svg class="contacts__icon" width="33" height="32" viewBox="0 0 33 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.6777 31C24.962 31 31.6777 24.2843 31.6777 16C31.6777 7.71573 24.962 1 16.6777 1C8.39346 1 1.67773 7.71573 1.67773 16C1.67773 24.2843 8.39346 31 16.6777 31Z"
                                    stroke="#1F2B6C" stroke-width="2" stroke-linecap="round" />
                                <path d="M21.6777 23.5L16.6777 16V6" stroke="#1F2B6C" stroke-width="2"
                                    stroke-linecap="round" />
                            </svg>
                            <h4 class="contacts__block-header">РЕЖИМ РАБОТЫ</h4>
                            <p class="contacts__working">
                                По будням
                            </p>
                            <p class="contacts__working">
                                С 9:00 до 18:00
                            </p>
                        </address>
                    </li>
                </ul>
            </div>
        </section>
    </main>
    <div class="btn-up btn-up_hide"></div>
<footer class="footer">
    <div class="container footer__container">
        <div class="footer__wrapper">
            <div class="footer__left left footer__block">
                <a href="index.html" class="footer__logo logo">
                    ДипМед
                </a>
                <p class="left__descr">
                    Позаботьтесь о своём здоровье
                </p>
            </div>
            <div class="footer__center center footer__block">
                <h3 class="center__header">
                    Важные ссылки
                </h3>
                <nav class="center__nav nav">
                    <ul class="center__list">
                        <li class="center__item"><a href="/contacts" class="center__link">Контакты</a></li>
                        <li class="center__item"><a href="/partners" class="center__link">Партнеры</a></li>
                        <li class="center__item"><a href="/news" class="center__link">Новости</a></li>
                        <li class="center__item"><a href="/about-us" class="center__link">О компании</a></li>
                    </ul>
                </nav>
            </div>
            <div class="footer__right right footer__block">
                <h3 class="right__header">
                    Связаться с нами
                </h3>
                <address class="right__address">
                    <a class="right__tele right__info" href="tel:+78442527558">Номер телефона: +7 (8442)
                        52-75-58</a>
                    <a class="right__email right__info" href="mailto:dipmed@mail.ru">E-mail:
                        dipmed@mail.ru</a>
                    <p class="right__descr right__info">Адрес: г. Волгоград, ул. Циолковского, 39</p>
                </address>
            </div>
        </div>
        <div class="footer__line">
        </div>

        <div class="footer__bottom-wrapper">
            <div class="footer__copyright">
                &copy;&nbsp;2022. ООО &laquo;ДипМед&raquo;. Все права защищены.
            </div>
            <div class="footer__lab lab">
                <a href="https://xn--80achaerxf0a.xn--p1ai/" class="lab__link">Сайт лаборатории</a>
            </div>
        </div>
    </div>
    <script>
        window.onscroll = function() {
            scrollFunction();
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("scrollToTopBtn").style.display = "block";
            } else {
                document.getElementById("scrollToTopBtn").style.display = "none";
            }
        }

        function scrollToTop() {
            document.body.scrollTop = 0; // Для Safari
            document.documentElement.scrollTop = 0; // Для Chrome, Firefox, IE и Opera
        }
    </script>
    <button id="scrollToTopBtn" onclick="scrollToTop()">Наверх</button>
</footer>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="js/jquery-3.6.1.min.js"></script>
<script src="js/bootbox.min.js"></script>
<script src="js/index.js"></script>
<script src="js/burger.js"></script>
<script src="js/swiper_init.js"></script>
<script>
    document.getElementById('ajax-form').addEventListener('submit', getAjax); //Создаем событие на отправку формы
    //Если форма отправлена
    function getAjax(e) {
        e.preventDefault();

        var xhr = new XMLHttpRequest(); //Инициализируем API


        //Инициализируем запрос
        //Путь до файла обработчика(с расширением если без рутинговой библиотеки)
        xhr.open('POST', '/objects/create-order', true);
        //Обрабатываем запрос
        xhr.onreadystatechange = function() {
            //Если состояние запроса DONE(4) и код состояния DONE(200) то
            if (xhr.readyState == 4 & xhr.status == 200) {
                console.log(xhr.responseText);
                document.getElementById('ajax-form').reset() //Очистка формы
                bootbox.alert({
                    message: "Заявка успешно отправлена",
                    centerVertical: true
                });
            } else if (xhr.onerror == 404) {
                console.log('Error');

            }
        }
        xhr.send(new FormData(e.target));
    }
</script></body>

</html><?php }
}
