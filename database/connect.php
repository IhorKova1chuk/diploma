<?php
$driver = "mysql";
$host = "127.0.0.1:3306";
$user = "root";
$password = "";
$database = "sport_club";
$charset = "utf8";
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];

try{
    $connect= new PDO("$driver:host=$host;dbname=$database;charset=$charset", $user, $password, $options);
}catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}