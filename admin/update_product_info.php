<?php
session_start();
$id = isset($_GET["id"]) ? $_GET["id"] : die("ERROR: отсутствует ID.");

include_once 'template_config.php';
include_once 'config/database.php';
include_once 'objects/product_admin.php';
include_once 'objects/product_info_admin.php';
include_once 'objects/categories_admin.php';
include_once 'objects/manufacturer_admin.php';


$smarty = new Smarty_Config();
$smarty->caching = true;
$smarty->force_compile = true;

$database = new Database();
$db = $database->getConnection();
$product = new Product($db);
$category = new Category($db);

$productInfo = new ProductInfo($db);
$manufacturer = new Manufacturer($db);

$productInfo->id = $id;
$productInfo->readOne();


$smarty->assign('title', 'Изменение информации о товаре');
$smarty->display('update_product_info.tpl');

?>
<?php
if ($_POST) {

    $productInfo->id_product = $_POST["id_product"];
    $productInfo->full_name = $_POST["full_name"];
    $productInfo->manufacturer_id = $_POST["manufacturer_id"];
    $productInfo->country = $_POST["country"];
    $productInfo->price = $_POST["price"];
    $productInfo->descr = $_POST["descr"];
    $productInfo->category_id = $_POST["category_id"];


    // обновление товара
    if ($productInfo->update()) {
        echo "<div class='alert alert-success alert-dismissable'>";
        echo "Товар был обновлён.";
        echo "</div>";
    }

    // если не удается обновить товар, сообщим об этом пользователю
    else {
        echo "<div class='alert alert-danger alert-dismissable'>";
        echo "Невозможно обновить товар.";
        echo "</div>";
    }
}
?>

<form class="product_info_update" action="update-product-info?id=<?= $id ?>" enctype="multipart/form-data" method="post">

    <h3 class="product__header">ID Товара</h3>
    <?php
    $stmt = $product->read();

    // помещаем категории в выпадающий список
    echo "<select class='form-control settings__control' name='id_product'>";
    echo "<option selected disabled value=''>Выберите категорию</option>";
    while ($row_product = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $productName = $row_product["name"];
        $productId = $row_product["id"];
        // необходимо выбрать текущую категорию товара
        if ($productInfo->id_product == $productId) {
            echo "<option value='$productId' selected>";
        } else {
            echo "<option value='$productId'>";
        }
        echo "$productName</option>";
    }
    echo "</select>";
    ?>
    <h3 class="product__header">Полное название товара</h3>
    <input type="text" value="<?= $productInfo->full_name; ?>" name="full_name" class="form-control settings__input" />
    <h3 class="product__header">Страна</h3>
    <input type="text" value="<?= $productInfo->country; ?>" name="country" class="form-control settings__input" />
    <h3 class="product__header">Цена</h3>
    <input type="text" value="<?= $productInfo->price; ?>" name="price" class="form-control settings__input" />
    <h3 class="product__header">Производитель</h3>
    <?php
    $stmt = $manufacturer->read();

    // помещаем категории в выпадающий список
    echo "<select class='form-control settings__control' name='manufacturer_id'>";
    echo "<option selected disabled value=''>Выберите категорию</option>";
    while ($row_manufacturer = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $manufacturerName = $row_manufacturer["man_name"];
        $manufacturerId = $row_manufacturer["id"];

        // необходимо выбрать текущую категорию товара
        if ($productInfo->manufacturer_id == $manufacturerId) {
            echo "<option value='$manufacturerId' selected>";
        } else {
            echo "<option value='$manufacturerId'>";
        }
        echo "$manufacturerName</option>";
    }
    echo "</select>";
    ?>
    <h3 class="product__header">Категория</h3>
    <?php
    $stmt = $category->read();

    // помещаем категории в выпадающий список
    echo "<select class='form-control settings__control' name='category_id'>";
    echo "<option selected disabled value=''>Выберите категорию</option>";
    while ($row_category = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $category_name = $row_category["name"];
        $categoryId = $row_category["id"];
        // необходимо выбрать текущую категорию товара
        if ($productInfo->category_id == $categoryId) {
            echo "<option value='$categoryId' selected>";
        } else {
            echo "<option value='$categoryId'>";
        }
        echo "$category_name</option>";
    }
    echo "</select>";
    ?>
    <div class="message__wrapper">
        <h3 class="product__header">Описание</h3>
        <div class="buttons__wrapper">
            <a href="#" id="button-p">Параграф</a>
            <a href="#" id="button-ul">Список</a>
            <a href="#" id="button-li">Элемент списка</a>
            <a href="#" id="button-h">Заголовок</a>
        </div>
        <textarea name="descr" class="form-control settings__area" id="control"><?= $productInfo->descr; ?></textarea>

    </div>
    <button type="submit" class="btn btn-primary">Обновить</button>
</form>
</div>
</main>

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