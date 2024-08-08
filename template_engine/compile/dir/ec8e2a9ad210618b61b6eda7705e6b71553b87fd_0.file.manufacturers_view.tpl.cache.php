<?php
/* Smarty version 4.3.0, created on 2023-06-19 01:50:54
  from 'C:\OpenServer\domains\dipmed\template_engine\template\dir\manufacturers_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_648f8a4eca88c0_15966580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec8e2a9ad210618b61b6eda7705e6b71553b87fd' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\manufacturers_view.tpl',
      1 => 1686695425,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:title_admin.tpl' => 1,
    'file:footer_admin.tpl' => 1,
  ),
),false)) {
function content_648f8a4eca88c0_15966580 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '960644859648f8a4ec8b1d3_27486905';
$_smarty_tpl->_subTemplateRender("file:title_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
            <?php if ($_smarty_tpl->tpl_vars['num']->value > 0) {?>
                <table class="table table-hover table-responsive table-bordered">
                    <tr>
                        <th>Производитель</th>
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
                            <td class="setting__column"><?php echo $_smarty_tpl->tpl_vars['item']->value['man_name'];?>
</td>
                            <td class="setting__column">
                                <a href='read-manufacturer?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
' class='btn btn-primary left-margin'>
                                    <span class='glyphicon glyphicon-list'></span> Просмотр
                                </a>

                                <a href='update-manufacturer?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
' class='btn btn-info left-margin'>
                                    <span class='glyphicon glyphicon-edit'></span> Редактировать
                                </a>

                                <a href='delete_manufacturer.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
' class='btn btn-danger delete-object'>
                                    <span class='glyphicon glyphicon-remove'></span> Удалить
                                </a>
                            </td>
                        <tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>
            <?php } else { ?>
                <div class='alert alert-info'>Товары не найдены.</div>
            <?php }?>
        </div>

    </main>
</body>
<?php $_smarty_tpl->_subTemplateRender('file:footer_admin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</html><?php }
}
