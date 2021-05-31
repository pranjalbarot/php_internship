<?php 
echo "numeric values.<br/>";
$arr = array('php','c','c++','java','Android'); 
echo count($arr)."<br/><br/>"; 
?>

<!-- key-value array count-->
<?php
echo "key values count";
$arr = array("C","php","c","android","php","java"); 
$newarr = array_count_values($arr);
foreach ($newarr as $key => $value) {
     echo "<br/>$key - <strong>$value</strong> "; 
     } 
     echo "<br/><br/>";
?>

<!-- sum of array -->
<?php 
echo "sum of arrays.<br/>";
$myarray = array(1,2,3,4,5); 
echo array_sum($myarray)."<br/><br/>";
?> 

<!-- array product -->
<?php 
echo 'array product.<br/>';
$myarray = array(1,2,3,4,5); 
echo array_product($myarray)."<br/><br/>";
?>

<!-- reverse array -->
<?php 
echo 'reverse array.<br/>';
$arr = array('c', 'c++', 'java', 'android', 'php'); 
$revarr = array_reverse($arr); 
print_r($revarr); 
echo "<br/><br/>"
?>

<!-- php is present or not in array -->
<?php 
echo "php is present or not. <br/>";
$arr = array('c', 'c++', 'java', 'android', 'php'); 
$temp = in_array('php',$arr); 
echo $temp."<br/><br/>"; 
?>
