<!DOCTYPE html>
<html>
<head>
  <title>GIF Making Badge</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <!-- Scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
  <script src="js/badge/step_13.js"></script>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
    }
  </style>
  <!-- Stylesheets -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/gif_app_carousel.css">
</head>
<body>
<header>
  <a href="https://idea.org.uk"><img id="imgLeft" src="public/images/garter.png"></a>
  <img id="imgRight" src="public/images/iDEA_Coral.png">
</header>
  <main>
    <div class="container">
      <h2 class="badgeStepTitle">GIF Forge App Walkthrough</h2>
      <div class="badgeDescriptionBoxTwo">
      <p>Click the arrows right or left to see what the app looks like, and note steps described at the bottom of the screen. The next button will appear once you have clicked through all of the steps. Let's walk through how you can <strong>adjust</strong> the <strong>speed</strong> of the frame rates in your GIF, <strong>add text</strong> and <strong>captions</strong> and <strong>smileys</strong>. Please note that smileys are in-app purchases and will cost you money.</p>
      </div>
        <br>
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li id="firstSlide" data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li id="secondSlide" data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
            <li data-target="#myCarousel" data-slide-to="6"></li>
            <li data-target="#myCarousel" data-slide-to="7"></li>
            <li data-target="#myCarousel" data-slide-to="8"></li>
            <li data-target="#myCarousel" data-slide-to="9"></li>
            <li data-target="#myCarousel" data-slide-to="10"></li>
            <li data-target="#myCarousel" data-slide-to="11"></li>
            <li data-target="#myCarousel" data-slide-to="12"></li>
            <li data-target="#myCarousel" data-slide-to="13"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div id="myCarousel" class="carousel-inner" role="listbox">

            <div id="slideDiv1" class="item animated bounceInLeft active">
              <img class="ps" src="public/images/GiF_Forge_Images/3_Speed/1_Speed.PNG" alt="Step 1">
            </div>

            <div id="slideDiv2" class="item">
              <img class="ps" src="public/images/GiF_Forge_Images/3_Speed/2_Speed.PNG" alt="Step 2">
            </div>

            <div id="slideDiv3" class="item">
              <img class="ps" src="public/images/GiF_Forge_Images/3_Speed/3_Speed.PNG" alt="Step 3">
            </div>

            <div id="slideDiv4" class="item">
              <img class="ps" src="public/images/GiF_Forge_Images/3_Speed/4_Speed.PNG" alt="Step 4">
            </div>

            <div id="slideDiv5" class="item">
              <img class="ps" src="public/images/GiF_Forge_Images/4_Text/1_Icon_Explanation.PNG" alt="Step 5">
            </div>

            <div id="slideDiv6" class="item">
              <img class="ps" src="public/images/GiF_Forge_Images/4_Text/2_Text.PNG" alt="Step 6">
            </div>

            <div id="slideDiv7" class="item">
              <img class="ps" src="public/images/GiF_Forge_Images/4_Text/3_Text.PNG" alt="Step 7">
            </div>

            <div id="slideDiv8" class="item">
              <img class="ps" src="public/images/GiF_Forge_Images/4_Text/4_Text.PNG" alt="Step 8">
            </div>

            <div id="slideDiv9" class="item">
              <img class="ps" src="public/images/GiF_Forge_Images/4_Text/5_Text.PNG" alt="Step 9">
            </div>

            <div id="slideDiv10" class="item">
              <img class="ps" src="public/images/GiF_Forge_Images/4_Text/5_Text.PNG" alt="Step 10">
            </div>

            <div id="slideDiv11" class="item">
              <img class="ps" src="public/images/GiF_Forge_Images/5_Caption/1_Caption.PNG" alt="Step 11">
            </div>

            <div id="slideDiv12" class="item">
              <img class="ps" src="public/images/GiF_Forge_Images/5_Caption/2_Caption.PNG" alt="Step 12">
            </div>

            <div id="slideDiv13" class="item">
              <img class="ps" src="public/images/GiF_Forge_Images/5_Caption/3_Caption.PNG" alt="Step 13">
            </div>

            <div id="slideDiv13" class="item">
              <img class="ps" src="public/images/GiF_Forge_Images/6_Smiley/1_Smiley.PNG" alt="Step 14">
            </div>


          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
      </div>
    <br>
    <div class="col s12">
    <div class="correctCaption"><h3 class="dynamicStep">Step 1</h3><p class="dynamicCaption">Select the jumping rabbit icon to adjust the frame rate of the GIF. This gives you the ability to increase or decrease the speed of the animation in the GIF. Adjust the slider using your finger to determine the speed at which each frame should play at. The two icons below the slider enable you to change the direction and adjust the speed, too.</p></div>
    </div>
    <br>
    <div class="row">
      <div class="col s6">
        <a id="resetCarousel13" style="display: none;" class='orange darken-4 btn-floating btn-large waves-effect waves-yellow buttonCentre animated infinite pulse'><i class='material-icons'>replay</i></a>
      </div>
      <div class="col s6">
        <a id="step14Button" style="display:none" class='#aeea00 lime accent-4 btn-floating btn-large waves-effect waves-yellow buttonCentre animated infinite pulse'><i class='material-icons'>trending_flat</i></a>
      </div>
    </div>

  </div>
  <br>
  <br>
  <br>
  <br>
</main>
<footer class="page-footer">
  <div class="progress">
    <div class="determinate" style="width: 52%;">
    </div>
  </div>
</footer>
</body>
</body>
</html>