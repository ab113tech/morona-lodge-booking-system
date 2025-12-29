<?php
$host = "localhost";
$db   = "YOUR_DB_NAME";
$user = "YOUR_DB_USER";
$pass = "YOUR_DB_PASSWORD";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>
