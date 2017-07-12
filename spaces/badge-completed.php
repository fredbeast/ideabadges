<?php

require '../vendor/autoload.php';

session_start();

if($_SESSION['authorised'] == 4){

    $_SESSION['authorised'] = 0;

    $client = new \GuzzleHttp\Client();

    $res = $client->request('POST', 'https://idea.org.uk/api/result', [
        'http_errors' => false,
        'headers' => [
            'Authorization' => 'Bearer ' . $_SESSION['oauth2_access_token']
        ],
        'json' => [
            'result' => 'pass', // Or fail, if the badge was failed
        ]
    ]);

    $response = json_decode($res->getBody());

    header("Location: logout.php?return_url=$return_url");
}

else {
    $_SESSION['authorised'] = 0;
    header('Location: start.php');
}