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
      <nav class="nav">
        <ul>
          <div class="cli"><li>Cuba | 2017</li></div>
          <li>Pérou | 2017</li>
          <li>Canada | 2016</li>
          <li>Birmanie | 2015</li>
          <li>Népal | 2014</li>
        </ul>
      </nav>

      <article class="article">
        <h2>TITRE</h2>
        <h3>Prénom NOM | DATE</h3>
        <h4></h4>


        <div class="signin_jquery"> <?php require "../controller/signin_form.php" ?> </div>
        <div class="signup_jquery"> <?php require "../controller/signup_form.php" ?> </div>

      </article>
    </main>

      <?php require 'footer.php' ?>
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="js/script.js"></script>

    </script>
  </body>
</html>
