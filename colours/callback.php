<?php

require '../vendor/autoload.php';

session_start();

$state = $_GET['state'];
$code = $_GET['code'];

if (!isset($code)) {
    exit('Failed to get an authorization code');
}

if (isset($state) && $state !== $_SESSION['oauth2_state']) {
    session_destroy();
    exit('This badge is currently under maintenance, please try again in 10 minutes.');
}

$client = new \GuzzleHttp\Client();

$res = $client->request('POST', 'https://idea.eu.auth0.com/oauth/token', [
    'form_params' => [
        'client_id' => getenv('COLOURS_BADGE_CLIENT_ID'),
        'client_secret' => getenv('COLOURS_BADGE_CLIENT_SECRET'),
        'redirect_uri' => getenv('COLOURS_BADGE_REDIRECT_URI'),
        'code' => $code,
        'grant_type' => 'authorization_code'
    ]
]);

$json = json_decode($res->getBody());

$_SESSION['oauth2_access_token'] = $json->access_token;
$_SESSION['oauth2_id_token'] = $json->id_token;

$_SESSION['authorised'] = 1;

header('Location: badge.php');