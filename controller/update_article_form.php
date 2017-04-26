<?php
require "../db/database.php"
// session_start();
// if( isset($_SESSION['email_sign_in']) && isset($_SESSION['password_sign_in']))
// { ?>
<?php
$country = $_GET['country'];
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
        <div class="click_country"><li><?= "<a href='update_article_form.php?country=" .strtoupper($donnees['country']). "' >".$donnees['country']."</a>"?></li>
          <?php endforeach ?>
          <li>VOIR PLUS</li>
        </div>
      </ul>
    </nav>
    <article class="article">
<?php
      $reponse = $bdd->query('SELECT * FROM article WHERE country="'.$country.'"');
        foreach ($reponse as $donnees): ?>


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


<?php endforeach ?>
        <!-- $reponse->closeCursor(); -->

  </article>
  </main>
    <?php require '../views/footer.php' ?>
  </body>
</html>
<?php
// }
 ?>
