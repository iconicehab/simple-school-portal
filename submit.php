<?php
// Database connection details
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'school_db';

// Create a connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $age = (int)$_POST['Age'];
    $stage = $conn->real_escape_string($_POST['stage']);
    $message = $conn->real_escape_string($_POST['message']);

    // Insert data into the database
    $sql = "INSERT INTO messages (name, age, stage, message) VALUES ('$name', $age, '$stage', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Message stored successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
