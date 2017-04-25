<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=twimh;charset=utf8', 'phpmyadmin','simplon');
} catch (Exception $e) {
  print "Erreur!:" .$e->getMessage() . "<br>";
  die();
}

// $email_sign_in = $_POST['email_sign_in'];
// $password_sign_in = $_POST['password_sign_in'];

$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$pseudo = $_POST['pseudo'];
$email = $_POST['email'];
$password = $_POST['password'];

// $req = $bdd->prepare('INSERT INTO signin (email_sign_in, password_sign_in) VALUES(:email_sign_in, :password_sign_in');
// $req->execute(array(
//   'email_sign_in' => $email_sign_in,
//   'password_sign_in' => $password_sign_in
// ));

$req = $bdd->prepare('INSERT INTO signup (lastname, firstname, pseudo, email, password) VALUES(:lastname, :firstname, :pseudo, :email, :password');
$req->execute(array(
  'lastname' => $lastname,
  'firstname' => $firstname,
  'pseudo' => $pseudo,
  'email' => $email,
  'password' => $password
));
header('Location:http://localhost/~olivia/CHEFOEUVRE/blogvoyageur/views/view.php');
