<?php

require '../vendor/autoload.php';

session_start();

if($_SESSION['authorised'] < 2){
    header('Location: badge.php');
}
$_SESSION['authorised'] = 2;

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
<div id="loader" style="background-color: #FF534C"><img src="./images/Loader.gif" id="loadergif"> </div>
<div id="background">
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

                            <!-- PART 1-->

                            <div id="Page2" class="yet">
                                <h1>PART 1</h1>
                                <h4>COLOUR MANIPULATION</h4>
                                <p>Now you're going to learn how to use colour!</p>
                                <br>
                                <a onclick="return show('Page3','Page2');" class="btn btn-default btn-next hvr-radial-out part1">START</a>
                            </div>

                            <div id="Page3" class="not-yet">
                                <div id="Page3-content-1" class="yet">
                                    <h2><strong>HUE</strong></h2>
                                    <h5 class="small">HAVE A PLAY WITH THE SLIDER!</h5>

                                    <div class="slider-container">
                                        <div id="slider-1"></div>
                                    </div>
                                    <br>
                                    <a class="btn btn-default btn-play hvr-radial-out" id="disco-time" >DISCO TIME</a>
                                    <p><strong>YOU CAN THINK OF HUE AS THE 'COLOUR' ITSELF</strong></p>
                                    <div class="circle-row center-block">
                                        <div class="hue-4-1 circle-4"></div>
                                        <div class="hue-4-2 circle-4"></div>
                                        <div class="hue-4-4 circle-4"></div>
                                        <div class="hue-4-3 circle-4"></div>
                                    </div>
                                    <p>THERE ARE FOUR 'UNIQUE' HUES</p>
                                    <a class="btn btn-default btn-find hvr-radial-out whiteout" onclick="return show('Page3-content-2','Page3-content-1');">READ MORE</a>
                                    <br>
                                    <a onclick="return show('Page2','Page3');" class="btn btn-default btn-back hvr-radial-out" id="start-1-back">BACK</a>
                                    <a onclick="return show('Page4','Page3');" class="btn btn-default btn-next hvr-radial-out hue-sat">NEXT</a>
                                </div>
                                <div id="Page3-content-2" class="not-yet">
                                    <img src="./images/rainbow.png" height="50px">
                                    <h3><strong>TOP SECRET</strong></h3>
                                    <p>There are two more hues!</p>
                                    <br>
                                    <img src="./images/hue-gif.gif" width="200px" class="center-block">
                                    <br>
                                    <p>So there are six hues in total, but only four unique hues</p>
                                    <a onclick="return show('Page3-content-1','Page3-content-2')" class="btn btn-default btn-next btn-purple hvr-radial-out unwhiteout">CLOSE</a>

                                </div>
                            </div>

                            <div id="Page4" class="not-yet">
                                <h2><strong>SATURATION</strong></h2>
                                <h5 class="small">HAVE A PLAY WITH THE SLIDER!</h5>

                                <div class="slider-container">
                                    <div id="slider-2"></div>
                                </div>
                                <br>
                                <p><strong>SATURATION IS HOW 'STRONG' THE COLOUR IS</strong></p>
                                <div class="circle-row center-block">
                                    <div class="sat-4-1 circle-4"></div>
                                    <div class="sat-4-2 circle-4"></div>
                                    <div class="sat-4-3 circle-4"></div>
                                    <div class="sat-4-4 circle-4"></div>
                                </div>
                                <br>
                                <p>If a colour had no saturation it would be grayscale, if it was highly saturated it would be very colourful.</p>
                                <a onclick="return show('Page3','Page4');" class="btn btn-default btn-back hvr-radial-out sat-hue">BACK</a>
                                <a onclick="return show('Page5','Page4');" class="btn btn-default btn-next hvr-radial-out sat-lig" >NEXT</a>
                            </div>
                            <div id="Page5" class="not-yet">

                                <div id="Page5-content-1" class="yet">
                                    <h2><strong>LIGHTNESS</strong></h2>
                                    <h5 class="small">HAVE A PLAY WITH THE SLIDER!</h5>

                                    <div class="slider-container">
                                        <div id="slider-3"></div>
                                    </div>
                                    <br>
                                    <p><strong>LIGHTNESS IS HOW 'BRIGHT' THE COLOUR IS</strong></p>
                                    <div class="circle-row center-block">
                                        <div class="lig-4-1 circle-4"></div>
                                        <div class="lig-4-2 circle-4"></div>
                                        <div class="lig-4-3 circle-4"></div>
                                        <div class="lig-4-4 circle-4"></div>
                                    </div>

                                    <br>
                                    <a class="btn btn-default btn-find btn-purple hvr-radial-out" onclick="return show('Page5-content-2','Page5-content-1');">FUN FACT</a>
                                    <br>
                                    <a onclick="return show('Page4','Page5');" class="btn btn-default btn-back hvr-radial-out lig-sat">BACK</a>
                                    <a onclick="return show('Page6','Page5');" class="btn btn-default btn-next hvr-radial-out lig-match">NEXT</a>
                                </div>
                                <div id="Page5-content-2" class="not-yet">
                                    <img src="./images/sun.svg" height="50px">
                                    <h3><strong>TOP SECRET</strong></h3>
                                    <p>Is the Sun actually yellow?</p>
                                    <a class="btn btn-default btn-play hvr-radial-out bright bright-yes" >YES, OBVIOUSLY!</a>
                                    <a class="btn btn-default btn-find hvr-radial-out bright bright-no">MAYBE NOT?</a>
                                    <br>
                                    <div id="suntext"></div>
                                    <div id="bright-answer" style="display: none">The sun only looks yellow to our eyes due to our atmosphere.<br>The sun's real colour is almost white!</div>
                                    <br>
                                    <a onclick="return show('Page5-content-1','Page5-content-2')" class="btn btn-default btn-next btn-purple hvr-radial-out" id="bright-close">CLOSE</a>

                                </div>
                            </div>
                            <div id="Page6" class="not-yet">
                                <h1>COLOUR MATCH</h1>
                                <p>Use what you've just learnt to make the two colours <strong>exactly</strong> the same!</p>
                                <br>
                                <a onclick="return show('Page5','Page6');" class="btn btn-default btn-back hvr-radial-out hue-sat">BACK</a>
                                <a onclick="return show('Page7','Page6');" class="btn btn-default btn-next hvr-radial-out" >COLOUR MATCH!</a>
                            </div>
                            <div id="Page7" class="not-yet">
                                <h2><strong>HUE</strong> and <strong>SATURATION</strong></h2>
                                <h4>Make the colour on the left <strong>exactly</strong> the same as the one on the right!</h4>
                                <h5><strong>SATURATION</strong></h5>
                                <div class="slider-container">
                                    <div id="slider-4"></div>
                                </div>
                                <h5><strong>HUE</strong></h5>
                                <div class="slider-container">
                                    <div id="slider-5"></div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-xs-6 no-right" >
                                        <div class="colour-square-top" style="float: right">
                                            <div class="colour-square" style="background-color: grey; float: right">
                                                <div class="colour-inside" id="colour-match-1"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 no-left">
                                        <div class="colour-square-top">
                                            <div class="colour-inside" style="background-color: #706dc0; float: left"></div>
                                        </div>
                                    </div>
                                </div>
                                <h3 id="match-1-comp" style="display: none;"><strong>WELL DONE!</strong></h3>
                                <a onclick="return show('Page6','Page7');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                                <a onclick="return show('Page8','Page7');" class="btn btn-default btn-next hvr-radial-out btn-match" id="match-1" style="visibility: hidden; opacity: 0">NEXT</a>
                            </div>
                            <div id="Page8" class="not-yet">
                                <h2><strong>HUE</strong>, <strong>SATURATION</strong> and <strong>LIGHTNESS</strong></h2>
                                <h4>Make the colour on the left <strong>exactly</strong> the same as the one on the right!</h4>
                                <h5><strong>SATURATION</strong></h5>
                                <div class="slider-container">
                                    <div id="slider-6"></div>
                                </div>
                                <h5><strong>HUE</strong></h5>
                                <div class="slider-container">
                                    <div id="slider-7"></div>
                                </div>
                                <h5><strong>LIGHTNESS</strong></h5>
                                <div class="slider-container">
                                    <div id="slider-8"></div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-xs-6 no-right" >
                                        <div class="colour-square" id="colour-match-2-top" style="background-color: grey; float: right">
                                            <div class="colour-inside" id="colour-match-2">
                                                <div class="colour-square-top" id="match-2-light" style="float: right; background-color:black">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 no-left">
                                        <div class="colour-square-top">
                                            <div class="colour-inside" style="background-color: #e1bc81; float: left"></div>
                                        </div>
                                    </div>
                                </div>
                                <h3 id="match-2-comp" style="display: none;"><strong>WELL DONE!</strong></h3>
                                <a onclick="return show('Page7','Page8');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                                <a onclick="return show('Page9','Page8');" class="btn btn-default btn-next hvr-radial-out btn-match" id="match-2" style="visibility: hidden; opacity: 0">NEXT</a>
                            </div>
                            <div id="Page9" class="not-yet">
                                <h2><strong>Congratulations!</strong></h2>
                                <p>You’ve seen three ways of manipulating colour, these are represented in the three circles. <br>Can you correctly identify what each of these circles refers to from the concepts you’ve been introduced to?</p>
                                <div class="row" style="margin: 5px 0">
                                    <img src="./images/huecircle.gif" width="30px">
                                    <input type="text" placeholder="Your answer..." id="part1-test-1">
                                    <button class="btn btn-default btn-next test-btn" id="part1-test-1btn">SUBMIT</button>
                                    <p id="part1-test-1wrong" style="display: none">Oops! Do you remember what we call a red, yellow, blue and other colours? (Hint: It sounds like 'you'.)</p>
                                </div>
                                <div class="row" style="margin: 5px 0">
                                    <img src="./images/satcircle.gif" width="30px">
                                    <input type="text" placeholder="Your answer..." id="part1-test-2">
                                    <button class="btn btn-default btn-next test-btn" id="part1-test-2btn">SUBMIT</button>
                                    <p id="part1-test-2wrong" style="display: none">Oops! Do you remember what we call the 'strength' of a colour?</p>

                                </div>
                                <div class="row" style="margin: 5px 0">
                                    <img src="./images/ligcircle.gif" width="30px">
                                    <input type="text" placeholder="Your answer..." id="part1-test-3">
                                    <button class="btn btn-default btn-next test-btn" id="part1-test-3btn">SUBMIT</button>
                                    <p id="part1-test-3wrong" style="display: none">Oops! Do you remember what we call the 'brightness' of a colour? (Hint: It begins with 'L')</p>
                                </div>

                                <div class="progress">
                                    <div class="progress-bar-success progress-bar" id="part1-test-progress" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%"></div>
                                </div>
                                <p class="part1-test-comp">Perfect! Hue, Saturation and Lightness make up a type of colour model.</p>
                                <p class="part1-test-comp">What's a Colour Model? <strong>Part 2</strong> will tell you all about them</p>
                                <a onclick="return show('Page8','Page9');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                                <a href="progress.php" class="btn btn-default btn-next hvr-radial-out btn-match match-3" style="visibility: hidden; opacity: 0" >NEXT</a>
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
    <div class="part-bar"></div>
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