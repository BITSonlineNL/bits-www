<?php
// functions.php - Helper functions

function e($s) {
    return htmlspecialchars($s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function verify_recaptcha($token, $remote_ip, $secret) {
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $response = file_get_contents($url . '?secret=' . urlencode($secret) . '&response=' . urlencode($token) . '&remoteip=' . urlencode($remote_ip));
    $data = json_decode($response, true);
    
    if (isset($data['success']) && $data['success'] && ($data['score'] ?? 0) >= 0.5) {
        return true;
    }
    return false;
}

function validate_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Additional validation, CSRF, mail sending functions can be added here.
