<?php
/* Smarty version 4.3.0, created on 2023-06-26 03:50:29
  from 'C:\OpenServer\domains\dipmed\template_engine\template\dir\product_images_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6498e0d53fdfa5_97668492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2be09b30e2d37c1a951d5b5b1b1bd478ba96d6c' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\product_images_view.tpl',
      1 => 1687118658,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:title_admin.tpl' => 1,
    'file:footer_admin.tpl' => 1,
  ),
),false)) {
function content_6498e0d53fdfa5_97668492 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '12851569796498e0d53e2287_97893923';
$_smarty_tpl->_subTemplateRender("file:title_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
    <main class="main__section admin__section">

        <div class="container">
            <div class="page-header">
                <h1>
                    Изображения товаров
                </h1>
            </div>
            <div class="left-button-margin">
                <a href="/admin" class="btn btn-default pull-left">На главную</a>
            </div>
            <div class="right-button-margin">
                <a href="/admin/create-product-image" class="btn btn-default pull-right">Добавить изображения</a>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['num']->value > 0) {?>
                <table class="table table-hover table-responsive table-bordered">
                    <tr>
                        <th>ID продукта</th>
                        <th>Изображение</th>
                    </tr>


                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                        <tr>
                            <td class="setting__column"><?php echo $_smarty_tpl->tpl_vars['item']->value['id_product'];?>
 - <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
                            <td class="setting__column"><img class="prod_image" src="../uploads/<?php echo $_smarty_tpl->tpl_vars['item']->value['img'];?>
" alt=""></td>

                            <td class="setting__column">
                                <a href='delete_product_image.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
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
