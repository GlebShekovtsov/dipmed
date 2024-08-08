<?php
/* Smarty version 4.3.0, created on 2023-06-14 01:49:55
  from 'C:\OpenServer\domains\dipmed\template_engine\template\dir\update_product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6488f2939daab6_62254725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7dcc5e12b803af6b57b707cdc34ba56470c10ae8' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\update_product.tpl',
      1 => 1671563762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:title_admin.tpl' => 1,
    'file:footer_admin.tpl' => 1,
  ),
),false)) {
function content_6488f2939daab6_62254725 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '16044359896488f2939bebd0_58939436';
$_smarty_tpl->_subTemplateRender("file:title_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
    <main class="main__section admin__section">

        <div class="container">

            <div class="page-header">
                <h1>Обновление товара</h1>
            </div>
            <div class="right-button-margin">
                <a href="/admin/view-product" class="btn btn-default pull-right">Просмотр всего товара</a>
            </div>

</body>
<?php $_smarty_tpl->_subTemplateRender('file:footer_admin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</html><?php }
}
