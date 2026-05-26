<?php
$host = 'localhost';
$db = 'yr11_test_db';
$user = 'root';
$pass = '';

// not neccessary
date_default_timezone_set('Australia/Melbourne');

$conn = new mysqli($host, $user, $pass, $db);
//connection error handling
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
} else {
    echo ("connection successful. ");
}
?>