<?php
session_start();
ob_start();

include_once "connect.php";

if (!empty($_SESSION['loginID'])) {
    $loginID = $_SESSION['loginID'];

    if ($stmt = $conn->prepare("UPDATE users SET status = 0 WHERE code = ?")) {
        $stmt->bind_param("s", $loginID);
        $stmt->execute();
        $stmt->close();
    }
}

// Destroy session data completely
$_SESSION = [];

if (ini_get('session.use_cookies')) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params['path'],
        $params['domain'],
        $params['secure'],
        $params['httponly']
    );
}

session_destroy();

if (ob_get_length()) {
    ob_end_clean();
}

header("Location: index.php?msg=Logout successful");
exit;
?>
