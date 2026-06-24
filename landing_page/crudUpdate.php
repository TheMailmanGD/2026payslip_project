<?php
include_once "indexHeader.php";
?>
<h1>CRUD Update</h1>
<form action="update.php" method="post">
  <input type="text" name="update" placeholder="id to update">
  <input type="text" name="id" placeholder="id">
  <input type="text" name="code" placeholder="code">
  <input type="text" name="first_name" placeholder="first_name">
  <input type="text" name="last_name" placeholder="last_name">
  <input type="text" name="email" placeholder="email">
  <input type="text" name="status" placeholder="status">
  <input type="submit" value="Update">
</form>
<?php
include_once "indexFooter.php";
?>