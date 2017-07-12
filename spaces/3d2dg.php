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

if ($_SESSION['authorised'] == 2) {
    $_SESSION['authorised'] = 3;
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
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
	<style>
	

	div {
		width: 100%;
	}
	
	img[usemap] {
		border: none;
		height: auto;
		max-width: 100%;
		width: auto;
	}
	
	 .boxcenter {
		 
		 left: 100px;

    }

	area:focus {outline:none; background-color:red;
	
	}
	

.drago {
  margin-top: 20px;
  text-align: center;
  margin: 0 auto;
  margin-bottom: 10px;
  
  color: black;
  font-size: 15px;
  text-transform: uppercase;
  border-radius: 8px;
  border: none;
  width: 100px;

}

.pictureholder { 

position:relative; 
width: 280px; 
background: white;
margin-top: 40px;

}

.dropbox {
	width: 106px;
	height: 68px;
	border: 1px solid #B8B8B8;
	border-radius: 10px;
	color: black;
	margin: 0 auto;
	border-style: none;
	background: rgba(225,225,225,0.46);
	margin-top: 12px;
	
}


#dropone1 {
	
	text-align: center;
	
}

#dropone2 {
	
	text-align: center;

}

#dropone3 {
	
	text-align: center;

}

#dropone4 {
	
	text-align: center;
	
}

#dropone5 {
	
	text-align: center;
	
}

#dropone6 {
	
	text-align: center;
	
}

.coloveride {
	
	margin-left: 0px;
	
}

}


   @media only screen and (max-width : 480px) {
	   
	   
	   img.threepro {
	
	width: 300px;
	
}
	   .drago {
  margin-top: 20px;
  text-align: center;
  display: block;
  margin: 0 auto;
  margin-bottom: 10px;
 
  color: black;
  font-size: 15px;
  text-transform: uppercase;
  border-radius: 8px;
  border: none;
  width: 70px;
}



.pictureholder { 

height: 290px;
width: auto;
background: white;
margin-top: 40px;

}


#drop1 {
	
	text-align: center;
	
}

#drop2 {
	
	text-align: center;
	
}

#drop3 {
	
	text-align: center;

}

#drop4 {
	
	text-align: center;
	
}

#drop5 {
	
	text-align: center;
	
}

#drop6 {
	
	text-align: center;
	
}


	   }

 @media only screen and (max-width : 992px) {
	 
	
	.drago {
  margin-top: 20px;
  text-align: center;
  margin: 0 auto;
  margin-bottom: 10px;
  
  color: black;
  font-size: 15px;
  text-transform: uppercase;
  border-radius: 8px;
  border: none;
  width: 73px;
}

.dropbox {
	width: 106px;
	height: 77px;
	border: 1px solid #B8B8B8;
	border-radius: 10px;
	color: black;
	margin: 0 auto;
	border-style: none;
	background: rgba(225,225,225,0.46);
	margin-top: 12px;
	padding-top: 13px;
	
}
	
 }
 
 @media only screen and (max-width : 320px) {
	 
	.drago {
  margin-top: 20px;
  text-align: center;
  margin: 0 auto;
  margin-bottom: 10px;
  
  color: black;
  font-size: 15px;
  text-transform: uppercase;
  border-radius: 8px;
  border: none;
  width: 68px;
}
 
 .col-xs-2 {
	 
	width: 17.36%
	 
 }
 }

  
  @media only screen and (max-width : 340px) {
	 
	 .boxcenter {
		 left: -34px;

    }

  }
  
    @media only screen and (min-width: 341px) and (max-width : 380px) {
	 
	 .boxcenter {
		 left: -14px;

    }

  }
  
    @media only screen and (min-width: 381px) and (max-width : 900px) {
	 
	 .boxcenter {
		 left: 0px;

    }

  }

@media only screen and (min-width: 901px) and (max-width : 1038px) {
	 
	 .boxcenter {
		 left: 20px;

    }

  }
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
  
<div id="summary" class="container-fluid text-center animated fadeIn">
    <h3 class="center-block hvr-wobble-bottom" style="margin-top: 70px !important; margin-bottom: 6px !important; color: white; text-shadow: 1px 1px 3px #080808;">Let's look at some more products.</h3> 
    <div class="container-fluid text-center animated fadeIn">
    <h4 id="finalq" class="center-block hvr-wobble-bottom wtx textContainer4" style="margin-top: 40px !important; margin-bottom: 20px !important; padding-left: 32px; padding-right: 32px">In the images below which products do you think are in the process of being designed?<br><br>Drag and drop the right icon in the selection below, to the right image.</h4> 
    
     </div>
     </div>
     
     
     <!-- Drag and Drop 1 -->
     
     <div class="container-fluid"> 
     
     <div class="row" style="background: white; padding-bottom: 20px; border: solid #f4fbff">
      
     <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"> 
     <img src="imgs/task1/unfitems/planeunf.png" class="pictureholder img-responsive img-rounded center-block">
     <div id="drop1" class="ui-droppable dropbox  text-center" style="color: white"> <br>   DROP HERE </div>
     </div>
     
     <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"> 
     <img src="imgs/task1/unfitems/clockunf.png" class="pictureholder img-responsive img-rounded  center-block"> 
     <div id="drop2" class="ui-droppable dropbox  text-center" style="color: white"> <br> DROP HERE </div>  
     </div>
     
     <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"> 
     <img src="imgs/task1/unfitems/chessunf.png" class="pictureholder img-responsive img-rounded  center-block">  
     <div id="drop3" class="ui-droppable dropbox  text-center" style="color: white"> <br>  DROP HERE </div>
     </div>
     
     <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"> 
     <img src="imgs/task1/unfitems/dinounf.png" class="pictureholder img-responsive img-rounded  center-block">
     <div id="drop4" class="ui-droppable dropbox  text-center" style="color: white"> <br>  DROP HERE </div>
     </div>
     
     <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"> 
     <img src="imgs/task1/unfitems/tshirtunf.png" class="pictureholder img-responsive img-rounded  center-block">
     <div id="drop5" class="ui-droppable dropbox  text-center" style="color: white"> <br>  DROP HERE </div>   
     </div>
     
     <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"> 
     <img src="imgs/task1/unfitems/birdunf.png" class="pictureholder img-responsive img-rounded  center-block">  
     <div id="drop6" class="ui-droppable dropbox text-center" style="color: white"> <br>  DROP HERE </div><br>
     </div>
     </div>
     </div>
     
     <br>
     <br>
     
     <div id="nextactivity" class="text-center navbar-fixed-bottom" hidden> 
    <a href="2dnet.php">
    <button type="button" style="margin-bottom: 160px" class="btn btn-info hvr-shrink hv animated pulse infinite">NEXT</button> </a></div>
    
    
     <!-- footer cont --> 
     
     
     <div class="container-fluid navbar-fixed-bottom boxcenter text-center">
     
     <div class="row">
     
     
     
  
     
     <div class="col-xs-2 col-xs-offset-1 col-sm-1  col-sm-offset-1 col-md-1 col-md-offset-1 col-lg-1 col-lg-offset-1" style="padding-left: 0; margin-left: 35px"> <!-- 1 -->  <img src="imgs/task1/icons/boat.png" id="dragboat" class="ui-draggable drago">
     </div>
     
     <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1"> <!-- 2 -->
     <img src="imgs/task1/icons/tshirt.png" id="dragtshirt" class="ui-draggable drago">
     </div>
     
     <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1"> <!-- 3 -->
     <img src="imgs/task1/icons/dino.png" id="dragdino" class="ui-draggable drago">
     </div>
     
     <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1"> <!-- 4 -->
     <img src="imgs/task1/icons/plane.png" id="dragplane" class="ui-draggable drago">
     </div>
     
     <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1"> <!-- 5 -->
     <img src="imgs/task1/icons/bird.png" id="dragbird" class="ui-draggable drago">
     </div>
     
     <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1" style="margin-left: 4px"> <!-- 6 -->
     <img src="imgs/task1/icons/chess.png" id="dragchess" class="ui-draggable drago">
     </div>
     
     <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1"> <!-- 7 -->
     <img src="imgs/task1/icons/geobook.png" id="dragbook" class="ui-draggable drago">
     </div>
     
     <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1" style="margin-left: 17px; margin-right: 10px"> <!-- 8 -->
     <img src="imgs/task1/icons/glasses.png" id="dragglasses" class="ui-draggable drago">
     </div>
     
     <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1"> <!-- 9 -->
     <img src="imgs/task1/icons/clock.png" id="dragclock" class="ui-draggable drago">
     </div>
     
     <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1"> <!-- 10 -->
     <img src="imgs/task1/icons/cat.png" id="dragcat" class="ui-draggable drago">
     </div>
    
  
      </div>
      
      </div> <!-- footer cont -->
    

      
      
      <br>
      <br>
      
      
      
      <br>
      <br>
 

     
<div class="container-fluid text-center animated fadeInDown">

    <p class="text-info">&nbsp;</p>
    <p class="text-info">&nbsp;</p>
    <p class="text-info">&nbsp;</p>
    <p class="text-info" style="margin-bottom: 60px">2D & 3D CAD</p>
    
    
    
    
  </div>
  
    <div class="progress" style="margin: 0">
<div class="progress-bar progress-bar-info progress-bar-striped active hvr-grow" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width: 30%"> Progress&nbsp;30% 
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
  
  

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/jquery-ui.minupdate.js"></script>
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
	width: "30%", 
	width: "35%" 
	}, 400, function(){ 
	$('.progress-bar').delay(1000).html('Progress&nbsp;35%');
	});

//drag and drop one//

$('#dragboat').draggable({
  containment: 'body',
  cursor: 'move',
  revert: 'invalid',
  scroll: true, scrollSensitivity: 50
});

$('#dragtshirt').draggable({
  containment: 'body',
  cursor: 'move',
  revert: 'invalid',
  scroll: true, scrollSensitivity: 50
});

$('#dragdino').draggable({
  containment: 'body',
  cursor: 'move',
  revert: 'invalid',
  scroll: true, scrollSensitivity: 50
});

$('#dragplane').draggable({
  containment: 'body',
  cursor: 'move',
  revert: 'invalid',
  scroll: true, scrollSensitivity: 50
});

$('#dragbird').draggable({
  containment: 'body',
  cursor: 'move',
  revert: 'invalid',
  scroll: true, scrollSensitivity: 50
});

$('#dragchess').draggable({
  containment: 'body',
  cursor: 'move',
  revert: 'invalid',
  scroll: true, scrollSensitivity: 50
});

$('#dragbook').draggable({
  containment: 'body',
  cursor: 'move',
  revert: 'invalid',
  scroll: true, scrollSensitivity: 50
});

$('#dragglasses').draggable({
  containment: 'body',
  cursor: 'move',
  revert: 'invalid',
  scroll: true, scrollSensitivity: 50
});

$('#dragclock').draggable({
  containment: 'body',
  cursor: 'move',
  revert: 'invalid',
  scroll: true, scrollSensitivity: 50
});

$('#dragcat').draggable({
  containment: 'body',
  cursor: 'move',
  revert: 'invalid',
  scroll: true, scrollSensitivity: 50
});

$('#drop1').droppable({
  accept: '#dragplane',
  drop: dropEventHandler1
});

$('#drop2').droppable({
  accept: '#dragclock',
  drop: dropEventHandler1
});

$('#drop3').droppable({
  accept: '#dragchess',
  drop: dropEventHandler1
});

$('#drop4').droppable({
  accept: '#dragdino',
  drop: dropEventHandler1
});

$('#drop5').droppable({
  accept: '#dragtshirt',
  drop: dropEventHandler1
});

$('#drop6').droppable({
  accept: '#dragbird',
  drop: dropEventHandler1
});




var myDragDrop = 0;
function dropEventHandler1(event, ui) {
 $(ui.draggable).addClass('animated tada');
 $(ui.draggable).detach().css({top: -56,left: 0}).appendTo(this).unbind(".draggable");;
 myDragDrop++;
 if(myDragDrop === 6) {
 $("#nextactivity").show();
 
  }
}

});


	  
</script>


</body>
</html>