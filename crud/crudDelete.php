<?php
include_once "indexHeader.php";
?>
<h1>CRUD Delete</h1>

<form action="delete.php" method="post">
  <input type="text" name="id" placeholder="id">
  <input type="submit" value="Delete">
</form>
<?php
include_once "indexFooter.php";
?>