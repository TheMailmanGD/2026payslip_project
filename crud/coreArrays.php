<?php
include_once "indexHeader.php";
?>
<h1>Arrays</h1>
<!-- 1 dimensional array -->
<?php
echo("<h3>one dimensional array</h3> <br>");
$array = array("thing1", "thing2", ["listthing1", "listthing2"]);
echo ("this should print thing1 ".$array[0]);
?>
<!-- 2 dimensional array (e.g. matrices) -->
<?php
echo("<h3>two dimensional array</h3> <br>");
$twodimensionalarray = array (
    array("fish", "cool", "amazing"),
    array("celeste", "1", "el dorado"),
    array("thomas", "sellprice", "$-5")
);
echo $twodimensionalarray[0][0]."is ".$twodimensionalarray[0][1]."and ".$twodimensionalarray[0][2];
echo("<br>");
echo $twodimensionalarray[2][0]."'s ".$twodimensionalarray[2][1]."is ".$twodimensionalarray[2][2];
echo("<br>");
?>
<!-- foreach loop (made for array specifically) -->
<?php
// foreach ($array as $x) {
//   echo $x;
// }
$array = array("thing1", "thing2", "thing3", "thing4");

echo("<h3>foreach loop with array, should print thing1-4 </h3><br>");
foreach ($array as $value) {
  echo $value;
  echo("<br>");
}
?>
<!-- while loop with array -->
<?php
echo("<h3>while loop with array, should print cheese, box, car, planet </h3><br>");
$stuff = ["cheese", "box", "car", "planet"];
$i = 0;
$length = count($stuff);

while ($i < $length) {
    echo $stuff[$i];
    echo("<br>");
    $i++;
}
?>
<?php
include_once "indexFooter.php";
?>