<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 0);

// SMART CONFIGURATION: Detect if running locally or on server
$isLocal = false;
if (php_sapi_name() === 'cli' || 
    (isset($_SERVER['HTTP_HOST']) && ($_SERVER['HTTP_HOST'] == 'localhost:8000' || $_SERVER['REMOTE_ADDR'] == '127.0.0.1' || $_SERVER['REMOTE_ADDR'] == '::1' || strpos($_SERVER['REMOTE_ADDR'], '192.168.') === 0))) {
    $isLocal = true;
}
?>