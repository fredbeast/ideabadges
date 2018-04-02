<?php

require '../vendor/autoload.php';

session_start();

if($_SESSION['authorised'] < 4){
    header('Location: badge-2.php');
}
$_SESSION['authorised'] = 4;

$client = new \GuzzleHttp\Client();

$res = $client->request('POST', 'https://idea.org.uk/api/progress', [
    'http_errors' => false,
    'headers' => [
        'Authorization' => 'Bearer ' . $_SESSION['oauth2_access_token']
    ],
    'json' => [
        'progress' => 3 // Badge start
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


                <div id="Page29" class="yet">
                    <h3 class="alone">The science behind a HMD</h3>
                    <hr>
                    <img src="./images/image-8.png" class="alone-pic center-block">
                    <a onclick="return show('Page30','Page29');" class="btn btn-default btn-next hvr-radial-out prog30" >NEXT</a>
                </div>

                <div id="Page30" class="not-yet">
                    <img src="./images/image-9.png" width="60%" class="center-block alone-pic">
                    <p>Inside a headset are <span> two screens </span> with a field of view of a 110 degrees. Meaning you can't see the edge of the screen in your peripheral vision, as you have when watching TV. Each screen displays a <span> slightly different image </span> for each eye. </p>
                    <a onclick="return show('Page29','Page30');" class="btn btn-default btn-back hvr-radial-out prog30b">BACK</a>
                    <a onclick="return show('Page31','Page30');" class="btn btn-default btn-next hvr-radial-out">NEXT</a>
                </div>
                <div id="Page31" class="not-yet">
                    <p>This is called <span> ‘stereoscopy’. </span> Stereoscopy is a powerful cue to the brain that certain objects are <span> farther away than others. </span> A stereoscopic display can be employed to effectively create a sense of presence.</p>
                    <a onclick="return show('Page30','Page31');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                    <a onclick="return show('Page32','Page31');" class="btn btn-default btn-next hvr-radial-out">NEXT</a>
                </div>
                <div id="Page32" class="not-yet">
                    <div class="circle center-block"></div>
                    <p id="stereo-text">Let's show you what <span> stereoscopy </span> is.</p>
                    <a onclick="return show('Page31','Page32');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                    <a class="btn btn-default btn-next hvr-radial-out" id="stereo-next">NEXT</a>
                    <a onclick="return show('Page33','Page32');" class="btn btn-default btn-next hvr-radial-out" id="stereo-comp">NEXT</a>
                </div>
                <div id="Page33" class="not-yet">
                    <p class="subtle">To learn more about how VR works, watch the snippet of video below</p>
                    <iframe width="100%" height=300" class="embed-vid" src="https://www.youtube.com/embed/zpTvoMjZDm4?rel=0&start=78&end=197" frameborder="0" allowfullscreen></iframe>
                    <a onclick="return show('Page32','Page33');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                    <a onclick="return show('Page34','Page33');" class="btn btn-default btn-next hvr-radial-out">NEXT</a>
                </div>
                <div id="Page34" class="not-yet">
                    <h3 class="alone">Will VR make me feel unwell?</h3>
                    <hr>
                    <img src="./images/image-10.png" class="alone-pic center-block">
                    <a onclick="return show('Page33','Page34');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                    <a onclick="return show('Page35','Page34');" class="btn btn-default btn-next hvr-radial-out">NEXT</a>
                </div>
                <div id="Page35" class="not-yet">
                    <p>In bad VR experiences, the frame rates <span> fluctuate </span> like a flickering TV and cause motion sickness. <span> Latency </span> also has an impact. Latency is the <span> time </span> a VR headset takes between receiving an <span> input </span> and <span> updating its display. </span> In real life, people experience effectively <span> 0 </span> latency. In VR, latency below <span> 20 </span> milliseconds is usually considered playable. <span> Higher latency </span> can cause motion sickness as your virtual view won't correspond with the position of your head.</p>
                    <a onclick="return show('Page34','Page35');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                    <a onclick="return show('Page36','Page35');" class="btn btn-default btn-next hvr-radial-out">NEXT</a>
                </div>
                <div id="Page36" class="not-yet">
                    <p>Basically VR sickness comes from a mismatch of sensory information - a <span> disconnection between your vision and your vestibular </span> (your inner-ear balance system). If you see something in VR and don't feel it, or if you feel something and don't see it, this causes the brain to go into a <span> protective </span> mode and you don’t feel right.  </p>
                    <a onclick="return show('Page35','Page36');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                    <a onclick="return show('Page37','Page36');" class="btn btn-default btn-next hvr-radial-out">NEXT</a>
                </div>
                <div id="Page37" class="not-yet">
                    <p class="test-info">What causes people to feel motion sickness in VR?</p>
                    <p class="subtle"> Select the answer</p>
                    <p class="wrong" id="sick-wrong">Oops! It's due to the screen not always updating at the same speed. Try again! </p>
                    <p class="right" id="sick-right-text">Wahey! Nice work.</p>
                    <div class="answer-box sickbox" id="sick-right"><div class="answer-box-fill"><div class="inverted-bar"><div class="outer">Fluctuating frame rate & high latency</div><div class="inner">Fluctuating frame rate & high latency</div></div></div></div>
                    <div class="answer-box sickbox"><div class="answer-box-fill"><div class="inverted-bar"><div class="outer">A fear of new technology</div><div class="inner">A fear of new technology</div></div></div></div>
                    <div class="answer-box sickbox"><div class="answer-box-fill"><div class="inverted-bar"><div class="outer">Having a screen strapped to your face</div><div class="inner">Having a screen strapped to your face</div></div></div></div>
                    <div class="answer-box sickbox"><div class="answer-box-fill"><div class="inverted-bar"><div class="outer">Graphic content</div><div class="inner">Graphic content</div></div></div></div>
                    <a class="btn btn-default btn-find hvr-radial-out check-btn" id="sick-check">SUBMIT</a>
                    <br>
                    <a onclick="return show('Page36','Page37');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                    <a onclick="return show('Page38','Page37');" class="btn btn-default btn-next hvr-radial-out reveal" id="sick-comp">NEXT</a>
                </div>
                <div id="Page38" class="not-yet">
                    <h3>Uses of VR</h3> <p>VR can be used in <span> all walks of life. </span> VR is used within education, entertainment,  healthcare, training, architectural visualisation, design and much more. VR’s ability to <span> transport </span> the user to another environment, and experience it as it they were actually there, ensures it has applications <span> far beyond gaming. </span> </p>
                    <a onclick="return show('Page37','Page38');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                    <a onclick="return show('Page39','Page38');" class="btn btn-default btn-next hvr-radial-out">NEXT</a>
                </div>

                <div id="Page39" class="not-yet">
                    <div id="Page39-content-1" class="yet">
                        <p class="test-info">Is VR just for gaming?</p>
                        <p class="subtle"> Select the answer</p>
                        <p class="wrong" id="gaming-wrong">Oops! VR is more useful than you think. Try again!</p>
                        <p class="right" id="gaming-right-text">Congratulations! VR is pretty useful right?</p>
                        <div class="answer-box gamingbox"><div class="answer-box-fill"><div class="inverted-bar"><div class="outer">Yes</div><div class="inner">Yes</div></div></div></div>
                        <div class="answer-box gamingbox" id="gaming-right"><div class="answer-box-fill"><div class="inverted-bar"><div class="outer">No</div><div class="inner">No</div></div></div></div>
                        <a class="btn btn-default btn-find hvr-radial-out check-btn" id="gaming-check">SUBMIT</a>
                        <br>
                        <a onclick="return show('Page38','Page39');" class="btn btn-default btn-back hvr-radial-out">BACK</a>
                        <a onclick="return show('Page39-content-2','Page39-content-1');" class="btn btn-default btn-next hvr-radial-out reveal" id="gaming-comp">NEXT</a>
                    </div>
                    <div id="Page39-content-2" class="not-yet">
                        <p class="test-info" style="margin-top: 10px">Select some of the industries VR is being used in:</p>
                        <p id="indcomp"><span>Nice work!</span><br>From enabling doctors to practice difficult surgeries, to being able to watch a football game from the sidelines, VR is used in a huge range of industries. </p>
                        <div id="indboxcont">
                            <div class="answer-box indbox"><div class="answer-box-fill"><div class="inverted-bar"><div class="outer">Education</div><div class="inner">Education</div></div></div></div>
                            <div class="answer-box indbox"><div class="answer-box-fill"><div class="inverted-bar"><div class="outer">Healthcare</div><div class="inner">Healthcare</div></div></div></div>
                            <div class="answer-box indbox"><div class="answer-box-fill"><div class="inverted-bar"><div class="outer">Advertising</div><div class="inner">Advertising</div></div></div></div>
                            <div class="answer-box indbox"><div class="answer-box-fill"><div class="inverted-bar"><div class="outer">Aerospace</div><div class="inner">Aerospace</div></div></div></div>
                            <div class="answer-box indbox"><div class="answer-box-fill"><div class="inverted-bar"><div class="outer">Real Estate</div><div class="inner">Real Estate</div></div></div></div>
                            <div class="answer-box indbox"><div class="answer-box-fill"><div class="inverted-bar"><div class="outer">Sports</div><div class="inner">Sports</div></div></div></div>
                        </div>
                        <a onclick="return show('Page39-content-1','Page39-content-2');" class="btn btn-default btn-next hvr-radial-out">BACK</a>
                        <a href="progress.php" class="btn btn-default btn-find btn-purple hvr-radial-out reveal" id="industry-comp">NEXT</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<img src="./images/resize-white.png" width="100" id="idea-logo">
<a href="https://idea.org.uk/"><div id="garter-stamp"></div></a>
<div class="part-container">
    <div class="part-bar" style="width: 48%;"></div>
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