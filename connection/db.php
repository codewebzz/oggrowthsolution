<?php
// Database connection file: db.php
$host = "localhost"; // Server host
$user = "root"; // Database username
$pass = ""; // Database password
$dbname = "dma"; // Database name

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
