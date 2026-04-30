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

if ($isLocal) {
    // LOCAL CONFIGURATION (Your Computer)
    define('DB_HOST', '127.0.0.1');
    define('DB_USER', 'hotel_user');
    define('DB_PASS', 'HotelAppPass123++');
    define('DB_NAME', 'hotel_management');
}else {
    // LIVE CONFIGURATION (InfinityFree Server)
    define('DB_HOST', 'sql113.infinityfree.com');
    define('DB_USER', 'if0_41457820');
    define('DB_PASS', 'ermias9318');
    define('DB_NAME', 'if0_41457820_hotel_reservation_system');
}

?>