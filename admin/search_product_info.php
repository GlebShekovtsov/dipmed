<?php
session_start();

include_once "config/core.php";
include_once 'template_config.php';
include_once 'config/database.php';
include_once 'objects/product_info_admin.php';


$database = new Database();
$db = $database->getConnection();

$productInfo = new ProductInfo($db);

$search_term = isset($_GET["s"]) ? $_GET["s"] : "";

$page_title = "Вы искали \"{$search_term}\"";
echo "<div class='container'>";
require_once "includes/title.php";

$stmt = $productInfo->search($search_term, $from_record_num, $records_per_page);

$page_url = "search.php?s={$search_term}&";
$total_rows = $productInfo->countAll_BySearch($search_term);

echo "<div class='page-header'>";
echo "<h1>";
echo $page_title;
echo "</h1>";
echo "</div>";
include_once "read_template_product_info.php";
require_once "includes/footer.php";
echo "</div>";
