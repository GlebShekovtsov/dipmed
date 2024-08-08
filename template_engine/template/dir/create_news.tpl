{include file="title_admin.tpl"}

<body>
    <main class="main__section admin__section">

        <div class="container">

            <div class="page-header">
                <h1>Создание новости</h1>
            </div>
            <div class="right-button-margin">
                <a href="/admin/view-news" class="btn btn-default float-end">Просмотреть всё</a>
            </div>
            {(empty($status)) ? '' : $status}
            <form action="/admin/create-news" enctype="multipart/form-data" method="post">

                <table class="table table-hover table-responsive table-bordered">
                    <input type="hidden" name="views" value="0">
                    <tr>
                        <td>Заголовок</td>
                        <td><input type="text" name="header" class="form-control" /></td>
                    </tr>
                    <tr>
                        <td>Текст новости</td>
                        <td><textarea name="text" class="form-control"></textarea></td>
                    </tr>

                    <tr>
                        <td>Изображение</td>
                        <td><input type="file" name="img" /></td>
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