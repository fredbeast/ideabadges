<?php 
$radioVal = $_POST["gifDefinition"];
$display = 0;


if($radioVal == "Steve Jobs of Apple"){
  $display = 2;
  // echo "GIFs can be great internet fun, but that is not what it stands for.";
} else if ($radioVal == "Steve Wilhite of CompuServe") {
  // echo "<a class='waves-effect waves-yellow btn' href='5_question_two.php'><i class='material-icons right'>trending_flat</i>Next</a>";
  $display = 1;
} else if ($radioVal == "Jacob Ziv and Abraham Lempel") {
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
  <div class="container">
    <h2 class="badgeStepTitle">Who developed the GIF file format?</h2>
    <p class="infoBox center-align">Select what you think is the right option and click submit. The correct answer will display the next button.</p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
      <div class="row">
        <p class="col s12 center-align">
          <input name="gifDefinition" type="radio" id="test1" value="Steve Jobs of Apple">
          <label for="test1">Steve Jobs of Apple</label>
        </p>
        <p class="col s12 center-align">
          <input name="gifDefinition" type="radio" id="test2" value="Steve Wilhite of CompuServe"/>
          <label for="test2">Steve Wilhite of CompuServe</label>
        </p>
        <p class="col s12 center-align">
          <input name="gifDefinition" type="radio" id="test3" value="Jacob Ziv and Abraham Lempel"/>
          <label for="test3">Jacob Ziv and Abraham Lempel</label>
        </p>
        <div class="col s12">
          <?php
          if ($display == 0) {
            echo "<br><br><button class='animated infinite pulse btn waves-effect waves-yellow buttonCentre' value='Result' name='action'>Submit
            <i class='material-icons right'>send</i>
          </button>";
        }
        else if ($display == 2) {
          echo "<div class='animated fadeIn col s6 push-s3 quizErrorMessage'><p class='center-align'>Steve Jobs was the CEO of Apple.<br> Steve Jobs developed many other brilliant things, but he was not in charge of developing the GIF file format.</p></div>";
          echo "<div class='col s12'><br><br><button class='animated infinite pulse btn waves-effect waves-yellow buttonCentre' value='Result' name='action'>Submit
          <i class='material-icons right'>send</i>
        </button></div>";
      }
      else if($display == 3) {
        echo "<div class='animated lightSpeedIn col s6 push-s3 quizErrorMessage'><p class='center-align'><strong>Jacob Ziv</strong> and <strong>Abraham Lempel</strong> created the <strong>Lempel-Ziv-Welch</strong> compression techique, which is a new class of lossless data-compression algorithms. The GIF file format uses this compression technique to preserve the image data and therefore the quality of the image. However, this is not the correct answer.</p></div>";
        echo "<div class='col s12'><br><br><button class='animated infinite pulse btn waves-effect waves-yellow buttonCentre' value='Result' name='action'>Submit
        <i class='material-icons right'>send</i>
      </button></div>";
    }
    else if ($display == 1) {
      echo "<div class='animated lightSpeedIn col s6 push-s3 quizSuccessMessage'><p class='center-align'>Correct.<br> GIF was developed by Steve Wilhite of CompuServe.</p></div>";
        echo "<div class='col s12'><br><br><a id='step8Button' class='#aeea00 lime accent-4 animated infinite pulse btn-floating btn-large waves-effect waves-yellow buttonCentre animated infinite pulse'><i class='material-icons'>trending_flat</i></a></div>";
      };
      ?>
  </div>
</div>
</form>
</div>
</main>
<footer class="page-footer">
  <div class="progress">
    <div class="determinate" style="width: 28%;">
    </div>
  </div>
</footer>
</body>
</html>