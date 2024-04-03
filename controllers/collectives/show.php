<?php
$title = "AAA";

require "./Database.php";
$config = require("./config.php");

$query = "SELECT * FROM collectives WHERE id = $_GET[id]";
$params = [];

$db = new Database($config);
$postb = $db
            ->execute($query, $params)
            ->fetchAll();


require "views/collectives/show.view.php";
?>