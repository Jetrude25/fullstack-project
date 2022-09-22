<?php
// $conn = mysqli_connect('localhost', 'root', '', 'portfolio') or die('connection failed');

// if(isset($_POST['envoyer'])){
//     $nom = mysqli_real_escape_string($conn, $_POST['nom']);
//     $numero = mysqli_real_escape_string($conn, $_POST['numero']);
//     $email = mysqli_real_escape_string($conn, $_POST['email']);
//     $msg = mysqli_real_escape_string($conn, $_POST['message']);

//     $select_message = mysqli_query($conn, "SELECT * FROM `message` WHERE name = '$nom' AND email = '$email' AND numero = '$numero' AND message ='$msg'") or die('query failed');

//     if(mysqli_num_rows($select_message)> 0){
//         $message[] = 'message envoyé';
//      } else{ 
//         mysqli_query($conn, "INSERT INTO `message`(nom,email,numero,message) VALUES('$name','email','numero','$msg')") or die('query failed');
//         $message[] = 'Envoi reussit';
//     }
//     if(isset($message)){
//         foreach($$message as $$message){
//             echo '';
           
//         }
//     }
// }



// echo "Record saved";


$servername = "localhost";
$username = "root";
$password = "";
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

$sql = "INSERT INTO message (nom,numero,email,messages) VALUES ('$nom','$email','$numero', '$message')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>