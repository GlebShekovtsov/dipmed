<?php
/* Smarty version 4.3.0, created on 2023-06-14 01:55:19
  from 'C:\OpenServer\domains\dipmed\template_engine\template\dir\update_manufacturer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6488f3d7c2ee74_02749906',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24329f91fabbbcd487da59cc4c261e446411b113' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\update_manufacturer.tpl',
      1 => 1686696099,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:title_admin.tpl' => 1,
    'file:footer_admin.tpl' => 1,
  ),
),false)) {
function content_6488f3d7c2ee74_02749906 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '10365634906488f3d7c18f81_93394571';
$_smarty_tpl->_subTemplateRender("file:title_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
    <main class="main__section admin__section">

        <div class="container">

            <div class="page-header">
                <h1>Обновление производителя</h1>
            </div>
            <div class="right-button-margin">
                <a href="/admin/view-manufacturers" class="btn btn-default pull-right">Просмотр всех производителей</a>
            </div>

</body>
<?php $_smarty_tpl->_subTemplateRender('file:footer_admin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</html><?php }
}
