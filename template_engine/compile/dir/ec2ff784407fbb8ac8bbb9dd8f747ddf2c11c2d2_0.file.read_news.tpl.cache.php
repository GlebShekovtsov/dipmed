<?php
/* Smarty version 4.3.0, created on 2022-12-21 19:10:48
  from 'C:\OpenServer\domains\dipmed\template_engine\template\dir\read_news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a330084bec11_37416336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec2ff784407fbb8ac8bbb9dd8f747ddf2c11c2d2' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\read_news.tpl',
      1 => 1671453452,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:title_admin.tpl' => 1,
    'file:footer_admin.tpl' => 1,
  ),
),false)) {
function content_63a330084bec11_37416336 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '165505581563a330084a6db2_72296983';
$_smarty_tpl->_subTemplateRender("file:title_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
    <main class="main__section admin__section">

        <div class="container">

            <div class="page-header">
                <h1>Просмотр новости</h1>
            </div>
            <div class="right-button-margin">
                <a href="/admin/view-news" class="btn btn-default pull-right">Просмотр всех новостей</a>
            </div>
        </div>
</body>
<?php $_smarty_tpl->_subTemplateRender('file:footer_admin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</html><?php }
}
