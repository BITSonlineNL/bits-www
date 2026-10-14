<?php
// sections.php
require_once 'functions.php';
require_once 'data.php';
?>

<main id="main">

<section class="hero" id="hero">
<canvas id="network-canvas"></canvas>
<div class="hero-bg">
	<div class="hero-bg-glow"></div>
	<div class="hero-bg-silhouette"></div> 
</div>


    <!-- Foreground Content -->
    <div class="hero-left">
        <h1>IT waarop je kunt bouwen en vertrouwen.</h1>
        <p class="small">Stabiel, veilig en zonder verrassingen. Samen bouwen we aan zekerheid en succes.</p>

        <div class="cta">
            <a href="#menu_sections" class="btn btn-primary">Onze diensten</a>
            <a href="#menu_contact" class="btn btn-primary">Let's Talk Tech</a>
        </div>
    </div>

    <!-- 3D Logo (Shocker) -->
    <div class="hero-shocker variant-orbit">
        <img src="/assets/images/bits2026-transparant.png" alt="BITS 3D Logo">
    </div>


</section>
<div class="hero-transition">
    <div class="hero-divider"></div>
</div>

<!-- About Section -->
<section id="menu_over" class="overons" style="margin-top:40px">
    <h2>Over BITS</h2>
    <div class="card-grid" style="justify-content:center;">
        <p><strong>BITS | Betrouwbare IT-infrastructuur en consultancy</strong></p>
        <p>Bij BITS geloven we dat een stabiele en veilige IT-infrastructuur de ruggengraat is van elk succesvol bedrijf...</p>
    </div>
</section>

<!-- News / RSS Section -->
<section id="menu_nieuws" class="nieuws" style="margin-top:40px">
 <h2 class="section-title">Laatste nieuws</h2> 
    <?php include 'rss.php'; ?>
</section>

<!-- Dynamic Sections with Cards -->
<?php foreach($sections as $section): ?>
<section id="<?= e($section['id']) ?>" style="margin-top:40px">
    <h2><?= e($section['title']) ?></h2>
    <div class="grid">
        <?php foreach($section['items'] as $item): ?>
        <article class="card" data-case-id="<?= $item['id'] ?>" tabindex="0">
            <div class="icon"><?= $item['icon'] ?? '🗂️' ?></div>
            <h3><?= $item['title'] ?></h3>
            <p><?= $item['summary'] ?></p>
        </article>
        <?php endforeach; ?>
    </div>
</section>
<?php endforeach; ?>

<!-- Contact Section -->
<section id="menu_contact" class="contact" style="margin-top:40px">
    <h2>Contact / Vraag een Offerte Aan</h2>
    <?php if (!empty($offerte_message)): ?>
        <div class="small" style="margin-bottom:12px;color:var(--accent2);"><?php echo htmlspecialchars($offerte_message); ?></div>
    <?php endif; ?>
    <div class="card-grid" style="justify-content:center;">
        <form id="offerteForm" method="POST" action="ok" class="card" style="flex:1; max-width:600px; padding:24px; gap:12px; display:flex; flex-direction:column;">
            <input type="text" name="bedrijf" placeholder="Bedrijfsnaam *" required>
            <input type="text" name="contactpersoon" placeholder="Contactpersoon *" required>
            <input type="email" name="email" placeholder="E-mail *" required>
            <select name="dienst" required>
                <option value="">Gewenste dienst *</option>
                <option value="Cloud migratie (Azure/VMware)">Cloud migratie (Azure/VMware)</option>
                <option value="Netwerk & beveiliging">Netwerk & beveiliging</option>
                <option value="Volledig systeembeheer">Volledig systeembeheer</option>
                <option value="IT-ondersteuning abonnement">IT-ondersteuning abonnement</option>
                <option value="Anders">Anders</option>
            </select>
            <textarea name="beschrijving" rows="4" placeholder="Korte beschrijving van uw situatie"></textarea>
            <div style="margin:12px 0; font-size:14px;">
                <label style="display:flex; align-items:center; color:#fff;">
                    <input type="checkbox" name="privacy" required style="margin-right:8px;">
                    Ik ga akkoord met de <a href="#privacy" style="color:var(--accent2); text-decoration:underline;">privacyverklaring</a>
                </label>
            </div>
            <input type="hidden" name="offerte_nonce" value="<?php echo time(); ?>">
            <button class="btn btn-primary" type="submit" style="align-self:flex-start;">Verstuur</button>
        </form>
    </div>
</section>
</main>

<!-- Modal container -->
<div id="caseModal" style="display:none; position:fixed; inset:0; background:rgba(0,0,0,0.8); justify-content:center; align-items:flex-start; z-index:1000; overflow:auto; padding:24px;">
    <div style="background:#fff; padding:24px; max-width:800px; width:100%; position:relative;">
        <button onclick="closeCase()" style="position:absolute;top:12px;right:12px;">✖️</button>
        <h2 id="caseTitle">Titel</h2>
        <p id="caseDescription"></p>
        <div id="mainVisualContainer"></div>
        <div id="thumbnailsContainer" style="display:flex; gap:8px; margin-top:12px;"></div>
    </div>
</div>

<script>
const allItems = {};
<?php foreach ($sections as $section): ?>
<?php foreach ($section['items'] as $item): ?>
allItems["<?= $item['id'] ?>"] = <?= json_encode($item, JSON_HEX_TAG|JSON_HEX_APOS|JSON_HEX_QUOT|JSON_HEX_AMP) ?>;
<?php endforeach; ?>
<?php endforeach; ?>

// Card click → open modal
document.querySelectorAll('.card[data-case-id]').forEach(card => {
    card.addEventListener('click', () => {
        const id = card.dataset.caseId;
        const data = allItems[id];
        if (!data) return alert('Case niet gevonden');

        document.getElementById('caseTitle').innerText = data.title;
        document.getElementById('caseDescription').innerText = data.description || data.summary || '';

        const container = document.getElementById('mainVisualContainer');
        const thumbs = document.getElementById('thumbnailsContainer');
        container.innerHTML = '';
        thumbs.innerHTML = '';

        if (data.visuals) {
            data.visuals.forEach((v, idx) => {
                if (idx === 0) container.innerHTML = renderVisual(v); // main visual
                const thumb = document.createElement('img');
                thumb.src = v.thumb || v.src;
                thumb.alt = v.alt || '';
                thumb.style.width = '80px';
                thumb.style.cursor = 'pointer';
                thumb.onclick = () => container.innerHTML = renderVisual(v);
                thumbs.appendChild(thumb);
            });
        }

        document.getElementById('caseModal').style.display = 'flex';
    });
});

function renderVisual(v) {
    if (v.type === 'image') return `<img src="${v.src}" alt="${v.alt}" style="max-width:100%; margin-bottom:12px;">`;
    if (v.type === 'video') return `<video src="${v.src}" controls style="max-width:100%; margin-bottom:12px;"></video>`;
    return '';
}

function closeCase() {
    document.getElementById('caseModal').style.display = 'none';
}
</script>
