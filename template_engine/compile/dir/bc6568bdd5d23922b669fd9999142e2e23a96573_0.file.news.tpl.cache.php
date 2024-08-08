<?php
/* Smarty version 4.3.0, created on 2023-06-06 18:48:19
  from 'C:\OpenServer\domains\dipmed\template_engine\template\dir\news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_647f55439a5872_66836271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc6568bdd5d23922b669fd9999142e2e23a96573' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\news.tpl',
      1 => 1672085208,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:title.tpl' => 1,
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_647f55439a5872_66836271 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OpenServer\\domains\\dipmed\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->compiled->nocache_hash = '1225272126647f5543980626_11321638';
$_smarty_tpl->_subTemplateRender("file:title.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <main class="main">
        <!-- Hero about -->
        <section class="main__section about-us__section news__welcome">
            <svg class="about__circle" width="120" height="120" viewBox="0 0 120 120" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <circle opacity="0.3" cx="0.5" cy="0.5" r="119.5" fill="#159EEC" />
            </svg>
            <div class="container about-us__container">
                <div class="about-us__top atop">
                    <a href="/" class="atop__link">Главная / </a>
                    <a href="/news" class="atop__link">Новости</a>
                </div>
                <h2 class="about-us__header">Страница новостей</h2>
            </div>
            <div class="about-us__below below">
                <div class="below__block"></div>
                <div class="below__block"></div>
                <div class="below__block"></div>
            </div>
        </section>
        <!-- Hero -->
        <!-- Blog -->
        <section class="main__section blog__section">
            <div class="container blog__container blog">
                <div class="blog__wrapper">
                    <div class="blog__left bleft">
                        <ul class="bleft__list">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['news']->value, 'item', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                <li class="bleft__item post">
                                    <img src="uploads/<?php echo $_smarty_tpl->tpl_vars['item']->value['img'];?>
" alt="" class="bleft__img">
                                    <div class="post__info-wrapper">
                                        <div class="post__date">
                                            <svg class="post__icon" width="18" height="20" viewBox="0 0 18 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.2222 2.77783H2.77778C1.79594 2.77783 1 3.57377 1 4.55561V17.0001C1 17.9819 1.79594 18.7778 2.77778 18.7778H15.2222C16.2041 18.7778 17 17.9819 17 17.0001V4.55561C17 3.57377 16.2041 2.77783 15.2222 2.77783Z"
                                                    stroke="#1F2B6C" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M12.5557 1V4.55556" stroke="#1F2B6C" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M5.44434 1V4.55556" stroke="#1F2B6C" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M1 8.11108H17" stroke="#1F2B6C" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <time class="post__time"
                                                datetime="2022-11-30"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['date'],"%d.%m.%Y г");?>
</time>
                                        </div>
                                        <div class="post__views">
                                            <svg class="post__icon" width="18" height="13" viewBox="0 0 18 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8.98755 1C6.2041 1 3.34886 2.611 1.1011 5.83301C1.03694 5.92599 1.00178 6.0359 1.00007 6.14886C0.99835 6.26181 1.03015 6.37274 1.09146 6.46763C2.81853 9.17108 5.63555 11.2853 8.98755 11.2853C12.3031 11.2853 15.178 9.16465 16.9083 6.45513C16.9682 6.3621 17 6.25381 17 6.14318C17 6.03255 16.9682 5.92425 16.9083 5.83122C15.1741 3.15277 12.2781 1 8.98755 1Z"
                                                    stroke="#526AE9" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M8.9996 8.99969C10.5775 8.99969 11.8566 7.72056 11.8566 6.14267C11.8566 4.56478 10.5775 3.28564 8.9996 3.28564C7.42171 3.28564 6.14258 4.56478 6.14258 6.14267C6.14258 7.72056 7.42171 8.99969 8.9996 8.99969Z"
                                                    stroke="#526AE9" stroke-width="1.5" stroke-miterlimit="10" />
                                            </svg>
                                            <span class="post__count"><?php echo $_smarty_tpl->tpl_vars['item']->value['views'];?>
</span>
                                        </div>
                                    </div>
                                    <h3 class="post__header"><?php echo $_smarty_tpl->tpl_vars['item']->value['header'];?>
</h3>
                                    <p class="post__descr">
                                        <?php echo $_smarty_tpl->tpl_vars['item']->value['text'];?>

                                    </p>
                                    <a href="read-news?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="post__link post-link">
                                        <span class="post-link__span">Подробнее</span>
                                        <svg width="13" height="13" viewBox="0 0 13 13" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.21795 11.5L11.8333 6.5M11.8333 6.5L7.21795 1.5M11.8333 6.5H1"
                                                stroke="#1F2B6C" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        </ul>

                        <div class="bleft__pages pages">
                            <div class="pages__left">

                                <?php if ($_smarty_tpl->tpl_vars['page']->value > 1) {?>
                                    <svg class="pages__icon-left" width="13" height="12" viewBox="0 0 13 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.6153 11L0.999919 6M0.999919 6L5.6153 1M0.999919 6H11.8333"
                                            stroke="#1F2B6C" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['page_url']->value;?>
" class="pages__span">Первая страница</span>
                                    <?php }?>
                                    <?php $_smarty_tpl->_assignInScope('total_pages', ceil($_smarty_tpl->tpl_vars['total_rows']->value/$_smarty_tpl->tpl_vars['records_per_page']->value));?>
                                    <?php $_smarty_tpl->_assignInScope('range', 2);?>
                                    <?php $_smarty_tpl->_assignInScope('initial_num', $_smarty_tpl->tpl_vars['page']->value-$_smarty_tpl->tpl_vars['range']->value);?>
                                    <?php $_smarty_tpl->_assignInScope('condition_limit_num', ($_smarty_tpl->tpl_vars['page']->value+$_smarty_tpl->tpl_vars['range']->value)+1);?>
                            </div>
                            <div class="pages__nums">
                                <ul class="pages__list">
                                    <?php
$_smarty_tpl->tpl_vars['x'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['x']->value = $_smarty_tpl->tpl_vars['initial_num']->value;
if ($_smarty_tpl->tpl_vars['x']->value < $_smarty_tpl->tpl_vars['condition_limit_num']->value) {
for ($_foo=true;$_smarty_tpl->tpl_vars['x']->value < $_smarty_tpl->tpl_vars['condition_limit_num']->value; $_smarty_tpl->tpl_vars['x']->value++) {
?>
                                        <?php if (($_smarty_tpl->tpl_vars['x']->value > 0) && ($_smarty_tpl->tpl_vars['x']->value <= $_smarty_tpl->tpl_vars['total_pages']->value)) {?>
                                            <?php if ($_smarty_tpl->tpl_vars['x']->value == $_smarty_tpl->tpl_vars['page']->value) {?>
                                                <li class="pages__item"><a class="pages__item--active" href='#'><?php echo $_smarty_tpl->tpl_vars['x']->value;?>
</a></li>
                                            <?php } else { ?>
                                                <li class="pages__item"><a href='<?php echo $_smarty_tpl->tpl_vars['page_url']->value;?>
page=<?php echo $_smarty_tpl->tpl_vars['x']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['x']->value;?>
</a></li>
                                            <?php }?>
                                        <?php }?>
                                    <?php }
}
?>
                                </ul>
                            </div>
                            <div class="pages__right">
                                <?php if ($_smarty_tpl->tpl_vars['page']->value < $_smarty_tpl->tpl_vars['total_pages']->value) {?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['page_url']->value;?>
page=<?php echo $_smarty_tpl->tpl_vars['total_pages']->value;?>
" class="pages__span-right">Следующая
                                        страница</a>
                                    <svg width="13" height="12" viewBox="0 0 13 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.21795 11L11.8333 6M11.8333 6L7.21795 1M11.8333 6H1" stroke="#1F2B6C"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <div class="blog__right">
                                                <div class="posts__wrapper recent-posts">
                            <h2 class="recent-posts__header">
                                Недавние новости
                            </h2>
                            <ul class="recent-posts__list recpost">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recentNews']->value, 'item', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                    <li class="recent-posts__item">
                                        
                                        <a href="read-news?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="recpost__wrapper">
                                            <div class="recpost__left">
                                                <img src="uploads/<?php echo $_smarty_tpl->tpl_vars['item']->value['img'];?>
" alt="" class="recpost__img">
                                            </div>
                                            <div class="recpost__right">
                                                <time class="recpost__time" datetime="YYYY-MM-DD"> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['date'],"%d.%m.%Y г");?>

                                                    </time>
                                                <h3 class="recpost__header">
                                                <?php echo $_smarty_tpl->tpl_vars['item']->value['header'];?>

                                                </h3>
                                            </div>
                                        </a>
                                    </li>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog -->
        <!-- Контакты -->
        <section class="main__section contacts__section">
            <div class="container contacts__section">
                <p class="contacts__subheader">
                    Связаться с нами
                </p>
                <h2 class="contacts__header">
                    Контакты
                </h2>
                <ul class="contacts__list">
                    <li class="contacts__item">
                        <address class="contacts__address">
                            <svg class="contacts__icon" width="41" height="39" viewBox="0 0 41 39" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M24.1459 33.1262C24.7274 32.7905 25.1502 32.2347 25.3211 31.5811C25.492 30.9275 25.3972 30.2296 25.0574 29.6411L23.7761 27.4219C23.4363 26.8333 22.8794 26.4022 22.2279 26.2235C21.5764 26.0447 20.8837 26.1329 20.3021 26.4687C15.9167 29.0006 13.3542 24.5622 12.0729 22.343C10.7917 20.1238 8.22919 15.6854 12.6146 13.1535C13.1962 12.8178 13.6189 12.2619 13.7899 11.6084C13.9608 10.9548 13.8659 10.2569 13.5261 9.66835L12.2449 7.44916C11.905 6.8606 11.3481 6.42952 10.6966 6.25075C10.0451 6.07199 9.35243 6.16019 8.77089 6.49594C3.28908 9.66086 1.28125 13.779 7.6875 24.875C14.0938 35.9709 18.6641 36.2911 24.1459 33.1262Z"
                                    stroke="#1F2B6C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M35.8156 23.9621C36.9804 19.4989 36.3314 14.7346 34.0113 10.716C31.6911 6.69743 27.8896 3.75324 23.442 2.53032M29.1022 22.12C29.4492 20.7945 29.5325 19.4104 29.3472 18.0469C29.162 16.6835 28.712 15.3672 28.0227 14.1735C27.3335 12.9798 26.4187 11.9319 25.3305 11.0897C24.2423 10.2476 23.002 9.62766 21.6806 9.26539M22.4248 20.2645C22.6577 19.3714 22.5278 18.4181 22.0635 17.6141C21.5993 16.81 20.8387 16.2208 19.9488 15.9759"
                                    stroke="#1F2B6C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <h4 class="contacts__block-header">Вызов</h4>
                            <a class="contacts__tel" href="tel:+78442527558">+7 (8442) 52-75-58</a>
                            <a class="contacts__tel" href="tel:+78442527558">+7 (8442) 52-75-58</a>
                        </address>
                    </li>
                    <li class="contacts__item">
                        <address class="contacts__address">
                            <svg class="contacts__icon" width="32" height="39" viewBox="0 0 32 39" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1 15.4C1 29.8 16 37 16 37C16 37 31 29.8 31 15.4C31 7.45 24.2875 1 16 1C7.7125 1 1 7.45 1 15.4Z"
                                    stroke="#BFD2F8" stroke-width="2" />
                                <path
                                    d="M15.9998 20.32C18.8496 20.32 21.1598 18.0098 21.1598 15.16C21.1598 12.3102 18.8496 10 15.9998 10C13.1501 10 10.8398 12.3102 10.8398 15.16C10.8398 18.0098 13.1501 20.32 15.9998 20.32Z"
                                    stroke="#BFD2F8" stroke-width="2" />
                            </svg>
                            <h4 class="contacts__block-lheader">Место</h4>
                            <p class="contacts__location">
                                г. Волгоград, ул. Циолковского, 39
                            </p>
                        </address>
                    </li>
                    <li class="contacts__item">
                        <address class="contacts__address">
                            <svg class="contacts__icon" width="39" height="32" viewBox="0 0 39 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.7998 1H37.1998V30.5H1.7998V1Z" stroke="#1F2B6C" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M37.1998 6.8999L19.4998 18.6999L1.7998 6.8999" stroke="#1F2B6C"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <h4 class="contacts__block-header">Почта</h4>
                            <a class="contacts__mail" href="mailto:dipmed@mail.ru">dipmed@mail.ru</a>
                            <a class="contacts__mail" href="mailto:dipmed@mail.ru">dipmed@mail.ru</a>
                        </address>
                    </li>
                    <li class="contacts__item">
                        <address class="contacts__address">
                            <svg class="contacts__icon" width="33" height="32" viewBox="0 0 33 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.6777 31C24.962 31 31.6777 24.2843 31.6777 16C31.6777 7.71573 24.962 1 16.6777 1C8.39346 1 1.67773 7.71573 1.67773 16C1.67773 24.2843 8.39346 31 16.6777 31Z"
                                    stroke="#1F2B6C" stroke-width="2" stroke-linecap="round" />
                                <path d="M21.6777 23.5L16.6777 16V6" stroke="#1F2B6C" stroke-width="2"
                                    stroke-linecap="round" />
                            </svg>
                            <h4 class="contacts__block-header">РЕЖИМ РАБОТЫ</h4>
                            <p class="contacts__working">
                                По будням
                            </p>
                            <p class="contacts__working">
                                С 9:00 до 18:00
                            </p>
                        </address>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Конец контактов -->
    </main>
    <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>

</html><?php }
}
