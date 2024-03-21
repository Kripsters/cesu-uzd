<?php
$title = "Izdzest pasakumus";
require "./Database.php";
$config = require("./config.php");
$db = new Database($config);
$query = "SELECT * FROM events";
$params = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // dd("Pos");
    $query .= "AND DELETE FROM events WHERE events.id = $_POST[id];";
              $db->execute($query, $params);
              header("Location: /");
              die();
} else {
    $db = new Database($config);
$posts = $db
            ->execute($query, $params)
            ->fetchAll();
}

require "./views/delete.view.php";
?>