<?php

// $email_sign_in = $_POST['email_sign_in'];
// $password_sign_in = $_POST['password_sign_in'];
//
// try {
//     $bdd = new PDO('mysql:host=localhost;dbname=twimh;charset=utf8', 'phpmyadmin','simplon');
// } catch (Exception $e) {
//   print "Erreur!:" .$e->getMessage() . "<br>";
//   die();
// }
//
// $reponse = $bdd->query('SELECT email, password FROM signup');
// while ($donnees = $reponse->fetch())
// {
// if (isset($_POST['sign_in']) && $$email_sign_in = $donnees['email'] && $password_sign_in = $donnees['password']){
// echo "vous etes connecte";
// }
// else {
//   echo "something went wrong";
// };
// };
 ?>
<!-- ***********FORM SIGN IN THAT APPEAR********** -->

        <form class="form_sign_in" action="" method="post">

          <input required type="email" name="email_sign_in" value="" placeholder="email">

          <input required type="password" name="password_sign_in" value="" placeholder="password">

          <input class="btn-sign" type="submit" name="sign_in" value="Sign In">

        </form>

<!-- ***********FORM SIGN IN THAT APPEAR********** -->
