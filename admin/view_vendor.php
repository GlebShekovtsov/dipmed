<?php
session_start();
include_once 'template_config.php';
include_once 'config/database.php';
include_once 'objects/vendor_admin.php';
$page = isset($_GET["page"]) ? $_GET["page"] : 1;

// устанавливаем ограничение количества записей на странице
$records_per_page = 5;
// подсчитываем лимит запроса
$from_record_num = ($records_per_page * $page) - $records_per_page;

$search_value = isset($search_term) ? "value='{$search_term}'" : "";
$smarty = new Smarty_Config();
$smarty->caching = true;
$smarty->force_compile = true;

$database = new Database();
$db = $database->getConnection();

$vendor = new Vendor($db);
$stmt = $vendor->readAll($from_record_num, $records_per_page);
$page_url = "view-vendor?";
$total_rows = $vendor->countAll();

$num = $stmt->rowCount();

$items = array();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $items[] = $row;
}

$smarty->assign('num', $num);
$smarty->assign('items', $items);
$smarty->assign('title', 'Партнеры');
$smarty->display('vendor_view.tpl');
echo "<div class='container'>";
include_once "paging.php";
echo "</div>";

?>
<script>
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