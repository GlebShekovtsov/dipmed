<?php
/* Smarty version 4.3.0, created on 2023-06-06 18:48:14
  from 'C:\OpenServer\domains\dipmed\template_engine\template\dir\partners.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_647f553e4253c9_22892834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fc7a4ff0490daca0dc7041da7e84fa11c2bca14' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\partners.tpl',
      1 => 1672085189,
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
      1 => 1685977258,
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
function content_647f553e4253c9_22892834 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Партнеры</title>
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
        <section class="main__section about-us__section partners__welcome">
            <svg class="about__circle" width="120" height="120" viewBox="0 0 120 120" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <circle opacity="0.3" cx="0.5" cy="0.5" r="119.5" fill="#159EEC" />
            </svg>
            <div class="container about-us__container">
                <div class="about-us__top atop">
                    <a href="/" class="atop__link">Главная / </a>
                    <a href="/partners" class="atop__link">Партнеры</a>
                </div>
                <h2 class="about-us__header">Наши партнеры</h2>
            </div>
            <div class="about-us__below below">
                <div class="below__block"></div>
                <div class="below__block"></div>
                <div class="below__block"></div>
            </div>
        </section>
        <!-- Hero -->


        <!-- Partners -->
        <section class="main__section partners__section">
            <div class="container partners partners__container">
                <ul class="partners__list">
                                            <li class="partners__item">
                            <a href="https://stomus.ru/" target="_blank">
                                <img src="uploads/5866158953352ac2697e0355df80b23bfcb834c4-7.png" class="partners__img partnerspage__img" alt="">
                            </a>
                            <div class="partners__wrapper">
                                <h3 class="partners__header">
                                    Стомус
                                </h3>
                                <p class="partners__descr">
                                    Группа компаний «Стомус» почти 30 лет является ведущим научно-практическим и экспертным центром в области стоматологии. Ее бессменным лидером и главой является Наталья Вячеславовна Черновол, которая все эти годы вдохновляет и реализовывает каждый из амбициозных проектов компании. На данный момент в ...
                                </p>
                                <div class="partners__links">
                                    <a href="https://stomus.ru/" target="_blank" class="partners__link">Перейти на сайт</a>
                                    <svg width="13" height="12" viewBox="0 0 13 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.21795 11L11.8333 6M11.8333 6L7.21795 1M11.8333 6H1" stroke="#1F2B6C"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                </div>
                            </div>
                        </li>
                                            <li class="partners__item">
                            <a href="https://www.medtest.ltd/" target="_blank">
                                <img src="uploads/medtest.svg" class="partners__img partnerspage__img" alt="">
                            </a>
                            <div class="partners__wrapper">
                                <h3 class="partners__header">
                                    Медтест
                                </h3>
                                <p class="partners__descr">
                                    Специализируются на производстве медицинского оборудования и разработке различных упаковочных решений для пищевой, медицинской и химической промышленности.

...
                                </p>
                                <div class="partners__links">
                                    <a href="https://www.medtest.ltd/" target="_blank" class="partners__link">Перейти на сайт</a>
                                    <svg width="13" height="12" viewBox="0 0 13 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.21795 11L11.8333 6M11.8333 6L7.21795 1M11.8333 6H1" stroke="#1F2B6C"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                </div>
                            </div>
                        </li>
                                            <li class="partners__item">
                            <a href="https://www.inno-implant.ru/" target="_blank">
                                <img src="uploads/a882172404b4efde208e226bdebd890f4467a01d-inno-logo.svg" class="partners__img partnerspage__img" alt="">
                            </a>
                            <div class="partners__wrapper">
                                <h3 class="partners__header">
                                    ИННО ИМЛПАНТ
                                </h3>
                                <p class="partners__descr">
                                    Компания ИННО Имплант РУ была создана с целью представления на российском рынке передовых мировых технологий, материалов и оборудования в области стоматологической имплантологии. ...
                                </p>
                                <div class="partners__links">
                                    <a href="https://www.inno-implant.ru/" target="_blank" class="partners__link">Перейти на сайт</a>
                                    <svg width="13" height="12" viewBox="0 0 13 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.21795 11L11.8333 6M11.8333 6L7.21795 1M11.8333 6H1" stroke="#1F2B6C"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                </div>
                            </div>
                        </li>
                                            <li class="partners__item">
                            <a href="https://almadez.ru/" target="_blank">
                                <img src="uploads/502fb0540e7e50210bb61902a6e7affb2477765b-35fb46kmvpxfz5pmrxvynw28xudud8j7.png" class="partners__img partnerspage__img" alt="">
                            </a>
                            <div class="partners__wrapper">
                                <h3 class="partners__header">
                                    Алмадез
                                </h3>
                                <p class="partners__descr">
                                    Производитель дезинфицирующих средств ООО «Базовая дезинфекция» зарекомендовал себя на рынке с 2009 года. Главным продуктом является бренд «Алмадез», представленный в широком разнообразии специальных дезсредств....
                                </p>
                                <div class="partners__links">
                                    <a href="https://almadez.ru/" target="_blank" class="partners__link">Перейти на сайт</a>
                                    <svg width="13" height="12" viewBox="0 0 13 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.21795 11L11.8333 6M11.8333 6L7.21795 1M11.8333 6H1" stroke="#1F2B6C"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                </div>
                            </div>
                        </li>
                                            <li class="partners__item">
                            <a href="https://telos-healthcare.ru/index.php/o-kompanii" target="_blank">
                                <img src="uploads/3ca785a10526042d8554871891c51dbf81e0633b-head_rus_12.jpg" class="partners__img partnerspage__img" alt="">
                            </a>
                            <div class="partners__wrapper">
                                <h3 class="partners__header">
                                    Telos
                                </h3>
                                <p class="partners__descr">
                                    С 1975 года компания Telos занимается разработкой и внедрением технологий в области травматологии и ортопедии.
 
На счету компании такие разработки как: комплекс для лечения переломов трубчатых костей,технология диагностики разрывов связок голеностопа и коленного сустава, система диагностики разры...
                                </p>
                                <div class="partners__links">
                                    <a href="https://telos-healthcare.ru/index.php/o-kompanii" target="_blank" class="partners__link">Перейти на сайт</a>
                                    <svg width="13" height="12" viewBox="0 0 13 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.21795 11L11.8333 6M11.8333 6L7.21795 1M11.8333 6H1" stroke="#1F2B6C"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                </div>
                            </div>
                        </li>
                                            <li class="partners__item">
                            <a href="https://stomatorg.ru/company/index.php" target="_blank">
                                <img src="uploads/9bb13eeff51b137fb5d2e579510b093ffeab8f44-stomatorg.png" class="partners__img partnerspage__img" alt="">
                            </a>
                            <div class="partners__wrapper">
                                <h3 class="partners__header">
                                    Stomatorg
                                </h3>
                                <p class="partners__descr">
                                    Крупнейший дистрибьютор высококачественного оборудования, расходных материалов, инструментов для стоматологических клиник и зуботехнических лабораторий на территории РФ.  ...
                                </p>
                                <div class="partners__links">
                                    <a href="https://stomatorg.ru/company/index.php" target="_blank" class="partners__link">Перейти на сайт</a>
                                    <svg width="13" height="12" viewBox="0 0 13 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.21795 11L11.8333 6M11.8333 6L7.21795 1M11.8333 6H1" stroke="#1F2B6C"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                </div>
                            </div>
                        </li>
                                            <li class="partners__item">
                            <a href="https://www.pharma-dental.ru/" target="_blank">
                                <img src="uploads/6481a05516175b873e4233bf72f74b264025a206-pharmadental.png" class="partners__img partnerspage__img" alt="">
                            </a>
                            <div class="partners__wrapper">
                                <h3 class="partners__header">
                                    PharmaDental
                                </h3>
                                <p class="partners__descr">
                                    Компания Pharmadental – крупнейший поставщик оборудования для стоматологий на территории России. ...
                                </p>
                                <div class="partners__links">
                                    <a href="https://www.pharma-dental.ru/" target="_blank" class="partners__link">Перейти на сайт</a>
                                    <svg width="13" height="12" viewBox="0 0 13 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.21795 11L11.8333 6M11.8333 6L7.21795 1M11.8333 6H1" stroke="#1F2B6C"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                </div>
                            </div>
                        </li>
                                            <li class="partners__item">
                            <a href="https://botissplus.ru/" target="_blank">
                                <img src="uploads/eb6aac33835244d42c89aaf39c1ffe0f6a19762e-botiss-PhotoRoom.png-PhotoRoom.png" class="partners__img partnerspage__img" alt="">
                            </a>
                            <div class="partners__wrapper">
                                <h3 class="partners__header">
                                    Bottis
                                </h3>
                                <p class="partners__descr">
                                    Botiss biomaterials – одна из ведущих компаний в области регенерации костной и мягких тканей, на 100% сфокусированная на создании регенерационных материалов именно для стоматологии. Это инновационная, клинически ориентированная биотехнологичная компания, головной офис и производственные мощности кот...
                                </p>
                                <div class="partners__links">
                                    <a href="https://botissplus.ru/" target="_blank" class="partners__link">Перейти на сайт</a>
                                    <svg width="13" height="12" viewBox="0 0 13 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.21795 11L11.8333 6M11.8333 6L7.21795 1M11.8333 6H1" stroke="#1F2B6C"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                </div>
                            </div>
                        </li>
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
