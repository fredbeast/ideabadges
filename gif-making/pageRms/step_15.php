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
  <link rel="stylesheet" type="text/css" href="./../css/style.css">
  <link rel="stylesheet" type="text/css" href="./../css/phone.css">
</head>
<body>
<main>
  <div class="container">
    <h2 class="badgeStepTitle">GIF App Walkthrough</h2>
    <div class="badgeDescriptionBox">
    <p>Let's walk through an application that sets the benchmark for GIF Making applications using your mobile phone. The name of the application is: GIF Forge. It can be found on the App Store. Having tested a wide range of GIF Making apps, GIF Forge stood out for its effectiveness and simplicity to help one make their GIF. Please note this app is free to install and use, however it comes with in-app purchases.</p>
</div>
    <div class="container">
      <br>
      <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li id="firstSlide" data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
          <li data-target="#myCarousel" data-slide-to="5"></li>
          <li data-target="#myCarousel" data-slide-to="6"></li>
          <li data-target="#myCarousel" data-slide-to="7"></li>
          <li data-target="#myCarousel" data-slide-to="8"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

          <div id="firstSlideDiv" class="item animated bounceInLeft active">
            <img src="./../public/images/Gif_App_1.png" alt="Chania" width="460" height="345">
            <div class="carousel-caption animated bounceInRight">
            <h3>Step 1</h3>
              <p>Of the four options, touch camera.</p>
            </div>
          </div>

          <div class="item animated bounceInLeft">
            <img src="./../public/images/Gif_App_2.png" alt="Chania" width="460" height="345">
            <div class="carousel-caption animated bounceInRight">
              <h3>Step 2</h3>
              <p>To capture a sequence of images, click the camera button continously. To move to the next stage, click the button in the bottom right. The button displays the number of images captured.</p>
            </div>
          </div>
          
          <div class="item animated bounceInLeft">
            <img src="./../public/images/Gif_App_3.png" alt="Flower" width="460" height="345">
            <div class="carousel-caption animated bounceInRight">
              <h3>Step 3</h3>
              <p>The screen presents the animated GIF. Now you may add a filter. Filters help you to add fun effects to the GIF. EXPLAIN TYPES: StopMotion, Horizontal... 

              Upon selecting the button, you will be presented with the edit view. Here you can apply filters: StopMotion, Rewind, Four Square, Horizontal</p>
            </div>
          </div>

          <div class="item animated bounceInLeft">
            <img src="./../public/images/Gif_App_7.png" alt="Chania" width="460" height="345">
            <div class="carousel-caption animated bounceInRight">
            <h3>Step 4</h3>
              <p>For example the Horizontal Filter applies the effect of a mirrored image.</p>
            </div>
          </div>

          <div class="item animated bounceInLeft">
            <img src="./../public/images/Gif_App_9.png" alt="Chania" width="460" height="345">
            <div class="carousel-caption animated bounceInRight">
            <h3>Step 5</h3>
              <p>Select the jumping rabbit icon to adjust the frame rate of the GIF. This gives you the ability to increase or decrease the speed of the animation in the GIF.</p>
            </div>
          </div>

          <div class="item animated bounceInLeft">
            <img src="./../public/images/Gif_App_12.png" alt="Chania" width="460" height="345">
            <div class="carousel-caption animated bounceInRight">
            <h3>Step 6</h3>
              <p>By clicking the pencil icon option, you can add text, a meme or a sticker.</p>
            </div>
          </div>

          <div class="item animated bounceInLeft">
            <img src="./../public/images/Gif_App_13.png" alt="Chania" width="460" height="345">
            <div class="carousel-caption animated bounceInRight">
            <h3>Step 7</h3>
              <p>This is an example of adding text to the GIF.</p>
            </div>
          </div>

          <div class="item animated bounceInLeft">
            <img src="./../public/images/Gif_App_14.png" alt="Chania" width="460" height="345">
            <div class="carousel-caption animated bounceInRight">
            <h3>Step 8</h3>
              <p>When you are ready to share, click the tick icon in the top right corner. In the share page, click the first icon, which is the share icon.</p>
            </div>
          </div>

          <div class="item animated bounceInLeft">
            <img src="./../public/images/Gif_App_15.png" alt="Chania" width="460" height="345">
            <div class="carousel-caption animated bounceInRight">
             <h3>Step 9</h3>
             <p>Select WhatsApp, or Twitter to share your GIF with a contact or the public.</p>
           </div>
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
  </div>
</div>
<br>
</div>
<!-- <div class="container">
  <div class="phone">
    <div class="phoneScreen">
      <section id="phoneHomeScreen">
        <div class="row">
          <div class="col s12">
            <button class="buttonApp"></button>
            <button class="buttonApp"></button>
            <button class="buttonApp"></button>
            <button class="buttonApp"></button>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <button class="buttonApp"></button>
            <button class="buttonApp"></button>
            <button class="buttonApp"></button>
            <button class="buttonApp"></button>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <button class="buttonApp"></button>
            <button class="buttonApp"></button>
            <button class="buttonApp"></button>
            <button class="buttonApp" id="buttonNext" onclick="loadNext()"></button>
          </div>
        </div>
      </section>
      <section id="GifAppHome">
        <h5>iDEA Gif Maker</h5>
        <button>Camera</button>
        <button>Import</button>
      </section>
    </div>
    <div id='img'></div> -->
    <script> 
      $('#GifAppHome').hide();
      function loadNext(){
        console.log("test");
        $('#buttonNext').css("display", "none");
        $('.buttonApp').css("display", "none");
        $('#GifAppHome').show();
        $('#img').prepend('<img id="img" src="/public/images/1st.gif" />')
      }
    </script>
<!--   </div>
</div> -->
<br>
<br>
<div class="row">
    <div class="col s6">
  <a id="resetCarousel" class='btn-floating btn-large waves-effect waves-yellow buttonCentre animated infinite pulse'><i class='material-icons'>replay</i></a>
  </div>
  <div class="col s6">
      <a class='btn-floating btn-large waves-effect waves-yellow buttonCentre animated infinite pulse' href='step_16.php'><i class='material-icons'>trending_flat</i></a>
  </div>
</div>
</main>
<footer class="page-footer">
  <div class="progress">
    <div class="determinate" style="width: 60%;">
    </div>
  </div>
</footer>
</body>
</body>
</html>