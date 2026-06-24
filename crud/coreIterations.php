<?php
include_once "indexHeader.php";
?>

<h1>Iterations</h1>

<h3>should all print 1-10</h3>
<!-- for loop -->
<h3>for loop</h3>
<?php
//definition -> condition -> increment
for ($i = 1; $i <= 10; $i++) {
  echo ($i);
}
?>
<!-- while loop -->
<h3>while loop</h3>
<?php
$i = 0;
while ($i < 10) {
    $i++; 
    echo $i;
}
?>

<!-- do while loop -->
<h3>do while loop</h3>
<?php
$i = 1;

do {
  echo $i;
  $i++;
} while ($i <= 10);
?>
<?php
include_once "indexFooter.php";
?>