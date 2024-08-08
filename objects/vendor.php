<?php

class Vendor
{
    private $conn;
    private $table_name = "vendors";

    public $id;
    public $name;


    public function __construct($db)
    {
        $this->conn = $db;
    }
    function readOne()
    {
        $query = "SELECT
        img, name, descr, link
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

        $this->img = $row["img"];
        $this->name = $row["name"];
        $this->descr = $row["descr"];
        $this->link = $row["link"];
        $this->img = $row["img"];
        return $stmt;
    }
    function readRealAll()
    {
        $query = "SELECT *, CONCAT(SUBSTRING(descr, 1, 300), '...') as short_descr
        FROM  " . $this->table_name . "
        ORDER BY name DESC";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
    function readAll()
    {
        $query = "SELECT *
        FROM  " . $this->table_name . "
        ORDER BY name
        LIMIT 8";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
}
