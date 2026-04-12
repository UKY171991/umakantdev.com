<?php

/**
 * standalone script to fix Laravel cache issues
 */

$cachePath = __DIR__ . '/../bootstrap/cache/';
$files = [
    'config.php',
    'routes-v7.php',
    'services.php',
    'packages.php',
    'events.php'
];

echo "<h1>Laravel Cache Fixer</h1>";

foreach ($files as $file) {
    if (file_exists($cachePath . $file)) {
        if (unlink($cachePath . $file)) {
            echo "✅ Deleted: $file<br>";
        } else {
            echo "❌ Failed to delete: $file (Check permissions)<br>";
        }
    } else {
        echo "ℹ️ $file does not exist.<br>";
    }
}

// Also try to run artisan command via shell as a fallback
echo "<h2>Running Artisan Commands...</h2>";
$output1 = shell_exec('php ../artisan config:clear 2>&1');
echo "<b>Config Clear:</b><br><pre>$output1</pre>";

$output2 = shell_exec('php ../artisan key:generate 2>&1');
echo "<b>Key Generate:</b><br><pre>$output2</pre>";

echo "<br><b>Try refreshing your homepage now: <a href='/'>Go to Home</a></b>";
