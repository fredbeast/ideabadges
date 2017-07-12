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
<body>
  
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
  
<div id="summary" class="container-fluid text-center animated fadeInDown">
    <h2 id="h1" class="center-block hvr-wobble-bottom" style="margin-top: 75px !important; margin-bottom: 27px !important">Well done!</h2>
    <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
    <p class="text-center wtx textContainer center-block"  style="margin-bottom: 20px"> We now see the difference between 2D & 3D design. Now let's move on to the next stage of the design process, the production! 
    </p> <p id="p1" class="wtx textContainer center-block" style="margin-bottom: -20px; display: none; font-size: 15px">Click on the machine to continue.</p>
<a id="next">
    <button type="button" style="margin-top:20px" class="btn btn-info btn-sm hvr-shrink hvr">NEXT</button> </a>
     </div>
     </div>
     </div>
<div id="switch" class="row animated fadeIn" style="display:none; position:relative; margin: 0">

<div class="col-md-10 col-md-offset-1 paddingchange2">
	<img src="imgs/2d3dcad/scene/FL3.png" id="fls" style="align-self:center; border: 15px solid #ffffff" width="1024" height="768" alt="">
	
  </div>
</div>
<map name="fl">
      <!--
        <area shape="circle" id="lightbulb" coords="361,83,41" onMouseover="pictureChange2()" onMouseout="pictureChangeBack2()"> 
        <area shape="circle" id="flipchart" coords="628,287,46" onMouseover="pictureChange3()" onMouseout="pictureChangeBack3()"> -->
        <area href="production.php" shape="circle" id="machine" coords="59,532,90" onMouseover="pictureChange1()" onMouseout="pictureChangeBack1()">
       
       <!-- 
        <area shape="circle" id="computer" coords="953,470,47" onMouseover="pictureChange4()" onMouseout="pictureChangeBack4()">
-->
	
    </map>
<br>
<br>
<div class="container-fluid text-center animated fadeInDown">

    <p class="text-info">&nbsp;</p>
    <p class="text-info">&nbsp;</p>
    <p class="text-info">&nbsp;</p>
    <p class="text-info" style="margin-bottom: 60px">2D & 3D CAD Design</p>
    
    
    
    
  </div>
  
     <div class="progress" style="margin: 0">
<div class="progress-bar progress-bar-info progress-bar-striped active hvr-grow" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 0%"> Progress&nbsp;45% 
  </div>
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

$(document).ready(function() {
	$('img[usemap]').rwdImageMaps();
	
$('.progress-bar').animate({ 
	width: "0%", 
	width: "50%" 
	}, 400, function(){ 
	$('.progress-bar').delay(1000).html('Progress&nbsp;50%');
	});
	
   });
      
$(document).ready(function(){
		 $("#next").click(function(){
			 $("#p1").show(500);
			 $("p:visible:not(#p1, .text-info, p:last)").slideUp(1000).fadeOut("slow");
			 $(this).css("opacity", "0");
			 $("#switch").slideDown(3000);
			 $("#fls").attr("usemap", "#fl");
			 $('#h1').text('Next Stage..');
			 $('img[usemap]').rwdImageMaps();
		
		
	});
});

$(document).ready(function(){
		 $("#lightbulb").click(function(){
			 $("#p2").show(1000);
			 $("p:visible:not(#p2, .text-info)").hide(1000);
		
	});
});

$(document).ready(function(){
		 $("#flipchart").click(function(){
			 $("#p3").show(1000);
			 $("p:visible:not(#p3, .text-info)").hide(1000);
		
	});
});

$(document).ready(function(){
		 $("#computer").click(function(){
			 $("#p4").show(1000);
			 $("p:visible:not(#p4, .text-info)").hide(1000);
			
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


function pictureChange1()
{
document.getElementById("fls").src="imgs/2d3dcad/scene/FLm2.png";

}

function pictureChangeBack1()
{
document.getElementById("fls").src="imgs/2d3dcad/scene/FL3.png";
}

function pictureChange2()
{
document.getElementById("fls").src="imgs/2d3dcad/scene/FLl.png";

}

function pictureChangeBack2()
{
document.getElementById("fls").src="imgs/2d3dcad/scene/FL.png";
}

function pictureChange3()
{
document.getElementById("fls").src="imgs/2d3dcad/scene/FLf.png";

}

function pictureChangeBack3()
{
document.getElementById("fls").src="imgs/2d3dcad/scene/FL.png";
}

function pictureChange4()
{
document.getElementById("fls").src="imgs/2d3dcad/scene/FLc.png";

}

function pictureChangeBack4()
{
document.getElementById("fls").src="imgs/2d3dcad/scene/FL.png";
}



	  
</script>


</body>
</html>