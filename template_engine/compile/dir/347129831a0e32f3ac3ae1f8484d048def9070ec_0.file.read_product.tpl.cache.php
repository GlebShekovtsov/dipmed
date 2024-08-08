<?php
/* Smarty version 4.3.0, created on 2023-06-13 16:43:01
  from 'C:\OpenServer\domains\dipmed\template_engine\template\dir\read_product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_648872653deb48_64532308',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '347129831a0e32f3ac3ae1f8484d048def9070ec' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\read_product.tpl',
      1 => 1671563397,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:title_admin.tpl' => 1,
    'file:footer_admin.tpl' => 1,
  ),
),false)) {
function content_648872653deb48_64532308 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '734676170648872653bd682_93029775';
$_smarty_tpl->_subTemplateRender("file:title_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
    <main class="main__section admin__section">

        <div class="container">

            <div class="page-header">
                <h1>Просмотр товара</h1>
            </div>
            <div class="right-button-margin">
                <a href="/admin/view-product" class="btn btn-default pull-right">Просмотр всего товара</a>
            </div>
        </div>
</body>
<?php $_smarty_tpl->_subTemplateRender('file:footer_admin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</html><?php }
}
