<?php
/* Smarty version 4.3.0, created on 2023-06-07 18:08:21
  from 'C:\OpenServer\domains\dipmed\template_engine\template\dir\about.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64809d65e1c724_33641610',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7922f9d0fb2bc547604fd645dd5696cd6fcefe8e' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\about.tpl',
      1 => 1672085083,
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
      1 => 1686066615,
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
function content_64809d65e1c724_33641610 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О нас</title>
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
</header>    <main class="main">
        <!-- Hero about -->
        <section class="main__section about-us__section about_us__welcome">
            <svg class="about__circle" width="120" height="120" viewBox="0 0 120 120" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <circle opacity="0.3" cx="0.5" cy="0.5" r="119.5" fill="#159EEC" />
            </svg>
            <div class="container about-us__container">
                <div class="about-us__top atop">
                    <a href="/" class="atop__link">Главная / </a>
                    <a href="/about-us" class="atop__link">О нас</a>
                </div>
                <h2 class="about-us__header">О нас</h2>
            </div>
            <div class="about-us__below below">
                <div class="below__block"></div>
                <div class="below__block"></div>
                <div class="below__block"></div>
            </div>
        </section>
        <!-- Hero -->


        <!-- Welcome -->
        <section class="main__section welcome__section">
            <div class="container welcome welcome__container">
                <div class="welcome__wrapper">
                    <div class="welcome__left">
                    </div>
                    <div class="welcome__right">
                        <h3 class="welcome__subheader">
                            Добро пожаловать в дипмед
                        </h3>
                        <h2 class="welcome__header">
                            Лучшие услуги по поставке медицинского оборудования
                        </h2>
                        <p class="welcome__descr">
                            Мы работаем на волгоградском рынке c 2016 года. Сотрудничество с надежными,
                            профессиональными партнерами позволяет нашей компании предлагать Вам качественную продукцию
                            по выгодным ценам. Мы работаем с известными фирмами-производителями и ориентированны на
                            отвечающую современным потребностям врачей продукцию.
                        </p>
                        <h4 class="welcome__header-h4">
                            ОСНОВНЫЕ НАПРАВЛЕНИЯ ДЕЯТЕЛЬНОСТИ КОМПАНИИ:
                        </h4>
                        <p class="welcome__descr">
                            Комплексная поставка медицинского и стоматологического оборудования и
                            материалов.Медицинское оборудование соответствуют самым строгим мировым стандартам.
                            Мы работаем только с известными брендами, например:
                        </p>
                        <ul class="welcome__list">
                            <li class="welcome__item">
                                <div class="welcome__marker"></div>
                                <span class="welcome__text">Ankylos</span>
                            </li>
                            <li class="welcome__item">
                                <div class="welcome__marker"></div>
                                <span class="welcome__text">Botiss</span>
                            </li>
                            <li class="welcome__item">
                                <div class="welcome__marker"></div>
                                <span class="welcome__text">OMS</span>
                            </li>
                            <li class="welcome__item">
                                <div class="welcome__marker"></div>
                                <span class="welcome__text">Алмадез</span>
                            </li>
                            <li class="welcome__item">
                                <div class="welcome__marker"></div>
                                <span class="welcome__text">Draeger</span>
                            </li>
                            <li class="welcome__item">
                                <div class="welcome__marker"></div>
                                <span class="welcome__text">Медтест</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Welcome -->
        <!-- Каталог -->
        <section class="main__section product__section">
            <div class="container product__container">
                <p class="product__subheader">
                    Ознакомьтесь с
                </p>
                <h2 class="product__header">
                    Предложениями
                </h2>
                <div class="swiper">
                    <ul class="product__list swiper-wrapper">
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
                                <img src="uploads/3f713b5abd21d8b114b4939cbc9ba7fc96a0d1b6-c20562a1ee7611e4b454001e67570606_e2723fb1cf6e4da0a7dafcbcdfe6cdeb_resize1.png" alt="" class="product-cart__image">
                                <div class="product__upper">
                                    <h3 class="product-cart__subheader">
                                        Шовный материал Супрамид HS 18
                                    </h3>
                                    <p class="product-cart__header">
                                        Шовный материал

                                    </p>
                                </div>
                                <div class="product__below">
                                    <span class="product-cart__more">
                                        <a href="https://shop.stomatorg.ru/catalog/shovnye_materialy/shovnyy_material_supramid_hs_18_5_0_usp_45_sm_27281/">Подробнее</a>
                                    </span>
                                </div>
                            </li>
                                                    <li class="product__item product-cart swiper-slide">
                                <img src="uploads/0bb1a80dbb863c4627efdc5898473d8025f29d89-df80935db34e11e7b768001e67570606_24e38b09329348d0b74e5cf0caf34d7f.resize1.jpg" alt="" class="product-cart__image">
                                <div class="product__upper">
                                    <h3 class="product-cart__subheader">
                                         Vericom Co Ltd Denfil KIT
                                    </h3>
                                    <p class="product-cart__header">
                                        Стоматологические материалы

                                    </p>
                                </div>
                                <div class="product__below">
                                    <span class="product-cart__more">
                                        <a href="https://shop.stomatorg.ru/catalog/plombirovochnye_materialy_svetovogo_otverzhdeniya/denfil_kit_startovyy_nabor_5_kh_4_g_a2_a3_a3_5_b2_b3_kompozitnyy_svetootverzhdaemyy_material/">Подробнее</a>
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
                                <img src="uploads/905cafc87dd657adbf5fa33dce3bd19c75e478c1-b22d6f842ef711e58df4001e67570606_ed57c9b97833435695a1d235d9d63658_resize1.jpg" alt="" class="product-cart__image">
                                <div class="product__upper">
                                    <h3 class="product-cart__subheader">
                                        Сплав Magnum Ceramic S
                                    </h3>
                                    <p class="product-cart__header">
                                        Зуботехнические материалы

                                    </p>
                                </div>
                                <div class="product__below">
                                    <span class="product-cart__more">
                                        <a href="https://shop.stomatorg.ru/catalog/ni_cr_dlya_karkasov/splav_magnum_ceramic_s_dlya_keramiki_ni_67_cr_24_mo_10_1kg_bez_berilliya/">Подробнее</a>
                                    </span>
                                </div>
                            </li>
                                                    <li class="product__item product-cart swiper-slide">
                                <img src="uploads/e21c9587148c6b16afc4413096b772e2da4d4d9c-25cf07eb572c11e284ee001e0b8d0418_db4e95a0040d4cc1ab64596e958788d5_resize1.jpg" alt="" class="product-cart__image">
                                <div class="product__upper">
                                    <h3 class="product-cart__subheader">
                                        Автоклав Statim 2000 S кассетный, объём 1,8 л
                                    </h3>
                                    <p class="product-cart__header">
                                        Стоматологическое оборудование

                                    </p>
                                </div>
                                <div class="product__below">
                                    <span class="product-cart__more">
                                        <a href="https://shop.stomatorg.ru/catalog/avtoklavy/avtoklav_statim_2000_s_kassetnyy_obyem_1_8_l/">Подробнее</a>
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
                                            </ul>
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </section>
        <!-- Конец каталога -->

        <!-- Новости -->
        <section class="main__section news__section">
            <div class="container news__container">
                <p class="news__subheader">
                    Следите за нашими обновлениями
                </p>
                <h2 class="news__header">Новости</h2>

                <ul class="news__list">

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
        <!-- Конец новостей -->

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
</script></body>

</html><?php }
}
