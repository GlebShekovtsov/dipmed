<?php
/* Smarty version 4.3.0, created on 2023-06-04 01:20:12
  from 'C:\OpenServer\domains\dipmed\template_engine\template\dir\product_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_647bbc9c116c32_98474245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb1b127776a8258c0f3b457781c5ec0edac8aa6c' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\product_page.tpl',
      1 => 1685830809,
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
function content_647bbc9c116c32_98474245 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1790961998647bbc9c0f5d88_39507924';
$_smarty_tpl->_subTemplateRender("file:title.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['singleProduct']->value, 'item', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                    <h2 class="product-page__header">
                        <?php echo $_smarty_tpl->tpl_vars['item']->value['full_name'];?>

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
                                                <?php echo $_smarty_tpl->tpl_vars['item']->value['country'];?>

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
                                    <?php echo $_smarty_tpl->tpl_vars['item']->value['descr'];?>

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
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

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
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'item', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                            <li class="product__item product-cart swiper-slide">
                                <img src="uploads/<?php echo $_smarty_tpl->tpl_vars['item']->value['img'];?>
" alt="" class="product-cart__image">
                                <div class="product__upper">
                                    <h3 class="product-cart__subheader">
                                        <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

                                    </h3>
                                    <p class="product-cart__header">
                                        <?php echo $_smarty_tpl->tpl_vars['item']->value['category'];?>


                                    </p>
                                </div>
                                <div class="product__below">
                                    <span class="product-cart__more">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
">Подробнее</a>
                                    </span>
                                </div>
                            </li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                </div>
            </div>
        </section>
    </main>

    <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>

</html><?php }
}
