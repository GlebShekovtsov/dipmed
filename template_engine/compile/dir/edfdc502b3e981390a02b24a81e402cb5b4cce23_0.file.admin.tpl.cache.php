<?php
/* Smarty version 4.3.0, created on 2023-06-26 03:49:21
  from 'C:\OpenServer\domains\dipmed\template_engine\template\dir\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6498e091d51e40_41784660',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edfdc502b3e981390a02b24a81e402cb5b4cce23' => 
    array (
      0 => 'C:\\OpenServer\\domains\\dipmed\\template_engine\\template\\dir\\admin.tpl',
      1 => 1687124761,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:title_admin.tpl' => 1,
    'file:footer_admin.tpl' => 1,
  ),
),false)) {
function content_6498e091d51e40_41784660 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '14498860046498e091d345d1_17175769';
$_smarty_tpl->_subTemplateRender("file:title_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
    <main class="main__section admin__section">

        <div class="container">

            <div class="page-header">
                <h1 class="admin-header">Административная панель</h1>
                <?php if ((isset($_SESSION['login'])) && (isset($_SESSION['password']))) {?>
                    <a href="exit">Выйти</a>
                <?php } else { ?>

                <?php }?>
            </div>
            <?php echo empty($_smarty_tpl->tpl_vars['status']->value) ? '' : $_smarty_tpl->tpl_vars['status']->value;?>


            <?php if ((isset($_SESSION['login'])) && (isset($_SESSION['password']))) {?>
                <div class="functions__wrapper functions">
                    <ul class="functions__list">
                        <li class="functions__item">
                            <a href="/admin/view-vendor" class="function__link">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000"
                                    enable-background="new 0 0 1000 1000" xml:space="preserve">
                                    <g>
                                        <path
                                            d="M113.9,460c-3.3,0-6.5-1.3-8.8-3.6L13.7,366c-4.9-4.9-5-12.8-0.1-17.7L252.5,105c4.8-4.9,12.6-5,17.6-0.3l93.6,89.2c2.4,2.3,3.8,5.5,3.9,8.9c0,3.4-1.3,6.6-3.6,9L122.8,456.2C120.5,458.6,116.7,460.4,113.9,460z M40.3,357l73.5,72.7l223.3-226.4l-75.4-71.8L40.3,357z" />
                                        <path
                                            d="M217.4,567.8c-2.9,0-5.8-1-8.2-3.1c-52.9-45.7-45.4-115.8-45-118.8c0.8-6.9,6.9-11.8,13.9-11c6.9,0.8,11.8,7,11,13.9c-0.1,0.6-6.2,60.1,36.5,96.9c5.2,4.5,5.8,12.5,1.3,17.7C224.4,566.3,220.9,567.8,217.4,567.8z" />
                                        <path
                                            d="M468.4,327.8c-3,0-6-1.1-8.4-3.2c-50.7-45.7-104.6-45.1-104.8-45.2c-0.1,0-0.2,0-0.3,0c-6.8,0-12.4-5.5-12.5-12.3c-0.1-6.9,5.4-12.6,12.3-12.8c2.9,0,64-0.6,122,51.6c5.2,4.6,5.6,12.6,0.9,17.7C475.2,326.4,471.8,327.8,468.4,327.8z" />
                                        <path
                                            d="M424.3,528.4c-37.8,0-74.9-28.7-77.1-30.4c-2.8-2.2-4.5-5.4-4.8-9c-0.3-3.5,1-7,3.4-9.6c1.1-1.2,112.1-117.6,172.3-173.4c64.2-59.5,123.4-52,125.9-51.6c6.9,0.9,11.7,7.3,10.7,14.2c-0.9,6.9-7.4,11.6-14.1,10.7c-2.2-0.3-50.6-5.6-105.4,45.2c-48.9,45.3-132,131.5-161,161.6c18.4,11.3,54.6,28.5,76.7,6.4c38.7-38.8,57-54.1,57.8-54.7c2.6-2.2,5.9-3.2,9.3-2.8c3.4,0.4,6.4,2,8.5,4.7c0.1,0.2,16.4,20,41.5,21.3c18.9,1,39.7-8.9,60.4-29.6c4.9-4.9,12.8-4.9,17.7,0c4.9,4.9,4.9,12.9,0,17.7c-26.1,26.1-53.3,38.6-79.8,36.8c-23-1.4-40.3-12.8-50.1-21.4c-8.8,8-24.5,22.6-47.5,45.6C455.3,523.6,439.7,528.4,424.3,528.4z" />
                                        <path
                                            d="M886.7,462.7c-3.3,0-6.5-1.3-8.9-3.7L633.4,213.8c-2.4-2.4-3.7-5.6-3.7-8.9c0-3.3,1.3-6.5,3.7-8.9l91.6-91.1c4.9-4.9,12.9-4.8,17.7,0l243.5,244.7c4.9,4.9,4.9,12.8,0,17.7L895.6,459C893.2,461.4,890,462.7,886.7,462.7L886.7,462.7z M660,205l226.6,227.4l73.1-73.8L733.9,131.6L660,205z" />
                                        <path
                                            d="M774.3,574.1c-3.5,0-7-1.5-9.5-4.3c-4.5-5.2-4-13.2,1.3-17.7c49.7-43,42.9-102.5,42.8-103.1c-0.8-6.9,4-13.1,10.9-14c6.8-0.9,13.1,4,14,10.9c0.4,3,8.4,73.6-51.3,125.2C780.2,573.1,777.3,574.1,774.3,574.1z" />
                                        <path
                                            d="M728.3,701.4c-5.6,0-11.4-0.7-17.4-2.1c-6.8-1.6-10.9-8.3-9.4-15.1c1.6-6.8,8.4-11,15-9.4c17.3,4,31.5-0.8,38.6-13.2c7.2-12.5,5.4-29.1-4.3-39.4c-26.8-28.4-107.1-108-107.9-108.8c-4.9-4.9-4.9-12.8-0.1-17.7c4.9-4.9,12.8-5,17.8-0.1c3.3,3.3,81.3,80.7,108.4,109.4c17.4,18.4,20.6,46.9,7.9,69.1C766.8,691.8,749.2,701.4,728.3,701.4z" />
                                        <path
                                            d="M694.9,789.4c-5.5,0-11.4-0.7-17.3-2c-6.8-1.5-11-8.3-9.4-15c1.6-6.8,8.4-10.9,15-9.4c17.5,4,31.5-0.8,38.7-13.3c7.2-12.5,5.3-29.1-4.4-39.3c-26.8-28.4-107.1-108-107.9-108.8c-4.9-4.9-5-12.8-0.1-17.7c4.9-4.9,12.8-5,17.8-0.1c3.3,3.3,81.4,80.7,108.5,109.4c17.4,18.5,20.6,46.9,7.9,69.1C733.5,779.8,715.9,789.4,694.9,789.4z" />
                                        <path
                                            d="M634.7,851.5c-5.6,0-11.4-0.7-17.4-2.1c-6.8-1.6-10.9-8.3-9.4-15c1.6-6.8,8.3-11,15.1-9.4c17.4,4,31.5-0.8,38.7-13.3c7.2-12.5,5.3-29-4.4-39.3c-26.8-28.5-107.1-108.1-107.9-108.9c-4.9-4.9-4.9-12.8-0.1-17.7c4.9-4.9,12.8-5,17.7-0.1c3.3,3.3,81.3,80.7,108.4,109.5c17.4,18.4,20.6,46.8,7.9,69C673.3,841.9,655.7,851.5,634.7,851.5z" />
                                        <path
                                            d="M564.4,898.7c-5.6,0-11.4-0.7-17.3-2c-1.6-0.4-3.2-1.1-4.5-2l-10.1-7.2c-5.6-4.1-6.9-11.9-2.8-17.5c4-5.6,11.9-6.9,17.5-2.8l7.9,5.7c16.3,3.1,29.5-1.9,36.3-13.8c7.2-12.5,5.3-29.1-4.4-39.4c-4.6-4.8-10.8-11.2-17.8-18.5c-4.8-5-4.7-12.9,0.3-17.7c5-4.8,12.9-4.7,17.7,0.2c7.1,7.3,13.4,13.8,18.1,18.7c17.5,18.5,20.7,47,7.9,69.2C603,889.1,585.4,898.7,564.4,898.7z" />
                                        <path
                                            d="M249.5,701.4c-14.9,0-28.9-5.8-39.5-16.4c-21.7-21.8-21.7-57.2,0-78.9l60.2-60.2c21.1-21.1,57.9-21.1,78.9,0c10.5,10.5,16.4,24.5,16.4,39.4c0,14.9-5.8,29-16.3,39.6L288.9,685C278.4,695.6,264.4,701.4,249.5,701.4z M309.7,554.6c-8.2,0-15.9,3.2-21.7,9l-60.2,60.2c-12,12-12,31.5,0,43.5c11.6,11.6,31.8,11.6,43.4,0l60.3-60.2c5.8-5.8,9-13.6,9-21.8c0-8.2-3.2-15.9-9-21.7C325.6,557.8,317.9,554.6,309.7,554.6z" />
                                        <path
                                            d="M368.4,827.1c-14.9,0-28.9-5.8-39.5-16.4c-10.5-10.5-16.3-24.5-16.4-39.4c0-14.9,5.8-29,16.4-39.5c4.9-4.9,12.8-4.9,17.7,0c4.9,4.9,4.9,12.9,0,17.7c-5.8,5.8-9,13.5-9,21.7c0,8.2,3.2,15.9,9,21.7c11.7,11.7,31.8,11.7,43.5,0l60.3-60.2c11.9-12,11.9-31.5,0-43.4c-11.6-11.6-31.8-11.6-43.4,0c-4.9,4.9-12.9,4.9-17.8,0c-4.9-4.9-4.9-12.9,0-17.7c21.1-21.1,57.8-21.1,78.9,0c21.7,21.7,21.8,57.1,0.1,78.9l-60.3,60.3C397.4,821.3,383.4,827.1,368.4,827.1z" />
                                        <path
                                            d="M446.8,874.4c-1.4,0-2.7,0-4.1-0.2c-13.7-1-27-7.3-37.3-17.6c-21.7-21.7-23.7-55.2-4.3-74.6c4.9-4.9,12.9-4.9,17.8,0c4.9,4.9,4.9,12.8,0,17.7c-9.6,9.6-7.7,27.1,4.3,39.1c6,6.1,13.7,9.7,21.4,10.3c6.9,0.5,13.3-1.6,17.7-6l51.8-51.8c9.6-9.6,7.6-27.1-4.3-39.1c-11.9-12-29.5-13.9-39.1-4.3c-4.9,4.9-12.9,4.9-17.7,0c-4.9-4.9-4.9-12.9,0-17.7c19.3-19.3,52.8-17.4,74.6,4.3c21.7,21.8,23.7,55.3,4.3,74.6l-51.8,51.8C471.3,869.7,459.6,874.4,446.8,874.4z" />
                                        <path
                                            d="M298.3,773.6C298.2,773.6,298.2,773.6,298.3,773.6c-14.8,0-28.4-5.6-38.6-15.8c-10.1-10.1-15.7-23.7-15.7-38.5c0-15.7,6.5-31.2,17.9-42.6c4.9-4.9,12.9-4.9,17.8,0c4.9,4.9,4.9,12.8,0,17.7c-6.7,6.7-10.6,15.8-10.6,24.8c0,8,3,15.4,8.4,20.7c5.4,5.4,12.8,8.4,20.8,8.4h0c9,0,18.1-3.8,24.8-10.6l64.6-64.5c6.5-6.5,10.3-14.9,10.6-23.7c0.3-8.5-2.7-16.2-8.4-21.9c-5.7-5.7-13.7-8.8-21.9-8.4c-8.8,0.3-17.2,4-23.7,10.5c-4.9,4.9-12.9,4.9-17.8,0c-4.9-4.9-4.9-12.8,0-17.7c11-11,25.4-17.4,40.6-17.9c15.3-0.8,29.9,5,40.6,15.7c10.7,10.6,16.2,25,15.7,40.5c-0.5,15.2-6.9,29.6-17.9,40.6l-64.6,64.5C329.4,767.1,313.9,773.6,298.3,773.6z" />
                                    </g>
                                </svg>
                                <div class="function__wrapper">
                                    <h2 class="functions__header">
                                        Партнеры
                                    </h2>
                                </div>
                            </a>
                        </li>
                        <li class="functions__item">
                            <a href="/admin/view-news" class="function__link">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                                    style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <g transform="translate(1 1)">
                                        <g>
                                            <g>
                                                <path d="M50.2,246.467h34.133H203.8h34.133c5.12,0,8.533-3.413,8.533-8.533V50.2c0-5.12-3.413-8.533-8.533-8.533H50.2
                                   c-5.12,0-8.533,3.413-8.533,8.533v187.733C41.667,243.053,45.08,246.467,50.2,246.467z M92.867,229.4v-5.973
                                   c0-28.16,20.48-51.2,46.08-53.76c3.413,0,6.827,0,10.24,0c25.6,2.56,46.08,26.453,46.08,53.76v5.973H92.867z M144.067,152.6
                                   c-14.507,0-25.6-11.093-25.6-25.6s11.093-25.6,25.6-25.6c14.507,0,25.6,11.093,25.6,25.6S158.573,152.6,144.067,152.6z
                                    M58.733,58.733H229.4V229.4h-17.92v-5.973c0-28.284-15.726-53.004-38.953-64.419c8.756-7.765,14.206-19.141,14.206-32.008
                                   c0-23.893-18.773-42.667-42.667-42.667c-23.893,0-42.667,18.773-42.667,42.667c0,12.777,5.371,24.086,14.02,31.847
                                   c-23.239,11.344-39.62,36.165-39.62,64.58v5.973H58.733V58.733z" />
                                                <path
                                                    d="M374.467,41.667H280.6c-5.12,0-8.533,3.413-8.533,8.533v34.133c0,5.12,3.413,8.533,8.533,8.533h93.867
                                   c5.12,0,8.533-3.413,8.533-8.533V50.2C383,45.08,379.587,41.667,374.467,41.667z M365.933,75.8h-76.8V58.733h76.8V75.8z" />
                                                <path
                                                    d="M374.467,118.467H280.6c-5.12,0-8.533,3.413-8.533,8.533v34.133c0,5.12,3.413,8.533,8.533,8.533h93.867
                                   c5.12,0,8.533-3.413,8.533-8.533V127C383,121.88,379.587,118.467,374.467,118.467z M365.933,152.6h-76.8v-17.067h76.8V152.6z" />
                                                <path
                                                    d="M374.467,195.267H280.6c-5.12,0-8.533,3.413-8.533,8.533v34.133c0,5.12,3.413,8.533,8.533,8.533h93.867
                                   c5.12,0,8.533-3.413,8.533-8.533V203.8C383,198.68,379.587,195.267,374.467,195.267z M365.933,229.4h-76.8v-17.067h76.8V229.4z" />
                                                <path d="M374.467,272.067H50.2c-5.12,0-8.533,3.413-8.533,8.533s3.413,8.533,8.533,8.533h324.267c5.12,0,8.533-3.413,8.533-8.533
                                   S379.587,272.067,374.467,272.067z" />
                                                <path d="M186.733,314.733H50.2c-5.12,0-8.533,3.413-8.533,8.533S45.08,331.8,50.2,331.8h136.533c5.12,0,8.533-3.413,8.533-8.533
                                   S191.853,314.733,186.733,314.733z" />
                                                <path d="M374.467,314.733H237.933c-5.12,0-8.533,3.413-8.533,8.533s3.413,8.533,8.533,8.533h136.533
                                   c5.12,0,8.533-3.413,8.533-8.533S379.587,314.733,374.467,314.733z" />
                                                <path d="M186.733,357.4H50.2c-5.12,0-8.533,3.413-8.533,8.533s3.413,8.533,8.533,8.533h136.533c5.12,0,8.533-3.413,8.533-8.533
                                   S191.853,357.4,186.733,357.4z" />
                                                <path d="M374.467,357.4H237.933c-5.12,0-8.533,3.413-8.533,8.533s3.413,8.533,8.533,8.533h136.533
                                   c5.12,0,8.533-3.413,8.533-8.533S379.587,357.4,374.467,357.4z" />
                                                <path d="M186.733,400.067H50.2c-5.12,0-8.533,3.413-8.533,8.533s3.413,8.533,8.533,8.533h136.533c5.12,0,8.533-3.413,8.533-8.533
                                   S191.853,400.067,186.733,400.067z" />
                                                <path d="M374.467,400.067H237.933c-5.12,0-8.533,3.413-8.533,8.533s3.413,8.533,8.533,8.533h136.533
                                   c5.12,0,8.533-3.413,8.533-8.533S379.587,400.067,374.467,400.067z" />
                                                <path d="M186.733,442.733H50.2c-5.12,0-8.533,3.413-8.533,8.533c0,5.12,3.413,8.533,8.533,8.533h136.533
                                   c5.12,0,8.533-3.413,8.533-8.533C195.267,446.147,191.853,442.733,186.733,442.733z" />
                                                <path d="M374.467,442.733H237.933c-5.12,0-8.533,3.413-8.533,8.533c0,5.12,3.413,8.533,8.533,8.533h136.533
                                   c5.12,0,8.533-3.413,8.533-8.533C383,446.147,379.587,442.733,374.467,442.733z" />
                                                <path
                                                    d="M485.4,272.067h-59.733V24.6c0-14.507-11.093-25.6-25.6-25.6H24.6C10.093-1-1,10.093-1,24.6v460.8
                                   c0,14.507,11.093,25.6,25.6,25.6h435.2c28.16,0,51.2-23.04,51.2-51.2V297.667C511,283.16,499.907,272.067,485.4,272.067z
                                    M24.6,493.933c-4.267,0-8.533-3.413-8.533-8.533V24.6c0-4.267,4.267-8.533,8.533-8.533h375.467c4.267,0,8.533,3.413,8.533,8.533
                                   v256v179.2c0,12.8,4.267,24.747,12.8,34.133H24.6z M493.933,459.8c0,18.773-15.36,34.133-34.133,34.133
                                   c-18.773,0-34.133-15.36-34.133-34.133V289.133H485.4c4.267,0,8.533,3.413,8.533,8.533V459.8z" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <div class="function__wrapper">
                                    <h2 class="functions__header">
                                        Новости
                                    </h2>
                                </div>
                            </a>
                        </li>
                        <li class="functions__item">
                            <a href="/admin/view-order" class="function__link">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="519.346px"
                                    height="519.347px" viewBox="0 0 519.346 519.347"
                                    style="enable-background:new 0 0 519.346 519.347;" xml:space="preserve">
                                    <g>
                                        <g id="Layer_8_29_">
                                            <g>
                                                <path
                                                    d="M438.364,189.24c1.994-3.907,3.502-8.12,4.31-12.574V95.545H295.11V59.868c0-4.637-3.769-8.405-8.404-8.405H156.898
                                   c-4.641,0-8.404,3.768-8.404,8.405v35.677H0v88.354c6.326,17.532,23.078,30.118,42.769,30.118h21.669v-13.739h51.13v13.734
                                   h188.576c2.43-14.044,14.605-24.777,29.324-24.777L438.364,189.24L438.364,189.24z M278.3,95.545H165.303V68.273H278.3V95.545z" />
                                                <path
                                                    d="M115.568,260.516h-51.13v-35.297H42.769c-17.067,0-32.357-7.615-42.769-19.59v198.1h303.63V225.224H115.568V260.516z" />
                                                <path d="M474.265,209.552H344.244c-8.727,0-15.825,7.117-15.825,15.845v226.649c0,8.734,7.107,15.837,15.825,15.837h159.269
                                   c8.745,0,15.834-7.103,15.834-15.837V258.547L474.265,209.552z M478,233.254l19.765,21.483H478V233.254z M506.061,452.046
                                   c0,1.401-1.147,2.539-2.549,2.539H344.244c-1.391,0-2.526-1.138-2.526-2.539V225.396c0-1.401,1.136-2.536,2.526-2.536h120.454
                                   v38.53c0,3.666,2.988,6.648,6.659,6.648h34.704V452.046z" />
                                                <path
                                                    d="M357.453,292.91c0,3.097,2.497,5.604,5.604,5.604h119.07c3.097,0,5.604-2.507,5.604-5.604
                                   c0-3.098-2.507-5.604-5.604-5.604h-119.07C359.95,287.306,357.453,289.812,357.453,292.91z" />
                                                <path d="M482.126,336.335h-119.07c-3.106,0-5.604,2.507-5.604,5.604c0,3.1,2.497,5.604,5.604,5.604h119.07
                                   c3.097,0,5.604-2.504,5.604-5.604C487.73,338.842,485.223,336.335,482.126,336.335z" />
                                                <path d="M482.126,380.986h-119.07c-3.106,0-5.604,2.507-5.604,5.604c0,3.104,2.497,5.604,5.604,5.604h119.07
                                   c3.097,0,5.604-2.5,5.604-5.604C487.73,383.493,485.223,380.986,482.126,380.986z" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <div class="function__wrapper">
                                    <h2 class="functions__header">
                                        Заказы
                                    </h2>
                                </div>
                            </a>
                        </li>
                        <li class="functions__item">
                            <a href="/admin/view-client" class="function__link">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 477.297 477.297"
                                    style="enable-background:new 0 0 477.297 477.297;" xml:space="preserve">
                                    <g>
                                        <g>
                                            <g>
                                                <path d="M42.85,358.075c0-24.138,0-306.758,0-330.917c23.9,0,278.867,0,302.767,0c0,8.542,0,49.44,0,99.722
                       c5.846-1.079,11.842-1.812,17.99-1.812c3.149,0,6.126,0.647,9.232,0.928V0H15.649v385.233h224.638v-27.158
                       C158.534,358.075,57.475,358.075,42.85,358.075z" />
                                                <path
                                                    d="M81.527,206.842h184.495c1.812-10.16,5.393-19.608,10.095-28.452H81.527V206.842z" />
                                                <rect x="81.527" y="89.432" width="225.372" height="28.452" />
                                                <path
                                                    d="M81.527,295.822h191.268c5.112-3.106,10.57-5.63,16.415-7.183c-5.544-6.45-10.095-13.697-13.978-21.269H81.527V295.822z" />
                                                <path d="M363.629,298.669c41.071,0,74.16-33.197,74.16-74.139c0-40.984-33.09-74.16-74.16-74.16
                       c-40.898,0-74.009,33.176-74.009,74.16C289.62,265.472,322.731,298.669,363.629,298.669z" />
                                                <path d="M423.143,310.706H304.288c-21.226,0-38.612,19.457-38.612,43.422v119.33c0,1.316,0.604,2.481,0.69,3.84h194.59
                       c0.086-1.337,0.69-2.524,0.69-3.84v-119.33C461.733,330.227,444.39,310.706,423.143,310.706z" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <div class="function__wrapper">
                                    <h2 class="functions__header">
                                        Клиенты
                                    </h2>
                                </div>
                            </a>
                        </li>
                        <li class="functions__item">
                            <a href="/admin/view-product-settings" class="function__link">
                                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 122.88 114.58">
                                    <title>product</title>
                                    <path
                                        d="M118.13,9.54a3.25,3.25,0,0,1,2.2.41,3.28,3.28,0,0,1,2,3l.57,78.83a3.29,3.29,0,0,1-1.59,3L89.12,113.93a3.29,3.29,0,0,1-2,.65,3.07,3.07,0,0,1-.53,0L3.11,105.25A3.28,3.28,0,0,1,0,102V21.78H0A3.28,3.28,0,0,1,2,18.7L43.89.27h0A3.19,3.19,0,0,1,45.63,0l72.5,9.51Zm-37.26,1.7-24.67,14,30.38,3.88,22.5-14.18-28.21-3.7Zm-29,20L50.75,64.62,38.23,56.09,25.72,63.17l2.53-34.91L6.55,25.49V99.05l77.33,8.6V35.36l-32-4.09Zm-19.7-9.09L56.12,8,45.7,6.62,15.24,20l16.95,2.17ZM90.44,34.41v71.12l25.9-15.44-.52-71.68-25.38,16Z" />
                                </svg>
                                <div class="function__wrapper">
                                    <h2 class="functions__header">
                                        Товар
                                    </h2>
                                </div>
                            </a>
                        </li>
                        <li class="functions__item">
                            <a href="/admin/view-manufacturers" class="function__link">
                                <svg fill="#000000" height="800px" width="800px" version="1.1" id="Capa_1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="0 0 490 490" xml:space="preserve">
                                    <g>
                                        <path d="M5.891,97.03h74.772c3.253,0,5.891-2.637,5.891-5.89V68.562c0-3.253-2.638-5.891-5.891-5.891H5.891
                               C2.638,62.671,0,65.309,0,68.562v22.579C0,94.394,2.638,97.03,5.891,97.03z" />
                                        <path
                                            d="M486.663,157.581c-2.081-1.36-4.708-1.578-6.986-0.578L358.099,210.39v-46.645c0-2.486-1.255-4.805-3.337-6.164
                               c-2.082-1.36-4.709-1.578-6.986-0.578l-121.577,53.388v-46.646c0-2.486-1.256-4.805-3.337-6.164
                               c-2.083-1.361-4.709-1.577-6.986-0.578L86.554,213.79v-90.01c0-3.252-2.638-5.89-5.891-5.89H5.891c-3.253,0-5.891,2.638-5.891,5.89
                               v289.583c0,7.714,6.253,13.966,13.965,13.966h468.673c4.066,0,7.362-3.296,7.362-7.362V163.745
                               C490,161.259,488.745,158.94,486.663,157.581z M176.466,338.115c0,3.811-3.09,6.901-6.902,6.901h-33.358
                               c-3.812,0-6.901-3.091-6.901-6.901V282.9c0-3.812,3.09-6.901,6.901-6.901h33.358c3.813,0,6.902,3.09,6.902,6.901V338.115z
                                M308.366,338.115c0,3.811-3.09,6.901-6.901,6.901h-33.358c-3.811,0-6.902-3.091-6.902-6.901V282.9
                               c0-3.812,3.091-6.901,6.902-6.901h33.358c3.811,0,6.901,3.09,6.901,6.901V338.115z M440.268,338.115c0,3.811-3.089,6.901-6.9,6.901
                               h-33.359c-3.811,0-6.901-3.091-6.901-6.901V282.9c0-3.812,3.091-6.901,6.901-6.901h33.359c3.811,0,6.9,3.09,6.9,6.901V338.115z" />
                                    </g>
                                </svg>
                                <div class="function__wrapper">
                                    <h2 class="functions__header">
                                        Производители
                                    </h2>
                                </div>
                            </a>
                        </li>
                        <li class="functions__item">
                            <a href="/admin/view-offers" class="function__link">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 115.35 122.88"
                                    style="enable-background:new 0 0 115.35 122.88" xml:space="preserve">
                                    <g>
                                        <path
                                            d="M25.27,86.92c-1.81,0-3.26-1.46-3.26-3.26s1.47-3.26,3.26-3.26h21.49c1.81,0,3.26,1.46,3.26,3.26s-1.46,3.26-3.26,3.26 H25.27L25.27,86.92L25.27,86.92z M61.1,77.47c-0.96,0-1.78-0.82-1.78-1.82c0-0.96,0.82-1.78,1.78-1.78h4.65c0.04,0,0.14,0,0.18,0 c1.64,0.04,3.1,0.36,4.33,1.14c1.37,0.87,2.37,2.19,2.92,4.15c0,0.04,0,0.09,0.05,0.14l0.46,1.82h39.89c1,0,1.78,0.82,1.78,1.78 c0,0.18-0.05,0.36-0.09,0.55l-4.65,18.74c-0.18,0.82-0.91,1.37-1.73,1.37l0,0l-29.18,0c0.64,2.37,1.28,3.65,2.14,4.24 c1.05,0.68,2.87,0.73,5.93,0.68h0.04l0,0h20.61c1,0,1.78,0.82,1.78,1.78c0,1-0.82,1.78-1.78,1.78H87.81l0,0 c-3.79,0.04-6.11-0.05-7.98-1.28c-1.92-1.28-2.92-3.46-3.92-7.43l0,0L69.8,80.2c0-0.05,0-0.05-0.04-0.09 c-0.27-1-0.73-1.69-1.37-2.05c-0.64-0.41-1.5-0.59-2.51-0.59c-0.05,0-0.09,0-0.14,0H61.1L61.1,77.47L61.1,77.47z M103.09,114.13 c2.42,0,4.38,1.96,4.38,4.38s-1.96,4.38-4.38,4.38s-4.38-1.96-4.38-4.38S100.67,114.13,103.09,114.13L103.09,114.13L103.09,114.13z M83.89,114.13c2.42,0,4.38,1.96,4.38,4.38s-1.96,4.38-4.38,4.38c-2.42,0-4.38-1.96-4.38-4.38S81.48,114.13,83.89,114.13 L83.89,114.13L83.89,114.13z M25.27,33.58c-1.81,0-3.26-1.47-3.26-3.26c0-1.8,1.47-3.26,3.26-3.26h50.52 c1.81,0,3.26,1.46,3.26,3.26c0,1.8-1.46,3.26-3.26,3.26H25.27L25.27,33.58L25.27,33.58z M7.57,0h85.63c2.09,0,3.99,0.85,5.35,2.21 s2.21,3.26,2.21,5.35v59.98h-6.5V7.59c0-0.29-0.12-0.56-0.31-0.76c-0.2-0.19-0.47-0.31-0.76-0.31l0,0H7.57 c-0.29,0-0.56,0.12-0.76,0.31S6.51,7.3,6.51,7.59v98.67c0,0.29,0.12,0.56,0.31,0.76s0.46,0.31,0.76,0.31h55.05 c0.61,2.39,1.3,4.48,2.23,6.47H7.57c-2.09,0-3.99-0.85-5.35-2.21C0.85,110.24,0,108.34,0,106.25V7.57c0-2.09,0.85-4,2.21-5.36 S5.48,0,7.57,0L7.57,0L7.57,0z M25.27,60.25c-1.81,0-3.26-1.46-3.26-3.26s1.47-3.26,3.26-3.26h50.52c1.81,0,3.26,1.46,3.26,3.26 s-1.46,3.26-3.26,3.26H25.27L25.27,60.25L25.27,60.25z" />
                                    </g>
                                </svg>
                                <div class="function__wrapper">
                                    <h2 class="functions__header">
                                        Коммерческие предложения
                                    </h2>
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
            <?php } else { ?>
                <div class="admin">

                    <div class="admin__wrapper">
                        <h2 class="admin__header">
                            Вход
                        </h2>
                        <form method="post" class="admin__form">
                            <input type='text' placeholder='Логин' class='admin__input' name='login' required>
                            <input type='password' placeholder='Пароль' class='admin__input' name='password' required>
                            <input type='submit' value='Войти' class='admin__button'>
                        </form>
                    </div>

                </div>
            <?php }?>


        </div>

    </main>
</body>
<?php $_smarty_tpl->_subTemplateRender('file:footer_admin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</html><?php }
}
