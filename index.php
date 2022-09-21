<?php
$conn = mysqli_connect('localhost', 'root', '', 'portfolio') or die('connection failed');

if(isset($_POST['envoyer'])){
    $nom = mysqli_real_escape_string($conn, $_POST['nom']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $numero = mysqli_real_escape_string($conn, $_POST['numero']);
    $msg = mysqli_real_escape_string($conn, $_POST['message']);

    $select_message = mysqli_query($conn, "SELECT * FROM `message` WHERE name = '$nom' AND email = '$email' AND numero = '$numero' AND message ='$msg'") or die('query failed');

    if(mysqli_num_rows($select_message)> 0){
        $message[] = 'message envoyé';
     } else{ 
        mysqli_query($conn, "INSERT INTO `message`(nom,email,numéro,message) VALUES('$name','email','numero','$msg')") or die('query failed');
        $message[] = 'Envoi reussit';
    }
    if(isset($message)){
        foreach($$message as $$message){
            echo '
            <div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
        </div>';
        }
    }
}



echo "Record saved";