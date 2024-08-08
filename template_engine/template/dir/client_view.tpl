{include file="title_admin.tpl"}

<body>
    <main class="main__section admin__section">

        <div class="container">
            <div class="page-header">
                <h1>
                    Клиенты
                </h1>
            </div>
            <div class="right-button-margin">
                <a href="/admin" class="btn btn-default pull-right">На главную</a>
            </div>
            {if $num > 0}
                <table class="table table-hover table-responsive table-bordered">
                    <tr>
                        <th>ФИО</th>
                        <th>Почта</th>
                        <th>Номер телефона</th>
                        <th>Клиент с</th>
                        <th>Действия</th>
                    </tr>

                    {foreach from=$items item=item key=key name=name}
                        <tr>
                            <td>{$item.fio}</td>
                            <td>{$item.email}</td>
                            <td>{$item.telnum}</td>
                            <td>{$item.date|date_format:"%e.%m.%Y"}</td>
                            <td>
                                <a href='read-client?id={$item.id}' class='btn btn-primary left-margin'>
                                    <span class='glyphicon glyphicon-list'></span> Просмотр
                                </a>

                                <a href='update-client?id={$item.id}' class='btn btn-info left-margin'>
                                    <span class='glyphicon glyphicon-edit'></span> Редактировать
                                </a>
                                <a href='delete_client.php?id={$item.id}' class='btn btn-danger delete-object'
                                    id="delete-object">
                                    <span class='glyphicon glyphicon-remove'></span> Удалить
                                </a>
                            </td>
                        <tr>
                        {/foreach}
                </table>
            {else}
                <div class='alert alert-info'>Клиенты не найдены</div>
            {/if}
        </div>
    </main>
</body>
{include file='footer_admin.tpl'}

</html>