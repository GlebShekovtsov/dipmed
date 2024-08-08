<?php

class Manufacturer
{
    // подключение к базе данных и имя таблицы
    private $conn;
    private $table_name = "manufacturer";

    // свойства объекта
    public $id;
    public $man_name;
    public $image;


    public function __construct($db)
    {
        $this->conn = $db;
    }
    function create()
    {
        // запрос MySQL для вставки записей в таблицу БД «products»
        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                man_name=:man_name, image=:image";

        $stmt = $this->conn->prepare($query);

        // опубликованные значения
        $this->man_name = htmlspecialchars(strip_tags($this->man_name));
        $this->image = htmlspecialchars(strip_tags($this->image));


        // получаем время создания записи

        // привязываем значения
        $stmt->bindParam(":man_name", $this->man_name);
        $stmt->bindParam(":image", $this->image);

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
            man_name = :man_name,
            image = :image
        WHERE
            id = :id";
        $stmt = $this->conn->prepare($query);

        //очистка
        $this->man_name = htmlspecialchars(strip_tags($this->man_name));
        $this->image = htmlspecialchars(strip_tags($this->image));
        $this->id = htmlspecialchars(strip_tags($this->id));

        //привязка значений
        $stmt->bindParam(":man_name", $this->man_name);
        $stmt->bindParam(":image", $this->image);
        $stmt->bindParam(":id", $this->id);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
    // данный метод используется в раскрывающемся списке
    function read()
    {
        // запрос MySQL: выбираем столбцы в таблице «categories»
        $query = "SELECT
                    id, man_name, image
                FROM
                    " . $this->table_name . "
                ORDER BY
                    id";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
    public function readName()
    {
        // запрос MySQL
        $query = "SELECT * FROM " . $this->table_name . " WHERE id = ? limit 0,1";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->man_name = $row["man_name"];
        $this->image = $row["image"];


        return $stmt;

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
    function uploadPhoto()
    {
        $result_message = "";

        // если изображение не пустое, пробуем загрузить его
        if ($this->image) {

            // функция sha1_file() используется для создания уникального имени файла
            $target_directory = "uploads/";
            $target_file = $target_directory . $this->image;
            $file_type = pathinfo($target_file, PATHINFO_EXTENSION);

            // сообщение об ошибке пусто
            $file_upload_error_messages = "";

            $check = getimagesize($_FILES["image"]["tmp_name"]);

            if ($check !== false) {
                // отправленный файл является изображением
            } else {
                $file_upload_error_messages .= "<div>Отправленный файл не является изображением.</div>";
            }

            // проверяем, разрешены ли определенные типы файлов
            $allowed_file_types = array("jpg", "jpeg", "png", "gif", "webp");

            if (!in_array($file_type, $allowed_file_types)) {
                $file_upload_error_messages .= "<div>Разрешены только файлы JPG, JPEG, PNG, GIF, WEBP.</div>";
            }

            // убеждаемся, что файл не существует
            if (file_exists($target_file)) {
                $file_upload_error_messages .= "<div>Изображение уже существует. Попробуйте изменить имя файла.</div>";
            }

            // убедимся, что отправленный файл не слишком большой (не может быть больше 1 МБ)
            if ($_FILES["image"]["size"] > (2048000)) {
                $file_upload_error_messages .= "<div>Размер изображения не должен превышать 1 МБ.</div>";
            }

            // убедимся, что папка uploads существует, если нет, то создаём
            if (!is_dir($target_directory)) {
                mkdir($target_directory, 0777, true);
            }

            if (empty($file_upload_error_messages)) {

                // ошибок нет, пробуем загрузить файл
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    // фото загружено
                } else {
                    $result_message .= "<div class='alert alert-danger'>";
                    $result_message .= "<div>Невозможно загрузить фото.</div>";
                    $result_message .= "<div>Обновите запись, чтобы загрузить фото снова.</div>";
                    $result_message .= "</div>";
                }
            }

            // если $file_upload_error_messages НЕ пусто
            else {

                // это означает, что есть ошибки, поэтому покажем их пользователю
                $result_message .= "<div class='alert alert-danger'>";
                $result_message .= "{$file_upload_error_messages}";
                $result_message .= "<div>Обновите запись, чтобы загрузить фото.</div>";
                $result_message .= "</div>";
            }
        }

        return $result_message;
    }


    public function search($search_term, $from_record_num, $records_per_page)
    {
        // запрос к БД
        $query = "SELECT
            *
        FROM
            " . $this->table_name . "
        WHERE
            man_name LIKE ?
        ORDER BY
            id ASC
        LIMIT
            ?, ?";

        // подготавливаем запрос
        $stmt = $this->conn->prepare($query);

        // привязываем значения переменных
        $search_term = "%{$search_term}%";
        $stmt->bindParam(1, $search_term);
        $stmt->bindParam(2, $search_term);
        $stmt->bindParam(3, $from_record_num, PDO::PARAM_INT);
        $stmt->bindParam(4, $records_per_page, PDO::PARAM_INT);

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
            p.man_name LIKE ?";

        // подготовка запроса
        $stmt = $this->conn->prepare($query);

        // привязка значений
        $search_term = "%{$search_term}%";
        $stmt->bindParam(1, $search_term);


        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        return $row["total_rows"];
    }
}
