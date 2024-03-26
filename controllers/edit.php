<?php
$title = "Rediģēšana";
require "Database.php";
$config = require "config.php";

if(isset($_GET["edit_datetime"]) && isset($_GET["edit_title"]) && isset($_GET["edit_venue"]) && isset($_GET["edit_id"]))
{
    $query = "UPDATE events
    SET date_and_time = :datetime, title = :title, venue = :venue
    WHERE id = :id;";
    $params = [
    ':datetime' => $_GET['edit_datetime'], /// Paldies gusit
    ':title' => $_GET['edit_title'],
    ':venue' => $_GET['edit_venue'],
    ':id' => $_GET['edit_id']
    ];
    $db = new Database($config);
    $events = $db->execute($query, $params)
    ->fetchALL(); 
    header('Location: '. "/");
}

$query = "SELECT * FROM events"; 
$params = [];
$db = new Database($config);
$posts = $db
    ->execute($query, $params)
    ->fetchALL();

require "views/edit.view.php";