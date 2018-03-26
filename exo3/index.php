<?php 
require 'class/database.php';
require 'class/connect.php';
require 'class/users.php';

$db = app::getDatabase(); //Connexion à la db

//Si l'action de validation a été faite - REGISTER
if(isset($_POST["submit"]) && !empty($_POST["username"]) && !empty($_POST["email"]) && !empty($_POST["password"])){

    // On récupère les valeurs du formulaire
    $username = $_POST ['username']; 
    $email = $_POST['email']; 
    $password = $_POST['password']; 

    // On sanétise
    $_POST['username'] = filter_var($_POST['username'],FILTER_SANITIZE_STRING);
    $_POST['email']    = filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);
    $_POST['password'] = filter_var($_POST['password'],FILTER_SANITIZE_STRING); 

    // redirection
    header('location: merci.php');
}


//Si l'action de validation a été faite - LOGIN
if(isset($_POST["submit2"]) && !empty($_POST["email2"]) && !empty($_POST["password2"])){

  // On récupère les valeurs du formulaire
  $email = $_POST['email2']; 
  $password = $_POST['password2']; 

  // On sanétise
  $_POST['email2']    = filter_var($_POST['email2'],FILTER_VALIDATE_EMAIL);
  $_POST['password2'] = filter_var($_POST['password2'],FILTER_SANITIZE_STRING); 

  // redirection
  header('location: merci.php');
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Sign-Up/Login Form</title>
</head>

<body>

  <div class="form">

    <ul class="tab-group">
      <li class="tab active">
        <a href="#signup">Sign Up</a>
      </li>
      <li class="tab">
        <a href="#login">Log In</a>
      </li>
    </ul>

    <div class="tab-content">
      <div id="signup">
        <h1>Sign Up for Free</h1>

        <form method="post">

          <div class="field-wrap">
            <label>
              Username
              <span class="req">*</span>
            </label>
            <input type="text" name="username"  required autocomplete="off" />
          </div>

          <div class="field-wrap">
            <label>
              Email Address
              <span class="req">*</span>
            </label>
            <input type="email" name="email"  required autocomplete="off" />
          </div>

          <div class="field-wrap">
            <label>
              Set A Password
              <span class="req">*</span>
            </label>
            <input type="password" name="password"  required autocomplete="off" />
          </div>

          <button type="submit" name="submit" class="button button-block" />Get Started</button>

        </form>

      </div>

      <div id="login">
        <h1>Welcome Back!</h1>

        <form method="post">

          <div class="field-wrap">
            <label>
              Email Address
              <span class="req">*</span>
            </label>
            <input type="email" name="email2" required autocomplete="off" />
          </div>

          <div class="field-wrap">
            <label>
              Password
              <span class="req">*</span>
            </label>
            <input type="password" name="password2" required autocomplete="off" />
          </div>

          <button type="submit" name="submit2" class="button button-block" />Log In</button>

        </form>

      </div>

    </div>

  </div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="js/index.js"></script>

</body>

</html>
