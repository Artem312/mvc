<?php
require_once("database.php");
require_once("models/articles.php");
$link = db_connect();
$articles = articles_all($links);
include("views/articles.php");
?>