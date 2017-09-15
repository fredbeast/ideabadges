<?php

session_start();

$state = hash('sha256', microtime(true) . rand()); // Generate a random state
$_SESSION['oauth2_state'] = $state; // Save the state

$params = [
    'response_type' => 'code',
    'client_id' => getenv('GIF_MAKING_BADGE_CLIENT_ID'),
    'redirect_uri' => getenv('GIF_MAKING_BADGE_REDIRECT_URI'),
    'scope' => 'openid',
    'state' => $state,
    'prompt' => 'none'
];

$authUrl = 'https://idea.eu.auth0.com/authorize?' . http_build_query($params);

header("Location: $authUrl"); // Redirect to Auth0
