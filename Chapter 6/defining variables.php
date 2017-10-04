<?php

$a = array (2,4,6);
$amount = count($a);
$animal = "dog";
$text="Between the quotations (\" and \") you can use the forward slash (\) to print special characters.";
$printing = implode(",",$a);

echo $text;

echo "I bought $amount {$animal}s";

echo "Array contents: $printing";

?>