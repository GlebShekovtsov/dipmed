<?php

class Category
{
    // подключение к базе данных и имя таблицы
    private $conn;
    private $table_name = "category";

    // свойства объекта
    public $id;
    public $name;
    public $img;


    public function __construct($db)
    {
        $this->conn = $db;
    }

    // данный метод используется в раскрывающемся списке
    function read()
    {
        // запрос MySQL: выбираем столбцы в таблице «categories»
        $query = "SELECT
                    id, name, cat_img
                FROM
                    " . $this->table_name . "
                ORDER BY
                    name";

        $stmtc = $this->conn->prepare($query);
        $stmtc->execute();

        return $stmtc;
    }
    function readName()
    {
        // запрос MySQL
        $query = "SELECT name FROM " . $this->table_name . " WHERE id = ? limit 0,1";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->name = $row["name"];
        $this->name = $row["img"];

    }
}
