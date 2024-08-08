{include file="title_admin.tpl"}

<body>
    <main class="main__section admin__section">

        <div class="container">

            <div class="page-header">
                <h1>Создание карточки продукта</h1>
            </div>
            <div class="right-button-margin">
                <a href="/admin/view-product" class="btn btn-default float-end">Просмотреть всё</a>
            </div>
            {(empty($status)) ? '' : $status}
            <form action="/admin/create-product" enctype="multipart/form-data" method="post">

                <table class="table table-hover table-responsive table-bordered">

                    <tr>
                        <td>Название</td>
                        <td><input type="text" name="name" class="form-control" /></td>
                    </tr>
                    <tr>
                        <td>Категория</td>
                        <td>
                            <select name="category_id" class="form-control">
                                {foreach from=$itemsCategory item=itemCat key=key name=name}
                                    <option value="{$itemCat.name}">{$itemCat.name}</option>
                                {/foreach}
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Изображение</td>
                        <td><input type="file" name="img"></td>

                    </tr>
                    <tr>
                        <td>Ссылка</td>
                        <td><input type="text" name="link" class="form-control" /></td>
                    </tr>

                    <tr>
                        <td></td>
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