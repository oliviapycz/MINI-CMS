<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=twimh;charset=utf8', 'phpmyadmin','simplon');
} catch (Exception $e) {
  print "Erreur!:" .$e->getMessage() . "<br>";
  die();
}
 ?>
