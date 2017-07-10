<?php

require '../vendor/autoload.php';

session_start();

if($_SESSION['authorised'] < 3){
    header('Location: start.php');
}
$_SESSION['authorised'] = 3;

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
<div id="loader" style="background-color: #e1bc81"><img src="./images/Loader.gif" id="loadergif"> </div>
<div id="background" style="background-color: #e1bc81">
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


                            <!-- PART 2-->

                            <div id="Page10" class="yet">
                                <h1>PART 2</h1>
                                <h4>COLOUR MODELS</h4>
                                <p>The many different ways of defining a particular colour</p>
                                <br>
                                <a onclick="return show('Page11','Page10');" class="btn btn-default btn-next hvr-radial-out" id="start-2">START</a>
                            </div>
                            <div id="Page11" class="not-yet">
                                <h1>Screens vs Paper</h1>
                                <div id="cp" class="center-block">
                                    <img src="./images/cp-1.png" id="cp-1">
                                    <img src="./images/cp-2.png" id="cp-2">
                                    <img src="./images/cp-3.png" id="cp-3">
                                    <img src="./images/cp-4.png" id="cp-4">
                                    <img src="./images/cp-5.png" id="cp-5">
                                </div>
                                <div id="circle-progress" class="c100 p0 center">
                                    <div class="slice">
                                        <div class="bar"></div>
                                        <div class="fill"></div>
                                    </div>
                                    <img src="./images/paint-btn.svg" id="paint-btn" width="100px" class="center-block">
                                </div>
                                <p class="cpexp" style="display: none">See how adding three different colours to the computer screen makes the colour <strong>white</strong>.</p>
                                <p class="cpexp" style="display: none">But adding similar colours to the paper makes the colour <strong>black</strong>.</p>
                                <a onclick="return show('Page10','Page11');" class="btn btn-default btn-back hvr-radial-out un-white">BACK</a>
                                <a onclick="return show('Page12','Page11');" class="btn btn-default btn-next hvr-radial-out un-white" id="cp-next">NEXT</a>
                            </div>
                            <div id="Page12" class="not-yet" style="padding: 0 10px;">
                                <p>What you just saw was the difference between an <strong>additive</strong> and <strong>subtractive</strong> colour model.</p>
                                <p>Additive models 'add' together colours when they overlap to make a <strong>brighter</strong> colour. While colours get <strong>darker</strong> when overlapped in subtractive models.</p>
                                <a onclick="return show('Page11','Page12');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                                <a onclick="return show('Page13','Page12');" class="btn btn-default btn-next hvr-radial-out">NEXT</a>
                            </div>
                            <div id="Page13" class="not-yet" style="padding: 0 10px;">
                                <p>Drag the diagrams into the right type of colour model:</p>
                                <div class="row">
                                    <img src="./images/additive-circles.png" id="draggable" width="100px">
                                    <img src="./images/subtractive-circles.png" id="draggable2" width="100px" >
                                </div>
                                <div class="row">
                                    <img src="./images/subtractive-drop.png" id="droppable" width="100px">
                                    <img src="./images/additive-drop.png" id="droppable2" width="100px" >
                                </div>
                                <p id="dropped-comp-text" style="display: none">Well done! An example of an additive model is the RGB colour model, used by almost every screen in the world.</p>
                                <a onclick="return show('Page12','Page13');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                                <a onclick="return show('Page14','Page13');" class="btn btn-default btn-next hvr-radial-out"  id="dropped-comp" style="visibility: hidden; opacity: 0">WHAT IS RGB?</a>
                            </div>
                            <div id="Page14" class="not-yet">
                                <p>Additive models are great for computer screens as we need to change a black screen into a bright colourful image. Computer screens do this by mixing the colours Red, Green and Blue. <strong>This is the RGB colour model!</strong></p>
                                <p>By blending different amounts of these three colours you can make <strong>16,777,216</strong> unique colours!</p>
                                <a onclick="return show('Page13','Page14');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                                <a onclick="return show('Page15','Page14');" class="btn btn-default btn-next hvr-radial-out"  id="dropped-comp-after">NEXT</a>
                            </div>
                            <div id="Page15" class="not-yet">
                                <p>Have a play with the RGB sliders below:</p>
                                <div class="slider-container">
                                    <p>Red</p><div class="slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" id="red"><a class="ui-slider-handle ui-state-default ui-corner-all" style="border-color: #e58686 !important;" ></a></div>
                                    <br><p>Green</p><div class="slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" id="green"><a class="ui-slider-handle ui-state-default ui-corner-all" style="border-color: #8ae586 !important;"></a></div>
                                    <br><p>Blue</p><div class="slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" id="blue"><a class="ui-slider-handle ui-state-default ui-corner-all" style="border-color: #86b3e5 !important;"></a></div>
                                    <br>
                                </div>
                                <a onclick="return show('Page14','Page15');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                                <a onclick="return show('Page16','Page15');" class="btn btn-default btn-next hvr-radial-out">NEXT</a>
                            </div>
                            <div id="Page16" class="not-yet">
                                <img src="./images/cmykrgbpantone.svg" id="three" class="center-block" width="80%">
                                <p>There are two other major colour models called CMYK and Pantone. All three models turn colours into values, but the models are used for very different things and work in different ways.
                                    <br><strong><br>RGB is used for electronic screens<br>CMYK is used in printing<br>Pantone is used for fabrics</strong></p>
                                <a onclick="return show('Page15','Page16');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                                <a onclick="return show('Page17','Page16');" class="btn btn-default btn-next hvr-radial-out" id="hidethree">NEXT</a>
                            </div>

                            <div id="Page17" class="not-yet">
                                <div class="row">
                                    <img src="./images/shirt.svg" id="shirt" width="70px">
                                    <img src="./images/paper.svg" id="paper" width="70px">
                                    <img src="./images/computer.svg" id="computer" width="70px">
                                </div>
                                <div class="row">
                                    <img src="./images/rgb-drop.png" id="rgb-drop" width="100px">
                                    <img src="./images/cmyk-drop.png" id="cmyk-drop" width="100px" >
                                    <img src="./images/pantone-drop.png" id="pantone-drop" width="100px" >
                                </div>
                                <br>
                                <p id="dropped-comp-text-2" style="display: none">Well done! You've now seen three colour models and what they're used for.</p>


                                <a onclick="return show('Page16','Page17');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                                <a onclick="return show('Page18','Page17');" class="btn btn-default btn-next hvr-radial-out whiteout" id="dropped-comp-2" style="opacity: 0; visibility: hidden">NEXT</a>
                            </div>
                            <div id="Page18" class="not-yet">
                                <img src="./images/perception.gif" width="200px" class="center-block">
                                <p>All of these devices are trying to reproduce the exact colour we see, this is tricky as two people might see the same colour differently!<br>For example, two people might see a shade of 'green' in a different way.</p>
                                <a onclick="return show('Page17','Page18');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                                <a onclick="return show('Page19','Page18');" class="btn btn-default btn-next hvr-radial-out">NEXT</a>
                            </div>

                            <div id="Page19" class="not-yet">
                                <img src="./images/cdm.svg" style="padding: 10px" width="70%" class="center-block">
                                <p>To get as close to our eye's perception of a colour, different devices use different models for creating that colour.</p>
                                <a onclick="return show('Page18','Page19');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                                <a onclick="return show('Page20','Page19');" class="btn btn-default btn-next hvr-radial-out">NEXT</a>
                            </div>

                            <div id="Page20" class="not-yet">
                                <p>The models are different as they add up separate amounts of different colours.<br>Let's look in more depth at RGB and CMYK.</p>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <img src="./images/rgb-gif.gif" width="75px" class="center-block">
                                        <p>In RGB, every colour has a Red value, a Green value and a Blue value - each ranging from 0 to 255. </p>
                                    </div>
                                    <div class="col-xs-6">
                                        <img src="./images/cmyk-gif.gif" width="105px" class="center-block">
                                        <p>In CMYK every colour has a Cyan, Magenta, Yellow and Key (black) value - each ranging from 0-100.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <a onclick="return show('Page19','Page20');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                                        <a onclick="return show('Page21','Page20');" class="btn btn-default btn-next hvr-radial-out">NEXT</a>
                                    </div>
                                </div>
                            </div>

                            <div id="Page21" class="not-yet">
                                <p>Don't use the wrong model! These devices are trying as hard as they can with their specific models and specific mediums to reproduce the exact colour we see.</p>
                                <img src="./images/nomixing.svg" width="60%" class="center-block">

                                <a onclick="return show('Page20','Page21');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                                <a onclick="return show('Page22','Page21');" class="btn btn-default btn-next hvr-radial-out">NEXT</a>
                            </div>

                            <div id="Page22" class="not-yet">
                                <p>With RGB models having nearly 17 million different colours (combinations of red, green and blue) and CMYK having 100 million different colours - these models create <strong>a lot</strong> of different colours!</p>
                                <h4>But are there even <strong>more</strong> colours in the world?</h4>
                                <a onclick="return show('Page21','Page22');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
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
    <div class="part-bar" style="width: 20%;"></div>
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