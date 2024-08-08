<?php
/* Smarty version 4.3.0, created on 2023-06-26 03:49:17
  from 'C:\OpenServer\domains\dipmed\template_engine\template\dir\product_info_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6498e08d2e9c84_04990841',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a006583df9393aeae68e1316db639835cf62507' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\product_info_view.tpl',
      1 => 1687464267,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:title_admin.tpl' => 1,
    'file:footer_admin.tpl' => 1,
  ),
),false)) {
function content_6498e08d2e9c84_04990841 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '8338342256498e08d2c97a5_34707025';
$_smarty_tpl->_subTemplateRender("file:title_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
    <main class="main__section admin__section">

        <div class="container">
            <div class="page-header">
                <h1>
                    Информация о товарах
                </h1>
            </div>
            <div class="left-button-margin">
                <a href="/admin" class="btn btn-default pull-left">На главную</a>
            </div>
            <div class="right-button-margin">
                <a href="/admin/create-product-info" class="btn btn-default pull-right">Добавить информацию о товаре</a>
            </div>
            <form role='search' action='/admin/search_product_info' class="search__form">
                <div class='input-group col-md-3 pull-left margin-right-1em search__input'>
                    <input type='text' class='form-control' placeholder='Введите название...' name='s' required />
                    <div class='input-group-btn'>";
                        <button class='btn btn-primary' type='submit'>
                            <i class='glyphicon glyphicon-search'></i></button>";
                    </div>
                </div>
            </form>
            <?php if ($_smarty_tpl->tpl_vars['num']->value > 0) {?>
                <table class="table table-hover table-responsive table-bordered">
                    <tr>
                        <th>ID продукта</th>
                        <th>Полное название</th>
                        <th>ID производителя</th>
                        <th>ID категории</th>
                        <th>Страна</th>
                        <th>Цена</th>
                        <th>Описание</th>
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
                            <td class="setting__column"><?php echo $_smarty_tpl->tpl_vars['item']->value['id_product'];?>
</td>
                            <td class="setting__column"><?php echo $_smarty_tpl->tpl_vars['item']->value['full_name'];?>
</td>
                            <td class="setting__column"><?php echo $_smarty_tpl->tpl_vars['item']->value['manufacturer_id'];?>
</td>
                            <td class="setting__column"><?php echo $_smarty_tpl->tpl_vars['item']->value['category_id'];?>
</td>
                            <td class="setting__column"><?php echo $_smarty_tpl->tpl_vars['item']->value['country'];?>
</td>
                            <td class="setting__column"><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
 руб.</td>
                            <td class="setting__column"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['item']->value['descr'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                            <td class="setting__column">
                                <a href='read-product-info?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
' class='btn btn-primary left-margin'>
                                    <span class='glyphicon glyphicon-list'></span> Просмотр
                                </a>

                                <a href='update-product-info?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
' class='btn btn-info left-margin'>
                                    <span class='glyphicon glyphicon-edit'></span> Редактировать
                                </a>

                                <a href='delete_product_info.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
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
