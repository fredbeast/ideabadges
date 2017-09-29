<?php

require '../vendor/autoload.php';

session_start();
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
  <script src="js/jquery.ui.touch-punch.min.js"></script>
  <script src="js/modernizr.js"></script>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <!-- Stylesheets -->
  <!-- Stylesheets -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/where_gifs_came_from.css">
</head>
<body>
  <header>
    <a href="https://idea.org.uk"><img id="imgLeft" src="public/images/garter.png"></a>
    <img id="imgRight" src="public/images/iDEA_Coral.png">
  </header>
  <main>
    <h2 class="badgeStepTitle">Where did GIFs come from?</h2>

    <section id="cd-timeline" class="cd-container">
      <div class="cd-timeline-block">
        <div class="cd-timeline-img cd-picture">
          <img id="smiley" src="public/images/birth-confetti.gif" alt="Picture">
        </div> <!-- cd-timeline-img -->

        <div class="cd-timeline-content">
          <h2 class="timelineH2">The GIF was born.</h2>
          <p>Steve Wilhite of CompuServe launched the Graphics Interchange Format, known as "GIF 87a" in June 1987.</p>
          <span class="cd-date">1987</span>
        </div> <!-- cd-timeline-content -->
      </div> <!-- cd-timeline-block -->

      <div class="cd-timeline-block">
        <div class="cd-timeline-img cd-movie">
          <img id="new" src="https://web.archive.org/web/20060506120010/http://hk.geocities.com:80/man_minghk/image/new.gif" alt="Movie">
        </div> <!-- cd-timeline-img -->

        <div class="cd-timeline-content">
          <h2 class="timelineH2">GIF 89a</h2>
          <p>In 1989, an updated version of the Graphics Interchange Format was released. It was named "GIF 89a." This format improved on the previous GIF release by including support for transparent backgrounds and the ability to set animation delays.</p>
          <span class="cd-date">1989</span>
        </div> <!-- cd-timeline-content -->
      </div> <!-- cd-timeline-block -->

      <div class="cd-timeline-block">
        <div class="cd-timeline-img cd-picture">
          <img src="public/images/1st.gif" alt="Picture">
        </div> <!-- cd-timeline-img -->

        <div class="cd-timeline-content">
          <h2 class="timelineH2">The first picture on the web: A GIF</h2>
          <p>In 1993, when the revolutionary Mosaic browser launched, it supported two image formats: the GIF and the JPEG. The first ever photo on the World Wide Web was a static GIF image of an all-female parody pop group: "Les Horribles Cernettes."</p>
          <img src="https://c8.staticflickr.com/5/4083/5213300383_eafff428fe_b.jpg">
          <p>The group was founded by employees of CERN [The European Organisation for Nuclear Research]. CERN also happens to be the organisation, where Sir Tim Berners-Lee, a British scientist, invented the World Wide Web.</p>
          <span class="cd-date">1993</span>
        </div> <!-- cd-timeline-content -->
      </div> <!-- cd-timeline-block -->
    </section> <!-- cd-timeline -->
    <div class="row">
      <div class="col s12">
        <a id="step5Button" class="nextButton btn-floating btn-large waves-effect waves-yellow buttonCentre animated infinite pulse"><i class="material-icons">trending_flat</i></a>
      </div>
    </div>
  </main>
  <footer class="page-footer">
    <div class="progress">
      <div class="determinate" style="width: 16%;">
      </div>
    </div>
  </footer>
</body>
</html>