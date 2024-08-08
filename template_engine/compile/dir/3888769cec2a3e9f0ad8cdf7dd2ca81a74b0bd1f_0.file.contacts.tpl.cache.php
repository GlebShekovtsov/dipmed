<?php
/* Smarty version 4.3.0, created on 2023-06-07 18:08:20
  from 'C:\OpenServer\domains\dipmed\template_engine\template\dir\contacts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64809d645fe652_42831214',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3888769cec2a3e9f0ad8cdf7dd2ca81a74b0bd1f' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\contacts.tpl',
      1 => 1686066566,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:title.tpl' => 1,
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_64809d645fe652_42831214 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '110021992464809d645d1cf3_55990146';
$_smarty_tpl->_subTemplateRender("file:title.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <main class="main">
        <!-- Hero about -->
        <section class="main__section about-us__section contacts__welcome">
            <svg class="about__circle" width="120" height="120" viewBox="0 0 120 120" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <circle opacity="0.3" cx="0.5" cy="0.5" r="119.5" fill="#159EEC" />
            </svg>
            <div class="container about-us__container">
                <div class="about-us__top atop">
                    <a href="/" class="atop__link">Главная / </a>
                    <a href="/contacts" class="atop__link">Контакты</a>
                </div>
                <h2 class="about-us__header">Наши контакты</h2>
            </div>
            <div class="about-us__below below">
                <div class="below__block"></div>
                <div class="below__block"></div>
                <div class="below__block"></div>
            </div>
        </section>
        <!-- Hero -->


        <!-- our-contacts -->
        <section class="main__section our-contacts__section">
            <div class="container our-contacts our-contacts__container">
                <div class="our-contacts__wrapper">
                    <div class="our-contacts__left">
                        <h2 class="our-contacts__header">
                            Связаться с нами
                        </h2>
                        <p class="our-contacts__descr">
                            Отправьте нам сообщение, и мы с вами свяжемся. Все поля обязательны для заполнения.
                            Время обработки заявки варьируется.

                        </p>
                        <form method="post" id="ajax-form" class="request__form form">
                            <div class="form__upper">
                                <input type="text" name="fio" class="form__input" placeholder="Имя">
                                <input type="text" name="gender" class="form__input" placeholder="Пол">
                                <input type="text" name="email" class="form__input" placeholder="Email">
                                <input type="text" data-phone-pattern name="telnum" class="form__input"
                                    placeholder="+7(___) ___-__-__" required>
                            </div>
                            <div class="form__down">
                                <textarea class="form__textarea" name="message" placeholder="Сообщение"></textarea>
                                <button class="btn-reset button form__button">Отправить</button>
                            </div>
                        </form>
                    </div>

                    <div class="our-contacts__right oright">
                        <div class="oright__wrapper">
                            <h3 class="oright__header">
                                Рабочие часы
                            </h3>
                            <ul class="oright__list">
                                <li class="oright__item">
                                    <span class="oright__day">Понедельник</span>
                                    <div class="oright__line"></div>
                                    <p class="oright__time">09:00 - 18:00</p>
                                </li>
                                <li class="oright__item">
                                    <span class="oright__day">Вторник</span>
                                    <div class="oright__line"></div>
                                    <p class="oright__time">09:00 - 18:00</p>
                                </li>
                                <li class="oright__item">
                                    <span class="oright__day">Среда</span>
                                    <div class="oright__line"></div>
                                    <p class="oright__time">09:00 - 18:00</p>
                                </li>
                                <li class="oright__item">
                                    <span class="oright__day">Четверг</span>
                                    <div class="oright__line"></div>
                                    <p class="oright__time">09:00 - 18:00</p>
                                </li>
                                <li class="oright__item">
                                    <span class="oright__day">Пятница</span>
                                    <div class="oright__line"></div>
                                    <p class="oright__time">09:00 - 18:00</p>
                                </li>
                                <li class="oright__item">
                                    <span class="oright__day">Суббота</span>
                                    <div class="oright__line"></div>
                                    <p class="oright__time">Выходной</p>
                                </li>
                                <li class="oright__item">
                                    <span class="oright__day">Воскресенье</span>
                                    <div class="oright__line"></div>
                                    <p class="oright__time">Выходной</p>
                                </li>
                            </ul>
                            <div class="oright__line-wrapper">
                                <div class="oright__wline">
                                </div>
                            </div>

                            <div class="oright__call call">
                                <div class="call__wrapper">
                                    <div class="call__left">
                                        <svg width="50" height="49" viewBox="0 0 50 49" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M30.0336 41.7044C30.757 41.2868 31.2828 40.5955 31.4954 39.7825C31.708 38.9695 31.59 38.1015 31.1673 37.3694L29.5737 34.6091C29.151 33.8771 28.4583 33.3409 27.6479 33.1185C26.8376 32.8961 25.976 33.0059 25.2526 33.4235C19.7978 36.5728 16.6105 31.0522 15.0168 28.2918C13.4231 25.5315 10.2358 20.0109 15.6906 16.8616C16.4139 16.444 16.9398 15.7526 17.1524 14.9396C17.365 14.1267 17.247 13.2587 16.8243 12.5266L15.2306 9.76628C14.808 9.0342 14.1153 8.49801 13.3049 8.27565C12.4946 8.0533 11.6329 8.163 10.9096 8.58063C4.09109 12.5173 1.59367 17.6396 9.56202 31.4412C17.5304 45.2428 23.2151 45.6411 30.0336 41.7044Z"
                                                stroke="#BFD2F8" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M44.5491 30.3058C45.9978 24.7542 45.1906 18.8282 42.3047 13.8297C39.4188 8.83123 34.6904 5.16913 29.1582 3.64801M36.1986 28.0145C36.6302 26.3657 36.7338 24.6442 36.5034 22.9482C36.273 21.2522 35.7132 19.6151 34.8559 18.1303C33.9987 16.6454 32.8608 15.342 31.5072 14.2945C30.1536 13.247 28.6109 12.476 26.9673 12.0254M27.893 25.7065C28.1827 24.5956 28.021 23.4099 27.4436 22.4098C26.8662 21.4096 25.9201 20.6768 24.8133 20.3722"
                                                stroke="#BFD2F8" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="call__right">
                                        <h4 class="call__header">Номер телефона</h4>
                                        <a href="tel:+78442527558" class="call__link">+7 (8442) 52-75-58</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="oright__map">
                    <div style="position:relative;overflow:hidden;"><a
                            href="https://yandex.ru/maps/org/dipmed/51250966812/?utm_medium=mapframe&utm_source=maps"
                            style="color:#eee;font-size:12px;position:absolute;top:0px;">Дипмед</a><a
                            href="https://yandex.ru/maps/38/volgograd/category/dental_materials_and_equipment/184106128/?utm_medium=mapframe&utm_source=maps"
                            style="color:#eee;font-size:12px;position:absolute;top:14px;">Стоматологические материалы и
                            оборудование в Волгограде</a><iframe src="https://yandex.ru/map-widget/v1/-/CCUreFdjsC"
                            width="100%" height="400" frameborder="1" allowfullscreen="true"
                            style="position:relative;"></iframe></div>
                </div>
            </div>
        </section>

        <!-- our-contacts -->

        <!-- <section class="main__section services">
        <div class="container services__container">
            <div class="services__header-wrapper">
                <h2 class="services__header">Наши услуги</h2>
            </div>
            <div class="services__wrapper ">

            </div>
        </div>
    </section> -->


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
    <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>

</html><?php }
}
