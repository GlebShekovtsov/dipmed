<?php

class Order
{
    private $conn;
    private $table_name = "ord";

    public $id;
    public $fio;
    public $city;
    public $email;
    public $telnum;
    public $message;
    public $created;

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
            created ASC";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
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
    function create()
    {
        $query = "INSERT INTO
        " . $this->table_name . "
    SET
        fio=:fio, city=:city, email=:email, telnum=:telnum, message=:message, created=:created";

        $stmt = $this->conn->prepare($query);


        $this->fio = htmlspecialchars(strip_tags($this->fio));
        $this->city = htmlspecialchars(strip_tags($this->city));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->telnum = htmlspecialchars(strip_tags($this->telnum));
        $this->message = htmlspecialchars(strip_tags($this->message));

        $this->timestamp = date("Y-m-d H:i:s");

        $stmt->bindParam(":fio", $this->fio);
        $stmt->bindParam(":city", $this->city);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":telnum", $this->telnum);
        $stmt->bindParam(":message", $this->message);
        $stmt->bindParam(":created", $this->timestamp);

        if ($stmt->execute()) {
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
                id DESC
            LIMIT
                {$from_record_num}, {$records_per_page}";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
}
