<?php
$host = "localhost";
$user = "root";  // Default user for XAMPP
$pass = "";  // No password for XAMPP
$dbname = "payroll_db";

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
