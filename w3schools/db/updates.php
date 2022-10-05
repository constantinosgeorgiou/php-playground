<?php

$servername = "localhost";
$username = "testphpuser";
$password = "password";
$database = "testphpdb";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";
if ($conn->query($sql) === true) {
    echo "Record updated successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
