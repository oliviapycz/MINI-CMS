<?php

require '../db/database.php';

$country = $_GET['country'];
$newcountry = $_POST['country'];
$newyear = $_POST['year'];
$newtitle = $_POST['title'];
$newfirst_paraph = $_POST['first_paraph'];
$newsecond_paraph = $_POST['second_paraph'];
$newthird_paraph = $_POST['third_paraph'];

$upt = $bdd->prepare('UPDATE article SET
  country= :newcountry,
  year= :newyear,
  title= :newtitle,
  first_paraph= :newfirst_paraph,
  second_paraph= :newsecond_paraph,
  third_paraph= :newthird_paraph
   WHERE country= :country');

$upt->execute(array(
  'newcountry'=> $newcountry,
  'newyear'=> $newyear,
  'newtitle' => $newtitle,
  'newfirst_paraph' => $newfirst_paraph,
  'newsecond_paraph' => $newsecond_paraph,
  'newthird_paraph' => $newthird_paraph,
  'country' => $_GET['country']
));

 header('Location:http://localhost/~olivia/CHEFOEUVRE/blogvoyageur/views/espace_membre.php');
