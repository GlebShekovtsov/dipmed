<?php
/* Smarty version 4.3.0, created on 2022-12-22 00:20:36
  from 'C:\OpenServer\domains\dipmed\template_engine\template\dir\read_order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a378a49ec615_14930253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a360cf1d64d3c1e37105118afd71af68077ffd6' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\read_order.tpl',
      1 => 1671406969,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:title_admin.tpl' => 1,
    'file:footer_admin.tpl' => 1,
  ),
),false)) {
function content_63a378a49ec615_14930253 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '137048477463a378a49cf8d5_73844383';
$_smarty_tpl->_subTemplateRender("file:title_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
    <main class="main__section admin__section">

        <div class="container">

            <div class="page-header">
                <h1>Просмотр карточки заказа</h1>
            </div>
            <div class="right-button-margin">
                <a href="/admin/view-order" class="btn btn-default pull-right">Просмотр всех заказов</a>
            </div>
            <table class="table table-hover table-responsive table-bordered">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                    <tr>
                        <td>ФИО</td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['item']->value['fio'];?>

                        </td>
                    </tr>
                    <tr>
                        <td>Пол</td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['item']->value['gender'];?>

                        </td>
                    </tr>
                    <tr>
                        <td>E-mail</td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>

                        </td>
                    </tr>
                    <tr>
                        <td>Номер телефона</td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['item']->value['telnum'];?>

                        </td>
                    </tr>
                    <tr>
                        <td>Сообщение</td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['item']->value['message'];?>

                        </td>
                    </tr>
                    <tr>
                        <td>Создано</td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['item']->value['created'];?>

                        </td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        </div>
</body>
<?php $_smarty_tpl->_subTemplateRender('file:footer_admin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</html><?php }
}
