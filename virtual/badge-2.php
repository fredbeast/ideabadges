<?php

require '../vendor/autoload.php';

session_start();

if($_SESSION['authorised'] < 3){
    header('Location: badge-1.php');
}
$_SESSION['authorised'] = 3;

$client = new \GuzzleHttp\Client();

$res = $client->request('POST', 'https://idea.org.uk/api/progress', [
    'http_errors' => false,
    'headers' => [
        'Authorization' => 'Bearer ' . $_SESSION['oauth2_access_token']
    ],
    'json' => [
        'progress' => 2 // Badge start
    ]
]);

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

                <div id="Page20" class="yet">
                    <h3 class="alone">What is AR?</h3>
                    <hr>
                    <img src="./images/image-5.png" class="alone-pic center-block">
                    <a onclick="return show('Page21','Page20');" class="btn btn-default btn-next hvr-radial-out prog20">NEXT</a>
                </div>

                <div id="Page21" class="not-yet">
                    <p><span> Augmented reality (AR) </span> is an <span> overlay </span> of content on the real world using <span> mobile devices </span> e.g. smartphones or tablets.</p>
                    <a onclick="return show('Page20','Page21');" class="btn btn-default btn-back hvr-radial-out prog20b">BACK</a>
                    <a onclick="return show('Page22','Page21');" class="btn btn-default btn-next hvr-radial-out">NEXT</a>
                </div>

                <div id="Page22" class="not-yet">
                    <h3 class="alone">What is MR?</h3>
                    <hr>
                    <img src="./images/image-6.png" class="alone-pic center-block">
                    <a onclick="return show('Page21','Page22');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                    <a onclick="return show('Page23','Page22');" class="btn btn-default btn-next hvr-radial-out">NEXT</a>
                </div>

                <div id="Page23" class="not-yet">
                    <p><span> Mixed reality (MR) </span> is an <span> advancment </span> of AR but the user experiences the content overlays <span> via a headset</span>. Hardware associated with MR includes Microsoft’s HoloLens, Magic Leap and Meta. </p>
                    <a onclick="return show('Page22','Page23');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                    <a onclick="return show('Page24','Page23');" class="btn btn-default btn-next hvr-radial-out">NEXT</a>
                </div>

                <div id="Page24" class="not-yet">
                    <div class="progress" >
                        <div class="progress-bar" role="progressbar" id="drag-prog" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">70% Complete</span>
                        </div>
                    </div>
                    <p class="test-info">Drag the following words to the type of reality they're usually associated to</p>
                    <div class="progress-space">
                        <div class="ans-cont text-center">
                            <div class="ans-drag" id="ans-drag1">HOLOLENS</div>
                            <div class="ans-drag" id="ans-drag2">POKEMON GO</div>
                            <div class="ans-drag" id="ans-drag3">OCULUS RIFT</div>
                            <div class="ans-drag" id="ans-drag4">GOOGLE GLASS</div>
                            <div class="ans-drag" id="ans-drag5">MAGIC LEAP</div>
                            <div class="ans-drag" id="ans-drag6">META</div>
                            <div class="ans-drag" id="ans-drag7">GOOGLE CARDBOARD</div>
                            <div class="ans-drag" id="ans-drag8">HTC VIVE</div>
                        </div>
                        <div class="drop-container">
                            <div class="drop drop-mr">MR</div>
                            <div class="drop drop-vr">VR</div>
                            <div class="drop drop-ar">AR</div>
                        </div>
                    </div>
                </div>
                <div id="Page25" class="not-yet">
                    <h3 class="alone">How does VR technology work?</h3>
                    <hr>
                    <img src="./images/image-7.png" class="alone-pic center-block">
                    <a onclick="return show('Page24','Page25');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                    <a onclick="return show('Page26','Page25');" class="btn btn-default btn-next hvr-radial-out">NEXT</a>
                </div>
                <div id="Page26" class="not-yet">
                    <p>To experience VR you need a <span> Head Mounted Display </span> ( HMD )</p>
                    <a onclick="return show('Page25','Page26');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                    <a onclick="return show('Page27','Page26');" class="btn btn-default btn-next hvr-radial-out">NEXT</a>
                </div>
                <div id="Page27" class="not-yet">
                    <p>This plays/displays <span> stereoscopic </span> images which <span> trick </span> the brain into believing you’re looking at a <span> real </span> environment, and not a screen. </p>
                    <a onclick="return show('Page26','Page27');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                    <a onclick="return show('Page28','Page27');" class="btn btn-default btn-next hvr-radial-out">NEXT</a>
                </div>
                <div id="Page28" class="not-yet">
                    <p><span> Gyroscopes </span> and other sensors in/and or around the HMD <span> track your movements </span> allowing what you’re looking at to <span> react </span> when you turn your head, nod, move your arm etc. </p>
                    <a onclick="return show('Page27','Page28');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                    <a href="progress.php" class="btn btn-default btn-next hvr-radial-out ">NEXT</a>
                </div>
            </div>

        </div>
    </div>
</div>
<img src="./images/resize-white.png" width="100" id="idea-logo">
<a href="https://idea.org.uk/"><div id="garter-stamp"></div></a>
<div class="part-container">
    <div class="part-bar" style="width: 32%;"></div>
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