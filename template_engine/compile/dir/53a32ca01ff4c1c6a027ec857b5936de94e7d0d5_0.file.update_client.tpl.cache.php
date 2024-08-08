<?php
/* Smarty version 4.3.0, created on 2022-12-19 02:53:28
  from 'C:\OpenServer\domains\dipmed\template_engine\template\dir\update_client.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_639fa7f8d36956_74754627',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53a32ca01ff4c1c6a027ec857b5936de94e7d0d5' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\update_client.tpl',
      1 => 1671406749,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:title_admin.tpl' => 1,
    'file:footer_admin.tpl' => 1,
  ),
),false)) {
function content_639fa7f8d36956_74754627 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '8844059639fa7f8d1f929_93903234';
$_smarty_tpl->_subTemplateRender("file:title_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
    <main class="main__section admin__section">

        <div class="container">

            <div class="page-header">
                <h1>Обновление карточки клиента</h1>
            </div>
            <div class="right-button-margin">
                <a href="/admin/view-client" class="btn btn-default pull-right">Просмотр всех клиентов</a>
            </div>

</body>
<?php $_smarty_tpl->_subTemplateRender('file:footer_admin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</html><?php }
}
