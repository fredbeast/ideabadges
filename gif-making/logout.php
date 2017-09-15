<?php 

session_start();

  //For oauth tokens later in process
if (!isset($_SESSION['oauth2_access_token'])) {
  die('{error: "Badge Error"}');
} else {
  $accesstoken = $_SESSION['oauth2_access_token'];
}

$ch = curl_init();
$file = 'https://idea.org.uk/api/result';

$headers = array();
$headers[] = 'Authorization: Bearer '.$accesstoken;
$headers[] = 'Content-Type:application/json';

curl_setopt($ch, CURLOPT_URL, $file);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt( $ch, CURLOPT_POSTFIELDS, '{"result":"pass"}' );
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
$data = curl_exec($ch);
curl_close($ch);
    // echo $data;

    //Now destroy the session
$_SESSION = array();
session_destroy();
header("Location: https://idea.org.uk");
?>
