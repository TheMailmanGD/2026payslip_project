<?php
session_start();

include_once "connect.php";

error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = new mysqli($host, $user, $pass, $db);

$error = "";

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$first_name = $conn->real_escape_string($_POST['first_name'] ?? '');
$last_name = $conn->real_escape_string($_POST['last_name'] ?? '');
$email = $conn->real_escape_string($_POST['email'] ?? '');

$countQuery = "SELECT COUNT(*) AS total FROM users";
$countResult = mysqli_query($conn, $countQuery);
if (!$countResult) {
    die('Count query error: ' . mysqli_error($conn));
}
$countRow = mysqli_fetch_assoc($countResult);
$new = intval($countRow['total']) + 1;

function generateCode(mysqli $conn, string $last_name): string
{
    $letters = strtoupper(substr($last_name, 0, 3));

    while (strlen($letters) < 3) {
        $letters .= "X";
    }

    $escapedLetters = $conn->real_escape_string($letters);
    $query = "SELECT code FROM users WHERE code LIKE '$escapedLetters%' ORDER BY code DESC LIMIT 1";
    $result = mysqli_query($conn, $query);
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $existingCode = $row['code'];
        if (!empty($existingCode) && preg_match('/^' . preg_quote($letters, '/') . '(\d+)$/', $existingCode, $matches)) {
            $nextNumber = intval($matches[1]) + 1;
            return $letters . str_pad($nextNumber, 4, "0", STR_PAD_LEFT);
        }
    }

    return $letters . '0001';
}

$code = generateCode($conn, $last_name);

$sql = "INSERT INTO users (id, code, first_name, last_name, email, pass, status)\n        VALUES ($new, '$code', '$first_name', '$last_name', '$email', 'pass', '1')";

if (!mysqli_query($conn, $sql)) {
    die('Insert error: ' . mysqli_error($conn));
}

$_SESSION['loginID'] = $code;

$conn->close();

header("Location: display_loginid.php");
exit();