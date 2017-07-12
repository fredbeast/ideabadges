<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Maker Spaces Badge</title>
    <link rel="icon" href="imgs/favicon/favicon.png" type="image/gif">
    <!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<style type="text/css">
    </style>
    <link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/hover.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>
  <body style="background-image: url(imgs/backgrounds/fablabbg.gif)">
  
<div class="container-fluid">
  
  <div class="row">
 <img src="imgs/header/Palace-maroonish.png" class="img-responsive top">
  <div class="col-xs-6 col-md-6" style="padding: 0">
  <a href="https://idea.org.uk/">
  <img src="imgs/header/garter.png" width="70" height="60" alt="" style="float:left; display: block"/> 
   </a></div>
  <div class="col-xs-6 col-md-6 text-right">
  
    <img src="imgs/header/iDEA-turq.png" width="74" height="85" alt="Logo"/> </div>
  
  </div>
  </div>
  
  <div class="container-fluid text-center animated fadeInDown">
  <button id="musictoggle" class="glyphicon glyphicon-music text-left btn" style="background: transparent; border-radius: 20px" onClick="togglePlay()"></button>
  <h1 class="center-block hvr-wobble-bottom" style="margin-top: 50px !important">Maker Spaces <br> Badge</h1>
  <br>
    <h2 class="center-block text-center hvr-wobble-bottom" style="margin-top: 30px !important; margin-bottom: 24px !important">You've completed the badge!</h2> 
    <div class="row">
    <div class="col-sm-8 col-sm-offset-2 text-center">
    <p class="txt2"> Well done, you have completed the Maker Spaces iDEA badge! </p>
    <img src="imgs/header/iDEA-turq.png" class="animated bounce infinite text-center" width="130px" style="margin-top: 31px; margin-bottom: 15px; margin-left: -1px">
    <br>
    <p class="center-block txt2" style="font-size: 14px; margin-bottom: 22px"><b> In this badge you have learnt about:</b></p>
   
    <div class="center-block txt2 textContainer2 wtx" style="max-width: 450px; font-size: 14px; margin-bottom: 10px">
    <p> • How 2D & 3D computer-aided design (CAD) can be useful.</p>
    <p> • The different types of production equipment that can be used to create products.</p>
    <p> • How designers combine computer-aided design and production to create a range of different products.
    </p>
    </div>
    <br>

    <a href="badge-completed.php">
        <button type="button" class="btn btn-success btn-sm animated pulse infinite">COMPLETE  BADGE</button> </a>
    <br>
    <br>
    <p class="text-center txt2">
With the aim of making almost anything, maker spaces inspire entrepreneurs, artists and designers on their creative journey in making products for business, their startup or for fun. By providing access to this creative environment, they help early-stage innovative companies design, prototype and go to market with their concept. Schools, colleges and universities regularly use maker spaces to provide their students with a fun and creative environment where they can prototype their own ideas and build their own products.</p>
    

    </div>
    </div>
    <br><br><br><br>
    <p class="text-info" style="margin-bottom: 60px"> Badge Complete</p>
    
    
    
    
  </div>
  
<div class="progress" style="margin: 0">
<div class="progress-bar progress-bar-info progress-bar-striped active hvr-grow" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 90%"> Progress&nbsp;90% 
  </div>
  </div>
  
 <audio id="music" src="music/sitesong2.mp3" autoplay></audio>
<div class="container-fluid">
  <div class="row">
    <div class="text-center col-md-12">
     <br><br>
      <h4 class="ft text-muted">The Duke Of York Inspiring Digital Enterprise Award </h4>
      <p>Copyright &copy; 2017 &middot; All Rights Reserved &middot; <a href="https://idea.org.uk/">iDEA</a></p>
    </div>
  </div> 
  </div>

	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/bootstrap.js"></script>
    <script>
	
	$(document).ready(function() {
		
		$('#music').hide();
		
		document.getElementById("music").volume = 0.3;
	
	
$('.progress-bar').animate({ 
	width: "90%", 
	width: "100%" 
	}, 400, function(){ 
	$('.progress-bar').delay(1000).html('Progress&nbsp;100%').removeClass("progress-bar-info").addClass("progress-bar-success");
	});
	
   });
   
   var myAudio = document.getElementById("music");
var isPlaying = false;

function fadeOut() {
			
		$('#music').animate({volume: 0}, 500, function(){
		location.assign('learningobjectives.php') });
			
		}
		
		function togglePlay() {
  if (isPlaying) {
    myAudio.pause();
	$('#musictoggle').css('color', "rgba(194, 215, 221, 0.53)");
  } else {
    myAudio.play();
	$('#musictoggle').css('color', "rgba(0, 180, 229, 0.60)");
  }
        }
    myAudio.onplaying = function() {
  isPlaying = true;
};
myAudio.onpause = function() {
  isPlaying = false;
};

	
	</script>
  </body>
</html>