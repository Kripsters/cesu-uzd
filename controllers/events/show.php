<?php
$title = "Uh oh! cleanup on aisle 4";

require "./Database.php";
$config = require("./config.php");

$query = "SELECT * FROM events WHERE id = $_GET[id]";
$params = [];

$db = new Database($config);
$postb = $db
            ->execute($query, $params)
            ->fetchAll();


require "views/events/show.view.php";
?>