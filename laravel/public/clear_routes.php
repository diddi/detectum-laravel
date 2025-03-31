<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

try {
    require __DIR__.'/../vendor/autoload.php';
    $app = require_once __DIR__.'/../bootstrap/app.php';
    $kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
    
    echo "<pre>";
    echo "Routes cache opschonen...\n";
    $kernel->call('route:clear');
    echo "Routes cache opgeschoond.\n";
    echo "</pre>";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
