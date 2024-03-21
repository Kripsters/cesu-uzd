<?php
require "./Database.php";
$config = require("./config.php");
//dd($_SERVER);
$db = new Database($config);



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // dd("Pos");
    $query = "INSERT INTO events (date_and_time, title, venue) 
              VALUES (:date_and_time, :title, :venue);";
              $params = [
                  ":date_and_time" => $_POST["date_and_time"],
                  ":title" => $_POST["title"],
                  ":venue" => $_POST["venue"]
              ];
              $db->execute($query, $params);
              header("Location: /");
              die();
}

// if (isset($_GET["title"]) && $_GET["title"] != "" && isset($_GET["category-id"]) && $_GET["category-id"] != "") {
//     $post_title = $_GET["id"];    
//     $query .= " ("", 2)";
//     $params = [":id" => $id];
// }



$title = "Pievieno pasakumus";
require "./views/create.view.php";