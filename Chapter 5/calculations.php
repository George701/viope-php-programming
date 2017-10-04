<?php
$first_number=$_GET["firstnumber"];
$second_number=$_GET["secondnumber"];

echo "The result of multiplication is: ".($first_number*$second_number)." ";

    if($second_number==0)
    {
        echo "The result of division is: You can't divide with a zero.";
    }
    else
    {
        echo "The result of division is: ".($first_number/$second_number);
    }
?>