<?php 
$radioVal = $_POST["gifDefinition"];
$display = 0;


if($radioVal == "Great Internet Fun"){
  $display = 2;
  // echo "GIFs can be great internet fun, but that is not what it stands for.";
} else if ($radioVal == "Graphics Interchange Format") {
  // echo "<a class='waves-effect waves-yellow btn' href='5_question_two.php'><i class='material-icons right'>trending_flat</i>Next</a>";
  $display = 1;
} else if ($radioVal == "Graphics Intelligence Format") {
  $display = 3;
  // echo "This is not the correct answer. Try again.";
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
  <script src="./../js/app.js"></script>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <!-- Stylesheets -->
  <!-- Stylesheets -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="./../css/style.css">
</head>
<body>
<header>
  <a href="https://idea.org.uk"><img id="imgLeft" src="./../public/images/garter.png"></a>
  <img id="imgRight" src="./../public/images/iDEA_Coral.png">
</header>
<main>
<br>
<br>
<br>
<br>
  <div class="container main">
    <h2 class="badgeStepTitle">What does GIF stand for?</h2>
    <p class="infoBox center-align">Select what you think is the right option and click submit. The correct answer will display the next button.</p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
      <div class="row">
        <p class="col s12 center-align answerOption">
          <input name="gifDefinition" type="radio" id="test1" value="Great Internet Fun"/>
          <label for="test1">Great Internet Fun</label>
        </p>
        <p class="col s12 center-align answerOption">
          <input name="gifDefinition" type="radio" id="test2" value="Graphics Interchange Format"/>
          <label for="test2">Graphics Interchange Format</label>
        </p>
        <p class="col s12 center-align answerOption">
          <input name="gifDefinition" type="radio" id="test3" value="Graphics Intelligence Format"/>
          <label for="test3">Great Intelligence Format</label>
        </p>
        <div class="col s12">
          <?php
          if ($display == 0) {
            echo "<br><br><button class='submitButton animated infinite pulse btn waves-effect waves-yellow buttonCentre' value='Result' name='action'>Submit
            <i class='material-icons right'>send</i>
          </button>";
        }
        else if ($display == 2) {
          echo "<div class='animated fadeIn col s6 push-s3 quizErrorMessage'><p class='center-align'>GIFs have risen in popularity on social media and are providing great internet fun for social media users eager to express an emotion through a simple animation. But this is not the correct answer. Try again!</p></div>";
          echo "<div class='animated infinite pulse col s12'><br><br><button class='btn waves-effect waves-yellow buttonCentre' value='Result' name='action'>Submit
          <i class='material-icons right'>send</i>
        </button></div>";
      }
      else if($display == 3) {
        echo "<div class='animated fadeIn col s6 push-s3 quizErrorMessage'><p class='center-align'>The first word: \"Graphics\" is correct, and we quite agree that it is an image file format created by some very intelligent computer scientists. But this is not the correct answer. Try again!</div>";
        echo "<div class='animated infinite pulse col s12'><br><br><button class='btn waves-effect waves-yellow buttonCentre' value='Result' name='action'>Submit
        <i class='material-icons right'>send</i>
      </button></div>";
    }
    else if ($display == 1) {
      echo "<div class='animated lightSpeedIn col s6 push-s3 quizSuccessMessage'><p class='center-align'>Correct. Well done. <br>GIF stands for Graphics Interchange Format. GIFs can store one or more images. It can animate between multiple images to give an illusion of movement.</p></div>";
        echo "<div class='col s12'><br><br><a id='step7Button' class='#aeea00 lime accent-4 btn-floating btn-large waves-effect waves-yellow animated infinite pulse buttonCentre'><i class='material-icons'>trending_flat</i></a></div>";
      };
      ?>
  </div>
</div>
</form>
</div>
</main>
<footer class="page-footer">
  <div class="progress">
    <div class="determinate" style="width: 24%;">
    </div>
  </div>
</footer>
</body>
</html>