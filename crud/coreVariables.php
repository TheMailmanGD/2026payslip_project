<?php
include_once "indexHeader.php";
?>

<h1>Variables</h1>
<!-- how to write html inside php -->
 <?php
 echo ("<h3>this is how you write HTML inside PHP tag</h3>");
 $hello = "Hello World";
 print("$hello"); //both using quotes and not using quotes work
 $x = 5;
 echo ("<br>The square of $x is " . $x**2);
 // could have used $x in the following lines if $x was not needed anymore
 $y = 3;
 $yCubed = $y**3;
 echo ("<br>The cube of $y is " . $yCubed . ".");
 echo ("<br>$x + $y is " . $x + $y . ".");
 echo ("<br>$x - $y is " . $x - $y . ".");
 echo ("<br>$x * $y is " . $x * $y . ".");
 echo ("<br>$x / $y is " . $x / $y . ".");
 echo ("<br>$x / $y rounded to the nearest integer is " . round($x / $y, 0) . ".");
 echo ("<br>$x / $y rounded down is " . floor($x / $y) . ".");
 echo ("<br>$x / $y rounded up is " . ceil($x / $y) . ".");
 echo ("<br>$x / $y converted to an integer is  " . intval($x / $y) . ".");

 echo ("<br> 22/7 is " . round(22/7, 2) . " when rounded to 2 decimal places.");
 ?>

<?php
include_once "indexFooter.php";
?>