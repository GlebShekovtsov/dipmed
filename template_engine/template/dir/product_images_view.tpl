{include file="title_admin.tpl"}

<body>
    <main class="main__section admin__section">

        <div class="container">
            <div class="page-header">
                <h1>
                    Изображения товаров
                </h1>
            </div>
            <div class="left-button-margin">
                <a href="/admin" class="btn btn-default pull-left">На главную</a>
            </div>
            <div class="right-button-margin">
                <a href="/admin/create-product-image" class="btn btn-default pull-right">Добавить изображения</a>
            </div>
            {if $num > 0}
                <table class="table table-hover table-responsive table-bordered">
                    <tr>
                        <th>ID продукта</th>
                        <th>Изображение</th>
                    </tr>


                    {foreach from=$items item=item key=key name=name}
                        <tr>
                            <td class="setting__column">{$item.id_product} - {$item.name}</td>
                            <td class="setting__column"><img class="prod_image" src="../uploads/{$item.img}" alt=""></td>

                            <td class="setting__column">
                                <a href='delete_product_image.php?id={$item.id}' class='btn btn-danger delete-object'>
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