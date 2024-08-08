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
        return $stmt;


        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->fio = $row["fio"];
        $this->city = $row["city"];
        $this->email = $row["email"];
        $this->telnum = $row["telnum"];
        $this->message = $row["message"];
        $this->created = $row["created"];
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

        $this->timestamp = date("Y-m-d H:i:s"); //день месяц год

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
}
