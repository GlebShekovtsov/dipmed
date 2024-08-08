<?php
/* Smarty version 4.3.0, created on 2023-06-26 03:49:15
  from 'C:\OpenServer\domains\dipmed\template_engine\template\dir\create_product_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6498e08b6887b7_43440414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db743f3e828fbfed0ca59ceb567df1d0c0a07704' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\create_product_info.tpl',
      1 => 1686679517,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:title_admin.tpl' => 1,
    'file:footer_admin.tpl' => 1,
  ),
),false)) {
function content_6498e08b6887b7_43440414 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '20869699226498e08b66b321_06959215';
$_smarty_tpl->_subTemplateRender("file:title_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
    <main class="main__section admin__section">

        <div class="container">

            <div class="page-header">
                <h1>Создание карточки продукта</h1>
            </div>
            <div class="right-button-margin">
                <a href="/admin/view-product_info" class="btn btn-default float-end">Просмотреть всё</a>
            </div>
            <?php echo empty($_smarty_tpl->tpl_vars['status']->value) ? '' : $_smarty_tpl->tpl_vars['status']->value;?>

            <form action="/admin/create-product-info" enctype="multipart/form-data" method="post">

                <h3 class="product__header">ID Товара</h3>
                <select name="id_product" class="form-control settings__control">
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
 - <?php echo $_smarty_tpl->tpl_vars['itemProd']->value['category'];?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
                <h3 class="product__header">Полное название товара</h3>
                <input type="text" name="full_name" class="form-control settings__input" />
                <h3 class="product__header">Страна</h3>
                <input type="text" name="country" class="form-control settings__input" />
                <h3 class="product__header">Цена</h3>
                <input type="text" name="price" class="form-control settings__input" />
                <h3 class="product__header">Производитель</h3>
                <select name="manufacturer_id" class="form-control settings__control">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['itemsManufacturer']->value, 'itemMan', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['itemMan']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['itemMan']->value) {
$_smarty_tpl->tpl_vars['itemMan']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['itemMan']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemMan']->value['id'];?>
 - <?php echo $_smarty_tpl->tpl_vars['itemMan']->value['man_name'];?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
                <h3 class="product__header">Категория</h3>
                <select name="category_id" class="form-control settings__control">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['itemsCategory']->value, 'itemCat', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['itemCat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['itemCat']->value) {
$_smarty_tpl->tpl_vars['itemCat']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['itemCat']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemCat']->value['id'];?>
 - <?php echo $_smarty_tpl->tpl_vars['itemCat']->value['name'];?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
                <div class="message__wrapper">
                    <h3 class="product__header">Описание</h3>
                    <div class="buttons__wrapper">
                        <a href="#" id="button-p">Параграф</a>
                        <a href="#" id="button-ul">Список</a>
                        <a href="#" id="button-li">Элемент списка</a>
                        <a href="#" id="button-h">Заголовок</a>
                    </div>
                    <textarea name="descr" class="form-control settings__area" id="control"></textarea>

                </div>
                <button type="submit" class="btn btn-primary">Создать</button>
            </form>
        </div>

    </main>
</body>
<?php $_smarty_tpl->_subTemplateRender('file:footer_admin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
>
    function addTag(open, close) {
        var control = $('#control')[0];
        var start = control.selectionStart;
        var end = control.selectionEnd;
        if (start != end) {
            var text = $(control).val();
            $(control).val(text.substring(0, start) + open + text.substring(start, end) + close + text.substring(end));
            $(control).focus();
            var sel = end + (open + close).length;
            control.setSelectionRange(sel, sel);
        }
        return false;
    }
    // Параграф
    $('#button-p').click(function() {
        return addTag('<p class="product-below-descr__text">', '</p>');
    });
    $('#button-ul').click(function() {
        return addTag('<ul class="product-below-descr__list descr-list">', '</ul>');
    });
    $('#button-li').click(function() {
        return addTag('<li class="descr-list__item">', '</li>');
    });
    $('#button-h').click(function() {
        return addTag('<h3 class="product-below-descr__header">', '</h3>');
    });
<?php echo '</script'; ?>
>

</html><?php }
}
