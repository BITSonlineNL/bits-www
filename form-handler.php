<?php
// form-handler.php - Processes offerte form POST

require_once 'config.php';
require_once 'functions.php';

$offerte_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['offerte_nonce'])) {
    $bedrijf = trim($_POST['bedrijf'] ?? '');
    $contactpersoon = trim($_POST['contactpersoon'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $dienst = trim($_POST['dienst'] ?? '');
    $beschrijving = trim($_POST['beschrijving'] ?? '');
    $privacy = isset($_POST['privacy']);
    $recaptcha_token = $_POST['g-recaptcha-response'] ?? '';

    if (!verify_recaptcha($recaptcha_token, $_SERVER['REMOTE_ADDR'], $recaptcha_secret)) {
        $offerte_message = 'reCAPTCHA verification failed. Please try again.';
    } elseif (!$bedrijf || !$contactpersoon || !$email || !$dienst || !$privacy) {
        $offerte_message = 'Please fill in all required fields and accept the privacy statement.';
    } elseif (!validate_email($email)) {
        $offerte_message = 'Invalid email address.';
    } else {
        $to = $site['email'];
        $subject = 'Nieuwe Offerte Aanvraag';
        $body = "Bedrijf: $bedrijf\nContactpersoon: $contactpersoon\nEmail: $email\nDienst: $dienst\nBeschrijving: $beschrijving";
        $headers = "From: $email\r\nReply-To: $email\r\n";
        $sent = mail($to, $subject, $body, $headers);
        $offerte_message = $sent ? 'Bedankt! Uw aanvraag is verzonden.' : 'Failed to send your aanvraag.';
    }
}
