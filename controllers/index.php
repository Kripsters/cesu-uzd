<?php
$title = "Pasākumi";

require "./Database.php";
$config = require("./config.php");

$query = "SELECT * FROM events";
$params = [];

$db = new Database($config);
$posts = $db
            ->execute($query, $params)
            ->fetchAll();

require "./views/index.view.php";
?>