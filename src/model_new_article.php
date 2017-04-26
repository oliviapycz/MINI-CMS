<?php
session_start();
if( isset($_SESSION['mail_sign_in']) && isset($_SESSION['password_sign_in']))
{
$country = $_POST['country'];
$year = $_POST['year'];
$title = $_POST['title'];
$first_paraph = $_POST['first_paraph'];
$second_paraph = $_POST['second_paraph'];
$third_paraph = $_POST['third_paraph'];

require '../db/database.php';

$req = $bdd->prepare('INSERT INTO article (country, year, title, first_paraph, second_paraph, third_paraph, date_modification) VALUES(:country, :year, :title, :first_paraph, :second_paraph, :third_paraph, NOW())');
$req->execute(array(
  'country'=> $country,
  'year'=> $year,
  'title' => $title,
  'first_paraph' => $first_paraph,
  'second_paraph' => $second_paraph,
  'third_paraph' => $third_paraph
));
header('Location:http://localhost/~olivia/CHEFOEUVRE/blogvoyageur/views/espace_membre.php');

?>
