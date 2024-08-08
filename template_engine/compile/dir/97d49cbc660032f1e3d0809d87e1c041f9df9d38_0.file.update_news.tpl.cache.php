<?php
/* Smarty version 4.3.0, created on 2023-06-25 23:29:59
  from 'C:\OpenServer\domains\dipmed\template_engine\template\dir\update_news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6498a3c7ad75e9_96127506',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97d49cbc660032f1e3d0809d87e1c041f9df9d38' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\update_news.tpl',
      1 => 1671456847,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:title_admin.tpl' => 1,
    'file:footer_admin.tpl' => 1,
  ),
),false)) {
function content_6498a3c7ad75e9_96127506 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2336226386498a3c7ac1b66_36238836';
$_smarty_tpl->_subTemplateRender("file:title_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
    <main class="main__section admin__section">

        <div class="container">

            <div class="page-header">
                <h1>Обновление новости</h1>
            </div>
            <div class="right-button-margin">
                <a href="/admin/view-news" class="btn btn-default pull-right">Просмотр всех новостей</a>
            </div>

</body>
<?php $_smarty_tpl->_subTemplateRender('file:footer_admin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</html><?php }
}
