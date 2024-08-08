<?php

// проверим, было ли получено значение в $_POST
if ($_GET) {

    // подключаем файлы для работы с базой данных и файлы с объектами
    include_once "config/database.php";
    include_once "objects/product_images_admin.php";

    // получаем соединение с базой данных
    $database = new Database();
    $db = $database->getConnection();

    // подготавливаем объект Product
    $productImage= new ProductImages($db);

    // устанавливаем ID товара для удаления
    $productImage->id = $_GET["id"];

    // удаляем товар
    if ($productImage->delete()) {
?>
        <script>
            window.location.replace("/admin/view-product_images");
        </script>
<?php
    }

    // если невозможно удалить товар
    else {
        echo "Невозможно удалить информацию";
    }
}

?>