<?php
session_start();
$id = isset($_GET["id"]) ? $_GET["id"] : die("ERROR: отсутствует ID.");

include_once 'template_config.php';
include_once 'config/database.php';
include_once 'objects/product_admin.php';
include_once 'objects/categories_admin.php';


$smarty = new Smarty_Config();
$smarty->caching = true;
$smarty->force_compile = true;

$database = new Database();
$db = $database->getConnection();
$product = new Product($db);
$category = new Category($db);

$product->id = $id;
$product->readOne();


$smarty->assign('title', 'Изменение карточки товара');
$smarty->display('update_product.tpl');

?>
<?php
if ($_POST) {

    // устанавливаем значения свойствам товара
    // $product->img = $_POST["img"];
    $product->name = $_POST["name"];
    $product->category = $_POST["category_id"];
    $product->link = $_POST["link"];
    $img = !empty($_FILES["img"]["name"])
        ? sha1_file($_FILES["img"]["tmp_name"]) . "-" . basename($_FILES["img"]["name"]) : "";
    $product->img = $img;
    // обновление товара
    if ($product->update()) {
        echo $product->uploadPhoto();
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

<form action="update-product?id=<?= $id ?>" enctype="multipart/form-data" method="post">
    <table class="table table-hover table-responsive table-bordered">
        <tr>
            <td>Название</td>
            <td><input type="text" name="name" value="<?= $product->name; ?>" class="form-control" /></td>
        </tr>
        <tr>
            <td>Скачать изображение</td>
            <td><a href="../uploads/<?= $product->img ?>" download="../uploads/<?= $product->img ?>">Ссылка</a></td>
        </tr>
        <tr>
            <td>Изображение</td>
            <td><input type="file" name="img" /></td>
        </tr>
        <tr>
            <td>Ссылка</td>
            <td><input type="text" name="link" value="<?= $product->link; ?>" class="form-control" /></td>
        </tr>
        <tr>
            <td>Категория</td>
            <td>
                <?php
                $stmt = $category->read();

                // помещаем категории в выпадающий список
                echo "<select class='form-control' name='category_id'>";
                echo "<option selected disabled value=''>Выберите категорию</option>";
                while ($row_category = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $category_name = $row_category["name"];

                    // необходимо выбрать текущую категорию товара
                    if ($product->category == $category_name) {
                        echo "<option value='$category_name' selected>";
                    } else {
                        echo "<option value='$category_name'>";
                    }
                    echo "$category_name</option>";
                }
                echo "</select>";
                ?>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="submit" class="btn btn-primary">Обновить</button>
            </td>
        </tr>

    </table>
</form>
</div>
</main>