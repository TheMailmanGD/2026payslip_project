<?php
include_once "indexHeader.php";
?>
<?php
$sql = "UPDATE users SET id='{$_POST['id']}', code='{$_POST['code']}', first_name='{$_POST['first_name']}', last_name='{$_POST['last_name']}', email='{$_POST['email']}', status='{$_POST['status']}' WHERE id={$_POST['update']}";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
?>
<?php
include_once "indexFooter.php";
?>