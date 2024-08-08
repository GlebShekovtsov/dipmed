<?php
/* Smarty version 4.3.0, created on 2023-06-19 02:24:33
  from 'C:\OpenServer\domains\dipmed\template_engine\template\dir\read_offer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_648f9231e6e859_88321524',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef90fa7b4ecd536304a68d61d9af206ed05d3785' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\read_offer.tpl',
      1 => 1687129792,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:title_admin.tpl' => 1,
    'file:footer_admin.tpl' => 1,
  ),
),false)) {
function content_648f9231e6e859_88321524 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1759915111648f9231e53720_04845439';
$_smarty_tpl->_subTemplateRender("file:title_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                    <tr>
                        <td>ID товара</td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['item']->value['product_id'];?>
 - <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

                        </td>
                    </tr>
                    <tr>
                        <td>Номер телефона</td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['item']->value['phone_num'];?>

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
