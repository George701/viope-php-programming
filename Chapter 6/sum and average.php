<?php
$numberstring = $_GET['numberstring'];

$numberarray = explode(',',$numberstring);



// Your code here

$points = implode(' ', $numberarray);
$sum = array_sum($numberarray);
$average = array_sum($numberarray) / count($numberarray);

echo "Points were: $points\n";

echo "Sum of points: $sum\n";

echo "Average of points: $average";

?>
