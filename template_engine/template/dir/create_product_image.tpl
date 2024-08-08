{include file="title_admin.tpl"}

<body>
    <main class="main__section admin__section">

        <div class="container">

            <div class="page-header">
                <h1>Создание карточки продукта</h1>
            </div>
            <div class="right-button-margin">
                <a href="/admin/view-product_images" class="btn btn-default float-end">Просмотреть всё</a>
            </div>
            {(empty($status)) ? '' : $status}
            <form action="/admin/create-product-image" enctype="multipart/form-data" method="post">

                <table class="table table-hover table-responsive table-bordered">

                    <tr>
                        <td>ID товара</td>
                        <td>
                            <select name="id_product" class="form-control">
                                {foreach from=$itemsProduct item=itemProd key=key name=name}
                                    <option value="{$itemProd.id}">{$itemProd.id} - {$itemProd.name}</option>
                                {/foreach}
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Изображение</td>
                        <td><input type="file" name="img[]" multiple></td>
                    </tr>
                    <tr>
                        <td>Действия</td>
                        <td>
                            <button type="submit" class="btn btn-primary">Создать</button>
                        </td>
                    </tr>

                </table>
            </form>
        </div>

    </main>
</body>
{include file='footer_admin.tpl'}

</html>