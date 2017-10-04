<?php

    $absolute_value=$_GET["number"];
    $number=$_GET["number"];
    if($absolute_value<0){
        $absolute_value=$absolute_value*(-1);
    }

    echo "The absolute value of the number $number is $absolute_value";

?>
<?php
    $absolute_value=$_GET["number"];
    $number=$_GET["number"];
    echo "The absolute value of the number $number is ".abs($absolute_value);
?>