<?php
/* Smarty version 4.3.0, created on 2023-06-22 23:55:02
  from 'C:\OpenServer\domains\dipmed\template_engine\template\dir\update_product_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6494b5266dffa1_46710794',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33e6fdb103d8d825bd075b427628ae9127428384' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\update_product_info.tpl',
      1 => 1686687816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:title_admin.tpl' => 1,
    'file:footer_admin.tpl' => 1,
  ),
),false)) {
function content_6494b5266dffa1_46710794 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2948505366494b5266ca444_25023359';
$_smarty_tpl->_subTemplateRender("file:title_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
    <main class="main__section admin__section">

        <div class="container">

            <div class="page-header">
                <h1>Обновление информации товара</h1>
            </div>
            <div class="right-button-margin">
                <a href="/admin/view-product_info" class="btn btn-default pull-right">Просмотр всего товара</a>
            </div>

</body>
<?php $_smarty_tpl->_subTemplateRender('file:footer_admin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</html><?php }
}
