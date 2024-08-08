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
    function readOne()
    {
        // запрос MySQL
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

        $this->fio = $row["fio"];
        $this->telnum = $row["telnum"];
        $this->email = $row["email"];
        $this->date = $row["date"];
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
    function create()
    {
        $query = "INSERT INTO
        " . $this->table_name . "
    SET
        fio=:fio, telnum=:telnum, email=:email";

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
    function update()
    {
        // MySQL запрос для обновления записи (товара)
        $query = "UPDATE
                " . $this->table_name . "
            SET
                fio = :fio,
                telnum = :telnum,
                email = :email
            WHERE
                id = :id";

        // подготовка запроса
        $stmt = $this->conn->prepare($query);

        // очистка
        $this->fio = htmlspecialchars(strip_tags($this->fio));
        $this->telnum = htmlspecialchars(strip_tags($this->telnum));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->id = htmlspecialchars(strip_tags($this->id));

        // привязка значений
        $stmt->bindParam(":fio", $this->fio);
        $stmt->bindParam(":telnum", $this->telnum);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":id", $this->id);


        // выполняем запрос
        if ($stmt->execute()) {
            return true;
        }

        return false;
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
