<?php

// проверим, было ли получено значение в $_POST
if ($_GET) {

    // подключаем файлы для работы с базой данных и файлы с объектами
    include_once "config/database.php";
    include_once "objects/news_admin.php";

    // получаем соединение с базой данных
    $database = new Database();
    $db = $database->getConnection();

    // подготавливаем объект Product
    $news = new News($db);

    // устанавливаем ID товара для удаления
    $news->id = $_GET["id"];

    // удаляем товар
    if ($news->delete()) {
?>
        <script>
            window.location.replace("/admin/view-news");
        </script>
<?php
    }

    // если невозможно удалить товар
    else {
        echo "Невозможно удалить новость";
    }
}

?>