<?php
session_start();
$id = isset($_GET["id"]) ? $_GET["id"] : die("ERROR: отсутствует ID.");

include_once 'template_config.php';
include_once 'config/database.php';
include_once 'objects/vendor_admin.php';

$smarty = new Smarty_Config();
$smarty->caching = true;
$smarty->force_compile = true;

$database = new Database();
$db = $database->getConnection();
$vendor = new Vendor($db);
$vendor->id = $id;
$vendor->readOne();


$smarty->assign('title', 'Изменение карточки партнера');
$smarty->display('update_vendor.tpl');

?>
<?php
if ($_POST) {

    // устанавливаем значения свойствам товара
    // $vendor->img = $_POST["img"];
    $vendor->name = $_POST["name"];
    $vendor->descr = $_POST["description"];
    $vendor->link = $_POST["link"];
    $img = !empty($_FILES["img"]["name"])
        ? sha1_file($_FILES["img"]["tmp_name"]) . "-" . basename($_FILES["img"]["name"]) : "";
    $vendor->img = $img;
    // обновление товара
    if ($vendor->update()) {
        echo $vendor->uploadPhoto();
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

<form action="update-vendor?id=<?= $id ?>" enctype="multipart/form-data" method="post">
    <table class="table table-hover table-responsive table-bordered">
        <tr>
            <td>Название</td>
            <td><input type="text" name="name" value="<?= $vendor->name; ?>" class="form-control" /></td>
        </tr>
        <tr>
            <td>Описание</td>
            <td><textarea name="description" class="form-control"><?= $vendor->descr; ?></textarea></td>
        </tr>
        <tr>
            <td>Скачать изображение</td>
            <td><a href="../uploads/<?= $vendor->img ?>" download="../uploads/<?= $vendor->img ?>">Ссылка</a></td>
        </tr>
        <tr>
            <td>Изображение</td>
            <td><input type="file" name="img" /></td>
        </tr>
        <tr>
            <td>Ссылка</td>
            <td><input type="text" name="link" value="<?= $vendor->link; ?>" class="form-control" /></td>
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