<?php

/**
 * One-Click Installer for ThinkBiz / UmakantDev
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);
set_time_limit(900); // 15 minutes

$baseDir = __DIR__ . '/../';
$cachePath = $baseDir . 'bootstrap/cache/';

echo "<html><head><title>System Installer</title><style>
    body { font-family: sans-serif; line-height: 1.6; padding: 20px; background: #f4f7f6; color: #333; }
    .container { max-width: 800px; margin: auto; background: #fff; padding: 30px; border-radius: 8px; shadow: 0 2px 10px rgba(0,0,0,0.1); }
    h1 { color: #2c3e50; border-bottom: 2px solid #eee; padding-bottom: 10px; }
    .success { color: green; font-weight: bold; }
    .error { color: red; font-weight: bold; }
    pre { background: #222; color: #eee; padding: 15px; border-radius: 4px; overflow-x: auto; font-size: 13px; }
    .btn { display: inline-block; background: #3498db; color: #fff; padding: 10px 20px; text-decoration: none; border-radius: 4px; margin-top: 20px; }
    .btn:hover { background: #2980b9; }
</style></head><body><div class='container'>";

echo "<h1>🚀 System Installation & Deployment</h1>";

function runCommand($cmd, $label) {
    echo "<h3>Running: $label...</h3>";
    $output = shell_exec($cmd . " 2>&1");
    echo "<pre>$output</pre>";
    return $output;
}

// 1. Env File
if (!file_exists($baseDir . '.env')) {
    echo "<h3>Setting up .env...</h3>";
    if (copy($baseDir . '.env.example', $baseDir . '.env')) {
        echo "<span class='success'>✅ Created .env from .env.example</span><br>";
    } else {
        echo "<span class='error'>❌ Failed to create .env file.</span><br>";
    }
}

// 2. Clear Bootstrap Cache
echo "<h3>Cleaning Bootstrap Cache...</h3>";
$cacheFiles = ['config.php', 'routes-v7.php', 'services.php', 'packages.php', 'events.php'];
foreach ($cacheFiles as $file) {
    if (file_exists($cachePath . $file)) {
        unlink($cachePath . $file);
        echo "✅ Removed $file<br>";
    }
}

// 3. Composer Install (if possible)
// runCommand("composer install --no-interaction --optimize-autoloader --no-dev", "Composer Install");

// 4. Artisan Commands
runCommand("php $baseDir" . "artisan key:generate", "Generating App Key");
runCommand("php $baseDir" . "artisan migrate --force", "Running Database Migrations");
runCommand("php $baseDir" . "artisan storage:link", "Linking Storage");
runCommand("php $baseDir" . "artisan config:cache", "Caching Configuration");
runCommand("php $baseDir" . "artisan view:clear", "Clearing Views");

echo "<hr>";
echo "<h2 class='success'>Installation Complete!</h2>";
echo "<p>Your application is now ready to use.</p>";
echo "<a href='/' class='btn'>Visit Homepage</a>";
echo " <a href='/install.php' class='btn' style='background:#7f8c8d'>Run Again</a>";

echo "</div></body></html>";
