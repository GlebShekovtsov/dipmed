<?php
class Client
{
    private $conn;
    private $table_name = "clients";

    public $id;
    public $fio;
    public $telnum;
    public $email;


    public function __construct($db)
    {
        $this->conn = $db;
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
        fio=:fio, telnum=:telnum, email=:email, date=:date";

        $stmt = $this->conn->prepare($query);


        $this->fio = htmlspecialchars(strip_tags($this->fio));
        $this->telnum = htmlspecialchars(strip_tags($this->telnum));
        $this->email = htmlspecialchars(strip_tags($this->email));


        $this->timestamp = date("Y-m-d H:i:s");

        $stmt->bindParam(":fio", $this->fio);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":telnum", $this->telnum);
        $stmt->bindParam(":date", $this->timestamp);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

}
