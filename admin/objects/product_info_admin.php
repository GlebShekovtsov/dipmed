<?php
class ProductInfo
{
    private $conn;
    private $table_name = "product_info";

    public $id;
    public $id_product;
    public $full_name;
    public $manufacturer_id;
    public $country;
    public $price;
    public $descr;
    public $category_id;
    public $name;
    public $man_name;
    public $category;
    public function __construct($db)
    {
        $this->conn = $db;
    }

    // метод создания товара
    function create()
    {
        // запрос MySQL для вставки записей в таблицу БД «products»
        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                id_product=:id_product, full_name=:full_name, manufacturer_id=:manufacturer_id, country=:country, price=:price, descr=:descr, category_id=:category_id";

        $stmt = $this->conn->prepare($query);

        // опубликованные значения
        $this->id_product = htmlspecialchars(strip_tags($this->id_product));
        $this->full_name = htmlspecialchars(strip_tags($this->full_name));
        $this->manufacturer_id = htmlspecialchars(strip_tags($this->manufacturer_id));
        $this->country = htmlspecialchars(strip_tags($this->country));
        $this->price = htmlspecialchars(strip_tags($this->price));
        $this->descr = $this->descr;
        $this->category_id = htmlspecialchars(strip_tags($this->category_id));
        // получаем время создания записи

        // привязываем значения
        $stmt->bindParam(":id_product", $this->id_product);
        $stmt->bindParam(":full_name", $this->full_name);
        $stmt->bindParam(":manufacturer_id", $this->manufacturer_id);
        $stmt->bindParam(":country", $this->country);
        $stmt->bindParam(":price", $this->price);
        $stmt->bindParam(":descr", $this->descr);
        $stmt->bindParam(":category_id", $this->category_id);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
    function update()
    {
        $query = "UPDATE
        " . $this->table_name . "
        SET
            id_product = :id_product,
            full_name = :full_name,
            manufacturer_id = :manufacturer_id,
            country  = :country,
            price = :price,
            descr = :descr,
            category_id = :category_id
        WHERE
            id = :id";
        $stmt = $this->conn->prepare($query);

        //очистка
        $this->id_product = htmlspecialchars(strip_tags($this->id_product));
        $this->full_name = htmlspecialchars(strip_tags($this->full_name));
        $this->manufacturer_id = htmlspecialchars(strip_tags($this->manufacturer_id));
        $this->country = htmlspecialchars(strip_tags($this->country));
        $this->price = htmlspecialchars(strip_tags($this->price));
        $this->descr = $this->descr;
        $this->category_id = htmlspecialchars(strip_tags($this->category_id));
        $this->id = htmlspecialchars(strip_tags($this->id));

        //привязка значений
        $stmt->bindParam(":id_product", $this->id_product);
        $stmt->bindParam(":full_name", $this->full_name);
        $stmt->bindParam(":manufacturer_id", $this->manufacturer_id);
        $stmt->bindParam(":country", $this->country);
        $stmt->bindParam(":price", $this->price);
        $stmt->bindParam(":descr", $this->descr);
        $stmt->bindParam(":category_id", $this->category_id);
        $stmt->bindParam(":id", $this->id);

        if ($stmt->execute()) {
            return true;
        }

        return false;
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
    function readOne()
    {
        $query = "SELECT
        *
    FROM
        " . $this->table_name . "
        INNER JOIN `manufacturer` ON product_info.manufacturer_id = manufacturer.id
        INNER JOIN `product` ON product_info.id_product = product.id
    WHERE
        product_info.id = ?
    LIMIT
        0,1";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->id_product = $row["id_product"];
        $this->full_name = $row["full_name"];
        $this->manufacturer_id = $row["manufacturer_id"];
        $this->country = $row["country"];
        $this->price = $row["price"];
        $this->descr = $row["descr"];
        $this->category_id = $row["category_id"];
        $this->name = $row["name"];
        $this->man_name = $row["man_name"];
        $this->category = $row["category"];

        return $stmt;
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
    public function countAll()
    {
        $query = "SELECT id FROM " . $this->table_name . "";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $num = $stmt->rowCount();
        return $num;
    }


    public function search($search_term, $from_record_num, $records_per_page)
    {
        // запрос к БД
        $query = "SELECT
            *
        FROM
            " . $this->table_name . "
        WHERE
            full_name LIKE ?
        ORDER BY
            full_name ASC
        LIMIT
            ?, ?";

        // подготавливаем запрос
        $stmt = $this->conn->prepare($query);

        // привязываем значения переменных
        $search_term = "%{$search_term}%";
        $stmt->bindParam(1, $search_term);
        $stmt->bindParam(2, $from_record_num, PDO::PARAM_INT);
        $stmt->bindParam(3, $records_per_page, PDO::PARAM_INT);

        // выполняем запрос
        $stmt->execute();

        // возвращаем значения из БД
        return $stmt;
    }

    // метод для подсчёта общего количества строк
    public function countAll_BySearch($search_term)
    {
        // запрос
        $query = "SELECT
            COUNT(*) as total_rows
        FROM
            " . $this->table_name . " p 
        WHERE
            p.full_name LIKE ? OR p.descr LIKE ?";

        // подготовка запроса
        $stmt = $this->conn->prepare($query);

        // привязка значений
        $search_term = "%{$search_term}%";
        $stmt->bindParam(1, $search_term);
        $stmt->bindParam(2, $search_term);

        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        return $row["total_rows"];
    }
}
