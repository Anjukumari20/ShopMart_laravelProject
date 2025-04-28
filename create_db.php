<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Create database
    $sql = "CREATE DATABASE IF NOT EXISTS ecom_db";
    $conn->exec($sql);
    
    echo "Database created successfully\n";
} catch(PDOException $e) {
    echo "Error creating database: " . $e->getMessage() . "\n";
}

$conn = null;
?>
