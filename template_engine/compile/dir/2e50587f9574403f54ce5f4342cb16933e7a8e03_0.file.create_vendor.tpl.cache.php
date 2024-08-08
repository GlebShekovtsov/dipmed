<?php
/* Smarty version 4.3.0, created on 2022-12-21 17:32:32
  from 'C:\OpenServer\domains\dipmed\template_engine\template\dir\create_vendor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a3190064d2a5_75793077',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e50587f9574403f54ce5f4342cb16933e7a8e03' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\create_vendor.tpl',
      1 => 1671321155,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:title_admin.tpl' => 1,
    'file:footer_admin.tpl' => 1,
  ),
),false)) {
function content_63a3190064d2a5_75793077 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '123233192363a3190061a2d8_21127041';
$_smarty_tpl->_subTemplateRender("file:title_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
    <main class="main__section admin__section">

        <div class="container">

            <div class="page-header">
                <h1>Создание карточки партнера</h1>
            </div>
            <div class="right-button-margin">
                <a href="/admin/view-vendor" class="btn btn-default float-end">Просмотреть всё</a>
            </div>
            <?php echo empty($_smarty_tpl->tpl_vars['status']->value) ? '' : $_smarty_tpl->tpl_vars['status']->value;?>

            <form action="/admin/create-vendor" enctype="multipart/form-data" method="post">

                <table class="table table-hover table-responsive table-bordered">

                    <tr>
                        <td>Название</td>
                        <td><input type="text" name="name" class="form-control" /></td>
                    </tr>

                    <tr>
                        <td>Изображение</td>
                        <td><input type="file" name="img" /></td>
                    </tr>

                    <tr>
                        <td>Ссылка</td>
                        <td><input type="text" name="link" class="form-control" /></td>
                    </tr>

                    <tr>
                        <td>Описание</td>
                        <td><textarea name="descr" class="form-control"></textarea></td>
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
