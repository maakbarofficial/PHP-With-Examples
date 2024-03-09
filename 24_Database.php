<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Example (MySQLi Object-Oriented)
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Example (MySQLi Procedural)
// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";

// Example (PDO)
// try {
//     $conn = new PDO("mysql:host=$servername;dbname=college", $username, $password);
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connected successfully";
// } catch (PDOException $e) {
//     echo "Connection failed: " . $e->getMessage();
// }


// Create database
$sql = "CREATE DATABASE IF NOT EXISTS myDB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

// Procedural Way to Create database
// $conn = mysqli_connect($servername, $username, $password);
// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// $sql = "CREATE DATABASE myDB";
// if (mysqli_query($conn, $sql)) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . mysqli_error($conn);
// }

// sql to create table
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// Inserting Data
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Ali', 'Akbar', 'AliAkbar@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}





$conn->close();
