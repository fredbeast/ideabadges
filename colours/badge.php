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

if($_SESSION['authorised'] < 1){
    header('Location: start.php');
}
$_SESSION['authorised'] = 1;

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
<div id="loader"><img src="./images/Loader.gif" id="loadergif"> </div>
<div id="background" class="stripes">
    <div id="background-extra">
        <div id="background-light">
            <div class="container-fluid">
                <div class="row">

                    <div id="#wrapper" class="container">
                        <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 cont-mid text-center"style="overflow: inherit ; height: auto;">
                            <img src="./images/splat-1.svg" class="splat splat1" style="opacity: 1">
                            <img src="./images/splat-2.svg" class="splat splat2" style="opacity: 1">
                            <img src="./images/splat-3.svg" class="splat splat3" style="opacity: 1">
                            <img src="./images/splat-4.svg" class="splat splat4" style="opacity: 1">
                            <!-- INTRO -->
                            <div id="Page1" class="yet">
                                <div id="Page1-content-1" class="yet">
                                    <img src="./images/title.png" id="title" width="80%"  >
                                    <br>
                                    <h4>Welcome, <?=$user->name?></h4>
                                    <a class="btn btn-default btn-find btn-purple hvr-radial-out" onclick="return show('Page1-content-2','Page1-content-1');">CONTENTS</a>
                                    <br>
                                    <a href="progress.php" class="btn btn-default btn-next hvr-radial-out" id="beginning-btn">LET'S GO!</a>
                                </div>
                                <div id="Page1-content-2" class="not-yet">
                                    <h1>CONTENTS</h1>
                                    <h5>WHAT WE GET UP TO IN THIS BADGE</h5>
                                    <div class="row">
                                        <div class="col-xs-6 no-right"><img src="./images/about-1.svg" class="about-rotate" width="100%"></div>
                                        <div class="col-xs-6 no-left"><img src="./images/about-2.svg" class="about-rotate" width="100%"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6 no-right"><img src="./images/about-3.svg" class="about-rotate" width="100%"></div>
                                        <div class="col-xs-6 no-left"><img src="./images/about-4.svg" class="about-rotate" width="100%"></div>
                                    </div>
                                    <br>
                                    <a onclick="return show('Page1-content-1','Page1-content-2')" class="btn btn-default btn-next btn-purple hvr-radial-out">CLOSE</a>
                                </div>
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