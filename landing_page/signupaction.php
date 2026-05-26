<?php
include_once "connect.php";
?>
<?php
//create loginID here
$sql = "INSERT INTO users (id, code, pass, first_name, last_name, email, status) VALUES (NULL, '$loginID', '{$_POST['password']}', '{$_POST['first_name']}', '{$_POST['last_name']}', '{$_POST['email']}', '1')";
echo ("your login ID is: " . $_POST['loginID']);
?>