<?php

require '../vendor/autoload.php';

session_start();


if($_SESSION['authorised'] < 4){
    header('Location: start.php');
}
$_SESSION['authorised'] = 4;

?>

<!DOCTYPE html>
<html>

<head>
    <title>Colour Badge - iDEA Bronze</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="./stylesheets/hover.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel='stylesheet' href='./stylesheets/circle.css' />
    <link rel='stylesheet' href='./stylesheets/style.css' />
    <link rel='stylesheet' href='./stylesheets/animate.css' />

    <script>
        function show(shown, hidden) {
            document.getElementById(shown).style.display='block';
            setTimeout(function(){
                document.getElementById(shown).style.opacity='1';
            },40);
            document.getElementById(hidden).style.display='none';
            document.getElementById(hidden).style.opacity='0';
            return false;
        }
    </script>
</head>

<body>
<div id="loader" style="background-color: #6bdc84"><img src="./images/Loader.gif" id="loadergif"> </div>
<div id="background" style="background-color: #6bdc84">
    <div id="background-extra">
        <div id="background-light">
            <div class="container-fluid">
                <div class="row">

                    <div id="#wrapper" class="container">
                        <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 cont-mid text-center"style="overflow: inherit ; height: auto;">
                            <img src="./images/splat-1.svg" class="splat splat1">
                            <img src="./images/splat-2.svg" class="splat splat2">
                            <img src="./images/splat-3.svg" class="splat splat3">
                            <img src="./images/splat-4.svg" class="splat splat4">
                            <!-- PART 3 -->

                            <div id="Page23" class="yet">
                                <h1>PART 3</h1>
                                <h4>COLOUR SPACES</h4>
                                <p>How many colours are there?</p>
                                <a onclick="return show('Page24','Page23');" class="btn btn-default btn-next hvr-radial-out" id="start-3">START</a>
                            </div>

                            <div id="Page24" class="not-yet">
                                <img src="./images/vs.svg" width="80%">
                                <p>Welcome to the colour universe, full of every colour our eyes can see. It's shaped a bit like a horseshoe and we call it the 'visible spectrum'.
                                    <br><strong>It has an infinite number of colours inside!</strong></p>
                                <a onclick="return show('Page23','Page24');" class="btn btn-default btn-back hvr-radial-out" >BACK</a>
                                <a onclick="return show('Page25','Page24');" class="btn btn-default btn-next hvr-radial-out" >NEXT</a>
                            </div>
                            <div id="Page25" class="not-yet">
                                <img src="./images/cs.svg" width="80%">
                                <p>Devices can't deal with this many colours and try and simplify the situation by only dealing with a group of many different colours, these are called 'colour spaces'.</p>

                                <a onclick="return show('Page24','Page25');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                                <a onclick="return show('Page26','Page25');" class="btn btn-default btn-next hvr-radial-out">NEXT</a>
                            </div>
                            <div id="Page26" class="not-yet">
                                <p>What is the 'universe' called which contains every colour our eyes can see?</p>
                                <div class="row" style="margin: 5px 0">
                                    <input type="text" placeholder="Your answer..." id="part3-test-1">
                                    <button class="btn btn-default btn-next test-btn" id="part3-test-1btn">SUBMIT</button>
                                    <p id="part3-test-1wrong" style="display: none">Oops! Do you remember we called every colour we can see? The 'visible..'</p>
                                </div>
                                <p>What is a 'group' of colours called which devices use?</p>
                                <div class="row" style="margin: 5px 0">
                                    <input type="text" placeholder="Your answer..." id="part3-test-2">
                                    <button class="btn btn-default btn-next test-btn" id="part3-test-2btn">SUBMIT</button>
                                    <p id="part3-test-2wrong" style="display: none">Oops! Do you remember what we called the smaller chunks of colours? The 'colour..'</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar-success progress-bar" id="part3-test-progress" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%"></div>
                                </div>
                                <p class="part3-test-comp">Well done! You need to always use the right colour space otherwise you'll be using the wrong colours..</p>
                                <a onclick="return show('Page25','Page26');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                                <a onclick="return show('Page27','Page26');" class="btn btn-default btn-next hvr-radial-out"  id="part3-test-next" style="visibility: hidden; opacity: 0">NEXT</a>
                            </div>
                            <div id="Page27" class="not-yet">
                                <p>Different devices can use different spaces, they are just trying to output <strong>exactly</strong> what our eyes are seeing.</p>
                                <img src="./images/cs-cam.svg" style="padding: 10px" width="70%" class="center-block">
                                <p>For example, cameras use big colour spaces as they need to reproduce the millions of colours we see outside.</p>

                                <a onclick="return show('Page26','Page27');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                                <a onclick="return show('Page28','Page27');" class="btn btn-default btn-next hvr-radial-out" >NEXT</a>
                            </div>
                            <div id="Page28" class="not-yet">
                                <img src="./images/cs-com.svg" style="padding: 10px" width="70%" class="center-block">

                                <p>But older basic computer screens would have a small colour space as they can't output a huge range of colours.</p>
                                <a onclick="return show('Page27','Page28');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                                <a onclick="return show('Page29','Page28');" class="btn btn-default btn-next hvr-radial-out" >NEXT</a>
                            </div>

                            <div id="Page29" class="not-yet">
                                <img src="./images/nomixing.svg" width="60%" class="center-block">
                                <p>Remember our RGB and CMYK Colour Models in part 2?<br>
                                    Make sure you're using a CMYK colour space if you're printing or RGB colour space if you're making something for electronic screens!</p>
                                <a onclick="return show('Page28','Page29');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                                <a href="progress.php" class="btn btn-default btn-next hvr-radial-out">NEXT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<img src="./images/resize-white.png" width="100" style="   position: fixed;    right: 80px;    top: 0;" id="idea-logo">
<a href="https://idea.org.uk/"><div style="  width:70px; height:70px; position: fixed;  background-image: url(./images/resize-garter-stamp.png); background-size: contain;  left: 0;    top: 0;" id="garter-stamp"></div></a>
<div class="part-container">
    <div class="part-bar" style="width: 40%;"></div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script   src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"   integrity="sha256-DI6NdAhhFRnO2k51mumYeDShet3I8AKCQf/tf7ARNhI="   crossorigin="anonymous"></script>
<script src="./javascripts/slider.js"></script>
<script src="./javascripts/all.js"></script>
<script>
    $(function(){
        $('#loader').delay(2000).fadeOut(1500)
    });
</script>


</body>

</html>