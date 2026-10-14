<!-- Sidebar toggle button -->
<button id="sidebarToggle">☰ Menu</button>
<div id="sidebarMenu">
    <button id="sidebarClose" class="btn" style="align-self:flex-end;margin-bottom:12px;">✕</button>
    <ul>
        <li><hr></li>
        <li><a href="/" class="ajax-link">Home</a></li>
        <li><a href="/portaal/klantportaal.php" class="ajax-link">Klantportaal</a></li>
        <li><a href="/customer.php" class="ajax-link">Customer</a></li>
        <li><a href="/offerte.php" class="ajax-link">Offerte</a></li>
        <li><a href="#menu_contact">Contact</a></li>
    </ul>
</div>
<div class="container">
<header class="header">
    <div class="logo">
        <img src="/assets/images/bits_3d_transparant.gif" alt="BITS Logo">
        <div>
            <div style="font-weight:700"><?= e($site['title']) ?></div>
            <div class="small"><?= e($site['tagline']) ?></div>
        </div>
    </div>
</header>
