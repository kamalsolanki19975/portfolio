<?php
$servername = "sdb-78.hosting.stackcp.net"; // your server address
$username = "kamal_portfolio";             // replace with your actual username
$password = "K@mal@123";             // replace with your actual password
$dbname = "my_portfolio-35303737e6dd";      // your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
