<?php

require '../vendor/autoload.php';

session_start();

if(!isset($_SESSION['oauth2_access_token']) && !isset($_SESSION['oauth2_id_token'])) { 
    header('Location: https://idea-coding-solutions.herokuapp.com/login.php');
    exit;
}


    error_reporting(E_ALL);
    ini_set("display_errors", 1);
?>

<script>
 localStorage.setItem('oauth2_access_token', '<?php echo $_SESSION['oauth2_access_token'];?>');
</script>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <title>iDEA - Coding Solutions</title>
        <meta name="description" content="">
        <script src="js/vendor/modernizr-custom.js"></script> 
        <style>
            .monitor,.monitor-display{position:relative;width:250px}.monitor{margin:0 auto 20px;height:185px}.monitor-display{background-color:#000;border-radius:10px;height:150px;z-index:1;-webkit-transform:scale(0) skew(-5deg) translateY(50%) translateZ(0);transform:scale(0) skew(-5deg) translateY(50%) translateZ(0);-webkit-animation:retina .3s 1s cubic-bezier(.39,.575,.565,1) forwards;animation:retina .3s 1s cubic-bezier(.39,.575,.565,1) forwards}.monitor-display::after{background-color:#fff;border-radius:50%;content:"";position:absolute;top:5px;left:50%;margin-left:-2px;width:4px;height:4px}.monitor-display_retina{background-color:#c84378;position:absolute;top:15px;left:15px;width:220px;height:120px;overflow:hidden}.monitor-display_retina .terminal{background-color:#eee;border-radius:2px;position:absolute;top:10px;left:10px;width:200px;height:100px;-webkit-transform:scale(0) skew(5deg) translateY(50%) translateZ(0);transform:scale(0) skew(5deg) translateY(50%) translateZ(0);-webkit-animation:terminal .3s 1.4s cubic-bezier(.39,.575,.565,1) forwards;animation:terminal .3s 1.4s cubic-bezier(.39,.575,.565,1) forwards}.monitor-display_retina .terminal::after,.monitor-display_retina .terminal::before{border-radius:50%;content:"";position:absolute;width:3px;height:3px}.monitor-display_retina .terminal::after{background-color:#D92716;top:2px;left:4px}.monitor-display_retina .terminal::before{background-color:#2ECC71;top:2px;left:10px}.monitor-display_retina .terminal-left,.monitor-display_retina .terminal-right{background-color:#373032;position:absolute;bottom:1px;height:91px}.monitor-display_retina .terminal-left{left:1px;width:50px}.monitor-display_retina .terminal-left>ul{margin:0;padding:0;list-style-type:none}.monitor-display_retina .terminal-left>ul li{background-color:#fff;margin:5px;width:30px;height:3px}.monitor-display_retina .terminal-left>ul li:nth-child(2){background-color:#eee;width:20px}.monitor-display_retina .terminal-left>ul li:nth-child(3){background-color:#2ECC71;width:40px}.monitor-display_retina .terminal-left>ul li:nth-child(5){background-color:#2ECC71;width:10px}.monitor-display_retina .terminal-right{left:52px;width:147px;overflow:hidden}.monitor-display_retina .terminal-right_ani{width:100%;height:100%;-webkit-animation:scrollT 6s 2s ease-in-out infinite;animation:scrollT 6s 2s ease-in-out infinite}.monitor-display_retina .terminal-right ul{margin:0;padding:0;list-style-type:none}.monitor-display_retina .terminal-right ul li{display:inline-block;float:left;background-color:#fff;margin:5px 3px;width:30px;height:3px}.monitor-display_retina .terminal-right ul li:nth-child(2n+2){background-color:#9BCEFE;width:40px}.monitor-display_retina .terminal-right ul li:nth-child(4n+3){background-color:#F3BD03;width:40px}.monitor-bottom{position:relative;margin:0 auto;width:100px;height:35px;-webkit-transform:scale(0) skew(5deg) translateY(-50%) translateZ(0);transform:scale(0) skew(5deg) translateY(-50%) translateZ(0);-webkit-animation:bottom .3s 1.15s cubic-bezier(.39,.575,.565,1) forwards;animation:bottom .3s 1.15s cubic-bezier(.39,.575,.565,1) forwards}.monitor-bottom::after,.monitor-bottom::before{content:"";position:absolute}.monitor-bottom::after{background-color:#ccc;bottom:0;left:0;width:100%;height:6px}.monitor-bottom::before{border-bottom:100px solid #eee;border-left:50px solid transparent;border-right:50px solid transparent;height:0;bottom:0;left:0;width:50px}@-webkit-keyframes scrollT{50%{-webkit-transform:translateY(-100%) translateZ(0);transform:translateY(-100%) translateZ(0)}}@keyframes scrollT{50%{-webkit-transform:translateY(-100%) translateZ(0);transform:translateY(-100%) translateZ(0)}}@-webkit-keyframes retina{100%{-webkit-transform:scale(1) skew(0) translateY(0) translateZ(0);transform:scale(1) skew(0) translateY(0) translateZ(0)}}@keyframes retina{100%{-webkit-transform:scale(1) skew(0) translateY(0) translateZ(0);transform:scale(1) skew(0) translateY(0) translateZ(0)}}@-webkit-keyframes bottom{100%{-webkit-transform:scale(1) skew(0) translateY(0) translateZ(0);transform:scale(1) skew(0) translateY(0) translateZ(0)}}@keyframes bottom{100%{-webkit-transform:scale(1) skew(0) translateY(0) translateZ(0);transform:scale(1) skew(0) translateY(0) translateZ(0)}}@-webkit-keyframes terminal{100%{-webkit-transform:scale(1) skew(0) translateY(0) translateZ(0);transform:scale(1) skew(0) translateY(0) translateZ(0)}}@keyframes terminal{100%{-webkit-transform:scale(1) skew(0) translateY(0) translateZ(0);transform:scale(1) skew(0) translateY(0) translateZ(0)}}
        </style>
        <link rel="stylesheet" type="text/css" href="css/style.min.css">
    </head>
    <body>
        <!--[if lt IE 10]>
            <div style="background-color: rgb(200,67,120); position: absolute; top: 0; left: 0; width: 100%; height: 100%; text-align: center; z-index: 9999;">
                <p class="browsehappy" style="color: #fff; margin-top: 200px;">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" style="color: #000;">upgrade your browser</a> to improve your experience.</p>
            </div>
            <style type="text/css">
                #main {
                    display: none;
                    visibility: hidden;
                }
            </style>
        <![endif]-->

        <?php 
            include 'partials/question_panel.php';
        ?>

        <main class="main" role="main">
            <a id="gater" href="https://idea.org.uk/" target="_blank">
                 <img src="img/iDEA.png" alt="logo">
            </a>

            <?php 
                include 'partials/step_panel.php';
            ?>

        </main>

        <div id="loader" class="progress">
            <div class="progress-bar">
                <div></div>
            </div>
        </div>
        
        <div class="resize">
            <div class="resize-text">
                <p>Please view in</p>
                <p>landscape mode</p>
            </div>
        </div>
        
        <div class="psCenter">
            <svg id="check" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMax meet" viewBox="0 0 205.405 205.405" style="overflow: visible;">
                <circle id="circleCheck" fill="#2ECC71" cx="102.702" cy="102.703" r="102.702" />
                <path id="tick" fill="none" stroke="#F6F6F6" stroke-width="24" stroke-miterlimit="10" d="M48.94 105.744l32.72 32.718 76.585-76.586" />
            </svg>
        </div>
        
        <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
                
        <script src="js/scripts.js"></script>
        
        <script src="js/app.min.js"></script>

    </body>
</html>