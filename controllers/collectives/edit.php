<?php
require "Validator.php";
require "Database.php";
$config = require("./config.php");
$db = new Database($config);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    if(!Validator::string($_POST["name"], min:1, max:80)) {
        $errors["name"] = "no name or too long";
    }

    if(!Validator::string($_POST["description"], min:1, max:500)) {
        $errors["description"] = "no desc. or too long";
    }
    if (empty($errors)) {


    $query = "UPDATE collectives 
              SET name = :name, description = :description
              WHERE id = :id";
              $params = [
                  ":name" => $_POST["name"],
                  ":description" => $_POST["description"],
                  ":id" => $_POST["id"]
              ];
              $db->execute($query, $params);
              header("Location: /collectives");
              die();
            }
} 


$query = "SELECT * FROM collectives WHERE id=:id";
// dd($_GET["id"]);
$params = [":id"  => $_GET["id"]];

$post = $db->execute($query, $params)->fetch();

$title = "Editing";
require "views/collectives/edit.view.php";