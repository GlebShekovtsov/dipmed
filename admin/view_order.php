<?php
session_start();
include_once 'template_config.php';
include_once 'config/database.php';
include_once 'objects/order_admin.php';
$page = isset($_GET["page"]) ? $_GET["page"] : 1;

// устанавливаем ограничение количества записей на странице
$records_per_page = 5;
// подсчитываем лимит запроса
$from_record_num = ($records_per_page * $page) - $records_per_page;


$smarty = new Smarty_Config();
$smarty->caching = true;
$smarty->force_compile = true;

$database = new Database();
$db = $database->getConnection();

$order = new Order($db);
$stmt = $order->readAll($from_record_num, $records_per_page);
$page_url = "view-order?";
$total_rows = $order->countAll();
$num = $stmt->rowCount();

$items = array();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $items[] = $row;
}

$smarty->assign('num', $num);
$smarty->assign('items', $items);
$smarty->assign('title', 'Заявки');
$smarty->display('order_view.tpl');
echo "<div class='container'>";
include_once "paging.php";
echo "</div>";
?>

<script>
    function play() {
        var audio = new Audio('http://commondatastorage.googleapis.com/codeskulptor-assets/week7-brrring.m4a');
        audio.play();
    }
    let xhrCheck = setInterval(function getNewAjax() {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '/admin/readNew', true);
        xhr.send();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 & xhr.status == 200) {
                var xhrText = xhr.responseText;
                if (xhrText === "1") {
                    play();
                    setTimeout(function() {
                        window.location.reload();
                    }, 5000);
                } else {
                    console.log("Новых заказов нет");
                }
            } else if (xhr.onerror == 404) {
                console.log('Error');
            }
        }
    }, 15000);



    function getAjax(url, success) {
        this.preventDefault();
        var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        xhr.open('GET', url, true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState > 3 && xhr.status == 200) {
                success(xhr.responseText);
            }
            if (xhr.status == 500) {
                console.log(xhr.responseText);

            }
        };
        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        xhr.send();
        return xhr;
    }
</script>