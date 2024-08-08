<?php
session_start();

include_once "config/core.php";
include_once 'template_config.php';
include_once 'config/database.php';
include_once 'objects/news_admin.php';


$database = new Database();
$db = $database->getConnection();

$news = new News($db);

$search_term = isset($_GET["s"]) ? $_GET["s"] : "";

$page_title = "Вы искали \"{$search_term}\"";
echo "<div class='container'>";
require_once "includes/title.php";

$stmt = $news->search($search_term, $from_record_num, $records_per_page);

$page_url = "search.php?s={$search_term}&";
$total_rows = $news->countAll_BySearch($search_term);

echo "<div class='page-header'>";
echo "<h1>";
echo $page_title;
echo "</h1>";
echo "</div>";
include_once "read_template_news.php";
require_once "includes/footer.php";
echo "</div>";
