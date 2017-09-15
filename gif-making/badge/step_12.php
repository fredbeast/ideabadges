<!DOCTYPE html>
<html>
<head>
  <title>GIF Making Badge</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <!-- Scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
  <script src="./../js/badge/step_12.js"></script>
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
  <link rel="stylesheet" type="text/css" href="./../css/gif_app_carousel_effects.css">
</head>
<body>
<header>
  <a href="https://idea.org.uk"><img id="imgLeft" src="./../public/images/garter.png"></a>
  <img id="imgRight" src="./../public/images/iDEA_Coral.png">
</header>
  <main>
    <div class="container">
      <h2 class="badgeStepTitle">GIF Forge App Walkthrough</h2>
      <div class="badgeDescriptionBoxTwo">
        <p>Click the arrows right or left to see what the app looks like, and note steps described at the bottom of the screen. Let's walk through the <strong>filters</strong> and <strong>effects</strong> you can apply after you have captured a sequence of images. See the GIFs in action!</p>
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
        </ol>

        <!-- Wrapper for slides -->
        <div id="myCarousel" class="carousel-inner" role="listbox">

          <div id="slideDiv1" class="item animated bounceInLeft active">
            <img class="ps" src="./../public/images/GiF_Forge_Images/2_Effects/Effects_1.png" alt="Step 1">
          </div>

          <div id="slideDiv2" class="item">
            <img class="ps" src="./../public/images/GiF_Forge_Images/2_Effects/GIF_Forge_Filters/None.gif" alt="Step 2">
          </div>

          <div id="slideDiv3" class="item">
            <img class="ps" src="./../public/images/GiF_Forge_Images/2_Effects/GIF_Forge_Filters/StopMotion.gif" alt="Step 3">
          </div>

          <div id="slideDiv4" class="item">
            <img class="ps" src="./../public/images/GiF_Forge_Images/2_Effects/GIF_Forge_Filters/Rewind.gif" alt="Step 4">
          </div>

          <div id="slideDiv5" class="item">
            <img class="ps" src="./../public/images/GiF_Forge_Images/2_Effects/GIF_Forge_Filters/4Square.gif" alt="Step 5">
          </div>

          <div id="slideDiv6" class="item">
            <img class="ps" src="./../public/images/GiF_Forge_Images/2_Effects/GIF_Forge_Filters/Horizontal.gif" alt="Step 6">
          </div>

          <div id="slideDiv7" class="item">
            <img class="ps" src="./../public/images/GiF_Forge_Images/2_Effects/GIF_Forge_Filters/Vertical.gif" alt="Step 7">
          </div>

          <div id="slideDiv8" class="item">
            <img class="ps" src="./../public/images/GiF_Forge_Images/2_Effects/GIF_Forge_Filters/BW.gif" alt="Step 8">
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
        <div class="correctCaption"><h3 class="dynamicStep">Step 1</h3><p class="dynamicCaption">In this view, you will see a close and a save button in the top left and top right corners. In the panel below your GIF, you will find a sparkles icon, a jumping rabbit icon and a pencil icon.<br>The sparkles icon enables you to add filters to your GIF. Filters are fun ways to add effects to your GIF. The jumping rabbit icon enables you to adjust the speed of the GIF. The pencil icon lets you add text, captions and emojis to your GIF.</p></div>
      </div>
      <br>
      <div class="row">
        <div class="col s6">
          <a id="resetCarousel12" class='btn-floating btn-large waves-effect waves-yellow buttonCentre orange darken-4 animated infinite pulse'><i class='material-icons'>replay</i></a>
        </div>
        <div class="col s6">
          <a id="step13Button" style="display:none" class='#aeea00 lime accent-4
 btn-floating btn-large waves-effect waves-yellow buttonCentre animated infinite pulse' href='step_13.php'><i class='material-icons'>trending_flat</i></a>
        </div>
      </div>
    </div>
  </main>
  <footer class="page-footer">
    <div class="progress">
      <div class="determinate" style="width: 48%;">
      </div>
    </div>
  </footer>
</body>
</body>
</html>