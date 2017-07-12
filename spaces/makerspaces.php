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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Maker Spaces Badge</title>
    <link rel="icon" href="imgs/favicon/favicon.png" type="image/gif">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/hover.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">

    <style type="text/css">
        body {
            background-color: #FFFFFF;
            background-image: url();
            background-repeat: repeat;
        }

        .car {

            max-width: 95%;
            margin-top: 4px;
            margin-bottom: 36px;
            padding-left: 1px;



        }

        .car:hover {


            cursor: n-resize;

        }


        .carboxstyle {

            background: rgba(96, 196, 212, 0.02);
            max-width: 22%;
            position: relative;
            border: 10px solid rgba(220, 231, 253, 0.1);
            box-shadow: inset 0px 6px 20px 20px rgba(121, 160, 180, 0.24);

        }

        @media only screen and (max-width : 480px) {

            .car {

                max-width: 88%;
                margin-top: 28px;


            }
            .carboxstyle {

                background: rgba(96, 196, 212, 0.02);
                max-width: 83%;
                position: relative;
                border: 10px solid rgba(220, 231, 253, 0.1);
                box-shadow: inset 0px 6px 20px 20px rgba(121, 160, 180, 0.24);

            }

        }

        @media only screen and (min-width : 490px) and (max-width : 800px){

            .car {

                max-width: 95%;
                margin-top: 4px;
                margin-bottom: 36px;
                padding-left: 1px;



            }

            .carboxstyle {

                background: rgba(96, 196, 212, 0.02);
                max-width: 33%;
                position: relative;
                border: 10px solid rgba(220, 231, 253, 0.1);
                box-shadow: inset 0px 6px 20px 20px rgba(121, 160, 180, 0.24);

            }

        }

    </style>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body style="background-image:url(imgs/backgrounds/fablabbg.jpg)">
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

<div class="container-fluid text-center">
    <button id="musictoggle" class="glyphicon glyphicon-music text-left btn" style="background: transparent; border-radius: 20px" onClick="togglePlay()"></button>
    <h1 class="center-block hvr-wobble-bottom" style="margin-top: 50px !important; margin-bottom: 20px">Maker Spaces <br> Badge</h1>
    <p id="digitalfab" class="text-muted" style="margin-bottom: 28px; font-size: 17px"> Digital Fabrication </p>
    <p class="center-block carboxstyle img-circle"> <img src="imgs/caranimations/caranimationpadded.gif" class="center-block car" alt=""/> </p>


    <p>&nbsp;</p> <a onClick="fadeOut()">
        <button type="button" class="btn btn-info hvr-shrink hvr animated pulse infinite">START</button> </a>
    <p>&nbsp;</p>
    <p>&nbsp;</p>


</div>

<audio id="music" src="music/sitesong.mp3" autoplay></audio>
<div class="container-fluid">
    <div class="row">
        <div class="text-center col-md-12">
            <br><br>
            <h4 class="text-muted ft" >The Duke Of York Inspiring Digital Enterprise Award </h4>
            <p>Copyright &copy; 2017 &middot; All Rights Reserved &middot; <a href="https://idea.org.uk/">iDEA</a></p>
        </div>
    </div>
</div>


<script src="js/jquery-1.11.3.min.js"></script>

<script src="js/bootstrap.js"></script>

<script>
    $(document).ready(function(){

        $('#music').hide();

        document.getElementById("music").volume = 0.4;

        $('img.car').click(function(){
            $('img.car').addClass('animated bounce').one('animationend', function(){
                $(this).removeClass('animated bounce');


            })

        });




    });

    var myAudio = document.getElementById("music");
    var isPlaying = false;

    function fadeOut() {

        $('#music').animate({volume: 0}, 500, function(){
            location.assign('learningobjectives.php') });

    }

    function togglePlay() {
        if (isPlaying) {
            myAudio.pause()
            $('#musictoggle').css('color', "rgba(194, 215, 221, 0.53)");
        } else {
            myAudio.play();
            $('#musictoggle').css('color', "rgba(0, 180, 229, 0.60)");
        }
    };
    myAudio.onplaying = function() {
        isPlaying = true;
    };
    myAudio.onpause = function() {
        isPlaying = false;
    };




</script>
</body>
</html>