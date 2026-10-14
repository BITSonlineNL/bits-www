<?php
// index.php main entry point 

// error_reporting(E_ALL);
ini_set('display_errors', 1);


require_once 'config.php';
require_once 'functions.php';

$offerte_message = '';
$sections = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'form-handler.php';
}

?>

<!doctype html>
<html lang="nl">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?= e($site['title']) ?> — <?= e($site['tagline']) ?></title>
<meta name="description" content="BITS delivers expert IT consultancy, hybrid cloud solutions, and managed infrastructure services for businesses across the Netherlands. Build smarter, faster, and more secure systems.">
<meta name="keywords" content="BITS, IT consultancy, hybrid cloud, IT infrastructure, managed services, cloud computing, network management, IT Eindhoven, Docker, OpenWRT, Nginx, Cloudflare">
<meta name="robots" content="index, follow">

<!-- Open Graph -->
<meta property="og:title" content="BITS | IT Consultancy & Hybrid Cloud Solutions">
<meta property="og:description" content="BITS delivers expert IT consultancy, hybrid cloud solutions, and managed infrastructure services for businesses across the Netherlands.">
<meta property="og:url" content="https://bitsonline.nl/">
<meta property="og:type" content="website">
<meta property="og:site_name" content="BITS">
<meta property="og:image" content="https://bitsonline.nl/assets/images/bits_3d_transparant.gif">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="BITS | IT Consultancy & Hybrid Cloud Solutions">
<meta name="twitter:description" content="Expert IT consultancy and hybrid cloud services for secure, high-performance business infrastructure.">
<meta name="twitter:image" content="https://bitsonline.nl/assets/images/bits_3d_transparant.gif">
<meta name="twitter:creator" content="@bitsonline_nl">

<base href="https://bitsonline.nl/">
<link rel="canonical" href="https://bitsonline.nl/">
<link rel="stylesheet" href="/assets/css/style.css">
<link rel="icon" href="/favicon.ico">
<script src="https://www.google.com/recaptcha/api.js?render=<?= e($recaptcha_site_key) ?>"></script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "BITS",
  "url": "https://bitsonline.nl/",
  "logo": "https://bitsonline.nl/assets/images/bits_3d_transparant.gif",
  "sameAs": [],
  "contactPoint": [{
    "@type": "ContactPoint",
    "contactType": "customer service",
    "email": "info@bitsonline.nl",
    "url": "https://bitsonline.nl/contact"
  }]
}
</script>


</head>
<body>

<?php
include 'header.php';
include 'sections.php';
include 'footer.php';
?>


</body>
</html>
