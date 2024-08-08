<?php
session_start();

class Admin
{
    private $conn;
    private $table_name = "admin";

    public $id;
    public $login;
    public $password;


    public function __construct($db)
    {
        $this->conn = $db;
    }
    function readOne()
    {
        $query = "SELECT * FROM " . $this->table_name . "
    WHERE
        password = :password AND login = :login";

        $stmt = $this->conn->prepare($query);

        $this->password = htmlspecialchars(strip_tags($this->password));
        $this->login = htmlspecialchars(strip_tags($this->login));

        $stmt->bindParam(":password", $this->password);
        $stmt->bindParam(":login", $this->login);

        $stmt->execute();

        if ($stmt->fetch(PDO::FETCH_NUM)) {
            return true;
        } else {
            unset($_SESSION['login'], $_SESSION['password']);
            return false;
        }
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
}
