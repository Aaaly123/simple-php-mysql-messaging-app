<?php
// db_config.php
$host = 'localhost';
$user = 'root';
$password = ''; // Your MySQL password (leave empty for default setup)
$dbname = 'guestbook';

// Create a connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
