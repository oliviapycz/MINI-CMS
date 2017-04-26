<?php
require '../src/session.php'
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/css/font-awesome.min.css">
    <title>TWIMH</title>
  </head>
  <body>
    <?php require 'header.php' ?>
    <article class="article">
      <h2>BIENVENUE DANS VOTRE ESPACE MEMBRE</h2>
        <br />
          <a href="../controller/create_article_form.php">Voulez-vous créer un nouvel article?</a>
        <br />
          <a href="../controller/update_article_form.php">Voulez-vous modifier un précédent article?</a>
    </article>
    <?php require 'footer.php' ?>
  </body>
</html>
