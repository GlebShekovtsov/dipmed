<?php
/* Smarty version 4.3.0, created on 2022-12-22 00:16:24
  from 'C:\OpenServer\domains\dipmed\template_engine\template\dir\read_client.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a377a8eb96f2_04705665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3d7396d74fe1620624f238f9ae90a21a7d7a90a' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\read_client.tpl',
      1 => 1671407527,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:title_admin.tpl' => 1,
    'file:footer_admin.tpl' => 1,
  ),
),false)) {
function content_63a377a8eb96f2_04705665 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '184298087163a377a8ea1453_93010561';
$_smarty_tpl->_subTemplateRender("file:title_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
    <main class="main__section admin__section">

        <div class="container">

            <div class="page-header">
                <h1>Просмотр карточки клиента</h1>
            </div>
            <div class="right-button-margin">
                <a href="/admin/view-client" class="btn btn-default pull-right">Просмотр всех клиентов</a>
            </div>
        </div>
</body>
<?php $_smarty_tpl->_subTemplateRender('file:footer_admin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</html><?php }
}
