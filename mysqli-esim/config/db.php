<?php
// include_once 'db_config.php';

$host = "localhost";
$user = "root";
$pwd = "";
$db = "blog_db";

// Create connection
$conn = new mysqli($host, $user, $pwd, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";