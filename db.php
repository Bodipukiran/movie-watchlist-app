<?php
$host = "localhost";
$user = "root";
$pass = "YourNewPassword123";
$db   = "movie_watchlist";

// Enable error reporting for MySQL
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $conn = new mysqli($host, $user, $pass, $db);
    $conn->set_charset("utf8mb4");
} catch (Exception $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>