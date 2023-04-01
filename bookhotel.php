<?php
// Connect to database
$host = '127.0.0.1';
$user = 'root';
$password = '';
$dbname = 'iwp';

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query for hotels based on destination
$destination = $_POST['destination'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$guests = $_POST['guests'];

$sql = "SELECT * FROM hotels WHERE destination = '$destination'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Display available hotels to the user
    while ($row = $result->fetch_assoc()) {
        // Output hotel details (name, price, etc.)
    }
} else {
    echo "No hotels found for the specified destination.";
}

// Close database connection
$conn->close();
?>
