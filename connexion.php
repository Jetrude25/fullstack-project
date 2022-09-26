<?php

$servername = "mysql-victo.alwaysdata.net";
$username = "victo";
$password = "Portfoli@";
$dbname = "portfolio";
$nom = $_POST['nom'];
$email = $_POST['email'];
$numero = $_POST['numero'];
$message = $_POST['message'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO message (nom,numero,email,messages) VALUES ('$nom','$numero';'$email', '$message')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>