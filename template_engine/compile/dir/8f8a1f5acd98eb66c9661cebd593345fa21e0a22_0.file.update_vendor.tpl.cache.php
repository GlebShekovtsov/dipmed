<?php
/* Smarty version 4.3.0, created on 2023-06-22 23:42:29
  from 'C:\OpenServer\domains\dipmed\template_engine\template\dir\update_vendor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6494b235b68271_58974775',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f8a1f5acd98eb66c9661cebd593345fa21e0a22' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\update_vendor.tpl',
      1 => 1671407743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:title_admin.tpl' => 1,
    'file:footer_admin.tpl' => 1,
  ),
),false)) {
function content_6494b235b68271_58974775 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '12007316676494b235b43125_67616785';
$_smarty_tpl->_subTemplateRender("file:title_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
    <main class="main__section admin__section">

        <div class="container">

            <div class="page-header">
                <h1>Обновление карточки партнера</h1>
            </div>
            <div class="right-button-margin">
                <a href="/admin/view-vendor" class="btn btn-default pull-right">Просмотр всех партнеров</a>
            </div>

</body>
<?php $_smarty_tpl->_subTemplateRender('file:footer_admin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</html><?php }
}
