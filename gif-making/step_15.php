<!DOCTYPE html>
<html>
<head>
  <title>GIF Making Badge</title>
  <!-- Scripts -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
  <script src="http://code.jquery.com/ui/1.8.21/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
  <script src="js/jquery.ui.touch-punch.min.js"></script>
  <script src="js/app.js"></script>
  <!-- Stylesheets -->
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/step_16_17.css">
</head>
<body>
<header>
  <a href="https://idea.org.uk"><img id="imgLeft" src="public/images/garter.png"></a>
  <img id="imgRight" src="public/images/iDEA_Coral.png">
</header>
<main>
  <section id="apps_gifs_activity">
    <div class="row">
        <div class="col s12">
        <div class="badgeQuizQuestionContainer">
          <h2 class="badgeQuizQuestion">Below are the instructions to create GIFs on mobile applications</h2>
            <div class="badgeDescriptionBoxTwo">
              <p class="center-align">Drag and drop these boxes into their correct containers. The next three steps are about <strong>capturing</strong> and <strong>editing</strong> your GIF.</p>
            </div>
         <!-- <div id="crumbs">
          <ul>
            <li><a href="#">Breadcrumb</a></li>
          </ul>
         </div> -->

          </div>
          </div>
          </div>
    <div class="container">
      <div id="draggableContainer">
        <div class="row">
          <div class="col s12 l6">
            <p class="draggableGifSteps" id="Draggable1">Capture a sequence of images</p>
            </div>
            <div class="col s12 l6">
            <p class="draggableGifSteps" id="Draggable3">Adjust speed, add text or captions</p>
            </div>
            </div>
            <div class="row">
          <div class="col s12 l6 push-l3">
                      <p class="draggableGifSteps" id="Draggable2">Apply filter</p>
                      </div>
        </div>
      </div>
    </div>
 
    <br>
    <div class="container">
      <div id="droppableContainer">
        <div class="row">
          <div class="col s12 l6"><p id="pNumber">A</p><div id="droppableGifStep1"></div>
          </div>
          <div class="col s12 l6"><p id="pNumber">B</p><div id="droppableGifStep2"></div>
          </div>
          </div>
          <div class="row">
          <div class="col s12 l6 push-l3"><p id="pNumber">C</p><div id="droppableGifStep3"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
              <div class="row">
                <div class="col s1 l1">
                 <!--  <img class="imgSuccess" style=" width:100%; display: none;" src="./../public/images/gifs/Gif_Character_Introduction_290.gif"/> -->
                </div>
                <div class="col s1 l1">
                  <img class="imgSuccess" style=" width:100%; display: none;" src="public/images/birth-confetti.gif"/>
                </div>
                <div class="col s1 l1">
                  <img class="imgSuccess" style=" width:100%; display: none;" src="public/images/gifs/Gif_Character_Introduction_290.gif"/>
                </div>
                <div class="col s1 l1">
                  <img class="imgSuccess" style=" width:100%; display: none;" src="public/images/birth-confetti.gif"/>
                </div>
                <div class="col s1 l1">
                  <img class="imgSuccess" style=" width:100%; display: none;" src="public/images/gifs/Gif_Character_Introduction_290.gif"/>
                </div>
                <div class="col s1 l1">
                  <!-- <img class="imgSuccess" style=" width:100%; display: none;" src="./../public/images/birth-confetti.gif"/> -->
                </div>
                <div class="col s1 l1">
                  <!-- <img class="imgSuccess" style=" width:100%; display: none;" src="./../public/images/gifs/Gif_Character_Introduction_290.gif"/> -->
                </div>
                <div class="col s1 l1">
                  <img class="imgSuccess" style=" width:100%; display: none;" src="public/images/birth-confetti.gif"/>
                </div>
                <div class="col s1 l1"><?php

                    require '../vendor/autoload.php';

                    session_start();
                    ?>

                    <img class="imgSuccess" style=" width:100%; display: none;" src="public/images/gifs/Gif_Character_Introduction_290.gif"/>
                </div>
                <div class="col s1 l1">
                  <img class="imgSuccess" style=" width:100%; display: none;" src="public/images/birth-confetti.gif"/>
                </div>
                <div class="col s1 l1">
                  <img class="imgSuccess" style=" width:100%; display: none;" src="public/images/gifs/Gif_Character_Introduction_290.gif"/>
                </div>
              </div>
              </div>


<div class="row">
  <div class="col s12">
    <a id="step16Button" class='btn-floating btn-large waves-effect waves-yellow buttonCentre animated infinite pulse' style="display: none;"><i class='material-icons'>trending_flat</i></a>
  </div>
</div>
</main>
<footer class="page-footer">
  <div class="progress">
    <div class="determinate" style="width: 64%;">
    </div>
  </div>
</footer>
</section>
</body>
</html>