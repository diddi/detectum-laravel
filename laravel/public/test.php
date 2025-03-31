<?php
echo "Laravel omgeving test";
echo "<br>PHP versie: " . phpversion();
echo "<br>Laravel root pad: " . realpath(__DIR__ . '/..');

// Test database verbinding
try {
    $db = new PDO('mysql:host=kahmockwpdb.mysql.db;dbname=kahmockwpdb', 'kahmockwpdb', 'mQ1Hh3vDeDLASmi0');
    echo "<br>Database verbinding succesvol!";
} catch (PDOException $e) {
    echo "<br>Database fout: " . $e->getMessage();
}
