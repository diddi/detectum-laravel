<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

try {
    $key = 'base64:'.base64_encode(random_bytes(32));
    $envFile = __DIR__.'/../.env';
    $envContent = file_get_contents($envFile);
    $envContent = preg_replace('/APP_KEY=.*/', 'APP_KEY='.$key, $envContent);
    file_put_contents($envFile, $envContent);
    echo "Applicatie key gegenereerd: " . $key;
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
