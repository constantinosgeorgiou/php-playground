<?php

$servername = "localhost";
$username = "testphpuser";
$password = "password";
$database = "testphpdb";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");

// Bind the parameters to the SQL query and tells the database what the parameters are.
// "sss" lists the types of data that the parameters are, in this case strings.
// Four types of that arguments:
//  i - integer
//  d - double
//  s - string
//  b - blob
$stmt->bind_param("sss", $firstname, $lastname, $email);

// Set parameters and execute
$firstname = "John";
$lastname = "Doe";
$email = "john@example.com";
$stmt->execute();

$firstname = "Mary";
$lastname = "Moe";
$email = "mary@example.com";
$stmt->execute();

$firstname = "Julie";
$lastname = "Dooley";
$email = "julie@example.com";
$stmt->execute();

echo "New records created successfully";

$stmt->close();

$conn->close();
