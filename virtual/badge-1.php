<?php

require '../vendor/autoload.php';

session_start();

if($_SESSION['authorised'] < 2){
    header('Location: badge.php');
}
$_SESSION['authorised'] = 2;

$client = new \GuzzleHttp\Client();

$res = $client->request('POST', 'https://idea.org.uk/api/progress', [
    'http_errors' => false,
    'headers' => [
        'Authorization' => 'Bearer ' . $_SESSION['oauth2_access_token']
    ],
    'json' => [
        'progress' => 1 // Badge start
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


                <div id="Page10" class="yet">
                    <h3 class="alone">What is real-time VR? </h3>
                    <hr>
                    <img src="./images/image-3.png" class="alone-pic center-block">
                    <a onclick="return show('Page11','Page10');" class="btn btn-default btn-next hvr-radial-out prog10">NEXT</a>
                </div>
                <div id="Page11" class="not-yet">
                    <p>Real-time VR is usually interactive and is <span> fully immersive. </span> Within the experience you can <span> move around </span> and interact with objects and characters <span> in real time. </span></p>
                    <a onclick="return show('Page10','Page11');" class="btn btn-default btn-back hvr-radial-out prog10b">BACK</a>
                    <a onclick="return show('Page12','Page11');" class="btn btn-default btn-next hvr-radial-out">NEXT</a>
                </div>
                <div id="Page12" class="not-yet">
                    <p>This content is created in a <span> game engine </span> and experienced on <span> HMDs </span> such as Oculus Rift, HTC Vive and Playstation VR. In addition to the HMD you will need a <span> powerful </span> computer or PS4 or PS VR to run the VR experience. </p>
                    <a onclick="return show('Page11','Page12');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                    <a onclick="return show('Page13','Page12');" class="btn btn-default btn-next hvr-radial-out">NEXT</a>
                </div>
                <div id="Page13" class="not-yet">
                    <p class="subtle">Have a look at the short video below to see how VR can be used to create art with Google's Tilt Brush!</p>
                    <iframe width="100%" height=300" class="embed-vid" src="https://www.youtube.com/embed/TckqNdrdbgk?rel=0" frameborder="0" allowfullscreen></iframe>
                    <a onclick="return show('Page12','Page13');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                    <a onclick="return show('Page14','Page13');" class="btn btn-default btn-next hvr-radial-out">NEXT</a>
                </div>
                <div id="Page14" class="not-yet">
                    <h3 class="alone">What is 360° video?</h3>
                    <hr>
                    <img src="./images/image-4.png" class="alone-pic center-block">
                    <a onclick="return show('Page13','Page14');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                    <a onclick="return show('Page15','Page14');" class="btn btn-default btn-next hvr-radial-out">NEXT</a>
                </div>
                <div id="Page15" class="not-yet">
                    <p>With <span> 360° video,</span> a view in <span> every </span> direction is recorded at the same time. 360° video is shot on <span> omnidirectional </span> cameras or a collection of cameras including Nokia Ozo and the Google Jump system. </p>
                    <a onclick="return show('Page14','Page15');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                    <a onclick="return show('Page16','Page15');" class="btn btn-default btn-next hvr-radial-out">NEXT</a>
                </div>
                <div id="Page16" class="not-yet">
                    <p>The videos can be viewed on your <span> mobile </span> and on Youtube and Facebook. For a more immersive experience, you can <span> dock </span> your mobile phone into a HMD like Samsung’s Gear VR and Google’s Daydream or Cardboard. 360° video, is <span> relatively passive </span> and <span> limited in interaction. </span> </p>
                    <a onclick="return show('Page15','Page16');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                    <a onclick="return show('Page18','Page16');" class="btn btn-default btn-next hvr-radial-out">NEXT</a>
                </div>
<!--
                <div id="Page17" class="not-yet text-center">
                    <p class="subtle">Go ahead and watch the 360 video below to find out even more about world of 360 video!</p>
                    <p style="margin: 20px 0" id="linkreveal"><a target="_blank" href="https://www.youtube.com/embed/oIAPyKoDziY?rel=0">Click here for the video</a></p>
                    <br>
                    <a onclick="return show('Page16','Page17');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                    <a onclick="return show('Page18','Page17');" class="btn btn-default btn-next hvr-radial-out reveal" id="linknext">NEXT</a>
                </div>
-->
                <div id="Page18" class="not-yet">
                    <p class="test-info">In general how immersive do you think real time VR is?<br>Have a go on the scale below until you get it right.</p>
                    <p class="wrong" id="immersive-wrong-1">Oops! Real-time VR really immersive, it aims to be as transportative as possible. Try again.</p>
                    <p class="right" id="immersive-right-1">Real-time VR is as immersive as it gets.</p>
                    <div class="immersive-cont">
                        <p class="immersive-less" id="emm-1">NOT<br>IMMERSIVE</p>
                        <p class="immersive-more" id="emm-2">VERY<br>IMMERSIVE</p>
                    </div>
                    <div class="slider-container">
                        <div id="slider-1"></div>
                    </div>
                    <a class="btn btn-default btn-find hvr-radial-out check-btn" id="immersive-check-1">SUBMIT</a>
                    <br>
                    <a onclick="return show('Page16','Page18');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                    <a onclick="return show('Page19','Page18');" class="btn btn-default btn-next hvr-radial-out reveal" id="immersive-comp-1" style="opacity: 0;">NEXT</a>
                </div>

                <div id="Page19" class="not-yet">
                    <p class="test-info">In general how interactive do you think 360 video is?<br>Have a go on the scale below until you get it right.</p>
                    <p class="wrong" id="immersive-wrong-2">Oops! 360 video isn't that interactive, it often has no interactivity. Try again.</p>
                    <p class="right" id="immersive-right-2">Yes! 360 is usually not very interactive.</p>
                    <div class="immersive-cont">
                        <p class="immersive-less" id="emm-3">NOT<br>INTERACTIVE</p>
                        <p class="immersive-more" id="emm-4">VERY<br>INTERACTIVE</p>
                    </div>
                    <div class="slider-container">
                        <div id="slider-2"></div>
                    </div>
                    <a class="btn btn-default btn-find hvr-radial-out check-btn" id="immersive-check-2">SUBMIT</a>
                    <br>
                    <a onclick="return show('Page18','Page19');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                    <a href="progress.php" class="btn btn-default btn-next hvr-radial-out reveal" id="immersive-comp-2">NEXT</a>
                </div>

            </div>

        </div>
    </div>
</div>
<img src="./images/resize-white.png" width="100" id="idea-logo">
<a href="https://idea.org.uk/"><div id="garter-stamp"></div></a>
<div class="part-container">
    <div class="part-bar" style="width: 16%;"></div>
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