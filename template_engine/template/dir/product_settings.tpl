{include file="title_admin.tpl"}

<body>
    <main class="main__section admin__section">

        <div class="container">

            <div class="page-header">
                <h1 class="admin-header">Административная панель</h1>
                <a href="exit">Выйти</a>
            </div>
            <div class="back__link">

            <a href="/admin">Назад</a>
            
            </div>
            {(empty($status)) ? '' : $status}

            {if isset($smarty.session.login) && isset($smarty.session.password)}
                <div class="functions__wrapper functions">
                    <ul class="settings__list">
                        <li class="settings__item ">
                            <a href="/admin/view-product" class="function__link">
                                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 122.88 114.58">
                                    <title>product</title>
                                    <path
                                        d="M118.13,9.54a3.25,3.25,0,0,1,2.2.41,3.28,3.28,0,0,1,2,3l.57,78.83a3.29,3.29,0,0,1-1.59,3L89.12,113.93a3.29,3.29,0,0,1-2,.65,3.07,3.07,0,0,1-.53,0L3.11,105.25A3.28,3.28,0,0,1,0,102V21.78H0A3.28,3.28,0,0,1,2,18.7L43.89.27h0A3.19,3.19,0,0,1,45.63,0l72.5,9.51Zm-37.26,1.7-24.67,14,30.38,3.88,22.5-14.18-28.21-3.7Zm-29,20L50.75,64.62,38.23,56.09,25.72,63.17l2.53-34.91L6.55,25.49V99.05l77.33,8.6V35.36l-32-4.09Zm-19.7-9.09L56.12,8,45.7,6.62,15.24,20l16.95,2.17ZM90.44,34.41v71.12l25.9-15.44-.52-71.68-25.38,16Z" />
                                </svg>
                                <div class="function__wrapper">
                                    <h2 class="functions__header">
                                        Карточка товара
                                    </h2>
                                </div>
                            </a>
                        </li>
                        <li class="settings__item">
                            <a href="/admin/view-product_info" class="function__link">
                                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 122.88 114.58">
                                    <title>product</title>
                                    <path
                                        d="M118.13,9.54a3.25,3.25,0,0,1,2.2.41,3.28,3.28,0,0,1,2,3l.57,78.83a3.29,3.29,0,0,1-1.59,3L89.12,113.93a3.29,3.29,0,0,1-2,.65,3.07,3.07,0,0,1-.53,0L3.11,105.25A3.28,3.28,0,0,1,0,102V21.78H0A3.28,3.28,0,0,1,2,18.7L43.89.27h0A3.19,3.19,0,0,1,45.63,0l72.5,9.51Zm-37.26,1.7-24.67,14,30.38,3.88,22.5-14.18-28.21-3.7Zm-29,20L50.75,64.62,38.23,56.09,25.72,63.17l2.53-34.91L6.55,25.49V99.05l77.33,8.6V35.36l-32-4.09Zm-19.7-9.09L56.12,8,45.7,6.62,15.24,20l16.95,2.17ZM90.44,34.41v71.12l25.9-15.44-.52-71.68-25.38,16Z" />
                                </svg>
                                <div class="function__wrapper">
                                    <h2 class="functions__header">
                                        Информация о товаре
                                    </h2>
                                </div>
                            </a>
                        </li>
                        <li class="settings__item">
                            <a href="/admin/view-product_images" class="function__link">
                                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 122.88 114.58">
                                    <title>product</title>
                                    <path
                                        d="M118.13,9.54a3.25,3.25,0,0,1,2.2.41,3.28,3.28,0,0,1,2,3l.57,78.83a3.29,3.29,0,0,1-1.59,3L89.12,113.93a3.29,3.29,0,0,1-2,.65,3.07,3.07,0,0,1-.53,0L3.11,105.25A3.28,3.28,0,0,1,0,102V21.78H0A3.28,3.28,0,0,1,2,18.7L43.89.27h0A3.19,3.19,0,0,1,45.63,0l72.5,9.51Zm-37.26,1.7-24.67,14,30.38,3.88,22.5-14.18-28.21-3.7Zm-29,20L50.75,64.62,38.23,56.09,25.72,63.17l2.53-34.91L6.55,25.49V99.05l77.33,8.6V35.36l-32-4.09Zm-19.7-9.09L56.12,8,45.7,6.62,15.24,20l16.95,2.17ZM90.44,34.41v71.12l25.9-15.44-.52-71.68-25.38,16Z" />
                                </svg>
                                <div class="function__wrapper">
                                    <h2 class="functions__header">
                                        Фотографии товаров
                                    </h2>
                                </div>
                            </a>
                        </li>
                    </ul>
                    
                </div>
            {else}
                <div class="admin">

                    <div class="admin__wrapper">
                        <h2 class="admin__header">
                            Вход
                        </h2>
                        <form method="post" class="admin__form">
                            <input type='text' placeholder='Логин' class='admin__input' name='login' required>
                            <input type='password' placeholder='Пароль' class='admin__input' name='password' required>
                            <input type='submit' value='Войти' class='admin__button'>
                        </form>
                    </div>

                </div>
            {/if}


        </div>

    </main>
</body>
{include file='footer_admin.tpl'}


</html>