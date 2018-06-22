<?php
  require '../vendor/autoload.php';
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>GIF Making Badge</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <!-- Scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
  <script src="js/app.js"></script>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <!-- Stylesheets -->
  <!-- Stylesheets -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<main>
  <br>
  <br>
  <br>
  <br>
  <div class="container ObjectivesBox animated rotateIn">
    <div class="row">
    <div class="col s12 m6 l4"><img style="width:100%; margin-top: 15%;" class="animated rotateIn" src="public/images/GIF_Character_Loop.png"/></div>
    <div class="col s12 m6 l8">
    <div class="badgeDescriptionBox">
      <h2 class="badgeStepTitle">Summary</h2>
      <p>In this badge, you have learned:</p>
      <p>What GIFs stand for: Graphics Interchange Format</p>
      <p>That GIFs have risen in popularity among social media users and marketeers to express an emotion or promote a product in a simple looping animation.</p>
      <p>How to create GIFs using mobile applications, and advanced desktop applications such as Adobe Photoshop.</p>
      </div>
    </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <div class="row">
    <div class="col s12">
      <a class='btn-floating btn-large waves-effect waves-yellow animated infinite pulse buttonCentre' href='end.php'><i class='material-icons'>trending_flat</i></a>
    </div>
  </div>
  </main>
  <footer class="page-footer">
    <div class="progress">
      <div class="determinate" style="width: 99%;">
      </div>
    </div>
  </footer>
</body>