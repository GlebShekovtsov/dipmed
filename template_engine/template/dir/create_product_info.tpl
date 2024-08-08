{include file="title_admin.tpl"}

<body>
    <main class="main__section admin__section">

        <div class="container">

            <div class="page-header">
                <h1>Создание карточки продукта</h1>
            </div>
            <div class="right-button-margin">
                <a href="/admin/view-product_info" class="btn btn-default float-end">Просмотреть всё</a>
            </div>
            {(empty($status)) ? '' : $status}
            <form action="/admin/create-product-info" enctype="multipart/form-data" method="post">

                <h3 class="product__header">ID Товара</h3>
                <select name="id_product" class="form-control settings__control">
                    {foreach from=$itemsProduct item=itemProd key=key name=name}
                        <option value="{$itemProd.id}">{$itemProd.id} - {$itemProd.name} - {$itemProd.category}</option>
                    {/foreach}
                </select>
                <h3 class="product__header">Полное название товара</h3>
                <input type="text" name="full_name" class="form-control settings__input" />
                <h3 class="product__header">Страна</h3>
                <input type="text" name="country" class="form-control settings__input" />
                <h3 class="product__header">Цена</h3>
                <input type="text" name="price" class="form-control settings__input" />
                <h3 class="product__header">Производитель</h3>
                <select name="manufacturer_id" class="form-control settings__control">
                    {foreach from=$itemsManufacturer item=itemMan key=key name=name}
                        <option value="{$itemMan.id}">{$itemMan.id} - {$itemMan.man_name}</option>
                    {/foreach}
                </select>
                <h3 class="product__header">Категория</h3>
                <select name="category_id" class="form-control settings__control">
                    {foreach from=$itemsCategory item=itemCat key=key name=name}
                        <option value="{$itemCat.id}">{$itemCat.id} - {$itemCat.name}</option>
                    {/foreach}
                </select>
                <div class="message__wrapper">
                    <h3 class="product__header">Описание</h3>
                    <div class="buttons__wrapper">
                        <a href="#" id="button-p">Параграф</a>
                        <a href="#" id="button-ul">Список</a>
                        <a href="#" id="button-li">Элемент списка</a>
                        <a href="#" id="button-h">Заголовок</a>
                    </div>
                    <textarea name="descr" class="form-control settings__area" id="control"></textarea>

                </div>
                <button type="submit" class="btn btn-primary">Создать</button>
            </form>
        </div>

    </main>
</body>
{include file='footer_admin.tpl'}
<script>
    function addTag(open, close) {
        var control = $('#control')[0];
        var start = control.selectionStart;
        var end = control.selectionEnd;
        if (start != end) {
            var text = $(control).val();
            $(control).val(text.substring(0, start) + open + text.substring(start, end) + close + text.substring(end));
            $(control).focus();
            var sel = end + (open + close).length;
            control.setSelectionRange(sel, sel);
        }
        return false;
    }
    // Параграф
    $('#button-p').click(function() {
        return addTag('<p class="product-below-descr__text">', '</p>');
    });
    $('#button-ul').click(function() {
        return addTag('<ul class="product-below-descr__list descr-list">', '</ul>');
    });
    $('#button-li').click(function() {
        return addTag('<li class="descr-list__item">', '</li>');
    });
    $('#button-h').click(function() {
        return addTag('<h3 class="product-below-descr__header">', '</h3>');
    });
</script>

</html>