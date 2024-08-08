<?php
/* Smarty version 4.3.0, created on 2023-06-25 23:29:11
  from 'C:\OpenServer\domains\dipmed\template_engine\template\dir\create_news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6498a3975392c8_97729950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31820e47191dbb58bebd3cf09f02d91ebd4d40d6' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\create_news.tpl',
      1 => 1671489565,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:title_admin.tpl' => 1,
    'file:footer_admin.tpl' => 1,
  ),
),false)) {
function content_6498a3975392c8_97729950 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '13544017946498a397511961_17742167';
$_smarty_tpl->_subTemplateRender("file:title_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
    <main class="main__section admin__section">

        <div class="container">

            <div class="page-header">
                <h1>Создание новости</h1>
            </div>
            <div class="right-button-margin">
                <a href="/admin/view-news" class="btn btn-default float-end">Просмотреть всё</a>
            </div>
            <?php echo empty($_smarty_tpl->tpl_vars['status']->value) ? '' : $_smarty_tpl->tpl_vars['status']->value;?>

            <form action="/admin/create-news" enctype="multipart/form-data" method="post">

                <table class="table table-hover table-responsive table-bordered">
                    <input type="hidden" name="views" value="0">
                    <tr>
                        <td>Заголовок</td>
                        <td><input type="text" name="header" class="form-control" /></td>
                    </tr>
                    <tr>
                        <td>Текст новости</td>
                        <td><textarea name="text" class="form-control"></textarea></td>
                    </tr>

                    <tr>
                        <td>Изображение</td>
                        <td><input type="file" name="img" /></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button type="submit" class="btn btn-primary">Создать</button>
                        </td>
                    </tr>

                </table>
            </form>
        </div>

    </main>
</body>
<?php $_smarty_tpl->_subTemplateRender('file:footer_admin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</html><?php }
}
