<?php

$host = "localhost";
$username = "root";
$password = "12345";
$dbName = "proyecto1";

// DSN para MySQL
$dsn = "mysql:host=$host;dbname=$dbName";

try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    

} catch(PDOException $e) {
    echo "Conexión fallida: " . $e->getMessage();
}

?>
