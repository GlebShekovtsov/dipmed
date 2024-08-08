<?php

// проверим, было ли получено значение в $_POST
if ($_GET) {

    // подключаем файлы для работы с базой данных и файлы с объектами
    include_once "config/database.php";
    include_once "objects/manufacturer_admin.php";

    // получаем соединение с базой данных
    $database = new Database();
    $db = $database->getConnection();

    // подготавливаем объект Product
    $manufacturer = new Manufacturer($db);

    // устанавливаем ID товара для удаления
    $manufacturer->id = $_GET["id"];

    // удаляем товар
    if ($manufacturer->delete()) {
?>
        <script>
            window.location.replace("/admin/view-manufacturers");
        </script>
<?php
    }

    // если невозможно удалить товар
    else {
        echo "Невозможно удалить информацию";
    }
}

?>