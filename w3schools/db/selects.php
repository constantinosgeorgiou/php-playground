<?php

$servername = "localhost";
$username = "testphpuser";
$password = "password";
$database = "testphpdb";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "<br><br>SELECT id, firstname, lastname FROM MyGuests" . "<br>";

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);
if ($result->num_rows === 0) {
    echo "0 results" . "<br>";
} else {
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . ", name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
    }
}

echo "<br><br>SELECT id, firstname, lastname FROM MyGuests WHERE lastname='Doe'" . "<br>";
$sql = "SELECT id, firstname, lastname FROM MyGuests WHERE lastname='Doe'";
$result = $conn->query($sql);
if ($result->num_rows === 0) {
    echo "0 results" . "<br>";
} else {
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . ", name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
    }
}

echo "<br><br>SELECT id, firstname, lastname FROM MyGuests ORDER BY lastname" . "<br>";
$sql = "SELECT id, firstname, lastname FROM MyGuests ORDER BY lastname";
$result = $conn->query($sql);
if ($result->num_rows === 0) {
    echo "0 results" . "<br>";
} else {
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . ", name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
    }
}

$conn->close();
