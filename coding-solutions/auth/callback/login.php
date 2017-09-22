<?php
require '../../vendor/autoload.php';
use GuzzleHttp\Client;

session_start();

  //Declaring environment variables
  $client_id = getenv( 'CODING_SOLUTIONS_ID' );
  $client_secret = getenv( 'CODING_SOLUTIONS_CLIENT_SECRET' );
  $state = $_GET['state'];
  $code = $_GET['code'];

    if (!isset($code)) {
    exit('Failed to get an authorization code');
    }

      if (isset($state) && $state !== $_SESSION['oauth2_state']) { 
      // Check the state is valid
        session_destroy();
        exit('OAuth2 invalid state!');
      }

      $client = new \GuzzleHttp\Client();
      $res = $client->request('POST', 'https://idea.eu.auth0.com/oauth/token', [
        'form_params' => [
        'client_id' => $client_id,
        'client_secret' => $client_secret,
        'redirect_uri' => 'https://idea-coding-solutions.herokuapp.com/',
        'code' => $code,
        'grant_type' => 'authorization_code'
        ]
        ]);
      
      //Decode JSON response
      $json = json_decode($res->getBody());
      $_SESSION['oauth2_access_token'] = $json->access_token;
      $_SESSION['oauth2_id_token'] = $json->id_token;

      $client2 = new \GuzzleHttp\Client();
      $res2 = $client2->request('GET', 'https://idea.org.uk/api/user', [
            'headers' => [
              'Authorization' => 'Bearer ' . $_SESSION['oauth2_access_token']
            ]
        ]);
      print_r($_SESSION);

      header("Location: https://idea-coding-solutions.herokuapp.com/");

      exit;
?>