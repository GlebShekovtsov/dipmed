<?
$id = isset($_GET["id"]) ? $_GET["id"] : die("ERROR: отсутствует ID.");

// подключаем файлы для работы с базой данных и файлы с объектами
include_once 'template_config.php';
include_once "config/database.php";
include_once "objects/order.php";

$smarty = new Smarty_Config();
$smarty->caching = true;
$smarty->force_compile = true;


// получаем соединение с базой данных
$database = new Database();
$db = $database->getConnection();

// подготавливаем объекты
$order = new Order($db);

// устанавливаем свойство ID товара для чтения
$order->id = $id;


$stmt = $order->readOne();

$items = array();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $items[] = $row;
}

// получаем информацию о товаре
$order->readOne();

$smarty->assign('items', $items);
$smarty->assign('title', 'Заказ');
$smarty->display('read_order.tpl');
?>