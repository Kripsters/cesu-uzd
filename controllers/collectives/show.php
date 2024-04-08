<?php
$title = "AAA";

require "./Database.php";
$config = require("./config.php");

$query = "SELECT * FROM collectives WHERE id = $_GET[id]";
$params = [];

$db = new Database($config);
$post = $db
            ->execute($query, $params)
            ->fetch();


require "views/collectives/show.view.php";
?>