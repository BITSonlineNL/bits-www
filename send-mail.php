<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // PHPMailer via Composer

session_start(); // voor flash messages

// Configuratie SMTP
$smtpHost = 'smtp.jouwdomein.nl';
$smtpPort = 587;
$smtpUser = 'info@bitsonline.nl';
$smtpPass = 'je_wachtwoord';
$fromEmail = 'info@bitsonline.nl';
$fromName = 'BITS Bakker IT Services';

// Formuliergegevens ophalen
$naam = $_POST['naam'] ?? '';
$email = $_POST['email'] ?? '';
$telefoon = $_POST['telefoon'] ?? '';
$dienst = $_POST['dienst'] ?? '';
$bericht = $_POST['bericht'] ?? '';

// Check reCAPTCHA
$recaptcha = $_POST['g-recaptcha-response'] ?? '';
$recaptchaSecret = '6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe';
$recapResponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptchaSecret&response=$recaptcha");
$recapResult = json_decode($recapResponse);

if(!$recapResult->success) {
    $_SESSION['form_message'] = 'reCAPTCHA validatie mislukt. Probeer opnieuw.';
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}

// PHPMailer
$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host = $smtpHost;
    $mail->SMTPAuth = true;
    $mail->Username = $smtpUser;
    $mail->Password = $smtpPass;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = $smtpPort;

    $mail->setFrom($fromEmail, $fromName);
    $mail->addAddress($fromEmail, $fromName);
    $mail->addReplyTo($email, $naam);

    $mail->isHTML(true);
    $mail->Subject = "Nieuw contactformulier bericht van $naam";
    $mail->Body = "
        <h2>Nieuw bericht van contactformulier</h2>
        <p><strong>Naam:</strong> $naam</p>
        <p><strong>E-mail:</strong> $email</p>
        <p><strong>Telefoon:</strong> $telefoon</p>
        <p><strong>Dienst:</strong> $dienst</p>
        <p><strong>Bericht:</strong><br>".nl2br(htmlspecialchars($bericht))."</p>
    ";

    $mail->send();
    $_SESSION['form_message'] = 'Bedankt! Je bericht is verzonden.';
} catch (Exception $e) {
    $_SESSION['form_message'] = "Bericht kon niet worden verzonden. Mailer Error: {$mail->ErrorInfo}";
}

// Redirect terug naar formulierpagina
header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;
