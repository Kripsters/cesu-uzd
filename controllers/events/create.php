<?php
require "./Database.php";
$config = require("./config.php");
//dd($_SERVER);
$db = new Database($config);



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    if(trim($_POST["date_and_time"]) == "") {
        $errors["datetime"] = "no datetime";
    }
    if(strlen($_POST["title"]) > 255) {
        $errors["title"] = "title too long (255char)";
    }
    if(trim($_POST["title"]) == "") {
        $errors["title"] = "no title";
    }
    if(strlen($_POST["venue"]) > 255) {
        $errors["venue"] = "venue too long (255char)";
    }
    if(trim($_POST["venue"]) == "") {
        $errors["venue"] = "no venue";
    }

    if (empty($errors)) {

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
}




$title = "Pievieno pasakumus";
require "views/events/create.view.php";