<?php

require '../vendor/autoload.php';

session_start();

if($_SESSION['authorised'] < 5){
    header('Location: badge-3.php');
}
$_SESSION['authorised'] = 5;

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
<div id="loader" style="background-color: #efefef"><img src="./images/Loader.gif" id="loadergif"> </div>
<div id="background" style="background-color: #ffffff">
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

                            <!-- PART 4 -->


                            <div id="Page30" class="yet">
                                <h1>PART 4</h1>
                                <h4>COLOUR SCHEMES</h4>
                                <p>How to combine colours like a pro!</p>
                                <br>
                                <a onclick="return show('Page31','Page30');" class="btn btn-default btn-next hvr-radial-out" id="start-4" >START</a>
                            </div>
                            <div id="Page31" class="not-yet">
                                <img src="./images/colour-wheel.png" class="center-block" width="180px">
                                <br>
                                <p>A great way to visualise lots of colours is to put them into a colour wheel!</p>
                                <p>You can use colour wheels to help make your own <strong>colour schemes</strong> - these are just groups of specific colours that work well together.</p>
                                <a onclick="return show('Page30','Page31');" class="btn btn-default btn-back hvr-radial-out" >BACK</a>
                                <a onclick="return show('Page32','Page31');" class="btn btn-default btn-next hvr-radial-out">NEXT</a>
                            </div>
                            <div id="Page32" class="not-yet">
                                <h2><strong>MONOCHROMATIC</strong></h2>
                                <h5>DIFFERENT SHADES OF ONE HUE</h5>
                                <img src="./images/monochromatic.png" class="center-block" width="180px">
                                <p>By choosing the blue section of the colour wheel, we can see all the different shades of blue. Taking each of these colours would make up a <strong>monochromatic</strong> colour scheme.</p>
                                <img src="./images/monochromatic-scheme.png" class="center-block" width="150px">
                                <br>
                                <a onclick="return show('Page31','Page32');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                                <a onclick="return show('Page33','Page32');" class="btn btn-default btn-next hvr-radial-out" >NEXT</a>
                            </div>


                            <div id="Page33" class="not-yet">
                                <h2><strong>ANALOGOUS</strong></h2>
                                <h5>COLOURS NEXT TO EACH OTHER ON THE COLOUR WHEEL</h5>
                                <img src="./images/analogous.png" class="center-block" width="180px">
                                <p>Choosing a colour, then adding the colours next to it in the colour wheel, makes an <strong>analogous</strong> colour scheme.</p>
                                <img src="./images/analogous-scheme.png" class="center-block" width="150px">
                                <br>
                                <a onclick="return show('Page32','Page33');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                                <a onclick="return show('Page34','Page33');" class="btn btn-default btn-next hvr-radial-out" >NEXT</a>
                            </div>
                            <div id="Page34" class="not-yet">
                                <h2><strong>COMPLEMENTARY</strong></h2>
                                <h5>COLOUR AT OPPOSITE SIDES OF THE COLOUR WHEEL</h5>
                                <img src="./images/complementary.png" class="center-block" width="180px">
                                <p>Choosing the pink section of the colour wheel, then taking the yellow section on the opposite side of the wheel, would make up a <strong>complementary</strong> colour scheme.</p>
                                <img src="./images/complementary-scheme.png" class="center-block" width="150px">
                                <br>
                                <a onclick="return show('Page33','Page34');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                                <a onclick="return show('Page35','Page34');" class="btn btn-default btn-next hvr-radial-out" >NEXT</a>
                            </div>
                            <div id="Page35" class="not-yet">
                                <h2><strong>TRIADIC</strong></h2>
                                <h5>THREE COLOURS EQUALLY FAR APART ON THE COLOUR WHEEL</h5>
                                <img src="./images/triadic.png" class="center-block" width="180px">
                                <p>Choose three colours at three points on the colour wheel (making a triangle) would make up a <strong>triadic</strong> colour scheme.</p>
                                <img src="./images/triadic-scheme.png" class="center-block" width="150px">
                                <br>
                                <a onclick="return show('Page34','Page35');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                                <a onclick="return show('Page36','Page35');" class="btn btn-default btn-next hvr-radial-out" >NEXT</a>
                            </div>
                            <div id="Page36" class="not-yet">
                                <h5 id="cs-intro">TAP THE CIRCLES BELOW UNTIL ALL THE COLOURS ARE INCLUDED IN THE COLOUR SCHEME BELOW</h5>
                                <div class="center-block" id="cs-pic"></div>
                                <h3 style="border-style: dotted; border-width: 1px; border-color: #b9b9b9" ><div id="cs"></div><strong id="cs-text">COMPLEMENTARY</strong></h3>
                                <p id="cs-comp-congrats" style="display:none">You recognised each of the four main types of colour schemes!</p>
                                <p><div id="cs-help">Hint: Purples and Yellows!</div></p>
                                <div class="row">
                                    <div class="col-xs-6 no-right cm-cont" ><div class="cm-1 cm center-block" ></div></div>
                                    <div class="col-xs-6 no-left cm-cont"><div class="cm-2 cm center-block" ></div></div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 no-right cm-cont"><div class="cm-3 cm center-block" ></div></div>
                                    <div class="col-xs-6 no-left cm-cont"><div class="cm-4 cm center-block" ></div></div>
                                </div>

                                <a onclick="return show('Page35','Page36');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                                <a onclick="return show('Page37','Page36');" class="btn btn-default btn-next hvr-radial-out" id="cs-comp" style="visibility: hidden; opacity: 0" >NEXT</a>
                            </div>
                            <div id="Page37" class="not-yet">
                                <p>All big brands have colour schemes, some revolve around one colour, some use lots of colours. <br>Do you think you can guess FIVE colours from iDEA's colour scheme?</p>
                                <a onclick="return show('Page36','Page37');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                                <a onclick="return show('Page38','Page37');" class="btn btn-default btn-next hvr-radial-out">LET'S GO!</a>
                            </div>
                            <div id="Page38" class="not-yet">

                                <img src="./images/brand-1.png" height="60px" style="padding: 5px" class="center-block">

                                <div class="row">
                                    <div class="col-xs-3 "><div class="ts" id="ts1"></div></div>
                                    <div class="col-xs-3 "><div class="ts" id="ts2"></div></div>
                                    <div class="col-xs-3"><div class="ts" id="ts3"></div></div>
                                    <div class="col-xs-3 "><div class="ts" id="ts4"></div></div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-3 "><div class="ts" id="ts5"></div></div>
                                    <div class="col-xs-3 "><div class="ts" id="ts6"></div></div>
                                    <div class="col-xs-3"><div class="ts" id="ts7"></div></div>
                                    <div class="col-xs-3 "><div class="ts" id="ts8"></div></div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-3 "><div class="ts" id="ts9"></div></div>
                                    <div class="col-xs-3 "><div class="ts" id="ts10"></div></div>
                                    <div class="col-xs-3"><div class="ts" id="ts11"></div></div>
                                    <div class="col-xs-3 "><div class="ts" id="ts12"></div></div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-3 "><div class="ts" id="ts13"></div></div>
                                    <div class="col-xs-3 "><div class="ts" id="ts14"></div></div>
                                    <div class="col-xs-3"><div class="ts" id="ts15"></div></div>
                                    <div class="col-xs-3 "><div class="ts" id="ts16"></div></div>
                                </div>
                                <div class="row">
                                    <div class=" ds ds-1"></div>
                                    <div class=" ds ds-1"></div>
                                    <div class=" ds ds-1"></div>
                                    <div class=" ds ds-1"></div>
                                    <div class=" ds ds-1"></div>
                                </div>
                                <a onclick="return show('Page37','Page38');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                                <a onclick="return show('Page39','Page38');" class="btn btn-default btn-next hvr-radial-out" id="ts-comp" style="visibility: hidden; opacity: 0">NEXT</a>
                            </div>

                            <div id="Page39" class="not-yet">
                                <p>Well done! iDEA has a really big colour scheme, with our two main colours being a navy blue and a pink.
                                    <br>Brands aren't the only thing with colour schemes, you can see them in nature to.</p>
                                <p>Can you make a 'sunset' colour scheme?</p>
                                <a onclick="return show('Page38','Page39');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                                <a onclick="return show('Page40','Page39');" class="btn btn-default btn-next hvr-radial-out">LET'S GO!</a>
                            </div>

                            <div id="Page40" class="not-yet">
                                <img src="./images/sunset.svg"  height="60px" style="padding: 5px" class="center-block">

                                <div class="row">
                                    <div class="col-xs-3 "><div class="ts2" id="ts21"></div></div>
                                    <div class="col-xs-3 "><div class="ts2" id="ts22"></div></div>
                                    <div class="col-xs-3"><div class="ts2" id="ts23"></div></div>
                                    <div class="col-xs-3 "><div class="ts2" id="ts24"></div></div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-3 "><div class="ts2" id="ts25"></div></div>
                                    <div class="col-xs-3 "><div class="ts2" id="ts26"></div></div>
                                    <div class="col-xs-3"><div class="ts2" id="ts27"></div></div>
                                    <div class="col-xs-3 "><div class="ts2" id="ts28"></div></div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-3 "><div class="ts2" id="ts29"></div></div>
                                    <div class="col-xs-3 "><div class="ts2" id="ts210"></div></div>
                                    <div class="col-xs-3"><div class="ts2" id="ts211"></div></div>
                                    <div class="col-xs-3 "><div class="ts2" id="ts212"></div></div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-3 "><div class="ts2" id="ts213"></div></div>
                                    <div class="col-xs-3 "><div class="ts2" id="ts214"></div></div>
                                    <div class="col-xs-3"><div class="ts2" id="ts215"></div></div>
                                    <div class="col-xs-3 "><div class="ts2" id="ts216"></div></div>
                                </div>
                                <div class="row">
                                    <div class="ds ds-2"></div>
                                    <div class="ds ds-2"></div>
                                    <div class="ds ds-2"></div>
                                    <div class="ds ds-2"></div>
                                    <div class="ds ds-2"></div>
                                </div>

                                <a onclick="return show('Page39','Page40');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                                <a onclick="return show('Page41','Page40');" class="btn btn-default btn-next hvr-radial-out" id="ts-comp-2" style="visibility: hidden; opacity: 0">NEXT</a>
                            </div>

                            <div id="Page41" class="not-yet">
                                <p>Well done! A sunset is usually full of oranges and yellows (and sometimes some pinks, purples and blues if you're lucky!).</p>
                                <p>What about a sunrise? They have a completely different colour scheme associated with them. Do you think you can make one of those?</p>
                                <a onclick="return show('Page40','Page41');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                                <a onclick="return show('Page42','Page41');" class="btn btn-default btn-next hvr-radial-out">LET'S GO!</a>
                            </div>

                            <div id="Page42" class="not-yet">
                                <img src="./images/sunrise.svg" height="60px" style="padding: 5px" class="center-block">

                                <div class="row">
                                    <div class="col-xs-3 "><div class="ts3" id="ts31"></div></div>
                                    <div class="col-xs-3 "><div class="ts3" id="ts32"></div></div>
                                    <div class="col-xs-3"><div class="ts3" id="ts33"></div></div>
                                    <div class="col-xs-3 "><div class="ts3" id="ts34"></div></div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-3 "><div class="ts3" id="ts35"></div></div>
                                    <div class="col-xs-3 "><div class="ts3" id="ts36"></div></div>
                                    <div class="col-xs-3"><div class="ts3" id="ts37"></div></div>
                                    <div class="col-xs-3 "><div class="ts3" id="ts38"></div></div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-3 "><div class="ts3" id="ts39"></div></div>
                                    <div class="col-xs-3 "><div class="ts3" id="ts310"></div></div>
                                    <div class="col-xs-3"><div class="ts3" id="ts311"></div></div>
                                    <div class="col-xs-3 "><div class="ts3" id="ts312"></div></div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-3 "><div class="ts3" id="ts313"></div></div>
                                    <div class="col-xs-3 "><div class="ts3" id="ts314"></div></div>
                                    <div class="col-xs-3"><div class="ts3" id="ts315"></div></div>
                                    <div class="col-xs-3 "><div class="ts3" id="ts316"></div></div>
                                </div>
                                <div class="row">
                                    <div class=" ds ds-3"></div>
                                    <div class=" ds ds-3"></div>
                                    <div class=" ds ds-3"></div>
                                    <div class=" ds ds-3"></div>
                                    <div class=" ds ds-3"></div>
                                </div>
                                <a onclick="return show('Page41','Page42');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                                <a onclick="return show('Page43','Page42');" class="btn btn-default btn-next hvr-radial-out final-bar" id="ts-comp-3" style="visibility: hidden; opacity: 0">NEXT</a>
                            </div>
                            <div id="Page43" class="not-yet">
                                <img src="./images/congratulations.svg" height="100px" class="center-block">
                                <h5>YOU'VE COMPLETED THE COLOUR BADGE</h5>

                                <a onclick="return show('Page42','Page43');" class="btn btn-default btn-back hvr-radial-out final-bar-back whiteout">BACK</a>
                                <a onclick="return show('Page44','Page43');" class="btn btn-default btn-next hvr-radial-out check5">NEXT</a>
                            </div>
                            <div id="Page44" class="not-yet">
                                <p>You've seen how to change the look of colours, how computers deal with these colours and even how you can mix colours together in different ways.</p>
                                <p>It's now time to go back to the iDEA site, well done on getting your points and have a go at some more badges!</p>
                                <a onclick="return show('Page43','Page44');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                                <a href="badge-completed.php" class="btn btn-default btn-next hvr-radial-out whiteout">FINISH</a>
                            </div>
                            <div id="Page45" class="not-yet">
                                <img src="./images/rocket.gif" height="200px" class="center-block">
                                <h4>Taking you home..</h4>
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
    <div class="part-bar" style="width: 60%;"></div>
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