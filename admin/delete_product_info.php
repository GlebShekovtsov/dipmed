<?php

// проверим, было ли получено значение в $_POST
if ($_GET) {

    // подключаем файлы для работы с базой данных и файлы с объектами
    include_once "config/database.php";
    include_once "objects/product_info_admin.php";

    // получаем соединение с базой данных
    $database = new Database();
    $db = $database->getConnection();

    // подготавливаем объект Product
    $productInfo = new ProductInfo($db);

    // устанавливаем ID товара для удаления
    $productInfo->id = $_GET["id"];

    // удаляем товар
    if ($productInfo->delete()) {
?>
        <script>
            window.location.replace("/admin/view-product_info");
        </script>
<?php
    }

    // если невозможно удалить товар
    else {
        echo "Невозможно удалить информацию";
    }
}

?>