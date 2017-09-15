<!DOCTYPE html>
<html>
<head>
  <title>GIF Making Badge</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <!-- Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
  <script src="http://code.jquery.com/ui/1.8.21/jquery-ui.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenLite.min.js"></script>
  <script src="./../js/photoshop_elements.js"></script>
  <script src="./../js/jquery.ui.touch-punch.min.js"></script>
  <!--   <script src="./../js/app.js"></script> -->
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <!-- Stylesheets -->
  <!-- Stylesheets -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="./../css/style.css">
  <link rel="stylesheet" type="text/css" href="./../css/photoshop_elements.css">

</head>
<body>
  <header>
    <a href="https://idea.org.uk"><img id="imgLeft" src="./../public/images/garter.png"></a>
    <img id="imgRight" src="./../public/images/iDEA_Coral.png">
  </header>
  <main>
    <section id="ps_gifs_activity">
    <h2 class="badgeStepTitle">Below are the instructions<br> to create GIFs on Adobe Photoshop</h2><div class="badgeDescriptionBoxTwo"><p class="center-align">Drag and drop these boxes into their correct containers. The next five steps are about using <strong>the Timeline</strong> and <strong>adjusting the visibility of frames</strong> to create an animation.</p></div>
      <br>
      <div class="container">
        <div id="draggableContainer">
          <div class="row">
            <div class="col s12 l6">
              <p class="draggablePsSteps" id="DraggablePs8">Set looping option</p>
            </div>
            <div class="col s12 l6">
             <p class="draggablePsSteps" id="DraggablePs6">Create frames from layers</p>
           </div>
         </div>
         <div class="row">
          <div class="col s12 l6">
            <p class="draggablePsSteps" id="DraggablePs7">Adjust seconds of visibility</p>
          </div>
          <div class="col s12 l6">
            <p class="draggablePsSteps" id="DraggablePs4">Open Timeline</p>
          </div>
        </div>
        <div class="row">
         <div class="col s12 l6 push-l3">
          <p class="draggablePsSteps" id="DraggablePs5">Import layers into Timeline</p>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div id="droppableContainer">
      <div class="row"></div>
      <div class="row">
        <div class="col s12 l6"><p id="pNumber">D</p><div id="droppablePsStep4"></div></div>
        <div class="col s12 l6"><p id="pNumber">E</p><div id="droppablePsStep5"></div></div>
      </div>
      <div class="row">
        <div class="col s12 l6"><p id="pNumber">F</p><div id="droppablePsStep6"></div></div>
        <div class="col s12 l6"><p id="pNumber">G</p><div id="droppablePsStep7"></div></div>
      </div>
      <div class="row">
        <div class="col s12 l12"><p id="pNumber">H</p><div id="droppablePsStep8"></div></div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col s1 l1">
       <!--  <img class="imgSuccess" style=" width:100%; display: none;" src="./../public/images/gifs/Gif_Character_Introduction_290.gif"/> -->
     </div>
     <div class="col s1 l1">
      <img class="imgSuccess" style=" width:100%; display: none;" src="./../public/images/birth-confetti.gif"/>
    </div>
    <div class="col s1 l1">
      <img class="imgSuccess" style=" width:100%; display: none;" src="./../public/images/gifs/Gif_Character_Introduction_290.gif"/>
    </div>
    <div class="col s1 l1">
      <img class="imgSuccess" style=" width:100%; display: none;" src="./../public/images/birth-confetti.gif"/>
    </div>
    <div class="col s1 l1">
      <img class="imgSuccess" style=" width:100%; display: none;" src="./../public/images/gifs/Gif_Character_Introduction_290.gif"/>
    </div>
    <div class="col s1 l1">
      <!-- <img class="imgSuccess" style=" width:100%; display: none;" src="./../public/images/birth-confetti.gif"/> -->
    </div>
    <div class="col s1 l1">
      <!--     <img class="imgSuccess" style=" width:100%; display: none;" src="./../public/images/gifs/Gif_Character_Introduction_290.gif"/> -->
    </div>
    <div class="col s1 l1">
      <img class="imgSuccess" style=" width:100%; display: none;" src="./../public/images/birth-confetti.gif"/>
    </div>
    <div class="col s1 l1">
      <img class="imgSuccess" style=" width:100%; display: none;" src="./../public/images/gifs/Gif_Character_Introduction_290.gif"/>
    </div>
    <div class="col s1 l1">
      <img class="imgSuccess" style=" width:100%; display: none;" src="./../public/images/birth-confetti.gif"/>
    </div>
    <div class="col s1 l1">
      <img class="imgSuccess" style=" width:100%; display: none;" src="./../public/images/gifs/Gif_Character_Introduction_290.gif"/>
    </div>
  </div>
</div>
<div class="row">
  <div class="col s12">
    <a id="step21Button" style="display:none;" class='btn-floating btn-large waves-effect waves-yellow buttonCentre animated infinite pulse' href='step_21.php'><i class='material-icons'>trending_flat</i></a>
  </div>
</div>
</div>
</main>
<footer class="page-footer">
  <div class="progress">
    <div class="determinate" style="width: 84%;">
    </div>
  </div>
</footer>
</section>
</body>
</html>