<?php

// Open PDO-connection

include_once 'db_config.php';

try {
    $conn = new PDO("mysql:$host=;dbname=$db;charset=utf8", $user, $pwd);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }