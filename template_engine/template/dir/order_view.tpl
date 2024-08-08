{include file="title_admin.tpl"}

<body>
    <main class="main__section admin__section">

        <div class="container">
            <div class="page-header">
                <h1>
                    Заявки
                </h1>
            </div>
            <div class="right-button-margin">
                <a href="/admin" class="btn btn-default pull-right">На главную</a>
            </div>
            <form role='search' action='/admin/search_orders' class="search__form">
                <div class='input-group col-md-3 pull-left margin-right-1em search__input'>
                    <input type='text' class='form-control' placeholder='Введите название...' name='s' required />
                    <div class='input-group-btn'>
                        <button class='btn btn-primary' type='submit'>
                            <i class='glyphicon glyphicon-search'></i></button>";
                    </div>
                </div>
            </form>
            {if $num > 0}
                <table class="table table-hover table-responsive table-bordered">
                    <tr>
                        <th>Номер заявки</th>
                        <th>ФИО</th>
                        <th>Почта</th>
                        <th>Номер телефона</th>
                        <th>Сообщение</th>
                        <th>Создана</th>
                        <th>Действия</th>
                    </tr>


                    {foreach from=$items item=item key=key name=name}
                        <tr>
                            <td>{$item.id}</td>
                            <td>{$item.fio}</td>
                            <td>{$item.email}</td>
                            <td>{$item.telnum}</td>
                            <td>{$item.message}</td>
                            <td>{$item.created|date_format:"%e.%m.%Y %R"}</td>
                            <td>
                                <form method="post" class="order-form" id="order-form">
                                    <input type="hidden" name="fio" value="{$item.fio}">
                                    <input type="hidden" name="telnum" value="{$item.telnum}">
                                    <input type="hidden" name="email" value="{$item.email}">


                                    <a href='read-order?id={$item.id}' class='btn btn-primary left-margin'>
                                        <span class='glyphicon glyphicon-list'></span> Просмотр
                                    </a>

                                    <button class="btn btn-info left-margin">
                                        <span class='glyphicon glyphicon-edit'></span> Добавить клиента
                                    </button>

                                    <a href='delete_order.php?id={$item.id}' class='btn btn-danger delete-object'
                                        id="delete-object">
                                        <span class='glyphicon glyphicon-remove'></span> Удалить
                                    </a>
                                </form>

                            </td>
                        <tr>
                        {/foreach}
                </table>
            {else}
                <div class='alert alert-info'>Заявки не найдены</div>
            {/if}
        </div>

    </main>
</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('order-form').addEventListener('submit', getAjaxOrder);
        //Если форма отправлена
        function getAjaxOrder(e) {
            e.preventDefault();

            var xhr = new XMLHttpRequest(); //Инициализируем API


            //Инициализируем запрос
            //Путь до файла обработчика(с расширением если без рутинговой библиотеки)
            xhr.open('POST', '/objects/create-client', true);
            //Обрабатываем запрос
            xhr.onreadystatechange = function() {
                //Если состояние запроса DONE(4) и код состояния DONE(200) то
                if (xhr.readyState == 4 & xhr.status == 200) {
                    console.log(xhr.responseText);
                    bootbox.alert({
                        message: "Клиент добавлен",
                        centerVertical: true
                    });
                } else if (xhr.onerror == 404) {
                    console.log('Error');

                }
            }
            xhr.send(new FormData(e.target));
        }
    });
</script>
{include file='footer_admin.tpl'}

</html>