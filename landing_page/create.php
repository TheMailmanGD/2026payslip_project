<?php
include_once "indexHeader.php";
?>
<?php
$sql = "INSERT INTO users (id, code, first_name, last_name, email, status) VALUES ({$_POST['id']}, '{$_POST['code']}', '{$_POST['first_name']}', '{$_POST['last_name']}', '{$_POST['email']}', '{$_POST['status']}')";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
<?php
include_once "indexFooter.php";
?>