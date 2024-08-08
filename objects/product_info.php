<?php

class ProductInfo
{
    private $conn;
    private $table_name = "product_info";

    public $id;
    public $id_product;
    public $full_name;
    public $manufacturer_id;
    public $country;
    public $price;
    public $descr;
    public $category;


    public function __construct($db)
    {
        $this->conn = $db;
    }

    // метод чтения товара
    function ReadAllWP()
    {
        // запрос MySQL
        $query = "SELECT
                    *
                FROM
                    " . $this->table_name . "
                INNER JOIN `manufacturer` ON product_info.manufacturer_id = manufacturer.id
                INNER JOIN `product` ON product_info.id_product = product.id

                ORDER BY
                    full_name";

        $stmtn = $this->conn->prepare($query);
        $stmtn->execute();

        return $stmtn;
    }
    function readCategory()
    {
        $query = "SELECT
        *
    FROM
        " . $this->table_name . "
        INNER JOIN `product` ON  product_info.id_product = product.id
        INNER JOIN `manufacturer` ON manufacturer.id = product_info.manufacturer_id
        INNER JOIN `category` ON product_info.category_id = category.id 
    WHERE
        category_id=:category";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":category", $this->category);

        $stmt->execute();

        return $stmt;
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->category = $row["category"];
    }


    function readOne()
    {
        $query = "SELECT
            *
        FROM
            " . $this->table_name . "
        WHERE
            id_product = ?
        LIMIT
            0,1";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id_product);
        $stmt->execute();
        return $stmt;
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->full_name = $row["full_name"];
        $this->country = $row["country"];
        $this->price = $row["price"];
        $this->descr = $row["descr"];
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
