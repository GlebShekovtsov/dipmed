<?php
/* Smarty version 4.3.0, created on 2022-12-11 23:34:44
  from 'C:\OpenServer\domains\dipmed\template_engine\template\dir\create_vendor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63963ee486d851_73111746',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e50587f9574403f54ce5f4342cb16933e7a8e03' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\create_vendor.tpl',
      1 => 1670790877,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:title_admin.tpl' => 1,
    'file:footer_admin.tpl' => 1,
  ),
),false)) {
function content_63963ee486d851_73111746 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '19180918663963ee4842780_49367112';
$_smarty_tpl->_subTemplateRender("file:title_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
    <main class="main__section admin__section">

        <div class="container">

            <div class="page-header">
                <h1> <?php echo htmlspecialchars((string) empty($_smarty_tpl->tpl_vars['status']->value) ? '' : $_smarty_tpl->tpl_vars['status']->value, ENT_QUOTES, 'UTF-8');?>
</h1>
            </div>
            <div class="right-button-margin">
                <a href="/admin" class="btn btn-default float-end">Просмотреть всё</a>
            </div>

            <form action="/admin/create-vendor" method="post">

                <table class="table table-hover table-responsive table-bordered">

                    <tr>
                        <td>Название</td>
                        <td><input type="text" name="name" class="form-control" /></td>
                    </tr>

                    <tr>
                        <td>Ссылка</td>
                        <td><input type="text" name="price" class="form-control" /></td>
                    </tr>

                    <tr>
                        <td>Описание</td>
                        <td><textarea name="description" class="form-control"></textarea></td>
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
