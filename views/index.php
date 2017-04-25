<!DOCTYPE html>
<html ng-app="">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/css/font-awesome.min.css">
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.6.3/angular.min.js"></script>
    <title>TWIMH</title>
  </head>
  <body class="">

    <header>

        <div class="logo  ">
          <div><i class="fa fa-globe fa-5x" aria-hidden="true"></i></div>
          <div><h1>T.W.I.M.H</h1></div>
        </div>

        <div class=" ">
          <h1>The.World.Is.My.Home</h1>
        </div>

        <div class="sign">
          <a href="#" ng-click="showsignin=true" >SIGN IN</a>
          <p>|</p>
           <a  href="#"  ng-click="showsignup=true" >SIGN UP</a>
        </div>

    </header>

    <main>
      <nav class="nav">
        <ul>
          <li>Cuba | 2017</li>
          <li>Pérou | 2017</li>
          <li>Canada | 2016</li>
          <li>Birmanie | 2015</li>
          <li>Népal | 2014</li>
        </ul>
      </nav>

      <article class="article">

<!-- ***********FORM SIGN IN THAT APPEAR********** -->

        <!-- <form ng-show ="showsignin" class="form_sign_in" action="model.php" method="post">

          <input ng-model="myMail" required type="email" name="email_sign_in" value="" placeholder="email">

          <input ng-model="myPassword" required type="password" name="password_sign_in" value="" placeholder="password">

          <input class="btn-sign" type="submit" name="sign_in" value="Sign In">

        </form> -->

<!-- ***********FORM SIGN IN THAT APPEAR********** -->


<!-- ***********FORM SIGN UP THAT APPEAR********** -->
        <form ng-show = "showsignup" class="form_sign_up" action="model.php" method="post">
          <input ng-model="lastNameSignup" required type="text" name="lastname" value="" placeholder="lastname">

          <input ng-model="firstNameSignup" required type="text" name="firstname" value="" placeholder="firstname">

          <input ng-model="pseudoISignup" required type="text" name="pseudo" value="" placeholder="pseudo">

          <input ng-model="myMailSignup" required type="email" name="email" value="" placeholder="email">

          <input ng-model="myPassSignup" required type="password" name="password" value="" placeholder="password">

          <input class="btn-sign" type="submit" name="sign_up" value="Sign Up">

        </form>

<!-- ***********FORM SIGN UP THAT APPEAR********** -->






      </article>
    </main>

    <footer>
      <div class="reseau">
        <i class="fa fa-facebook-official fa-3x" aria-hidden="true"></i>
        <i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i>
        <i class="fa fa-youtube-square fa-3x" aria-hidden="true"></i>
        <i class="fa fa-tumblr-square fa-3x" aria-hidden="true"></i>
      </div>
    </footer>
  </body>
</html>
