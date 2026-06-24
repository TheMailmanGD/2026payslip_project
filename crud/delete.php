<?php
include_once "indexHeader.php";
?>
<?php
$sql = "UPDATE users SET status=0 WHERE id={$_POST['id']}";

//this is a hard delete, do not use
// $sql = "DELETE FROM users WHERE id={$_POST['id']}";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
?>
<?php
include_once "indexFooter.php";
?>