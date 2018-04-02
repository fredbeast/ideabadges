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
if (isset($_SESSION['authorised'])){
    header('Location: progress.php');
}
else {
    $_SESSION['authorised'] = 1;
}

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
<div id="background" class="stripes">
    <div id="background-extra">
        <div id="background-light">
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">

        <div id="wrapper" class="wrapwidth container">
            <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 cont-mid text-center" style="overflow: inherit ; height: auto;">


                <div id="Page1" class="yet">
                    <div id="Page1-content-1" class="yet">

                        <img src="./images/title.png" id="title" >
                        <br>
                        <a class="btn btn-default btn-find btn-purple hvr-radial-out" onclick="return show('Page1-content-2','Page1-content-1');">CONTENTS</a>
                        <br>
                        <a onclick="return show('Page2','Page1');" class="btn btn-default btn-next hvr-radial-out" id="beginning-btn">LET'S GO!</a>
                    </div>
                    <div id="Page1-content-2" class="not-yet">
                        <h1>CONTENTS</h1>
                        <h5 class="subtle">WHAT WE GET UP TO IN THIS BADGE</h5>
                        <img src="./images/content-1.png" class="content content-1" style="opacity: 1;">
                        <img src="./images/content-2.png" class="content content-2">
                        <img src="./images/content-3.png" class="content content-3">
                        <p class="content-text" id="content-1">Tell the difference between VR, AR and MR</p>
                        <p class="content-text" id="content-2">Learn about VR's different hardware and production methods</p>
                        <p class="content-text" id="content-3">Discover the extent of VR's potential</p>
                        <a onclick="return show('Page1-content-1','Page1-content-2')" class="btn btn-default btn-next btn-purple hvr-radial-out">CLOSE</a>
                    </div>
                </div>


                <div id="Page2" class="not-yet">
                    <img src="./images/part1.png" class="center-block part">
                    <h1>VR, MR & AR</h1>
                    <p class="subtle">Snap back to reality. Oh, there goes gravity.</p>
                    <br>
                    <a onclick="return show('Page1','Page2');" class="btn btn-default btn-back hvr-radial-out" id="beginning-btn-back">BACK</a>
                    <a onclick="return show('Page3','Page2');" class="btn btn-default btn-next hvr-radial-out check1">NEXT</a>
                </div>
                <div id="Page3" class="not-yet">
                    <h3 class="alone">What is VR?</h3>
                    <hr>
                    <img src="./images/image-8.png" class="alone-pic center-block">
                    <a onclick="return show('Page2','Page3');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                    <a onclick="return show('Page4','Page3');" class="btn btn-default btn-next hvr-radial-out">NEXT</a>
                </div>
                <div id="Page4" class="not-yet">
                    <p><span> Virtual reality (VR) </span> is the umbrella term for all <span> immersive </span> experiences, which could be created using real-world content, CGI content or a hybrid of both.</p>
                    <a onclick="return show('Page3','Page4');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                    <a onclick="return show('Page5','Page4');" class="btn btn-default btn-next hvr-radial-out">NEXT</a>

                </div>
                <div id="Page5" class="not-yet">
                    <p>VR can be experienced via <span> mobile </span> or PC based <span> Head Mounted Displays </span> (HMDs). VR is transportative and a medium which is capable of creating <span> presence.</span></p>
                    <a onclick="return show('Page4','Page5');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                    <a onclick="return show('Page6','Page5');" class="btn btn-default btn-next hvr-radial-out">NEXT</a>

                </div>
                <div id="Page6" class="not-yet">
                    <h3 class="alone">What is “presence"?</h3>
                    <hr>
                    <img src="./images/image-2.png" class="alone-pic center-block">
                    <a onclick="return show('Page5','Page6');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                    <a onclick="return show('Page7','Page6');" class="btn btn-default btn-next hvr-radial-out">NEXT</a>
                </div>
                <div id="Page7" class="not-yet">
                    <p>The magic of VR! The feeling that you’re <span> actually </span> in the virtual world. True presence in VR must be convincing to <span> all </span> your senses. This is a <span> huge </span> technical challenge and one that is a <span> work in progress. </span> </p>
                    <a onclick="return show('Page6','Page7');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                    <a onclick="return show('Page8','Page7');" class="btn btn-default btn-next hvr-radial-out" >NEXT</a>
                </div>
                <div id="Page8" class="not-yet">
                    <p>Currently VR is able to convince our <span> vision </span> and <span> hearing </span> that we are in a new reality. There is still much work to be done in convincing users in regards to the senses of <span> smell, taste and touch. </span> </p>
                    <a onclick="return show('Page7','Page8');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                    <a onclick="return show('Page9','Page8');" class="btn btn-default btn-next hvr-radial-out">NEXT</a>
                </div>
                <div id="Page9" class="not-yet">
                    <p class="test-info">Which senses are currently not fooled by VR experiences?</p>
                    <p class="wrong" id="sens-wrong">Unlucky! Why not go back to look for the answer? </p>
                    <p class="right" id="sens-right">Great work!</p>
                    <div class="answer-box sensbox" id="sens-wrong-1"><div class="answer-box-fill"><div class="inverted-bar"><div class="outer">Sight</div><div class="inner">Sight</div></div></div></div>
                    <div class="answer-box sensbox" id="sens-wrong-2"><div class="answer-box-fill"><div class="inverted-bar"><div class="outer">Sound</div><div class="inner">Sound</div></div></div></div>
                    <div class="answer-box sensbox" id="sens-right-1"><div class="answer-box-fill"><div class="inverted-bar"><div class="outer">Taste</div><div class="inner">Taste</div></div></div></div>
                    <div class="answer-box sensbox" id="sens-right-2"><div class="answer-box-fill"><div class="inverted-bar"><div class="outer">Smell</div><div class="inner">Smell</div></div></div></div>
                    <div class="answer-box sensbox" id="sens-right-3"><div class="answer-box-fill"><div class="inverted-bar"><div class="outer">Touch</div><div class="inner">Touch</div></div></div></div>
                    <a class="btn btn-default btn-find hvr-radial-out check-btn" id="sens-check">SUBMIT</a>
                    <br>

                    <a onclick="return show('Page8','Page9');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                    <a href="progress.php" class="btn btn-default btn-next hvr-radial-out reveal" id="sens-comp">NEXT</a>
                </div>
            </div>

        </div>
    </div>
</div>
<img src="./images/resize-white.png" width="100" id="idea-logo">
<a href="https://idea.org.uk/"><div id="garter-stamp"></div></a>
<div class="part-container">
    <div class="part-bar" style="width: 0%;"></div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js" integrity="sha256-DI6NdAhhFRnO2k51mumYeDShet3I8AKCQf/tf7ARNhI=" crossorigin="anonymous"></script>
<script src="./javascripts/slider.js"></script>
<script src="./javascripts/all.js"></script>
<script>
    $(function(){
        $('#loader').delay(2000).fadeOut(1500)
    });
</script>

</body>

</html>