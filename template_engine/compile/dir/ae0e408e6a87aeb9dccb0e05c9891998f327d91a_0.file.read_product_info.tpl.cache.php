<?php
/* Smarty version 4.3.0, created on 2023-06-22 23:54:59
  from 'C:\OpenServer\domains\dipmed\template_engine\template\dir\read_product_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6494b523745ce7_28223232',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae0e408e6a87aeb9dccb0e05c9891998f327d91a' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\read_product_info.tpl',
      1 => 1686665752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:title_admin.tpl' => 1,
    'file:footer_admin.tpl' => 1,
  ),
),false)) {
function content_6494b523745ce7_28223232 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '10982462676494b52372f721_26064291';
$_smarty_tpl->_subTemplateRender("file:title_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
    <main class="main__section admin__section">

        <div class="container">

            <div class="page-header">
                <h1>Просмотр информации о товаре</h1>
            </div>
            <div class="right-button-margin">
                <a href="/admin/view-product_info" class="btn btn-default pull-right">Просмотр всего товара</a>
            </div>
        </div>
</body>
<?php $_smarty_tpl->_subTemplateRender('file:footer_admin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</html><?php }
}
