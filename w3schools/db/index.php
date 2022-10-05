<?php

$servername = "localhost";
$username = "testphpuser";
$password = "password";
$database = "testphpdb";

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully" . "<br>";

// echo "Create a database ... ";
// $sql = "CREATE DATABASE myDB";
// if (!mysqli_query($conn, $sql)) {
//     echo "Error creating database: " . mysqli_error($conn);
// }
// echo "ok". "<br>";

// echo "Create a table ... ";
// $sql = "CREATE TABLE MyGuests (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     firstname VARCHAR(30) NOT NULL,
//     lastname VARCHAR(30) NOT NULL,
//     email VARCHAR(50),
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";
// if (!mysqli_query($conn, $sql)) {
//     echo "Error creating table: " . mysqli_error($conn);
// }
// echo "ok". "<br>";

// echo "Inserting into table ... ";
// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('John', 'Doe', 'john@example.com')";
// if (!mysqli_query($conn, $sql)) {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }
// echo "ok". "<br>";

// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('John', 'Doe', 'jogn@example.com')";
// if (!mysqli_query($conn, $sql)) {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }
// $last_id = mysqli_insert_id($conn);
// echo "New record created successfully. Last inserted ID is: " . $last_id . "<br>";

// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('John', 'Doe', 'john@example.com');";
// $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('Mary', 'Moe', 'mary@example.com');";
// $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('Julie', 'Dooley', 'julie@example.com')";

// if (mysqli_multi_query($conn, $sql)) {
//     echo "New records created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }



mysqli_close($conn);
