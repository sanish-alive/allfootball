<?php
// Database connection configuration
$hostname = 'localhost';
$dbUser = 'root';
$dbPassword = '';
$dbName = 'allfootball';

// Create a database connection
$conn = new mysqli($hostname, $dbUser, $dbPassword, $dbName);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully"; // You can replace this with your desired success message
}
?>
