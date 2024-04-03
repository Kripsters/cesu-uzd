<?php
require "./Database.php";
$config = require("./config.php");
//dd($_SERVER);
$db = new Database($config);



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    if(strlen($_POST["name"]) > 80) {
        $errors["name"] = "name too long (80char)";
    }
    if(trim($_POST["name"]) == "") {
        $errors["name"] = "no title";
    }
    if(strlen($_POST["description"]) > 500) {
        $errors["description"] = "description too long (255char)";
    }
    if(trim($_POST["description"]) == "") {
        $errors["description"] = "no description";
    }

    if (empty($errors)) {

    $query = "INSERT INTO collectives (name, description) 
              VALUES (:name, :description);";
              $params = [
                  ":name" => $_POST["name"],
                  ":description" => $_POST["description"]
              ];
              $db->execute($query, $params);
              header("Location: /collectives");
              die();
            }
}




$title = "Pievieno pasakumus";
require "views/collectives/create.view.php";