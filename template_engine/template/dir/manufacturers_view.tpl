{include file="title_admin.tpl"}

<body>
    <main class="main__section admin__section">

        <div class="container">
            <div class="page-header">
                <h1>
                    Производители
                </h1>
            </div>
            <div class="left-button-margin">
                <a href="/admin" class="btn btn-default pull-left">На главную</a>
            </div>
            <div class="right-button-margin">
                <a href="/admin/create-manufacturer" class="btn btn-default pull-right">Добавить производителя</a>
            </div>
            {if $num > 0}
                <table class="table table-hover table-responsive table-bordered">
                    <tr>
                        <th>Производитель</th>
                        <th>Действия</th>
                    </tr>


                    {foreach from=$items item=item key=key name=name}
                        <tr>
                            <td class="setting__column">{$item.man_name}</td>
                            <td class="setting__column">
                                <a href='read-manufacturer?id={$item.id}' class='btn btn-primary left-margin'>
                                    <span class='glyphicon glyphicon-list'></span> Просмотр
                                </a>

                                <a href='update-manufacturer?id={$item.id}' class='btn btn-info left-margin'>
                                    <span class='glyphicon glyphicon-edit'></span> Редактировать
                                </a>

                                <a href='delete_manufacturer.php?id={$item.id}' class='btn btn-danger delete-object'>
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