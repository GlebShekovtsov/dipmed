{include file="title_admin.tpl"}

<body>
    <main class="main__section admin__section">

        <div class="container">

            <div class="page-header">
                <h1>Просмотр КП</h1>
            </div>
            <div class="right-button-margin">
                <a href="/admin/view-offers" class="btn btn-default pull-right">Просмотр всех КП</a>
            </div>
            <table class="table table-hover table-responsive table-bordered">
                {foreach from=$items item=item key=key name=name}
                    <tr>
                        <td>ID товара</td>
                        <td>
                            {$item.product_id} - {$item.name}
                        </td>
                    </tr>
                    <tr>
                        <td>Номер телефона</td>
                        <td>
                            {$item.phone_num}
                        </td>
                    </tr>
                    <tr>
                        <td>Сообщение</td>
                        <td>
                            {$item.message}
                        </td>
                    </tr>
                    <tr>
                        <td>Создано</td>
                        <td>
                            {$item.created}
                        </td>
                    </tr>
                {/foreach}
            </table>
        </div>
</body>
{include file='footer_admin.tpl'}

</html>