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
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
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
	
			 #dropone {
  width: 130px;
  height: 61px;
  border: 1px solid #B8B8B8;
  border-radius: 100px;
  color: black;
  margin: 0 auto;
  border-style: dashed;
  background: rgba(225,225,225,0.46);
}

.drago {
  width: 130px;
  height: 61px;
  padding: 20px;
  text-align: center;
  display: block;
  margin: 0 auto;
  margin-bottom: 10px;
  background: white;
  color: black;
  font-size: 15px;
  text-transform: uppercase;
  border-radius: 100px;
  border: none;
}

.background {
	
	background-image: url(imgs/2d3dcad/startttaskbackgrounds/March.png); 
	background-repeat: repeat-x; 
	background-size: cover;
	background-position: center -85px;
	background-attachment: fixed !important;
	
	
}

@media only screen and (min-width: 481px) and (max-width : 1038px) {

.background {
	
	background-image: url(imgs/2d3dcad/startttaskbackgrounds/March.png); 
	background-repeat: repeat-x; 
	background-size: 854px, cover;
	background-position: center 220px;
	background-attachment: scroll !important;
	
	
	
}

}

@media only screen and (max-width : 480px) {

.background {
	
	background-image: url(imgs/2d3dcad/startttaskbackgrounds/March.png); 
	background-repeat: repeat; 
	background-size: 500px, cover;
	background-position: center 10px;
	background-attachment: scroll !important;
	
	
	
}

}

	</style>
</head>
<body style="background: rgba(112,196,129,1.00)">
<div class="background">
  
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
  
<div id="summary" class="container-fluid text-center animated fadeIn"><img src="imgs/task0/mar.png" id="mar" width="50px" style="margin:10px; margin-top: -20px"/><br>
    <h4 id="finalq" class="text-center transbbgr hvr-wobble-bottom" style="margin-top: 25px !important; margin-bottom: 27px !important; padding-left: 20px; padding-right: 20px; max-width: 571px">Spring is here and your younger sibling's birthday is coming up! You want to make them a great gift using your design skills. You decide to make them a robotic pet toy that is remote controlled.<br><br>
Which software would be the best to use for designing your robotic pet toy?</h4> 
<h3 id="resultsh" class="center-block hvr-wobble-bottom" style="margin-top: 38px !important; margin-left: 50px; margin-right: 50px; margin-bottom: -3px; color: white; text-shadow: 1px 1px 3px #080808; display: none">Perfect, these are some of the designs you could have made.</h3> 
    
     </div>
    
     <br>
    
     <div id="cards" class="container counter-fluid animated bounceIn text-center">
     <div class="row">
     <div class="col-md-4">
     <img src="imgs/robo/robo1.jpg" class="text-center img-rounded img-thumbnail" style="margin:5px; margin-bottom: 40px; margin-top:2px" width="278px" alt="2D Design">
     
     </div>
     <div class="col-md-4">
     <img src="imgs/robo/robo2.jpg" class="text-center img-rounded img-thumbnail" style="margin:5px; margin-right:-2px; margin-top: 4px; margin-bottom: 40px" width="280px" alt="3D Design">
     
     </div>
     <div class="col-md-4">
     <img src="imgs/robo/robo3.jpg" class="text-center img-rounded img-thumbnail" style="margin:5px; margin-top:3px" width="255px" alt="2D Design">
     
     </div>
     </div>
     
     </div>
     
     <div class="container center-block"> 
     <div id="dropCountainer" style="margin-top:20px;">
     <div class="row"> 
     <div class="col-sm-4 col-sm-offset-4">
     <div id="dropone" class="ui-droppable">
     <div id="dropwrong" class="text-center ui-droppable" style="padding-top:16px; padding-bottom:10px">
     DROP HERE</div>
     
     </div></div></div></div>
     
     </div>
     
      <div id="dragCountainer" style="width: 75%; display: block; margin: 0 auto; max-height: 200px">
     <div class="row">
     <div class="col-sm-6">
     <p class="drago ui-draggable" id="dragone" style="position:relative; margin-top:10px"> 2D DESIGN   
     </p>
     </div>
     
     <div class="col-sm-6">
     <p class="drago ui-draggable" id="dragtwo" style="position:relative; margin-top:10px"> 3D DESIGN </p>
     
     </div>
     </div>
     </div>
     <br>
     <div id="feedback" class="container">
   <div id="alertsuccess" class="alert alert-success alert-dismissable animated fadeIn fade in text-center" role="alert" style="display: none">
    <strong>Correct!</strong> This item is a solid object that requires lots of 3D shaping. It will require shaping on both the inside and outside to create the details when looking at the object from different angles and those in its multiple planes. In addition, moving components can be animated on screen to check that they work!
  </div>
  <div id="alertdanger" class="alert alert-danger alert-dismissable animated fadeIn fade in text-center" role="alert" style="display: none">
    <p> <strong>Incorrect!</strong> This item is a solid object that will require a lot of 3D shaping. It will require shaping on both the inside and outside to create the details when looking at the object from different angles. <br><br> <a href="robo.php" <button class="close" style="float: none; font-size: medium; position: inherit"> Reset </button> </a> </p>
  </div>
  </div>

<div id="finish" class="container-fluid text-center animated fadeIn" hidden>
 
    <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
    <button type="button" style="margin-top:0px" class="btn btn-info btn-sm hvr-shrink hvr">FINISH</button>
     </div>
     </div>
     </div>
     
     
     <div id="results" class="container counter-fluid animated bounceIn text-center" style="margin-top: -10px" hidden>
     <div class="row">
     <div class="col-md-3"><p style="font-family: 'Love Ya Like A Sister', cursive; margin-top: 30px; font-size: 22px; color: #2c7891"> <b> Christmas Cards <br> </b> </p>
     <img src="imgs/cad products/cadp1.png" class="text-center img-rounded" style="margin:0px; margin-bottom: 20px; margin-top:4px" width="200px" alt="2D Design">
     <p class="wtx"> <b style="font-family: 'Asap', sans-serif; font-weight: bold; font-size: 15px"> 2D DESIGN </b> </p>
     
     </div>
     <div class="col-md-3"><p style="font-family: 'Love Ya Like A Sister', cursive; font-size: 22px; margin-top: 30px; color: #5a5419"> <b> Phone Case </b> </p>
     <img src="imgs/cad products/cadp2.png" class="text-center img-rounded" style="margin:0px; margin-right:-2px; margin-left:-8px; margin-top: 4px; margin-bottom: 20px" width="230px" alt="3D Design">
     <p class="wtx"> <b style="font-family: 'Asap', sans-serif; font-weight: bold; font-size: 15px"> 3D DESIGN </b> </p>
     
     </div>
     <div class="col-md-3"><p style="font-family: 'Love Ya Like A Sister', cursive; margin-top: 30px; font-size: 22px; color: #973651"> <b> Jewellery <br> </b> </p>
     <img src="imgs/cad products/cadp3.png" class="text-center img-rounded" style="margin:0px; margin-top:3px; margin-bottom: 20px;" width="200px" alt="2D Design">
     
     <p class="wtx"> <b style="font-family: 'Asap', sans-serif; font-weight: bold; font-size: 15px"> 2D DESIGN </b> </p>
     
     </div>
     <div class="col-md-3"><p style="font-family: 'Love Ya Like A Sister', cursive; font-size: 22px; color: #5a8d7b; margin-top: 30px"> <b> Robotic Pet Toy <br> </b> </p>
     <img src="imgs/cad products/cadp4.png" class="text-center img-rounded" style="margin:0px; margin-top:3px; margin-bottom: 20px;" width="230px" alt="2D Design">
     
     <p class="wtx"> <b style="font-family: 'Asap', sans-serif; font-weight: bold; font-size: 15px"> 3D DESIGN </b> </p>
     
     </div>
    
    
     <div class="col-md-8 col-md-offset-2">
      <p class="wtx textContainer3 center-block" style="margin-bottom: 36px; margin-top: 35px; background: rgb(8, 166, 117)"> These are the best options to create our products with. 3D software uses a three dimensional space (X, Y & Z), while 2D software incorporates a flat design surface. You may have noticed on each 2D plan, the design has a <b style="color: red"> red </b> border, this called a crop mark. This tells the piece of machinery that will produce your design exactly where it will need to cut upon processing your 2D design file. If you create a <b style="color: black">black </b> line, this will cause the piece of machinery to create an engraving. </p> </div>
     <div class="col-sm-8 col-sm-offset-2"><a id="nextstep" href="3d2dg.php">
    <button type="button" style="margin-top:20 px; margin-bottom:20px" class="btn btn-info btn-sm hvr-shrink hvr">NEXT</button> </a>
     </div>
     </div>
    
     </div>
     
   
         
     <div class="container-fluid text-center animated fadeIn">
 
    <div class="row">
    
     </div>
     </div>
<div class="container-fluid text-center animated fadeInDown">

    <p class="text-info">&nbsp;</p>
    <p class="text-info">&nbsp;</p>
    <p class="text-info">&nbsp;</p>
    <p class="text-info" style="margin-bottom: 60px">2D & 3D CAD</p>
    
    
    
    
  </div>
  
 <div class="progress-bar progress-bar-info progress-bar-striped active hvr-grow" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 25%"> Progress&nbsp;25% 
  </div>
  </div>
  
 
<div class="container-fluid" style="background: rgb(101, 177, 116)">
  <div class="row">
    <div class="text-center col-md-12" style="background: rgba(41, 40, 40, 0.9); margin-top: 23px">
     <br><br>
      <h4 class="ft" style="color: rgba(173,173,173,1.00)">The Duke Of York Inspiring Digital Enterprise Award </h4>
      <p class="wtx">Copyright &copy; 2017 &middot; All Rights Reserved &middot; <a href="https://idea.org.uk/">iDEA</a></p>
    </div>
  </div> 
  </div>
  

<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.rwdImageMaps.min.js"></script>
<script src="js/mobile.js"></script>
<script>

$(document).ready(function(){

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

 $('.progress-bar').animate({ 
	width: "25%", 
	width: "30%" 
	}, 400, function(){ 
	$('.progress-bar').delay(1000).html('Progress&nbsp;30%');
	});

$('#dragone').draggable({
  containment: 'body',
  cursor: 'move',
  revert: 'invalid'
});

$('#dragtwo').draggable({
  containment: 'body',
  cursor: 'move',
  revert: 'invalid'
});

$('#dropone').droppable({
  accept: '#dragone',
  drop: dropEventHandler2,
  tolerance: 'pointer'
});

$('#dropwrong').droppable({
  accept: '#dragtwo',
  drop: dropEventHandler1,
  tolerance: 'pointer'
});


 $("#close1").click(function(){
		 
	$(".alert-success").css("display","none");
	
 });


function dropEventHandler1(event, ui) {
 $(ui.draggable).css({ background: "lightgreen", color: "white"});
 $(ui.draggable).addClass('animated tada');
 $(ui.draggable).detach().css({top: -46,left: -1}).appendTo(this);
 $("#alertsuccess").css("display","block");
 $('#finish').show();
$('#dropone, #dropwrong').droppable('disable');		 
	 
	
}

function dropEventHandler2(event, ui) {
 $(ui.draggable).css({ background: "red", color: "white"});
 $(ui.draggable).addClass('animated tada');
 $(ui.draggable).detach().css({top: -56,left: -2}).appendTo(this);
 $("#alertdanger").css("display","block");
 $('#dropwrong, #dropone').droppable('disable');	
}

});

 $("#finish").click(function(){
			 $("#results, #resultsh").fadeIn(1000);
			 $("#cards, #finish, #finalq, #dragCountainer, #dropCountainer, #mar, #feedback").hide();
			 
 });
		
	
</script>


</body>
</html>