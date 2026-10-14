<section id="menu_offerte" style="padding:60px 20px; background:transparant; color:white; text-align:center;">
  <h2 style="margin-bottom:20px;">Vraag een Offerte Aan</h2>
  <p style="margin-bottom:30px; max-width:700px; margin:auto; font-size:16px;">
    Gratis en vrijblijvend – binnen 24 uur een scherpe prijs op maat. Optimalisatie bitsonline.nl.
  </p>

  <form id="offerteForm" action="send-offerte.php" method="POST" style="max-width:600px; margin:auto; background:white; color:#333; padding:30px; border-radius:10px; box-shadow:0 4px 20px rgba(0,0,0,0.2);">
    <div style="margin-bottom:16px;">
      <label for="bedrijf">Bedrijfsnaam *</label>
      <input type="text" id="bedrijf" name="bedrijf" required placeholder="BV Example" style="width:100%; padding:12px; border:1px solid #ddd; border-radius:6px; font-size:16px;">
    </div>

    <div style="display:flex; gap:10px; margin-bottom:16px;">
      <div style="flex:1;">
        <label for="contactpersoon">Contactpersoon *</label>
        <input type="text" id="contactpersoon" name="contactpersoon" required placeholder="Jan de Vries" style="width:100%; padding:12px; border:1px solid #ddd; border-radius:6px; font-size:16px;">
      </div>
      <div style="flex:1;">
        <label for="offerte_email">E-mail *</label>
        <input type="email" id="offerte_email" name="email" required placeholder="jan@bedrijf.nl" style="width:100%; padding:12px; border:1px solid #ddd; border-radius:6px; font-size:16px;">
      </div>
    </div>

    <div style="margin-bottom:16px;">
      <label for="dienst_offerte">Gewenste dienst *</label>
      <select id="dienst_offerte" name="dienst" required style="width:100%; padding:12px; border:1px solid #ddd; border-radius:6px; font-size:16px;">
        <option value="">Kies een dienst</option>
        <option value="Cloud migratie (Azure/VMware)">Cloud migratie (Azure/VMware)</option>
        <option value="Netwerk & beveiliging">Netwerk & beveiliging</option>
        <option value="Volledig systeembeheer">Volledig systeembeheer</option>
        <option value="IT-ondersteuning abonnement">IT-ondersteuning abonnement</option>
        <option value="Anders">Anders</option>
      </select>
    </div>

    <div style="margin-bottom:16px;">
      <label for="beschrijving">Korte beschrijving van uw situatie</label>
      <textarea id="beschrijving" name="beschrijving" rows="4" placeholder="Bijv. 25 werkplekken, huidige server aan vervanging toe..." style="width:100%; padding:12px; border:1px solid #ddd; border-radius:6px; font-size:16px;"></textarea>
    </div>

    <!-- reCAPTCHA -->
    <div class="g-recaptcha" data-sitekey="JOUW_SITE_KEY" data-action="offerte"></div>

    <div style="margin:20px 0; font-size:14px;">
      <label style="display:flex; align-items:center; color:#333;">
        <input type="checkbox" name="privacy" required style="margin-right:8px;">
        Ik ga akkoord met de <a href="#privacy" style="color:#00A3E0; text-decoration:underline;">privacyverklaring</a>
      </label>
    </div>

    <button type="submit" style="background:#00A3E0; color:white; padding:14px; border:none; border-radius:6px; cursor:pointer; font-weight:bold; font-size:17px; width:100%;">
      Vraag Offerte Aan
    </button>
  </form>

  <div id="offerteMessage" style="margin-top:20px; font-weight:bold; color:white; font-size:16px;"></div>
</section>