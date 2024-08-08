<?php
session_start();
$id = isset($_GET["id"]) ? $_GET["id"] : die("ERROR: отсутствует ID.");

include_once 'template_config.php';
include_once 'config/database.php';
include_once 'objects/news_admin.php';

$smarty = new Smarty_Config();
$smarty->caching = true;
$smarty->force_compile = true;

$database = new Database();
$db = $database->getConnection();
$news = new news($db);
$news->id = $id;
$news->readOne();


$smarty->assign('title', 'Изменение новости');
$smarty->display('update_news.tpl');

?>
<?php
if ($_POST) {

    // устанавливаем значения свойствам товара
    $news->header = $_POST["header"];
    $news->text = $_POST["text"];
    $img = !empty($_FILES["img"]["name"])
        ? sha1_file($_FILES["img"]["tmp_name"]) . "-" . basename($_FILES["img"]["name"]) : "";
    $news->img = $img;
    // обновление товара
    if ($news->update()) {
        echo $news->uploadPhoto();
        echo "<div class='alert alert-success alert-dismissable'>";
        echo "Новость была обновлён.";
        echo "</div>";
    }

    // если не удается обновить товар, сообщим об этом пользователю
    else {
        echo "<div class='alert alert-danger alert-dismissable'>";
        echo "Невозможно обновить новость.";
        echo "</div>";
    }
}
?>

<form action="update-news?id=<?= $id ?>" enctype="multipart/form-data" method="post">
    <table class="table table-hover table-responsive table-bordered">
        <tr>
            <td>Заголовок</td>
            <td><input type="text" name="header" value="<?= $news->header; ?>" class="form-control" /></td>
        </tr>
        <tr>
            <td>Текст</td>
            <td><textarea name="text" class="form-control"><?= $news->text; ?></textarea></td>
        </tr>
        <tr>
            <td>Скачать изображение</td>
            <td><a href="../uploads/<?= $news->img ?>" download="../uploads/<?= $news->img ?>">Ссылка</a></td>
        </tr>
        <tr>
            <td>Изображение</td>
            <td><input type="file" name="img" /></td>
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