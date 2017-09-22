<?php
session_start();

  $client_id =getenv( 'CODING_SOLUTIONS_ID' );
  $state = hash('sha256', microtime(true) . rand()); // Generate a random state
  $_SESSION['oauth2_state'] = $state; // Save the state

    $params = [
    'response_type' => 'code', 
    'client_id' => $client_id, 
    'redirect_uri' => 'https://idea-coding-solutions.herokuapp.com/auth/callback/login.php',
    'scope' => 'openid',
    'state' => $state
    ];

    $authUrl = 'https://idea.eu.auth0.com/i/oauth2/authorize?' . http_build_query($params);

  header("Location: $authUrl"); // Redirect to Auth0

exit;
?>
