<?php
    //Basic Syntax
    $Virtus_pro=array("Ramses666", "9pasha", "No[o]ne", "Lil", "Solo");

    echo $Virtus_pro[3]."</br>";

    //Associative Arrays
    $OG=array("N0tail"=>"Denmark",
                "ana"=>"Australia",
                "s4"=>"Sweden",
                "jerAx"=>"Finland",
                "Fly"=>"Israel");

    print_r($OG);
    echo "</br>";

    //Multidimensional Array
    $degrees=array(
        "Studies"=>array(
            " Batchelor",
            " Master",
            "Special Studies"
        ),
        "Ects"=>array(
            240,
            60,
            30
        )
    );

    echo $degrees['Studies'][0]."</br>";

    //Function
    function areaRectangle($width, $length){
        $result=$width*$length;
        return $result;
    }

    echo areaRectangle(3, 4)."</br>";

    //Call function from different file
    include_once ("function.php");
    echo mult(2,2)."</br>";

    //Some useful functions
    $a=2.2;

    ceil($a);   //result is 3, rounded up to next integer
    floor($a);  // result is 2 , rounded down to next integer
    round($a);  // result is 2, rounded down if less than 0.5, up >=0,5

    $x=2;
    $y=5;
    pow($x,$y); //2 result is 32  =2*2*2*2*2

?>