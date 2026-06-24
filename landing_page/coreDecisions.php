<?php
include_once "indexHeader.php";
?>
<h1>Decisions</h1>
<!-- if elseif else -->
<?php
//if
echo("<h3>if statements </h3><br>");
$x = "cheese";
if ($x == "cheese") {
    echo("this should show");
}
echo("<br>");
if ($x == "fish") {
    echo("this should not show");
}
echo("<br>");
//elseif
echo("<h3>elseif statements</h3> <br>");
$x = 25;
if ($x < 20) {
    echo("this should not show");
}
elseif ($x > 20 and $x < 24) {
    echo("this should not show");
}
else {
    echo("this should show");
}
echo("<br>");
?>

<!-- switch case -->
<?php
echo("<h3>switch case, should print 3 </h3><br>");
$y = "3";

switch ($y) {
  case "1":
    echo "1";
    break;
  case "2":
    echo "2";
    break;
  case "3":
    echo "3";
    break;
  default:
    echo "this number is not 1, 2 or 3";
}
echo("<br>");
echo("<h3>match case(more readable switch, returns value in variable) should print 3</h3><br>");
$z = match ($y) {
  "1" => "1",
  "2" => "2",
  "3" => "3",
  default => "this number is not 1, 2 or 3"
};
echo($z);
?>
<?php
include_once "indexFooter.php";
?>