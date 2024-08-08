<?php
session_start();
$id = isset($_GET["id"]) ? $_GET["id"] : die("ERROR: отсутствует ID.");

include_once 'template_config.php';
include_once 'config/database.php';
include_once 'objects/manufacturer_admin.php';
include_once 'objects/categories_admin.php';


$smarty = new Smarty_Config();
$smarty->caching = true;
$smarty->force_compile = true;

$database = new Database();
$db = $database->getConnection();
$manufacturer = new Manufacturer($db);

$manufacturer->id = $id;
$manufacturer->readName();


$smarty->assign('title', 'Изменение информации о производителе');
$smarty->display('update_manufacturer.tpl');

?>
<?php
if ($_POST) {

    // устанавливаем значения свойствам товара
    // $product->img = $_POST["img"];
    $manufacturer->man_name = $_POST["man_name"];
    $img = !empty($_FILES["image"]["name"])
        ? sha1_file($_FILES["image"]["tmp_name"]) . "-" . basename($_FILES["image"]["name"]) : "";
    $manufacturer->image = $img;
    // обновление товара
    if ($manufacturer->update()) {
        echo $manufacturer->uploadPhoto();
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

<form action="update-manufacturer?id=<?= $id ?>" enctype="multipart/form-data" method="post">
    <table class="table table-hover table-responsive table-bordered">
        <tr>
            <td>Название</td>
            <td><input type="text" name="man_name" value="<?= $manufacturer->man_name; ?>" class="form-control" /></td>
        </tr>
        <tr>
            <td>Скачать изображение</td>
            <td><a href="../uploads/<?= $manufacturer->image ?>" download="../uploads/<?= $manufacturer->image ?>">Ссылка</a></td>
        </tr>
        <tr>
            <td>Изображение</td>
            <td><input type="file" name="image" /></td>
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