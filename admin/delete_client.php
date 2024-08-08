<?php

// проверим, было ли получено значение в $_POST
if ($_GET) {

    // подключаем файлы для работы с базой данных и файлы с объектами
    include_once "config/database.php";
    include_once "objects/client_admin.php";

    // получаем соединение с базой данных
    $database = new Database();
    $db = $database->getConnection();

    // подготавливаем объект Product
    $client = new Client($db);

    // устанавливаем ID товара для удаления
    $client->id = $_GET["id"];

    // удаляем товар
    if ($client->delete()) {
?>
        <script>
            window.location.replace("/admin/view-client");
        </script>
<?php
    }

    // если невозможно удалить товар
    else {
        echo "Невозможно удалить клиента";
    }
}

?>