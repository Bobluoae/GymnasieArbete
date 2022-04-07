<?php
$servername = "hemdatorn.hopto.org";
$username = "restrand";
$password = "HemData531";
$database = "restrand";
try {
    $conn = new PDO("mysql:host={$servername};dbname={$database}", $username, $password);
    // Set exception on error and connection charset    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec("set names utf8mb4");
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage() . "\n";
}