{include file="title_admin.tpl"}

<body>
    <main class="main__section admin__section">

        <div class="container">
            <div class="page-header">
                <h1>
                    Информация о товарах
                </h1>
            </div>
            <div class="left-button-margin">
                <a href="/admin" class="btn btn-default pull-left">На главную</a>
            </div>
            <div class="right-button-margin">
                <a href="/admin/create-product-info" class="btn btn-default pull-right">Добавить информацию о товаре</a>
            </div>
            <form role='search' action='/admin/search_product_info' class="search__form">
                <div class='input-group col-md-3 pull-left margin-right-1em search__input'>
                    <input type='text' class='form-control' placeholder='Введите название...' name='s' required />
                    <div class='input-group-btn'>";
                        <button class='btn btn-primary' type='submit'>
                            <i class='glyphicon glyphicon-search'></i></button>";
                    </div>
                </div>
            </form>
            {if $num > 0}
                <table class="table table-hover table-responsive table-bordered">
                    <tr>
                        <th>ID продукта</th>
                        <th>Полное название</th>
                        <th>ID производителя</th>
                        <th>ID категории</th>
                        <th>Страна</th>
                        <th>Цена</th>
                        <th>Описание</th>
                        <th>Действия</th>

                    </tr>


                    {foreach from=$items item=item key=key name=name}
                        <tr>
                            <td class="setting__column">{$item.id_product}</td>
                            <td class="setting__column">{$item.full_name}</td>
                            <td class="setting__column">{$item.manufacturer_id}</td>
                            <td class="setting__column">{$item.category_id}</td>
                            <td class="setting__column">{$item.country}</td>
                            <td class="setting__column">{$item.price} руб.</td>
                            <td class="setting__column">{$item.descr|escape:"html"}</td>
                            <td class="setting__column">
                                <a href='read-product-info?id={$item.id}' class='btn btn-primary left-margin'>
                                    <span class='glyphicon glyphicon-list'></span> Просмотр
                                </a>

                                <a href='update-product-info?id={$item.id}' class='btn btn-info left-margin'>
                                    <span class='glyphicon glyphicon-edit'></span> Редактировать
                                </a>

                                <a href='delete_product_info.php?id={$item.id}' class='btn btn-danger delete-object'>
                                    <span class='glyphicon glyphicon-remove'></span> Удалить
                                </a>
                            </td>
                        <tr>
                        {/foreach}
                </table>
            {else}
                <div class='alert alert-info'>Товары не найдены.</div>
            {/if}
        </div>

    </main>
</body>
{include file='footer_admin.tpl'}

</html>