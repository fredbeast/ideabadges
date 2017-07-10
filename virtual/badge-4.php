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

if($_SESSION['authorised'] < 5){
    header('Location: start.php');
}
$_SESSION['authorised'] = 5;

?>

<!DOCTYPE html>

<html>
<head>
    <title>Virtual Reality Badge - iDEA Bronze</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="./stylesheets/hover.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="./stylesheets/circle.css">
    <link rel="stylesheet" href="./stylesheets/style.css">
    <link rel="stylesheet" href="./stylesheets/animate.css">

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
<div id="loader"><img src="./images/Loader.gif" id="loadergif"> </div>
<div id="background">
    <div id="background-extra">
        <div id="background-light">
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">

        <div id="wrapper" class="wrapwidth container">
            <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 cont-mid text-center" style="overflow: inherit ; height: auto;">

                <div id="Page40" class="yet">
                    <h3 class="alone">The importance of VR</h3>
                    <hr>
                    <img src="./images/image-11.png" class="alone-pic center-block">
                    <a onclick="return show('Page41','Page40');" class="btn btn-default btn-next hvr-radial-out prog40">NEXT</a>
                </div>

                <div id="Page41" class="not-yet">
                    <p>VR allows the user to see the world from another’s point of view and therefore has the ability to create <span> empathy. </span> Research shows that full VR immersion  (in which a person wearing a HMD can be transported instantly to a gunfight on a New York street corner, witness the crossfire of the Syrian civil war, or experience what it’s like to suffer from dementia) places a unique stamp on the brain that is <span> distinct </span> from watching a movie or reading a book.</p>
                    <a onclick="return show('Page40','Page41');" class="btn btn-default btn-back hvr-radial-out prog40b">BACK</a>
                    <a onclick="return show('Page42','Page41');" class="btn btn-default btn-next hvr-radial-out">NEXT</a>
                </div>

                <div id="Page42" class="not-yet">
                    <img src="./images/image-12.png" width="60%" class="center-block alone-pic">
                    <p><span> Researchers </span> at Stanford University found that parts of the brain that <span> light up </span> when a person has a real-life experience also <span> light up </span> when one has the <span> same </span> experience in <span> virtual reality.</span></p>
                    <a onclick="return show('Page41','Page42');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                    <a onclick="return show('Page43','Page42');" class="btn btn-default btn-next hvr-radial-out">NEXT</a>
                </div>
                <div id="Page43" class="not-yet">
                    <p class="test-info">Can VR create empathy?</p>
                    <p class="subtle"> Select the answer</p>
                    <p class="wrong" id="emp-wrong">Oops! Go back and look for the answer! Try again!</p>
                    <p class="right" id="emp-right-text">Well done! Keep it up.</p>
                    <div class="answer-box empbox" id="emp-right"><div class="answer-box-fill"><div class="inverted-bar"><div class="outer">Yes</div><div class="inner">Yes</div></div></div></div>
                    <div class="answer-box empbox"><div class="answer-box-fill"><div class="inverted-bar"><div class="outer">No</div><div class="inner">No</div></div></div></div>
                    <a class="btn btn-default btn-find hvr-radial-out check-btn" id="emp-check">SUBMIT</a>
                    <br>
                    <a onclick="return show('Page42','Page43');" class="btn btn-default btn-back hvr-radial-out ">BACK</a>
                    <a onclick="return show('Page44','Page43');" class="btn btn-default btn-next hvr-radial-out reveal" id="emp-comp">NEXT</a>
                </div>
                <div id="Page44" class="not-yet">
                    <h3 class="alone">Production methods</h3>
                    <hr>
                    <img src="./images/image-13.png" class="alone-pic center-block">
                    <a onclick="return show('Page43','Page44');" class="btn btn-default btn-back hvr-radial-out ">BACK</a>
                    <a onclick="return show('Page45','Page44');" class="btn btn-default btn-next hvr-radial-out">NEXT</a>
                </div>
                <div id="Page45" class="not-yet">
                    <h3 class="alone">360° video</h3>
                    <img src="./images/image-14.png" class="alone-pic center-block">
                    <p>Stitching is the process of taking video from multiple sources and <span> combining </span> it into one visual experience. Poor stitching can cause <span> disorientation </span> if users can see where one video source <span> ends <span> and another <span> begins. </span></p>
                    <a onclick="return show('Page44','Page45');" class="btn btn-default btn-back hvr-radial-out ">BACK</a>
                    <a onclick="return show('Page46','Page45');" class="btn btn-default btn-next hvr-radial-out">NEXT</a>
                </div>
                <div id="Page46" class="not-yet">
                    <h3 class="alone">Real-time VR</h3>
                    <img src="./images/image-15.png" class="alone-pic center-block">
                    <p>Interactive VR experiences are created in <span> game engines, </span> in the same way computer games are. Examples of <span> game engines </span> are Unity, Unreal CryEngine and Stingray.</p>
                    <a onclick="return show('Page45','Page46');" class="btn btn-default btn-back hvr-radial-out ">BACK</a>
                    <a onclick="return show('Page47','Page46');" class="btn btn-default btn-next hvr-radial-out">NEXT</a>
                </div>
                <div id="Page47" class="not-yet">
                    <p class="test-info"> What process is used to create 360 video?</p>
                    <p class="subtle"> Select the answer</p>
                    <p class="wrong" id="sew-wrong">Oops! Here's a clue... What holds jeans together?
                    <p class="right" id="sew-right-text">You're getting too good at this... </p>
                    <div class="answer-box sewbox"><div class="answer-box-fill"><div class="inverted-bar"><div class="outer">Trimming</div><div class="inner">Trimming</div></div></div></div>
                    <div class="answer-box sewbox" id="sew-right"><div class="answer-box-fill"><div class="inverted-bar"><div class="outer">Stitching</div><div class="inner">Stitching</div></div></div></div>
                    <div class="answer-box sewbox"><div class="answer-box-fill"><div class="inverted-bar"><div class="outer">Streaming</div><div class="inner">Streaming</div></div></div></div>
                    <div class="answer-box sewbox"><div class="answer-box-fill"><div class="inverted-bar"><div class="outer">Sewing</div><div class="inner">Sewing</div></div></div></div>
                    <a class="btn btn-default btn-find hvr-radial-out check-btn" id="sew-check">SUBMIT</a>
                    <br>
                    <a onclick="return show('Page46','Page47');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                    <a onclick="return show('Page48','Page47');" class="btn btn-default btn-next hvr-radial-out reveal" id="sew-comp">NEXT</a>
                </div>
                <div id="Page48" class="not-yet">
                    <div class="progress" >
                        <div class="progress-bar" role="progressbar" id="drag-prog2" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">70% Complete</span>
                        </div>
                    </div>
                    <p class="test-info">If it's not a game engine, bin it!</p>
                    <div class="progress-space"  id="progress-space2">
                        <div class="ans-cont text-center" id="ans-cont2">
                            <div class="ans-drag" id="ans-drag11">UNREAL</div>
                            <div class="ans-drag" id="ans-drag22">UNITY</div>
                            <div class="ans-drag" id="ans-drag33">REAL</div>
                            <div class="ans-drag" id="ans-drag44">CRYENGINE</div>
                        </div>
                        <div class="drop-container" id="drop-container2">
                            <div class="drop bin">BIN</div>
                        </div>
                    </div>
                </div>
                <div id="Page49" class="not-yet">
                    <p><span>Congratulations!</span></p>
                    <p>You've learnt how Virtual Reality works, discovered MR & AR and even have seen stereoscopy in action!</p>
                    <a href="progress.php" class="btn btn-default btn-next hvr-radial-out prog50">FINISH</a>

                </div>
            </div>

        </div>
    </div>
</div>
<img src="./images/resize-white.png" width="100" id="idea-logo">
<a href="https://idea.org.uk/"><div id="garter-stamp"></div></a>
<div class="part-container">
    <div class="part-bar" style="width: 64%;"></div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js" integrity="sha256-DI6NdAhhFRnO2k51mumYeDShet3I8AKCQf/tf7ARNhI=" crossorigin="anonymous"></script>
<script src="./javascripts/slider.js"></script>
<script src="./javascripts/all.js"></script>
<script>
    $(function(){
        $('#loader').delay(1000).fadeOut(1500)
    });
</script>

</body>

</html>