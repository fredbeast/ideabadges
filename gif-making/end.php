<!DOCTYPE html>
<html>
<head>
  <title>GIF Making Badge</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <!-- Scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
  <script src="js/app.js"></script>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <!-- Stylesheets -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body id="endAnimation">
<main>
<br>
<br>
  <div class="container ObjectivesBox animated bounceInDown">
    <div class="badgeDescriptionBox">
          <h2 class="badgeEndTitle animated infinite tada">Congratulations</h2>
            <p class="center-align">You have become a GIF Master.</p>
            <p class="center-align">Click the button below to claim your points towards your<br>Bronze Inspiring Digital Enterprise Award.</p>
        </div>
      </div>
      <br>
      <br>
      <div class="row">
      <div class="col s4 push-s2 m4 push-m2 l4 push-l2">
      <img style="width: 50%;" class="animated infinite rotateIn" style="display: block; margin: auto;" id="mrGIF" src="./../public/images/gifs/gif_character_introduction_290.gif"/>
      </div>
      <div class="col s4">
            <img style="width: 100%;display: block; margin: auto;" id="mrGIF" src="public/images/gifs/BP_GIF_Character.gif"/>
            </div>
      <div class="col s4">
            <img style="width:50%;" class="animated infinite rotateIn" style="display: block; margin: auto;" id="mrGIF" src="./../public/images/gifs/gif_character_introduction_290.gif"/>
            </div>
      </div>
      <br>
      <div class="row">
      <div class="col s12">
      <a id="endButton" class='btn-floating btn-large waves-effect waves-yellow buttonCentre animated infinite pulse' href='badge-completed.php'><i class='material-icons'>done</i></a>
      <!-- turned_in -->
      </div>
      </div>
      </main>
      <footer class="page-footer">
        <div class="progress">
          <div class="determinate" style="width: 100%;">
          </div>
        </div>
      </footer>
    </body>
    </html>