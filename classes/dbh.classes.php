<?php

        $server = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "teams_db";


        $conn = new PDO("mysql:host=$server;port=3306;dbname=teams_db", $username, $password);
        return $conn;

      
?>