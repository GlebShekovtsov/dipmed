<?php

class Deal
{
    private $conn;
    private $table_name = "deals";

    public $id;
    public $product_id;
    public $phone_num;
    public $message;
    public $created;

    public function __construct($db)
    {
        $this->conn = $db;
    }
    // function readOne()
    // {
    //     $query = "SELECT
    //     *
    // FROM
    //     " . $this->table_name . "
    // WHERE
    //     id = ?
    // LIMIT
    //     0,1";

    //     $stmt = $this->conn->prepare($query);
    //     $stmt->bindParam(1, $this->id);
    //     $stmt->execute();
    //     return $stmt;


    //     $row = $stmt->fetch(PDO::FETCH_ASSOC);

    //     $this->fio = $row["fio"];
    //     $this->gender = $row["gender"];
    //     $this->email = $row["email"];
    //     $this->telnum = $row["telnum"];
    //     $this->message = $row["message"];
    //     $this->created = $row["created"];
    // }
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
        product_id=:product_id, phone_num=:phone_num, message=:message, created=:created";

        $stmt = $this->conn->prepare($query);


        $this->product_id = htmlspecialchars(strip_tags($this->product_id));
        $this->phone_num = htmlspecialchars(strip_tags($this->phone_num));
        $this->message = htmlspecialchars(strip_tags($this->message));


        $this->timestamp = date("Y-m-d H:i:s"); //день месяц год

        $stmt->bindParam(":product_id", $this->product_id);
        $stmt->bindParam(":phone_num", $this->phone_num);
        $stmt->bindParam(":message", $this->message);
        $stmt->bindParam(":created", $this->timestamp);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
