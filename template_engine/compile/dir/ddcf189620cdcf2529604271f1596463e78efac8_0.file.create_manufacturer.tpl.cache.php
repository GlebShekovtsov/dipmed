<?php
/* Smarty version 4.3.0, created on 2023-06-14 02:02:34
  from 'C:\OpenServer\domains\dipmed\template_engine\template\dir\create_manufacturer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6488f58ab02505_12475810',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddcf189620cdcf2529604271f1596463e78efac8' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\create_manufacturer.tpl',
      1 => 1686694522,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:title_admin.tpl' => 1,
    'file:footer_admin.tpl' => 1,
  ),
),false)) {
function content_6488f58ab02505_12475810 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '3935454906488f58aae0de7_09605021';
$_smarty_tpl->_subTemplateRender("file:title_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
    <main class="main__section admin__section">

        <div class="container">

            <div class="page-header">
                <h1>Создание карточки продукта</h1>
            </div>
            <div class="right-button-margin">
                <a href="/admin/view-manufacturers" class="btn btn-default float-end">Просмотреть всё</a>
            </div>
            <?php echo empty($_smarty_tpl->tpl_vars['status']->value) ? '' : $_smarty_tpl->tpl_vars['status']->value;?>

            <form action="/admin/create-manufacturer" enctype="multipart/form-data" method="post">

                <table class="table table-hover table-responsive table-bordered">

                    <tr>
                        <td>Название</td>
                        <td><input type="text" name="man_name" class="form-control" /></td>
                    </tr>
                    <tr>
                        <td>Изображение</td>
                        <td><input type="file" name="image"></td>

                    </tr>
                    <tr>
                        <td>Действия</td>
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
