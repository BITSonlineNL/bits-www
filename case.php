<?php
require_once 'data.php';
require_once 'functions.php';

$id = $_GET['id'] ?? null;
if (!$id) {
    echo "<p>Geen case geselecteerd.</p>";
    exit;
}

// Search for the case in $sections
$found = null;
foreach ($sections as $section) {
    foreach ($section['items'] as $item) {
        if ($item['id'] == $id) {
            $found = $item;
            break 2;
        }
    }
}

if (!$found) {
    echo "<p>Case niet gevonden.</p>";
    exit;
}
?>

<div class="case-detail-modal">
    <button id="closeCaseBtn" class="close-btn">&times; Sluit</button>
    <h2><?php echo htmlspecialchars($found['title']); ?></h2>
    <div class="icon"><?php echo isset($found['icon']) ? htmlspecialchars($found['icon']) : '🗂️'; ?></div>
    <p><?php echo htmlspecialchars($found['summary']); ?></p>
    <?php if (!empty($found['description'])): ?>
        <p><?php echo htmlspecialchars($found['description']); ?></p>
    <?php endif; ?>
</div>
