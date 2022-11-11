<?php

$server = 'localhost:3306';
$username = 'root';
$password = 'root';
$database = 'teams_db';

try {
 
    $conn = new PDO("mysql:host=$server;port=3306;dbname=teams_db", $username, $password);
    return $conn;
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>