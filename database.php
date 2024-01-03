<?php

include('connection.php');

$connection = new Connection();

// $connection->createDatabase('KhDb');

$connection->selectDatabase('KhDb');

//  $query0 = "
//   CREATE TABLE Clients (
//  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//   firstname VARCHAR(30) NOT NULL,
//   lastname VARCHAR(30) NOT NULL,
//  email VARCHAR(50) UNIQUE,
//   password VARCHAR(80),
//   reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//   )
//   ";

// $query1= "
// CREATE TABLE Categories (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// name VARCHAR(30) NOT NULL,
// refferance VARCHAR(30) NOT NULL
// )
// ";


$query2 = "
CREATE TABLE Cars (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
model VARCHAR(30) NOT NULL,
img LONGBLOB NOT NULL,
idCat INT(6) UNSIGNED,
FOREIGN KEY (idCat) REFERENCES Categories(id)
)
";


// $connection->createTable($query0);
// $connection->createTable($query1);
$connection->createTable($query2);




?>