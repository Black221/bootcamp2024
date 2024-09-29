<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "bootcamp2024";

$connexion = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($connexion) {
    echo "Connected to the database";
} else {
    echo "Failed to connect to the database";
}

//  recup user

$sql = "SELECT * FROM users";
$stmt = $database->prepare($sql);
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

print_r($users);
