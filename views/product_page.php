<?php

include_once 'includes/connect.php';

$id = isset($_GET["id"]) ? $_GET["id"] : die("ERROR: отсутствует ID.");


$productInfoSelect = "SELECT * FROM `product_info` 
INNER JOIN `manufacturer` ON product_info.manufacturer_id = manufacturer.id
WHERE id_product = $id";
$productInfoSelectResult = mysqli_query($connect, $productInfoSelect);

$imageSelect = "SELECT * FROM `product_images` WHERE id_product = $id";
$imageSelectResult = mysqli_query($connect, $imageSelect);
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
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
                            <svg class="address__icon" width="41" height="39" viewbox="0 0 41 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M24.1459 33.1262C24.7274 32.7905 25.1502 32.2347 25.3211 31.5811C25.492 30.9275 25.3972 30.2296 25.0574 29.6411L23.7761 27.4219C23.4363 26.8333 22.8794 26.4022 22.2279 26.2235C21.5764 26.0447 20.8837 26.1329 20.3021 26.4687C15.9167 29.0006 13.3542 24.5622 12.0729 22.343C10.7917 20.1238 8.22919 15.6854 12.6146 13.1535C13.1962 12.8178 13.6189 12.2619 13.7899 11.6084C13.9608 10.9548 13.8659 10.2569 13.5261 9.66835L12.2449 7.44916C11.905 6.8606 11.3481 6.42952 10.6966 6.25075C10.0451 6.07199 9.35243 6.16019 8.77089 6.49594C3.28908 9.66086 1.28125 13.779 7.6875 24.875C14.0938 35.9709 18.6641 36.2911 24.1459 33.1262Z" stroke="#1F2B6C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M35.8156 23.9621C36.9804 19.4989 36.3314 14.7346 34.0113 10.716C31.6911 6.69743 27.8896 3.75324 23.442 2.53032M29.1022 22.12C29.4492 20.7945 29.5325 19.4104 29.3472 18.0469C29.162 16.6835 28.712 15.3672 28.0227 14.1735C27.3335 12.9798 26.4187 11.9319 25.3305 11.0897C24.2423 10.2476 23.002 9.62766 21.6806 9.26539M22.4248 20.2645C22.6577 19.3714 22.5278 18.4181 22.0635 17.6141C21.5993 16.81 20.8387 16.2208 19.9488 15.9759" stroke="#159EEC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                            <div class="address__wrapper">
                                <span class="address__span">Номер телефона</span>
                                <a class="address__tele address__info" href="tel:+78442527558">+7 (8442) 52-75-58</a>
                            </div>
                        </li>
                        <li class="address__item">
                            <svg class="address__icon" width="33" height="32" viewbox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.6777 31C24.962 31 31.6777 24.2843 31.6777 16C31.6777 7.71573 24.962 1 16.6777 1C8.39346 1 1.67773 7.71573 1.67773 16C1.67773 24.2843 8.39346 31 16.6777 31Z" stroke="#1F2B6C" stroke-width="2" stroke-linecap="round" />
                                <path d="M21.6777 23.5L16.6777 16V6" stroke="#159EEC" stroke-width="2" stroke-linecap="round" />
                            </svg>

                            <div class="address__wrapper">
                                <span class="address__span">Время работы</span>
                                <p class="address__hours address__info">09:00 - 18:00 По будням</p>
                            </div>
                        </li>
                        <li class="address__item">
                            <svg class="address__icon" width="33" height="39" viewbox="0 0 33 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.35547 15.4C1.35547 29.8 16.3555 37 16.3555 37C16.3555 37 31.3555 29.8 31.3555 15.4C31.3555 7.45 24.643 1 16.3555 1C8.06797 1 1.35547 7.45 1.35547 15.4Z" stroke="#1F2B6C" stroke-width="2" />
                                <path d="M16.3553 20.32C19.2051 20.32 21.5153 18.0098 21.5153 15.16C21.5153 12.3102 19.2051 10 16.3553 10C13.5055 10 11.1953 12.3102 11.1953 15.16C11.1953 18.0098 13.5055 20.32 16.3553 20.32Z" stroke="#159EEC" stroke-width="2" />
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
                                <a href="#" class="nav__link dropdown-toggle" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Каталог</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li>
                                        <a class="dropdown-item" href="/product.php">Все категории</a>
                                    </li>

                                    <?php

                                    $selectCategories = "SELECT * FROM `category`";
                                    $selectCategoriesResult = mysqli_query($connect, $selectCategories);

                                    foreach ($selectCategoriesResult as $categoryRow) {
                                        echo  "<li><a class='dropdown-item' href='/product.php?category=" . $categoryRow['name'] . "'>" . $categoryRow['name']  . "</a></li>";
                                    }

                                    ?>

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
            <svg class="about__circle" width="120" height="120" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle opacity="0.3" cx="0.5" cy="0.5" r="119.5" fill="#159EEC" />
            </svg>
            <?

            foreach ($productInfoSelectResult as $productInfoRow) {


            ?>
                <div class="container product-page__container">
                    <div class="product-page__top atop">
                        <a href="/" class="atop__link">Главная / </a>
                        <a href="/product" class="atop__link">Каталог /</a>
                        <a href="/" class="atop__link">Стоматологическое оборудование</a>

                    </div>
                    <h2 class="product-page__header">
                        <? echo $productInfoRow['full_name']; ?>
                    </h2>
                </div>
        </section>

        <section class="product-info product-info__section">

            <div class="container product-info__container">

                <div class="product-info__wrapper">

                    <div class="product-info__left">
                        <div class="product-info-inner__wrapper">
                            <div class="product-info-inner__left">
                                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                                    <div class="swiper-wrapper">
                                        <?
                                        foreach ($imageSelectResult as $imageRow) {
                                            echo
                                            "<div class='swiper-slide'>
                                                    <div class='swiper-zoom-container'>
                                                        <img class='product-info__image' src='uploads/" . $imageRow['img'] . "' />
                                                    </div>
                                                </div>";
                                        }
                                        ?>
                                        <!-- <div class="swiper-slide">
                                            <div class="swiper-zoom-container">
                                                <img class="product-info__image" src="img/statim200s.webp" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="swiper-zoom-container">
                                                <img class="product-info__image" src="img/statim2000s2.jpg" />
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                                <div thumbsSlider="" class="swiper mySwiper">
                                    <div class="swiper-wrapper">
                                        <?
                                        foreach ($imageSelectResult as $imageRow) {
                                            echo
                                            "<div class='swiper-slide'>
                                                <img class='product-info__image' src='uploads/" . $imageRow['img'] . "' />
                                            </div>";
                                        }
                                        ?>
                                        <!-- <div class="swiper-slide">
                                            <img class="product-info__image" src="img/statim200s.webp" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="product-info__image" src="img/statim2000s2.jpg" />
                                        </div> -->
                                    </div>
                                </div>
                            </div>

                            <div class="product-info-inner__right">
                                <img src="uploads/<? echo $productInfoRow['image'] ?>" alt="" class="product-info-inner__logo">

                                <ul class="product-info-inner__list product-list">
                                    <li class="product-list__item">
                                        <span class="product-list__span">Производитель:</span>
                                        <span class="product-list__value"><? echo $productInfoRow['man_name']; ?></span>
                                    </li>
                                    <li class="product-list__item">
                                        <span class="product-list__span">
                                            Страна:
                                        </span>
                                        <span class="product-list__value">
                                            <? echo $productInfoRow['country']; ?>
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
                                    <button class="product-below__link product-below__link--active" data-path="one">Описание</button>
                                </li>
                                <li class="product-below__item">
                                    <button class="product-below__link" data-path="two">Информация</button>
                                </li>
                            </ul>
                            <div class="product-below__wrapper product-below-descr product-below-descr--active" data-target="one">
                                <? echo $productInfoRow['descr']; ?>
                            </div>
                            <div class="product-below__wrapper product-below-descr" data-target="two">
                                <ul class="product-below__list--two">
                                    <li class="product-below__item--two below-two">
                                        <span class="below-two__span">Производитель</span>
                                        <span class="below-two__value"><? echo $productInfoRow['man_name']; ?></span>
                                    </li>
                                    <li class="product-below__item--two below-two">
                                        <span class="below-two__span">Страна</span>
                                        <span class="below-two__value"><? echo $productInfoRow['country']; ?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="product-info__right">
                        <div class="product-info-price__block">
                            <span class="product-info__price">
                                <? echo $productInfoRow['price']; ?> ₽
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
                            <button class="btn product-info__button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Оформить КП
                            </button>
                        </div>

                        <div class="product-info__service">
                            <div class="service__wrap">
                                <img src="img/pricereduction.svg" alt="" class="service__icon">
                                <a class="service__link">Узнать о снижении цены</a>
                            </div>
                        </div>

                        <!-- Модальное окно -->
                        <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Оформление коммерческого предложения</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                                    </div>
                                    <form method="POST" id="deal__form">
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <input type="hidden" name="product_id" class="form-control" id="product-name" value="<? echo $productInfoRow['id_product'] ?>">
                                                <label for="mobile-phone" class="col-form-label">Название товара:</label>
                                                <input type="text" class="form-control" id="product-name" value="<? echo $productInfoRow['full_name'] ?>" disabled readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="mobile-phone" class="col-form-label">Номер телефона:</label>
                                                <input name="phone_num" type="text" class="form-control" id="mobile-phone">
                                            </div>
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label">Сообщение:</label>
                                                <textarea name="message" class="form-control" id="message-text" contenteditable="true"></textarea>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                                                <button type="submit" class="btn btn-primary">Отправить</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }

            ?>
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
                        $selectRandProduct = "SELECT *
                        FROM `product` 
                        ORDER BY 
                        RAND()
                        LIMIT 8";
                        $selectRandProductResult = mysqli_query($connect, $selectRandProduct);

                        foreach ($selectRandProductResult as $randProductRow) {

                            echo "<li class='product__item product-cart swiper-slide'>";
                            echo "<img src='uploads/" . $randProductRow['img'] . "' alt='' class='product-cart__image'>";
                            echo "<div class='product__upper'>";
                            echo "<h3 class='product-cart__subheader'>" . $randProductRow['name'] . "</h3>";
                            echo "<p class='product-cart__header'>";
                            echo $randProductRow['category'];
                            echo "</p>";
                            echo "</div>";
                            echo "<div class='product__below'>
                                    <span class='product-cart__more'>
                                        <a href=''>Подробнее</a>
                                    </span>
                                </div>";
                            echo "</li>";
                        }
                        ?>
                    </ul>
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                </div>
            </div>
        </section>
    </main>
    <script>

        document.querySelectorAll(".product-below__link").forEach(function(stepBtn) {
            stepBtn.addEventListener("click", function(step) {
                const path = step.currentTarget.dataset.path;
                document.querySelectorAll(".product-below__link").forEach(function(btn) {
                    btn.classList.remove("product-below__link--active");
                });
                step.currentTarget.classList.add("product-below__link--active");
                document
                    .querySelectorAll(".product-below-descr")
                    .forEach(function(stepItem) {
                        stepItem.classList.remove("product-below-descr--active");
                    });
                document
                    .querySelector(`[data-target="${path}"]`)
                    .classList.add("product-below-descr--active");
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
    <?php include_once 'includes/footer.php' ?>

</body>

</html>