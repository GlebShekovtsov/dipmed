<?php
/* Smarty version 4.3.0, created on 2023-06-26 03:49:40
  from 'C:\OpenServer\domains\dipmed\template_engine\template\dir\create_product_image.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6498e0a4555c47_40071281',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b28e91253657fe0528948af7a4aef0de4ace6618' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\create_product_image.tpl',
      1 => 1687035026,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:title_admin.tpl' => 1,
    'file:footer_admin.tpl' => 1,
  ),
),false)) {
function content_6498e0a4555c47_40071281 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '8167616176498e0a453b581_51757520';
$_smarty_tpl->_subTemplateRender("file:title_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
    <main class="main__section admin__section">

        <div class="container">

            <div class="page-header">
                <h1>Создание карточки продукта</h1>
            </div>
            <div class="right-button-margin">
                <a href="/admin/view-product_images" class="btn btn-default float-end">Просмотреть всё</a>
            </div>
            <?php echo empty($_smarty_tpl->tpl_vars['status']->value) ? '' : $_smarty_tpl->tpl_vars['status']->value;?>

            <form action="/admin/create-product-image" enctype="multipart/form-data" method="post">

                <table class="table table-hover table-responsive table-bordered">

                    <tr>
                        <td>ID товара</td>
                        <td>
                            <select name="id_product" class="form-control">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['itemsProduct']->value, 'itemProd', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['itemProd']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['itemProd']->value) {
$_smarty_tpl->tpl_vars['itemProd']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['itemProd']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemProd']->value['id'];?>
 - <?php echo $_smarty_tpl->tpl_vars['itemProd']->value['name'];?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Изображение</td>
                        <td><input type="file" name="img[]" multiple></td>
                    </tr>
                    <tr>
                        <td>Действия</td>
                        <td>
                            <button type="submit" class="btn btn-primary">Создать</button>
                        </td>
                    </tr>

                </table>
            </form>
        </div>

    </main>
</body>
<?php $_smarty_tpl->_subTemplateRender('file:footer_admin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</html><?php }
}
