<?php

session_start();

$state = hash('sha256', microtime(true) . rand());
$_SESSION['oauth2_state'] = $state;

$params = [
    'response_type' => 'code',
    'client_id' => getenv('COLOURS_BADGE_CLIENT_ID'),
    'redirect_uri' => getenv('COLOURS_BADGE_REDIRECT_URI'),
    'scope' => 'openid',
    'state' => $state,
    'prompt' => 'none'
];

$authUrl = 'https://idea.eu.auth0.com/authorize?' . http_build_query($params);

header("Location: $authUrl");