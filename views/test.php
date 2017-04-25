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
<?php
    $reponse = $bdd->query('SELECT * FROM article');
    while ($donnees = $reponse->fetch())
    {
?>
<nav class="nav">
  <ul>
    <div class="cli"><li><?php echo strtoupper($donnees['country']); ?> <p>|</p>| <?php echo $donnees['year']; ?></li></div>
  </ul>
</nav>

    <h3><?php echo $donnees['title']; ?></h3>  <br />
    <h5><?php echo strtolower($donnees['firstname']) . strtoupper($donnees['lastname']);?> </h5> <p>|</p><em>mis à jour le :</em> <?php echo $donnees['date_modification'];?> </h5> <br />
    <p><?php echo $donnees["first_paraph"]; ?></p> <br />
    <p><?php echo $donnees["second_paraph"]; ?></p> <br />
    <p><?php echo $donnees["third_paraph"]; ?></p> <br />
<?php
}
$reponse->closeCursor();
?>
    </article>
    <?php require 'footer.php' ?>
  </body>
</html>
