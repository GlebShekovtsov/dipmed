<?php
class Product
{
    private $conn;
    private $table_name = "product";

    public $id;
    public $name;
    public $category;
    public $img;
    public $link;


    public function __construct($db)
    {
        $this->conn = $db;
    }

    // метод создания товара


    function readAll($from_record_num, $records_per_page)
    {
        // запрос MySQL
        $query = "SELECT
                    *
                FROM
                    " . $this->table_name . "
                ORDER BY
                    name ASC
                LIMIT
                    {$from_record_num}, {$records_per_page}";

        $stmtp = $this->conn->prepare($query);
        $stmtp->execute();

        return $stmtp;
    }

    function Read()
    {
        // запрос MySQL
        $query = "SELECT
                    *
                FROM
                    " . $this->table_name . "
                
                ORDER BY
                    RAND()
                LIMIT 8";

        $stmtp = $this->conn->prepare($query);
        $stmtp->execute();

        return $stmtp;
    }
    function ReadAllWP()
    {
        // запрос MySQL
        $query = "SELECT
                    *
                FROM
                    " . $this->table_name . "";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
    function readOne()
    {
        $query = "SELECT
        *
    FROM
        " . $this->table_name . "
    WHERE
        id = ?
    LIMIT
        0,1";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->name = $row["name"];
        $this->category = $row["category"];
        $this->img = $row["img"];
        $this->link = $row["link"];
        return $stmt;
    }

    function readCategory()
    {
        $query = "SELECT
        *
    FROM
        " . $this->table_name . "
    WHERE
        category LIKE :category";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":category", $this->category);

        $stmt->execute();

        return $stmt;
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->name = $row["name"];
        $this->category = $row["category"];
        $this->img = $row["img"];
        $this->link = $row["link"];
    }


    public function countAll()
    {
        $query = "SELECT id FROM " . $this->table_name . "";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $num = $stmt->rowCount();
        return $num;
    }
}
