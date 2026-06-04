<?php
include_once "connect.php";
?>
<?php
$sql = mysqli_query($conn, "SELECT code FROM users WHERE code = '{$_POST['loginID']}'");
$sql2 = mysqli_query($conn, "SELECT pass FROM users WHERE pass = '{$_POST['password']}'");
if(mysqli_num_rows($sql) > 0 && mysqli_num_rows($sql2) > 0)
{
   echo("Successfully logged in!");
}
else
{
   if(mysqli_num_rows($sql) == 0)
   {
       echo "Login ID not found";
   }
   else
   {
       echo "Incorrect password";
   }
}

?>