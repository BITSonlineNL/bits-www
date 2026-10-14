<?php
// === SEND OFFERTE – toevoegen aan project bitsonline.nl ===
$recaptcha_secret = "JOUW_SECRET_KEY";
$recaptcha_response = $_POST['g-recaptcha-response'] ?? '';
$verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptcha_secret}&response={$recaptcha_response}");
$captcha_result = json_decode($verify);

if (!$captcha_result->success || $captcha_result->score < 0.5) {
    echo "<script>document.getElementById('offerteMessage').innerHTML = 'reCAPTCHA mislukt. Probeer opnieuw.';</script>";
    exit;
}

if ($_POST) {
    $bedrijf = htmlspecialchars($_POST['bedrijf']);
    $contact = htmlspecialchars($_POST['contactpersoon']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $dienst = htmlspecialchars($_POST['dienst']);
    $beschrijving = htmlspecialchars($_POST['beschrijving']);

    $to = "info@bitsonline.nl";
    $subject = "Offerte-aanvraag: $dienst – $bedrijf";

    $message = "
    <h2>Nieuwe offerte-aanvraag</h2>
    <p><strong>Bedrijf:</strong> $bedrijf<br>
    <strong>Contact:</strong> $contact<br>
    <strong>E-mail:</strong> <a href='mailto:$email'>$email</a><br>
    <strong>Dienst:</strong> $dienst<br>
    <strong>Beschrijving:</strong><br>$beschrijving</p>
    <hr><small>Verzonden op " . date('d-m-Y H:i') . "</small>
    ";

    $headers = "MIME-Version: 1.0\r\nContent-type:text/html;charset=UTF-8\r\nFrom: $email\r\n";
    mail($to, $subject, $message, $headers);

    // Auto-reply
    $reply = "<h3>Beste $contact,</h3><p>Bedankt voor uw offerte-aanvraag voor <strong>$dienst</strong>. Ik stuur u binnen 24 uur een vrijblijvende offerte op maat.</p><p>Met vriendelijke groet,<br><strong>Dennis Bakker</strong><br>BITS – info@bitsonline.nl</p>";
    mail($email, "Offerte-aanvraag ontvangen – BITS", $reply, "From: noreply@bitsonline.nl");

    echo "<script>document.getElementById('offerteMessage').innerHTML = 'Bedankt! Offerte-aanvraag verzonden. U ontvangt een reply binnen 24 uur.';</script>";
}
?>