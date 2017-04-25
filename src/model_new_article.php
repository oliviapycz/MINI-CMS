<?php

$country = $_POST['country'];
$year = $_POST['year'];
$title = $_POST['title'];
$first_paraph = $_POST['first_paraph'];
$second_paraph = $_POST['second_paraph'];
$third_paraph = $_POST['third_paraph'];

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=twimh;charset=utf8', 'phpmyadmin', 'simplon');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$req = $bdd->prepare('INSERT INTO article (country, year, title, first_paraph, second_paraph, third_paraph) VALUES(:country, :year, :title, :first_paraph, :second_paraph, :third_paraph)');
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
