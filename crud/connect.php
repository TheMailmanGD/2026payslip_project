<?php
$host = '127.0.0.1';
$db = 'yr11_test_db';
$user = 'root';
$pass = '';

// not necessary
date_default_timezone_set('Australia/Melbourne');

mysqli_report(MYSQLI_REPORT_OFF);
$conn = @new mysqli($host, $user, $pass, $db);
if ($conn instanceof mysqli && $conn->connect_error) {
    echo 'Connection failed: ' . $conn->connect_error;
    $conn = null;
}
?>