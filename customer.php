<?php
// Customer Satisfaction & Experience page for BITS Online
// Linked to projects array from homepage or include this file as standalone

$metrics = [
    ['label' => 'Avg. uptime delivered', 'value' => '99.984%'],
    ['label' => 'Deployment failures this year', 'value' => '0'],
    ['label' => 'Avg. resolution time', 'value' => '22 min'],
    ['label' => 'Returning clients', 'value' => '83%']
];

$testimonials = [
    [
        'project' => 'ERP Cloud Migration',
        'client' => 'CTO, Manufacturing Firm',
        'quote' => 'BITS rebuilt our entire network with zero downtime. I didn\'t even lose my coffee connection.',
        'rating' => 5
    ],
    [
        'project' => 'Edge Networking with OpenWRT',
        'client' => 'IT Manager, Logistics Group',
        'quote' => 'Rock solid VPN and monitoring. We went from chaos to calm.',
        'rating' => 4
    ],
    [
        'project' => 'Monitoring & Incident Automation',
        'client' => 'Ops Lead, SaaS Provider',
        'quote' => 'Incidents resolve themselves before anyone calls. That\'s witchcraft.',
        'rating' => 5
    ]
];

function e($s){ return htmlspecialchars($s, ENT_QUOTES|ENT_SUBSTITUTE, 'UTF-8'); }
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Customer Experience — BITS Online</title>
<style>
:root{--bg:#0b1220;--accent:#5eead4;--accent2:#60a5fa;--muted:#98a0b3}
body{margin:0;font-family:Inter,ui-sans-serif,system-ui;background:linear-gradient(180deg,var(--bg),#050b14);color:#e6eef8;}
.container{max-width:1100px;margin:0 auto;padding:28px}
h1,h2{margin-bottom:10px}
.hero{text-align:center;padding:60px 20px;background:radial-gradient(circle at top,var(--accent2) 0%,transparent 60%);}
.hero h1{font-size:36px;margin-bottom:10px}
.hero p{color:var(--muted)}
.metrics{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:16px;margin-top:30px}
.metric{background:rgba(255,255,255,0.03);padding:18px;border-radius:12px;text-align:center;border:1px solid rgba(255,255,255,0.05)}
.metric .val{font-size:28px;font-weight:700;color:var(--accent)}
.testimonials{margin-top:40px;display:grid;grid-template-columns:repeat(auto-fit,minmax(320px,1fr));gap:18px}
.card{background:rgba(255,255,255,0.02);border-radius:12px;padding:18px;border:1px solid rgba(255,255,255,0.04);position:relative}
.quote{font-style:italic;color:#dce5f3}
.client{color:var(--muted);font-size:14px;margin-top:10px}
.rating{color:var(--accent2);font-size:13px;margin-top:6px}
.process{margin-top:60px;text-align:center}
.steps{display:flex;flex-wrap:wrap;justify-content:center;gap:20px;margin-top:20px}
.step{background:rgba(255,255,255,0.02);padding:18px;border-radius:10px;max-width:240px;border:1px solid rgba(255,255,255,0.03)}
.linked-projects{margin-top:60px}
.linked-project{margin-bottom:10px}
.footer{text-align:center;margin-top:50px;padding:20px 0;color:var(--muted)}
.btn{background:linear-gradient(90deg,var(--accent),var(--accent2));color:#041027;padding:10px 16px;border:none;border-radius:8px;text-decoration:none;font-weight:600}
</style>
</head>
<body>
<div class="container">
    <section class="hero">
        <h1>Our systems work. So our clients sleep.</h1>
        <p>Real projects, measurable results, and a few happy humans.</p>
    </section>

    <section class="metrics">
        <?php foreach($metrics as $m): ?>
        <div class="metric">
            <div class="val"><?= e($m['value']) ?></div>
            <div class="small"><?= e($m['label']) ?></div>
        </div>
        <?php endforeach; ?>
    </section>

    <section class="testimonials">
        <?php foreach($testimonials as $t): ?>
        <div class="card">
            <div class="quote">“<?= e($t['quote']) ?>”</div>
            <div class="client">— <?= e($t['client']) ?> (<?= e($t['project']) ?>)</div>
            <div class="rating">
                <?php for($i=0;$i<$t['rating'];$i++) echo '●'; ?>
            </div>
        </div>
        <?php endforeach; ?>
    </section>

    <section class="process">
        <h2>How We Work</h2>
        <div class="steps">
            <div class="step">
                <h3>1. We audit what’s broken.</h3>
                <p class="small">Detailed review of your infra, logs, and all the things no one wants to read.</p>
            </div>
            <div class="step">
                <h3>2. We fix it.</h3>
                <p class="small">Patch, refactor, automate, and test until it refuses to break again.</p>
            </div>
            <div class="step">
                <h3>3. We automate it so you don’t call us again.</h3>
                <p class="small">We like you, but we prefer systems that heal themselves.</p>
            </div>
        </div>
    </section>

    <section class="linked-projects">
        <h2>Related Highlights</h2>
        <div class="linked-project">
            See how our uptime strategy powers <a href="index.php#migrate-erp">ERP Cloud Migration</a>.
        </div>
        <div class="linked-project">
            Our monitoring philosophy in action: <a href="index.php#monitoring">Incident Automation</a>.
        </div>
        <div class="linked-project">
            Network stability built on <a href="index.php#openwrt-edge">OpenWRT Edge Networking</a>.
        </div>
    </section>

    <div style="text-align:center;margin-top:40px">
        <a href="mailto:hello@bitsonline.nl" class="btn">Let’s improve your uptime</a>
    </div>
</div>
</body>
</html>