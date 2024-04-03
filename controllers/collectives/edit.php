<?php
$title = "Rediģēšana";
require "Database.php";
$config = require "config.php";

if(isset($_GET["edit_name"]) && isset($_GET["edit_description"]) && isset($_GET["edit_id"]))
{
    $query = "UPDATE collectives
    SET name = :name, description = :description
    WHERE id = :id;";
    $params = [
    ':name' => $_GET['edit_name'], /// Paldies gusit
    ':description' => $_GET['edit_description'],
    ':id' => $_GET['edit_id']
    ];
    $db = new Database($config);
    $events = $db->execute($query, $params)
    ->fetchALL(); 
    header('Location: '. "/collectives");
}

$query = "SELECT * FROM collectives"; 
$params = [];
$db = new Database($config);
$posts = $db
    ->execute($query, $params)
    ->fetchALL();

require "views/collectives/edit.view.php";