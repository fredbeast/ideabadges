<?php

require '../vendor/autoload.php';

session_start();

if(isset($_POST["gifDefinition"]))  {
    $radioVal = $_POST["gifDefinition"];
}
else {
    $radioVal = null;
}
$display = 0;


if($radioVal == "gif"){
  $display = 1;
} else if ($radioVal == "gif") {
  $display = 1;
} else if ($radioVal == "gif and gif") {
  $display = 1;
}

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
  <div class="container">
  <div class="badgeDescriptionBox">
    <h2 class="badgeStepTitle">Trivia Question: How to pronounce GIFs?</h2>
    <img class="gifImg" src="public/images/pronounce-gif.gif">
        <p>There is a debate on how to pronounce the word: GIF. Some prefer a soft "G" and others the hard "G." The Oxford English Dictonary accepts two pronounciations for the word: GIF. Listen to both pronounciations below. Select what you think is the right option and click submit. The correct answer will display the next button.</p>
        <script>
          function play(){
           var audio = document.getElementById("audio");
           audio.play();
           document.getElementById("playJiff").style.color = "yellowgreen";
           setTimeout(function(){
           document.getElementById("playJiff").style.color = "";
              }, 1000);
         }

         function play2() {
          var audio2 = document.getElementById("audio2");
          audio2.play();
          document.getElementById("playGif").style.color = "yellowgreen";
          setTimeout(function(){
          document.getElementById("playGif").style.color = "";
             }, 1000);
         }

        </script>
        <div class="row">
          <div class="col s6 push-s8">
            <p><strong>/d&#658;&#618;f/</strong></p><i id="playJiff" class="material-icons" type="button" value="PLAY"  onclick="play()">play_circle_filled<audio id="audio" src="public/images/gif_1_gb_1.mp3"" ></audio></i>
            </div>
            <div class="col s6 pull-s4">
              <p><strong>/&#608;&#618;f/<strong></p><i id="playGif" class="material-icons md-18" type="button" value="PLAY"  onclick="play2()">play_circle_filled<audio id="audio2" src="public/images/gif_gb_1.mp3"" ></audio></i>
              </div>
            </div>
            </div>
    <form method="post" action="">
      <div class="row">
        <p class="col s12 center-align">
          <input name="gifDefinition" type="radio" id="test1" value="gif"/>
          <label for="test1">/d&#658;&#618;f/</label>
        </p>
        <p class="col s12 center-align">
          <input name="gifDefinition" type="radio" id="test2" value="gif"/>
          <label for="test2">/&#608;&#618;f/</label>
        </p>
        <p class="col s12 center-align">
          <input name="gifDefinition" type="radio" id="test3" value="gif and gif"/>
          <label for="test3">/d&#658;&#618;f/ and /&#608;&#618;f/</label>
        </p>
        <div class="col s12">
          <?php
          if ($display == 0) {
            echo "<br><br><button class='btn waves-effect waves-yellow buttonCentre' value='Result' name='action'>Submit
            <i class='material-icons right'>send</i>
          </button>";
        }
    else if ($display == 1) {
      echo "<div class='animated bounceInUp col s6 push-s3 quizSuccessMessage'><p class='center-align'>Both pronounciations are correct. Having said that, Steve Wilhite, the father of the GIF, stated in his acceptance speech on receiving a Webby Award: \"It's pronounced JIF, not GIF\".</p><img class='gifImg' src='./../public/images/icons/webby.png'/></div>";
      echo "<div class='col s12'><br><br><a id='step10Button' class='#aeea00 lime accent-4 animated infinite pulse btn-floating btn-large waves-effect waves-yellow buttonCentre animated infinite pulse'><i class='material-icons'>trending_flat</i></a></div>";
    };
    ?>
  </div>
</div>
</form>
</div>
</main>
<footer class="page-footer">
  <div class="progress">
    <div class="determinate" style="width: 36%;">
    </div>
  </div>
</footer>
</body>
</html>