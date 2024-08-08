{include file="title.tpl"}

<body>
    {include file="header.tpl"}

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
                {foreach from=$singleProduct item=item key=key name=name}
                    <h2 class="product-page__header">
                        {$item.full_name}
                    </h2>
                </div>
            </section>

            <section class="product-info product-info__section">

                <div class="container product-info__container">

                    <div class="product-info__wrapper">

                        <div class="product-info__left">
                            <div class="product-info-inner__wrapper">
                                <div class="product-info-inner__left">
                                    {*                                 
                                    <div class="product-info-inner__carousel">

                                    </div>
                                    <img src="img/statim200s.webp" alt="" class="product-info-inner__image"> *}
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
                                                {$item.country}
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
                                    {$item.descr}
                                </div>
                            </div>
                        </div>

                        <div class="product-info__right">
                            <div class="product-info-price__block">
                                <span class="product-info__price">
                                    {$item.price}
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
                                    <button class="button product-info__button">Оформить КП</button>
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
                {/foreach}

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
                        {foreach from=$products item=item key=key name=name}
                            <li class="product__item product-cart swiper-slide">
                                <img src="uploads/{$item.img}" alt="" class="product-cart__image">
                                <div class="product__upper">
                                    <h3 class="product-cart__subheader">
                                        {$item.name}
                                    </h3>
                                    <p class="product-cart__header">
                                        {$item.category}

                                    </p>
                                </div>
                                <div class="product__below">
                                    <span class="product-cart__more">
                                        <a href="{$item.link}">Подробнее</a>
                                    </span>
                                </div>
                            </li>
                        {/foreach}
                    </ul>
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                </div>
            </div>
        </section>
    </main>

    {include file='footer.tpl'}


</body>

</html>