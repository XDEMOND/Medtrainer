<?php

require 'interface.php';
require 'cacheFactory.php';

$env = getenv('APP_ENV') ?: 'development';

try {
    $cache = CacheFactory::create($env);
    $userData = ['name' => 'Demian'];
    $cacheKey = 'user_1';

    if (!$cache->set($cacheKey, $userData)) {
        throw new RuntimeException("Failed to cache data for key: $cacheKey");
    }

    // Verificar lectura
    $retrieved = $cache->get($cacheKey);
    $status = ($retrieved === $userData) ? '✅' : '⚠️';

    echo "\nCache System Status\n";
    echo "==================\n";
    echo "Environment: $env\n";
    echo "Cache Type: " . get_class($cache) . "\n";
    echo "Operation: SET/GET\n";
    echo "Key: $cacheKey\n";
    echo "Status: $status\n";
    echo "Stored Data: " . json_encode($userData) . "\n";
    echo "Retrieved Data: " . json_encode($retrieved) . "\n";
    
    if ($retrieved !== $userData && $env !== 'development') {
        echo "\nWARNING: Data integrity issue detected!\n";
    }

} catch (Throwable $e) {
    error_log("Cache error: " . $e->getMessage());
    echo "❌ Error: " . $e->getMessage() . "\n";
}