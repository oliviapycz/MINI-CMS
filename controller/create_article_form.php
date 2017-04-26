<?php
session_start();
if( isset($_SESSION['email_sign_in']) && isset($_SESSION['password_sign_in']))
{ ?>
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

    <article class="article">

    <form class="" action="../src/model_new_article.php" method="post">
      <input type="text" name="country" value="" placeholder="pays visité">
      <input type="text" name="year" value="" placeholder="année de la visite">
      <input class="input_title_create" type="text" name="title" value="" placeholder="title">
<br>
      <textarea class="paraph_create" name="first_paraph" rows="8" cols="80">first_paraph</textarea>
<br />
            <textarea class="paraph_create" name="second_paraph" rows="8" cols="80">second_paraph</textarea>
<br>
                  <textarea class="paraph_create" name="third_paraph" rows="8" cols="80">third_paraph</textarea>
<br>
                  <input type="submit" name="" value="ENVOYER">
    </form>
  </article>
    <?php require '../views/footer.php' ?>
  </body>
</html>
<?php } ?>
