<?php
function newvalue(&$s)
{
    echo "String in the start: ".$s."</br>";
    $s = "New string";
}
$charstring = "first";

newvalue($charstring);

echo "String in the end: $charstring";



?>