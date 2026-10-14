<?php
// RSS feed URL
$rss_url = "https://tweakers.net/feeds/mixed.xml"; // Replace with your feed URL

// Cache settings
$cache_file = __DIR__ . '/rss_cache.json';
$cache_time = 3600; // 1 hour

$rss_data = [];

// 1. If cache is valid → load from cache
if (file_exists($cache_file) && (time() - filemtime($cache_file)) < $cache_time) {
    $cached = file_get_contents($cache_file);
    $rss_data = json_decode($cached, true);
}

// 2. If cache is empty or invalid → refresh
if (empty($rss_data)) {
    $rss = @simplexml_load_file($rss_url);

    if ($rss === false) {
        if (file_exists($cache_file)) {
            // Fall back to stale cache if available
            $cached = file_get_contents($cache_file);
            $rss_data = json_decode($cached, true);
        } else {
            echo "<div class='content-section'><p class='error-message'>Fout bij het laden van de RSS-feed.</p></div>";
            exit;
        }
    } else {
        // Load and limit items
        $count = 0;
        foreach ($rss->channel->item as $item) {
            $rss_data[] = [
                'title' => (string) $item->title,
                'link' => (string) $item->link,
                'description' => (string) $item->description,
                'pubDate' => date("d M Y, H:i", strtotime((string) $item->pubDate))
            ];
            $count++;
            if ($count >= 6) break;
        }

        // Save new cache
        if (!empty($rss_data)) {
            file_put_contents($cache_file, json_encode($rss_data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
        }
    }
}
?>

<section id="nofollow" class="content-section"> 
   <div class="grid"> 
     <?php foreach ($rss_data as $item): ?> 
	<article class="card"> 
	   <h3 class="rss-title"> 
	      <a href="<?= htmlspecialchars($item['link']) ?>" target="_blank" rel="nofollow"> 
                <?= htmlspecialchars($item['title']) ?> 
              </a>
          </h3> 
          <p class="rss-description"><?= htmlspecialchars(strip_tags($item['description'])) ?></p>
          <p class="rss-date">Gepubliceerd op <?= $item['pubDate'] ?></p> 
        </article> 
      <?php endforeach; ?> 
     </div> <!-- CLOSE GRID --> 
   </section> <!-- CLOSE nofollow -->
