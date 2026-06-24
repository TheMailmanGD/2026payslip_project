<?php
session_start();

include_once "connect.php";

$sql = mysqli_query(
    $conn,
    "SELECT * FROM users
     WHERE code = '{$_POST['loginID']}'
     AND pass = '{$_POST['password']}'"
);

if (mysqli_num_rows($sql) > 0)
{
    $_SESSION['loginID'] = $_POST['loginID'];
    $_SESSION['session_logged'] = true;

    mysqli_query(
      $conn,
      "UPDATE users
      SET status = 1
      WHERE code = '{$_POST['loginID']}'"
    );

    
    header("Location: index.php");
    exit();
}
else
{
    header("Location: index.php");
    exit();
}
?>
