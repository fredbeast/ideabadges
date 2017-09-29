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
  <link <?php

    require '../vendor/autoload.php';

    session_start();
    ?>
    ="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <!-- Stylesheets -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<header>
  <a href="https://idea.org.uk"><img id="imgLeft" src="public/images/garter.png"></a>
  <img id="imgRight" src="public/images/iDEA_Coral.png">
</header>
<main>
<br>
<br>
<br>
<br>
  <div class="container ObjectivesBox animated bounceInDown">
    <div class="badgeDescriptionBoxLast">
          <h2 class="badgeStepTitle">Tips and techniques to optimise GIFs</h2>
          <ul class="badgeMainText">
            <h5>Capture the right moment</h5>
                <li>When using video clips such as YouTube videos to create GIFs, trim the videos to a key moment you think will create a memorable way to express and share an emotion or reaction. The right moment may only be a second or two long.</li>
                <img style="width:50%; display: block; margin: auto;" src="public/images/gifs/Pitch_Inspiration.gif">
                <br>
                <li>When using photos, ensure these have been captured in a sequence to achieve an illusion of movement.</li>
                <br>
                <img style="width:50%; display: block; margin: auto;" src="public/images/GiF_Forge_Images/2_Effects/GIF_Forge_Filters/None.GIF">
                <br>
            <h5>Tweaking the GIF</h5>
                <li>Make use of applying filters, texts, and captions. Have a play around and see what works best. Simply, have fun creating a memorable GIF.</li>
                <br>
                <img style="width:50%; display: block; margin: auto;" src="public/images/gifs/Pitch_Yes_You.gif">
                <br>
            <h5>Sharing the GIF at the right moment</h5>
                <li>Waiting for the right moment to drop a GIF into chat or a forum thread is just as important as creating a GIF that communicates what you you want to say.</li>
                <br>
                <img style="width:50%; display: block; margin: auto;" src="public/images/gifs/Pitch_Snapchat.gif">
          </ul>
        </div>
      </div>
      <br>
      <br>
      <br>
      <br>
      <div class="row">
      <div class="col s12">
      <a id="summaryButton" class='btn-floating btn-large waves-effect waves-yellow buttonCentre animated infinite pulse'><i class='material-icons'>trending_flat</i></a>
      </div>
      </div>
      </main>
      <footer class="page-footer">
        <div class="progress">
          <div class="determinate" style="width: 97%;">
          </div>
        </div>
      </footer>
    </body>
    </html>