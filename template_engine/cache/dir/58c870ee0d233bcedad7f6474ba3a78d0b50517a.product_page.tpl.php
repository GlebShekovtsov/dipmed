<?php
/* Smarty version 4.3.0, created on 2023-06-04 01:20:12
  from 'C:\OpenServer\domains\dipmed\template_engine\template\dir\product_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_647bbc9c237396_26438266',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb1b127776a8258c0f3b457781c5ec0edac8aa6c' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\product_page.tpl',
      1 => 1685830809,
      2 => 'file',
    ),
    '65d04d5e43ce32836bded7f8b43cccfecd3a44f1' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\title.tpl',
      1 => 1681223323,
      2 => 'file',
    ),
    '9dcb218cae9c752855bf9c73a76f62e6be97aec0' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\header.tpl',
      1 => 1681234141,
      2 => 'file',
    ),
    '42d6d8d00184bd3a16da2d271390aa24754b4340' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\footer.tpl',
      1 => 1681222598,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_647bbc9c237396_26438266 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страница товара</title>
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/bootstrap.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/media.css">
    <script src="https://captcha-api.yandex.ru/captcha.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/index.js"></script>
    </head>
<body>
    <header class="header">
    <div class="container header__container">
        <div class="header__upper">
            <a href="index.html" class="header__logo logo">
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
                                <li><a class="dropdown-item" href="/product.php">Все категории</a>
                                </li>
                                                                    <li><a class="dropdown-item" href="/product.php?category=Зуботехнические материалы">Зуботехнические материалы</a>
                                    </li>
                                                                    <li><a class="dropdown-item" href="/product.php?category=Зуботехническое оборудование">Зуботехническое оборудование</a>
                                    </li>
                                                                    <li><a class="dropdown-item" href="/product.php?category=Имплантология">Имплантология</a>
                                    </li>
                                                                    <li><a class="dropdown-item" href="/product.php?category=Медицинская оптика">Медицинская оптика</a>
                                    </li>
                                                                    <li><a class="dropdown-item" href="/product.php?category=Стерилизация и дезинфекция">Стерилизация и дезинфекция</a>
                                    </li>
                                                                    <li><a class="dropdown-item" href="/product.php?category=Стоматологические инструменты для терапии, хирургии, пародонтологии, ортопедии и ортодонтии">Стоматологические инструменты для терапии, хирургии, пародонтологии, ортопедии и ортодонтии</a>
                                    </li>
                                                                    <li><a class="dropdown-item" href="/product.php?category=Стоматологические материалы">Стоматологические материалы</a>
                                    </li>
                                                                    <li><a class="dropdown-item" href="/product.php?category=Стоматологические установки">Стоматологические установки</a>
                                    </li>
                                                                    <li><a class="dropdown-item" href="/product.php?category=Стоматологическое оборудование">Стоматологическое оборудование</a>
                                    </li>
                                                                    <li><a class="dropdown-item" href="/product.php?category=Шовный материал">Шовный материал</a>
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
</header>
    <main>
        <section class="main__section product__section product__upper-info">
            <svg class="about__circle" width="120" height="120" viewBox="0 0 120 120" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <circle opacity="0.3" cx="0.5" cy="0.5" r="119.5" fill="#159EEC" />
            </svg>

            <div class="container product-page__container">
                <div class="product-page__top atop">
                    <a href="/" class="atop__link">Главная / </a>
                    <a href="/product" class="atop__link">Каталог /</a>
                    <a href="/" class="atop__link">Стоматологическое оборудование</a>

                </div>
                                    <h2 class="product-page__header">
                        Автоклав Statim 2000 S кассетный, объём 1,8 л

                    </h2>
                </div>
            </section>

            <section class="product-info product-info__section">

                <div class="container product-info__container">

                    <div class="product-info__wrapper">

                        <div class="product-info__left">
                            <div class="product-info-inner__wrapper">
                                <div class="product-info-inner__left">
                                                                        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                                        class="swiper mySwiper2">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="swiper-zoom-container">
                                                    <img class="product-info__image" src="img/statim200s.webp" />
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="swiper-zoom-container">
                                                    <img class="product-info__image" src="img/statim2000s2.jpg" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div thumbsSlider="" class="swiper mySwiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img class="product-info__image" src="img/statim200s.webp" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="product-info__image" src="img/statim2000s2.jpg" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-info-inner__right">
                                    <img src="img/scican.webp" alt="" class="product-info-inner__logo">

                                    <ul class="product-info-inner__list product-list">
                                        <li class="product-list__item">
                                            <span class="product-list__span">Производитель:</span>
                                            <span class="product-list__value">Scican</span>
                                        </li>
                                        <li class="product-list__item">
                                            <span class="product-list__span">
                                                Страна:
                                            </span>
                                            <span class="product-list__value">
                                                Канада
                                            </span>
                                        </li>
                                        <li class="product-list__item">
                                            <span class="product-list__span">
                                                Наличие:
                                            </span>
                                            <span class="product-list__value"> Уточняется отдельно</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info-below__block product-below">

                                <ul class="product-below__list">
                                    <li class="product-below__item">
                                        <a href="/" class="product-below__link">Описание</a>
                                    </li>
                                    <li class="product-below__item">
                                        <a href="/" class="product-below__link">Информация</a>
                                    </li>
                                </ul>
                                <div class="product-below__wrapper product-below-descr">
                                    <p class="product-below-descr__text">
    Автоклав Statim 2000 - самый быстрый в мире автоклав. Надёжный и компактный
    кассетный стерилизатор S класса для стерилизации стоматологических наконечников,
    инструментов Lasik, эндоскопических и офтальмологических инструментов.
</p>

<p class="product-below-descr__text">
    Автоклав Statim позволяет стерилизовать наконечники всего лишь в течении 9 минут
    (упакованные) и 6 минут (неупакованные) в перерывах между приёмом пациентов, что
    позволяет повысить эффективность работы и обеспечивает значительную экономию
    рабочего времени. Четыре программы стерилизации, выбор одним нажатием кнопки.
    Усовершенствованный микропроцессор контролирует все функции и поддерживает
    оптимальные условия стерилизации.
</p>

<p class="product-below-descr__text">
    Внутренние размеры кассеты: Д 280 мм x Ш 180 мм x В 35 мм, объём кассеты 1,8 л.,
    вместительность резервуара: 4 л (дистиллированная вода) приблизительно 40
    циклов.
    Гарантия 1 год.
</p>

<h3 class="product-below-descr__header">
    Технические характеристики:
</h3>

<ul class="product-below-descr__list descr-list">
    <li class="descr-list__item">Напряжение питания 220 В/50Гц,</li>
    <li class="descr-list__item">Максимальная потребляемая мощность 1300 Вт,</li>
    <li class="descr-list__item">Габариты (ш х в х г) 415 х 150 х 480 мм, вес 21 кг.
    </li>
</ul>
                                </div>
                            </div>
                        </div>

                        <div class="product-info__right">
                            <div class="product-info-price__block">
                                <span class="product-info__price">
                                    251 750 ₽
                                </span>
                            </div>

                            <div class="product-info-sale__block sale">

                                <img class="sale__icon" src="img/sales.svg" alt="">
                                <div class="sale__wrapper">
                                    <span class="sale__span">Нашли дешевле?</span>
                                    <a class="sale__link" href="">Снизим цену!</a>
                                </div>

                            </div>
                            <div class="product-info__buy-block">
                                <form action="">
                                    <button class="btn product-info__button">Оформить КП</button>
                                </form>
                            </div>

                            <div class="product-info__service">
                                <div class="service__wrap">
                                    <img src="img/pricereduction.svg" alt="" class="service__icon">
                                    <a class="service__link">Узнать о снижении цены</a>
                                </div>
                            </div>
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
                                <img src="uploads/1ba2cd3d7a9e5e02f73cc11dfcc27b0d7ccf93a9-e14e9ca9572b11e284ee001e0b8d0418_5a41794ae57411e394bb001e67570607_resize1.jpg" alt="" class="product-cart__image">
                                <div class="product__upper">
                                    <h3 class="product-cart__subheader">
                                        Воск погружной ELASTO DIP
                                    </h3>
                                    <p class="product-cart__header">
                                        Зуботехнические материалы

                                    </p>
                                </div>
                                <div class="product__below">
                                    <span class="product-cart__more">
                                        <a href="https://shop.stomatorg.ru/catalog/pogruzhnye/vosk_pogruzhnoy_elasto_dip_korichnevyy_150_g/">Подробнее</a>
                                    </span>
                                </div>
                            </li>
                                                    <li class="product__item product-cart swiper-slide">
                                <img src="uploads/4c77ff9d1837f1e1958ba9f20d3b2ced5b4322f3-0e1eee15572b11e284ee001e0b8d0418_5e7dd708f454465c840487b821a55056_resize1.jpg" alt="" class="product-cart__image">
                                <div class="product__upper">
                                    <h3 class="product-cart__subheader">
                                        Артикулятор 5032
                                    </h3>
                                    <p class="product-cart__header">
                                        Стоматологические инструменты для терапии, хирургии, пародонтологии, ортопедии и ортодонтии

                                    </p>
                                </div>
                                <div class="product__below">
                                    <span class="product-cart__more">
                                        <a href="https://shop.stomatorg.ru/catalog/artikulyatory_i_litsevye_dugi_1/artikulyator_5032/">Подробнее</a>
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
                                <img src="uploads/3b6f44fe30afb6099e53228a630022d93e3f199b-container-5l.jpg" alt="" class="product-cart__image">
                                <div class="product__upper">
                                    <h3 class="product-cart__subheader">
                                        Диспенсерная система с салфетками
                                    </h3>
                                    <p class="product-cart__header">
                                        Стерилизация и дезинфекция

                                    </p>
                                </div>
                                <div class="product__below">
                                    <span class="product-cart__more">
                                        <a href="https://almadez.ru/dispensers/container/container-5l/">Подробнее</a>
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
                                            </ul>
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                </div>
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
</script>

</body>

</html><?php }
}
