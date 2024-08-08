<?php

if (isset($_SERVER['HTTP_REFERER'])) {
$urlback = htmlspecialchars($_SERVER['HTTP_REFERER']);
echo 
"<div class='back__button'>
    <a href='$urlback' class='btn btn-default pull-left'>Назад</a>
</div>";
}
echo "<div class='header__wrapper'>";
// форма поиска
echo "<form role='search' action='search'>";
echo "<div class='input-group col-md-3 pull-left margin-right-1em'>";
$search_value = isset($search_term) ? "value='{$search_term}'" : "";
echo "<input type='text' class='form-control' placeholder='Введите название или описание продукта ...' name='s' required {$search_value} />";
echo "<div class='input-group-btn'>";
echo "<button class='btn btn-primary' type='submit'><i class='glyphicon glyphicon-search'></i></button>";
echo "</div>";
echo "</div>";
echo "</form>";
echo "</div>";
// кнопка создания товара


// показать товары, если они есть
if ($total_rows > 0) {

    echo "<table class='table table-hover table-responsive table-bordered'>";
    echo "<tr>";
    echo "<th>Название</th>";
    echo "<th>Описание</th>";
    echo "<th>Ссылка</th>";
    echo "<th>Действия</th>";
    echo "</tr>";

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

        extract($row);

        echo "<tr>";
        echo "<td>{$name}</td>";
        echo "<td>{$descr}</td>";
        echo "<td>{$link}</td>";

        echo "<td>";

        // кнопка просмотра товара
        echo "<a href='read-vendor?id={$id}' class='btn btn-primary left-margin'>";
        echo "<span class='glyphicon glyphicon-list'></span> Просмотр";
        echo "</a>";

        // кнопка редактирования товара
        echo "<a href='update-vendor?id={$id}' class='btn btn-info left-margin'>";
        echo "<span class='glyphicon glyphicon-edit'></span> Редактировать";
        echo "</a>";

        // кнопка удаления товара
        echo "<a href='delete_vendor.php?id={$id}' class='btn btn-danger delete-object'>";
        echo "<span class='glyphicon glyphicon-remove'></span> Удалить";
        echo "</a>";

        echo "</td>";

        echo "</tr>";
    }

    echo "</table>";

    // пагинация
    include_once "paging.php";
}

// сообщить пользователю, что товаров нет
else {
    echo "<div class='alert alert-danger'>Товаров не найдено.</div>";
}
