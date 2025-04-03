<?php
// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Define constants only if they are not already defined
if (!defined('SITEURL')) define('SITEURL', 'http://localhost/food-order/');
if (!defined('LOCALHOST')) define('LOCALHOST', 'localhost');
if (!defined('DB_USERNAME')) define('DB_USERNAME', 'root');
if (!defined('DB_PASSWORD')) define('DB_PASSWORD', '');
if (!defined('DB_NAME')) define('DB_NAME', 'food-order');

// Database connection
$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if (!$conn) {
    die("Database Connection Failed: " . mysqli_connect_error());
}
?>
