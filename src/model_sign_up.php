<?php

$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$pseudo = $_POST['pseudo'];
$email = $_POST['email'];
$password = $_POST['password'];

require '../db/database.php';

$req = $bdd->prepare('INSERT INTO signup (lastname, firstname, pseudo, email, password) VALUES(:lastname, :firstname, :pseudo, :email, :password)');
$req->execute(array(
  'lastname' => $lastname,
  'firstname' => $firstname,
  'pseudo' => $pseudo,
  'email' => $email,
  'password' => $password
));
header('Location:http://localhost/~olivia/CHEFOEUVRE/blogvoyageur/views/espace_membre.php');
