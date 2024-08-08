<?php

class Offer
{
    private $conn;
    private $table_name = "deals";

    public $id;
    public $product_id;
    public $phone_num;
    public $message;
    public $created;
    public $name;
    
    public function __construct($db)
    {
        $this->conn = $db;
    }
    public function countAll()
    {
        // запрос MySQL
        $query = "SELECT id FROM " . $this->table_name . "";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $num = $stmt->rowCount();

        return $num;
    }
    function read()
    {
        $query = "SELECT * 
            FROM
            " . $this->table_name . "
        ORDER BY 
            created DESC";

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
    INNER JOIN `product` ON deals.product_id = product.id
    WHERE
        deals.id = ?
    LIMIT
        0,1";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();
        return $stmt;


        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->product_id = $row["product_id"];
        $this->phone_num = $row["phone_num"];
        $this->message = $row["message"];
        $this->created = $row["created"];
        $this->name = $row["name"];
    }
    function readNew()
    {
        $query = "SELECT * 
        FROM
        " . $this->table_name . "
        WHERE created >= DATE_SUB(NOW() , INTERVAL 20 SECOND)
    ORDER BY 
        created ASC";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        if ($stmt->fetch(PDO::FETCH_NUM)) {
            return true;
        } else {
            return false;
        }
    }

    function delete()
    {
        // запрос MySQL для удаления
        $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);

        if ($result = $stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
    function readAll($from_record_num, $records_per_page)
    {
        // запрос MySQL
        $query = "SELECT
                *
            FROM
                " . $this->table_name . "
            ORDER BY
                id ASC
            LIMIT
                {$from_record_num}, {$records_per_page}";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
}
