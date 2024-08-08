<?php

// проверим, было ли получено значение в $_POST
if ($_GET) {

    // подключаем файлы для работы с базой данных и файлы с объектами
    include_once "config/database.php";
    include_once "objects/offer_admin.php";

    // получаем соединение с базой данных
    $database = new Database();
    $db = $database->getConnection();

    // подготавливаем объект Product
    $offer = new Offer($db);

    // устанавливаем ID товара для удаления
    $offer->id = $_GET["id"];

    // удаляем товар
    if ($offer->delete()) {
?>
        <script>
            window.location.replace("/admin/view-offers");
        </script>
<?php
    }

    // если невозможно удалить товар
    else {
        echo "Невозможно удалить заявку";
    }
}

?>