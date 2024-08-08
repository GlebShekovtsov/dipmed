{include file="title_admin.tpl"}

<body>
    <main class="main__section admin__section">

        <div class="container">
            <div class="page-header">
                <h1>
                    Новости
                </h1>
            </div>
            <div class="left-button-margin">
                <a href="/admin" class="btn btn-default pull-left">На главную</a>
            </div>
            <div class="right-button-margin">
                <a href="/admin/create-news" class="btn btn-default pull-right">Добавить новость</a>
            </div>
            <form role='search' action='/admin/search_news' class="search__form">
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
                        <th>Заголовок</th>
                        <th>Текст</th>
                        <th>Количество просмотров</th>
                        <th>Дата</th>

                    </tr>


                    {foreach from=$items item=item key=key name=name}
                        <tr>
                            <td>{$item.header}</td>
                            <td>{$item.text}</td>
                            <td>{$item.views}</td>
                            <td>{$item.date|date_format:"%e.%m.%Y"}</td>

                            <td>
                                <a href='read-news?id={$item.id}' class='btn btn-primary left-margin'>
                                    <span class='glyphicon glyphicon-list'></span> Просмотр
                                </a>

                                <a href='update-news?id={$item.id}' class='btn btn-info left-margin'>
                                    <span class='glyphicon glyphicon-edit'></span> Редактировать
                                </a>

                                <a href='delete_news.php?id={$item.id}' class='btn btn-danger delete-object'>
                                    <span class='glyphicon glyphicon-remove'></span> Удалить
                                </a>
                            </td>
                        <tr>
                        {/foreach}
                </table>
            {else}
                <div class='alert alert-info'>Новости не найдены.</div>
            {/if}
        </div>

    </main>
</body>
{include file='footer_admin.tpl'}

</html>