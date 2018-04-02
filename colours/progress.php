<?php

require '../vendor/autoload.php';

session_start();

if($_SESSION['authorised'] == 1){
    $_SESSION['authorised'] = 2;
    header('Location: badge-1.php');
}
else if($_SESSION['authorised'] == 2){
    $_SESSION['authorised'] = 3;
    header('Location: badge-2.php');
}
else if($_SESSION['authorised'] == 3){
    $_SESSION['authorised'] = 4;
    header('Location: badge-3.php');
}
else if($_SESSION['authorised'] == 4){
    $_SESSION['authorised'] = 5;
    header('Location: badge-4.php');
}
else if($_SESSION['authorised'] == 5){
    header('Location: badge-completed.php');
}
else{
    $_SESSION['authorised'] = 0;
    header('Location: start.php');
}

