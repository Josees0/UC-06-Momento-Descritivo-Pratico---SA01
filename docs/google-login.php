<?php
require_once __DIR__ . '/vendor/autoload.php';

session_start();

$CLIENT_ID = 'SEU_CLIENT_ID.apps.googleusercontent.com';

if (!isset($_POST['credential'])) {
    header('Location: logar.html?erro=token_ausente');
    exit;
}

$client = new Google_Client(['client_id' => $CLIENT_ID]);

$payload = $client->verifyIdToken($_POST['credential']);

if (!$payload) {
    header('Location: logar.html?erro=token_invalido');
    exit;
}

$googleId = $payload['sub'];          
$email    = $payload['email'];
$nome     = $payload['name'];
$foto     = $payload['picture'] ?? null;

$_SESSION['usuario_email'] = $email;
$_SESSION['usuario_nome']  = $nome;

header('Location: dashboard.php');
exit;