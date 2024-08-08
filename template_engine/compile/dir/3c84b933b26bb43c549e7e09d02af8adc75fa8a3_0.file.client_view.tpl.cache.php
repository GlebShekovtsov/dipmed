<?php
/* Smarty version 4.3.0, created on 2023-06-12 02:32:51
  from 'C:\OpenServer\domains\dipmed\template_engine\template\dir\client_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_648659a379b841_02147034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c84b933b26bb43c549e7e09d02af8adc75fa8a3' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\client_view.tpl',
      1 => 1671404620,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:title_admin.tpl' => 1,
    'file:footer_admin.tpl' => 1,
  ),
),false)) {
function content_648659a379b841_02147034 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OpenServer\\domains\\dipmed\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->compiled->nocache_hash = '1720963790648659a36a57e8_46892890';
$_smarty_tpl->_subTemplateRender("file:title_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
            <?php if ($_smarty_tpl->tpl_vars['num']->value > 0) {?>
                <table class="table table-hover table-responsive table-bordered">
                    <tr>
                        <th>ФИО</th>
                        <th>Почта</th>
                        <th>Номер телефона</th>
                        <th>Клиент с</th>
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
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['fio'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['telnum'];?>
</td>
                            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['date'],"%e.%m.%Y");?>
</td>
                            <td>
                                <a href='read-client?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
' class='btn btn-primary left-margin'>
                                    <span class='glyphicon glyphicon-list'></span> Просмотр
                                </a>

                                <a href='update-client?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
' class='btn btn-info left-margin'>
                                    <span class='glyphicon glyphicon-edit'></span> Редактировать
                                </a>
                                <a href='delete_client.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
' class='btn btn-danger delete-object'
                                    id="delete-object">
                                    <span class='glyphicon glyphicon-remove'></span> Удалить
                                </a>
                            </td>
                        <tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>
            <?php } else { ?>
                <div class='alert alert-info'>Клиенты не найдены</div>
            <?php }?>
        </div>
    </main>
</body>
<?php $_smarty_tpl->_subTemplateRender('file:footer_admin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</html><?php }
}
