<?php

require '../vendor/autoload.php';

session_start();

$client = new \GuzzleHttp\Client();
$res = $client->request('GET', 'https://idea.org.uk/api/user', [
    'http_errors' => false,
    'headers' => [
        'Authorization' => 'Bearer ' . $_SESSION['oauth2_access_token']
    ]
]);

$user = json_decode($res->getBody());

if ($_SESSION['authorised'] == 1) {
    $_SESSION['authorised'] = 2;
}
?>

<!DOCTYPE html>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>Maker Spaces Badge</title>
    <link rel="icon" href="imgs/favicon/favicon.png" type="image/gif">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1">
	<script src="imgs/2d3dcad/startttaskbackgrounds/March.png"></script>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link href="css/hover.css" rel="stylesheet" type="text/css">
     <link href="css/style.css" rel="stylesheet" type="text/css">
     <link href="https://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
	<style>
	
	}
	div {
		width: 100%;
	}
	img[usemap] {
		border: none;
		height: auto;
		max-width: 100%;
		width: auto;
	}
	

	area:focus {outline:none; background-color:red;}

	</style>
</head>
<body style="background-image:url(imgs/backgrounds/fablabbgc.gif)">
<div class="container-fluid">
  
  <div class="row">

  <div class="col-xs-6 col-md-6" style="padding: 0">
  <a href="https://idea.org.uk/">
  <img src="imgs/header/garter.png" width="70" height="60" alt="" style="float:left; display: block"/> 
   </a></div>
  <div class="col-xs-6 col-md-6 text-right">
  
    <img src="imgs/header/iDEA-turq.png" width="74" height="85" alt="Logo"/> </div>
  
  </div>
  </div>
  
<div id="summary" class="container-fluid text-center animated fadeIn">
    <h2 class="center-block hvr-wobble-bottom" style="margin-top: 45px !important; margin-bottom: 24px !important; color: white; text-shadow: 1px 1px 3px #080808">You are the designer!</h2> 
    <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
    
    <br>
  
    <img src="imgs/2d3dcad/startttaskbackgrounds/designer.png" width="280px" style="float: none; margin-bottom: 10px" class="animated hvr-bounce-to-top active pulse infinite"/>
     
     </div>
     </div>
     <div class="container-fluid text-center animated fadeIn">
 
    <div class="row">
    
     <div class="col-sm-8 col-sm-offset-2 content"><a href="cards.php">
    <button type="button" style="margin-top:45px" class="hvr-back-pulse hvr-grow btn btn-info btn-sm"><b>LET'S BEGIN!</b></button> </a>
     </div>
     </div>
     </div>
     </div>
     <br>


<div class="container-fluid text-center animated fadeInDown">

    <p class="text-info">&nbsp;</p>
    <p class="text-info">&nbsp;</p>
    <p class="text-info">&nbsp;</p>
    <p class="text-info" style="margin-bottom: 60px">2D & 3D CAD</p>
    
    
    
    
  </div>
  
    
<div class="progress-bar progress-bar-info progress-bar-striped active hvr-grow" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 10%"> Progress&nbsp;10% 
  </div>
  
  
 
<div class="container-fluid">
  <div class="row">
    <div class="text-center col-md-12">
     <br><br>
      <h4 class="ft text-muted">The Duke Of York Inspiring Digital Enterprise Award </h4>
      <p>Copyright &copy; 2017 &middot; All Rights Reserved &middot; <a href="https://idea.org.uk/">iDEA</a></p>
    </div>
  </div> 
  </div>
  
<script src="js/jquery.min.js"></script>
<script src="js/jquery.rwdImageMaps.min.js"></script>
<script>

$(document).ready(function(){
	
   $('.progress-bar').animate({ 
	width: "10%", 
	width: "15%" 
	}, 400, function(){ 
	$('.progress-bar').delay(1000).html('Progress&nbsp;15%');
	});
});

$(document).ready(function(){
		 $("#next").click(function(){
			 $("#p1").show(500);
			 $("p:visible:not(#p1, .text-info, p:last)").hide(500);
			 $(this).hide();
			 $("#showme").css("display", "block");
			 
			 
			
		
		
	});
});

$(document).ready(function(){
		 $("#showme").click(function(){
			 $("#softwareexamps").toggle();
			 $("#nextstep").show();
			 
				
	});
});

$(document).ready(function(){
		 $("#nextstep").click(function(){
			 $("#p2").show(500);
			 $("p:visible:not(#p2, .text-info, p:last)").hide(500);
			 $("#nextstep, .content").hide();
			 
			 });
});
			


$(function() {
  $('a[href*="#"]:not([href="https://idea.org.uk/"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 800);
        return false;
      }
    }
  });
});


	  
</script>


</body>
</html>