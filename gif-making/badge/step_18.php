<!DOCTYPE html>
<html>
<head>
  <title>GIF Making Badge</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <!-- Scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenLite.min.js"></script>
  <script src="./../js/photoshop_elements.js"></script>
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
  <link rel="stylesheet" type="text/css" href="./../css/gif_app_carousel_photoshop.css">
</head>
<body>
<header>
  <a href="https://idea.org.uk"><img id="imgLeft" src="./../public/images/garter.png"></a>
  <img id="imgRight" src="./../public/images/iDEA_Coral.png">
</header>
  <main>
    <div class="container">
      <h2 class="badgeStepTitle">Photoshop Walkthrough</h2>
      <div class="row">
      <div class="col s12">
      <div class="badgeDescriptionBoxTwo">
        <p>Let's walk through the Adobe Photoshop application that enables us to create customised and advanced animated GIFs. Click the arrows right or left to see what the app looks like, and note steps described at the bottom of the screen.</p>
      </div>
      </div>
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
            <li data-target="#myCarousel" data-slide-to="14"></li>
            <li data-target="#myCarousel" data-slide-to="15"></li>
            <li data-target="#myCarousel" data-slide-to="16"></li>
            <li data-target="#myCarousel" data-slide-to="17"></li>
            <li data-target="#myCarousel" data-slide-to="18"></li>
            <li data-target="#myCarousel" data-slide-to="19"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div id="myCarousel" class="carousel-inner" role="listbox">

            <div id="slideDiv1" class="item animated bounceInLeft active">
              <img class="ps" src="./../public/images/ps/ps_1.png" alt="Step 1">
            </div>

            <div id="slideDiv2" class="item">
              <img class="ps" src="./../public/images/ps/ps_2.png" alt="Step 2">
            </div>

            <div id="slideDiv3" class="item">
              <img class="ps" src="./../public/images/ps/ps_3.png" alt="Step 3">
            </div>

            <div id="slideDiv4" class="item">
              <img class="ps" src="./../public/images/ps/ps_4.png" alt="Step 4">
            </div>

            <div id="slideDiv5" class="item">
              <img class="ps" src="./../public/images/ps/ps_5.png" alt="Step 5">
            </div>

            <div id="slideDiv6" class="item">
              <img class="ps" src="./../public/images/ps/ps_6.png" alt="Step 6">
            </div>

            <div id="slideDiv7" class="item">
              <img class="ps" src="./../public/images/ps/ps_7.png" alt="Step 7">
            </div>

            <div id="slideDiv8" class="item">
              <img class="ps" src="./../public/images/ps/ps_8.png" alt="Step 8">
            </div>

            <div id="slideDiv9" class="item">
              <img class="ps" src="./../public/images/ps/ps_9.png" alt="Step 9">
            </div>

            <div id="slideDiv10" class="item">
              <img class="ps" src="./../public/images/ps/ps_10.png" alt="Step 10">
            </div>

            <div id="slideDiv11" class="item">
              <img class="ps" src="./../public/images/ps/ps_11.png" alt="Step 11">
            </div>

            <div id="slideDiv12" class="item">
              <img class="ps" src="./../public/images/ps/ps_12.png" alt="Step 12">
            </div>

            <div id="slideDiv13" class="item">
              <img class="ps" src="./../public/images/ps/ps_13.png" alt="Step 13">
            </div>

            <div id="slideDiv14" class="item">
              <img class="ps" src="./../public/images/ps/ps_14.png" alt="Step 14">
            </div>

            <div id="slideDiv15" class="item">
              <img class="ps" src="./../public/images/ps/ps_15.png" alt="Step 15">
            </div>

            <div id="slideDiv16" class="item">
              <img class="ps" src="./../public/images/ps/ps_16.png" alt="Step 16">
            </div>

            <div id="slideDiv17" class="item">
              <img class="ps" src="./../public/images/ps/ps_17.png" alt="Step 17">
            </div>

            <div id="slideDiv18" class="item">
              <img class="ps" src="./../public/images/ps/ps_18.png" alt="Step 18">
            </div>

            <div id="slideDiv19" class="item">
              <img class="ps" src="./../public/images/ps/ps_20.png" alt="Step 19">
            </div>

            <div id="slideDiv20" class="item">
              <img class="ps" src="./../public/images/ps/ps_21.png" alt="Step 20">
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
    <div class="correctCaption"><h3 class="dynamicStep">Step 1</h3><p class="dynamicCaption">Open the Adobe Photoshop application on your desktop.</p></div>
    </div>
    <br>
    <div class="row">
      <div class="col s6">
        <a id="resetCarousel18" class='orange darken-4 btn-floating btn-large waves-effect waves-yellow buttonCentre animated infinite pulse'><i class='material-icons'>replay</i></a>
      </div>
      <div class="col s6">
        <a id="step19Button" style="display:none" class='#aeea00 lime accent-4 btn-floating btn-large waves-effect waves-yellow buttonCentre animated infinite pulse' href='step_19.php'><i class='material-icons'>trending_flat</i></a>
      </div>
    </div>

  </div>
</main>
<footer class="page-footer">
  <div class="progress">
    <div class="determinate" style="width: 76%;">
    </div>
  </div>
</footer>
</body>
</body>
</html>