<?php
$title = "Dzēšana";
require "Database.php";
$config = require "config.php";

if(isset($_GET["delete_id"]))
{
    $query = "DELETE FROM events WHERE id = $_GET[delete_id];";
    $params = [];
    $db = new Database($config);
    $events = $db
        ->execute($query, $params)
        ->fetchALL();
}

$query = "SELECT * FROM events"; 
$params = [];
$db = new Database($config);
$posts = $db
    ->execute($query, $params)
    ->fetchALL();

require "views/delete.view.php";