<?php
/* Smarty version 4.3.0, created on 2023-06-14 02:09:22
  from 'C:\OpenServer\domains\dipmed\template_engine\template\dir\read_manufacturer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6488f722d737f6_13215733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '825e8ec7dbd426bddc3d5c04697d3f622c845956' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\read_manufacturer.tpl',
      1 => 1686694924,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:title_admin.tpl' => 1,
    'file:footer_admin.tpl' => 1,
  ),
),false)) {
function content_6488f722d737f6_13215733 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '20901498886488f722d5e506_40526650';
$_smarty_tpl->_subTemplateRender("file:title_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
    <main class="main__section admin__section">

        <div class="container">

            <div class="page-header">
                <h1>Производители</h1>
            </div>
            <div class="right-button-margin">
                <a href="/admin/view-manufacturers" class="btn btn-default pull-right">Просмотр всех производителей</a>
            </div>
        </div>
</body>
<?php $_smarty_tpl->_subTemplateRender('file:footer_admin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</html><?php }
}
