<?php

$email_sign_in = $_POST['email_sign_in'];
$password_sign_in = $_POST['password_sign_in'];

require '../db/database.php';

$reponse = $bdd->query('SELECT email, password FROM signup');
while ($donnees = $reponse->fetch())
{
if ($email_sign_in == $donnees['email'] && $password_sign_in == $donnees['password']){
  session_start();
  $_SESSION['email_sign_in'] = $email_sign_in;
  $_SESSION['password_sign_in'] = $password_sign_in;
  header('Location:http://localhost/~olivia/CHEFOEUVRE/blogvoyageur/views/espace_membre.php');
}
else {
    header('Location:http://localhost/~olivia/CHEFOEUVRE/blogvoyageur/views/espace_membre.php');
}
};
?>
