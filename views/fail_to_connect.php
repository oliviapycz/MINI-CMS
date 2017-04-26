<?php require "../db/database.php" ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/css/font-awesome.min.css">
    <title>TWIMH</title>
  </head>
  <body class="">

    <?php require 'header.php' ?>

    <main>
      <?php
          $reponse = $bdd->query('SELECT * FROM article WHERE country="cuba"');
          // $reponse = $bdd->query('SELECT * FROM article'); PROBLEME!!!!!!
          while ($donnees = $reponse->fetch())
          {
      ?>
      <nav class="nav">
        <ul>
          <div class="click_country"><li><?php echo strtoupper($donnees['country']) . "|" .  $donnees['year']; ?></li></div>
        </ul>
      </nav>

      <article class="article">

        <div class="click_article">
          <h3><?php echo $donnees['title']; ?></h3>  <br />
          <h5><?php echo strtolower($donnees['firstname']) . strtoupper($donnees['lastname']);?> </h5> <p>|</p><em>mis à jour le :</em> <?php echo $donnees['date_modification'];?> </h5>
           <br /><br>
          <p><?php echo $donnees["first_paraph"]; ?></p> <br />
          <p><?php echo $donnees["second_paraph"]; ?></p> <br />
          <p><?php echo $donnees["third_paraph"]; ?></p> <br />
      <?php
    }
      $reponse->closeCursor();
      ?>
        </div>

        <div class=""> <?php require "../controller/signin_form.php" ?>
        FAIL TO CONNECT</div>

        <div class="signin_jquery"> <?php require "../controller/signin_form.php" ?> </div>
        <div class="signup_jquery"> <?php require "../controller/signup_form.php" ?> </div>

      </article>
    </main>

      <?php require 'footer.php' ?>
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
