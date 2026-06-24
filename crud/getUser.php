<?php
include_once "connect.php";

$id = intval($_GET['id']);
$query = "SELECT * FROM users WHERE id = $id";
$conn = new mysqli($host, $user, $pass, $db);
$result = mysqli_query($conn, $query);
if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    echo json_encode($row);
} else {
    echo json_encode(['error' => 'User not found']);
}
$conn->close();
?>