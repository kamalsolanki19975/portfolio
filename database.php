<?php
include 'db_connection.php';

// SQL query to fetch data from Enquery table
$sql = "SELECT * FROM Enquery";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data for each row
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"] . "<br>";
        echo "Email: " . $row["email"] . "<br>";
        echo "Subject: " . $row["subject"] . "<br>";
        echo "Message: " . $row["message"] . "<br><br>";
    }
} else {
    echo "No inquiries found";
}

// Close the connection
$conn->close();
?>
