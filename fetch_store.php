<?php
// Database configuration
$servername = "localhost";
$username = "root"; // Default username for XAMPP
$password = ""; // Default password for XAMPP
$dbname = "mydatabase"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch store data
$sql = "SELECT id, itemcode, itemname FROM store";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='table table-bordered'><tr><th>ID</th><th>Item Code</th><th>Item Name</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>{$row['id']}</td><td>{$row['itemcode']}</td><td>{$row['itemname']}</td></tr>";
    }
    echo "</table>";
} else {
    echo "No items found.";
}

$conn->close();
?>
