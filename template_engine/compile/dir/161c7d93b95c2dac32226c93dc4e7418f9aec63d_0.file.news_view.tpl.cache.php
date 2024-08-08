<?php
/* Smarty version 4.3.0, created on 2023-06-25 23:30:01
  from 'C:\OpenServer\domains\dipmed\template_engine\template\dir\news_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6498a3c9aa3f21_90243829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '161c7d93b95c2dac32226c93dc4e7418f9aec63d' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\news_view.tpl',
      1 => 1687468401,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:title_admin.tpl' => 1,
    'file:footer_admin.tpl' => 1,
  ),
),false)) {
function content_6498a3c9aa3f21_90243829 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OpenServer\\domains\\dipmed\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->compiled->nocache_hash = '7743306196498a3c9a848f4_68309239';
$_smarty_tpl->_subTemplateRender("file:title_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
    <main class="main__section admin__section">

        <div class="container">
            <div class="page-header">
                <h1>
                    Новости
                </h1>
            </div>
            <div class="left-button-margin">
                <a href="/admin" class="btn btn-default pull-left">На главную</a>
            </div>
            <div class="right-button-margin">
                <a href="/admin/create-news" class="btn btn-default pull-right">Добавить новость</a>
            </div>
            <form role='search' action='/admin/search_news' class="search__form">
                <div class='input-group col-md-3 pull-left margin-right-1em search__input'>
                    <input type='text' class='form-control' placeholder='Введите название...' name='s' required />
                    <div class='input-group-btn'>";
                        <button class='btn btn-primary' type='submit'>
                            <i class='glyphicon glyphicon-search'></i></button>";
                    </div>
                </div>
            </form>
            <?php if ($_smarty_tpl->tpl_vars['num']->value > 0) {?>
                <table class="table table-hover table-responsive table-bordered">
                    <tr>
                        <th>Заголовок</th>
                        <th>Текст</th>
                        <th>Количество просмотров</th>
                        <th>Дата</th>

                    </tr>


                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['header'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['text'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['views'];?>
</td>
                            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['date'],"%e.%m.%Y");?>
</td>

                            <td>
                                <a href='read-news?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
' class='btn btn-primary left-margin'>
                                    <span class='glyphicon glyphicon-list'></span> Просмотр
                                </a>

                                <a href='update-news?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
' class='btn btn-info left-margin'>
                                    <span class='glyphicon glyphicon-edit'></span> Редактировать
                                </a>

                                <a href='delete_news.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
' class='btn btn-danger delete-object'>
                                    <span class='glyphicon glyphicon-remove'></span> Удалить
                                </a>
                            </td>
                        <tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>
            <?php } else { ?>
                <div class='alert alert-info'>Новости не найдены.</div>
            <?php }?>
        </div>

    </main>
</body>
<?php $_smarty_tpl->_subTemplateRender('file:footer_admin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</html><?php }
}
