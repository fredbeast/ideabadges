<?php

require '../vendor/autoload.php';

session_start();

if(!isset($_SESSION['oauth2_access_token']) && !isset($_SESSION['oauth2_id_token'])) { 
  header('Location: http://idea-gif-making-badge.azurewebsites.net/login.php');
    // header('Location: http://localhost:8000/login.php');
  exit;
}

error_reporting(E_ALL);
ini_set("display_errors", 1);
ini_set("session.gc_maxlifetime", "3600");
ini_set("session.cookie_lifetime", "3600");
?>

<!DOCTYPE html>
<html>
<head>
  <title>GIF Making Badge</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <!-- Scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
  <script src="/js/app.js"></script>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <!-- Stylesheets -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <header>
    <a href="https://idea.org.uk"><img id="imgLeft" src="./public/images/garter.png"></a>
    <img id="imgRight" src="./public/images/iDEA_Coral.png">
  </header>
  <div class="container badgeTitlePage animated bounceInUp">
    <div class="row">
      <div class="col s12">
        <img class="badgeTitleImg" src="public/images/index/Gif_Making_Logo.png">
      </div>
    </div>
    <div class="row">
      <div class="col s12 startButtonRow">
        <a id="startButton" class="btn-floating btn-large waves-effect waves-yellow animated infinite pulse"><i class="large material-icons">launch</i></a>
      </div>
    </div>
  </div>
</body>
</html>

