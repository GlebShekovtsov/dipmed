<?php
session_start();
$id = isset($_GET["id"]) ? $_GET["id"] : die("ERROR: отсутствует ID.");

include_once 'template_config.php';
include_once 'config/database.php';
include_once 'objects/client_admin.php';

$smarty = new Smarty_Config();
$smarty->caching = true;
$smarty->force_compile = true;

$database = new Database();
$db = $database->getConnection();
$client = new client($db);
$client->id = $id;
$client->readOne();


$smarty->assign('title', 'Изменение клиента');
$smarty->display('update_client.tpl');

?>
<?php
if ($_POST) {

    // устанавливаем значения свойствам товара
    // $client->img = $_POST["img"];
    $client->fio = $_POST["fio"];
    $client->telnum = $_POST["telnum"];
    $client->email = $_POST["email"];

    // обновление товара
    if ($client->update()) {
        echo "<div class='alert alert-success alert-dismissable'>";
        echo "Клиент был обновлён.";
        echo "</div>";
    }

    // если не удается обновить товар, сообщим об этом пользователю
    else {
        echo "<div class='alert alert-danger alert-dismissable'>";
        echo "Невозможно обновить клиента.";
        echo "</div>";
    }
}
?>

<form action="update-client?id=<?= $id ?>" enctype="multipart/form-data" method="post">
    <table class="table table-hover table-responsive table-bordered">
        <tr>
            <td>ФИО</td>
            <td><input type="text" name="fio" value="<?= $client->fio; ?>" class="form-control" /></td>
        </tr>
        <tr>
            <td>Номер телефона</td>
            <td><input type="text" name="telnum" value="<?= $client->telnum; ?>" class="form-control" /></td>
        </tr>
        <tr>
            <td>Почта</td>
            <td><input type="text" name="email" value="<?= $client->email; ?>" class="form-control" /></td>
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