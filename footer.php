<section class="cta-contact">
  <div class="cta">
    <h2>Neem direct contact op</h2>
    <p>Heb je vragen? Wij helpen je graag verder!</p>
    <a href="mailto:info@bitsonline.nl" class="btn btn-primary">Stuur een e-mail</a>
    <a href="tel:+310612345678" class="btn btn-secondary">Bel ons nu</a>
  </div>
</section>

<footer class="footer">
    <div>© <?= date('Y') ?> <?= e($site['title']) ?> — built with mild contempt for downtime</div>
    <div class="small">Volg ons: <a href="https://github.com/d3nn1s8akk3r"><img src="/assets/images/svg/github-icon.svg" alt="GitHub"></a> · <a href="https://linkedin.com/company/bitsonlinenl"><img src="/assets/images/svg/linkedin-icon.svg" alt="LinkedIN"></a> · <a href="https://linkedin.com/company/bitsonlinenl"><img src="/assets/images/svg/facebook-icon.svg" alt="Facebook"></a> · <a href="https://wa.me/31649063785"><img src="/assets/images/svg/whatsapp-icon.svg" alt="WhatsApp"></a></div>
    <div class="small"><a href="/voorwaarden.php">Algemene voorwaarden</a> · <a href="/privacy.php">Privacyverklaring</a></div>
</footer>
</div> <!-- container -->
<!-- Canvas toggle -->
<button id="canvasToggle" title="Toggle Canvas" aria-pressed="true">Toggle Canvas</button>

<!-- Canvas (behind everything) -->
<canvas id="network-canvas" aria-hidden="true"></canvas>

<script src="/assets/js/main.js"></script>
<script src="/assets/js/main-handler.js"></script>
<script src="/assets/js/network-canvas.js"></script>