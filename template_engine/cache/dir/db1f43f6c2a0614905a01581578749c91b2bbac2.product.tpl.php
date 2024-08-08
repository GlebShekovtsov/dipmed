<?php
/* Smarty version 4.3.0, created on 2023-06-26 03:17:19
  from 'C:\OpenServer\domains\dipmed\template_engine\template\dir\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6498d90f255256_92195793',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d2ee01d945fea2cf163bc07ba4896b4ed30174b' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\product.tpl',
      1 => 1686520515,
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
function content_6498d90f255256_92195793 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Продукт</title>
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
                                    <button class="burger btn-reset">
                <span class="burger__line"></span>
                <span class="burger__line"></span>
                <span class="burger__line"></span>
            </button>
        </div>
    </div>
</header>    <main class="main">
        <!-- Hero about -->
        <section class="main__section about-us__section product__welcome">
            <svg class="about__circle" width="120" height="120" viewBox="0 0 120 120" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <circle opacity="0.3" cx="0.5" cy="0.5" r="119.5" fill="#159EEC" />
            </svg>
            <div class="container about-us__container">
                <div class="about-us__top atop">
                    <a href="/" class="atop__link">Главная / </a>
                    <a href="/product.php" class="atop__link">Продукт</a>
                </div>
                <h2 class="about-us__header">Все категории</h2>
            </div>
            <div class="about-us__below below">
                <div class="below__block"></div>
                <div class="below__block"></div>
                <div class="below__block"></div>
            </div>
        </section>
        <!-- Hero -->


        <!-- Partners -->
        <section class="main__section product__section">
            <div class="container product product__container">
                <ul class="new-product__list new-product">
                    
                        <li class="new-product__item">
                            <div class="new-product__top">
                                <a href="product_page?id=6" class="new-product__photo">
                                    <img src="uploads/ec249e07a5c3785cd0837a47943c329eaefc97b2-961edc4456d44db4a68247079aae38c7_2a9ecf8b191e46e3a94aa0f756230015_resize1.jpg" alt="" class="new-product__image">
                                </a>
                                <div class="new-product__price">
                                    <span class="new-product__price--value">
                                        1440870 ₽
                                    </span>
                                </div>
                                <div class="new-product__name">
                                    <a href="product_page?id=6">Carving plus - стоматологическая установка с верхней подачей</a>
                                </div>
                                <div class="new-product__small">
                                    Производитель:
                                    <a href="">OMS</a>
                                </div>
                                <div class="new-product__small">
                                    Cтрана: Италия
                                </div>
                            </div>
                            <div class="new-product__bottom">
                                <a href="#exampleModal" class="button new-product__button" id="product__link"
                                    data-bs-toggle="modal" data-id="6" data-name="Carving plus - стоматологическая установка с верхней подачей">Запросить
                                    КП</a>
                            </div>
                        </li>

                    
                        <li class="new-product__item">
                            <div class="new-product__top">
                                <a href="product_page?id=5" class="new-product__photo">
                                    <img src="uploads/642e63577664b2e323f9b0d947549f8d3a259411-9944de458e0a4a83a2fcf21fa473ccf5_310620a68e19488997084371ca1601fb_resize1.jpg" alt="" class="new-product__image">
                                </a>
                                <div class="new-product__price">
                                    <span class="new-product__price--value">
                                        559000 ₽
                                    </span>
                                </div>
                                <div class="new-product__name">
                                    <a href="product_page?id=5">Tempo 9 ELX cart - подкатной модуль для стоматологической установки</a>
                                </div>
                                <div class="new-product__small">
                                    Производитель:
                                    <a href="">OMS</a>
                                </div>
                                <div class="new-product__small">
                                    Cтрана: Италия
                                </div>
                            </div>
                            <div class="new-product__bottom">
                                <a href="#exampleModal" class="button new-product__button" id="product__link"
                                    data-bs-toggle="modal" data-id="5" data-name="Tempo 9 ELX cart - подкатной модуль для стоматологической установки">Запросить
                                    КП</a>
                            </div>
                        </li>

                    
                        <li class="new-product__item">
                            <div class="new-product__top">
                                <a href="product_page?id=24" class="new-product__photo">
                                    <img src="uploads/e21c9587148c6b16afc4413096b772e2da4d4d9c-25cf07eb572c11e284ee001e0b8d0418_db4e95a0040d4cc1ab64596e958788d5_resize1.jpg" alt="" class="new-product__image">
                                </a>
                                <div class="new-product__price">
                                    <span class="new-product__price--value">
                                        250000 ₽
                                    </span>
                                </div>
                                <div class="new-product__name">
                                    <a href="product_page?id=24">Автоклав Statim 2000 S кассетный, объём 1,8 л</a>
                                </div>
                                <div class="new-product__small">
                                    Производитель:
                                    <a href="">SciCan</a>
                                </div>
                                <div class="new-product__small">
                                    Cтрана: Канада
                                </div>
                            </div>
                            <div class="new-product__bottom">
                                <a href="#exampleModal" class="button new-product__button" id="product__link"
                                    data-bs-toggle="modal" data-id="24" data-name="Автоклав Statim 2000 S кассетный, объём 1,8 л">Запросить
                                    КП</a>
                            </div>
                        </li>

                    
                    <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Оформление коммерческого предложения
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Закрыть"></button>
                                </div>
                                <form method="POST" id="deal__form">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <input type="hidden" name="product_id" class="form-control" id="product-id"
                                                value="">
                                            <label for="product-name" class="col-form-label">Название товара:</label>
                                            <input type="text" class="form-control" id="product-name" value="" disabled
                                                readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label for="mobile-phone" class="col-form-label">Номер телефона:</label>
                                            <input name="phone_num" type="text" class="form-control" id="mobile-phone">
                                        </div>
                                        <div class="mb-3" id="message-text-container">
                                            <label for="message-text" class="col-form-label">Сообщение:</label>
                                            <textarea name="message" class="form-control" id="message-text"></textarea>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Закрыть</button>
                                            <button type="submit" class="btn btn-primary">Отправить</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </ul>
            </div>
        </section>
        <!-- Partners -->
        <!-- Контакты -->
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
        <!-- Конец контактов -->
    </main>
    <script>
        const id = document.querySelectorAll('.new-product__button');
        id.forEach(function(e) {
            e.addEventListener('click', function() {
                let product_name = $('#product__link').data('name');
                let product_id = $('#product__link').data('id');
                $('#product-name').val(product_name);
                $('#product-id').val(product_id);
            });
        });
        document.getElementById('deal__form').addEventListener('submit', getAjax); //Создаем событие на отправку формы
        //Если форма отправлена
        function getAjax(e) {
            e.preventDefault();

            var xhr = new XMLHttpRequest(); //Инициализируем API


            //Инициализируем запрос
            //Путь до файла обработчика(с расширением если без рутинговой библиотеки)
            xhr.open('POST', '/objects/create-deal', true);
            //Обрабатываем запрос
            xhr.onreadystatechange = function() {
                //Если состояние запроса DONE(4) и код состояния DONE(200) то
                if (xhr.readyState == 4 & xhr.status == 200) {
                    console.log(xhr.responseText);
                    document.getElementById('deal__form').reset() //Очистка формы
                    var myModalEl = document.getElementById('exampleModal');
                    var modal = bootstrap.Modal.getInstance(myModalEl)
                    modal.hide();
                    bootbox.alert({
                        message: "Предложение отправлено",
                        centerVertical: true
                    });
                } else if (xhr.onerror == 404) {
                    console.log('Error');

                }
            }
            xhr.send(new FormData(e.target));
        }

        
    </script>
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
