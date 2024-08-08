<?php
/* Smarty version 4.3.0, created on 2023-06-26 03:49:20
  from 'C:\OpenServer\domains\dipmed\template_engine\template\dir\order_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6498e090622f41_30343709',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16854e2735f73aac2434fa518ba34956cf29118a' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\order_view.tpl',
      1 => 1687472714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:title_admin.tpl' => 1,
    'file:footer_admin.tpl' => 1,
  ),
),false)) {
function content_6498e090622f41_30343709 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OpenServer\\domains\\dipmed\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->compiled->nocache_hash = '10348173316498e090603428_27254948';
$_smarty_tpl->_subTemplateRender("file:title_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
            <?php if ($_smarty_tpl->tpl_vars['num']->value > 0) {?>
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


                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['fio'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['telnum'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['message'];?>
</td>
                            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['created'],"%e.%m.%Y %R");?>
</td>
                            <td>
                                <form method="post" class="order-form" id="order-form">
                                    <input type="hidden" name="fio" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['fio'];?>
">
                                    <input type="hidden" name="telnum" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['telnum'];?>
">
                                    <input type="hidden" name="email" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
">


                                    <a href='read-order?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
' class='btn btn-primary left-margin'>
                                        <span class='glyphicon glyphicon-list'></span> Просмотр
                                    </a>

                                    <button class="btn btn-info left-margin">
                                        <span class='glyphicon glyphicon-edit'></span> Добавить клиента
                                    </button>

                                    <a href='delete_order.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
' class='btn btn-danger delete-object'
                                        id="delete-object">
                                        <span class='glyphicon glyphicon-remove'></span> Удалить
                                    </a>
                                </form>

                            </td>
                        <tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>
            <?php } else { ?>
                <div class='alert alert-info'>Заявки не найдены</div>
            <?php }?>
        </div>

    </main>
</body>
<?php echo '<script'; ?>
>
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
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender('file:footer_admin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</html><?php }
}
