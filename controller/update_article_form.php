<?php
require "../db/database.php"
// session_start();
// if( isset($_SESSION['email_sign_in']) && isset($_SESSION['password_sign_in']))
// { ?>


<?php

$country = $_GET['country'];

$newcountry = $_POST['country'];
$newyear = $_POST['year'];
$newtitle = $_POST['title'];
$newfirst_paraph = $_POST['first_paraph'];
$newsecond_paraph = $_POST['second_paraph'];
$newthird_paraph = $_POST['third_paraph'];

$upt = $bdd->prepare('UPDATE article SET country= :newcountry, year= :newyear, title= :newtitle, first_paraph= :newfirst_paraph, second_paraph= : newsecond_paraph, third_paraph= :newthird_paraph WHERE country= :country');

$upt->execute(array(
  'newcountry'=> $newcountry,
  'newyear'=> $newyear,
  'newtitle' => $newtitle,
  'newfirst_paraph' => $newfirst_paraph,
  'newsecond_paraph' => $newsecond_paraph,
  'newthird_paraph' => $newthird_paraph,
  'country' => $_GET['country']
));

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <link rel="stylesheet" href="../views/css/style.css">
    <link rel="stylesheet" href="../views/css/css/font-awesome.min.css">
    <title>TWIMH</title>
  </head>
  <body>
    <?php require '../views/header.php' ?>
    <main>
    <nav class="nav">
      <ul>
        <?php
            $reponse = $bdd->query('SELECT * FROM article ORDER BY ID DESC LIMIT 0, 8');
            foreach ($reponse as $donnees): ?>
        <div ><?= "<a href='update_article_form.php?country=" .strtoupper($donnees['country']). "' >".$donnees['country']."</a>"?></li>
          <?php endforeach ?>
          <li>VOIR PLUS</li>
        </div>
      </ul>
    </nav>
    <article class="article">
<?php
      $reponse = $bdd->query('SELECT * FROM article WHERE country="'.$country.'"');
        while ($donnees = $reponse->fetch()) {
    ?>

    <form class="" action="../src/model_update_article.php" method="post">
      <input type="text" name="country" value="<?php echo $donnees['country'] ?>" placeholder="pays visité">
      <input type="text" name="year" value="<?php echo $donnees['year'] ?>" placeholder="année de la visite">
      <input class="input_title_create" type="text" name="title" value="<?php echo $donnees['title'] ?>" placeholder="title">
<br>
      <textarea class="paraph_create" name="first_paraph" rows="8" cols="80"><?php echo $donnees['first_paraph'] ?></textarea>
<br />
            <textarea class="paraph_create" name="second_paraph" rows="8" cols="80"><?php echo $donnees['second_paraph'] ?></textarea>
<br>
                  <textarea class="paraph_create" name="third_paraph" rows="8" cols="80"><?php echo $donnees['third_paraph'] ?></textarea>
<br>
                  <input type="submit" name="" value="ENVOYER">
    </form>
<?php


        $reponse->closeCursor();
        ?>
  </article>
  </main>
    <?php require '../views/footer.php' ?>
  </body>
</html>
<?php
}
 ?>
