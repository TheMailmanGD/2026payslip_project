<?php
include_once "indexHeader.php";
?>
<?php
$sql = mysqli_query($conn, "SELECT code FROM users WHERE code = '{$_POST['loginID']}'");
if(mysqli_num_rows($sql) > 0)
{
   echo ('<form action="index.php" method="post">
   <input type="text" name="password" placeholder="password">
   <input type="submit" value="Login">
    </form>;');
}
else
{
   echo "Login ID not found";
}

?>
<?php
include_once "indexFooter.php";
?>