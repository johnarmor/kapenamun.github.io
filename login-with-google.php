<?php
session_start();

require_once 'config/config.php';
require_once 'class/class.user.php';
require_once 'vendor/autoload.php';

$client = new Google_Client();
$client->setClientId('639302155323-d6j47vj013rt5jeu1017i8fgf892f4pt.apps.googleusercontent.com'); // Replace with your Google Client ID
$client->setClientSecret('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'); // Replace with your Google Client Secret
$client->setRedirectUri('http://localhost/CafeFinal/login.php'); // Update with the correct path
$client->addScope('email');
$client->addScope('profile');

if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token);

    $service = new Google_Service_Oauth2($client);
    $user_info = $service->userinfo->get();

    $gmailEmail = $user_info->getEmail();

    $user = new User();

    if ($user->check_login($gmailEmail, null, 'gmail')) {
        $_SESSION['user_email'] = $gmailEmail;
        header("location: index.php");
        exit;
    } else {
        echo "Google login failed. Please try again or use a different method.";
        exit;
    }
} else {
    $auth_url = $client->createAuthUrl();
    header("location: $auth_url");
}
?>
