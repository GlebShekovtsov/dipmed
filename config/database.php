<?php

class Database
{
    private $host = "localhost";
    private $db_name = "dipmedtorg";
    // private $db_name = "denislgb_dipmedt";
    private $username = "root";
    private $password = "root";
    // private $password = "NB*nMW0u";
    public $conn;

    public function getConnection() {
        $this->conn = null;

        try
        {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        }
        catch (PDOException $exception) 
        {
            echo "Ошибка соединения: " . $exception->getMessage();
        }

        return $this->conn;
    }
}


