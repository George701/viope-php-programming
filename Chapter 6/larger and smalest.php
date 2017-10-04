<?php

$first = 11;

$second = 2;

$third = 6;



//Your code here
function largest($a,$b,$c){
    if($a<$b){
        if($b<$c){
            return $c;
        }
        else{
            return $b;
        }
    }
    else{
        if($a<$c){
            return $c;
        }
        else{
            return $a;
        }
    }
}
function smallest($a,$b,$c){
    if($a>$b){
        if($b>$c){
            return $c;
        }
        else{
            return $b;
        }
    }
    else{
        if($a>$c){
            return $c;
        }
        else{
            return $a;
        }
    }
}

$largest_number = largest($first, $second, $third);

$smallest_number = smallest($first, $second, $third);



echo "From the numbers you typed, the largest was $largest_number";

echo " and smallest $smallest_number";



?>