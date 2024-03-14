<?php
$title = "CKC kolektīvi";

require "./Database.php";
$config = require("./config.php");

$query = "SELECT * FROM collectives";
$params = [];

$db = new Database($config);
$posts = $db
            ->execute($query, $params)
            ->fetchAll();

require "./views/collectives.view.php";
?>