<?php
class News
{
    private $conn;
    private $table_name = "news";

    public $id;
    public $header;
    public $text;
    public $img;
    public $views;
    public $date;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    // метод создания товара

    function readAll($from_record_num, $records_per_page)
    {
        // запрос MySQL
        $query = "SELECT
                    *
                FROM
                    " . $this->table_name . "
                ORDER BY
                    date DESC
                LIMIT
                    {$from_record_num}, {$records_per_page}";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
    function Read()
    {
        // запрос MySQL
        $query = "SELECT
                    *
                FROM
                    " . $this->table_name . "
                ORDER BY
                    date ASC
                LIMIT 4";

        $stmtn = $this->conn->prepare($query);
        $stmtn->execute();

        return $stmtn;
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

        $this->header = $row["header"];
        $this->text = $row["text"];
        $this->img = $row["img"];
        $this->views = $row["views"];
        $this->date = $row["date"];

    }
    function recentNews()
    {
        $query = "SELECT
        *
    FROM
        " . $this->table_name . "
    ORDER BY
        date DESC
    LIMIT
        6";

        $stmtf = $this->conn->prepare($query);
        $stmtf->execute();

        return $stmtf;
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
