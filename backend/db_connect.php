<?php
$servername = "localhost";
$username = "admin_web";    // Change to 'root' if using default XAMPP
$password = "password123";  // Change to '' (blank) if using default XAMPP
$dbname = "dailygrind";
$port = 3307;               // Change to 3306 if using default XAMPP port

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>